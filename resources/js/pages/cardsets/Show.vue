<template>
    <AppLayout>
       <div>
         <CardsetMainCard :words="words"></CardsetMainCard>
         <ButtonLink label="Edit set" :url="`/cardsets/${cardset.id}/edit`"></ButtonLink>
       </div>

        <div class="space-y-3">
            <p class="font-lucky p-3 my-2 border-2 border-purple-400 w-fit">All words</p>
            <CardWord v-for="word in words" :word="word">
                <div class="flex items-center p-3 space-x-10">
                    <p class="min-w-[250px]">{{ word.word }}</p>
                    <div class="h-4 w-1 bg-purple-300"></div>
                    <p class="min-w-[200px]">{{ word.translation }}</p>
                </div>

            </CardWord>
        </div>
    </AppLayout>
</template>

<script setup>
import Button from '@/components/Button.vue';
import ButtonLink from '@/components/ButtonLink.vue';
import CardsetMainCard from '@/components/cardset/CarouselleCard.vue';
import CardWord from '@/components/words/CardWord.vue';
import AppLayout from '@/layouts/AppLayout.vue';

defineProps({
    cardset: Object,
    words: Object,
})
</script>