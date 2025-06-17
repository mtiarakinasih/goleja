<script setup lang="ts">
import type { HTMLAttributes } from 'vue'
import { cn } from '@/lib/utils'
import { useVModel } from '@vueuse/core'

const props = defineProps<{
  defaultValue?: string | number
  modelValue?: string | number
  class?: HTMLAttributes['class']
}>()

const emits = defineEmits<{
  (e: 'update:modelValue', payload: string | number): void
}>()

const modelValue = useVModel(props, 'modelValue', emits, {
  passive: true,
  defaultValue: props.defaultValue,
})
</script>

<template>
  <input
    v-model="modelValue"
    data-slot="input"
    :class="cn(
      'bg-white text-black placeholder:text-gray-600 border border-gray-300',
      'hover:border-gray-400 hover:shadow-sm',
      'focus-visible:border-[#6F9EE7] focus-visible:ring-[rgba(111,158,231,0.5)] focus-visible:ring-2',
      'flex h-10 w-full min-w-0 rounded-md px-3 py-1 text-base transition-all outline-none md:text-sm',
      'disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50',
      props.class
    )"
  />
</template>
