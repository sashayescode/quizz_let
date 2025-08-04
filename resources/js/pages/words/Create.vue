<template>
   <AppLayout>
    <Form text="Create a word" label1="Word:" label2="Translation:" field-name1="word" field-name2="translation" method="post" url="/words">
    </Form>
    <Button url="/words" label="Go to words"></Button>
   </AppLayout>

</template>
<script setup>
import Button from '@/components/ButtonLink.vue';
import Form from '@/components/Form.vue';
import AppLayout from '@/layouts/AppLayout.vue';

</script>