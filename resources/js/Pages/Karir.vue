<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <AppLayout>
        <!-- Head -->
        <Head>
            <title>Karir – Gamaru | Bergabung Menjadi Tutor Mandarin</title>
            <meta
                name="description"
                content="Bergabunglah sebagai tutor Mandarin di Gamaru! Jadwal fleksibel, rate kompetitif, dukungan penuh, dan kesempatan berkembang untuk karier profesional Anda."
            />
            <meta
                name="keywords"
                content="Karir Gamaru, lowongan tutor Mandarin, les privat Mandarin, tutor Mandarin Indonesia, peluang mengajar Mandarin"
            />
            <meta name="author" content="Gamaru" />
            <meta
                property="og:title"
                content="Karir – Gamaru | Lowongan Tutor Mandarin"
            />
            <meta
                property="og:description"
                content="Jadilah bagian dari tutor terbaik di Gamaru! Dapatkan rate kompetitif, dukungan penuh, dan kesempatan berkembang."
            />
            <meta property="og:image" content="/img/karier/tutor.webp" />
            <meta property="og:type" content="website" />
            <meta property="og:url" content="/karier" />
            <meta
                name="twitter:description"
                content="Daftar menjadi tutor Mandarin di Gamaru dan dapatkan banyak benefit!"
            />
            <meta name="twitter:image" content="/img/karier/tutor.webp" />
        </Head>

        <!-- Hero -->
        <section
            class="relative text-center py-6 md:py-9 bg-[#F9F905] overflow-hidden"
        >
            <div class="relative max-w-5xl md:max-w-7xl mx-auto px-4 z-10">
                <h1
                    class="text-[25px] md:text-6xl text-[#010101] font-bold mb-4 leading-tight text-center font-sans"
                >
                     Mari Bergabung Bersama Tutor Mandarin Terbaik di Gamaru!
                </h1>
                <div class="flex items-center gap-8 max-w-5xl mx-auto">
                    <img
                        src="../../../../public/img/karier/Maskot-Gamaru-02.webp"
                        alt="Maskot Panda Gamaru 2"
                        class="w-60"
                    />

                    <div class="flex flex-col justify-center items-center py-4">
                        <p
                            class="text-[#010101] text-[16px] md:text-2xl mb-1 font-medium text-justify font-sans"
                        >
                            Gamaru merupakan layanan les privat Mandarin yang
                            berkomitmen menghadirkan pembelajaran terbaik.
                        </p>
                        <p
                            class="text-[#010101] text-[16px] md:text-2xl font-medium text-justify font-sans"
                        >
                            Kami mencari tutor yang bersemangat dan kompeten
                            untuk membimbing siswa dari berbagai jenjang,
                            sekaligus memberi dampak nyata bagi masa depan
                            mereka.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefit Join Gamaru -->
        <section class="py-14 md:py-16 bg-white relative">
            <h2
                class="text-center text-3xl md:text-5xl font-bold text-[#010101] mb-12 font-sans"
            >
                Benefit Join Gamaru
            </h2>

            <div class="max-w-6xl mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div
                        class="bg-[#FE3231] p-6 rounded-2xl text-center text-white shadow-md"
                    >
                        <img
                            src="../../../../public/img/karier/icon-jadwal.webp"
                            alt="Jadwal fleksibel"
                            class="w-20 mx-auto mb-5 mt-3"
                        />
                        <h3 class="font-bold text-xl mb-2 font-sans">
                            Jadwal fleksibel
                        </h3>
                        <p class="font-sans">
                            Jadwal kelas dapat disesuaikan dengan ketersediaan
                            tutor dan dapat memilih area.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="bg-[#FE3231] p-6 rounded-2xl text-center text-white shadow-md"
                    >
                        <img
                            src="../../../../public/img/karier/icon-rate.webp"
                            alt="Rate kompetitif"
                            class="w-20 mx-auto mb-4"
                        />
                        <h3 class="font-bold text-xl mb-2 font-sans">
                            Rate kompetitif
                        </h3>
                        <p class="font-sans">
                            Penghasilan menarik sesuai pengalaman dan
                            kualifikasi.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="bg-[#FE3231] p-6 rounded-2xl text-center text-white shadow-md"
                    >
                        <img
                            src="../../../../public/img/karier/icon-dukungan.webp"
                            alt="Dukungan penuh"
                            class="w-20 mx-auto mb-5 mt-4"
                        />
                        <h3 class="font-bold text-xl mb-2 font-sans">
                            Dukungan penuh
                        </h3>
                        <p class="font-sans">
                            Akses ke materi ajar, training, dan komunitas tutor.
                        </p>
                    </div>
                </div>

                <img
                    src="../../../../public/img/karier/Maskot-Gamaru-03.webp"
                    alt="Maskot"
                    class="hidden md:block w-70 absolute left-10 top-[78%] -translate-y-1/2"
                />

                <div
                    class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12 md:pl-48 md:pr-48"
                >
                    <!-- Card 4 -->
                    <div
                        class="bg-[#FE3231] p-6 rounded-2xl text-center text-white shadow-md"
                    >
                        <img
                            src="../../../../public/img/karier/icon-exposure.webp"
                            alt="Exposure besar"
                            class="w-20 mx-auto mb-4"
                        />
                        <h3 class="font-bold text-xl mb-2 font-sans">
                            Exposure besar
                        </h3>
                        <p class="font-sans">
                            Tampil di website Gamaru sebagai bagian dari “Best
                            Tutor”.
                        </p>
                    </div>

                    <!-- Card 5 -->
                    <div
                        class="bg-[#FE3231] p-6 rounded-2xl text-center text-white shadow-md"
                    >
                        <img
                            src="../../../../public/img/karier/icon-kembang.webp"
                            alt="Kesempatan berkembang"
                            class="w-20 mx-auto mb-4"
                        />
                        <h3 class="font-bold text-xl mb-2 font-sans">
                            Kesempatan berkembang
                        </h3>
                        <p class="font-sans">
                            Pengalaman mengajar yang bermanfaat untuk karier
                            profesional Anda.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kualifikasi yang Dibutuhkan -->
        <section class="py-16 md:py-16 relative overflow-hidden font-sans">
            <h2
                class="text-center text-3xl md:text-5xl font-bold text-[#010101] mb-12 font-sans"
            >
                Kualifikasi yang Dibutuhkan
            </h2>

            <div
                class="relative max-w-6xl mx-auto px-6 py-8 bg-[#F9F905] rounded-2xl grid grid-cols-1 md:grid-cols-[1.4fr_1fr] gap-4 shadow-md"
            >
                <!-- List Kualifikasi -->
                <ul
                    class="space-y-2 text-[16px] md:text-xl font-medium text-[#010101] leading-relaxed z-10 font-sans"
                >
                    <li class="flex items-center gap-3">
                        <img
                            src="../../../../public/img/karier/check.webp"
                            class="w-9"
                        />
                        Diutamakan bagi yang berdomisili di jabodetabek
                        (Jakarta, Bogor, Depok, Tangerang dan Bekasi)
                    </li>

                    <li class="flex items-center gap-3">
                        <img
                            src="../../../../public/img/karier/check.webp"
                            class="w-9"
                        />
                        Mahasiswa tingkat akhir atau lulusan jurusan Mandarin.
                    </li>

                    <li class="flex items-center gap-3">
                        <img
                            src="../../../../public/img/karier/check.webp"
                            class="w-9"
                        />
                        Memiliki pengalaman mengajar menjadi nilai plus.
                    </li>

                    <li class="flex items-center gap-3">
                        <img
                            src="../../../../public/img/karier/check.webp"
                            class="w-9"
                        />
                        Komunikatif, sabar, dan bisa mengajar sesuai level siswa
                        (anak, remaja, hingga dewasa).
                    </li>

                    <li class="flex items-center gap-3">
                        <img
                            src="../../../../public/img/karier/check.webp"
                            class="w-9"
                        />
                        <span>
                            <b>Poin plus</b>, memiliki sertifikat HSK atau
                            pengalaman belajar/tinggal di luar negeri.
                        </span>
                    </li>
                </ul>

                <!-- Gambar Tutor -->
                <div
                    class="relative flex flex-col justify-center items-center z-20"
                >
                    <!-- Element dekorasi -->
                    <img
                        src="../../../../public/img/karier/element.webp"
                        alt=""
                        class="absolute right-10 -bottom-28 w-[260px] md:w-[300px] rotate-[7.53 deg]"
                    />

                    <!-- Tutor -->
                    <img
                        src="../../../../public/img/karier/tutor.webp"
                        alt="Tutor Mandarin"
                        class="w-[260px] md:w-[360px] absolute -bottom-8"
                    />
                </div>
            </div>
        </section>

        <!-- Apa saja yang perlu dipersiapkan -->
        <section class="py-16 md:py-16 relative overflow-hidden font-sans">
            <h2
                class="text-center text-3xl md:text-5xl font-bold text-[#010101] mb-12 font-sans"
            >
                Apa Saja yang Perlu Disiapkan?
            </h2>

            <div
                class="relative max-w-6xl mx-auto px-6 py-8 bg-[#FE3231] rounded-2xl grid grid-cols-1 md:grid-cols-[1fr_1.4fr] gap-4 shadow-md"
            >
                <!-- Gambar Tutor -->
                <div
                    class="relative flex flex-col justify-center items-center z-20"
                >
                    <!-- Element dekorasi -->
                    <img
                        src="../../../../public/img/karier/element-2.webp"
                        alt=""
                        class="absolute right-18 -bottom-28 w-[260px] md:w-[300px] rotate-[15.05deg]"
                    />

                    <!-- Tutor -->
                    <img
                        src="../../../../public/img/karier/tutor-2.webp"
                        alt="Tutor Mandarin"
                        class="w-[260px] md:w-[330px] absolute right-20 -bottom-8"
                    />
                </div>

                <!-- List Kualifikasi -->
                <ul
                    class="space-y-2 text-[16px] md:text-xl font-medium text-white leading-relaxed z-10 font-sans"
                >
                    <li class="flex items-center gap-3">
                        Agar bisa bergabung sebagai tutor Mandarin di Gamaru,
                        cukup siapkan:
                    </li>

                    <li class="flex items-center gap-3">
                        <img
                            src="../../../../public/img/karier/check.webp"
                            class="w-9"
                        />
                        CV Terbaru.
                    </li>

                    <li class="flex items-center gap-3">
                        <img
                            src="../../../../public/img/karier/check.webp"
                            class="w-9"
                        />
                        Foto formal/profesional.
                    </li>

                    <li class="flex items-center gap-3">
                        <img
                            src="../../../../public/img/karier/check.webp"
                            class="w-9"
                        />
                        Portofolio pengalaman mengajar
                    </li>

                    <li class="flex items-center gap-3">
                        <img
                            src="../../../../public/img/karier/check.webp"
                            class="w-9"
                        />
                        <span>Sertifikat HSK(opsional) </span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 md:py-16 text-center font-sans">
            <div class="mx-auto">
                <h2
                    class="text-3xl md:text-2xl font-bold leading-tight mb-6 font-sans"
                >
                    Tertarik jadi bagian dari Gamaru?
                </h2>

                <p class="text-lg md:text-2xl mb-6 font-bold font-sans">
                    👉 Kirim lamaran anda sekarang dan mulai menjadi bagian dari
                    kami!
                </p>

                <a
                    href="https://wa.me/6285712230349"
                    class="bg-[#08CB00] w-[314px] h-[60px] rounded-[9px] inline-flex items-center justify-center text-white font-sans font-bold text-xl shadow-[0px_4px_9px_0px_rgba(0,0,0,0.25)] px-[13px] py-[9px] mx-auto hover:bg-green-600"
                >
                    Apply Now
                </a>
            </div>
        </section>
    </AppLayout>
</template>
