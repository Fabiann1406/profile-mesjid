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

        bg-mosque-900
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

 <!-- Ukiran Islami (Islamic Motif) Background -->
    <div
        class="
            absolute
            top-0
            right-0
            opacity-10
            pointer-events-none
        "
        style="width: 100%; height: 100%;"
    >
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMaxYMin slice">
            <defs>
                <pattern id="islamic-motif" width="100" height="100" patternUnits="userSpaceOnUse" patternTransform="scale(2)">
                    <path d="M50 0 L100 50 L50 100 L0 50 Z" fill="none" stroke="#D4AF37" stroke-width="1.5"/>
                    <circle cx="50" cy="50" r="30" fill="none" stroke="#D4AF37" stroke-width="1"/>
                    <path d="M20 20 L80 80 M20 80 L80 20" stroke="#D4AF37" stroke-width="0.5"/>
                    <path d="M50 20 L50 80 M20 50 L80 50" stroke="#D4AF37" stroke-width="0.5"/>
                    <polygon points="50,10 60,40 90,50 60,60 50,90 40,60 10,50 40,40" fill="none" stroke="#D4AF37" stroke-width="0.75"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#islamic-motif)" />
        </svg>
    </div>



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
                    bg-gold-500/10
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
                        text-gold-500
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
                        text-gold-400
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
                bg-mosque-950
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

                        bg-gold-500/10
                        text-gold-500
                        border
                        border-gold-500/30

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
                            text-gold-400
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
                text-gold-500/70
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

                bg-gold-500
                text-mosque-950

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
                bg-mosque-950
                border
                border-gold-500/20
                p-5
            "
        >

            <div class="flex items-center gap-2">

                <i
                    data-lucide="sparkles"
                    class="
                        w-5
                        h-5
                        text-gold-500
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