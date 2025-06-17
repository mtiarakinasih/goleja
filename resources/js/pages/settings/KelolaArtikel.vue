<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Eye, Pen, Plus, Search, Trash2 } from 'lucide-vue-next';
import { ref } from 'vue';

const searchQuery = ref('');
const showCreateModal = ref(false);
const showEditModal = ref(false);
const showDetailModal = ref(false);
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

                <button
                    @click="showCreateModal = true"
                    class="inline-flex items-center gap-2 self-end rounded-md bg-[#6F9EE7] px-4 py-2 text-sm font-medium text-white shadow-md transition hover:bg-[#5f8ed4]"
                >
                    <Plus class="h-4 w-4" />
                </button>
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
                            <td class="px-6 py-4"><img src="/images/artikel-1.png" class="h-16 w-16 rounded object-cover" /></td>
                            <td class="line-clamp-2 px-6 py-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore...
                            </td>
                            <td class="px-6 py-4">17 Juni 2025</td>
                            <td class="px-6 py-4 align-middle">
                                <div class="flex h-full items-center gap-4">
                                    <button @click="showDetailModal = true" class="text-[#6F9EE7] hover:text-[#4f7bcc]">
                                        <Eye class="h-4 w-4" />
                                    </button>
                                    <button @click="showEditModal = true" class="text-[#6F9EE7] hover:text-[#4f7bcc]">
                                        <Pen class="h-4 w-4" />
                                    </button>
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

    <template v-if="showCreateModal || showEditModal || showDetailModal">
        <div class="fixed inset-0 z-40 bg-black/40"></div>
    </template>

    <!-- Bagian create -->
    <template v-if="showCreateModal">
        <div class="fixed inset-0 z-50 flex items-center justify-center px-4">
            <div class="w-full max-w-lg rounded-xl bg-white p-6 shadow-lg">
                <h2 class="mb-4 text-lg font-semibold text-[#6F9EE7]">Tambah Artikel</h2>
                <div class="space-y-3">
                    <input type="text" placeholder="Judul Artikel" class="w-full rounded-md border px-3 py-2 text-sm" />
                    <input
                        type="file"
                        class="w-full rounded-md border border-gray-300 text-sm text-gray-700 file:border-none file:bg-[#6F9EE7] file:px-4 file:py-2 file:text-white file:transition file:duration-150 file:hover:bg-[#5f8ed4] focus:border-[#6F9EE7] focus:ring-2 focus:ring-[#6F9EE7]/30 focus:outline-none"
                    />

                    <textarea placeholder="Isi Artikel" class="h-32 w-full rounded-md border px-3 py-2 text-sm"></textarea>
                    <input type="date" class="w-full rounded-md border px-3 py-2 text-sm" />
                    <div class="flex justify-end gap-2 pt-4">
                        <button @click="showCreateModal = false" class="rounded-md border px-4 py-1.5 text-sm text-gray-600 hover:bg-gray-100">
                            Batal
                        </button>
                        <button class="rounded-md bg-[#6F9EE7] px-4 py-1.5 text-sm text-white hover:bg-[#5f8ed4]">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <!-- Bagian edit -->
    <template v-if="showEditModal">
        <div class="fixed inset-0 z-50 flex items-center justify-center px-4">
            <div class="w-full max-w-lg rounded-xl bg-white p-6 shadow-lg">
                <h2 class="mb-4 text-lg font-semibold text-[#6F9EE7]">Edit Artikel</h2>
                <div class="space-y-3">
                    <input type="text" placeholder="Judul Artikel" class="w-full rounded-md border px-3 py-2 text-sm" />
                    <input
                        type="file"
                        class="w-full rounded-md border border-gray-300 text-sm text-gray-700 file:border-none file:bg-[#6F9EE7] file:px-4 file:py-2 file:text-white file:transition file:duration-150 file:hover:bg-[#5f8ed4] focus:border-[#6F9EE7] focus:ring-2 focus:ring-[#6F9EE7]/30 focus:outline-none"
                    />

                    <textarea placeholder="Isi Artikel" class="h-32 w-full rounded-md border px-3 py-2 text-sm"></textarea>
                    <input type="date" class="w-full rounded-md border px-3 py-2 text-sm" />
                    <div class="flex justify-end gap-2 pt-4">
                        <button @click="showEditModal = false" class="rounded-md border px-4 py-1.5 text-sm text-gray-600 hover:bg-gray-100">
                            Batal
                        </button>
                        <button class="rounded-md bg-[#6F9EE7] px-4 py-1.5 text-sm text-white hover:bg-[#5f8ed4]">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <!-- Bagian show -->
    <template v-if="showDetailModal">
        <div class="fixed inset-0 z-50 flex items-center justify-center px-4">
            <div class="w-full max-w-lg rounded-xl bg-white p-6 shadow-lg">
                <h2 class="mb-4 text-lg font-semibold text-[#6F9EE7]">Detail Artikel</h2>
                <div class="space-y-3 text-sm text-gray-700">
                    <p><strong>Judul:</strong> Artikel Contoh</p>
                    <p><strong>Tanggal:</strong> 17 Juni 2025</p>
                    <p><strong>Isi:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
                    <img src="/images/artikel-1.png" alt="Foto Artikel" class="max-h-64 w-full rounded object-cover" />
                    <div class="flex justify-end pt-4">
                        <button @click="showDetailModal = false" class="rounded-md bg-[#6F9EE7] px-4 py-1.5 text-sm text-white hover:bg-[#5f8ed4]">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </template>
</template>
