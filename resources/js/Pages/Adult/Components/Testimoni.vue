<script setup>
import { ref, computed, onMounted, onBeforeUnmount } from "vue";
import { LuChevronLeft, LuChevronRight } from "vue-icons-plus/lu";
import { Fa6ArrowLeft, Fa6ArrowRight } from "vue-icons-plus/fa6";

const testimonials = [
    {
        name: "Kevin, Mahasiswa – Jakarta",
        desc: "Saya kuliah sambil kerja part-time, jadi butuh jadwal fleksibel. Untungnya di GAMARU bisa pilih belajar online. Tutornya menyesuaikan waktu saya, dan sekarang kemampuan Mandarin saya jauh lebih lancar untuk kebutuhan kuliah dan kerja",
    },
    {
        name: "Bu Christian, Orang Tua Siswa – Tangerang",
        desc: "Anak saya dulu sering kesulitan memahami kosakata Mandarin, cepat bosan, dan kurang percaya diri. Setelah ikut les di GAMARU, belajarnya jadi lebih menyenangkan karena banyak aktivitas interaktif. Sekarang dia malah semangat setiap kali ada jadwal les!",
    },
    {
        name: "Felita, Siswa SMA – Jakarta",
        desc: "Saya ikut kelas persiapan HSK 3 di GAMARU. Gurunya sabar banget dan cara mengajarnya jelas. Latihan soal dan strategi belajarnya bikin saya lebih siap. Hasilnya, nilai HSK saya naik signifikan!",
    },
    {
        name: "Andre, Supervisor Logistik – Surabaya",
        desc: "Pekerjaan saya menuntut komunikasi dengan supplier dari China. Les di GAMARU benar-benar membantu, karena gurunya fokus ngajarin percakapan bisnis yang langsung bisa dipakai di kerjaan sehari-hari",
    },
    {
        name: "Stephanie, Staff Marketing – Jakarta",
        desc: "Di kantor saya sering ketemu klien dari Tiongkok, tapi dulu agak minder karena nggak lancar bahasa Mandarin. Setelah ikut les privat di GAMARU, saya jadi lebih percaya diri presentasi. Bahkan atasan saya bilang komunikasi saya sekarang jauh lebih baik",
    },
    {
        name: "Celine, Orang Tua Siswa – Surabaya",
        desc: "Anak saya cepat bosan kalau belajar. Tapi tutor GAMARU pintar cari cara supaya kelasnya interaktif. Ada latihan percakapan, game, bahkan nonton video. Sekarang anak saya jadi lebih berani ngobrol dalam bahasa Mandarin",
    },
];

const currentSlide = ref(0);

// SET 1 CARD UNTUK SEMUA DEVICE
const itemsPerSlide = ref(1);

const totalSlides = computed(() =>
    Math.ceil(testimonials.length / itemsPerSlide.value)
);

const goToSlide = (i) => {
    if (i >= 0 && i < totalSlides.value) currentSlide.value = i;
};
const nextSlide = () =>
    (currentSlide.value = (currentSlide.value + 1) % totalSlides.value);
const prevSlide = () =>
    (currentSlide.value =
        (currentSlide.value - 1 + totalSlides.value) % totalSlides.value);

// Tidak butuh updateItemsPerSlide lagi
// Tapi kalau tetap ingin struktur rapi, kita set saja selalu 1
const updateItemsPerSlide = () => {
    itemsPerSlide.value = 1;
};

onMounted(() => {
    updateItemsPerSlide();
    window.addEventListener("resize", updateItemsPerSlide);
});
onBeforeUnmount(() => {
    window.removeEventListener("resize", updateItemsPerSlide);
});
</script>

<template>
    <section class="bg-secondary py-12">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-7">Testimoni</h2>

            <div class="relative overflow-hidden">
                <div
                    class="flex transition-transform duration-500"
                    :style="{
                        transform: `translateX(-${currentSlide * 100}%)`,
                    }"
                >
                    <div
                        v-for="(slide, slideIndex) in totalSlides"
                        :key="slideIndex"
                        class="w-full flex-shrink-0 grid grid-cols-1 gap-6 px-2"
                    >
                        <div
                            v-for="item in testimonials.slice(
                                slideIndex * itemsPerSlide,
                                (slideIndex + 1) * itemsPerSlide
                            )"
                            :key="item.name"
                            class="rounded-2xl p-8 text-left flex lg:flex-col flex-row h-full"
                        >
                            <div
                                class="flex lg:flex-row flex-col space-x-6 justify-center"
                            >
                                <div class="lg:w-1/12 w-full h-[180px] lg:h-auto">
                                    <div class="relative">
                                        <!-- Polygon Background -->
                                        <div
                                            class="absolute top-10 left-1/2 -translate-x-1/2 <!-- MOBILE CENTER --> lg:top-[1.2rem] lg:left-[8.6rem] lg:-translate-x-[9.8rem] <!-- DESKTOP POSITION --> xl:left-[13rem] xl:top-[3.3rem] bg-primary z-0 rounded-full w-full max-w-[150px] lg:max-w-[200px] xl:max-w-[300px] aspect-square"
                                        ></div>

                                        <!-- Gambar -->
                                        <img
                                            :src="'/img/Adult/testimoni.jpg'"
                                            alt="Student"
                                            class="absolute left-[185px] -translate-x-1/2 mt-4 <!-- MOBILE CENTER --> lg:relative lg:-left-[10px] lg:translate-x-0 <!-- DESKTOP NORMAL --> lg:w-full max-w-[150px]  rounded-full border-4 border-white"
                                        />
                                    </div>
                                </div>
                                <div class="lg:w-6/12 w-full lg:mt-0 mt-5">
                                    <p
                                        class="text-black font-bold text-xl leading-relaxed mt-2"
                                    >
                                        “{{ item.desc }}”
                                    </p>
                                    <h1 class="font-medium text-xl flex-1 mt-3">
                                        - {{ item.name }}
                                    </h1>
                                </div>
                                <div class="lg:w-4/12 w-full lg:mt-0 mt-10">
                                    <div class="relative">
                                        <!-- Polygon Background -->
                                        <div
                                            class="absolute left-[11rem] lg:left-[10rem] -top-[1.2rem] -translate-x-[9.8rem] xl:left-[13rem] xl:top-[3.3rem] bg-primary z-0 rounded-full w-full max-w-[245px] lg:max-w-[300px] xl:max-w-[340px] aspect-square"
                                        ></div>
                                        <!-- Gambar -->
                                        <img
                                            :src="'/img/Adult/Maskot.webp'"
                                            alt="Student"
                                            class="w-full max-w-[380px] lg:max-w-[440px] xl:max-w-[465px] rounded-lg relative -left-5 sm:left-3"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination + Arrow -->
            <div class="flex justify-center items-center space-x-4">
                <!-- <button
                    @click="prevSlide"
                    class=" text-black p-2 "
                >
                    <Fa6ArrowLeft class="w-5 h-5" />
                </button> -->

                <div class="flex space-x-2">
                    <button
                        v-for="i in totalSlides"
                        :key="i"
                        @click="goToSlide(i - 1)"
                        class="w-3 h-3 rounded-full"
                        :class="currentSlide === i - 1 ? 'bg-black' : 'border '"
                    ></button>
                </div>

                <button @click="nextSlide" class="text-black p-2">
                    <Fa6ArrowRight class="w-5 h-5" />
                </button>
            </div>
        </div>
    </section>
</template>
