<template>
    <li class="nav-item">
        <RouterLink class="nav-link" :class="{'text-decoration-underline': current}" :aria-current="current? 'page': undefined" :to="route">{{ label }}</RouterLink>
    </li>
</template>

<script setup>
    import { RouterLink } from 'vue-router';

    defineEmits(['clicked']);

    defineProps({
        label: {
            type: String,
            required: true
        },
        route: {
            type: String,
            required: true
        },
        current: Boolean
    })
</script>
