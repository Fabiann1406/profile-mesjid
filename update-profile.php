<?php

/*
|--------------------------------------------------------------------------
| DATABASE CONNECTION
|--------------------------------------------------------------------------
*/

$host = "localhost";
$dbname = "masjid_donasi";
$username = "root";
$password = "";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
} catch (PDOException $e) {
    die("Database tidak dapat terhubung.");
}

/*
|--------------------------------------------------------------------------
| CEK REQUEST
|--------------------------------------------------------------------------
*/

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: profile.php");
    exit;
}

/*
|--------------------------------------------------------------------------
| AMBIL DATA FORM
|--------------------------------------------------------------------------
*/

$id = $_POST['id'] ?? null;
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$address = trim($_POST['address'] ?? '');

if (!$id) die("ID donatur tidak ditemukan.");
if ($name === '') die("Nama wajib diisi.");
if ($email === '') die("Email wajib diisi.");
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) die("Format email tidak valid.");

/*
|--------------------------------------------------------------------------
| HANDLE FOTO PROFILE
|--------------------------------------------------------------------------
*/

$photoPath = null;
if (isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    
    // Validate image
    $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
    if (in_array($_FILES['profile_photo']['type'], $allowedTypes)) {
        $fileName = time() . '_' . basename($_FILES['profile_photo']['name']);
        $destPath = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['profile_photo']['tmp_name'], $destPath)) {
            $photoPath = $destPath;
        }
    }
}

/*
|--------------------------------------------------------------------------
| UPDATE DATABASE
|--------------------------------------------------------------------------
*/

try {
    if ($photoPath) {
        $stmt = $pdo->prepare("
            UPDATE donors
            SET name = ?, email = ?, phone = ?, address = ?, profile_photo = ?
            WHERE id = ?
        ");
        $stmt->execute([$name, $email, $phone, $address, $photoPath, $id]);
    } else {
        $stmt = $pdo->prepare("
            UPDATE donors
            SET name = ?, email = ?, phone = ?, address = ?
            WHERE id = ?
        ");
        $stmt->execute([$name, $email, $phone, $address, $id]);
    }
} catch (PDOException $e) {
    if (strpos($e->getMessage(), "Unknown column 'profile_photo'") !== false) {
        // Add the column dynamically if it is missing
        $pdo->exec("ALTER TABLE donors ADD COLUMN profile_photo VARCHAR(255) DEFAULT NULL");
        
        // Retry the update
        if ($photoPath) {
            $stmt = $pdo->prepare("UPDATE donors SET name = ?, email = ?, phone = ?, address = ?, profile_photo = ? WHERE id = ?");
            $stmt->execute([$name, $email, $phone, $address, $photoPath, $id]);
        } else {
            $stmt = $pdo->prepare("UPDATE donors SET name = ?, email = ?, phone = ?, address = ? WHERE id = ?");
            $stmt->execute([$name, $email, $phone, $address, $id]);
        }
    } else {
        die("Error updating profile: " . $e->getMessage());
    }
}

/*
|--------------------------------------------------------------------------
| UPDATE SESSION DATA
|--------------------------------------------------------------------------
*/

if (isset($_SESSION['user'])) {
    $_SESSION['user']['nama'] = $name;
    if ($photoPath) {
        $_SESSION['user']['profile_photo'] = $photoPath;
    }
}

/*
|--------------------------------------------------------------------------
| KEMBALI KE PROFILE
|--------------------------------------------------------------------------
*/

header("Location: profile.php");
exit;