<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { Eye, Pen, Plus, Search, Trash2 } from 'lucide-vue-next';
import { ref } from 'vue';

const searchQuery = ref('');
</script>

<template>
    <AppLayout>
        <Head title="Kelola Artikel" />

        <div class="mt-8 min-h-screen px-6 py-6">
            <div class="mb-6 flex flex-col-reverse justify-between gap-4 md:flex-row md:items-center">
                <div class="relative w-full md:w-60">
                    <input
                        v-model="searchQuery"
                        type="text"
                        placeholder="Cari artikel..."
                        class="w-full rounded-md border border-gray-300 px-4 py-2 pr-10 text-sm text-gray-700 focus:border-[#6F9EE7] focus:ring-2 focus:ring-[#6F9EE7]/30 focus:outline-none"
                    />
                    <Search class="absolute top-2.5 right-3 h-4 w-4 text-gray-400" />
                </div>

                <Link
                    :href="route('artikel.create')"
                    class="inline-flex items-center gap-2 self-end rounded-md bg-[#6F9EE7] px-4 py-2 text-sm font-medium text-white shadow-md transition hover:bg-[#5f8ed4]"
                >
                    <Plus class="h-4 w-4" />
                </Link>
            </div>

            <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-sm">
                <table class="min-w-full table-auto bg-white text-sm text-gray-700">
                    <thead class="bg-[#6F9EE7]/10 text-left text-gray-600">
                        <tr>
                            <th class="px-6 py-3">No</th>
                            <th class="px-6 py-3">Judul</th>
                            <th class="px-6 py-3">Foto</th>
                            <th class="px-6 py-3">Isi</th>
                            <th class="px-6 py-3">Tanggal</th>
                            <th class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t hover:bg-gray-50">
                            <td class="px-6 py-4">1</td>
                            <td class="px-6 py-4">Artikel Pertama</td>
                            <td class="px-6 py-4">
                                <img src="/images/artikel-1.png" class="h-16 w-16 rounded object-cover" />
                            </td>
                            <td class="line-clamp-2 px-6 py-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore...
                            </td>
                            <td class="px-6 py-4">17 Juni 2025</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <Link :href="route('artikel.show')" class="text-[#6F9EE7] hover:text-[#4f7bcc]">
                                        <Eye class="h-4 w-4" />
                                    </Link>
                                    <Link :href="route('artikel.edit')" class="text-[#6F9EE7] hover:text-[#4f7bcc]">
                                        <Pen class="h-4 w-4" />
                                    </Link>
                                    <button class="text-red-500 hover:text-red-600">
                                        <Trash2 class="h-4 w-4" />
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AppLayout>
</template>
