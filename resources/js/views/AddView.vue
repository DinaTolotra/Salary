<template>
    <form action="#" @submit.prevent="send" method="POST">
        <div class="row m-2">
            <input type="text" name="id" v-model="id" placeholder="ID">
        </div>
        <div class="row m-2">
            <input type="text" name="name" v-model="name" placeholder="Nom">
        </div>
        <div class="row m-2">
            <input type="number" name="dayCount" v-model="dayCount" min="0" placeholder="Nombre jour">
        </div>
        <div class="row m-2">
            <input type="number" name="dayRate" v-model="dayRate" min="0" placeholder="Taux journalier">
        </div>
        <div class="row m-2">
            <div class="col-10"></div>
            <input type="submit" value="Send" class="col">
        </div>
    </form>
</template>

<script setup>
    import axios from 'axios';
    import { ref } from 'vue';

    const id = ref(null);
    const name = ref(null);
    const dayCount = ref(null);
    const dayRate = ref(null);

    function isDataValid() {
        return id.value && name.value && dayCount.value && dayRate.value;
    }

    async function send() {
        const opt = {
            method: 'POST',
            url: 'http://localhost:8000/api',
            data: JSON.stringify({
                id: id.value,
                name: name.value,
                dayCount: dayCount.value,
                dayRate: dayRate.value
            }),
            headers: { 'Content-Type': 'application/json' }
        };

        if (isDataValid()) {
            console.log(await axios(opt));
        } else {
            alert('Invalid data');
        }
    }

</script>
