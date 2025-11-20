
<script setup>
import { Head } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import Hero from './Components/Hero.vue';
import Program from './Components/Program.vue';
import Superiority from './Components/superiority.vue';
import Method from './Components/method.vue';
import Testimoni from './Components/Testimoni.vue';
import Cta from './Components/Cta.vue';

</script>
<template>
  <AppLayout>

    <section>
       <Hero />
    </section>

    <!-- Section Program -->
    <section>
       <Program />
    </section>

    <!-- Section Keunggulan -->
    <section>
       <Superiority />
    </section>

    <!-- Section Metode Belajar -->
    <section>
       <Method />
    </section>

    <section>
         <Testimoni />
    </section>

    <section>
      <Cta />
    </section>
  </AppLayout>
</template>

