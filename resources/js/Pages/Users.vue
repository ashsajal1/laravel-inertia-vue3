<template>
    <Navbar />
    <div style="margin-top: 600px;">
        <div> current time is : {{ time }}</div>
        <Link preserve-scroll class="p-2 rounded bg-red-600 text-slate-50" href='/users'>Refresh</Link>
    </div>
</template>

<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'
import Navbar from '../components/Navbar.vue';
const { time } = defineProps(['time'])
</script>