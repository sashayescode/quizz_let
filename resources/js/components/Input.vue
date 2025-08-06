<template>
  <div class="flex flex-col w-full">
    <label class="font-lucky block text-purple-400 text-xl">{{ label }}</label>
    <input
      class="w-full h-[40px] border-2 border-purple-300 bg-white text-gray-800 rounded-2xl p-3 focus:outline-none focus:ring focus:ring-violet-300"
      v-model="inputValue">
  </div>
</template>
<script setup>

const inputValue = defineModel();

defineProps({
  label: String,
})
</script>