<template>
    <AppLayout>

        <div class="flex justify-center w-full h-full">
            <div class="grid grid-cols-3 grid-rows-3  gap-20">
                <CardsetCard v-for="cardset in cardsets" :cardset="cardset" @edit="editCardSet" @delete="deleteCardset">
                </CardsetCard>
            </div>
        </div>
    </AppLayout>
</template>
<script setup>
import AppLayout from '@/layouts/AppLayout.vue';
import CardsetCard from '@/components/cardset/CardsetCard.vue';
import { router } from '@inertiajs/vue3';
defineProps({
    cardsets: Object,
})

const editCardSet = (id) => {
    router.get(`/cardsets/${id}`);
}

const deleteCardset = (id) => {
    router.delete(`/cardsets/${id}`);
}

//change edit to show icon in cardset.

</script>