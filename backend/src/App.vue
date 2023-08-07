<script setup>
import {RouterLink, RouterView} from 'vue-router'
import HelloWorld from './components/HelloWorld.vue'
</script>

<template>

    <header>
        <h1 class="text-3xl font-bold underline">vue</h1>
        <div class="wrapper">
            <HelloWorld class=" mt-3 bg-amber-900" msg="You did it!"/>

            <nav>
                <!--        <RouterLink to="/">Home</RouterLink>
                        <RouterLink to="/about">About</RouterLink>-->
            </nav>
        </div>
    </header>

    <RouterView/>
</template>

<style scoped>

</style>
