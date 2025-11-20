<script setup>
import { Link } from "@inertiajs/vue3";
import { SiWhatsapp } from "vue-icons-plus/si";
import { AiOutlineMail } from "vue-icons-plus/ai";
import { BsInstagram } from "vue-icons-plus/bs";
import { FaTiktok } from "vue-icons-plus/fa";
import { AiOutlineYoutube } from "vue-icons-plus/ai";
import { BsFacebook } from "vue-icons-plus/bs";
import { BsLinkedin } from "vue-icons-plus/bs";

</script>

<template>
    <footer class="bg-[#474747] text-white text-center py-4">
      <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 lg:gap-8 py-8 sm:py-18 lg:py-18 px-6 sm:px-12 lg:px-25 text-left">
      
      <!-- Kolom 1 -->
      <div class="md:col-span-3 lg:col-span-1 md:text-center lg:text-left">
        <img src="../../../public/img/homepage/hero-bg.webp" alt="GAMARU Les Privat Mandarin" class="w-45 lg:w-50 block md:mx-auto lg:mx-0 mx-0">
        <h3 class="font-bold mb-5">Part of GATRACO MITRA SEJAHTERA</h3>
        <p>Suncity Square, Jl. Mayor Madmuin Hasibuan Blok E No.19, RT.004/RW.002, Marga Jaya, Kec.
            Bekasi Sel, Kota Bks, Jawa Barat 17141, Indonesia.</p>
      </div>
      
      <!-- Kolom 2 -->
      <div>
        <h3 class="font-bold mb-4">PROGRAM LES PRIVAT</h3>
        <ul class="space-y-2">
          <li>
            <a href="/little-program" class="hover:underline">Little Learners</a>
          </li>
          <li>
            <a href="/program-teens" class="hover:underline">Teens & School Prep</a>
          </li>
          <li>
            <a href="#" class="hover:underline">Adults & Profesinals</a>
          </li>
          <li>
            <a href="#" class="hover:underline">Global Learners</a>
          </li>
        </ul>
      </div>

      <!-- Kolom 3 -->
      <div class="flex flex-col sm:flex-row gap-6 lg:flex-col md:col-span-2 lg:col-span-1">
        <div>
          <h3 class="font-bold mb-4">LOKASI</h3>
        <div class="gap-4 md:gap-0">
          <p>
            Jakarta <br>
            Bekasi <br>
            Depok <br>
            Tangerang <br>
            Bogor <br>
          </p>
        </div>
        </div>

        <div class="md:ml-33 lg:ml-0">
          <h3 class="font-bold lg:mt-6 mb-4">BANTUAN</h3>
        <ul class="space-y-1">
          <li>
            <Link href="/karier" class="hover:underline">Karier</Link>
          </li>
          <li>
            <Link href="/blog" class="hover:underline">Blog</Link>
          </li>
          <li>
            <Link href="/faq-bantuan" class="hover:underline">FAQ</Link>
          </li>
        </ul>
        </div>
      </div>
      
      <!-- Kolom 4 -->
      <div class="md:col-span-3 lg:col-span-1 flex flex-wrap md:justify-between md:items-start">
        <div>
          <h3 class="font-bold mb-4">HUBUNGI KAMI</h3>
        <ul class="space-y-2">
          <li><a href="https://wa.me/6285712230349" class="hover:underline flex items-center"><SiWhatsapp class="mr-2 w-4 h-4" />0857-1223-0349</a></li>
          <li><a href="mailto:bimbelprivatjkt@gmail.com" class="hover:underline flex items-center"><AiOutlineMail class="mr-2 w-4 h-4" />bimbelprivatjkt@gmail.com</a></li>
        </ul>
        </div>

        <div class="mt-6 flex-1 flex justify-center md:justify-end">
        <ul class="flex justify-center lg:items-center gap-4">
          <li><a href="https://www.instagram.com/gatracobimbel" class=""><BsInstagram class="mr-2 w-8 h-8" /></a></li>
          <li><a href="https://www.tiktok.com/@gatracobimbel" class=""><FaTiktok class="mr-2 w-8 h-8" /></a></li>
          <li><a href="#" class=""><AiOutlineYoutube class="mr-2 w-8 h-8" /></a></li>
          <li><a href="https://www.facebook.com/bimbel.privat.jakarta" class=""><BsFacebook class="mr-2 w-8 h-8" /></a></li>
          <li><a href="https://www.linkedin.com/company/pt-gatraco-mitra-sejahtera" class=""><BsLinkedin class="mr-2 w-8 h-8" /></a></li>
        </ul>
      </div>
      </div>

    <!-- Copyright -->
    </div>
      <div class="border-t border-2 border-white mx-8 mb-4"></div>
      <p>&copy; {{ new Date().getFullYear() }} Gamaru Les Privat Mandarin. All rights reserved.</p>
    </footer>
</template>