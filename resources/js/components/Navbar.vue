<template>
    <nav class="bg-red-500 py-4">
        <ul class="flex justify-center space-x-4">
            <li>
                <NavLink href="/" :active="$page.component === 'Home'">
                    Home
                </NavLink>

            </li>
            <li>
                <NavLink href="/users" :active="$page.component === 'Users'">
                    Users
                </NavLink>
            </li>
            <li>
                <NavLink href="/settings" :active="$page.component === 'Settings'">
                    Settings
                </NavLink>
            </li>
            <li>
                <Link href="/logout" method="post" as="button" class="text-white hover:text-gray-200"
                    :data="{ foo: 'bar' }">Log out</Link>
            </li>
        </ul>
    </nav>
</template>

<script setup>
import NavLink from './NavLink.vue';


</script>