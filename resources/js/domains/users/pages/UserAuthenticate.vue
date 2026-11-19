<script setup lang="ts">
import { ref } from 'vue';
import { getRequest } from '../../../services/http';

// type User = {
//     id: number;
//     name: string;
//     email: string;
//     password: string;
// }

const user = ref();

const getUser = async () => {
    const {data} = await getRequest(`/user/${1}`);
    if (!data) return;
    user.value = data;
}

getUser();

</script>

<template>
    {{ user }}
</template>