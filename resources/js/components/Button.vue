<template>

    <Link :href="url" class="overflow-hidden h-fit"><button
        class="relative w-fit h-min-[30px] p-5 bg-indigo-400 rounded-2xl font-lucky cursor-pointer group">
        <div
            class="absolute bottom-0 left-0 w-full h-full bg-white translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out z-0 group-hover:border group-hover:border-indigo-400 group-hover:rounded-2xl">
        </div>
        <span class="relative text-white group-hover:text-indigo-400 z-10">{{ label }}</span>
    </button>
    </Link>

</template>
<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    url: String,
    label: String,
})
</script>