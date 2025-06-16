<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import FooterSection from '@/components/FooterSection.vue';
import CategoryCard from '@/components/CategoryCard.vue';
import '@fortawesome/fontawesome-free/css/all.css';

</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
        <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700&display=swap" rel="stylesheet">
    </Head>

    <div class="flex min-h-screen flex-col bg-[#FDFDFC] text-[#1b1b18] dark:bg-[#0a0a0a] dark:text-[#EDEDEC]">
        <!-- Header Navigation -->
        <header class="w-full border-b border-gray-200 dark:border-gray-700">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4">
                <h1 class="text-xl font-semibold">Selamat datang di Goleja</h1>
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
        <main class="flex flex-col flex-1 items-center justify-center mt-12">
        
            <!-- Herosection -->
            <section class="w-full bg-white -mx-6 -mt-12">
                <div class="flex flex-col md:flex-row w-full h-screen">
                    <!-- Kiri: Text + Search -->
                    <div class="w-full md:w-1/2 flex flex-col justify-center px-6 md:px-16 space-y-6"
                    style="background: linear-gradient(135deg, #102C57 0%, #EADBCB 70%, #ffffff 100%);">
                        <h1 class="text-3xl md:text-5xl font-bold leading-snug text-gray-800">
                        Buka Mata, Buka Peluang, Buka Masa Depan dengan Goleja
                        </h1>

                        <!-- Search bar -->
                        <div class="flex flex-col md:flex-row bg-white shadow-md rounded-md overflow-hidden">
                        <input
                            type="text"
                            placeholder="Job Title or Keyword"
                            class="px-4 py-3 w-full md:w-2/3 outline-none"
                        />
                        <select class="px-4 py-3 border-t md:border-t-0 md:border-l border-gray-300 w-full md:w-1/4">
                            <option>Category</option>
                        </select>
                        <button class="px-6 bg-gray-800 text-white hover:bg-gray-700 transition">
                            <i class="fas fa-search"></i>
                        </button>
                        </div>
                    </div>

                    <!-- Kanan: Gambar -->
                    <div class="w-full md:w-1/2 h-[400px] md:h-auto">
                        <img
                        src="/images/hero-image.jpg"
                        alt="Hero Image"
                        class="w-full h-full object-cover"
                        />
                    </div>
                </div>
            </section>

            <!-- Categories Section -->
            <section class="w-full px-20 py-16 bg-white">
                <div class="flex justify-between items-center mb-10">
                    <h2 class="text-4xl font-semibold">Browse by Categories</h2>
                    <a href="#" class="text-sm text-gray-600">See All Category</a>
                </div>
                <!-- card -->
                <CategoryCard />
            </section>

            <!-- carreer Opportunity -->
            <section class="w-full flex flex-col md:flex-row items-center justify-center px-30 py-30 bg-white">
                <!-- Kiri: Konten -->
                <div class="md:w-1/2 space-y-6">
                <h2 class="text-4xl font-bold text-gray-800">
                    Unlock Your Next Career Opportunity!
                </h2>
                <p class="text-gray-600">
                    Lorem ipsum odor amet, consectetuer adipiscing elit.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start space-x-4">
                    <div class="w-8 h-8 rounded-full bg-blue-900 text-white flex items-center justify-center font-semibold">1</div>
                    <span class="text-gray-700">Create your account</span>
                    </li>
                    <li class="flex items-start space-x-4">
                    <div class="w-8 h-8 rounded-full bg-blue-900 text-white flex items-center justify-center font-semibold">2</div>
                    <span class="text-gray-700">Select and Apply your dream Job</span>
                    </li>
                    <li class="flex items-start space-x-4">
                    <div class="w-8 h-8 rounded-full bg-blue-900 text-white flex items-center justify-center font-semibold">3</div>
                    <span class="text-gray-700">Dapet Gaji yay!!</span>
                    </li>
                </ul>
                </div>

                <!-- Kanan: Gambar -->
                <div class="md:w-1/2 mt-8 md:mt-0 flex pl-30">
                <img src="/images/carrer.png" alt="team" class="h-120" />
                </div>
            </section>

            <!-- carrer journey  -->
            <section class="w-full px-30 py-30 bg-linear-to-t from-gray-200 to-white-800 text-center">
                <h2 class="text-4xl font-bold mb-15">Boost Your Career Journey</h2>
                <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-6 md:mb-0 flex justify-center">
                    <img src="/images/journey.png" alt="Career Journey" class="shadow-md" />
                </div>
                <div class="md:w-1/2 md:pl-20">
                    <div class="bg-white p-6 rounded-lg shadow-md text-left">
                    <p class="text-blue-800 text-1xl font-medium">5 Common Mistakes</p>
                    <h3 class="font-semibold text-1xl">Job Seekers Make - and How to Avoid Them</h3>
                    <p class="text-sm text-gray-800 mt-2">
                        Looking for a job can be overwhelming — especially when small mistakes end up costing you big opportunities. In this article, we highlight the five most common mistakes candidates make during their job search, from poorly written resumes to lack of follow-up. We also share practical tips to help you stand out and secure the job you deserve.
                    </p>
                    <button class="mt-4 bg-orange-200 text-white-900 px-4 py-2 rounded text-sm"><a href="http://" class="">Read Article</a></button>
                    </div>
                </div>
                </div>
            </section>

            <!-- empower section -->
            <section class="w-full flex flex-col md:flex-row items-center justify-center px-30 py-30 bg-gray-200">
                <div class="md:w-1/2 space-y-4">
                <h2 class="text-4xl font-bold">Empower Your Job Search with Us</h2>
                <p class="text-gray-600 text-sm">
                   Whether you're a fresh graduate or a seasoned professional, we’re here to help you land the job you deserve — fast, fair, and stress-free. Explore open roles, connect with top employers, and grow your career.
                </p>
                <button class="bg-gray-700 text-white px-4 py-2 rounded">Join Now</button>
                </div>
                <div class="md:w-1/2 mt-6 md:mt-0 flex items-center justify-center relative">
                <img src="/images/empower.png" alt="Job Badge" class="h-120 rounded-lg" />
                </div>
            </section>
        </main>

        <!-- Footer Section -->
        <FooterSection />
    </div>
</template>
