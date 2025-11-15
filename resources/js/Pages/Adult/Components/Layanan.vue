<script setup>
import {Io5PricetagsOutline } from 'vue-icons-plus/io5'
import { MdTrackChanges } from "vue-icons-plus/md";
import { Fa6Bullseye, Fa6RegClock } from 'vue-icons-plus/fa6'
const cards = [
  {
    icon: Fa6RegClock,
    title: "Durasi",
    desc: "90 Menit/Sesi",
  },
  {
    icon: Io5PricetagsOutline,
    title: "Harga",
    desc: "Rp600.000/Sesi",
  },
  {
    icon: MdTrackChanges,
    title: "Fokus Utama",
    desc: "Percakapan bisnis, presentasi, meeting, bahasa formal sesuai bidang kerja",
  },
  {
    icon: Fa6Bullseye,
    title: "Tujuan",
    desc: "Meningkatkan kemampuan komunikasi profesional dan memperluas peluang karier di lingkungan global",
  },
];
</script>

<template>
  <section class="py-10">
    <h2 class="text-3xl md:text-3xl font-bold text-center mb-10">
      Adults & Professionals (18+ Tahun)
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-4xl mx-auto px-4">
      <div
        v-for="(item, index) in cards"
        :key="index"
        class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 flex flex-col items-center text-center"
      >
        <!-- Icon Red Circle -->
        <div
          class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center mb-4"
        >
          <component
            :is="item.icon"
            class="text-white text-3xl w-7 h-7"
          />
        </div>

        <h3 class="text-lg font-bold mb-2">{{ item.title }}</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          {{ item.desc }}
        </p>
      </div>
    </div>
  </section>
</template>
