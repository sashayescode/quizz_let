<template>
    <AppLayout>
        <form @submit.prevent="submit">
            <div class="flex flex-col p-6 w-screen border-b-2 border-purple-300 border-dashed mb-2">
                <Input label="Name" v-model="form.name"></Input>
            </div>
            <!-- <div v-if="words?.length !== 0" class="p-6" v-for="word in words">
                <Card :number="word.id" :word="word.word" :translation="word.translation"></Card>

                <WordForm v-model:wordValue="form.word" v-model:translationValue="form.translation" :word="word">
                </WordForm>
            </div> -->
            <Card v-for="(word, index) in form.words" :number="index + 1" v-model:wordValue="form.words[index].word" v-model:translationValue="form.words[index].translation"></Card>
            <Button type="submit" label="Create"></Button>

            <!-- 
            <Button type="submit" label="Cancel"></Button> -->

        </form>
        <Button label="Add new word" @click="addWord"></Button>
    </AppLayout>
</template>
<script setup>
import AppLayout from '@/layouts/AppLayout.vue';
import Card from '@/components/Card.vue';
import Button from '@/components/ButtonLink.vue';
import Input from '@/components/Input.vue';
import WordForm from '@/components/cardset/Form.vue'
import { reactive, watch } from 'vue';
import { router } from '@inertiajs/vue3'

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

watch(
  () => form.words,
  (newV) => {
    console.log('words changed:', newV);
  },
  { deep: true }
);

const addWord = ()=>{
   form.words.push({ word: '', translation: '' });
}

function submit() {
    router.post('/cardsets', form);
}

</script>