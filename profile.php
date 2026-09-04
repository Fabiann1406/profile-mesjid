<?php

/*
|--------------------------------------------------------------------------
| DATABASE
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

    $pdo->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );

} catch (PDOException $e) {

    die("Database tidak dapat terhubung.");

}


/*
|--------------------------------------------------------------------------
| AMBIL DATA DONATUR
|--------------------------------------------------------------------------
|
| Untuk sementara kita menggunakan id 1.
| Nantinya backend dapat menggantinya dengan
| id user dari session login.
|
*/

$donorId = 1;

$stmt = $pdo->prepare("
    SELECT *
    FROM donors
    WHERE id = ?
    LIMIT 1
");

$stmt->execute([$donorId]);

$donor = $stmt->fetch();


if (!$donor) {

    die("Data donatur tidak ditemukan.");

}


/*
|--------------------------------------------------------------------------
| INITIAL NAMA
|--------------------------------------------------------------------------
*/

$initials = strtoupper(
    substr($donor['name'], 0, 2)
);

?>

<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Profil Donatur | Masjid Muqarramah
    </title>


    <!-- Tailwind CSS -->

    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Tailwind Configuration -->

    <script>

        tailwind.config = {

            theme: {

                extend: {

                    colors: {

                        mosque: {
                            50: '#F5F8F6',
                            100: '#E6EFEA',
                            200: '#C2D6CA',
                            300: '#94B8A6',
                            400: '#61967E',
                            500: '#3D775E',
                            600: '#2A5D47',
                            700: '#204A39',
                            800: '#173629',
                            900: '#10251C',
                            950: '#07120D'
                        },

                        cream: '#FDF9EF',

                        gold: {
                            400: '#F9D868',
                            500: '#D4AF37',
                            600: '#AA8C2C',
                            700: '#80681B'
                        }

                    }

                }

            }

        }

    </script>


    <!-- Lucide Icons -->

    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        .islamic-pattern {
            background-color: #fdfaf2;
            background-image:
                radial-gradient(#d7e5d8 1px, transparent 1px);
            background-size: 22px 22px;
        }
    </style>
</head>


<body class="islamic-pattern text-slate-800">


<div class="min-h-screen flex">


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <?php include "components/profile/sidebar.php"; ?>


    <!-- Overlay Mobile -->

    <div
        id="overlay"
        class="
            fixed
            inset-0
            bg-black/50
            z-40
            hidden
            lg:hidden
        "
    ></div>


    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->

    <div class="flex-1 min-w-0">


        <!-- Navbar -->

        <?php include "components/profile/navbar.php"; ?>


        <!-- Content -->

        <main
            class="
                max-w-7xl
                mx-auto
                px-5
                py-6
                lg:px-8
                lg:py-8
            "
        >


            <!-- Profile Header -->

            <?php include "components/profile/profile-header.php"; ?>


            <!-- Personal Information -->

            <?php include "components/profile/personal-info.php"; ?>


            <!-- Account Information -->

            <?php include "components/profile/account-info.php"; ?>


            <!-- Footer -->

            <footer
                class="
                    text-center
                    py-8
                    text-sm
                    text-mosque-950
                "
            >

                <p>
                    © 2026 Masjid Muqarramah
                </p>

                <p class="mt-1">
                    Bersama Menebar Kebaikan
                </p>

            </footer>


        </main>

    </div>

</div>


<!-- =====================================================
     JAVASCRIPT
====================================================== -->

<script>

    lucide.createIcons();


    /*
    |--------------------------------------------------------------------------
    | MOBILE SIDEBAR
    |--------------------------------------------------------------------------
    */

    const menuButton =
        document.getElementById("menuButton");

    const sidebar =
        document.getElementById("sidebar");

    const overlay =
        document.getElementById("overlay");


    menuButton.addEventListener("click", function () {

        sidebar.classList.remove("-translate-x-full");

        overlay.classList.remove("hidden");

    });


    overlay.addEventListener("click", function () {

        sidebar.classList.add("-translate-x-full");

        overlay.classList.add("hidden");

    });


    /*
    |--------------------------------------------------------------------------
    | EDIT PROFILE
    |--------------------------------------------------------------------------
    */

    function enableEdit() {

        const fields =
            document.querySelectorAll(".profile-field");

        const saveArea =
            document.getElementById("saveArea");


        fields.forEach(function(field) {

            field.disabled = false;

            field.classList.remove(
                "bg-slate-50",
                "cursor-not-allowed"
            );

            field.classList.add(
                "bg-white",
                "border-mosque-400"
            );

        });


        saveArea.classList.remove("hidden");

    }


    /*
    |--------------------------------------------------------------------------
    | CANCEL EDIT
    |--------------------------------------------------------------------------
    */

    function cancelEdit() {

        window.location.reload();

    }

    /*
    |--------------------------------------------------------------------------
    | PREVIEW PHOTO & ENABLE EDIT
    |--------------------------------------------------------------------------
    */

    function previewPhoto(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const avatarPreview = document.getElementById('avatar-preview');
                if (avatarPreview) {
                    avatarPreview.innerHTML = '<img src="' + e.target.result + '" alt="Profile" class="w-full h-full object-cover">';
                }
            }
            reader.readAsDataURL(input.files[0]);
            enableEdit();
        }
    }

</script>


</body>

</html>