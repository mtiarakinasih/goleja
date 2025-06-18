<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import FooterSection from '@/components/FooterSection.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Detail Lowongan',
        href: '/detail-lowongan',
    },
];
</script>

<template>
    <Head title="Cari Kerja" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <main>
            <div class="max-w-6xl mx-auto p-6 grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Info Lowongan -->
                <div class="lg:col-span-2 space-y-6">
                    <div>
                    <h1 class="text-2xl font-semibold text-gray-800">PT Botika Teknologi Indonesia</h1>
                    <p class="text-lg text-gray-600">Database Engineer</p>
                    </div>

                    <div class="border-t pt-4 space-y-2">
                    <h2 class="font-semibold text-gray-700">Ringkasan</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-sm text-gray-700">
                        <p><strong>Pendidikan:</strong> D4/S1</p>
                        <p><strong>Jenis Pekerjaan:</strong> Full Time</p>
                        <p><strong>Gaji:</strong> Rp 5.300.000,-</p>
                        <p><strong>Lokasi Kerja:</strong> Jl Perumnas Blok E III No 50, Seturan, Sleman, Yogyakarta</p>
                        <p><strong>Kuota:</strong> 4</p>
                    </div>
                    </div>

                    <div class="border-t pt-4">
                    <h2 class="font-semibold text-gray-700 mb-2">Deskripsi Pekerjaan</h2>
                    <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                        <li>Mempersiapkan barang sebelum di aplikasi warna</li>
                        <li>Mengaplikasi warna pada barang menggunakan spray gun & alat yang tersedia</li>
                        <li>Mengikuti perkembangan design terkini dan memberikan rekomendasi kreatif untuk inovasi design</li>
                        <li>Memiliki pemahaman yang baik tentang produk untuk menghasilkan inovasi baru</li>
                        <li>Bekoordinasi dengan tim produksi, tim gudang, tim logistik dan pihak terkait lainnya untuk memastikan kelancaran operasional</li>
                    </ul>
                    </div>

                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">LIHAT STATUS</button>
                </div>

                <!-- Card Review -->
                <div class="bg-white border rounded-lg p-6 shadow-md space-y-4">
                    <div class="space-y-1">
                    <h3 class="text-lg font-semibold text-gray-800">PT Botika Teknologi Indonesia</h3>
                    <p class="text-sm text-gray-600">Database Engineer</p>
                    </div>

                    <div class="text-yellow-500 text-xl font-semibold">4.5</div>
                    <div class="space-y-2">
                    <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                        <div class="h-full bg-yellow-400 w-[80%]"></div>
                    </div>
                    <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                        <div class="h-full bg-yellow-300 w-[60%]"></div>
                    </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-600">90%</div>
                        <p class="text-xs text-gray-600">Rate salary as High or Average</p>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-600">90%</div>
                        <p class="text-xs text-gray-600">Would recommend this company to others</p>
                    </div>
                    </div>

                    <button class="w-full bg-blue-600 text-white mt-4 py-2 rounded hover:bg-blue-700">LIHAT REVIEW</button>
                </div>
            </div>
        </main>
    </AppLayout>
    <FooterSection class="mt-20"/>
</template>