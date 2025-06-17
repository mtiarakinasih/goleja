<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <AppLayout>
        <Head title="Create Artikel" />

        <div class="mx-auto w-full max-w-3xl px-4 py-8">
            <h1 class="mb-6 text-base font-semibold text-[#345EA8]">Create Artikel</h1>

            <form class="grid grid-cols-1 gap-4 text-sm">
                <div class="space-y-2">
                    <input
                        type="text"
                        placeholder="Judul Artikel"
                        class="w-full rounded-md border border-gray-300 !bg-[#F2F2F2] px-3 py-2 text-sm text-black placeholder:text-gray-600 hover:border-gray-400 hover:shadow-[0_0_0_1px_rgba(111,158,231,0.3)] focus:bg-white focus-visible:border-[#6F9EE7] focus-visible:ring-2 focus-visible:ring-[rgba(111,158,231,0.5)]"
                    />
                </div>

                <div class="space-y-2">
                    <input
                        type="file"
                        class="w-full rounded-md border border-gray-300 !bg-[#F2F2F2] px-0 py-0 text-sm text-black file:mr-3 file:rounded-none file:border-none file:bg-[#6F9EE7]/90 file:px-4 file:py-2 file:text-white hover:border-gray-400 hover:shadow-[0_0_0_1px_rgba(111,158,231,0.3)] file:hover:bg-[#6F9EE7]/30 focus:bg-white focus-visible:border-[#6F9EE7] focus-visible:ring-2 focus-visible:ring-[rgba(111,158,231,0.5)]"
                    />
                </div>

                <div class="space-y-2">
                    <textarea
                        rows="5"
                        placeholder="Isi Artikel"
                        class="w-full rounded-md border border-gray-300 !bg-[#F2F2F2] px-3 py-2 text-sm text-black placeholder:text-gray-600 hover:border-gray-400 hover:shadow-[0_0_0_1px_rgba(111,158,231,0.3)] focus:bg-white focus-visible:border-[#6F9EE7] focus-visible:ring-2 focus-visible:ring-[rgba(111,158,231,0.5)]"
                    ></textarea>
                </div>

                <div class="space-y-2">
                    <input
                        type="date"
                        class="w-full rounded-md border border-gray-300 !bg-[#F2F2F2] px-3 py-2 text-sm text-black hover:border-gray-400 hover:shadow-[0_0_0_1px_rgba(111,158,231,0.3)] focus:bg-white focus-visible:border-[#6F9EE7] focus-visible:ring-2 focus-visible:ring-[rgba(111,158,231,0.5)]"
                    />
                </div>

                <div class="flex justify-end gap-2 pt-2">
                    <Link :href="route('artikel.index')" class="rounded border px-4 py-2 text-sm text-gray-600 hover:bg-gray-100"> Batal </Link>
                    <button type="submit" class="rounded bg-[#6F9EE7] px-4 py-2 text-sm text-white hover:bg-[#5f8ed4]">Update</button>
                </div>
            </form>
        </div>
    </AppLayout>
</template>
