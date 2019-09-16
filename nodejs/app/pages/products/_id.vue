<template>
    <div v-if="product">
        <h1>{{ product.name }}</h1>

        <p>{{ product.description }}</p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            id: this.$route.params.id
        }
    },
    computed: {
        product() {
            return this.$store.state.product.product
        }
    },
    async fetch({ params, store }) {
        await store.dispatch('product/getProduct', params.id)
    },
    head() {
        return {
            title: this.product.name,
            meta: [
                {
                    hid: 'description',
                    name: 'description',
                    content: this.product.description
                }
            ]
        }
    }
}
</script>
