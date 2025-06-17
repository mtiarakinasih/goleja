<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { Search } from 'lucide-vue-next';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Artikel',
        href: '/artikel',
    },
];
</script>

<template>
    <Head title="Artikel" />

    <AppLayout>
        <nav class="mb-4 text-sm text-gray-500">
        <ul class="flex space-x-2">
            <li v-for="(item, index) in breadcrumbs" :key="index" class="flex items-center">
                <a :href="item.href" class="hover:underline text-gray-700">{{ item.title }}</a>
                <span v-if="index < breadcrumbs.length - 1" class="mx-2">/</span>
            </li>
        </ul>
    </nav>
        <div class="mt-6 flex flex-col gap-6 p-6 md:flex-row">
            <div class="flex-1 space-y-6 rounded-xl border bg-white p-6 shadow-sm">
                <div class="flex flex-col items-start gap-4 border-b pb-6 md:flex-row">
                    <img src="/images/artikel-1.png" alt="Artikel" class="h-32 w-full rounded-md object-cover md:w-48" />
                    <div class="flex flex-col justify-between text-sm">
                        <div>
                            <h3 class="text-base font-semibold text-gray-800">Pekerjaan yang Menjanjikan untuk Lulusan SMA</h3>
                            <p class="mb-2 text-xs text-gray-500">14 November 2024</p>
                            <p class="leading-relaxed text-gray-600">
                                Jika kamu seorang lulusan SMA dan ingin mengajukan lowongan kerja, tentu saja ada beberapa langkah terbaik yang bisa
                                kamu jadikan sebagai peluang untuk bekerja.
                            </p>
                        </div>
                        <button
                            class="mt-2 w-fit rounded-md bg-[#91A3FF] px-4 py-2 text-xs font-semibold text-white transition hover:border hover:border-[#91A3FF] hover:bg-white hover:text-[#91A3FF] hover:shadow-md"
                        >
                            Lihat Detail
                        </button>
                    </div>
                </div>

                <!-- Loop Artikel Lain -->
                <div class="flex flex-col items-start gap-4 border-b pb-6 md:flex-row">
                    <img src="/images/artikel-1.png" alt="Artikel" class="h-32 w-full rounded-md object-cover md:w-48" />
                    <div class="flex flex-col justify-between text-sm">
                        <div>
                            <h3 class="text-base font-semibold text-gray-800">Pekerjaan yang Menjanjikan untuk Lulusan SMA</h3>
                            <p class="mb-2 text-xs text-gray-500">14 November 2024</p>
                            <p class="leading-relaxed text-gray-600">
                                Jika kamu seorang lulusan SMA dan ingin mengajukan lowongan kerja, tentu saja ada beberapa langkah terbaik yang bisa
                                kamu jadikan sebagai peluang untuk bekerja.
                            </p>
                        </div>
                        <button
                            class="mt-2 w-fit rounded-md bg-[#91A3FF] px-4 py-2 text-xs font-semibold text-white transition hover:border hover:border-[#91A3FF] hover:bg-white hover:text-[#91A3FF] hover:shadow-md"
                        >
                            Lihat Detail
                        </button>
                    </div>
                </div>

                <div class="flex flex-col items-start gap-4 md:flex-row">
                    <img src="/images/artikel-1.png" alt="Artikel" class="h-32 w-full rounded-md object-cover md:w-48" />
                    <div class="flex flex-col justify-between text-sm">
                        <div>
                            <h3 class="text-base font-semibold text-gray-800">Pekerjaan yang Menjanjikan untuk Lulusan SMA</h3>
                            <p class="mb-2 text-xs text-gray-500">14 November 2024</p>
                            <p class="leading-relaxed text-gray-600">
                                Jika kamu seorang lulusan SMA dan ingin mengajukan lowongan kerja, tentu saja ada beberapa langkah terbaik yang bisa
                                kamu jadikan sebagai peluang untuk bekerja.
                            </p>
                        </div>
                        <button
                            class="mt-2 w-fit rounded-md bg-[#91A3FF] px-4 py-2 text-xs font-semibold text-white transition hover:border hover:border-[#91A3FF] hover:bg-white hover:text-[#91A3FF] hover:shadow-md"
                        >
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>

            <!-- SIDEBAR -->
            <div class="w-full space-y-4 md:w-64">
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

                <!-- untuk hasil pencarian -->
                <!-- jika tidak ada pencarian maka akan kosong -->
                <div class="space-y-2">
                    <h2 class="text-sm font-medium text-gray-600">Hasil Pencarian</h2>

                    <div class="space-y-3">
                        <div
                            class="cursor-pointer rounded-lg border border-gray-200 bg-white p-4 text-sm shadow-sm transition hover:border-[#91A3FF] hover:bg-[#91A3FF]/10 hover:shadow-md"
                        >
                            Pekerjaan yang Menjanjikan untuk Lulusan SMA
                        </div>
                        <div
                            class="cursor-pointer rounded-lg border border-gray-200 bg-white p-4 text-sm shadow-sm transition hover:border-[#91A3FF] hover:bg-[#91A3FF]/10 hover:shadow-md"
                        >
                            Tips Melamar Kerja Tanpa Pengalaman
                        </div>
                        <div
                            class="cursor-pointer rounded-lg border border-gray-200 bg-white p-4 text-sm shadow-sm transition hover:border-[#91A3FF] hover:bg-[#91A3FF]/10 hover:shadow-md"
                        >
                            Cara Membuat CV Menarik untuk Fresh Graduate
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
