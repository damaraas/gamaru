<script setup>
import { SiWhatsapp } from "vue-icons-plus/si";
</script>

<template>
    <section class="bg-white py-16 font-sans">
        <div
            class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 items-center text-center md:text-left gap-6 px-6"
        >
            <!-- Kolom 1: Teks -->
            <div class="flex justify-center md:justify-end">
                <h2
                    class="font-bold text-[48px] leading-[100%] tracking-[0] text-center"
                >
                    Yuk belajar <br />
                    Mandarin lebih mudah!
                </h2>
            </div>

            <!-- Kolom 2: Tombol WhatsApp -->
            <div class="flex justify-center md:justify-center">
                <a
                    href="https://wa.me/6281234567890"
                    target="_blank"
                    class="inline-flex items-center bg-[#08CB00] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#00c250] transition shadow-[0px_4.39px_9.32px_0px_#00000040]"
                >
                    <SiWhatsapp class="w-5 h-5 mr-2" />
                    Chat MinXue
                </a>
            </div>

            <!-- Kolom 3: Gambar Panda -->
            <div class="flex justify-center md:justify-start">
                <img
                    src="../../../../public/img/maskot-gamaru.png"
                    alt="Panda Gamaru"
                    class="w-32 md:w-[270px]"
                />
            </div>
        </div>
    </section>
</template>
