<section
    id="account"

    class="
        bg-white

        rounded-2xl

        border
        border-slate-200

        p-6

        mb-6
    "
>


    <div
        class="
            flex
            items-start
            gap-4
        "
    >


        <!-- ICON -->

        <div
            class="
                w-12
                h-12

                rounded-xl

                bg-mosque-50

                flex
                items-center
                justify-center

                shrink-0
            "
        >

            <i
                data-lucide="shield-check"
                class="
                    w-6
                    h-6

                    text-mosque-600
                "
            ></i>

        </div>


        <!-- CONTENT -->

        <div class="flex-1">


            <h2
                class="
                    text-lg
                    font-bold
                "
            >
                Status Akun
            </h2>


            <p
                class="
                    text-sm
                    text-slate-400

                    mt-1
                "
            >
                Informasi dasar akun donatur.
            </p>


            <!-- Status -->

            <div
                class="
                    mt-5

                    grid
                    grid-cols-1
                    sm:grid-cols-2

                    gap-4
                "
            >


                <!-- STATUS AKUN -->

                <div
                    class="
                        p-4

                        rounded-xl

                        bg-slate-50
                    "
                >

                    <p
                        class="
                            text-xs
                            text-slate-400
                            uppercase
                            tracking-wide
                        "
                    >
                        Status Akun
                    </p>


                    <div
                        class="
                            flex
                            items-center
                            gap-2

                            mt-2
                        "
                    >

                        <span
                            class="
                                w-2
                                h-2

                                rounded-full

                                bg-green-500
                            "
                        ></span>


                        <span
                            class="
                                font-semibold
                                text-mosque-700
                            "
                        >
                            Aktif
                        </span>

                    </div>

                </div>


                <!-- MEMBER -->

                <div
                    class="
                        p-4

                        rounded-xl

                        bg-slate-50
                    "
                >

                    <p
                        class="
                            text-xs
                            text-slate-400
                            uppercase
                            tracking-wide
                        "
                    >
                        Terdaftar Sejak
                    </p>


                    <p
                        class="
                            font-semibold
                            mt-2
                        "
                    >

                        <?= date(
                            'd F Y',
                            strtotime($donor['created_at'])
                        ); ?>

                    </p>

                </div>


            </div>

        </div>

    </div>

</section>