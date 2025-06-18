<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import FooterSection from '@/components/FooterSection.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Cari Kerja',
        href: '/cari-kerja',
    },
];
</script>

<template>
    <Head title="Cari Kerja" />

    <AppLayout :breadcrumbs="breadcrumbs">
                <main class="w-full mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
                    
                    <section class="w-full bg-gradient-to-b from-[#f0f0f0] to-[#7ea5e4]">
                        <div class="max-w-7xl mx-auto px-4 py-16 flex flex-col md:flex-row items-center gap-10">
                        <!-- Left image -->
                        <div class="w-full md:w-1/2 relative">
                            <img
                            src="/images/woman-working.png"
                            alt="Woman working"
                            class="w-full max-w-md mx-auto relative z-10"
                            />
                        </div>

                        <!-- Right content -->
                        <div class="w-full md:w-1/2 text-center md:text-left space-y-6">
                            <h1 class="text-3xl md:text-4xl font-bold text-[#102C57]">
                            Your Next Career Move Starts Here
                            </h1>
                            <p class="text-gray-700 text-lg">
                            Search jobs that match your passion and potential.
                            </p>

                            <!-- Search bar -->
                            <div class="flex items-center bg-white rounded-full shadow-md overflow-hidden w-full max-w-xl mx-auto md:mx-0">
                            <input
                                type="text"
                                placeholder="Enter a keyword"
                                class="flex-grow px-5 py-3 outline-none text-sm text-gray-800"
                            />
                            <button class="bg-[#102C57] text-white px-6 py-3 rounded-full font-semibold">
                                Search
                            </button>
                            </div>
                        </div>
                        </div>
                    </section>

                    <!-- Search by Category & Other Aspects -->
                    <section class="max-w-7xl mx-auto px-4 py-12 grid md:grid-cols-2 gap-6">
                        <!-- Kategori -->
                        <div>
                            <h2 class="text-2xl font-bold mb-4">Search by Category</h2>
                            <div class="flex flex-wrap gap-4">
                            <!-- Card kategori -->
                            <div class="w-24 h-24 border shadow-sm rounded-lg flex flex-col items-center justify-center hover:shadow-md cursor-pointer">
                                <img src="/icons/tech.svg" alt="Technology Icon" class="w-6 h-6 mb-1">
                                <span class="text-sm font-medium">Technology</span>
                            </div>
                            <!-- Ulangi card sesuai jumlah kategori -->
                            <div class="w-24 h-24 border shadow-sm rounded-lg flex flex-col items-center justify-center hover:shadow-md cursor-pointer">
                                <img src="/icons/tech.svg" alt="Technology Icon" class="w-6 h-6 mb-1">
                                <span class="text-sm font-medium">Technology</span>
                            </div>
                            </div>
                            <a href="#" class="block mt-4 text-sm text-[#102C57] underline">Jelajahi kategori lain</a>
                        </div>

                        <!-- Filter -->
                        <div>
                            <h2 class="text-2xl font-bold mb-4">Search by Other Aspects</h2>
                            <div>
                                <div class="flex flex-col md:flex-row flex-wrap gap-3">
                                    <select class="px-4 py-3 border border-gray-300 text-sm w-full  rounded-full md:w-auto">
                                        <option>Jenis Pekerjaan</option>
                                        <option>Full-time</option>
                                        <option>Part-time</option>
                                    </select>

                                    <select class="px-4 py-3 border border-gray-300 rounded-full text-sm w-full md:w-auto">
                                        <option>Waktu Posting</option>
                                        <option>1 hari terakhir</option>
                                        <option>7 hari terakhir</option>
                                    </select>

                                    <select class="px-4 py-3 border border-gray-300 rounded-full text-sm w-full md:w-auto">
                                        <option>Gaji Minimal</option>
                                        <option>Rp 1.000.000</option>
                                        <option>Rp 5.000.000</option>
                                    </select>

                                    <select class="px-4 py-3 border border-gray-300 rounded-full text-sm w-full md:w-auto">
                                        <option>Gaji Maksimal</option>
                                        <option>Rp 10.000.000</option>
                                        <option>Rp 20.000.000</option>
                                    </select>

                                    <select class="px-4 py-3 border border-gray-300 rounded-full text-sm w-full md:w-auto">
                                        <option>Lokasi</option>
                                        <option>Jakarta</option>
                                        <option>Yogyakarta</option>
                                    </select>

                                    <!-- Tombol Hapus Filter -->
                                    <button class="flex items-center gap-2 px-4 py-3 text-sm rounded-full border border-red-500 text-red-600 hover:bg-red-50 transition">
                                        <span>Hapus Filter</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>


                    <!-- Recommended for You -->
                    <section>
                        <h2 class="text-lg font-bold mb-4">Recommended for You</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            <div class="w-full max-w-xs border rounded-xl shadow-sm p-4 flex flex-col justify-between gap-4">
                            <!-- Header: Logo dan Info -->
                            <div class="flex items-start gap-3">
                                <img src="/images/industri1.jpg" alt="Company Logo" class="w-10 h-10 object-contain" />
                                <div>
                                <h3 class="text-sm font-semibold leading-snug">Pt Botika Teknologi Indonesia</h3>
                                <p class="text-xs text-gray-600">D.I. Yogyakarta</p>
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

                        <!-- Button bawah -->
                        <div class="text-center mt-6">
                        <button class="px-5 py-2 border border-[#102C57] text-[#102C57] rounded-md hover:bg-[#102C57] hover:text-white transition">Lihat perusahaan lain</button>
                        </div>
                    </section>

                    <!-- Artikel Section -->
                    <section class="grid md:grid-cols-2 gap-6">
                        <!-- Kiri -->
                        <div class="bg-gradient-to-b from-[#EADBCB] to-[#102C57] text-white p-6 rounded-2xl flex flex-col justify-between">
                        <div>
                            <h2 class="text-xl font-bold mb-2">Saatnya Naik Level</h2>
                            <p><strong>Belajar ga harus ribet!</strong> Buka artikel pilihan dan temui skill baru buat bekal karier kamu.</p>
                        </div>
                        <img src="/images/naiklevel.svg" alt="" class="mt-4 w-full" />
                        </div>
                        <!-- Kanan -->
                        <div class="bg-[#D8DDEB] text-[#102C57] p-6 rounded-2xl flex flex-col justify-between">
                        <div>
                            <h2 class="text-xl font-bold mb-2">Biar Nggak Kudet!</h2>
                            <p class="mb-4">Dunia kerja terus bergerak, kamu juga harus update dong! Yuk, baca insight seru yang bikin kamu makin siap tempur.</p>
                            <button class="px-4 py-2 bg-[#102C57] text-white rounded-md">Baca Artikel</button>
                        </div>
                        <img src="/images/kudet.svg" alt="" class="mt-4 w-full" />
                        </div>
                    </section>

                </main>
    </AppLayout>
    <FooterSection class="mt-20"/>
</template>
