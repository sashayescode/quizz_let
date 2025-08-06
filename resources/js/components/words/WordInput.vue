<template>

    <div class="flex flex-col w-1/2">
        <label class="font-lucky text-gray-500">{{ label }}</label>
        <input
            class="rounded-xl p-2 bg-rose-50 hover:border-2 hover:border-purple-300 focus:outline-none focus:ring focus:ring-purple-300"
            v-model="inputValue"></input>
    </div>
</template>
<script setup>

defineProps({
    label: String,
})

const inputValue = defineModel();
</script>