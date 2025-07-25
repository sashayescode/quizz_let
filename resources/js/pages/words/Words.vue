<template>
    <AppLayout>
        <div class="w-full flex items-start">
            <div class="m-10 h-[400px] rounded-2xl w-fit overflow-hidden border-2 border-indigo-400">
                <table class="table-fixed">
                    <thead>
                        <tr class="*:p-5 *:m-2 *:w-200px *:text-start">
                            <th>Word</th>
                            <th>Translation</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="word in words" class="*:p-5 *:m-2 *:w-200px *:text-start">
                            <td>
                                <Link :href="`/words/${word.id}`">{{ word.word }}</Link>
                            </td>
                            <td>{{ word.translation }}</td>

                        </tr>
                    </tbody>

                </table>
            </div>
                <Button url="/words/create" label="Create a word"></Button>

        </div>
    </AppLayout>
</template>
<script setup>
import AppLayout from '@/layouts/AppLayout.vue';
import Button from '@/components/Button.vue';
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    words: Array,
})

console.log(props.words)

</script>