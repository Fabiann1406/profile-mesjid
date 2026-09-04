<aside
    id="sidebar"
    class="
        fixed
        lg:sticky
        top-0
        left-0
        z-50

        w-72
        h-screen

        bg-[#073F37]
        text-white

        flex
        flex-col

        transform
        -translate-x-full
        lg:translate-x-0

        transition-transform
        duration-300
    "
>


    <!-- =====================================================
         LOGO
    ====================================================== -->

    <div
        class="
            h-20
            px-6
            flex
            items-center
            border-b
            border-white/10
            shrink-0
        "
    >

        <div class="flex items-center gap-3">


            <div
                class="
                    w-11
                    h-11
                    rounded-xl
                    bg-white
                    flex
                    items-center
                    justify-center
                "
            >

                <i
                    data-lucide="hand-heart"
                    class="
                        w-6
                        h-6
                        text-mosque-700
                    "
                ></i>

            </div>


            <div>

                <h1
                    class="
                        font-bold
                        text-lg
                    "
                >
                    Masjid Donasi
                </h1>

                <p
                    class="
                        text-xs
                        text-green-200
                    "
                >
                    Donatur Area
                </p>

            </div>

        </div>

    </div>


    <!-- =====================================================
         USER MINI PROFILE
    ====================================================== -->

    <div class="p-5">

        <div
            class="
                bg-white/10
                rounded-2xl
                p-4
            "
        >

            <div class="flex items-center gap-3">


                <div
                    class="
                        w-11
                        h-11
                        rounded-full

                        bg-green-100
                        text-mosque-700

                        flex
                        items-center
                        justify-center

                        font-bold
                        overflow-hidden
                    "
                >
                    <?php if (!empty($donor['profile_photo']) && file_exists($donor['profile_photo'])): ?>
                        <img src="<?= htmlspecialchars($donor['profile_photo']) ?>" alt="Profile" class="w-full h-full object-cover">
                    <?php else: ?>
                        <?= htmlspecialchars($initials); ?>
                    <?php endif; ?>
                </div>


                <div class="min-w-0">

                    <p
                        class="
                            font-semibold
                            truncate
                        "
                    >

                        <?= htmlspecialchars($donor['name']); ?>

                    </p>

                    <p
                        class="
                            text-xs
                            text-green-200
                            mt-0.5
                        "
                    >
                        Donatur
                    </p>

                </div>

            </div>

        </div>

    </div>


    <!-- =====================================================
         MENU
    ====================================================== -->

    <nav class="px-4">


        <p
            class="
                text-xs
                uppercase
                tracking-widest
                text-green-300
                px-4
                mb-3
            "
        >
            Menu
        </p>


        <!-- Dashboard -->

        <a
            href="profile.php"
            class="
                flex
                items-center
                gap-3

                px-4
                py-3.5

                rounded-xl

                bg-white
                text-mosque-800

                font-semibold

                shadow-sm
            "
        >

            <i
                data-lucide="user-round"
                class="w-5 h-5"
            ></i>

            Profil Saya

        </a>


        <!-- Informasi Akun -->

        <a
            href="#account"
            class="
                flex
                items-center
                gap-3

                px-4
                py-3.5

                rounded-xl

                text-green-100

                hover:bg-white/10

                transition
            "
        >

            <i
                data-lucide="settings-2"
                class="w-5 h-5"
            ></i>

            Informasi Akun

        </a>


    </nav>


    <!-- =====================================================
         BOTTOM AREA
    ====================================================== -->

    <div class="mt-auto p-5">


        <div
            class="
                rounded-2xl
                bg-[#0D5549]
                p-5
            "
        >

            <div class="flex items-center gap-2">

                <i
                    data-lucide="sparkles"
                    class="
                        w-5
                        h-5
                        text-yellow-300
                    "
                ></i>

                <p class="font-semibold">
                    Terus Berbagi
                </p>

            </div>


            <p
                class="
                    text-xs
                    text-green-100
                    leading-relaxed
                    mt-2
                "
            >

                Jadikan kebaikan sebagai bagian
                dari perjalanan hidup.

            </p>

        </div>

    </div>

</aside>