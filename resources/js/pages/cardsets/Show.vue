<template>
    <AppLayout>

        <div class="grid auto-cols-auto grid-rows-3">
            <Link v-if="cardsets?.length !== 0" :href="`/cardsets/${cardset.id}`" v-for="cardset in cardsets">
            <div class="flex space-x-3 items-start">
                <Icon name="folder"></Icon>
                <p class="font-lucky text-xl">{{ cardset.name }}</p>
            </div>
            </Link>
        </div>


        <Button label="Add set" name="plus" url="/cardsets/create"></Button>
    </AppLayout>
</template>
<script setup>
import AppLayout from '@/layouts/AppLayout.vue';
import Button from '@/components/ButtonLink.vue';
import Icon from '@/components/Icon.vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    cardsets: Object,
})
</script>