<section
    class="
        bg-white

        rounded-2xl

        border
        border-slate-200

        overflow-hidden

        mb-6
    "
>


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
                "
            >
                Informasi Pribadi
            </h2>


            <p
                class="
                    text-sm
                    text-slate-400

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

                bg-mosque-50

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
        action="update-profile.php"
        method="POST"

        class="p-6"
    >

        <input
            type="hidden"
            name="id"
            value="<?= $donor['id']; ?>"
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

                        text-slate-700

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

                            text-slate-400
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

                        text-slate-700

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

                            text-slate-400
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

                        text-slate-700

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

                            text-slate-400
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

                        text-slate-700

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

                            text-slate-400
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

                    hover:bg-slate-50

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

                    bg-mosque-600

                    text-white

                    font-semibold

                    shadow-sm

                    hover:bg-mosque-700

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