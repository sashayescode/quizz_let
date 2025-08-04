<template>
    <form @submit.prevent="submit">
        <div class="flex p-6 space-x-20">
            <Input label="Word" v-model="wordValue"></Input>
            <Input label="Translation" v-model="translationValue"></Input>
        </div>
    </form>
</template>
<script setup>
import Input from '../Input.vue';

const wordValue = defineModel('wordValue');
const translationValue = defineModel('translationValue');

const props = defineProps({
    word: Object,
})

// const form = reactive({
//     'word': props.word?.word ?? '',
//     'translation': props.word?.translation ?? '',
// })

// function submit() {
//     router.put(`/cardsets/${cardset}`)
// }

//make onleave submission
</script>