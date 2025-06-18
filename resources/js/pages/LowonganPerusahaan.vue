<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import FooterSection from '@/components/FooterSection.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Lowongan Perusahaan',
        href: '/lowongan-perusahaan',
    },
];
</script>

<template>
    <Head title="Lowongan Perusahaan" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <main class="py-10">
            <!-- Detail Perusahaan -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Logo + Nama + Kategori -->
                <div class="flex items-center gap-4">
                    <img src="/images/botika-logo.png" alt="Logo Perusahaan" class="w-14 h-14 object-contain rounded-md border">
                    <div>
                    <h1 class="text-2xl font-semibold text-gray-800">PT Botika Teknologi Indonesia</h1>
                    <p class="text-lg text-gray-600">Perusahaan Teknologi Informasi</p>
                    </div>
                </div>

                <!-- Informasi Lowongan -->
                <div class="border-t pt-4 space-y-2">
                    <h2 class="font-semibold text-gray-700">Informasi Lowongan</h2>
                            <div class="w-full max-w-xs border rounded-xl shadow-sm p-4 flex flex-col justify-between gap-4">
                                <!-- Header: Logo dan Info -->
                                <div class="flex items-start gap-3">
                                    <img src="/images/industri1.jpg" alt="Company Logo" class="w-10 h-10 object-contain" />
                                    <div>
                                    <h3 class="text-sm font-semibold leading-snug">Database Engineer</h3>
                                    <p class="text-xs text-gray-600">Pt Botika Teknologi Indonesia</p>
                                    </div>
                                </div>

                                <!-- Job Details -->
                                <div class="flex flex-col gap-2 mt-2 text-sm">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-microchip text-gray-600 w-4 text-xs"></i>
                                    <span>Technology</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-clock text-gray-600 w-4 text-xs"></i>
                                    <span>Part-time</span>
                                </div>
                                </div>


                                <!-- Footer: Rating & Button -->
                                <div class="flex items-center justify-between mt-2">
                                    <div class="flex items-center gap-1 text-sm">
                                    <span class="font-medium">4.5</span>
                                    <i class="fa-solid fa-star"></i>
                                    </div>
                                    <button class="bg-[#102C57] hover:bg-[#0d234b] text-white text-sm px-4 py-2 rounded-md">
                                    See Details
                                    </button>
                                </div>
                            </div>
                </div>

            </div>

        </main>
    </AppLayout>
    <FooterSection class="mt-20"/>
</template>