<script setup lang="ts">
import { ref } from 'vue';
import axios from 'axios';
import { getRequest, postRequest } from '../../../services/http';

const user = ref();

const failed = ref(0);

const submitData = ref(
    { email: "", password: "" }
);

const handleSubmit = async () => {
    // the first relative address needs to match the first name in the corresponding route
    const { data } = await postRequest(`/signin`, submitData.value);
    if (!data) {
        failed.value = 10;
        return;
    }

    failed.value = -10;
    user.value = data;
}

const tested = ref();

const axiosTester = async() => {
    const tester = await axios.get('hello');

    console.log(tester);

    tested.value = tester;
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

    <br />

    <button @click="axiosTester">Test Axios</button>

    <br />

    Tested axios: {{ tested }}
</template>