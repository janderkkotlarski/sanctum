<script setup lang="ts">
import { ref } from 'vue';

import { getRequest } from '../../../services/http';

// type User = {
//     id: number;
//     name: string;
//     email: string;
//     password: string;
// }


// const getUser = async () => {
//     const {data} = await getRequest(`api/users/${1}`);
//     if (!data) return;
//     user.value = data;
// }

// getUser();

const users = ref();

const getUsers = async () => {
    const {data} = await getRequest(`/users`);
    if (!data) return;
    users.value = data;
}

getUsers();

</script>

<template>
    {{ users }}
</template>