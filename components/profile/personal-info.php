<section
    class="
        bg-mosque-900
        border-slate-700
        rounded-2xl

        border
        border-slate-200

        overflow-hidden

        mb-6
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
         HEADER
    ====================================================== -->

    <div
        class="
            p-6

            border-b
            border-slate-100

            flex
            flex-col
            sm:flex-row

            sm:items-center
            sm:justify-between

            gap-4
        "
    >


        <div>

            <h2
                class="
                    text-lg
                    font-bold
                    text-gold-500
                "
            >
                Informasi Pribadi
            </h2>


            <p
                class="
                    text-sm
                    text-white

                    mt-1
                "
            >
                Kelola informasi pribadi kamu.
            </p>

        </div>


        <!-- Edit Button -->

        <button
            type="button"
            onclick="enableEdit()"

            class="
                inline-flex
                items-center
                justify-center
                gap-2

                px-4
                py-2.5

                rounded-xl

                bg-gold-500

                text-mosque-700

                font-semibold

                hover:bg-mosque-100

                transition
            "
        >

            <i
                data-lucide="pencil"
                class="w-4 h-4"
            ></i>

            Edit Profil

        </button>

    </div>


    <!-- =====================================================
         FORM
    ====================================================== -->

    <form
        id="profileForm"
        action="update-profile.php"
        method="POST"
        enctype="multipart/form-data"
        class="p-6"
    >

        <input
            type="hidden"
            name="id"
            value="<?= $donor['id']; ?>"
        >

        <!-- Profile Photo Input (Hidden, triggered by avatar click) -->
        <input 
            type="file" 
            id="profile_photo" 
            name="profile_photo" 
            accept="image/*" 
            class="hidden" 
            onchange="previewPhoto(this)"
        >


        <div
            class="
                grid
                grid-cols-1
                md:grid-cols-2

                gap-6
            "
        >


            <!-- =================================================
                 NAME
            ================================================== -->

            <div>

                <label
                    class="
                        block

                        text-sm
                        font-semibold
                        text-gold-400

                        mb-2
                    "
                >
                    Nama Lengkap
                </label>


                <div class="relative">


                    <i
                        data-lucide="user-round"
                        class="
                            absolute
                            left-3
                            top-1/2

                            -translate-y-1/2

                            w-4
                            h-4

                            text-gold-500
                        "
                    ></i>


                    <input
                        type="text"

                        name="name"

                        value="<?= htmlspecialchars($donor['name']); ?>"

                        disabled

                        class="
                            profile-field

                            w-full

                            pl-10
                            pr-4

                            py-3

                            rounded-xl

                            border
                            border-slate-200

                            bg-slate-50

                            text-slate-700

                            outline-none

                            cursor-not-allowed

                            transition

                            focus:ring-2
                            focus:ring-mosque-200
                        "
                    >

                </div>

            </div>


            <!-- =================================================
                 EMAIL
            ================================================== -->

            <div>

                <label
                    class="
                        block

                        text-sm
                        font-semibold

                        text-gold-400

                        mb-2
                    "
                >
                    Email
                </label>


                <div class="relative">


                    <i
                        data-lucide="mail"
                        class="
                            absolute
                            left-3
                            top-1/2

                            -translate-y-1/2

                            w-4
                            h-4

                            text-gold-400
                        "
                    ></i>


                    <input
                        type="email"

                        name="email"

                        value="<?= htmlspecialchars($donor['email']); ?>"

                        disabled

                        class="
                            profile-field

                            w-full

                            pl-10
                            pr-4

                            py-3

                            rounded-xl

                            border
                            border-slate-200

                            bg-slate-50

                            text-slate-700

                            outline-none

                            cursor-not-allowed

                            transition

                            focus:ring-2
                            focus:ring-mosque-200
                        "
                    >

                </div>

            </div>


            <!-- =================================================
                 PHONE
            ================================================== -->

            <div>

                <label
                    class="
                        block

                        text-sm
                        font-semibold

                        text-gold-400

                        mb-2
                    "
                >
                    Nomor WhatsApp
                </label>


                <div class="relative">


                    <i
                        data-lucide="phone"
                        class="
                            absolute
                            left-3
                            top-1/2

                            -translate-y-1/2

                            w-4
                            h-4

                            text-gold-400
                        "
                    ></i>


                    <input
                        type="text"

                        name="phone"

                        value="<?= htmlspecialchars(
                            $donor['phone'] ?? ''
                        ); ?>"

                        disabled

                        class="
                            profile-field

                            w-full

                            pl-10
                            pr-4

                            py-3

                            rounded-xl

                            border
                            border-slate-200

                            bg-slate-50

                            text-slate-700

                            outline-none

                            cursor-not-allowed

                            transition
                        "
                    >

                </div>

            </div>


            <!-- =================================================
                 ADDRESS
            ================================================== -->

            <div>

                <label
                    class="
                        block

                        text-sm
                        font-semibold

                        text-gold-400

                        mb-2
                    "
                >
                    Alamat
                </label>


                <div class="relative">


                    <i
                        data-lucide="map-pin"
                        class="
                            absolute

                            left-3
                            top-4

                            w-4
                            h-4

                            text-gold-400
                        "
                    ></i>


                    <textarea
                        name="address"

                        rows="3"

                        disabled

                        class="
                            profile-field

                            w-full

                            pl-10
                            pr-4

                            py-3

                            rounded-xl

                            border
                            border-slate-200

                            bg-slate-50

                            text-slate-700

                            outline-none

                            resize-none

                            cursor-not-allowed

                            transition
                        "
                    ><?= htmlspecialchars(
                        $donor['address'] ?? ''
                    ); ?></textarea>

                </div>

            </div>

        </div>


        <!-- =====================================================
             SAVE AREA
        ====================================================== -->

        <div
            id="saveArea"

            class="
                hidden

                mt-6
                pt-6

                border-t
                border-slate-100

                flex
                justify-end

                gap-3
            "
        >


            <!-- Cancel -->

            <button
                type="button"

                onclick="cancelEdit()"

                class="
                    px-5
                    py-3

                    rounded-xl

                    border
                    border-slate-200

                    text-slate-600

                    font-semibold

                    bg-white
                  

                    transition
                "
            >

                Batal

            </button>


            <!-- Save -->

            <button
                type="submit"

                class="
                    inline-flex
                    items-center
                    gap-2

                    px-5
                    py-3

                    rounded-xl

                    bg-gold-500

                    text-black

                    font-semibold

                    shadow-sm

                    

                    transition
                "
            >

                <i
                    data-lucide="save"
                    class="w-4 h-4"
                ></i>

                Simpan Perubahan

            </button>

        </div>

    </form>

</section>