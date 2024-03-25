<template>
    <Link href="/" class="text-white hover:text-gray-200" :class="{ 'bg-red-800 p-2 rounded': active }">
    <slot />
    </Link>
</template>

<script setup>
import { defineProps } from 'vue';
const { active } = defineProps(['active'])
</script>