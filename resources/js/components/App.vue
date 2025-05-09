<template>
    <nav class="navbar navbar-expand-lg bg-dark mb-3" data-bs-theme="dark">
        <div class="container-fluid">
            <RouterLink class="navbar-brand" to="/">Salariée</RouterLink>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <NavItem v-for="{ label, route } in pages" :label :route :current="route === currentRoute.path" />
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <RouterView></RouterView>
    </main>
</template>

<script setup>
    import { RouterView, RouterLink, useRouter } from 'vue-router';
    import NavItem from './NavItem.vue';
    import { ref } from 'vue';

    const pages = ref([
        {label: "Ajout", route: "/ajout"},
        {label: "List", route: "/list"},
        {label: "Bilan", route: "/bilan"},
    ])

    const router = useRouter();
    const currentRoute = router.currentRoute;
</script>
