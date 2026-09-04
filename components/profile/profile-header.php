<section
    class="
        relative
        overflow-hidden

        rounded-3xl

        bg-mosque-950
        bg-gradient-to-br
        from-mosque-950
        to-mosque-900

        border
        border-gold-500/20

        text-white

        p-7
        lg:p-10

        mb-6

        shadow-sm
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

    <div class="relative z-10">


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

            <label
                for="profile_photo"
                class="
                    relative
                    group
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

                    cursor-pointer
                    overflow-hidden
                "
                title="Ganti Foto Profile"
            >

                <div id="avatar-preview" class="w-full h-full">
                    <?php if (!empty($donor['profile_photo']) && file_exists($donor['profile_photo'])): ?>
                        <img src="<?= htmlspecialchars($donor['profile_photo']) ?>" alt="Profile" class="w-full h-full object-cover">
                    <?php else: ?>
                        <div class="w-full h-full flex items-center justify-center">
                            <?= htmlspecialchars($initials); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                    <i data-lucide="camera" class="w-8 h-8 text-white"></i>
                </div>
            </label>


            <!-- Text -->

            <div>

                <p
                    class="
                        text-gold-500
                        text-sm
                        font-medium
                        tracking-wider
                        uppercase
                    "
                >
                    Assalamu'alaikum
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
                                text-gold-500
                            "
                        ></i>

                        Donatur

                    </span>


                    <span
                        class="
                            text-slate-300
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