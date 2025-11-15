<template>
  <section class="bg-white py-16 px-4">
    <div class="max-w-6xl mx-auto">
      <!-- Title -->
      <h2 class="text-center text-2xl md:text-3xl font-bold text-gray-800 mb-12">
        Metode Belajar Interaktif<br>dan Fun di Gamaru
      </h2>

      <!-- Methods Container -->
      <div class="relative">
        <!-- Previous Button -->
        <button 
          @click="scrollPrev"
          :disabled="currentIndex === 0"
          :class="{'opacity-50 cursor-not-allowed': currentIndex === 0}"
          class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 md:-translate-x-8 bg-red-500 text-white rounded-full p-3 shadow-lg hover:bg-red-600 transition-colors z-10"
        >
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
          </svg>
        </button>

        <!-- Methods Cards -->
        <div class="overflow-hidden">
          <div 
            ref="carouselContainer"
            class="flex transition-transform duration-500 ease-in-out gap-8 px-2 md:px-0"
            :style="{ transform: `translateX(calc(-${currentIndex * 100}% - ${currentIndex * 2}rem))` }"
          >
            <div 
              v-for="(method, index) in methods" 
              :key="index"
              class="flex-shrink-0 flex gap-4 items-start bg-gray-50 rounded-2xl p-6"
              :style="{ width: isMobile ? 'calc(100% - 1rem)' : 'calc(50% - 1rem)' }"
            >
              <!-- Icon/Image -->
              <div class="flex-shrink-0">
                <div class="w-20 h-20 bg-white rounded-xl flex items-center justify-center shadow-md">
                  <img 
                    :src="method.image" 
                    :alt="method.title" 
                    class="w-16 h-16 object-contain"
                  >
                </div>
              </div>
              
              <!-- Content -->
              <div class="flex-1">
                <h3 class="font-bold text-xl text-red-500 mb-3 leading-tight">
                  <span v-html="method.title"></span>
                </h3>
                <p class="text-md leading-relaxed">
                  {{ method.description }}
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Next Button -->
        <button 
          @click="scrollNext"
          :disabled="currentIndex >= maxIndex"
          :class="{'opacity-50 cursor-not-allowed': currentIndex >= maxIndex}"
          class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 md:translate-x-8 bg-red-500 text-white rounded-full p-3 shadow-lg hover:bg-red-600 transition-colors z-10"
        >
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
          </svg>
        </button>
      </div>

      <!-- Dots Indicator -->
      <div class="flex justify-center gap-2 mt-8">
        <button 
          v-for="(dot, index) in totalDots" 
          :key="index"
          @click="goToSlide(index)"
          class="w-3 h-3 rounded-full transition-colors"
          :class="currentIndex === index ? 'bg-gray-800' : 'bg-gray-400'"
        ></button>
      </div>
    </div>
  </section>
</template>

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
    description: 'Persiapan HSK dan Sekolah Internasional gambar 2.jpeg Materi terstruktur, latihan soal & strategi biar lebih siap ujian.',
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

// Carousel state
const currentIndex = ref(0)
const carouselContainer = ref(null)
const windowWidth = ref(window.innerWidth)

// Computed properties
const isMobile = computed(() => windowWidth.value < 768)
const cardsPerView = computed(() => isMobile.value ? 1 : 2)
const maxIndex = computed(() => Math.max(0, methods.value.length / cardsPerView.value))
const totalDots = computed(() => maxIndex.value - 1)

// Methods
const scrollNext = () => {
  if (currentIndex.value < maxIndex.value) {
    currentIndex.value++
  }
}

const scrollPrev = () => {
  if (currentIndex.value > 0) {
    currentIndex.value--
  }
}

const goToSlide = (index) => {
  currentIndex.value = index
}

// Handle window resize
const handleResize = () => {
  windowWidth.value = window.innerWidth
  if (currentIndex.value > maxIndex.value) {
    currentIndex.value = maxIndex.value
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