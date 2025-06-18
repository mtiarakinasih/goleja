<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import FooterSection from '@/components/FooterSection.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Detail Perusahaan',
        href: '/detail-perusahaan',
    },
];
</script>

<template>
    <Head title="Detail Perusahaan" />

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

            <!-- Informasi Kontak -->
            <div class="border-t pt-4 space-y-2">
                <h2 class="font-semibold text-gray-700">Informasi Perusahaan</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-sm text-gray-700">
                <p><strong>Email:</strong> info@botika.com</p>
                <p><strong>Nomor Telepon:</strong> (0274) 123456</p>
                <p><strong>Website:</strong> <a href="https://www.botika.online" class="text-blue-600 hover:underline">www.botika.online</a></p>
                <p><strong>Alamat:</strong> Jl Perumnas Blok E III No 50, Seturan, Sleman, Yogyakarta</p>
                <p><strong>Kategori:</strong> Teknologi Informasi</p>
                </div>
            </div>

            <!-- Deskripsi Perusahaan -->
            <div class="border-t pt-4">
                <h2 class="font-semibold text-gray-700 mb-2">Deskripsi Perusahaan</h2>
                <p class="text-sm text-gray-700 leading-relaxed">
                PT Botika Teknologi Indonesia adalah perusahaan yang bergerak di bidang pengembangan teknologi berbasis AI (Artificial Intelligence). 
                Kami menyediakan solusi komunikasi digital yang inovatif melalui chatbot dan layanan teknologi lainnya untuk mendukung transformasi digital di berbagai sektor industri.
                </p>
            </div>

            <!-- Ringkasan Rating -->
            <div class="border-t pt-4 space-y-2">
                <h2 class="font-semibold text-gray-700">Rating Perusahaan</h2>
                <div class="flex items-center gap-4">
                <div class="text-yellow-500 text-xl font-semibold">4.5</div>
                <div class="flex items-center text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span class="text-sm text-gray-600">(120 ulasan)</span>
                </div>
                <button class="text-blue-600 text-sm hover:underline">Lihat Rating/Review</button>
            </div>

            <!-- Tombol Navigasi -->
            <div class="pt-2">
                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">LIHAT LOWONGAN</button>
            </div>
            </div>

        </main>
    </AppLayout>
    <FooterSection class="mt-20"/>
</template>