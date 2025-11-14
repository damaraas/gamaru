<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
import Hero from "../Components/Home/Hero.vue";
import SectionKenapa from "../Components/Home/SectionKenapa.vue";
import SectionProgram from "../Components/Home/SectionProgram.vue";
import SectionMetode from "../Components/Home/SectionMetode.vue";
import Testimoni from "../Components/Home/Testimoni.vue";
import SectionPaket from "../Components/Home/SectionPaket.vue";
import CTA from "../Components/Home/CTA.vue";
</script>

<template>
    <AppLayout>
        <Head title="Gamaru - Les Privat Mandarin" />

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
