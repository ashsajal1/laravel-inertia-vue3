<template>
    <div>
        <h1>Welcome there, <strong>{{ name }}</strong>!</h1>
    </div>

    <div>This app was created with:</div>
    <ul>
        <li v-for="item in framework" :key="item">{{ item }}</li>
    </ul>
</template>

<script setup>
import { defineProps } from 'vue';

const { name, framework } = defineProps(['name', 'framework']);
</script>
