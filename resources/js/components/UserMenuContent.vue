<script setup lang="ts">
import { DropdownMenuGroup, DropdownMenuItem, DropdownMenuSeparator } from '@/components/ui/dropdown-menu';
import type { User } from '@/types';
import { Link, router } from '@inertiajs/vue3';
import { LogOut, Settings, Star } from 'lucide-vue-next';

interface Props {
    user: User;
}

const handleLogout = () => {
    router.flushAll();
};

defineProps<Props>();
</script>

<template>
    <DropdownMenuSeparator />

    <DropdownMenuGroup class="text-sm">
        <!-- Profile -->
        <DropdownMenuItem :as-child="true" class="px-2 py-1.5">
            <Link class="flex w-full items-center gap-2" :href="route('profile.edit')" prefetch as="button">
                <Settings class="h-4 w-4" />
                Profile
            </Link>
        </DropdownMenuItem>

        <!-- Rating -->
        <DropdownMenuItem :as-child="true" class="px-2 py-1.5">
            <Link class="flex w-full items-center gap-2" :href="'/rating'" as="button">
                <Star class="h-4 w-4" />
                Rating
            </Link>
        </DropdownMenuItem>
    </DropdownMenuGroup>

    <DropdownMenuSeparator />

    <!-- Logout -->
    <DropdownMenuItem :as-child="true" class="px-2 py-1.5 font-semibold text-red-500 focus:text-red-600">
        <Link class="flex w-full items-center gap-2" method="post" :href="route('logout')" @click="handleLogout" as="button">
            <LogOut class="h-4 w-4 font-semibold text-red-500" />
            Log out
        </Link>
    </DropdownMenuItem>
</template>
