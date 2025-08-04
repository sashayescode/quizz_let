<template>
    <div class="w-full h-min-[200px] border border-indigo-400 rounded-2xl my-6">
        <div class="border-b-2 border-indigo-400 h-1/4 p-3 flex justify-between bg-indigo-400 rounded-t-2xl">
            <p class="text-white">{{ number }}</p>
            <div class="flex space-x-6 text-white">
                <Icon name="edit" @click="$emit('edit')"></Icon>
                <Icon name="delete" @click="$emit('delete')"></Icon>
            </div>
        </div>
        <div v-if="word">
            <p>{{ word }}</p>
            <p>{{ translation }}</p>
        </div>
        <div v-else>
            <Form v-model:wordValue="wordValue" v-model:translationValue="translationValue"></Form>

        </div>
    </div>
</template>
<script setup>
import Icon from './Icon.vue';
import Form from '@/components/cardset/Form.vue'

const wordValue = defineModel('wordValue');
const translationValue = defineModel('translationValue');

const emit = defineEmits(['edit', 'delete']);


defineProps({
    number: Number,
    word: String,
    translation: String,
})

</script>