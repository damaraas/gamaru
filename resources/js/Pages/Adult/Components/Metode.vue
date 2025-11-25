<script setup>
import { ref, computed, onMounted, onBeforeUnmount } from "vue";
import { LuChevronLeft, LuChevronRight } from "vue-icons-plus/lu";

const testimonials = [
  {
    name: "Belajar Percakapan Sehari-hari",
    desc: "Ngobrol langsung: perkenalan diri, belanja, pesan makanan, hingga simulasi meeting bisnis. Bikin kamu lebih percaya diri ngomong mandarin tanpa kaku.",
    img: "/img/Adult/gambar 1.webp",
  },
  {
    name: "Persiapan HSK dan Sekolah Internasional",
    desc: "Materi terstruktur, latihan soal & strategi biar lebih siap ujian",
    img: "/img/Adult/gambar 2.webp",
  },
  {
    name: "Kelas Anak dan Remaja",
    desc: "Belajar lewat cerita, lagu, gambar, dan game. Seru, gampang nempel, nggak bikin bosan.",
    img: "/img/Adult/gambar 3.webp",
  },
  {
    name: "Kelas Dewasa dan Profesional",
    desc: "Praktis untuk kerja & bisnis: presentasi, negosiasi, percakapan kerja sehari-hari.",
    img: "/img/Adult/gambar 4.webp",
  },
  {
    name: "Belajar Lewat Musik dan Film",
    desc: "Kosakata & listening diasah lewat lagu mandarin populer, drama, dan film pendek. Belajar terasa ringan, seperti lagi nonton atau karaoke",
    img: "/img/Adult/gambar 5.webp",
  },
  {
    name: "Tracking Progress dan Feedback Personal",
    desc: "Evaluasi rutin + rencana belajar personal. Bisa pantau progress dan tahu apa yang harus ditingkatkan",
    img: "/img/Adult/gambar 6.webp",
  },
];

const currentSlide = ref(0);
const itemsPerSlide = ref(2); // default DESKTOP → 2 card

const totalSlides = computed(() =>
  Math.ceil(testimonials.length / itemsPerSlide.value)
);

// navigation
const goToSlide = (index) => {
  if (index >= 0 && index < totalSlides.value) {
    currentSlide.value = index;
  }
};
const nextSlide = () => {
  currentSlide.value = (currentSlide.value + 1) % totalSlides.value;
};
const prevSlide = () => {
  currentSlide.value =
    (currentSlide.value - 1 + totalSlides.value) % totalSlides.value;
};

// responsive items per slide
const updateItemsPerSlide = () => {
  if (window.innerWidth < 640) {
    itemsPerSlide.value = 1; // MOBILE
  } else {
    itemsPerSlide.value = 2; // TABLET & DESKTOP
  }
};

onMounted(() => {
  updateItemsPerSlide();
  window.addEventListener("resize", updateItemsPerSlide);
});
onBeforeUnmount(() => {
  window.removeEventListener("resize", updateItemsPerSlide);
});
</script>

<template>
  <section class="bg-white py-12">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold mb-7">
        Metode Belajar Interaktif <br />dan Fun di Gamaru
      </h2>

      <!-- Carousel Wrapper -->
      <div class="relative overflow-hidden">
        <div class="flex transition-transform duration-500"
          :style="{ transform: `translateX(-${currentSlide * 100}%)` }">
          <!-- Slide -->
          <div v-for="(slide, slideIndex) in totalSlides" :key="slideIndex" class="w-full shrink-0 grid gap-6 px-5"
            :class="{
              'grid-cols-1': itemsPerSlide === 1,
              'grid-cols-2': itemsPerSlide === 2,
            }">
            <div v-for="(item, idx) in testimonials.slice(
              slideIndex * itemsPerSlide,
              (slideIndex + 1) * itemsPerSlide
            )" :key="idx" class="rounded-2xl p-8 text-left flex flex-col  h-full border-gray-300 border-2">
              <!-- Header (Gambar + Title) -->
              <div class="flex flex-col lg:flex-row items-center justify-center gap-6">
                <img :src="item.img" alt="Card image" class="lg:w-28 lg:h-28 h-24 w-24 object-cover rounded-xl" />

                <h1 class="font-primary font-bold text-2xl text-center lg:text-left">
                  {{ item.name }}
                </h1>
              </div>


              <!-- Isi -->
              <p class="text-gray-700 text-lg leading-relaxed mt-2">
                “{{ item.desc }}”
              </p>
            </div>
          </div>
        </div>

        <!-- Navigation Buttons -->
        <button @click="prevSlide"
          class="absolute left-2 top-1/2 -translate-y-1/2 bg-primary text-white p-2 rounded-full shadow">
          <LuChevronLeft class="w-8 h-8" />
        </button>
        <button @click="nextSlide"
          class="absolute right-2 top-1/2 -translate-y-1/2 bg-primary text-white p-2 rounded-full shadow">
          <LuChevronRight class="w-8 h-8" />
        </button>
      </div>

      <!-- Pagination Dots -->
      <div class="flex justify-center mt-6 space-x-2">
        <button v-for="index in totalSlides" :key="index" @click="goToSlide(index - 1)" class="w-3 h-3 rounded-full"
          :class="currentSlide === index - 1 ? 'bg-primary' : 'bg-gray-300'"></button>
      </div>
    </div>
  </section>
</template>
