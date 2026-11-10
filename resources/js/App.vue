<script setup lang="ts">
</script>

<template>
    <nav>
        <RouterLink :to="{name: 'users.home'}">Thuispagina</RouterLink> |
        <RouterLink :to="{name: 'users.authenticate'}">Authenticatie</RouterLink>
    </nav>

    <router-view>        
    </router-view>   
</template>