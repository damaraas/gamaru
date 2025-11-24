<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
import Hero from "../components/Home/Hero.vue";
import SectionKenapa from "../components/Home/SectionKenapa.vue";
import SectionProgram from "../components/Home/SectionProgram.vue";
import SectionMetode from "../components/Home/SectionMetode.vue";
import Testimoni from "../components/Home/Testimoni.vue";
import SectionPaket from "../components/Home/SectionPaket.vue";
import CTA from "../Components/Home/CTA.vue";
</script>

<template>
    <AppLayout>

        <!-- Head -->
        <Head>
            <title>Gamaru - Les Privat Mandarin</title>
            <meta
                name="description"
                content="Belajar Mandarin dengan metode personalized, mentor profesional, dan fleksibel."
            />
            <meta
                name="keywords"
                content="Gamaru, Les Privat Mandarin, kursus mandarin, belajar mandarin online"
            />
            <meta name="author" content="Gamaru" />
            <meta property="og:title" content="Gamaru - Les Privat Mandarin" />
            <meta
                property="og:description"
                content="Belajar Mandarin dengan cara paling mudah, efektif, dan menyenangkan."
            />
            <meta
                property="og:image"
                content="/img/homepage/maskot-gamaru.webp"
            />
            <meta property="og:url" content="/" />
        </Head>

        <!-- Hero -->
        <Hero />

        <!-- KENAPA HARUS GAMARU -->
        <SectionKenapa />

        <!-- Program -->
        <SectionProgram />

        <!-- METODE BELAJAR -->
        <SectionMetode />

        <!-- TESTIMONI -->
        <Testimoni />

        <!-- PROGRAM GAMARU -->
        <SectionPaket />

        <!-- CTA -->
        <CTA />
        
    </AppLayout>
</template>
