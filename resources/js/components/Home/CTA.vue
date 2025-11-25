<script setup>
import { SiWhatsapp } from "vue-icons-plus/si";

const phone = "6285712230349"; // nomor WA
const message =
    "Halo MinXue! Saya mau tanya info mengenai les privat Mandarin di GAMARU. Bisa dibantu? 😊";
const waUrl = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
</script>

<template>
    <section class="bg-white py-16 font-sans">
        <!-- MOBILE VERSION -->
        <div class="md:hidden text-center px-6">
            <h2 class="font-bold text-[36px] leading-tight mb-4">
                Yuk belajar Mandarin lebih mudah!
            </h2>
            <div class="flex items-center justify-center gap-4">
                <a
                    :href="waUrl"
                    target="_blank"
                    class="inline-flex items-center bg-[#08CB00] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#00c250] transition shadow-[0px_4.39px_9.32px_0px_#00000040]"
                >
                    <SiWhatsapp class="w-5 h-5 mr-2" />
                    Chat MinXue
                </a>
                <img
                    src="../../../../public/img/homepage/maskot-gamaru.webp"
                    alt="Maskot Panda Gamaru"
                    class="w-30"
                />
            </div>
        </div>

        <!-- DESKTOP VERSION -->
        <div
            class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 place-items-center text-center md:text-left gap-6 px-6 hidden md:grid"
        >
            <div class="flex justify-center md:justify-end">
                <h2
                    class="font-bold text-[48px] leading-[100%] tracking-[0] text-center"
                >
                    Yuk belajar Mandarin lebih mudah!
                </h2>
            </div>
            <div class="flex justify-center md:justify-center">
                <a
                    :href="waUrl"
                    target="_blank"
                    class="inline-flex items-center bg-[#08CB00] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#00c250] transition shadow-[0px_4.39px_9.32px_0px_#00000040]"
                >
                    <SiWhatsapp class="w-5 h-5 mr-2" />
                    Chat MinXue
                </a>
            </div>
            <div class="flex justify-center">
                <img
                    src="../../../../public/img/homepage/maskot-gamaru.webp"
                    alt="Maskot Panda Gamaru"
                    class="max-w-60 w-full"
                />
            </div>
        </div>
    </section>
</template>
