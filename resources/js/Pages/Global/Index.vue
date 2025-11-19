<script setup>
import { Head } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import Hero from './Components/Hero.vue';
import Features from './Components/Features.vue';
import Benefits from './Components/Benefits.vue';
import Methods from './Components/Methods.vue';
import Testimoni from './Components/Testimoni.vue';
import Cta from './Components/Cta.vue';

</script>

<template>
  <Head title="Program Global GAMARU Les Privat Mandarin" />
  <AppLayout>
    <!-- Section Hero -->
    <section>
       <Hero />
    </section>

    <!-- Section Features -->
    <section>
       <Features />
    </section>

    <!-- Section Benefirs -->
    <section>
       <Benefits />
    </section>

    <!-- Section Methods -->
    <section>
       <Methods />
    </section>

    <!-- Section Testimoni -->
    <Section>
      <Testimoni />
    </Section>

    <!-- Section Cta -->
    <Section>
      <Cta />
    </Section>

  </AppLayout>
</template>