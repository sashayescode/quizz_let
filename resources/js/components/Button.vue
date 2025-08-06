<template>
    <button
        class="relative flex items-center space-x-3 w-fit h-min-[30px] p-5 bg-indigo-400 rounded-2xl font-lucky cursor-pointer group overflow-hidden">
        <div
            class="opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute bottom-0 left-0 w-full h-full bg-white translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out z-0 group-hover:border group-hover:border-indigo-400 group-hover:rounded-2xl">
        </div>
        <span v-if="label" class="text-white  group-hover:text-indigo-400 leading-4 z-10">{{ label }}</span>
        <Icon v-if="name" :name="name" class="text-white group-hover:text-indigo-400 z-10"></Icon>
    </button>
</template>
<script setup></script>