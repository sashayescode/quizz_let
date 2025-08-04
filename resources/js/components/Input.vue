<template>
   <div class="flex flex-col w-full">
     <label class="block text-indigo-400 text-bold text-xl">{{ label }}</label>
    <input class="w-full h-[40px] border-2 border-indigo-400 rounded-2xl p-3" v-model="inputValue">
   </div>
</template>
<script setup>

const inputValue = defineModel();

defineProps({
    label: String,
})
</script>