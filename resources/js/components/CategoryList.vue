<template>
  <div class="w-24 h-24 bg-white border rounded-lg shadow-sm flex flex-col items-center justify-center gap-1 hover:shadow-md cursor-pointer">
    <img :src="category.icon" alt="" class="w-6 h-6" />
    <span class="text-xs text-gray-800 font-medium text-center">nama kategori</span>
  </div>
</template>

<script setup lang="ts">
defineProps<{
  category: Record<string, any>
}>()
</script>
