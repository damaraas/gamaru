<script setup>
import { Fa6Whatsapp } from "vue-icons-plus/fa6";

defineProps({
    whatsappNumber: {
        type: String,
        default: "6285712230349",
    },
    title: {
        type: String,
        default: "Yuk, mulai perjalanan belajarmu bersama Gamaru.",
    },
    buttonText: {
        type: String,
        default: "Chat Minxue",
    },
});
</script>
<template>
    <section class="bg-primary py-16 px-7">
        <div class="max-w-6xl mx-auto">
            <div
                class="flex flex-col lg:flex-row items-center justify-between lg:gap-2 gap-0 lg:ml-12"
            >
                <!-- Text Content -->
                <div class="text-center lg:text-left lg:flex-1">
                    <h2
                        class="text-3xl md:text-5xl font-bold text-white mb-8"
                    >
                        {{ title }}
                    </h2>

                    <!-- CTA Button -->
                    <a
                        href="https://wa.me/6285712230349?text=Halo MinXue! Saya mau tanya info mengenai les privat Mandarin di GAMARU. Bisa dibantu?"
                        target="_blank"
                        class="items-center gap-3 bg-green text-white font-semibold text-lg md:text-xl px-8 py-4 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl lg:inline-flex hidden"
                    >
                        <Fa6Whatsapp class="w-10 h-10" />
                        {{ buttonText }}
                    </a>
                </div>

                <div class="relative flex justify-center items-center ">
                    <!-- Circle Background -->
                    <div
                        class="absolute z-0 rounded-full bg-secondary w-52 h-52 sm:w-56 sm:h-56 md:w-64 md:h-64 lg:w-80 lg:h-80"
                    ></div>

                    <!-- Maskot Image -->
                    <img
                        :src="'/img/global/MaskotGamaru-10.webp'"
                        alt="Lightbulb Character"
                        class="relative z-10 w-72 sm:w-60 md:w-72 lg:w-[440px] h-auto"
                    />
                </div>
            </div>
        </div>
    </section>
</template>