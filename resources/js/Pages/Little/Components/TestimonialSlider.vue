<template>
  <section id="testimoni" class="min-h-screen bg-yellow-500 py-16 font-quicksand overflow-hidden">
    
    <div class="max-w-6xl mx-auto px-4 relative">
      
      <!-- Judul Section -->
      <h2 class="text-4xl md:text-5xl font-bold text-black text-center mb-12">
        Testimoni
      </h2>

      <!-- Area Konten Slide Wrapper -->
      <div class="relative w-full min-h-[400px] md:min-h-[300px] testimonial-content-wrapper">
        
        <!-- Bungkus satu elemen slide dengan Transisi -->
        <Transition name="slide-fade" mode="out-in">
          <div 
            :key="currentTestimonialIndex" 
            v-if="currentTestimonial" 
            class="testimonial-slide absolute top-0 left-0 w-full grid lg:grid-cols-12 gap-8 items-center"
          >
            <!-- Kiri: Teks & Profil User -->
            <div class="lg:col-span-7 flex flex-col justify-center">
              
              <!-- Mengganti 't' dengan 'currentTestimonial' -->
              <div class="flex flex-col md:flex-row items-center md:items-start gap-6 mb-6">
                
                <!-- Foto Profil - Revisi dimulai di sini -->
                <div class="relative w-32 h-32 md:w-40 md:h-40 flex-shrink-0">
                  <!-- Div aksen di belakang foto tetap ada -->
                  <div class="absolute inset-0 rounded-full bg-black/10 transform translate-y-2 translate-x-[-8px] -z-10 shadow-lg"></div>
                  
                  <!-- Wadah Utama Foto -->
                  <div class="w-full h-full">
                    <!-- Hanya tampilkan tag <img> jika gambar ada -->
                    <img 
                      v-if="currentTestimonial.image" 
                      :src="currentTestimonial.image" 
                      :alt="currentTestimonial.name" 
                      class="w-full h-full object-cover"
                    />
                    <!-- Ganti logika fallback. Jika Anda tetap ingin placeholder jika gambar tidak ada, gunakan ini: -->
                    <!-- <div v-else class="w-full h-full flex items-center justify-center bg-gray-300 text-gray-500">
                       <span class="text-3xl">👤</span>
                    </div> -->
                  </div>
                  <!-- Revisi Selesai -->
                  
                </div>

                <!-- Teks Testimoni -->
                <div class="text-center md:text-left">
                  <p class="text-xl md:text-2xl leading-relaxed italic font-medium text-black">
                    “{{ currentTestimonial.text }}”
                  </p>
                </div>
              </div>

              <!-- Nama & Jabatan -->
              <div class="mt-2 text-center md:text-left md:pl-48"> 
                <p class="text-lg font-bold text-black">
                  {{ currentTestimonial.name }}
                </p>
                <p class="text-sm text-black/70 mt-1">
                  {{ currentTestimonial.title }} – {{ currentTestimonial.location }}
                </p>
              </div>
            </div>

            <!-- Kanan: Gambar Maskot Panda -->
            <div class="hidden lg:flex lg:col-span-5 justify-center items-center">
              <img src="../../../../../public/img/programteens/1.webp" alt="">
            </div>

          </div>
        </Transition>

      </div>

      <!-- Pagination & Navigation (TIDAK BERUBAH) -->
      <div class="flex items-center justify-center mt-16 space-x-6 mx-auto">
        
        <!-- Panah (Arrow) Navigation - Previous -->
        <button 
          @click="prevTestimonial" 
          @mouseover="stopAutoPlay"
          @mouseleave="startAutoPlay"
          class="group flex items-center justify-center w-12 h-8 transition-transform transform hover:-translate-x-2 focus:outline-none"
          aria-label="Previous Testimonial"
        >
           <!-- SVG Panah Kiri -->
           <svg width="35" height="20" viewBox="0 0 35 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform rotate-180">
            <path d="M2 10H33M33 10L24 2M33 10L24 18" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
           </svg>
        </button>

        <!-- Dots Pagination -->
        <div class="flex space-x-3">
           <button 
             v-for="(t, index) in testimonials" 
             :key="'dot-'+index"
             @click="goToTestimonial(index)"
             @mouseover="stopAutoPlay"
             @mouseleave="startAutoPlay"
             :class="[
               'w-4 h-4 rounded-full border border-black transition-all duration-300',
               currentTestimonialIndex === index ? 'bg-black' : 'bg-transparent hover:bg-black/20'
             ]"
             :aria-label="'Go to testimonial ' + (index + 1)"
           ></button>
        </div>

        <!-- Panah (Arrow) Navigation - Next -->
        <button 
          @click="nextTestimonial" 
          @mouseover="stopAutoPlay"
          @mouseleave="startAutoPlay"
          class="group flex items-center justify-center w-12 h-8 transition-transform transform hover:translate-x-2 focus:outline-none"
          aria-label="Next Testimonial"
        >
           <!-- SVG Panah Kanan -->
           <svg width="35" height="20" viewBox="0 0 35 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 10H33M33 10L24 2M33 10L24 18" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
           </svg>
        </button>

      </div>

    </div>
  </section>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount, computed } from 'vue'; // Tambahkan 'computed'
import kevin from "../../../../../public/img/programteens/kevin.webp"
import christian from "../../../../../public/img/programteens/bu-christian.webp"
import felita from "../../../../../public/img/programteens/felita.webp"
import andre from "../../../../../public/img/programteens/andre.webp"
import stephanie from "../../../../../public/img/programteens/stephanie.webp"
import celine from "../../../../../public/img/programteens/celine.webp"

const testimonials = [
  // ... (Data Anda) ...
  { name: 'Kevin', title: 'Mahasiswa', location: 'Jakarta', text: 'Saya kuliah sambil kerja part-time, jadi butuh jadwal fleksibel. Untungnya di GAMARU bisa pilih belajar online. Tutornya menyesuaikan waktu saya, dan sekarang kemampuan Mandarin saya jauh lebih lancar untuk kebutuhan kuliah dan kerja.', image: kevin },
  { name: 'Bu Christian', title: 'Orang Tua Siswa', location: 'Tangerang', text: 'Anak saya dulu sering kesulitan memahami kosakata Mandarin, cepat bosan, dan kurang percaya diri. Setelah ikut les di GAMARU, belajarnya jadi lebih menyenangkan karena banyak aktivitas interaktif. Sekarang dia malah semangat setiap kali ada jadwal les!', image: christian },
  { name: 'Felita', title: 'Siswa SMA', location: 'Jakarta', text: 'Saya ikut kelas persiapan HSK 3 di GAMARU. Gurunya sabar banget dan cara mengajarnya jelas. Latihan soal dan strategi belajarnya bikin saya lebih siap. Hasilnya, nilai HSK saya naik signifikan!', image: felita },
  { name: 'Andre', title: 'Supervisor Logistik', location: 'Surabaya', text: 'Pekerjaan saya menuntut komunikasi dengan supplier dari China. Les di GAMARU benar-benar membantu, karena gurunya fokus ngajarin percakapan bisnis yang langsung bisa dipakai di kerjaan sehari-hari.', image: andre },
  { name: 'Stephanie', title: 'Staff Marketing', location: 'Jakarta', text: 'Di kantor saya sering ketemu klien dari Tiongkok, tapi dulu agak minder karena nggak lancar bahasa Mandarin. Setelah ikut les privat di GAMARU, saya jadi lebih percaya diri presentasi. Bahkan atasan saya bilang komunikasi saya sekarang jauh lebih baik.', image: stephanie },
  { name: 'Celine', title: 'Orang Tua Siswa', location: 'Surabaya', text: 'Anak saya cepat bosan kalau belajar. Tapi tutor GAMARU pintar cari cara supaya kelasnya interaktif. Ada latihan percakapan, game, bahkan nonton video. Sekarang anak saya jadi lebih berani ngobrol dalam bahasa Mandarin.', image: celine }
];

const currentTestimonialIndex = ref(0);
const totalSlides = testimonials.length;
const autoPlayInterval = ref(null);
const SLIDE_DURATION = 6000; // 6 detik

// *MEMPERBAIKI ERROR VUE: Gunakan computed untuk mendapatkan satu objek slide saat ini*
const currentTestimonial = computed(() => {
  return testimonials[currentTestimonialIndex.value];
});


const nextTestimonial = () => {
  currentTestimonialIndex.value = (currentTestimonialIndex.value + 1) % totalSlides;
};

const prevTestimonial = () => {
  currentTestimonialIndex.value = (currentTestimonialIndex.value - 1 + totalSlides) % totalSlides;
};

const goToTestimonial = (index) => {
  if (currentTestimonialIndex.value !== index) {
      currentTestimonialIndex.value = index;
  }
};

const startAutoPlay = () => {
  if (autoPlayInterval.value) {
    clearInterval(autoPlayInterval.value);
  }
  autoPlayInterval.value = setInterval(nextTestimonial, SLIDE_DURATION);
};

const stopAutoPlay = () => {
  if (autoPlayInterval.value) {
    clearInterval(autoPlayInterval.value);
    autoPlayInterval.value = null;
  }
};

onMounted(startAutoPlay);
onBeforeUnmount(stopAutoPlay);
</script>

<style scoped>
/*
 * Gaya CSS untuk Transisi Slide (TIDAK BERUBAH)
*/
.slide-fade-enter-active,
.slide-fade-leave-active {
  transition: all 0.5s ease-in-out;
}

/* Slide masuk dari kanan (100%) dan muncul perlahan */
.slide-fade-enter-from {
  opacity: 0;
  transform: translateX(100%);
}

/* Slide keluar ke kiri (-100%) dan menghilang perlahan */
.slide-fade-leave-to {
  opacity: 0;
  transform: translateX(-100%);
}
</style>