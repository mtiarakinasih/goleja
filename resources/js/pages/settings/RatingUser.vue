<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Star } from 'lucide-vue-next';
</script>

<template>
    <AppLayout>
        <Head title="Rating User" />
        <div class="min-h-screen bg-white px-6 py-10">
            <!-- Judul dan Rating -->
            <div class="mb-8 text-center">
                <h1 class="text-2xl font-bold text-[#102C57]">Rating & Ulasan</h1>
                <p class="text-sm text-gray-500">Penilaian dari perusahaan terhadap user</p>

                <!-- Rata-rata rating -->
                <div class="mt-4 flex justify-center gap-1 text-[#FACC15]">
                    <Star class="h-5 w-5 fill-[#FACC15]" />
                    <Star class="h-5 w-5 fill-[#FACC15]" />
                    <Star class="h-5 w-5 fill-[#FACC15]" />
                    <Star class="h-5 w-5 fill-[#FACC15]" />
                    <Star class="h-5 w-5" />
                </div>
                <p class="mt-1 text-sm text-gray-600">4.0 dari 5</p>
            </div>

            <!-- Daftar Ulasan -->
            <div class="mx-auto max-w-3xl space-y-6">
                <!-- Ulasan 1 -->
                <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-[0_4px_10px_#6F9EE730]">
                    <div class="mb-1 flex justify-between">
                        <h3 class="text-base font-semibold text-[#102C57]">PT Maju Jaya</h3>
                        <span class="text-sm text-gray-500">1 Juni 2025</span>
                    </div>
                    <p class="mb-2 text-sm text-gray-700">User sangat kooperatif dan cepat belajar. Recommended untuk pekerjaan selanjutnya.</p>
                    <span class="inline-block rounded-full bg-green-100 px-3 py-1 text-xs text-green-600">Recommended</span>
                </div>

                <!-- Ulasan 2 -->
                <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-[0_4px_10px_#6F9EE730]">
                    <div class="mb-1 flex justify-between">
                        <h3 class="text-base font-semibold text-[#102C57]">CV Karya Sejahtera</h3>
                        <span class="text-sm text-gray-500">20 Mei 2025</span>
                    </div>
                    <p class="mb-2 text-sm text-gray-700">Komunikatif dan bekerja dengan baik selama proyek berlangsung.</p>
                    <span class="inline-block rounded-full bg-green-100 px-3 py-1 text-xs text-green-600">Recommended</span>
                </div>

                <!-- Ulasan 3 -->
                <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-[0_4px_10px_#6F9EE730]">
                    <div class="mb-1 flex justify-between">
                        <h3 class="text-base font-semibold text-[#102C57]">PT Santoso</h3>
                        <span class="text-sm text-gray-500">5 Mei 2025</span>
                    </div>
                    <p class="mb-2 text-sm text-gray-700">Kurang tepat waktu dalam pengerjaan tugas.</p>
                    <span class="inline-block rounded-full bg-red-100 px-3 py-1 text-xs text-red-600">Not Recommended</span>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
