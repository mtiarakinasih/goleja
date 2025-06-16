<script setup lang="ts">
import AppLogo from '@/components/AppLogo.vue';
import AppLogoIcon from '@/components/AppLogoIcon.vue';
import Breadcrumbs from '@/components/Breadcrumbs.vue';
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { Button } from '@/components/ui/button';
import { DropdownMenu, DropdownMenuContent, DropdownMenuTrigger } from '@/components/ui/dropdown-menu';
import { NavigationMenu, NavigationMenuItem, NavigationMenuList, navigationMenuTriggerStyle } from '@/components/ui/navigation-menu';
import { Sheet, SheetContent, SheetHeader, SheetTitle, SheetTrigger } from '@/components/ui/sheet';
import UserMenuContent from '@/components/UserMenuContent.vue';
import { getInitials } from '@/composables/useInitials';
import type { BreadcrumbItem, NavItem } from '@/types';
import { Link, usePage } from '@inertiajs/vue3';
import { Bell, Menu } from 'lucide-vue-next';
import { computed, onBeforeUnmount, onMounted, ref } from 'vue';

interface Props {
    breadcrumbs?: BreadcrumbItem[];
}

const props = withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
});

const page = usePage();
const auth = computed(() => page.props.auth);

const isCurrentRoute = computed(() => (url: string) => page.url === url);
const activeItemStyles = computed(
    () => (url: string) => (isCurrentRoute.value(url) ? 'text-neutral-900 dark:bg-neutral-800 dark:text-neutral-100' : ''),
);

const mainNavItems: NavItem[] = [
    { title: 'Cari Kerja', href: '/cari-kerja' },
    { title: 'Artikel', href: '/artikel' },
    { title: 'Perusahaan', href: '/perusahaan' },
];

// Notifikasi
const showNotif = ref(false);
const toggleNotif = () => (showNotif.value = !showNotif.value);
const closeNotif = (e: MouseEvent) => {
    const target = e.target as HTMLElement;
    if (!target.closest('#notif-button') && !target.closest('#notif-dropdown')) {
        showNotif.value = false;
    }
};

onMounted(() => document.addEventListener('click', closeNotif));
onBeforeUnmount(() => document.removeEventListener('click', closeNotif));
</script>

<template>
    <div>
        <div class="border-b border-sidebar-border/80">
            <div class="mx-auto flex h-16 items-center px-4 md:max-w-7xl">
                <!-- Mobile Menu -->
                <div class="lg:hidden">
                    <Sheet>
                        <SheetTrigger :as-child="true">
                            <Button variant="ghost" size="icon" class="mr-2 h-9 w-9">
                                <Menu class="h-5 w-5" />
                            </Button>
                        </SheetTrigger>
                        <SheetContent side="left" class="w-[300px] p-6">
                            <SheetTitle class="sr-only">Navigation Menu</SheetTitle>
                            <SheetHeader class="flex justify-start text-left">
                                <AppLogoIcon class="size-6 fill-current text-black dark:text-white" />
                            </SheetHeader>
                            <div class="flex h-full flex-1 flex-col justify-between space-y-4 py-6">
                                <nav class="-mx-3 space-y-1">
                                    <Link
                                        v-for="item in mainNavItems"
                                        :key="item.title"
                                        :href="item.href"
                                        class="flex items-center gap-x-3 rounded-lg px-3 py-2 text-sm font-medium hover:bg-accent"
                                        :class="activeItemStyles(item.href)"
                                    >
                                        {{ item.title }}
                                    </Link>
                                </nav>
                            </div>
                        </SheetContent>
                    </Sheet>
                </div>

                <Link :href="route('dashboard')" class="flex items-center gap-x-2">
                    <AppLogo />
                </Link>

                <!-- Desktop Menu -->
                <div class="hidden h-full lg:flex lg:flex-1">
                    <NavigationMenu class="ml-10 flex h-full items-stretch">
                        <NavigationMenuList class="flex h-full items-stretch space-x-2">
                            <NavigationMenuItem v-for="(item, index) in mainNavItems" :key="index" class="relative flex h-full items-center">
                                <Link
                                    :class="[navigationMenuTriggerStyle(), activeItemStyles(item.href), 'h-9 cursor-pointer px-3']"
                                    :href="item.href"
                                >
                                    {{ item.title }}
                                </Link>
                                <div
                                    v-if="isCurrentRoute(item.href)"
                                    class="absolute bottom-0 left-0 h-0.5 w-full translate-y-px bg-black dark:bg-white"
                                ></div>
                            </NavigationMenuItem>
                        </NavigationMenuList>
                    </NavigationMenu>
                </div>

                <!-- Right side: Notif, User -->
                <div class="ml-auto flex items-center space-x-4">
                    <!-- Notifikasi -->
                    <div class="relative">
                        <button
                            id="notif-button"
                            @click="toggleNotif"
                            class="relative flex h-10 w-10 items-center justify-center rounded-full transition hover:bg-gray-100"
                        >
                            <Bell class="w-5text-neutral-800 h-4 w-4" :stroke-width="1.7" />
                            <span class="absolute top-1 right-1 h-2 w-2 rounded-full bg-red-500 ring-2 ring-white" />
                        </button>

                        <!-- Dropdown -->
                        <div
                            v-if="showNotif"
                            id="notif-dropdown"
                            class="absolute right-0 z-50 mt-2 max-w-xs rounded-md border border-gray-200 bg-white shadow-md"
                        >
                            <div class="p-2 text-[13px] whitespace-nowrap text-gray-700">
                                <a href="#" class="block rounded-md px-3 py-2 transition hover:bg-[#f5f7ff] hover:text-[#3f4fc1]">
                                    Lowongan baru tersedia
                                </a>
                                <a href="#" class="block rounded-md px-3 py-2 transition hover:bg-[#f5f7ff] hover:text-[#3f4fc1]">
                                    Profil kamu dilihat oleh HRD
                                </a>
                                <a href="#" class="block rounded-md px-3 py-2 transition hover:bg-[#f5f7ff] hover:text-[#3f4fc1]">
                                    Artikel baru: Cara Lulus Interview
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Username & Role -->
                    <div class="text-right leading-tight">
                        <div class="text-sm font-medium text-black dark:text-white">{{ auth.user?.name }}</div>
                        <div class="text-xs text-neutral-500">user</div>
                    </div>

                    <!-- Avatar -->
                    <DropdownMenu>
                        <DropdownMenuTrigger :as-child="true">
                            <Button
                                variant="ghost"
                                size="icon"
                                class="relative size-10 w-auto rounded-full p-1 focus-within:ring-2 focus-within:ring-primary"
                            >
                                <Avatar class="size-8 overflow-hidden rounded-full">
                                    <AvatarImage v-if="auth.user.avatar" :src="auth.user.avatar" :alt="auth.user.name" />
                                    <AvatarFallback class="rounded-lg bg-neutral-200 font-semibold text-black dark:bg-neutral-700 dark:text-white">
                                        {{ getInitials(auth.user?.name) }}
                                    </AvatarFallback>
                                </Avatar>
                            </Button>
                        </DropdownMenuTrigger>
                        <DropdownMenuContent align="end" class="w-56">
                            <UserMenuContent :user="auth.user" />
                        </DropdownMenuContent>
                    </DropdownMenu>
                </div>
            </div>
        </div>

        <!-- Breadcrumb -->
        <div v-if="props.breadcrumbs.length > 1" class="flex w-full border-b border-sidebar-border/70">
            <div class="mx-auto flex h-12 w-full items-center justify-start px-4 text-neutral-500 md:max-w-7xl">
                <Breadcrumbs :breadcrumbs="breadcrumbs" />
            </div>
        </div>
    </div>
</template>
