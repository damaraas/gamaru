<template>
    <section>
        <div class="flex flex-col lg:flex-row px-6 md:px-10 w-full py-5 bg-primary">
            <!-- LEFT CONTENT -->
            <div class="w-full lg:w-7/12 space-y-6 text-left py-6 lg:py-10 lg:px-10">
                <h1 class="text-4xl font-bold leading-snug sm:leading-tight text-gray-900 font-onest">
                    Belajar Mandarin yang Bikin Kamu Nyaman Beradaptasi di Mana Pun
                </h1>
                <p class="font-onest font-semibold">
                    Program Global Learners dari Gamaru membantu kamu
                    beradaptasi lebih mudah lewat pembelajaran Mandarin
                    yang praktis dan relevan untuk kehidupan sehari-hari.
                </p>
                <p class="font-onest font-semibold">
                    Kelas ini fokus pada survival Mandarin, percakapan umum,
                    serta pemahaman budaya Tiongkok supaya kamu bisa
                    berkomunikasi lebih percaya diri di situasi apa pun.
                </p>
                <p class="font-onest font-semibold">
                    Bagi kamu yang sedang mempersiapkan diri untuk kuliah,
                    kerja, atau ujian HSK 4–6, program ini juga menyediakan
                    pembelajaran intensif yang efektif dan suportif.
                </p>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="w-full lg:w-5/12 flex justify-center relative mt-6 lg:mt-0">
                <div class="relative">
                    <div class="absolute z-0 rounded-full bg-secondary aspect-square
                                top-10 left-1/2 -translate-x-1/2
                                w-[80vw] max-w-[250px]
                                sm:top-12 sm:w-[70vw] sm:max-w-[300px]
                                md:top-4 md:w-[50vw] md:max-w-[360px]
                                xl:top-20 xl:left-54 xl:w-[65vw] xl:max-w-[360px]">
                    </div>

                    <!-- Gambar -->
                    <img :src="'/img/global/maskotgamaru-19.webp'" alt="Maskot GAMARU (Global)"
                        class="w-80 sm:w-96 md:w-md lg:w-120 xl:w-lg rounded-lg relative left-2 sm:left-3 z-10" />
                </div>
            </div>
        </div>
    </section>
</template>