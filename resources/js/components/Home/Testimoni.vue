<template>
    <section
        id="testimoni"
        class="bg-[#F9F905] font-sans py-16 relative overflow-hidden"
    >
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-12">
                <h2
                    class="text-2xl md:text-4xl font-bold text-center leading-[100%] tracking-[0]"
                >
                    Testimoni
                </h2>
                <p class="font-medium text-4xl leading-[100%] tracking-[0]">
                    Apa Kata Siswa dan Orang Tua?
                </p>
            </div>

            <!-- Konten -->
            <div class="flex flex-col md:flex-row justify-between mt-24">
                <!-- Gambar -->
                <div
                    class="relative w-full flex justify-center items-end mb-8 md:mb-0 overflow-visible"
                >
                    <!-- Lingkaran Merah di Belakang -->
                    <div
                        class="absolute w-[300px] h-[300px] bg-[#FE3231] rounded-full -bottom-18 left-1/2 -translate-x-1/2 z-0"
                    ></div>

                    <!-- Foto -->
                    <img
                        src="../../../../public/img/Admin Gamaru 4 (Transparan).png"
                        alt="Siswa Gamaru"
                        class="absolute -bottom-18 z-10 w-[1000px] md:w-3xl object-cover translate-y-4"
                    />
                </div>

                <!-- TEKS TESTIMONI -->
                <div class="w-full">
                    <blockquote
                        class="font-medium text-[22px] leading-[100%] tracking-[0] text-justify"
                    >
                        “Saya kuliah sambil kerja part-time, jadi butuh jadwal
                        fleksibel. Untungnya di <b>GAMARU</b> bisa pilih belajar
                        online. Tutornya menyesuaikan waktu saya, dan sekarang
                        kemampuan Mandarin saya jauh lebih lancar untuk
                        kebutuhan kuliah dan kerja.”
                    </blockquote>
                    <p
                        class="mt-4 font-bold text-[22px] leading-[100%] tracking-[0]"
                    >
                        <span class="font-semibold text-black">Kevin</span>,
                        Mahasiswa – Jakarta
                    </p>
                    <!-- Navigasi -->
                    <div
                        class="flex items-center justify-center md:justify-center mt-10 space-x-4"
                    >
                        <div class="flex space-x-2">
                            <span class="w-2 h-2 bg-black rounded-full"></span>
                            <span
                                class="w-2 h-2 bg-black/40 rounded-full"
                            ></span>
                            <span
                                class="w-2 h-2 bg-black/40 rounded-full"
                            ></span>
                            <span
                                class="w-2 h-2 bg-black/40 rounded-full"
                            ></span>
                            <span
                                class="w-2 h-2 bg-black/40 rounded-full"
                            ></span>
                        </div>
                        <div
                            class="w-8 h-8 flex items-center justify-center rounded-full"
                        >
                            <img
                                src="../../../../public/img/arrow-right.png"
                                alt=""
                                srcset=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
