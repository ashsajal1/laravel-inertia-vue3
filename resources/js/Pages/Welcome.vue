<template>
    <div>
        <h1>Welcome there, <strong>{{ name }}</strong>!</h1>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';

const { name } = defineProps(['name']);
</script>
