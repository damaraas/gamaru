<script setup></script>

<template>
    <div
        class="flex flex-col lg:flex-row px-5 md:px-10 w-full py-3 bg-primary font-poppins"
    >
        <!-- LEFT CONTENT -->
        <div class="w-full lg:w-7/12 space-y-6 text-left py-5 px-4 lg:py-6 lg:px-10">
            <h1
                class="text-4xl font-bold leading-snug sm:leading-tight text-gray-900 font-onest"
            >
                Belajar Mandarin Seru untuk Anak Usia Dini
            </h1>
            <p class="ext-black text-xs sm:text-sm md:text-base font-medium">
                Belajar bahasa asing sejak kecil bisa jadi menyenangkan loh
                Moms! Program Little Learners (4-12 tahun) dirancang untuk
                anak-anak yang baru mulai mengenal Mandarin lewat lagu,
                permainan, flashcard, hingga perkenalan Hanzi sederhana.
            </p>
            <p class="text-black text-xs sm:text-sm md:text-base font-medium text-justify">
                Metode fun learning membuat anak lebih cepat menangkap kosakata
                sehari-hari, membangun kepercayaan diri untuk berbicara, serta
                menumbuhkan rasa ingin tahu terhadap budaya baru.
            </p>
            <p
                class="text-black text-xs sm:text-sm md:text-base font-medium mt-0 text-justify"
            >
                Yuk mulai les privat Mandarin anak bersama Gamaru sekarang, biar
                si kecil tumbuh percaya diri dan siap menghadapi dunia global.
            </p>
        </div>

        <!-- RIGHT CONTENT -->
        <div class="w-full lg:w-5/12 flex justify-center relative mt-6 lg:mt-0">
            <div class="relative">
                <!-- Polygon Background -->
                <div
                    class="absolute top-10 lg:top-[3.5rem] left-[12rem] lg:left-[12rem] -translate-x-[9.8rem] xl:left-[13rem] xl:top-[3.3rem] bg-[#ffba09] z-0 rounded-full w-full max-w-[245px] lg:max-w-[318px] xl:max-w-[340px] aspect-square"
                ></div>
                <!-- Gambar -->
                <img
                    :src="'/img/Adult/Maskot Gamaru-18.webp'"
                    alt="Student"
                    class="w-full max-w-[380px] lg:max-w-[440px] xl:max-w-[465px] rounded-lg relative left-3 sm:left-3"
                />
            </div>
        </div>
    </div>
</template>
