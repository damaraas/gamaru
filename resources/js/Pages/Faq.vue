<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Head } from '@inertiajs/vue3'
import { ref } from "vue";
import { Fa6Whatsapp } from "vue-icons-plus/fa6";

// Props
const props = defineProps({
    whatsappNumber: {
        type: String,
        default: "6285712230349",
    },
    faqItems: {
        type: Array,
        default: () => [],
    },
});

// Reactive data
const openFaq = ref(null);

// Default FAQ data
const faqData =
    props.faqItems.length > 0
        ? props.faqItems
        : [
            {
                question: "Apa itu Gamaru?",
                answer: "Gamaru adalah platform les privat Mandarin yang bikin belajar jadi seru dan efektif! Mulai dari anak-anak hingga dewasa pemula. Metode belajar yang personal, fleksibel (online atau tatap muka).",
            },
            {
                question: "Berapa harga les privat mandarin untuk anak di gamaru?",
                answer: "Harga les privat Mandarin untuk anak di Gamaru sangat fleksibel dan kompetitif, tergantung pada paket dan frekuensi yang Anda pilih. Silakan klik tombol Program Gamaru untuk mendapatkan rincian tarif yang sesuai dengan kebutuhan belajar anak Anda.",
            },
            {
                question: "Apakah anak saya yang benar-benar pemula bisa les privat mandarin dari nol?",
                answer: "Tentu saja! Kurikulum Gamaru dirancang khusus bagi yang ingin les privat Mandarin dari nol, termasuk anak-anak, dengan fokus pada Pinyin dan kosakata dasar. Kami memastikan proses belajar Mandarin berjalan mudah dan menyenangkan.",
            },
            {
                question: "Apakah ada kelas HSK preparation di Gamaru untuk level 1 hingga 6?",
                answer: "Ya, kami menyediakan program HSK preparation yang lengkap untuk level 1 sampai 6, fokus pada strategi ujian, simulasi, dan pendalaman materi. Dengan bimbingan guru privat Mandarin berpengalaman, target kelulusan HSK Anda akan lebih mudah tercapai.",
            },
            {
                question: "Bagaimana cara mendaftar untuk kursus Mandarin online di Gamaru?",
                answer: "Proses pendaftaran kursus Mandarin online di Gamaru sangat mudah: cukup klik tombol Daftar Sekarang di halaman ini. Tim kami akan segera menghubungi Anda untuk konsultasi jadwal, penempatan level, dan pemilihan guru yang sesuai.",
            },
            {
                question: "Apakah materi kursus Mandarin Gamaru relevan untuk kebutuhan profesional dan bisnis?",
                answer: "Sangat relevan! Kami memiliki modul khusus kursus Mandarin profesional yang berfokus pada komunikasi bisnis, terminologi industri, dan korespondensi. Program ini dirancang untuk meningkatkan skill bahasa Anda agar siap bersaing di lingkungan kerja.",
            },
            {
                question: "Berapa lama waktu yang dibutuhkan agar saya/anak saya bisa lancar belajar Mandarin?",
                answer: "Durasi untuk bisa belajar Mandarin lancar bergantung pada intensitas les dan ketekunan individu. Namun, dengan kurikulum kami, banyak siswa menunjukkan kemajuan signifikan dan bisa berkomunikasi dasar dalam 3-6 bulan pertama.",
            },
            {
                question: "Bagaimana Gamaru memilih guru privat Mandarin yang cocok untuk anak saya?",
                answer: "Kami menggunakan sistem matching guru yang cermat, mencocokkan guru privat Mandarin berdasarkan karakter anak, gaya belajar, dan target spesifiknya. Hal ini penting untuk memastikan kenyamanan anak selama proses les privat Mandarin.",
            },
        ];

// Methods
const toggleFaq = (index) => {
    openFaq.value = openFaq.value === index ? null : index;
};
</script>

<template>
    <Head title="FAQ & Tentang GAMARU Les Privat Mandarin" />
    <AppLayout>
        <section>
            <div class="max-w-full mx-auto">
                <div>
                    <!-- Title and Character -->
                    <div class="flex flex-col items-center lg:items-center justify-center bg-white py-8 px-6">
                        <!-- Title -->
                        <div
                            class="mb-1 flex flex-row items-center text-center gap-4 lg:px-8 px-0">
                            <!-- Heading -->
                            <h2 class="text-3xl md:text-5xl lg:text-6xl font-black text-red-500 md:mb-4">
                                FAQ & Tentang Gamaru
                            </h2>
                        </div>

                        <!-- Character Book (Gambar di tengah) -->
                        <div class="relative mb-0 flex justify-center items-center w-full">
                            <!-- Background Circle -->
                            <div
                                class="absolute z-0 rounded-full bg-[#F9F905] w-58 h-58 lg:w-72 lg:h-72">
                            </div>

                            <!-- Gambar -->
                            <img :src="'/img/faq/Maskot Gamaru-01.webp'" alt="Character Image GAMARU"
                                class="relative z-10 w-70 h-70 lg:w-100 lg:h-100 rounded-lg overflow-hidden lg:left-3 left-2 -bottom-1" />
                        </div>

                        <!-- CTA Button (Tengah) -->
                        <div class="lg:flex justify-center items-center">
                            <a href="#" target="_blank"
                                class="inline-flex items-center gap-3 bg-red-500 text-white font-bold text-lg px-10 py-4 rounded-xl transition-all transform shadow-lg justify-center">
                                <div>
                                    <p class="lg:text-2xl md:text-xl text-lg text-center">Frequently Asked Question</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- FAQ Accordion -->
                    <div class="lg:py-24 py-12 px-6 bg-red-500">
                        <div v-for="(faq, index) in faqData" :key="index"
                            class="bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 lg:mx-40 md:mx-28 lg:mt-8 md:mt-8 mt-4">
                            <!-- Question Header -->
                            <button @click="toggleFaq(index)" class="w-full px-6 py-4 text-left duration-200 bg-white">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-md md:text-xl font-bold pr-4">
                                        {{ faq.question }}
                                    </h3>
                                    <div class="shrink-0 rounded-full px-1 py-1 bg-[#F9F905] border-3">
                                        <svg :class="{
                                            'rotate-180': openFaq === index,
                                        }" class="w-5 h-5 text-black transition-transform duration-300" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </button>

                            <!-- Answer Content -->
                            <div :class="{
                                'max-h-96 pb-4': openFaq === index,
                                'max-h-0': openFaq !== index,
                            }" class="px-6 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                                <div class="text-black leading-relaxed pt-4">
                                    {{ faq.answer }}
                                </div>
                            </div>
                        </div>

                        <!-- CTA Whatsapp -->
                        <div class="bg-[#F9F905] rounded-2xl shadow-lg lg:mx-40 mt-16 py-6">
                            <div class="flex flex-col lg:flex-row items-center justify-center lg:gap-10 md:gap-4">
                                <div class="relative mb-0 flex justify-center items-center">
                                    <!-- Background Circle -->
                                    <div class="absolute z-0 rounded-full bg-white lg:w-64 lg:h-64 w-52 h-52"></div>

                                    <!-- Gambar -->
                                    <img :src="'/img/faq/Maskot Gamaru-02.webp'" alt="Character Image"
                                        class="relative z-10 lg:w-[320px] lg:h-80 w-62 h-62 rounded-lg overflow-hidden left-3 -bottom-1" />
                                </div>
                                <a :href="`https://wa.me/${whatsappNumber}?text=Halo MinXue! Saya mau tanya info mengenai les privat Mandarin di GAMARU. Bisa dibantu?`"
                                target="_blank" class="inline-flex items-center gap-3 bg-green text-white font-semibold 
                                        lg:text-lg md:text-xl px-6 py-3 md:px-6 md:py-3 
                                        rounded-xl transition-all duration-300 
                                        hover:scale-[1.03] shadow-lg hover:shadow-xl">
                                <Fa6Whatsapp class="w-8 h-8 md:w-7 md:h-7" />
                                DAFTAR SEKARANG!!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>