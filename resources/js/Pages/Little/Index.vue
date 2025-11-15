
<script setup>
import { Head } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import Hero from './Components/Hero.vue';
import Program from './Components/Program.vue';

</script>
<template>
  <AppLayout>

    <section>
       <Hero />
    </section>

    <section>
       <Program />
    </section>

  </AppLayout>
</template>

