<template>
    <nav class="bg-red-500 py-4">
      <ul class="flex justify-center space-x-4">
        <li>
          <Link href="/" class="text-white hover:text-gray-200">Home</Link>
        </li>
        <li>
          <Link href="/users" class="text-white hover:text-gray-200">Users</Link>
        </li>
        <li>
          <Link href="/settings" class="text-white hover:text-gray-200">Settings</Link>
        </li>
        <li>
          <Link href="/logout" method="post" as="button" class="text-white hover:text-gray-200">Log out</Link>
        </li>
      </ul>
    </nav>
  </template>
  
  <script setup>
  import { Link } from '@inertiajs/vue3'
  </script>
  