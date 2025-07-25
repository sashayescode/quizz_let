<template>
    <svg class="icon" :width="width" :height="height">
      <use :href="`/svg-sprite.svg#${name}`"></use>
    </svg>
  </template>
  
  <script setup>
  const props = defineProps({
    name: String,
    width: {
      type: Number,
      default: 24,
    },
    height: {
      type: Number,
      default: 24,
    },
  })
  </script>
  