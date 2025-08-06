<template>
    <div class="w-screen h-[92px] bg-purple-400 text-white flex items-center justify-between">
        <Link href="/cardsets">
        <p class="font-lucky">MyApp</p>
        </Link>
        <div class="flex space-x-5">
            <ButtonLink label="Create set" icon="plus" url="/cardsets/create"></ButtonLink>
            <div class="size-16 rounded-full bg-white"></div>
        </div>
    </div>
    <div class="bg-rose-50 w-full px-50 py-30 overflow-scroll" :style="{ height: 'calc(100vh - 92px)' }">
        <slot></slot>
    </div>

</template>
<script setup>
import ButtonLink from '@/components/ButtonLink.vue';
import { Link } from '@inertiajs/vue3';



</script>