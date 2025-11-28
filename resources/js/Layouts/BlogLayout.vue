<script>
import Navbar from "../Components/Navbar.vue";
import Footer from "../Components/Footer.vue";
import FloatingWA from "../components/FloatingWA.vue";

export default {
  components: {
    Navbar,  // Pastikan Navbar didaftarkan
    Footer,   // Pastikan Footer didaftarkan
    FloatingWA
  }
}
</script>

<template>
  <div class="min-h-screen flex flex-col">
    <!-- Navbar -->
    <Navbar />
    
    <!-- Content -->
    <main class="flex-1">
      <slot />
    </main>

    <!-- Tombol WA -->
    <FloatingWA />

    <!-- Footer -->
    <Footer />
  </div>
</template>