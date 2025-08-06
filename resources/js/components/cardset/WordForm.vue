<template>
    <div class="flex p-6 space-x-20">
        <WordInput v-model="wordValue" label="Word"></WordInput>
        <WordInput v-model="translationValue" label="Translation"></WordInput>

    </div>
</template>
<script setup>
import WordInput from '../words/WordInput.vue';

const wordValue = defineModel('wordValue');
const translationValue = defineModel('translationValue');

const props = defineProps({
    word: Object,
})

//make onleave submission
</script>