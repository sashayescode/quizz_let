<template>
    <div class="w-screen h-[92px] bg-purple-400 text-white flex items-center justify-between">
        <p class="font-lucky">MyApp</p>
        <div class="flex space-x-5">
            <ButtonLink label="Create set" icon="plus" url="/cardsets/create"></ButtonLink>
            <div class="size-16 rounded-full bg-white"></div>
        </div>
    </div>
    <div class="bg-rose-50 w-full h-full pt-10">
        <slot></slot>
    </div>

</template>
<script setup>
import ButtonLink from '@/components/ButtonLink.vue';



</script>