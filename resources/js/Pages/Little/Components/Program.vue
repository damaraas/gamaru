<template>
  <section class="bg-white py-12 px-4">
    <div class="max-w-6xl mx-auto">
      <!-- Header -->
      <div class="text-center mb-4">
        <div class="inline-block bg-primary text-white px-8 py-4 rounded-lg text-xl font-bold mb-8">
          Little Learners (4-12 tahun)
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
        <div class="border-2 border-gray-200 rounded-2xl p-6 text-center hover:shadow-lg transition-shadow">
          <div
            class="text-white text-4xl mb-4 bg-[#ff3830] rounded-full p-3 flex items-center justify-center mx-auto w-16 h-16">
            <i class="fa-solid fa-crosshairs"></i>
          </div>
          <h3 class="font-bold text-2xl mb-2">Fokus Utama</h3>
          <p class="text-lg">Bernyanyi, permainan, flashcard, hafalan dasar, perkenalan Hanzi, kosakata sehari-hari</p>
        </div>

        <!-- Tujuan -->
        <div class="border-2 border-gray-200 rounded-2xl p-6 text-center hover:shadow-lg transition-shadow">
          <div
            class="text-white text-4xl mb-4 bg-[#ff3830] rounded-full p-3 flex items-center justify-center mx-auto w-16 h-16">
            <i class="fa-solid fa-bullseye"></i>
          </div>
          <h3 class="font-bold text-2xl mb-2">Tujuan</h3>
          <p class="text-lg">​Membiasakan anak dengan bahasa Mandarin sejak dini, meningkatkan rasa percaya diri, dan menjadikan belajar sebagai pengalaman menyenangkan</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
// No props or data needed for this component
</script>