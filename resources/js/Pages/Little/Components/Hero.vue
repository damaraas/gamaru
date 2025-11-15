<script setup>
import { SiWhatsapp } from "vue-icons-plus/si";
import { Fa6RegMessage } from "vue-icons-plus/fa6";

// array logo kurikulum
const logos = [
    "/img/kurikulum/Cambrige.webp",
    "/img/kurikulum/ib.webp",
    "/img/kurikulum/Singapore.webp",
    "/img/kurikulum/nasional.webp",
];
</script>

<template>
    <div class="flex flex-col lg:flex-row px-6 md:px-10 w-full py-5 bg-primary">
        <!-- LEFT CONTENT -->
        <div class="w-full lg:w-7/12 space-y-6 text-left py-6 lg:py-10 lg:px-10">
            <h1 class="text-4xl font-bold leading-snug sm:leading-tight text-gray-900 font-onest">
                Belajar Mandarin Seru untuk Anak Usia Dini
            </h1>
            <p class="font-onest font-semibold">
                Belajar bahasa asing sejak kecil bisa jadi menyenangkan loh
                Moms! Program Little Learners (4-12 tahun) dirancang untuk
                anak-anak yang baru mulai mengenal Mandarin lewat lagu,
                permainan, flashcard, hingga perkenalan Hanzi sederhana.
            </p>
            <p class="font-onest font-semibold">
                Metode fun learning membuat anak lebih cepat menangkap
                kosakata sehari-hari, membangun kepercayaan diri untuk
                berbicara, serta menumbuhkan rasa ingin tahu terhadap budaya
                baru.
            </p>
            <p class="font-onest font-semibold">
                Yuk mulai les privat Mandarin anak bersama Gamaru sekarang,
                biar si kecil tumbuh percaya diri dan siap menghadapi dunia
                global.
            </p>

        </div>

        <!-- RIGHT CONTENT -->
        <div class="w-full lg:w-5/12 flex justify-center relative mt-6 lg:mt-0">
            <div class="relative">
                <div class="absolute z-0 rounded-full bg-secondary aspect-square
         top-16 left-[9.8rem] -translate-x-[9.8rem]
         xl:top-20 xl:left-54
         w-[65vw] max-w-[360px]">
                </div>

                <!-- Gambar -->
                <img :src="'/img/little/maskot-gamaru.webp'" alt="Student"
                    class="w-80 sm:w-96 md:w-md lg:w-120 xl:w-lg rounded-lg relative left-2 sm:left-3 z-10" />
            </div>
        </div>
    </div>

</template>

<style scoped>
@keyframes slide {
    0% {
        transform: translateX(0%);
    }

    100% {
        transform: translateX(-50%);
    }
}

.animate-slide {
    display: flex;
    width: max-content;
    animation: slide 12s linear infinite;
}
</style>
