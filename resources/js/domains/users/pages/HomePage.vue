<script setup lang="ts">
import { userStore } from '../store';

userStore.actions.getAll();
</script>

<template>
    {{ userStore.getters.all }}
</template>