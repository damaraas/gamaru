<script>
import Navbar from "../Components/Navbar.vue";
import Footer from "../Components/Footer.vue";

export default {
    components: {
        Navbar,
        Footer,
    },
};
</script>

<template>
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <Navbar />

        <main class="flex-1">
            <slot />
        </main>

        <!-- Footer -->
        <Footer />
    </div>
</template>
