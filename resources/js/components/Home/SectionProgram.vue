<script setup>
import { SiWhatsapp } from "vue-icons-plus/si";
</script>

<template>
    <section id="program" class="bg-[#F9F905] py-16 font-sans">
        <div class="max-w-6xl mx-auto px-6">
            <h2
                class="text-2xl md:text-4xl font-bold text-center mb-10 leading-[100%] tracking-[0]"
            >
                Program Les Privat Mandarin <br />untuk Anak, Remaja, Dewasa
            </h2>

            <div class="space-y-10">
                <!-- Anak -->
                <div
                    class="relative bg-[#FE3231] text-white rounded-[20px] px-8 py-10 overflow-hidden"
                >
                    <div class="md:w-2/3 space-y-2">
                        <h3
                            class="font-bold text-[24px] leading-[100%] tracking-[0]"
                        >
                            Anak (5–12 Tahun)
                        </h3>
                        <p
                            class="italic font-semibold text-[24px] leading-[100%] tracking-[0]"
                        >
                            Fun Learning & Personalized
                        </p>
                        <p
                            class="font-light text-[24px] leading-[100%] tracking-[0] mt-3"
                        >
                            Value:
                        </p>
                        <ul
                            class="list-disc ml-7 space-y-1 text-[24px] leading-relaxed"
                        >
                            <li>Materi pembelajaran sesuai usia & kebutuhan</li>
                            <li>Belajar interaktif, bukan sekadar hafalan</li>
                            <li>Guru sabar & ramah anak</li>
                            <li>
                                Laporan perkembangan pembelajaran untuk orang
                                tua
                            </li>
                        </ul>
                    </div>
                    <img
                        src="../../../../public/img/anak.png"
                        alt="Anak"
                        class="absolute bottom-0 right-8 w-60 md:w-[320px] md:h-[400px] object-cover"
                    />
                </div>

                <!-- Remaja -->
                <div
                    class="relative bg-[#FE3231] text-white rounded-[20px] px-8 py-10 overflow-hidden"
                >
                    <div class="md:w-2/3 space-y-2">
                        <h3
                            class="font-bold text-[24px] leading-[100%] tracking-[0]"
                        >
                            Remaja (13–18 Tahun)
                        </h3>
                        <p
                            class="italic font-semibold text-[24px] leading-[100%] tracking-[0]"
                        >
                            Flexibility & Trust and Care
                        </p>
                        <p
                            class="font-light text-[24px] leading-[100%] tracking-[0] mt-3"
                        >
                            Value:
                        </p>
                        <ul
                            class="list-disc ml-7 space-y-1 text-[24px] leading-relaxed"
                        >
                            <li>
                                Fokus ke target: percakapan, akademik, atau HSK
                            </li>
                            <li>Materi menyesuaikan & jadwal fleksibel</li>
                            <li>Komunikasi intensif dengan guru native</li>
                            <li>
                                Laporan perkembangan pembelajaran untuk orang
                                tua
                            </li>
                        </ul>
                    </div>
                    <img
                        src="../../../../public/img/remaja.png"
                        alt="Remaja"
                        class="absolute bottom-0 right-8 w-60 md:w-[378px] md:h-[302px] object-cover"
                    />
                </div>

                <!-- Dewasa -->
                <div
                    class="relative bg-[#FE3231] text-white rounded-[20px] px-8 py-10 overflow-hidden"
                >
                    <div class="md:w-2/3 space-y-2">
                        <h3
                            class="font-bold text-[24px] leading-[100%] tracking-[0]"
                        >
                            Dewasa (18+ Tahun)
                        </h3>
                        <p
                            class="italic font-semibold text-[24px] leading-[100%] tracking-[0]"
                        >
                            Practical & Result-Oriented
                        </p>
                        <p
                            class="font-light text-[24px] leading-[100%] tracking-[0] mt-3"
                        >
                            Value:
                        </p>
                        <ul
                            class="list-disc ml-7 space-y-1 text-[24px] leading-relaxed"
                        >
                            <li>Materi sesuai kebutuhan kerja/bisnis</li>
                            <li>Latihan percakapan praktis & profesional</li>
                            <li>Laporan perkembangan pembelajaran</li>
                            <li>Komunikasi intensif dengan guru native</li>
                        </ul>
                    </div>
                    <img
                        src="../../../../public/img/8a3f94e50f2da58a7d91109f4369a0f5511e452f.png"
                        alt="Dewasa"
                        class="absolute -bottom-39 right-8 w-60 md:w-[394px] md:h-[492px] object-cover"
                    />
                </div>
                <div class="flex justify-center">
                    <a
                        href="https://wa.me/6281234567890"
                        target="_blank"
                        class="inline-flex items-center bg-[#08CB00] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#00c250] transition shadow-[0px_4.39px_9.38px_0px_#00000040]"
                    >
                        <SiWhatsapp class="w-5 h-5 mr-2" />
                        Konsultasi MinXue
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>
