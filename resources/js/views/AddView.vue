<template>
    <p class="text text-danger">Add a new enregistrement</p>
    <form class="d-grid"  @submit.prevent="addUser">
        <input type="text" placeholder="Nom" required  v-model="form.nom">
        <input type="text" placeholder="Numero" required v-model="form.numero">
        <input type="number" placeholder="Nombre de jours" required v-model="form.nbjour">
        <input type="number" placeholder="taux journalier" required v-model="form.taux">
        <button type="submit">Ajouter</button>
    </form>
</template>

<script setup>
import axios from 'axios'
import { useRoute } from 'vue-router';
import { ref } from 'vue';

const route = useRoute();
const params = route.params;
const numero = params.numero;

if (numero) getUser();

const form = ref({
    nom: '',
    numero: '',
    nbjour: '',
    taux: ''
});

const getUser = async (num) => {
    let res = await axios.get(`http://127.0.0.1:8000/api/users2/${num}`);
    form.value = res.data;
}

const addUser = async() =>{
    try {
        let res = await axios.post('http://127.0.0.1:8000/api/users2', form.value);
        form.value.nom = '';
        form.value.numero = '';
        form.value.nbjour = '';
        form.value.taux = '';
    } catch (error) {
        alert(error.message);
    }
}

</script>
