<section
    class="
        relative
        overflow-hidden

        rounded-3xl

        bg-[#0B594B]

        text-white

        p-7
        lg:p-10

        mb-6

        shadow-sm
    "
>


    <!-- Decorative Circle -->

    <div
        class="
            absolute
            -right-20
            -top-32

            w-96
            h-96

            rounded-full

            border-[55px]

            border-white/5
        "
    ></div>


    <div
        class="
            absolute
            -right-10
            bottom-[-180px]

            w-80
            h-80

            rounded-full

            border-[40px]

            border-white/5
        "
    ></div>


    <div class="relative">


        <div
            class="
                flex
                flex-col
                md:flex-row

                md:items-center

                gap-6
            "
        >


            <!-- Avatar -->

            <div
                class="
                    w-24
                    h-24

                    rounded-3xl

                    bg-white

                    text-mosque-700

                    flex
                    items-center
                    justify-center

                    text-3xl
                    font-extrabold

                    shadow-lg

                    shrink-0
                "
            >

                <?= htmlspecialchars($initials); ?>

            </div>


            <!-- Text -->

            <div>

                <p
                    class="
                        text-green-200
                        text-sm
                    "
                >
                    Assalamu'alaikum 👋
                </p>


                <h1
                    class="
                        text-3xl
                        lg:text-4xl

                        font-extrabold

                        mt-1
                    "
                >

                    <?= htmlspecialchars($donor['name']); ?>

                </h1>


                <div
                    class="
                        flex
                        flex-wrap
                        items-center
                        gap-3

                        mt-3
                    "
                >

                    <span
                        class="
                            inline-flex
                            items-center
                            gap-2

                            bg-white/10

                            rounded-full

                            px-3
                            py-1.5

                            text-sm
                        "
                    >

                        <i
                            data-lucide="heart"
                            class="
                                w-4
                                h-4
                                text-yellow-300
                            "
                        ></i>

                        Donatur

                    </span>


                    <span
                        class="
                            text-green-200
                            text-sm
                        "
                    >

                        Member sejak
                        <?= date(
                            'Y',
                            strtotime($donor['created_at'])
                        ); ?>

                    </span>

                </div>

            </div>

        </div>

    </div>

</section>