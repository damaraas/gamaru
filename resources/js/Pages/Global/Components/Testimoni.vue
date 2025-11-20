<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue'

// Testimoni Data
const testimoni = ref([
  {
    image: 'img/testimoni/Kevin.webp',
    testi: '“Saya kuliah sambil kerja part-time, jadi butuh jadwal fleksibel. Untungnya di GAMARU bisa pilih belajar online. Tutornya menyesuaikan waktu saya, dan sekarang kemampuan Mandarin saya jauh lebih lancar untuk kebutuhan kuliah dan kerja.”',
    name: 'Kevin, Mahasiswa – Jakarta'
  },
  {
    image: 'img/testimoni/Bu Christian.webp',
    testi: '“Anak saya dulu sering kesulitan memahami kosakata Mandarin, cepat bosan, dan kurang percaya diri. Setelah ikut les di GAMARU, belajarnya jadi lebih menyenangkan karena banyak aktivitas interaktif. Sekarang dia malah semangat setiap kali ada jadwal les!”',
    name: 'Bu Christian, Orang Tua Siswa – Tangerang'
  },
  {
    image: 'img/testimoni/Felita.webp',
    testi: '“Saya ikut kelas persiapan HSK 3 di GAMARU. Gurunya sabar banget dan cara mengajarnya jelas. Latihan soal dan strategi belajarnya bikin saya lebih siap. Hasilnya, nilai HSK saya naik signifikan!”',
    name: 'Felita, Siswa SMA – Jakarta'
  },
  {
    image: 'img/testimoni/Andre.webp',
    testi: '“Pekerjaan saya menuntut komunikasi dengan supplier dari China. Les di GAMARU benar-benar membantu, karena gurunya fokus ngajarin percakapan bisnis yang langsung bisa dipakai di kerjaan sehari-hari.”',
    name: 'Andre, Supervisor Logistik – Surabaya'
  },
  {
    image: 'img/testimoni/Stephanie.webp',
    testi: '“Di kantor saya sering ketemu klien dari Tiongkok, tapi dulu agak minder karena nggak lancar bahasa Mandarin. Setelah ikut les privat di GAMARU, saya jadi lebih percaya diri presentasi. Bahkan atasan saya bilang komunikasi saya sekarang jauh lebih baik.”',
    name: 'Stephanie, Staff Marketing – Jakarta'
  },
  {
    image: 'img/testimoni/Celine.webp',
    testi: '“Anak saya cepat bosan kalau belajar. Tapi tutor GAMARU pintar cari cara supaya kelasnya interaktif. Ada latihan percakapan, game, bahkan nonton video. Sekarang anak saya jadi lebih berani ngobrol dalam bahasa Mandarin.”',
    name: 'Celine, Orang Tua Siswa – Surabaya'
  }
])

// state untuk testimoni
const currentIndexTestimoni = ref(0)
const windowWidth = ref(window.innerWidth)
const totalDotsTestimoni = computed(() => testimoni.value.length);
const maxIndexTestimoni = computed(() => testimoni.value.length - 1)

// Methods

const scrollNextTestimoni = () => { if (currentIndexTestimoni.value < maxIndexTestimoni.value) currentIndexTestimoni.value++ }
const goToSlideTestimoni = (index) => { currentIndexTestimoni.value = index }

const handleResize = () => {
  windowWidth.value = window.innerWidth

  // Reset slide untuk methods jika out of bounds
  if (currentIndexTestimoni.value > maxIndexTestimoni.value) {
    currentIndexTestimoni.value = maxIndexTestimoni.value
  }
}

// Lifecycle hooks
onMounted(() => {
  window.addEventListener('resize', handleResize)
})

onUnmounted(() => {
  window.removeEventListener('resize', handleResize)
})
</script>

<template>
  <section class="bg-linear-to-b from-yellow-400 to-yellow-500 py-16 px-4">
    <div class="mx-auto">
      <!-- Title -->
      <h2 class="text-center text-3xl md:text-3xl font-bold text-gray-800 pt-6">
        Testimoni
      </h2>

      <!-- Testimoni Cards -->
      <div class="overflow-hidden pt-20 pb-22 flex lg:flex-row flex-col items-center relative">
        <div class="flex-1 w-full">
          <div ref="carouselTestimoni" class="flex transition-transform duration-500 ease-in-out"
            :style="{ transform: `translateX(calc(-${currentIndexTestimoni * 100}%))` }">
            <div v-for="(testimoni, index) in testimoni" :key="index"
              class="shrink-0 w-full flex flex-col lg:flex-row items-center" :style="{ width: 'calc(100%)' }">

              <div class="lg:w-3/5 flex flex-row gap-2">
                <!-- Foto testimoner -->
                <div class="shrink-0">
                  <img :src="testimoni.image" :alt="testimoni.name" class="w-40 h-40 object-contain">
                </div>
                <div>
                  <p class="text-lg font-bold leading-relaxed text-justify">
                    {{ testimoni.testi }}
                  </p>
                  <br>
                  <h3 class="text-lg">
                    <span v-html="testimoni.name"></span>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hidden lg:flex absolute right-8">
          <img src="../../../../../public/img/global/TestimoniGamaruMaskot.webp" alt="Gamaru Maskot" width="350">
        </div>
      </div>

      <div class="flex justify-center items-center gap-2 z-20">
        <!-- Dots Indicator -->
        <button v-for="(dot, index) in totalDotsTestimoni" :key="index" @click="goToSlideTestimoni(index)"
          class="w-3 h-3 rounded-full border-2 border-black transition-all"
          :class="currentIndexTestimoni === index ? 'bg-black' : 'bg-transparent'">
        </button>

        <!-- Next Button -->
        <button @click="scrollNextTestimoni" :disabled="currentIndexTestimoni >= maxIndexTestimoni"
          :class="{ 'opacity-50 cursor-not-allowed': currentIndexTestimoni >= maxIndexTestimoni }"
          class="left-1/2 text-black p-3 transition-colors z-10">
          <i class="fa-solid fa-arrow-right text-2xl"></i>
        </button>
      </div>
    </div>
  </section>
</template>