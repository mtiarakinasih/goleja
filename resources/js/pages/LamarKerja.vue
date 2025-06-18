<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import FooterSection from '@/components/FooterSection.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Lamar Pekerjaan',
        href: '/lamar-pekerjaan',
    },
];
</script>

<template>
    <Head title="Lamar Pekerjaan" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <main>

            <div class="max-w-7xl mx-auto px-4 py-10">
            <h2 class="text-2xl font-bold text-[#102C57] mb-6">Formulir Lamar Kerja</h2>
            <hr class="mb-8">

            <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Kolom Kiri -->
                <div class="flex flex-col gap-4">
                <div>
                    <label class="text-sm text-[#102C57]">Nama Lengkap</label>
                    <input type="text" class="w-full bg-gray-100 rounded-md px-4 py-2" placeholder="Nama Lengkap">
                </div>
                <div>
                    <label class="text-sm text-[#102C57]">Posisi</label>
                    <input type="text" class="w-full bg-gray-100 rounded-md px-4 py-2" placeholder="Posisi">
                </div>
                <div>
                    <label class="text-sm text-[#102C57]">Tanggal apply</label>
                    <div class="relative">
                    <input type="date" class="w-full bg-gray-100 rounded-md px-4 py-2 pr-10">
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="agree" class="accent-[#102C57]">
                    <label for="agree" class="text-sm text-[#102C57]">Saya yakin data tersebut sudah benar</label>
                </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="flex flex-col gap-4">
                <div>
                    <label class="text-sm text-[#102C57]">Email</label>
                    <input type="email" class="w-full bg-gray-100 rounded-md px-4 py-2" placeholder="Email">
                </div>
                <div>
                    <label class="text-sm text-[#102C57]">Perusahaan</label>
                    <input type="text" class="w-full bg-gray-100 rounded-md px-4 py-2" placeholder="Perusahaan">
                </div>
                <div>
                    <label class="text-sm text-[#102C57]">Upload CV</label>
                    <div class="relative">
                    <input type="file" class="w-full bg-gray-100 rounded-md px-4 py-2 pr-10">
                    <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        📤
                    </span>
                    </div>
                </div>
                </div>
            </form>

            <!-- Tombol Apply -->
            <div class="mt-8">
                <button class="bg-[#6C9BF6] hover:bg-[#5487f5] text-white font-semibold text-sm px-6 py-2 rounded-md">
                APPLY
                </button>
            </div>
            </div>
        </main>
    </AppLayout>
    <FooterSection class="mt-20"/>
</template>