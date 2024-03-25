<template>
  <Navbar></Navbar>
  <p>Welcome back dear, {{ $page.props.auth.user.username }}!</p>
  <slot />
</template>

<script setup>
import Navbar from './Navbar.vue';
</script>