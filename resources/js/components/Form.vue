<template>
    <form @submit.prevent="submit"
        class="flex flex-col text-center w-[400px] h-[400px] border-2 border-indigo-400 rounded-2xl space-y-6 p-6">
        <p class="font-lucky block text-indigo-400 text-bold text-3xl">{{ text }}</p>
        <div class="flex flex-col items-start space-y-4">
            <label class="block text-indigo-400 text-bold text-xl">{{ label1 }}</label>
            <input v-model="form.field1" class="w-[300px] h-[40px] border-2 border-indigo-400 rounded-2xl p-3">
            <label class="block text-indigo-400 text-bold text-xl">{{ label2 }}</label>
            <input v-model="form.field2" class="w-[300px] h-[40px] border-2 border-indigo-400 rounded-2xl p-3">
        </div>
        <button type="submit">Submit</button>
    </form>

</template>
<script setup>
import { router } from '@inertiajs/vue3';
import { reactive } from 'vue'

const props = defineProps({
    text: String,
    method: String,
    url: String,
    label1: String,
    label2: String,
    fieldName1: String,
    fieldName2: String,

})
const form = reactive({
    field1: '',
    field2: '',
})

const submit = () => {

    const data = {
        [props.fieldName1]: form.field1,
        [props.fieldName2]: form.field2
    }

     const method = props.method.toLowerCase();

    router[method](`${props.url}`, data, {
        onSuccess: () => {
            console.log('success');
        },
        onError: (error) => {
            console.log(error);
        }
    }
    );
}
</script>