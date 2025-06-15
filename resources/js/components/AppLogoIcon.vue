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
        <img src="/logo/logo.png" alt="Logo Goleja" class="mr-2 h-8 w-auto" />
    </picture>
</template>
