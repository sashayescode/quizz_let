<template>
    <div class="w-min-[500px] h-min-[200px] rounded-2xl border border-indigo-400 absolute top-1/3 left-1/3 bg-white flex flex-col items-center">
        <p class="text-3xl text-center font-bold mb-10">{{ title }}</p>
        <slot></slot>

    </div>

</template>
<script setup>

defineProps({
    title: String,
})
</script>