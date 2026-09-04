<header
    class="
        h-20
        bg-white
        border-b
        border-slate-200

        flex
        items-center
        justify-between

        px-5
        lg:px-8

        sticky
        top-0
        z-30
    "
>


    <!-- LEFT -->

    <div class="flex items-center gap-4">


        <!-- Mobile Menu -->

        <button
            id="menuButton"
            class="
                lg:hidden

                w-10
                h-10

                rounded-xl

                bg-slate-50

                flex
                items-center
                justify-center

                hover:bg-slate-100

                transition
            "
        >

            <i
                data-lucide="menu"
                class="w-5 h-5"
            ></i>

        </button>


        <div>

            <p
                class="
                    text-xs
                    text-slate-400
                "
            >
                Dashboard Donatur
            </p>

            <h2
                class="
                    text-lg
                    font-bold
                "
            >
                Profil Saya
            </h2>

        </div>

    </div>


    <!-- RIGHT -->

    <div class="flex items-center gap-3">


        <!-- Notification -->

        <button
            class="
                relative

                w-10
                h-10

                rounded-xl

                bg-slate-50

                flex
                items-center
                justify-center

                hover:bg-slate-100

                transition
            "
        >

            <i
                data-lucide="bell"
                class="
                    w-5
                    h-5
                    text-slate-600
                "
            ></i>


            <span
                class="
                    absolute
                    top-2
                    right-2

                    w-2
                    h-2

                    rounded-full

                    bg-red-500
                "
            ></span>

        </button>


        <!-- Avatar -->

        <div
            class="
                w-10
                h-10

                rounded-xl

                bg-mosque-100
                text-mosque-700

                flex
                items-center
                justify-center

                font-bold
            "
        >

            <?= htmlspecialchars($initials); ?>

        </div>

    </div>

</header>