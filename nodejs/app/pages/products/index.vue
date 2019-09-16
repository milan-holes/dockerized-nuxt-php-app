<template>
    <div>
        <h1>Products list</h1>
        <ul v-if="products">
            <li v-for="product in products" :key="product.id">
                {{ product.name }} -
                <a :href="'/products/' + product.id">view</a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    computed: {
        products: function() {
            return this.$store.state.products
        }
    },
    created: function() {
        this.$store.dispatch('getProducts')
    }
}
</script>
