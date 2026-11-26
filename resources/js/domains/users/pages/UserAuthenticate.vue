<script setup lang="ts">
import { ref } from 'vue';
import { getRequest, postRequest } from '../../../services/http';

const user = ref();

const failed = ref(0);

const submitData = ref(
    { email: "", password: "" }
);

const handleSubmit = async () => {
    // the first relative address needs to match the first name in the corresponding route

    let ssapdrow = '';

    const length = submitData.value.password.length;

    for (let index = 0; index < length; ++index) {
        ssapdrow += submitData.value.password[length - 1 - index];
    }

    const { data } = await postRequest(`/signin`, [ submitData.value.email, ssapdrow ]);
    if (!data) {
        failed.value = 10;
        return;
    }

    failed.value = -10;
    user.value = data;
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

    <br />

    SubmitData: {{ submitData }}

    <br />

    User type: {{ typeof user }} || login data: {{ user }}

    <br />

    Failed: {{ failed }}
</template>