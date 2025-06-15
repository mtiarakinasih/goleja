<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';

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
        <div class="mt-6 flex flex-col gap-6 p-6 md:flex-row">
            <!-- Konten Artikel -->
            <div class="flex-1 space-y-6 rounded-xl border bg-white p-6 shadow-sm">
                <!-- Artikel Card -->
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
                        <button class="mt-2 w-fit rounded-md bg-[#91A3FF] px-4 py-1.5 text-xs font-semibold text-white transition hover:bg-[#6d84ff]">
                            Lihat Detail
                        </button>
                    </div>
                </div>

                <!-- Duplikat Artikel -->
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
                        <button class="mt-2 w-fit rounded-md bg-[#91A3FF] px-4 py-1.5 text-xs font-semibold text-white transition hover:bg-[#6d84ff]">
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
                        <button class="mt-2 w-fit rounded-md bg-[#91A3FF] px-4 py-1.5 text-xs font-semibold text-white transition hover:bg-[#6d84ff]">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="w-full space-y-4 md:w-64">
                <!-- Form Search -->
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
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1116.65 2a7.5 7.5 0 010 15z"
                                />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Judul Sidebar -->
                <h2 class="text-base font-semibold text-gray-800">Artikel</h2>
            </div>
        </div>
    </AppLayout>
</template>
