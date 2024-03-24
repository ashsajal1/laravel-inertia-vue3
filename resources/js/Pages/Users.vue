<template>
    <Navbar />
    <div>
       current time is : {{ time}}
    </div>
</template>

<script setup>
import {defineProps} from 'vue'
import Navbar from '../components/Navbar.vue';
const {time} = defineProps(['time'])
</script>