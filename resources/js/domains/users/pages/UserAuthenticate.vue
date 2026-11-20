<script setup lang="ts">
import { ref } from 'vue';
import { getRequest } from '../../../services/http';

const users = ref();

const failed = ref(0);

const submitData = ref(
    { email: "", password: "" }
);

const handleSubmit = async () => {
    const container = submitData;
    const {data} = await getRequest(`/users`);
    if (!data) {
        ++failed.value;
        return;
    }
    users.value = data;
    --failed.value;
}

</script>

<template>
    <form @submit.prevent="handleSubmit">
        <label>Email</label>
        <input v-model="submitData.email" type="text" />   
        
        <br />
    
        <label>Wachtwoord</label>
        <input v-model="submitData.password" type="password" />

        <br />

        <button type="submit">Opslaan</button>
    </form>

    {{ submitData }}
</template>