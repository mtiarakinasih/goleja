<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Search } from 'lucide-vue-next';

</script>

<template>
    <Head title="Detail Artikel" />

    <AppLayout>
        <div class="mx-auto mt-6 flex max-w-5xl flex-col-reverse gap-6 p-6 md:flex-row md:gap-6">
            <div class="w-full md:w-3/4 md:pr-6">
                <img src="/images/artikel-1.png" alt="Judul Artikel" class="mb-6 h-60 w-full rounded-lg object-cover shadow-sm" />

                <h1 class="mb-2 text-2xl font-semibold text-gray-800">Pekerjaan yang Menjanjikan untuk Lulusan SMA</h1>
                <p class="mb-4 text-[13px] text-gray-500">Dipublikasikan pada 14 November 2024</p>

                <div class="prose max-w-none text-justify text-[14px] leading-relaxed text-gray-700">
                    <p>
                        Lulusan SMA memiliki banyak pilihan karir yang menjanjikan, terutama di era digital seperti sekarang. Banyak perusahaan
                        membuka peluang kerja tanpa mensyaratkan gelar sarjana, tetapi lebih mengutamakan keterampilan dan pengalaman. Kamu bisa
                        memulai dengan mengikuti pelatihan kerja atau magang untuk meningkatkan kemampuan.
                    </p>
                    <br />
                    <p>
                        Selain itu, pekerjaan seperti customer service, admin online shop, marketing digital, hingga teknisi komputer juga cukup
                        menjanjikan. Bahkan, kamu bisa mencoba jalur wirausaha jika memiliki produk atau jasa yang bisa dipasarkan secara online.
                        Intinya, jangan takut mencoba dan terus belajar. Kesempatan itu selalu ada bagi mereka yang mau berusaha!
                    </p>
                </div>
            </div>

            <div class="mx-4 hidden w-px bg-gray-300 md:block"></div>

            <div class="w-full space-y-4 md:w-80">
                <div>
                    <label for="search" class="sr-only">Cari artikel</label>
                    <div class="relative">
                        <input
                            id="search"
                            type="text"
                            placeholder="Cari artikel"
                            class="w-full rounded-md border border-gray-300 px-3 py-2 pr-10 text-sm focus:border-[#91A3FF] focus:ring focus:ring-[#91A3FF]/40"
                        />
                        <div class="absolute top-1/2 right-2 -translate-y-1/2 text-gray-400">
                            <Search class="h-4 w-4" />
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="mb-2 text-base font-semibold text-gray-800">Artikel Terkait</h2>
                    <div class="space-y-3 text-sm">
                        <a
                            href="#"
                            class="block rounded-lg border border-gray-200 bg-white p-3 shadow-sm transition hover:border-[#91A3FF] hover:bg-[#91A3FF]/10 hover:shadow-md"
                        >
                            <div class="flex gap-3">
                                <img src="/images/artikel-1.png" alt="..." class="h-16 w-16 rounded-md object-cover" />
                                <div class="flex flex-col justify-between">
                                    <p class="font-medium text-gray-700">Tips Melamar Kerja di Perusahaan Startup</p>
                                    <p class="text-xs text-gray-500">10 November 2024</p>
                                </div>
                            </div>
                        </a>

                        <a
                            href="#"
                            class="block rounded-lg border border-gray-200 bg-white p-3 shadow-sm transition hover:border-[#91A3FF] hover:bg-[#91A3FF]/10 hover:shadow-md"
                        >
                            <div class="flex gap-3">
                                <img src="/images/artikel-1.png" alt="..." class="h-16 w-16 rounded-md object-cover" />
                                <div class="flex flex-col justify-between">
                                    <p class="font-medium text-gray-700">Keuntungan Belajar Skill Digital</p>
                                    <p class="text-xs text-gray-500">8 Juni 2024</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
