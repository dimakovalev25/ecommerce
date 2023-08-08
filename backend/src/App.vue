<script setup>
import {RouterLink, RouterView} from 'vue-router'
import HelloWorld from './components/HelloWorld.vue'
import {computed} from "vue";
import store from "@/store";

const test = computed(() => store.state.test)
</script>

<template>

    <header>
        <nav>
            <RouterLink class="ml-3" to="/login">Login</RouterLink>
        </nav>
    </header>

    <RouterView/>
</template>

<style scoped>

</style>
