<script setup lang="ts">
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AppLayout from '@/layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Eye, Phone, Search, Send, X } from 'lucide-vue-next';
import { computed, ref } from 'vue';

const activeTab = ref<'akun' | 'status' | 'riwayat'>('akun');

const bio = ref('ini biooooooooooooooooo yaaqqw..');
const phone = ref('0812345678');
const email = ref('emailku@gmail.com');
const linkedin = ref('linkedin/username');

const showDetail = ref(false);
const selectedStatus = ref<any>(null);

const statusList = [
    {
        company: 'PT Botika Teknologi Indonesia',
        position: 'Manajer',
        status: 'Terkirim',
        color: 'bg-blue-200 text-blue-800',
        note: '',
    },
    {
        company: 'PT Aksa Digital Group',
        position: 'Administrator',
        status: 'Sedang dicek',
        color: 'bg-yellow-200 text-yellow-800',
        note: '',
    },
    {
        company: 'PT Aksa Digital Group',
        position: 'Administrator',
        status: 'Dipanggil Interview',
        color: 'bg-green-200 text-green-800',
        note: '[Link Meeting/lampiran dokumen undangan interview]',
    },
];

const historyList = [
    {
        company: 'PT Botika Teknologi Indonesia',
        position: 'Manajer',
        status: 'Terkirim',
        color: 'bg-green-200 text-green-800',
        note: '',
    },
    {
        company: 'PT Aksa Digital Group',
        position: 'Administrator',
        status: 'Ditolak',
        color: 'bg-red-200 text-red-800',
        note: 'Catatan dari HR jika ada',
    },
];

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

const progressLineWidth = computed(() => {
    switch (progressStep.value) {
        case 1:
            return 0;
        case 2:
            return 50;
        case 3:
            return 100;
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
            <div class="flex w-1/4 flex-col justify-between rounded-xl bg-gray-50 p-6 shadow">
                <div class="flex flex-col items-center">
                    <div class="relative">
                        <img src="/default-avatar.png" class="h-24 w-24 rounded-full border object-cover" />
                        <button @click="triggerUpload" class="absolute right-0 bottom-0 rounded-full border bg-white p-1 shadow hover:bg-gray-100">
                            <img src="/upload-icon.png" class="h-5 w-5" />
                        </button>
                        <input id="fileUpload" type="file" class="hidden" />
                    </div>
                    <div class="mt-4 text-center">
                        <p class="text-lg font-semibold">Username</p>
                        <p class="text-sm text-gray-500">Nama_Lengkap - role</p>
                    </div>
                </div>

                <div class="mt-10 space-y-3 pb-10 text-sm text-gray-700">
                    <div class="rounded border px-3 py-2">{{ bio }}</div>
                    <div class="rounded border px-3 py-2">{{ phone }}</div>
                    <div class="rounded border px-3 py-2">{{ email }}</div>
                    <div class="flex items-center justify-between rounded border px-3 py-2">
                        <span>{{ linkedin }}</span>
                        <i class="fab fa-linkedin text-blue-600"></i>
                    </div>
                </div>
            </div>

            <div class="w-3/4">
                <div class="mb-4 flex border-b text-sm font-semibold">
                    <button
                        v-for="tab in ['akun', 'status', 'riwayat']"
                        :key="tab"
                        @click="activeTab = tab"
                        :class="activeTab === tab ? 'border-b-2 border-blue-800 text-blue-800' : 'text-gray-500'"
                        class="px-4 py-2 capitalize"
                    >
                        {{ tab === 'akun' ? 'Pengaturan Akun' : tab === 'status' ? 'Status Pengajuan' : 'Riwayat Pengajuan' }}
                    </button>
                </div>

                <!-- Tab Akun -->
                <div v-if="activeTab === 'akun'" class="mt-4 grid grid-cols-2 gap-4 text-sm">
                    <div class="space-y-2"><Label>Username</Label><Input placeholder="Username" /></div>
                    <div class="space-y-2"><Label>Nama Lengkap</Label><Input placeholder="Nama Lengkap" /></div>
                    <div class="space-y-2"><Label>Password</Label><Input type="password" placeholder="Password" /></div>
                    <div class="space-y-2"><Label>Re-type Password</Label><Input type="password" placeholder="Re-type Password" /></div>
                    <div class="space-y-2"><Label>No Telepon</Label><Input placeholder="No Telepon" /></div>
                    <div class="space-y-2"><Label>Email</Label><Input placeholder="Email" /></div>
                    <div class="col-span-2 space-y-2"><Label>LinkedIn</Label><Input placeholder="linkedin.com/username" /></div>
                    <div class="col-span-2 space-y-2"><Label>Bio</Label><textarea class="w-full rounded border p-2" rows="4"></textarea></div>
                    <div class="col-span-2"><Button>Update</Button></div>
                </div>

                <!-- Tab Status -->
                <div v-else-if="activeTab === 'status'" class="space-y-4">
                    <div v-for="(item, i) in statusList" :key="i" class="relative rounded bg-gray-100 p-4 shadow-sm">
                        <p class="font-semibold">{{ item.company }}</p>
                        <p>Posisi: {{ item.position }}</p>
                        <p class="mt-1 text-sm">
                            Status Pengajuan:
                            <span :class="'rounded px-2 py-1 ' + item.color">{{ item.status }}</span>
                        </p>
                        <p v-if="item.note" class="mt-2 text-sm text-gray-500">{{ item.note }}</p>
                        <button
                            @click="
                                selectedStatus = item;
                                showDetail = true;
                            "
                            class="absolute top-4 right-4 text-blue-800 hover:text-blue-600"
                        >
                            <Eye class="h-5 w-5" />
                        </button>
                    </div>
                </div>

                <!-- Tab Riwayat -->
                <div v-else-if="activeTab === 'riwayat'" class="space-y-4">
                    <div v-for="(item, i) in historyList" :key="i" class="rounded bg-gray-100 p-4 shadow-sm">
                        <p class="font-semibold">{{ item.company }}</p>
                        <p>Posisi: {{ item.position }}</p>
                        <p class="mt-1 text-sm">
                            Status Pengajuan:
                            <span :class="'rounded px-2 py-1 ' + item.color">{{ item.status }}</span>
                        </p>
                        <p v-if="item.note" class="mt-2 text-sm text-gray-500">{{ item.note }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL DETAIL STATUS FINAL DENGAN POSISI POJOK & TEXT RATA -->
        <div v-if="showDetail" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
            <div class="relative w-[700px] rounded-xl bg-white p-8 shadow-xl">
                <h2 class="mb-6 text-lg font-bold">Detail Status Pengajuan</h2>

                <div class="relative flex items-start justify-between px-6">
                    <!-- GARIS DI TENGAH -->
                    <div class="absolute top-6 left-[13%] z-0 h-1 w-[74%] bg-gray-300">
                        <div
                            class="h-full bg-blue-700 transition-all duration-300"
                            :style="{ width: progressStep === 1 ? '0%' : progressStep === 2 ? '50%' : '100%' }"
                        ></div>
                    </div>

                    <!-- STEP 1 - RATA KIRI -->
                    <div class="z-10 flex w-[30%] flex-col items-start text-left">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border-4 border-white bg-white shadow">
                            <Send class="h-6 w-6 text-gray-500" />
                        </div>
                        <p class="mt-2 font-semibold">Terkirim</p>
                        <p class="text-sm text-gray-500">Lamaran kamu udah mendarat dengan selamat!</p>
                    </div>

                    <!-- STEP 2 - TENGAH -->
                    <div class="z-10 flex w-[30%] flex-col items-center text-center">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border-4 border-white bg-white shadow">
                            <Search class="h-6 w-6 text-gray-500" />
                        </div>
                        <p class="mt-2 font-semibold">Sedang Dicek</p>
                        <p class="text-sm text-gray-500">HR lagi periksa berkas kamu, sabar yaa~</p>
                    </div>

                    <!-- STEP 3 - RATA KANAN -->
                    <div class="z-10 flex w-[30%] flex-col items-end text-right">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border-4 border-white bg-white shadow">
                            <Phone class="h-6 w-6 text-gray-500" />
                        </div>
                        <p class="mt-2 font-semibold">CV kamu diterima!</p>
                        <p class="text-sm text-gray-500">Silakan hubungi HR untuk tahap selanjutnya.</p>
                    </div>
                </div>

                <!-- CLOSE BUTTON -->
                <button class="absolute top-4 right-4 text-gray-500 hover:text-gray-800" @click="showDetail = false">
                    <X class="h-5 w-5" />
                </button>
            </div>
        </div>
    </AppLayout>
</template>
