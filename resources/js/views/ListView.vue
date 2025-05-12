<template>
    <h1 class="text text-danger">Liste des employe</h1>

    <h2 v-if="users.length == 0">pas d'employe enregistrer</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Numero</th>
                <th>Nombre de jours</th>
                <th>Taux</th>
                <th>Salaire</th>
                <th>Modifier</th>
                <th>Supprimer</th>

            </tr>
        </thead>
        <tbody>

            <tr v-for="user in users">
                <td>{{ user.nom }}</td>
                <td>{{ user.numero }}</td>
                <td>{{ user.nbjour }}</td>
                <td>{{ user.taux }}</td>
                <td>{{ (user.taux * user.nbjour).toFixed(2) }} Ar</td>
                <td><img :src="update" alt="" @click="updateUser(user.numero)"></td>
                <td><img :src="trash" alt="" @click="deleteUser(user.numero)"></td>
            </tr>
        </tbody>
    </table>

</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';
import trash from '../../Images/trash-2.svg';
import update from '../../Images/edit-3.svg';

const users = ref([]);
const router = useRouter();

const showUsers = async () => {
    const response = await axios.get('http://localhost:8000/api/users2')

    users.value = response.data;
    console.log(users.value);
}
showUsers();

const updateUser = async (numero) => {
    try {
        router.push(`/ajout/${numero}`);
    } catch (error) {
        console.log('Error: '+error);
    }
}

const deleteUser = async (numero) => {
    try {
        let res = await axios.delete(`http://localhost:8000/api/users2/${numero}`);
        users.value = users.value.filter(user => user.numero != numero);
    } catch (error) {
        console.error('Erreur lors de la suppression :', error);
    }
}

</script>
