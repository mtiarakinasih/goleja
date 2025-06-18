<template>
  <div class="relative">
    <!-- Button Trigger -->
    <button
      @click="isOpen = !isOpen"
      class="flex items-center justify-between gap-2 px-4 py-2 rounded-full shadow-sm border border-gray-300 text-sm font-semibold text-[#102C57] bg-white hover:bg-gray-100"
    >
      {{ selected || filter.label }}
      <i class="ri-arrow-down-s-line text-lg"></i>
    </button>

    <!-- Dropdown Menu -->
    <div
      v-if="isOpen"
      class="absolute mt-2 z-10 bg-white border shadow-md rounded-lg w-48"
    >
      <ul>
        <li
          v-for="option in filter.options"
          :key="option"
          @click="selectOption(option)"
          class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-sm"
        >
          {{ option }}
        </li>
      </ul>
    </div>

    <!-- Close Button -->
    <button
      v-if="selected"
      @click="removeFilter"
      class="absolute -top-2 -right-2 w-5 h-5 flex items-center justify-center bg-red-500 text-white text-xs rounded-full"
    >
      ✕
    </button>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue'

const props = defineProps<{
  filter: {
    name: string
    label: string
    options: string[]
  }
}>()

const emit = defineEmits<{
  (e: 'select', payload: { name: string; value: string }): void
  (e: 'remove', name: string): void
}>()

const selected = ref<string | null>(null)
const isOpen = ref(false)

function selectOption(option: string) {
  selected.value = option
  isOpen.value = false
  emit('select', { name: props.filter.name, value: option })
}

function removeFilter() {
  selected.value = null
  emit('remove', props.filter.name)
}
</script>
