<script>
import Intro from '../HomeComponents/Intro.vue';
import Landing from '../HomeComponents/Landing.vue';
import Header from '../Layout/Header.vue'

export default {
    props: {
        name: String
    },
    components: {
    Header,
    Landing,
    Intro
}
}
</script>

<template>
    <Header />
    <div class="flex flex-col gap-10">
        <Landing />
        <div class="flex flex-col md:px-10 px-5 gap-10">
            <Intro />
        </div>
    </div>
</template>