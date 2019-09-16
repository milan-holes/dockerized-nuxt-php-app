<template>
    <div>
        <header-component></header-component>

        <div id="content">
            <nuxt />
        </div>
    </div>
</template>

<script>
import HeaderComponent from '../components/HeaderComponent.vue'

export default {
    components: {
        HeaderComponent
    }
}
</script>
