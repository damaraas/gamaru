<script setup>
import { ref } from "vue";

const testimonials = [
    {
        text: "“Saya kuliah sambil kerja part-time, jadi butuh jadwal fleksibel. Untungnya di GAMARU bisa pilih belajar online. Tutornya menyesuaikan waktu saya, dan sekarang kemampuan Mandarin saya jauh lebih lancar untuk kebutuhan kuliah dan kerja.”",
        name: "Kevin",
        role: "Mahasiswa – Jakarta",
    },
    {
        text: "“Anak saya dulu sering kesulitan memahami kosakata Mandarin, cepat bosan, dan kurang percaya diri. Setelah ikut les di GAMARU, belajarnya jadi lebih menyenangkan karena banyak aktivitas interaktif. Sekarang dia malah semangat setiap kali ada jadwal les!”",
        name: "Bu Christian",
        role: "Orang Tua Siswa – Tangerang",
    },
    {
        text: "“Saya ikut kelas persiapan HSK 3 di GAMARU. Gurunya sabar banget dan cara mengajarnya jelas. Latihan soal dan strategi belajarnya bikin saya lebih siap. Hasilnya, nilai HSK saya naik signifikan!”",
        name: "Felita",
        role: "Siswa SMA – Jakarta",
    },
    {
        text: "“Pekerjaan saya menuntut komunikasi dengan supplier dari China. Les di GAMARU benar-benar membantu, karena gurunya fokus ngajarin percakapan bisnis yang langsung bisa dipakai di kerjaan sehari-hari.”",
        name: "Andre",
        role: "Supervisor Logistik – Surabaya",
    },
    {
        text: "“Di kantor saya sering ketemu klien dari Tiongkok, tapi dulu agak minder karena nggak lancar bahasa Mandarin. Setelah ikut les privat di GAMARU, saya jadi lebih percaya diri presentasi. Bahkan atasan saya bilang komunikasi saya sekarang jauh lebih baik.”",
        name: "Stephanie",
        role: "Staff Marketing – Jakarta",
    },
    {
        text: "“Anak saya cepat bosan kalau belajar. Tapi tutor GAMARU pintar cari cara supaya kelasnya interaktif. Ada latihan percakapan, game, bahkan nonton video. Sekarang anak saya jadi lebih berani ngobrol dalam bahasa Mandarin.”",
        name: "Celine",
        role: "Orang Tua Siswa – Surabaya",
    },
];

const adminImages = [
    {
        src: "/img/homepage/manTestimoni.webp",
        alt: "Foto pria memberikan testimoni",
    },
    {
        src: "/img/homepage/Admin Gamaru 4 (Transparan).webp",
        alt: "Foto Admin Gamaru",
    },
    {
        src: "/img/homepage/siswisma.webp",
        alt: "Foto siswi SMA memberikan testimoni",
    },
    {
        src: "/img/homepage/supervisorlogistic.webp",
        alt: "Foto Supervisor Logistic",
    },
    {
        src: "/img/homepage/staffmarketing.webp",
        alt: "Foto Staff Marketing",
    },
    {
        src: "/img/homepage/parent.webp",
        alt: "Foto orang tua memberikan testimoni",
    },
];

const current = ref(0);

const next = () => {
    current.value = (current.value + 1) % testimonials.length;
};
</script>

<template>
    <section
        id="testimoni"
        class="bg-[#F9F905] font-sans py-16 relative overflow-hidden hidden md:block"
    >
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-12">
                <h2
                    class="text-2xl md:text-4xl font-bold text-center leading-[100%] tracking-[0]"
                >
                    Testimoni
                </h2>
                <p class="font-medium text-4xl leading-[100%] tracking-[0]">
                    Apa Kata Siswa dan Orang Tua?
                </p>
            </div>
            <div class="flex flex-col md:flex-row justify-between mt-15">
                <div
                    class="relative w-full flex justify-center items-end mb-8 md:mb-0 overflow-visible"
                >
                    <div
                        class="absolute w-[300px] h-[300px] bg-[#FE3231] rounded-full -bottom-18 left-1/2 -translate-x-1/2 z-0"
                    ></div>
                    <img
                        :src="adminImages[current].src"
                        :alt="adminImages[current].alt"
                        alt="Admin"
                        class="absolute -bottom-18 z-10 w-[1000px] md:w-3xl object-contain aspect-[3/2] translate-y-4"
                    />
                </div>
                <div class="w-full transition-all duration-300">
                    <div class="min-h-[200px]">
                        <blockquote
                            class="font-medium text-[22px] leading-[100%] tracking-[0] text-justify"
                        >
                            {{ testimonials[current].text }}
                        </blockquote>

                        <p
                            class="mt-4 font-bold text-[22px] leading-[100%] tracking-[0]"
                        >
                            <span class="font-semibold text-black">
                                {{ testimonials[current].name }} </span
                            >, {{ testimonials[current].role }}
                        </p>
                    </div>

                    <div
                        class="flex items-center justify-center md:justify-center space-x-6"
                    >
                        <button
                            @click="
                                current =
                                    (current - 1 + testimonials.length) %
                                    testimonials.length
                            "
                            :disabled="current === 0"
                            class="w-8 h-8 flex items-center justify-center rounded-full cursor-pointer disabled:opacity-40 disabled:cursor-not-allowed"
                        >
                            <img
                                src="../../../../public/img/homepage/arrow-right.webp"
                                alt="arrow left"
                                class="rotate-180"
                            />
                        </button>

                        <div class="flex space-x-2">
                            <span
                                v-for="(t, i) in testimonials"
                                :key="i"
                                class="w-2 h-2 rounded-full transition-all"
                                :class="
                                    i === current ? 'bg-black' : 'bg-black/40'
                                "
                            ></span>
                        </div>

                        <button
                            @click="next"
                            :disabled="current === testimonials.length - 1"
                            class="w-8 h-8 flex items-center justify-center rounded-full transition-opacity cursor-pointer disabled:opacity-40 disabled:cursor-not-allowed"
                        >
                            <img
                                src="../../../../public/img/homepage/arrow-right.webp"
                                alt="arrow right"
                            />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONI MOBILE -->
    <section
        id="testimoni-mobile"
        class="bg-[#F9F905] font-sans py-12 px-6 md:hidden overflow-hidden"
    >
        <div class="text-center mb-8">
            <h2 class="text-[22px] font-bold leading-tight">Testimoni</h2>
            <p class="text-[18px] font-medium leading-tight mt-1">
                Apa Kata Siswa dan Orang Tua?
            </p>
        </div>

        <div class="min-h-[180px]">
            <blockquote class="text-[15px] leading-[150%] text-justify">
                {{ testimonials[current].text }}
            </blockquote>

            <p class="mt-3 font-semibold text-[14px]">
                {{ testimonials[current].name }},
                {{ testimonials[current].role }}
            </p>
        </div>

        <div class="flex items-center justify-start space-x-4 mt-2 pl-1">
            <button
                @click="
                    current =
                        (current - 1 + testimonials.length) %
                        testimonials.length
                "
                :disabled="current === 0"
                class="w-7 h-7 flex items-center justify-center rounded-full cursor-pointer disabled:opacity-40 disabled:cursor-not-allowed"
            >
                <img
                    src="../../../../public/img/homepage/arrow-right.webp"
                    alt="arrow left"
                    class="rotate-180"
                />
            </button>

            <div class="flex items-center space-x-2">
                <span
                    v-for="(t, i) in testimonials"
                    :key="i"
                    class="w-2 h-2 rounded-full transition-all"
                    :class="i === current ? 'bg-black' : 'bg-black/40'"
                ></span>
            </div>

            <button
                @click="next"
                :disabled="current === testimonials.length - 1"
                class="w-7 h-7 flex items-center justify-center rounded-full cursor-pointer disabled:opacity-40 disabled:cursor-not-allowed"
            >
                <img
                    src="../../../../public/img/homepage/arrow-right.webp"
                    alt="arrow right"
                />
            </button>
        </div>

        <div class="relative w-full mt-6">
            <div
                class="relative w-full min-h-[260px] overflow-visible flex justify-end items-end"
            >
                <div
                    class="absolute -bottom-12 right-0 w-[280px] h-[280px] bg-[#FE3231] rounded-full z-0 translate-y-3"
                ></div>
                <img
                    :src="adminImages[current].src"
                    :alt="adminImages[current].alt"
                    alt="Logo Admin Gamaru"
                    class="absolute -bottom-12 -right-20 max-w-none w-[500px] z-10 translate-x-7 translate-y-1 object-contain aspect-[3/2]"
                />
            </div>
        </div>
    </section>
</template>
