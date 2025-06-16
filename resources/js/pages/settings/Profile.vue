<script setup lang="ts">
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AppLayout from '@/layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Eye, Image, Phone, Search, Send, X } from 'lucide-vue-next';
import { computed, ref } from 'vue';

const activeTab = ref<'akun' | 'status' | 'riwayat'>('akun');

const showDetail = ref(false);
const selectedStatus = ref<any>(null);

const progressStep = computed(() => {
    switch (selectedStatus.value?.status) {
        case 'Terkirim':
            return 1;
        case 'Sedang dicek':
            return 2;
        case 'Dipanggil Interview':
        case 'CV kamu diterima!':
            return 3;
        default:
            return 0;
    }
});

function triggerUpload() {
    document.getElementById('fileUpload')?.click();
}
</script>

<template>
    <AppLayout>
        <Head title="Profil Saya" />
        <div class="flex min-h-screen items-start gap-12 px-6 py-6">
            <!-- profile -->
            <div class="mt-6 mb-6 flex w-1/4 flex-col justify-between rounded-xl bg-gray-50 p-6 shadow">
                <div class="flex flex-col items-center">
                    <div class="relative mb-4">
                        <!-- user yang tidak punya foto ptofile maka akan pake default ini -->
                        <img src="/profile/default_profile.jpeg" class="h-32 w-32 rounded-full border-[6px] border-white object-cover shadow" />

                        <button
                            @click="triggerUpload"
                            class="absolute right-0 bottom-0 flex h-8 w-8 items-center justify-center rounded-full bg-[#6F9EE7] shadow"
                        >
                            <Image class="h-4 w-4 text-white" />
                        </button>

                        <input id="fileUpload" type="file" class="hidden" />
                    </div>

                    <div class="text-center">
                        <p class="text-lg font-semibold">Username</p>
                        <p class="text-sm text-gray-500">Nama_Lengkap - role</p>
                    </div>
                </div>

                <div class="mt-10 space-y-3 pb-10 text-sm text-gray-700">
                    <div class="rounded border px-3 py-2">ini biooooooooooooooooo yaaqqw..</div>
                    <div class="rounded border px-3 py-2">0812345678</div>
                    <div class="rounded border px-3 py-2">emailku@gmail.com</div>
                    <div class="flex items-center justify-between rounded border px-3 py-2">
                        <span>linkedin/username</span>
                        <i class="fab fa-linkedin text-blue-600"></i>
                    </div>
                </div>
            </div>

            <div class="w-3/4">
                <div class="mb-4 flex border-b text-sm">
                    <button
                        v-for="tab in ['akun', 'status', 'riwayat']"
                        :key="tab"
                        @click="activeTab = tab"
                        :class="['px-4 py-2 capitalize', activeTab === tab ? 'border-b-2 border-blue-800 text-blue-800' : 'text-gray-500']"
                    >
                        {{ tab === 'akun' ? 'Pengaturan Akun' : tab === 'status' ? 'Status Pengajuan' : 'Riwayat Pengajuan' }}
                    </button>
                </div>

                <!-- bagian setting akun -->
                <div v-if="activeTab === 'akun'" class="mt-4 grid grid-cols-2 gap-4 text-sm">
                    <div class="space-y-2"><Label>Username</Label><Input placeholder="Username" /></div>
                    <div class="space-y-2"><Label>Nama Lengkap</Label><Input placeholder="Nama Lengkap" /></div>
                    <div class="space-y-2"><Label>Password</Label><Input type="password" placeholder="Password" /></div>
                    <div class="space-y-2"><Label>Re-type Password</Label><Input type="password" placeholder="Re-type Password" /></div>
                    <div class="space-y-2"><Label>No Telepon</Label><Input placeholder="No Telepon" /></div>
                    <div class="space-y-2"><Label>Email</Label><Input placeholder="Email" /></div>
                    <div class="col-span-2 space-y-2"><Label>LinkedIn</Label><Input placeholder="linkedin.com/username" /></div>
                    <div class="col-span-2 space-y-2">
                        <Label>Bio</Label
                        ><textarea
                            rows="4"
                            class="flex w-full min-w-0 rounded-md border border-gray-300 bg-white px-3 py-1 text-base text-black shadow-none transition-[color,box-shadow] outline-none placeholder:text-gray-600 focus-visible:border-black focus-visible:ring-[3px] focus-visible:ring-[rgba(0,0,0,0.2)] disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                        />
                    </div>
                    <div class="col-span-2"><Button>Update</Button></div>
                </div>

                <!-- bagian status -->
                <div v-else-if="activeTab === 'status'" class="space-y-4 text-sm">
                    <div class="relative rounded bg-gray-100 p-4 shadow-sm">
                        <p class="font-semibold">PT Botika Teknologi Indonesia</p>
                        <p>Posisi: Manajer</p>
                        <p class="mt-1 text-sm">
                            Status Pengajuan:
                            <span class="rounded bg-blue-200 px-2 py-1 text-blue-800">Terkirim</span>
                        </p>
                        <button
                            @click="
                                selectedStatus = {
                                    company: 'PT Botika Teknologi Indonesia',
                                    position: 'Manajer',
                                    status: 'Terkirim',
                                };
                                showDetail = true;
                            "
                            class="absolute top-4 right-4 text-blue-800 hover:text-blue-600"
                        >
                            <Eye class="h-5 w-5" />
                        </button>
                    </div>

                    <div class="relative rounded bg-gray-100 p-4 shadow-sm">
                        <p class="font-semibold">PT Aksa Digital Group</p>
                        <p>Posisi: Administrator</p>
                        <p class="mt-1 text-sm">
                            Status Pengajuan:
                            <span class="rounded bg-yellow-200 px-2 py-1 text-yellow-800">Sedang dicek</span>
                        </p>
                        <button
                            @click="
                                selectedStatus = {
                                    company: 'PT Aksa Digital Group',
                                    position: 'Administrator',
                                    status: 'Sedang dicek',
                                };
                                showDetail = true;
                            "
                            class="absolute top-4 right-4 text-blue-800 hover:text-blue-600"
                        >
                            <Eye class="h-5 w-5" />
                        </button>
                    </div>

                    <div class="relative rounded bg-gray-100 p-4 shadow-sm">
                        <p class="font-semibold">PT Aksa Digital Group</p>
                        <p>Posisi: Administrator</p>
                        <p class="mt-1 text-sm">
                            Status Pengajuan:
                            <span class="rounded bg-green-200 px-2 py-1 text-green-800">Dipanggil Interview</span>
                        </p>
                        <p class="mt-2 text-sm text-gray-500">[Link Meeting/lampiran dokumen undangan interview]</p>
                        <button
                            @click="
                                selectedStatus = {
                                    company: 'PT Aksa Digital Group',
                                    position: 'Administrator',
                                    status: 'CV kamu diterima!',
                                };
                                showDetail = true;
                            "
                            class="absolute top-4 right-4 text-blue-800 hover:text-blue-600"
                        >
                            <Eye class="h-5 w-5" />
                        </button>
                    </div>
                </div>

                <!-- bagian history -->
                <div v-else-if="activeTab === 'riwayat'" class="space-y-4 text-sm">
                    <div class="rounded bg-gray-100 p-4 shadow-sm">
                        <p class="font-semibold">PT Botika Teknologi Indonesia</p>
                        <p>Posisi: Manajer</p>
                        <p class="mt-1 text-sm">
                            Status Pengajuan:
                            <span class="rounded bg-green-200 px-2 py-1 text-green-800">Terkirim</span>
                        </p>
                    </div>
                    <div class="rounded bg-gray-100 p-4 shadow-sm">
                        <p class="font-semibold">PT Aksa Digital Group</p>
                        <p>Posisi: Administrator</p>
                        <p class="mt-1 text-sm">
                            Status Pengajuan:
                            <span class="rounded bg-red-200 px-2 py-1 text-red-800">Ditolak</span>
                        </p>
                        <p class="mt-2 text-sm text-gray-500">Catatan dari HR jika ada</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- untuk detail -->
        <div v-if="showDetail" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
            <div class="relative w-[700px] rounded-xl bg-white p-8 shadow-xl">
                <h2 class="mb-6 text-lg font-bold">Detail Status Pengajuan</h2>

                <div class="relative flex items-start justify-between px-6">
                    <div class="absolute top-6 left-[13%] z-0 h-1 w-[74%] bg-gray-300">
                        <div
                            class="h-full bg-blue-700 transition-all duration-300"
                            :style="{ width: progressStep === 1 ? '0%' : progressStep === 2 ? '50%' : '100%' }"
                        ></div>
                    </div>

                    <div class="z-10 flex w-[30%] flex-col items-start text-left">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border-4 border-white bg-white shadow">
                            <Send class="h-6 w-6 text-gray-500" />
                        </div>
                        <p class="mt-2 font-semibold">Terkirim</p>
                        <p class="text-sm text-gray-500">Lamaran kamu udah mendarat dengan selamat!</p>
                    </div>

                    <div class="z-10 flex w-[30%] flex-col items-center text-center">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border-4 border-white bg-white shadow">
                            <Search class="h-6 w-6 text-gray-500" />
                        </div>
                        <p class="mt-2 font-semibold">Sedang Dicek</p>
                        <p class="text-sm text-gray-500">HR lagi periksa berkas kamu, sabar yaa~</p>
                    </div>

                    <div class="z-10 flex w-[30%] flex-col items-end text-right">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border-4 border-white bg-white shadow">
                            <Phone class="h-6 w-6 text-gray-500" />
                        </div>
                        <p class="mt-2 font-semibold">CV kamu diterima!</p>
                        <p class="text-sm text-gray-500">Silakan hubungi HR untuk tahap selanjutnya.</p>
                    </div>
                </div>

                <button class="absolute top-4 right-4 text-gray-500 hover:text-gray-800" @click="showDetail = false">
                    <X class="h-5 w-5" />
                </button>
            </div>
        </div>
    </AppLayout>
</template>
