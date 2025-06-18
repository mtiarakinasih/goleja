<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import FooterSection from '@/components/FooterSection.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Rating Perusahaan',
        href: '/rating-perusahaan',
    },
];
</script>

<template>
    <Head title="Rating Perusahaan" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <main>
            <div class="max-w-6xl mx-auto p-6 space-y-8">
                <!-- Header Perusahaan + Ringkasan -->
                <div class="flex flex-col lg:flex-row justify-between items-center gap-6">
                    <div class="flex items-center gap-4">
                        <img src="/images/industri1.jpg" alt="Logo Perusahaan" class="w-16 h-16 rounded-full object-cover">
                        <div>
                            <h1 class="text-xl font-semibold text-gray-800">PT Botika Teknologi Indonesia</h1>
                            <p class="text-sm text-gray-600">Database Engineer</p>
                            <p class="text-sm text-blue-500">📍 D.I. Yogyakarta</p>
                        </div>
                        </div>

                        <div class="flex flex-col lg:flex-row gap-6 items-center">
                        <div class="text-center">
                            <p class="text-2xl font-semibold text-yellow-500">4.5</p>
                            <div class="text-yellow-400">★★★★★</div>
                            <div class="mt-2 space-y-1">
                            <div class="h-2 bg-gray-200 w-40 rounded">
                                <div class="h-2 bg-yellow-400 w-[80%] rounded"></div>
                            </div>
                            <div class="h-2 bg-gray-200 w-40 rounded">
                                <div class="h-2 bg-yellow-300 w-[60%] rounded"></div>
                            </div>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex flex-col items-center">
                            <!-- Lingkaran dengan persentase di tengah -->
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-lg font-bold text-blue-600">90%</span>
                            </div>
                            <!-- Caption di bawah -->
                            <p class="text-xs text-gray-600 mt-2 text-center">
                                Rate salary as High or Average
                            </p>
                            </div>
                            <div class="flex flex-col items-center">
                            <!-- Lingkaran dengan persentase di tengah -->
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-lg font-bold text-blue-600">90%</span>
                            </div>
                            <!-- Caption di bawah -->
                            <p class="text-xs text-gray-600 mt-2 text-center">
                                Would recommend this company to others
                            </p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr />

                <!-- Review Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Card Review -->
                    <div class="bg-white rounded-lg p-4 shadow-md space-y-2">
                    <div class="flex items-center gap-3">
                        <img src="https://via.placeholder.com/40" alt="user" class="w-10 h-10 rounded-full">
                        <div>
                        <p class="font-semibold text-gray-800">John Doe</p>
                        <div class="text-yellow-400 text-sm">★★★★☆</div>
                        </div>
                    </div>
                    <p class="text-sm text-gray-700">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <p class="text-xs text-gray-500 text-right">01/01/2025</p>
                    </div>

                    <!-- Duplicate 5x (copy-paste or v-for later) -->
                    <div class="bg-white rounded-lg p-4 shadow-md space-y-2">
                    <div class="flex items-center gap-3">
                        <img src="https://via.placeholder.com/40" alt="user" class="w-10 h-10 rounded-full">
                        <div>
                        <p class="font-semibold text-gray-800">John Doe</p>
                        <div class="text-yellow-400 text-sm">★★★★☆</div>
                        </div>
                    </div>
                    <p class="text-sm text-gray-700">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <p class="text-xs text-gray-500 text-right">01/01/2025</p>
                    </div>

                    <div class="bg-[#f5faff] rounded-xl shadow-md p-4 flex flex-col items-center justify-center w-full max-w-[300px] h-[180px]">
                        <div class="bg-[#102C57] text-white w-10 h-10 flex items-center justify-center rounded-full text-xl">
                            +
                        </div>
                        <p class="text-[#102C57] mt-2 font-medium text-sm">Tambahkan Review</p>
                    </div>

                </div>

                <!-- Pagination -->
                <div class="flex justify-center items-center gap-2 mt-6">
                    <button class="px-3 py-1 bg-blue-600 text-white rounded">&lt;</button>
                    <button class="px-3 py-1 bg-blue-600 text-white rounded">1</button>
                    <button class="px-3 py-1 bg-white border border-blue-600 text-blue-600 rounded">2</button>
                    <button class="px-3 py-1 bg-white border border-blue-600 text-blue-600 rounded">3</button>
                    <button class="px-3 py-1 bg-blue-600 text-white rounded">&gt;</button>
                </div>
            </div>
        </main>
    </AppLayout>
    <FooterSection class="mt-20"/>
</template>