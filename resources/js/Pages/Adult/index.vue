<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
import Hero from "./Components/Hero.vue";
import Keunggulan from "./Components/Keunggulan.vue";
import Layanan from "./Components/Layanan.vue";
import Metode from "./Components/Metode.vue";
import Testimoni from "./Components/Testimoni.vue";
import Cta from "./Components/Cta.vue";
</script>

<template>
    <AppLayout>
        <Head title="Gamaru - Les Privat Mandarin" />

        <section class="">
            <Hero />
        </section>

        <section>
            <Layanan />
        </section>

        <section>
            <Keunggulan />
        </section>

        <section>
            <Metode />
        </section>

        <section>
            <Testimoni />
        </section>

        <section>
            <Cta />
        </section>
    </AppLayout>
</template>
