<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";

const mobileMenuOpen = ref(false);
const programOpen = ref(false);

</script>

<template>
    <div class="sticky top-0 w-full z-50 bg-white/80 backdrop-blur-md">
    <!-- Header -->
    <nav class="border-t border-gray-200">
      <div class="container mx-auto font-onest lg:px-10 px-4">
        <div class="flex justify-between items-center py-3">
          <!-- Logo -->
          <div>
            <Link href="/" class="flex items-center gap-2">
              <img
                src="../../../public/img/homepage/hero-bg.webp"
                alt="GAMARU Les Privat Mandarin"
                class="w-28 md:w-34"
              />
            </Link>
          </div>

          <!-- Desktop Menu -->
          <div class="hidden md:flex items-center gap-8">
            <ul class="flex gap-8 text-gray-800">
              <li>
                <Link
                  href="/"
                  class="inline-block p-2 hover:text-gray-600 font-extrabold duration-300"
                  >Beranda</Link
                >
              </li>
              <li class="relative group">
                <button
                    class="inline-block p-2 hover:text-gray-600 font-extrabold duration-300 items-center gap-1"
                >
                    Program
                    <span>▼</span>
                </button>
                <!-- Dropdown -->
                <div
                    class="absolute left-0 mt-2 bg-white shadow-md border rounded-sm w-72 hidden group-hover:block z-50"
                >
                    <Link href="/little-program" class="block px-4 py-2 hover:bg-gray-100">Program Little</Link>
                    <Link href="/program-teens" class="block px-4 py-2 hover:bg-gray-100">Program Teens</Link>
                    <Link href="/program-adult" class="block px-4 py-2 hover:bg-gray-100">Program Adult</Link>
                    <Link href="/global-program" class="block px-4 py-2 hover:bg-gray-100">Program Global</Link>
                </div>
              </li>
              <li>
                <Link
                  href="/karier"
                  class="inline-block p-2 hover:text-gray-600 font-extrabold duration-300"
                  >Karier</Link
                >
              </li>
              <li class="flex items-center">
                <Link href="/daftar">
                  <button
                    class="bg-primary hover:bg-red-600! text-white py-2 px-3 rounded-md font-extrabold duration-300"
                  >
                    DAFTAR SEKARANG
                  </button>
                </Link>
              </li>
            </ul>
          </div>

          <!-- Mobile Button -->
          <div class="md:hidden">
            <button
              @click="mobileMenuOpen = !mobileMenuOpen"
              class="text-gray-800 focus:outline-none"
            >
              <!-- Icon Burger -->
              <svg
                v-if="!mobileMenuOpen"
                xmlns="http://www.w3.org/2000/svg"
                class="h-8 w-8"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"
                />
              </svg>
              <!-- Icon Close -->
              <svg
                v-else
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div
        v-if="mobileMenuOpen"
        class="md:hidden bg-white shadow-md border-t border-gray-200"
      >
        <ul class="flex flex-col text-gray-800">
          <li>
            <Link
              href="/"
              class="block py-3 px-8 hover:bg-gray-100 font-extrabold"
              >Beranda</Link
            >
          </li>
          <li>
            <button
                @click="programOpen = !programOpen"
                class="w-full text-left block py-3 px-8 hover:bg-gray-100 font-extrabold justify-between"
            >
                Program
                <span v-if="!programOpen">▼</span>
                <span v-else>▲</span>
            </button>

            <!-- Submenu -->
            <div v-if="programOpen" class="bg-gray-50">
                <Link href="/little-program" class="block px-12 py-2 hover:bg-gray-100">Program Little</Link>
                <Link href="/program-teens" class="block px-12 py-2 hover:bg-gray-100">Program Teens</Link>
                <Link href="/program-adult" class="block px-12 py-2 hover:bg-gray-100">Program Adult</Link>
                <Link href="/global-program" class="block px-12 py-2 hover:bg-gray-100">Program Global</Link>
            </div>
          </li>
          <li>
            <Link
              href="/karier"
              class="block py-3 px-8 hover:bg-gray-100 font-extrabold"
              >Karier</Link
            >
          </li>
          <li>
            <Link href="/daftar" class="block py-3 px-8">
              <button
                class="w-full bg-primary hover:bg-red-600! py-2 px-3 rounded-md font-extrabold duration-300"
              >
                DAFTAR SEKARANG
              </button>
            </Link>
          </li>
        </ul>
      </div>
    </nav>
</div>
</template>