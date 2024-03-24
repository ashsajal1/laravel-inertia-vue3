<template>
    <nav>
        <ul>
            <li>
                <Link href="/">Home</ Link>
            </li>
            <li><Link href="/users">Users</Link></li>
            <li> <Link href="/seetings">Seetings</Link></li>
        </ul>
    </nav>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>