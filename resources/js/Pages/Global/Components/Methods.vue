<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue'

// Methods data
const methods = ref([
  {
    title: 'Belajar Pendekatan Sehari-hari',
    description: 'Ngobrol langsung: perkenalan diri, belanja, pesan makanan, hingga simulasi meeting bisnis. Bikin kamu lebih percaya diri ngomong mandarin tanpa kaku.',
    image: '/img/little/learning-method/1.webp'
  },
  {
    title: 'Perspektif HSK dan Sekolah Internasional',
    description: 'Materi terstruktur, latihan soal & strategi biar lebih siap ujian.',
    image: '/img/little/learning-method/2.webp'
  },
  {
    title: 'Kelas Anak dan Remaja',
    description: 'Belajar lewat cerita, lagu, gambar, dan game. Seru, gampang nempel, nggak bikin bosan.',
    image: '/img/little/learning-method/3.webp'
  },
  {
    title: 'Kelas Dewasa dan Profesional',
    description: 'Praktis untuk kerja & bisnis: presentasi, negosiasi, percakapan kerja sehari-hari.',
    image: '/img/little/learning-method/4.webp'
  },
  {
    title: 'Materi Multimedia Lengkap',
    description: 'Kosakata & listening diasah lewat lagu mandarin populer, drama, dan film pendek. Belajar terasa ringan, seperti lagi nonton atau karaoke.',
    image: '/img/little/learning-method/5.webp'
  },
  {
    title: 'Tracking Progress dan Feedback Personal',
    description: 'Evaluasi rutin + rencana belajar personal. Bisa pantau progress dan tahu apa yang harus ditingkatkan.',
    image: '/img/little/learning-method/6.webp'
  }
])

// state untuk methods
const currentIndexMethods = ref(0)
const windowWidth = ref(window.innerWidth)
const isMobile = computed(() => windowWidth.value < 768)
const cardsPerViewMethods = computed(() => isMobile.value ? 1 : 2)
const totalDotsMethods = computed(() => Math.ceil(methods.value.length / cardsPerViewMethods.value))
const maxIndexMethods = computed(() => totalDotsMethods.value - 1)

// Methods
const scrollNextMethods = () => { if (currentIndexMethods.value < maxIndexMethods.value) currentIndexMethods.value++ }
const scrollPrevMethods = () => { if (currentIndexMethods.value > 0) currentIndexMethods.value-- }
const goToSlideMethods = (index) => { currentIndexMethods.value = index }

const handleResize = () => {
  windowWidth.value = window.innerWidth

  // Reset slide untuk methods jika out of bounds
  if (currentIndexMethods.value > maxIndexMethods.value) {
    currentIndexMethods.value = maxIndexMethods.value
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
  <section class="py-16 px-4">
    <div class="max-w-6xl mx-auto">
      <!-- Title -->
      <h2 class="text-center text-2xl md:text-3xl font-bold text-gray-800 mb-12">
        Metode Belajar Interaktif <br>dan Fun di Gamaru
      </h2>

      <!-- Methods Cards -->
      <div class="relative mx-6">
        <!-- Previous Button -->
        <button @click="scrollPrevMethods" :disabled="currentIndexMethods === 0"
          :class="{ 'opacity-50 cursor-not-allowed': currentIndexMethods === 0 }"
          class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 md:-translate-x-8 bg-red-500 text-white rounded-full p-3 shadow-lg hover:bg-red-600 transition-colors z-10">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>

        <!-- Cards Container -->
        <div class="overflow-hidden">
          <div ref="carouselMethods" class="flex transition-transform duration-500 ease-in-out"
            :style="{ transform: `translateX(calc(-${currentIndexMethods * 100}%))` }">
            <div v-for="(method, index) in methods" :key="index"
              class="shrink-0 flex gap-4 items-start border-3 border-gray-300 rounded-2xl p-6 mx-2 flex-col"
              :style="{ width: isMobile ? 'calc(100% - 1rem)' : 'calc(50% - 1rem)' }">
              <!-- Gambar + Judul -->
              <div class="flex items-center gap-4 mb-4">
                <div class="w-24 h-24 bg-white rounded-xl flex items-center justify-center shadow-md">
                  <img :src="method.image" :alt="method.title" class="w-20 h-20 object-contain">
                </div>
                <h3 class="font-bold text-2xl text-red-500">
                  <span v-html="method.title"></span>
                </h3>
              </div>

              <p class="text-md leading-relaxed">
                {{ method.description }}
              </p>
            </div>
          </div>
        </div>

        <!-- Next Button -->
        <button @click="scrollNextMethods" :disabled="currentIndexMethods >= maxIndexMethods"
          :class="{ 'opacity-50 cursor-not-allowed': currentIndexMethods >= maxIndexMethods }"
          class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 md:translate-x-8 bg-red-500 text-white rounded-full p-3 shadow-lg hover:bg-red-600 transition-colors z-10">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>

      <!-- Dots Indicator -->
      <div class="flex justify-center gap-2 mt-8">
        <button v-for="(dot, index) in totalDotsMethods" :key="index" @click="goToSlideMethods(index)"
          class="w-3 h-3 rounded-full border-2 border-red-500 transition-all"
          :class="currentIndexMethods === index ? 'bg-red-500' : 'bg-transparent'"></button>
      </div>
    </div>
  </section>
</template>