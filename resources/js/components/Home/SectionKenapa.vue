<script>
export default {
    data() {
        return {
            current: 0,
            cards: [
                {
                    title: "Personalized Learning",
                    img: "img/homepage/personalized.webp",
                    desc: "Belajar 1-on-1 sesuai kebutuhanmu",
                },
                {
                    title: "Flexibility",
                    img: "img/homepage/flexibility.webp",
                    desc: "Bisa online/offline, pilih waktumu",
                },
                {
                    title: "Quality Teacher",
                    img: "img/homepage/quality.webp",
                    desc: "Dibimbing native speaker & pengajar berpengalaman",
                },
                {
                    title: "Fun Learning",
                    img: "img/homepage/fun.webp",
                    desc: "Belajar seru dan tidak membosankan",
                },
            ],
            cardImageClasses: [
                "mx-auto h-32 object-contain", // Card 1
                "mx-auto h-22 mb-6 object-contain", // Card 2
                "mx-auto h-32 object-contain", // Card 3
                "mx-auto h-32 object-contain", // Card 4
            ],
        };
    },

    computed: {
        reverseArrow() {
            return this.current >= 2;
        },
    },

    methods: {
        nextPair() {
            this.current = (this.current + 2) % this.cards.length;
        },
    },
};
</script>

<template>
    <section class="py-16 bg-white font-sans" id="kenapa">
        <h2 class="text-2xl md:text-4xl font-bold text-center mb-10">
            Kenapa Harus Les Privat Mandarin di Gamaru?
        </h2>

        <div class="max-w-7xl mx-auto px-6">
            <!-- Mobile View -->
            <div class="sm:hidden">
                <div class="flex gap-5">
                    <!-- Card 1 -->
                    <div
                        class="bg-[#FE3231] w-1/2 text-white rounded-2xl p-4 text-center relative"
                    >
                        <h3 class="font-bold text-base">
                            {{ cards[current].title }}
                        </h3>
                        <img
                            :src="cards[current].img"
                            :alt="cards[current].title"
                            :class="
                                current === 1
                                    ? 'mx-auto h-22 mb-6 object-contain'
                                    : current === 3
                                    ? 'mx-auto h-40 object-contain'
                                    : 'mx-auto h-32 mb-1 object-contain'
                            "
                        />
                        <p class="text-sm">{{ cards[current].desc }}</p>
                    </div>
                    <!-- Card 2 -->
                    <div
                        class="bg-[#FE3231] w-1/2 text-white rounded-2xl p-4 text-center relative"
                    >
                        <h3
                            class="font-bold text-base"
                            :class="current + 1 === 1 ? 'mb-10' : ''"
                        >
                            {{ cards[current + 1].title }}
                        </h3>
                        <img
                            :src="cards[current + 1].img"
                            :alt="cards[current + 1].title"
                            :class="
                                current + 1 === 1
                                    ? 'mx-auto h-22 mb-7 object-contain'
                                    : current + 1 === 3
                                    ? 'mx-auto h-40 object-contain'
                                    : 'mx-auto h-32 mb-4 object-contain'
                            "
                        />
                        <p class="text-sm">{{ cards[current + 1].desc }}</p>
                        <!-- Arrow -->
                        <img
                            src="../../../../public/img/homepage/arrow.webp"
                            alt="arrow"
                            class="absolute -right-4 top-1/2 -translate-y-1/2 w-8 h-8 object-contain cursor-pointer"
                            :class="{ 'rotate-180': reverseArrow }"
                            @click="nextPair"
                        />
                    </div>
                </div>
                <!-- Navigation Dots -->
                <div class="flex justify-center gap-3 mt-6">
                    <span
                        class="w-3 h-3 rounded-full transition-all duration-300"
                        :class="
                            current === 0
                                ? 'bg-[#FE3231] scale-125'
                                : 'bg-gray-300'
                        "
                    ></span>
                    <span
                        class="w-3 h-3 rounded-full transition-all duration-300"
                        :class="
                            current === cards.length - 2
                                ? 'bg-[#FE3231] scale-125'
                                : 'bg-gray-300'
                        "
                    ></span>
                </div>
            </div>

            <!-- Desktop View -->
            <div
                class="hidden sm:grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-7 mt-10"
            >
                <!-- Card 1 -->
                <div
                    class="bg-[#FE3231] text-white rounded-2xl p-6 text-center shadow hover:shadow-lg transition"
                >
                    <h3 class="font-bold text-lg mb-3">
                        Personalized Learning
                    </h3>
                    <img
                        src="../../../../public/img/homepage/personalized.webp"
                        alt="Personalized Learning"
                        class="mx-auto mb-4 h-40 object-contain"
                    />
                    <p class="text-lg mb-2">
                        Belajar 1-on-1 sesuai kebutuhanmu
                    </p>
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-[#FE3231] text-white rounded-2xl p-6 text-center shadow hover:shadow-lg transition"
                >
                    <h3 class="font-bold text-lg mb-7">Flexibility</h3>
                    <img
                        src="../../../../public/img/homepage/flexibility.webp"
                        alt="Flexibility"
                        class="mx-auto mb-7 h-34 object-contain"
                    />
                    <p class="text-lg">Bisa online/offline, pilih waktumu</p>
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-[#FE3231] text-white rounded-2xl p-6 text-center shadow hover:shadow-lg transition"
                >
                    <h3 class="font-bold text-lg mb-3">Quality Teacher</h3>
                    <img
                        src="../../../../public/img/homepage/quality.webp"
                        alt="Quality Teacher"
                        class="mx-auto mb-4 h-40 object-contain"
                    />
                    <p class="text-lg">
                        Dibimbing native speaker & pengajar berpengalaman
                    </p>
                </div>
                <!-- Card 4 -->
                <div
                    class="bg-[#FE3231] text-white rounded-2xl p-6 text-center shadow hover:shadow-lg transition relative"
                >
                    <h3 class="font-bold text-lg mb-3">Fun Learning</h3>
                    <img
                        src="../../../../public/img/homepage/fun.webp"
                        alt="Fun Learning"
                        class="mx-auto mb-4 h-40 object-contain"
                    />
                    <p class="text-lg">Belajar seru dan tidak membosankan</p>

                    <div
                        class="absolute -right-5 top-1/2 -translate-y-1/2 w-12 h-12 flex items-center justify-center rounded-full font-bold shadow"
                    >
                        <img
                            src="../../../../public/img/homepage/arrow.webp"
                            alt="arrow"
                            class="mx-auto object-contain"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
