<template>
    <div class="p-4">
        <h1>Liste des utilisateurs</h1>

        <div class="form">
            <form @submit.prevent="addUser" class="mb-4">
                <input type="text" placeholder="Nom" v-model="form.name" required>
                <input type="email" placeholder="Entrer l'email" v-model="form.email" required>
                <button type="submit">Ajouter</button>
            </form>
        </div>

        <ul>
            <li v-for="user in users" :key="user.id">
                {{ user.name }} - {{ user.email }}
                <button @click="deleteUser(user.id)">Supprimer</button>
            </li>
        </ul>
    </div>

</template>


<script setup>
import axios from 'axios';
import { ref, onMounted } from 'vue';

const form = ref({
    name: '',
    email: ''
});
const users = ref([]);

const fetcUsers = async () => {
    const response = await axios.get('http://localhost:8000/api/users')

    users.value = response.data;
}

const addUser = async () => {
    try {
        let res = await axios.post('http://localhost:8000/api/users', form.value)
        
        console.log(res.data);
        form.value.name = '';
        form.value.email = '';
        fetcUsers();

    } catch (error) {
        alert(error.message);
        console.log('haaaaaa');
    }
}

const deleteUser = async (id) => {
    try {
        let res = await axios.delete(`http://localhost:8000/api/users/${id}`);

        users.value = users.value.filter(user => user.id !== id);

        
    } catch (error) {
        console.error('Erreur lors de la suppression :', error);
    }
}

onMounted(() => {
    fetcUsers()
})

</script>

<style></style>