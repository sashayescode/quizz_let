<template>
    <transition name="slide-fade" mode="out-in">
        <div :key="currentIndex"
            class="w-[600px] h-[400px] border-2 border-purple-400 rounded-2xl flex flex-col items-center justify-between bg-white p-7 overflow-hidden">
            <div class="w-full h-fit flex justify-end">
                <Icon name="edit" :width="30" :height="30" class="text-purple-400"></Icon>
            </div>
            <div class="flex h-11/12 justify-center items-center transition-transform duration-500 ease-in-out w-full">
                <p class="text-4xl">{{ words[currentIndex].word }}</p>
            </div>
        </div>
    </transition>

    <div class="flex items-center space-x-[500px]">
        <button @click="oneLeft" :disabled="currentIndex === 0"
            class="bg-rose-50 border-2 border-purple-400 p-3 rounded-full rotate-180 disabled:opacity-30">
            <Icon name="chevron-right" class="text-purple-400" :width="30" :height="30" />
        </button>
        <button @click="oneRight" :disabled="currentIndex === words.length - 1"
            class="bg-rose-50 border-2 border-purple-400 p-3 rounded-full disabled:opacity-30">
            <Icon name="chevron-right" class="text-purple-400" :width="30" :height="30" />
        </button>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import Icon from '../Icon.vue';

const props = defineProps({
    words: Object,
});

const currentIndex = ref(0);

const oneLeft = () => {
    if (currentIndex.value > 0) currentIndex.value--;
};

const oneRight = () => {
    if (currentIndex.value < props.words.length - 1) currentIndex.value++;
};

//add a modal that will pop up once the edit is clicked
</script>

<style scoped>
.slide-fade-enter-active,
.slide-fade-leave-active {
    transition: all 0.2s ease;
}

.slide-fade-enter-from {
    opacity: 0;
    transform: translateX(100%);
}

.slide-fade-leave-to {
    opacity: 0;
    transform: translateX(-100%);
}
</style>
