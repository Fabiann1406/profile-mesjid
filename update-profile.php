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

$name =
    trim($_POST['name'] ?? '');

$email =
    trim($_POST['email'] ?? '');

$phone =
    trim($_POST['phone'] ?? '');

$address =
    trim($_POST['address'] ?? '');


/*
|--------------------------------------------------------------------------
| VALIDASI
|--------------------------------------------------------------------------
*/

if (!$id) {

    die("ID donatur tidak ditemukan.");

}


if ($name === '') {

    die("Nama wajib diisi.");

}


if ($email === '') {

    die("Email wajib diisi.");

}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    die("Format email tidak valid.");

}


/*
|--------------------------------------------------------------------------
| UPDATE DATABASE
|--------------------------------------------------------------------------
*/

$stmt = $pdo->prepare("
    UPDATE donors
    SET
        name = ?,
        email = ?,
        phone = ?,
        address = ?
    WHERE id = ?
");


$stmt->execute([
    $name,
    $email,
    $phone,
    $address,
    $id
]);


/*
|--------------------------------------------------------------------------
| KEMBALI KE PROFILE
|--------------------------------------------------------------------------
*/

header("Location: profile.php");

exit;