<script setup lang="ts">
import type { HTMLAttributes } from 'vue';

defineOptions({
    inheritAttrs: false,
});

interface Props {
    className?: HTMLAttributes['class'];
}

defineProps<Props>();
</script>

<template>
    <picture>
        <!-- Untuk dark mode -->
        <source srcset="/logo-putih.png" media="(prefers-color-scheme: dark)" />

        <!-- Default (light mode) -->
        <img src="/logo-hitam.png" alt="Logo Goleja" class="mr-2 h-8 w-auto" />
    </picture>
</template>
