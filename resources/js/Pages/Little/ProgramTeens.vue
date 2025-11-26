<template>
    <AppLayout>
      <!-- Section Pertama -->
        <div class="flex flex-col lg:flex-row px-6 md:px-10 w-full py-5 bg-primary">

    <!-- LEFT CONTENT (TEKS) -->
    <div class="w-full lg:w-7/12 space-y-6 text-left py-6 lg:py-10 lg:px-10">

        <h1 class="text-4xl sm:text-5xl font-bold leading-snug sm:leading-tight text-gray-900 font-onest">
            Kursus Mandarin untuk Siswa & Persiapan Sekolah
        </h1>

        <p class="font-onest font-semibold text-base sm:text-lg leading-relaxed text-black">
            Belajar Mandarin jadi lebih relevan buat kebutuhan siswa! Program Teens & School Prep (13-18 tahun)
            membantu siswa bilingual, persiapan ujian sekolah, hingga HSK pemula. Dengan metode interaktif,
            siswa bisa mengerjakan PR, latihan ujian, sekaligus mengasah kemampuan komunikasi sehari-hari
            dalam bahasa Mandarin.
        </p>

        <p class="font-onest font-semibold text-base sm:text-lg leading-relaxed text-black">
            Program ini dirancang agar belajar Mandarin terasa lebih mudah, menyenangkan, dan sesuai dengan
            kebutuhan sekolah. Dengan pendekatan yang interaktif, siswa bisa lebih percaya diri saat
            mengerjakan PR, menghadapi ujian, maupun persiapan HSK. Bersama Gamaru, belajar Mandarin jadi
            lebih fokus dan hasilnya nyata.
        </p>

    </div>

    <!-- RIGHT CONTENT (GAMBAR – COPY PASTE DARI GLOBAL LEARNERS) -->
    <div class="w-full lg:w-5/12 flex justify-center relative mt-6 lg:mt-0">
        <div class="relative">

            <!-- Lingkaran kuning mengikuti GL, hanya ubah warnanya -->
            <div class="absolute z-0 rounded-full bg-[#ffcf25] aspect-square
                        top-10 left-1/2 -translate-x-1/2
                        w-[80vw] max-w-[250px]
                        sm:top-12 sm:w-[70vw] sm:max-w-[300px]
                        md:top-4 md:w-[50vw] md:max-w-[360px]
                        xl:top-20 xl:left-54 xl:w-[65vw] xl:max-w-[360px]">
            </div>

            <!-- Gambar TEENS (path tidak diubah!) -->
            <img 
                src="../../../../public/img/programteens/Maskot_Gamaru-17.webp"
                alt="Panda"
                class="w-80 sm:w-96 md:w-md lg:w-120 xl:w-lg rounded-lg relative left-2 sm:left-3 z-10"
            />

        </div>
    </div>

</div>
        <!-- Section Pertama -->

        <!-- Section Kedua -->
        <section>
          <div class="max-w-6xl mx-auto my-24">
            <!-- Header -->
            <div class="text-center mb-4 mx-8">
              <div class="inline-block bg-primary text-white px-6 py-3 rounded-lg text-2xl font-bold mb-8">
                Teens and School Prep (13-18 tahun)
              </div>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto md:px-14 px-8">
              <!-- Durasi -->
              <div class="border-2 border-gray-200 rounded-2xl p-6 text-center hover:shadow-lg transition-shadow">
                <div
                  class="text-white text-4xl mb-4 bg-[#ff3830] rounded-full p-3 flex items-center justify-center mx-auto w-16 h-16">
                  <i class="far fa-clock"></i>
                </div>
                <h3 class="font-bold text-2xl mb-2">Durasi</h3>
                <p class="text-xl">90 Menit/Sesi</p>
              </div>

              <!-- Harga -->
              <div class="border-2 border-gray-200 rounded-2xl p-6 text-center hover:shadow-lg transition-shadow">
                <div
                  class="text-white text-4xl mb-4 bg-[#ff3830] rounded-full p-3 flex items-center justify-center mx-auto w-16 h-16">
                  <i class="fas fa-tag"></i>
                </div>
                <h3 class="font-bold text-2xl mb-2">Harga</h3>
                <p class="text-lg">Rp650.000/Sesi</p>
              </div>

              <!-- Fokus Utama -->
              <div class="border-2 border-gray-200 rounded-2xl p-10 text-center hover:shadow-lg transition-shadow">
                <div
                  class="text-white text-4xl mb-4 bg-[#ff3830] rounded-full p-3 flex items-center justify-center mx-auto w-16 h-16">
                  <i class="fa-solid fa-crosshairs"></i>
                </div>
                <h3 class="font-bold text-2xl mb-2">Fokus Utama</h3>
                <p class="text-lg">Tugas sekolah, diskusi interaktif, latihan soal, HSK preparation level 1–3</p>
              </div>

              <!-- Tujuan -->
              <div class="border-2 border-gray-200 rounded-2xl p-10 text-center hover:shadow-lg transition-shadow">
                <div
                  class="text-white text-4xl mb-4 bg-[#ff3830] rounded-full p-3 flex items-center justify-center mx-auto w-16 h-16">
                  <i class="fa-solid fa-bullseye"></i>
                </div>
                <h3 class="font-bold text-2xl mb-2">Tujuan</h3>
                <p class="text-lg">​​Membantu siswa lebih percaya diri di kelas, siap menghadapi ujian, dan memperkuat fondasi untuk HSK tingkat lanjut</p>
              </div>

            </div>
          </div>
        </section>
        <!-- Section Kedua -->

        <!-- Section Ketigas (Carousel Pertama) -->
          <Benefits />
        <!-- Section Ketiga -->

        <!-- Section Keempat (Carousel Kedua) -->
          <Methods />
        <!-- Section Keempat -->

        <!-- Section Kelima -->
          <Testimoni />
        <!-- Section Kelima -->

        <!-- Section Keenam -->
        <section class="bg-primary py-16 px-7">
        <div class="max-w-6xl mx-auto">
            <div
                class="flex flex-col lg:flex-row items-center justify-between lg:gap-8 gap-0"
            >
                <!-- Text Content -->
                <div class="text-center lg:text-left lg:flex-1">
                    <h2
                        class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-8 leading-tight"
                    >
                        Yuk, Mulai Perjalanan Belajarmu Bersama Gamaru?
                    </h2>

                    <!-- CTA Button -->
                    <a
                        href="https://wa.me/6285712230349?text=Halo MinXue! Saya mau tanya info mengenai les privat Mandarin di GAMARU. Bisa dibantu?"
                        target="_blank"
                        class="items-center gap-3 bg-green text-white font-semibold text-lg md:text-xl px-8 py-4 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl lg:inline-flex hidden"
                    >
                        <Fa6Whatsapp class="w-10 h-10" />
                        Japri Admin Sekarang
                    </a>
                </div>

                <!-- Lightbulb Character -->
                <div class="relative flex justify-center items-center ">
                    <!-- Circle Background -->
                    <div
                        class="absolute z-0 rounded-full bg-secondary  sm:w-56 sm:h-56 md:w-64 md:h-64 lg:w-96 lg:h-96"
                    ></div>

                    <!-- Maskot Image -->
                    <img
                        :src="'/img/Adult/maskot-gamaru.png'"
                        alt="Lightbulb Character"
                        class="relative z-10 w-72 sm:w-60 md:w-72 lg:w-[370px] h-auto"
                    />
                </div>

                <a
                    href="https://wa.me/6285712230349?text=Halo MinXue! Saya mau tanya info mengenai les privat Mandarin di GAMARU. Bisa dibantu?"
                    target="_blank"
                    class="items-center gap-3 bg-green text-white font-semibold text-lg md:text-xl px-6 py-4 rounded-2xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl lg:hidden inline-flex mt-10"
                >
                    <Fa6Whatsapp class="w-8 h-8" />
                    Japri Admin Sekarang
                </a>
            </div>
        </div>
    </section>
        <!-- Section keenam -->
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'; // Pastikan path ini benar
import Benefits from '../Global/Components/Benefits.vue'
import Methods from '../Global/Components/Methods.vue'
import Testimoni from '../Global/Components/Testimoni.vue'
// import CTA from '../Global/Components/Cta.vue'

import { Fa6Whatsapp } from "vue-icons-plus/fa6";

defineProps({
    whatsappNumber: {
        type: String,
        default: "6285712230349",
    },
    title: {
        type: String,
        default: "Butuh Les Privat?",
    },
    buttonText: {
        type: String,
        default: "Japri Admin Sekarang",
    },
});
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&family=Poppins:wght@400;700&display=swap');
@import '@fortawesome/fontawesome-free/css/all.css'; 

/* Pastikan font-family diterapkan */
.gamaru-h1-primary {
  font-family: 'Quicksand', sans-serif;
  font-weight: 700; 
  color: #010101;
}

p {
  color: #010101;
}

.font-poppins {
  font-family: 'Poppins', sans-serif;
}

/* Mengatur ulang margin/padding pada carousel-card agar p-4 bekerja dengan baik */
/* Pastikan ini ada di stylesheet utama Tailwind Anda atau di section <style> ini */

/* Ini mengelola lebar kartu di dalam carousel secara *dinamis* berdasarkan JS, 
   jadi kelas Tailwind w-full md:w-1/2 lg:w-1/3 pada carousel-card akan tetap ada 
   tapi nilai `cardsToShow` dan `methodsToShow` dari JS akan mengatur `transform` */

/* Tidak perlu override CSS tambahan di sini jika kelas Tailwind sudah benar
   dan logika JS untuk `cardsToShow`/`methodsToShow` sudah menghitung pergeseran `translateX` dengan benar. */

.gamaru-hero-section h1 { 
  color: #ffffff;
}
.animate-fade-in {
  animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateX(10px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}
</style>