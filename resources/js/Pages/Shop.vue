<script>
import Header from '../Layout/Header.vue'

export default {
    props: {
        name: String,
        list: Array
    },
    components: {
        Header
    }
}
</script>

<template>
    <Header />
    <div class="">
        <h1 class="text-xl">User is at {{ name }}</h1>
        <p class="text-sm">
            <span v-for="each in list" v-text="each"></span>
        </p>
    </div>
</template>