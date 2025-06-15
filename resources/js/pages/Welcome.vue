<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <div class="flex min-h-screen flex-col bg-[#FDFDFC] text-[#1b1b18] dark:bg-[#0a0a0a] dark:text-[#EDEDEC]">
        <!-- Header Navigation -->
        <header class="w-full border-b border-gray-200 dark:border-gray-700">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4">
                <h1 class="text-xl font-semibold">Welcome</h1>
                <nav class="flex gap-4 text-sm">
                    <Link
                        v-if="$page.props.auth.user"
                        :href="route('dashboard')"
                        class="rounded-md border border-gray-300 px-4 py-1.5 transition hover:bg-gray-100 dark:border-gray-600 dark:hover:bg-gray-800"
                    >
                        Dashboard
                    </Link>
                    <template v-else>
                        <Link
                            :href="route('login')"
                            class="rounded-md border border-transparent px-4 py-1.5 transition hover:border-gray-300 dark:hover:border-gray-600"
                        >
                            Log in
                        </Link>
                        <Link
                            :href="route('register')"
                            class="rounded-md border border-gray-300 px-4 py-1.5 transition hover:bg-gray-100 dark:border-gray-600 dark:hover:bg-gray-800"
                        >
                            Register
                        </Link>
                    </template>
                </nav>
            </div>
        </header>

        <!-- Content Section -->
        <main class="flex flex-1 items-center justify-center px-6 py-12">
            <div class="text-center">
                <h2 class="mb-2 text-3xl font-bold">Selamat Datang di Aplikasi Kami</h2>
                <p class="text-gray-500 dark:text-gray-400">Silakan login atau register untuk mulai menggunakan aplikasi.</p>
            </div>
        </main>
    </div>
</template>
