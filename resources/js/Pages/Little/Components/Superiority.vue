<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue'

// Benefits data
const benefits = ref([
  {
    title: 'Personalized Learning',
    description: 'Belajar 1 on 1 sesuai kebutuhan',
    image: '/img/little/personalized.webp',
    useGradient: false
  },
  {
    title: 'Flexibility',
    description: 'Bisa online/offline, pilih waktumu',
    useGradient: false,
    image: '/img/little/flexibility.webp',
  },
  {
    title: 'Quality Teacher',
    description: 'Dibimbing native speaker & pengajar berpengalaman',
    image: '/img/little/quailty-teacher.webp',
    useGradient: false
  },
  {
    title: 'Fun Learning',
    description: 'Belajar seru dan tidak membosankan',
    image: '/img/little/fun-learning.webp',
    useGradient: false
  },
  {
    title: 'Result Oriented',
    description: 'Fokus ke pencapaian hasil nyata',
    useGradient: false,
    image: '/img/little/result-oriented.webp',
  },
  {
    title: 'Trust & Care',
    description: 'Pendampingan penuh, selalu support kamu',
    image: '/img/little/trust-and-care.webp',
    useGradient: false
  }
])

// state untuk benefits
const currentIndexBenefits = ref(0)
const windowWidth = ref(window.innerWidth)
const isMobile = computed(() => windowWidth.value < 768)
const isTablet = computed(() => windowWidth.value >= 768 && windowWidth.value < 1024)
const cardsPerViewBenefits = computed(() => isMobile.value ? 1 : isTablet.value ? 2 : 3)
const totalDotsBenefits = computed(() => Math.ceil(benefits.value.length / cardsPerViewBenefits.value))
const maxIndexBenefits = computed(() => totalDotsBenefits.value - 1)

// Methods
const scrollNextBenefits = () => { if (currentIndexBenefits.value < maxIndexBenefits.value) currentIndexBenefits.value++ }
const scrollPrevBenefits = () => { if (currentIndexBenefits.value > 0) currentIndexBenefits.value-- }
const goToSlideBenefits = (index) => { currentIndexBenefits.value = index }

const handleResize = () => {
  windowWidth.value = window.innerWidth

  // Reset slide untuk benefits jika out of bounds
  if (currentIndexBenefits.value > maxIndexBenefits.value) {
    currentIndexBenefits.value = maxIndexBenefits.value
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
    <div class="max-w-6xl mx-auto">
      <!-- Title -->
      <h2 class="text-center text-2xl md:text-3xl font-bold text-gray-800 mb-12">
        Kenapa Harus Les Privat di<br>GAMARU?
      </h2>

      <!-- Benefits Cards -->
      <div class="relative mx-6">
        <!-- Previous Button -->
        <button @click="scrollPrevBenefits" :disabled="currentIndexBenefits === 0"
          :class="{ 'opacity-50 cursor-not-allowed': currentIndexBenefits === 0 }"
          class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 md:-translate-x-8 bg-red-500 text-white rounded-full p-3 shadow-lg hover:bg-red-600 transition-colors z-10">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>

        <!-- Cards Container -->
        <div class="overflow-hidden">
          <div ref="carouselBenefits" class="flex transition-transform duration-500 ease-in-out"
            :style="{ transform: `translateX(calc(-${currentIndexBenefits * 100}%))` }">
            <div v-for="(benefit, index) in benefits" :key="index"
              class="shrink-0 bg-white rounded-3xl text-center mx-2"
              :style="{ width: isMobile ? 'calc(100% - 1rem)' : isTablet ? 'calc(50% - 1rem)' : 'calc(33.333% - 1rem)' }">
              <div class="p-6 h-72">
                <h3 class="font-bold text-2xl mb-4">{{ benefit.title }}</h3>
                <!-- Image or Icon -->
                <div class="mb-4">
                  <div v-if="benefit.useGradient"
                    class="w-32 h-32 mx-auto rounded-full flex items-center justify-center"
                    :class="benefit.gradientClass">
                    <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
                      <path v-html="benefit.iconPath" fill-rule="evenodd" clip-rule="evenodd" />
                    </svg>
                  </div>
                  <img v-else :src="benefit.image" :alt="benefit.title" class="mx-auto w-32 h-32 object-contain">
                </div>

                <p class="font-semibold text-gray-600 text-xl">
                  {{ benefit.description }}
                </p>
              </div>

              <!-- 🔻 Footer Merah -->
              <div class="mt-4 h-4 bg-red-500 rounded-b-2xl"></div>
            </div>
          </div>
        </div>

        <!-- Next Button -->
        <button @click="scrollNextBenefits" :disabled="currentIndexBenefits >= maxIndexBenefits"
          :class="{ 'opacity-50 cursor-not-allowed': currentIndexBenefits >= maxIndexBenefits }"
          class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 md:translate-x-8 bg-red-500 text-white rounded-full p-3 shadow-lg hover:bg-red-600 transition-colors z-10">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>

      <!-- Dots Indicator -->
      <div class="flex justify-center gap-2 mt-8">
        <button v-for="(dot, index) in totalDotsBenefits" :key="index" @click="goToSlideBenefits(index)"
          class="w-3 h-3 rounded-full border-2 text-black transition-all"
          :class="currentIndexBenefits === index ? 'bg-black' : 'bg-transparent'"></button>
      </div>
    </div>
  </section>
</template>