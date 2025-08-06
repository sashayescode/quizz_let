<template>
    <AppLayout>
        <form @submit.prevent="submit" class="space-y-10">
            <Input label="Name" v-model="form.name"></Input>
            <div class="flex space-x-3 items-center justify-between">
                <div class="w-6/12 h-1 bg-purple-300"></div>
                <div class="size-4 rounded-full bg-purple-300"></div>
                <div class="w-6/12 h-1 bg-purple-300"></div>
            </div>
            <CardWord v-for="word in form.words">
                <WordForm v-model:wordValue="word.word" v-model:translationValue="word.translation"></WordForm>
            </CardWord>

            <button type="submit">Create</button>
        </form>
        <Button label="Add new word" @click="addWord"></Button>
    </AppLayout>
</template>
<script setup>
import AppLayout from '@/layouts/AppLayout.vue';
import Button from '@/components/Button.vue';
import Input from '@/components/Input.vue';
import WordForm from '@/components/cardset/WordForm.vue'
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3'
import CardWord from '@/components/words/CardWord.vue';

const props = defineProps({
    cardset: Object,
    words: {
        type: Object,
        required: false,
    },
})

const form = reactive({
    name: props.cardset?.name ?? '',
    words: props.words ?? [
        { word: '', translation: '' },
        { word: '', translation: '' },
    ]
})

const addWord = () => {
    form.words.push({ word: '', translation: '' });
}

function submit() {
    if (props.cardset) {
        router.put(`/cardsets/${props.cardset.id}`, form);
    } else {
        router.post('/cardsets', form);
    }
}

</script>