<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <AppLayout>
        <Head title="Detail Artikel" />
        <div class="mx-auto max-w-2xl space-y-4 px-4 py-8 text-sm text-gray-700">
            <h1 class="text-lg font-semibold text-[#6F9EE7]">Detail Artikel</h1>
            <p><strong>Judul:</strong> Artikel Contoh</p>
            <p><strong>Tanggal:</strong> 17 Juni 2025</p>
            <p><strong>Isi:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            <img src="/images/artikel-1.png" alt="Foto Artikel" class="max-h-64 w-full rounded object-cover" />
            <div class="flex justify-end">
                <Link :href="route('artikel.index')" class="rounded bg-[#6F9EE7] px-4 py-2 text-sm text-white hover:bg-[#5f8ed4]">Kembali</Link>
            </div>
        </div>
    </AppLayout>
</template>
