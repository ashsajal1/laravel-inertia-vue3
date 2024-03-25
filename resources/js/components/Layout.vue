<template>
    <Navbar></Navbar>
    <p>Welcome back dear, {{ username }}!</p>
    <slot />
</template>

<script setup>
import { usePage } from '@inertiajs/vue3';
import Navbar from './Navbar.vue';
import { computed } from 'vue';

const username = computed(() => usePage().props.auth.user.username);
</script>