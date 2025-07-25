<template>
    <AppLayout>
        <div class="w-[400px] h-[400px] border-2 border-indigo-400 rounded-3xl p-5 space-y-6">
            <div class="flex items-center space-x-4 mb-5">
                <div class="w-3 h-3 rounded-full bg-indigo-400"></div>
                <h3 class="text-4xl font-bold">{{ word.word }}</h3>
            </div>
            <p class="text-2xl text-indigo-600">adverb</p>
            <p class="text-3xl"> {{ word.translation }}</p>
            <p class="text-xl italic">blij of tevreden zijn. Het kan duiden op een toestand van welbevinden en positieve
                emoties zoals vreugde en tevredenheid.</p>
            <div class="flex justify-between items-center">
                <Icon @click="openModal = true" name="edit" class="text-indigo-400" :width="30" :height="30"></Icon>
                <Link :href="`/words/${word.id}`" method="delete">
                <Icon name="delete" class="text-indigo-400" :width="30" :height="30"></Icon>
                </Link>

            </div>
        </div>
        <Modal v-if="openModal" title="Edit word">
            <form @submit.prevent="submit" class="flex flex-col items-center w-[500px] h-min-[200px] pb-5 space-y-5">
                <div>
                    <label class="block">Word</label>
                    <input class="w-[250px] h-[50px] p-4 border border-indigo-400 rounded-2xl" v-model="form.word">
                </div>
                <div>
                    <label class="block">Translation</label>
                <input class="w-[250px] h-[50px] p-4 border border-indigo-400 rounded-2xl"
                    v-model="form.translation">
                </div>
                <button type="submit">Submit</button>
            </form>
        </Modal>
        <Button url="/words" label="Go back to words"></Button>
    </AppLayout>
</template>
<script setup>
import AppLayout from '@/layouts/AppLayout.vue';
import Modal from '@/components/Modal.vue';
import Icon from '@/components/Icon.vue';
import Button from '@/components/Button.vue';
import { Link, router } from '@inertiajs/vue3';
import { reactive, ref } from 'vue'

const openModal = ref(null);

const props = defineProps({
    word: Object,
})

const form = reactive({
    word: props.word.word ?? '',
    translation: props.word.translation ?? '',
})

const submit = () => {
  router.put(`/words/${props.word.id}`, form, {
    onSuccess: () => {
      openModal.value = false;
    },
    onError: (errors) => {
      console.log('Validation errors:', errors)
    },
  })
}
</script>