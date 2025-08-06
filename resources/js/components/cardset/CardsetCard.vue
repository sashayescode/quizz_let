<template>
    <div class="bg-white border-2 border-purple-200 h-fit w-[350px] space-y-5 rounded-xl p-5 flex flex-col">
        <div>
            <div class="flex justify-between items-center mb-1">
                <p class="text-gray-800 text-2xl">{{ cardset.name }}</p>
                <Icon name="horizontal-dots" class="text-purple-200" :width="28" :height="28"></Icon>
            </div>
            <p class="text-lg font-bold text-gray-700">{{ termsAmount ?? 2 }} terms</p>


        </div>
        <p class="">{{ cardset.description ?? 'skjdksjd' }}</p>

        <div class="flex items-center justify-between">
            <Icon name="edit" @click="$emit('edit', cardset.id)"></Icon>
            <Icon name="delete" @click="$emit('delete', cardset.id)"></Icon>
        </div>
    </div>
</template>

<script setup>
import Icon from '../Icon.vue';

const emit = defineEmits(['edit', 'delete'])
const props = defineProps({
    cardset: {
        type: Object,
        default: {
            'id': 1,
            'name': 'test'
        },
    }
})

//later accept cardset, make a fallout 

//for future add a button play that will take to the tranning regime. move delete to 3 dots

</script>