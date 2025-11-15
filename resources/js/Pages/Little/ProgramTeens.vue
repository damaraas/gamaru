<template>
  <!-- Section Pertama -->
  <div class="bg-[#ff3830] py-16 px-4 sm:px-6 lg:px-8 min-h-screen flex items-center justify-center gamaru-kids-section">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-12">
      <div class="md:w-3/5 text-center md:text-left">
        <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6 text-black" style="font-family: 'Quicksand', sans-serif;">
          Belajar Mandarin Seru<br>untuk Anak Usia Dini
        </h1>
        <p class="text-lg md:text-xl leading-relaxed mb-8 text-black">
          Belajar bahasa asing sejak kecil bisa jadi menyenangkan lho Moms! Program Little Learners (4-12 tahun) dirancang untuk anak-anak yang baru mulai mengenal Mandarin lewat lagu, permainan, flashcard, hingga perkenalan Hanzi sederhana.
        </p>
        <p class="text-lg md:text-xl leading-relaxed mb-8 text-black">
          Metode fun learning membuat anak lebih cepat menangkap kosakata sehari-hari, membangun kepercayaan diri untuk berbicara, serta menumbuhkan rasa ingin tahu terhadap budaya baru.
        </p>
        <p class="text-lg md:text-xl leading-relaxed text-black">
          Yuk mulai les privat Mandarin anak bersama Gamaru sekarang, biar si kecil tumbuh percaya diri dan siap menghadapi dunia global.
        </p>
      </div>

      <div class="md:w-2/5 flex justify-center md:justify-end">
        <!-- Div pembungkus gambar dan lingkaran. Pastikan ini relative -->
        <div class="relative w-[400px] h-[400px] md:w-[500px] md:h-[500px] flex items-center justify-center overflow-hidden rounded-full">
          <!-- Lingkaran kuning, pastikan dia mengisi penuh parent-nya dan di belakang gambar -->
          <div class="absolute inset-0 bg-yellow-400 rounded-full z-0"></div> 
          <!-- Gambar panda, pastikan dia di atas lingkaran kuning -->
          <img 
            src="." 
            alt="Panda" 
            class="relative z-10 w-[350px] h-[350px] md:w-[450px] md:h-[450px] object-contain"
          >
        </div>
      </div>
    </div>
  </div>
  <!-- Section Pertama -->

  <!-- Section Kedua -->
  <section class="flex flex-col items-center py-10 px-4 bg-gray-50 font-quicksand">
    <div class="bg-[#ff3830] text-white text-2xl font-bold py-2 px-6 rounded-lg mb-8 shadow-md">
      Teens and School Prep (13-18 tahun)
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl w-full">
      
      <!-- Durasi Card -->
      <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center border border-gray-200">
        <div class="text-white text-4xl mb-4 bg-[#ff3830] rounded-full p-3 flex items-center justify-center w-16 h-16">
          <i class="far fa-clock"></i> 
        </div>
        <p class="text-xl font-bold text-[#010101] mb-2">Durasi</p>
        <p class="text-lg text-[#010101]">90 menit/ sesi</p>
      </div>

      <!-- Harga Card -->
      <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center border border-gray-200">
        <div class="text-white text-4xl mb-4 bg-[#ff3830] rounded-full p-3 flex items-center justify-center w-16 h-16">
          <i class="fas fa-tag"></i>
        </div>
        <p class="text-xl font-bold text-[#010101] mb-2">Harga</p>
        <p class="text-lg text-[#010101]">Rp550.000/ sesi</p>
      </div>

      <!-- Fokus Utama Card -->
      <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center border border-gray-200">
        <div class="text-white text-4xl mb-4 bg-[#ff3830] rounded-full p-3 flex items-center justify-center w-16 h-16">
          <i class="fas fa-bullseye"></i>
        </div>
        <p class="text-xl font-bold text-[#010101] mb-2">Fokus Utama</p>
        <p class="text-lg text-[#010101]">Tugas sekolah, diskusi interaktif, latihan soal, HSK preparation level 1–2</p>
      </div>

      <!-- Tujuan Card -->
      <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center border border-gray-200">
        <div class="text-white text-4xl mb-4 bg-[#ff3830] rounded-full p-3 flex items-center justify-center w-16 h-16">
          <i class="fas fa-chart-line"></i>
        </div>
        <p class="text-xl font-bold text-[#010101] mb-2">Tujuan</p>
        <p class="text-lg text-[#010101]">Membantu siswa lebih percaya diri di kelas, siap menghadapi ujian, dan memperkuat fondasi untuk HSK tingkat lanjut</p>
      </div>
    </div>
  </section>
  <!-- Section Kedua -->

  <!-- Section Ketigas -->
  <section class="bg-yellow-400 py-16 px-4 sm:px-6 lg:px-8 font-quicksand overflow-hidden">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-4xl md:text-5xl font-extrabold text-center text-black mb-12">
        Kenapa Harus Les Privat di GAMARU?
      </h2>

      <div class="relative">
        <!-- Navigation Arrows -->
        <button
          @click="prevCard"
          class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-[#ff3830] text-white p-3 rounded-full shadow-lg z-10 flex items-center justify-center w-12 h-12 md:-left-6"
          aria-label="Previous"
        >
          <i class="fas fa-chevron-left text-xl"></i>
        </button>
        <button
          @click="nextCard"
          class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-[#ff3830] text-white p-3 rounded-full shadow-lg z-10 flex items-center justify-center w-12 h-12 md:-right-6"
          aria-label="Next"
        >
          <i class="fas fa-chevron-right text-xl"></i>
        </button>

        <!-- Carousel Container -->
        <div class="carousel-container relative overflow-hidden">
          <div
            class="carousel-track flex transition-transform duration-500 ease-in-out"
            :style="{ transform: `translateX(-${currentIndex * (100 / cardsToShow)}%)` }"
          >
            <!-- Card 1: Personalized Learning -->
            <div class="carousel-card flex-shrink-0 w-full md:w-1/2 lg:w-1/3 p-4">
              <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center text-center border-b-4 border-[#ff3830] h-full">
                <h3 class="text-2xl font-bold text-black mb-2">Personalized Learning</h3>
                <img src="." alt="Personalized Learning" class="w-48 h-auto mb-4 object-contain">
                <p class="text-lg text-gray-700">Belajar 1-on-1 sesuai kebutuhanmu</p>
              </div>
            </div>

            <!-- Card 2: Flexibility -->
            <div class="carousel-card flex-shrink-0 w-full md:w-1/2 lg:w-1/3 p-4">
              <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center text-center border-b-4 border-[#ff3830] h-full">
                <h3 class="text-2xl font-bold text-black mb-2">Flexibility</h3>
                <img src="." alt="Flexibility" class="w-48 h-auto mb-4 object-contain">
                <p class="text-lg text-gray-700">Bisa online/offline, pilih waktumu</p>
              </div>
            </div>

            <!-- Card 3: Quality Teacher -->
            <div class="carousel-card flex-shrink-0 w-full md:w-1/2 lg:w-1/3 p-4">
              <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center text-center border-b-4 border-[#ff3830] h-full">
                <h3 class="text-2xl font-bold text-black mb-2">Quality Teacher</h3>
                <img src="." alt="Flexibility" class="w-48 h-auto mb-4 object-contain">
                <p class="text-lg text-gray-700">Dibimbing native speaker & pengajar berpengalaman</p>
              </div>
            </div>

            <!-- Card 4: Fun Learning (New) -->
            <div class="carousel-card flex-shrink-0 w-full md:w-1/2 lg:w-1/3 p-4">
              <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center text-center border-b-4 border-[#ff3830] h-full">
                <h3 class="text-2xl font-bold text-black mb-2">Fun Learning</h3>
                <img src="." alt="Flexibility" class="w-48 h-auto mb-4 object-contain">
                <p class="text-lg text-gray-700">Belajar seru dan tidak membosankan</p>
              </div>
            </div>

            <!-- Card 5: Result-Oriented (New) -->
            <div class="carousel-card flex-shrink-0 w-full md:w-1/2 lg:w-1/3 p-4">
              <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center text-center border-b-4 border-[#ff3830] h-full">
                <h3 class="text-2xl font-bold text-black mb-2">Result-Oriented</h3>
                <img src="." alt="Flexibility" class="w-48 h-auto mb-4 object-contain">
                <p class="text-lg text-gray-700">Fokus ke pencapaian hasil nyata</p>
              </div>
            </div>

            <!-- Card 6: Trust & Care (New) -->
            <div class="carousel-card flex-shrink-0 w-full md:w-1/2 lg:w-1/3 p-4">
              <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center text-center border-b-4 border-[#ff3830] h-full">
                <h3 class="text-2xl font-bold text-black mb-2">Trust & Care</h3>
                <img src="." alt="Flexibility" class="w-48 h-auto mb-4 object-contain">
                <p class="text-lg text-gray-700">Pendampingan penuh, selalu support kamu</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Ketiga -->

  <!-- Section Keempat -->
   <section class="bg-white py-16 px-4 sm:px-6 lg:px-8 font-poppins overflow-hidden">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-4xl md:text-5xl font-extrabold text-center text-[#010101] mb-12">
        Metode Belajar Interaktif dan Fun di Gamaru
      </h2>

      <div class="relative">
        <!-- Navigation Arrows -->
        <button
          @click="prevCardMethod"
          class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-[#ff3830] text-white p-3 rounded-full shadow-lg z-10 flex items-center justify-center w-12 h-12 md:-left-6"
          aria-label="Previous"
        >
          <i class="fas fa-chevron-left text-xl"></i>
        </button>
        <button
          @click="nextCardMethod"
          class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-[#ff3830] text-white p-3 rounded-full shadow-lg z-10 flex items-center justify-center w-12 h-12 md:-right-6"
          aria-label="Next"
        >
          <i class="fas fa-chevron-right text-xl"></i>
        </button>

        <!-- Carousel Container for Methods -->
        <div class="carousel-container relative overflow-hidden">
          <div
            class="carousel-track flex transition-transform duration-500 ease-in-out"
            :style="{ transform: `translateX(-${currentMethodIndex * (100 / methodsToShow)}%)` }"
          >
            <!-- Card 1: Belajar Percakapan Sehari-hari -->
            <div class="carousel-card flex-shrink-0 w-full md:w-1/2 p-4">
              <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col text-left border border-gray-200 h-full">
                <!-- Bagian atas: Gambar di kiri, H3 di kanan -->
                <div class="flex items-center mb-4">
                  <div class="flex-shrink-0 mr-4">
                    <img src="." alt="Belajar Percakapan Sehari-hari" class="w-24 h-24 object-contain">
                  </div>
                  <h3 class="text-xl font-bold text-[#fe3231]">Belajar Percakapan Sehari-hari</h3>
                </div>
                <!-- Bagian bawah: Paragraf -->
                <p class="text-base text-gray-700">Ngobrol langsung: perkenalan diri, belanja, pesan makanan, hingga simulasi meeting bisnis. Bikin kamu lebih percaya diri ngomong mandarin tanpa kaku.</p>
              </div>
            </div>

            <!-- Card 2: Persiapan HSK dan Sekolah Internasional -->
            <div class="carousel-card flex-shrink-0 w-full md:w-1/2 p-4">
              <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col text-left border border-gray-200 h-full">
                <div class="flex items-center mb-4">
                  <div class="flex-shrink-0 mr-4">
                    <img src="." alt="Persiapan HSK dan Sekolah Internasional" class="w-24 h-24 object-contain">
                  </div>
                  <h3 class="text-xl font-bold text-[#fe3231]">Persiapan HSK dan Sekolah Internasional</h3>
                </div>
                <p class="text-base text-gray-700">Materi terstruktur, latihan soal & strategi biar lebih siap ujian.</p>
              </div>
            </div>

            <!-- Card 3: Kelas Anak dan Remaja -->
            <div class="carousel-card flex-shrink-0 w-full md:w-1/2 p-4">
              <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col text-left border border-gray-200 h-full">
                <div class="flex items-center mb-4">
                  <div class="flex-shrink-0 mr-4">
                    <img src="." alt="Kelas Anak dan Remaja" class="w-24 h-24 object-contain">
                  </div>
                  <h3 class="text-xl font-bold text-[#fe3231]">Kelas Anak dan Remaja</h3>
                </div>
                <p class="text-base text-gray-700">Belajar lewat cerita, lagu, gambar, dan game. Seru, gampang nempel, nggak bikin bosan.</p>
              </div>
            </div>

            <!-- Card 4: Kelas Dewasa dan Profesional -->
            <div class="carousel-card flex-shrink-0 w-full md:w-1/2 p-4">
              <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col text-left border border-gray-200 h-full">
                <div class="flex items-center mb-4">
                  <div class="flex-shrink-0 mr-4">
                    <img src="." alt="Kelas Dewasa dan Profesional" class="w-24 h-24 object-contain">
                  </div>
                  <h3 class="text-xl font-bold text-[#fe3231]">Kelas Dewasa dan Profesional</h3>
                </div>
                <p class="text-base text-gray-700">Praktis untuk kerja & bisnis: presentasi, negosiasi, percakapan kerja sehari-hari.</p>
              </div>
            </div>

            <!-- Card 5: Belajar Lewat Musik dan Film -->
            <div class="carousel-card flex-shrink-0 w-full md:w-1/2 p-4">
              <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col text-left border border-gray-200 h-full">
                <div class="flex items-center mb-4">
                  <div class="flex-shrink-0 mr-4">
                    <img src="." alt="Belajar Lewat Musik dan Film" class="w-24 h-24 object-contain">
                  </div>
                  <h3 class="text-xl font-bold text-[#fe3231]">Belajar Lewat Musik dan Film</h3>
                </div>
                <p class="text-base text-gray-700">Kosakata & listening diasah lewat lagu mandarin populer, drama, dan film pendek. Belajar terasa ringan, seperti lagi nonton atau karaoke.</p>
              </div>
            </div>

            <!-- Card 6: Tracking Progress dan Feedback Personal -->
            <div class="carousel-card flex-shrink-0 w-full md:w-1/2 p-4">
              <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col text-left border border-gray-200 h-full">
                <div class="flex items-center mb-4">
                  <div class="flex-shrink-0 mr-4">
                    <img src="." alt="Tracking Progress dan Feedback Personal" class="w-24 h-24 object-contain">
                  </div>
                  <h3 class="text-xl font-bold text-[#fe3231]">Tracking Progress dan Feedback Personal</h3>
                </div>
                <p class="text-base text-gray-700">Evaluasi rutin + rencana belajar personal. Bisa pantau progress dan tahu apa yang harus ditingkatkan.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Pagination Dots -->
        <div class="flex justify-center mt-8 space-x-2">
          <span
            v-for="(method, index) in methodsData"
            :key="method.id"
            @click="goToMethodSlide(index)"
            :class="['w-3 h-3 rounded-full cursor-pointer transition-colors duration-300',
                     currentMethodIndex === index ? 'bg-[#ff3830]' : 'bg-gray-300']"
          ></span>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Keempat -->

   <!-- Section Kelima -->
    <!-- Add your Section 5 content here -->
   <!-- Section Kelima -->

  <!-- Section Keenam -->
  <section class="bg-[#fe3231] min-h-screen flex items-center justify-center p-4 font-quicksand gamaru-hero-section">
    <!-- Kontainer Utama -->
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-center gap-6 md:justify-between md:gap-4 max-w-6xl"> 
      
      <!-- Konten Teks Kiri (untuk desktop) / Atas (untuk mobile) -->
      <div class="text-white text-center md:text-left mb-4 md:mb-0 md:w-7/12 lg:w-3/5"> 
        <h1 class="font-quicksand text-4xl md:text-5xl lg:text-6xl leading-tight font-bold">
          Yuk, mulai perjalanan belajarmu bersama Gamaru.
        </h1>
        <!-- Tombol WhatsApp untuk Desktop - Sembunyikan di mobile -->
        <a 
          href="https://wa.me/yourwhatsappnumber" 
          target="_blank" 
          class="hidden md:inline-flex items-center bg-[#25D366] text-white px-6 py-3 rounded-full mt-8 text-lg font-semibold hover:bg-[#1DA851] transition-colors duration-300"
        >
          <img src="." alt="WhatsApp Icon" class="w-6 h-6 mr-2">
          Chat MinXue
        </a>
      </div>

      <!-- Konten Gambar Kanan (untuk desktop) / Tengah (untuk mobile) -->
      <div class="flex justify-center md:justify-end md:w-5/12 lg:w-2/5 mb-6 md:mb-0">
        <!-- Lingkaran Kuning dan Gambar Maskot -->
        <div class="relative w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96 flex items-center justify-center">
            <div class="absolute inset-0 bg-yellow-400 rounded-full"></div>
            <img 
              src="." 
              alt="Gamaru Mascot" 
              class="relative z-10 w-full h-full object-contain p-2" 
            >
        </div>
      </div>

      <!-- Tombol WhatsApp untuk Mobile - Sembunyikan di desktop -->
      <div class="md:hidden w-full flex justify-center mt-4"> 
        <a 
          href="https://wa.me/yourwhatsappnumber" 
          target="_blank" 
          class="inline-flex items-center bg-[#25D366] text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-[#1DA851] transition-colors duration-300 w-full max-w-xs justify-center"
        >
          <img src="." alt="WhatsApp Icon" class="w-6 h-6 mr-2">
          Chat MinXue
        </a>
      </div>

    </div>
  </section>

  <!-- Section keenam -->
</template>

<script setup>
import { ref, onMounted, onUnmounted, computed } from 'vue';

// Data untuk Carousel Pertama ("Kenapa Harus Les Privat")
const cardsData = [
  { id: 1, title: 'Personalized Learning', description: 'Belajar 1-on-1 sesuai kebutuhanmu' },
  { id: 2, title: 'Flexibility', description: 'Bisa online/offline, pilih waktumu' },
  { id: 3, title: 'Quality Teacher', description: 'Dibimbing native speaker & pengajar berpengalaman' },
  { id: 4, title: 'Fun Learning', description: 'Belajar seru dan tidak membosankan' },
  { id: 5, title: 'Result-Oriented', description: 'Fokus ke pencapaian hasil nyata' },
  { id: 6, title: 'Trust & Care', description: 'Pendampingan penuh, selalu support kamu' },
];

// Data untuk Carousel Kedua ("Metode Belajar Interaktif")
const methodsData = [
  { id: 1, title: 'Belajar Percakapan Sehari-hari', description: 'Ngobrol langsung: perkenalan diri, belanja, pesan makanan, hingga simulasi meeting bisnis. Bikin kamu lebih percaya diri ngomong mandarin tanpa kaku.' },
  { id: 2, title: 'Persiapan HSK dan Sekolah Internasional', description: 'Materi terstruktur, latihan soal & strategi biar lebih siap ujian.' },
  { id: 3, title: 'Kelas Anak dan Remaja', description: 'Belajar lewat cerita, lagu, gambar, dan game. Seru, gampang nempel, nggak bikin bosan.' },
  { id: 4, title: 'Kelas Dewasa dan Profesional', description: 'Praktis untuk kerja & bisnis: presentasi, negosiasi, percakapan kerja sehari-hari.' },
  { id: 5, title: 'Belajar Lewat Musik dan Film', description: 'Kosakata & listening diasah lewat lagu mandarin populer, drama, dan film pendek. Belajar terasa ringan, seperti lagi nonton atau karaoke.' },
  { id: 6, title: 'Tracking Progress dan Feedback Personal', description: 'Evaluasi rutin + rencana belajar personal. Bisa pantau progress dan tahu apa yang harus ditingkatkan.' },
];

// State dan Fungsi untuk Carousel Pertama (cardsData)
const currentIndex = ref(0);
const cardsToShow = ref(3);

const updateCardsToShow = () => {
  if (window.innerWidth < 768) {
    cardsToShow.value = 1;
  } else if (window.innerWidth < 1024) {
    cardsToShow.value = 2;
  } else {
    cardsToShow.value = 3;
  }
};

const nextCard = () => {
  if (currentIndex.value < cardsData.length - cardsToShow.value) {
    currentIndex.value++;
  } else {
    currentIndex.value = 0;
  }
};

const prevCard = () => {
  if (currentIndex.value > 0) {
    currentIndex.value--;
  } else {
    currentIndex.value = cardsData.length - cardsToShow.value;
  }
};

// State dan Fungsi untuk Carousel Kedua (methodsData)
const currentMethodIndex = ref(0);
const methodsToShow = ref(2);

const updateMethodsToShow = () => {
  if (window.innerWidth < 768) {
    methodsToShow.value = 1;
  } else {
    methodsToShow.value = 2;
  }
};

const nextCardMethod = () => {
  if (currentMethodIndex.value < methodsData.length - methodsToShow.value) {
    currentMethodIndex.value++;
  } else {
    currentMethodIndex.value = 0;
  }
};

const prevCardMethod = () => {
  if (currentMethodIndex.value > 0) {
    currentMethodIndex.value--;
  } else {
    currentMethodIndex.value = methodsData.length - methodsToShow.value;
  }
};

const goToMethodSlide = (index) => {
  currentMethodIndex.value = index;
};

// LifeCycle Hooks
onMounted(() => {
  updateCardsToShow();
  updateMethodsToShow();
  window.addEventListener('resize', updateCardsToShow);
  window.addEventListener('resize', updateMethodsToShow);
});

onUnmounted(() => {
  window.removeEventListener('resize', updateCardsToShow);
  window.removeEventListener('resize', updateMethodsToShow);
});
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&family=Poppins:wght@400;700&display=swap');
@import '@fortawesome/fontawesome-free/css/all.css'; 

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

/* Override default for single card on mobile for the first carousel */
@media (max-width: 767px) { /* below md breakpoint */
  .carousel-card {
    width: 100%; /* 1 kartu di mobile */
  }
}

/* For md and larger, show 2 cards in the first carousel */
@media (min-width: 768px) { /* md breakpoint */
  .carousel-card.md\:w-1\/2 { /* Targeting cards in the first carousel specifically */
    width: 50%; /* 2 kartu */
  }
}
/* For lg and larger, show 3 cards in the first carousel */
@media (min-width: 1024px) { /* lg breakpoint */
  .carousel-card.lg\:w-1\/3 { /* Targeting cards in the first carousel specifically */
    width: calc(100% / 3); /* 3 cards */
  }
}


.carousel-container .carousel-card.md\:w-1\/2 {
  width: 50%; 
}

@media (max-width: 767px) {
  .carousel-container .carousel-card {
    width: 100%; 
  }
}


.gamaru-hero-section h1 { 
  color: #ffffff;
}
</style>