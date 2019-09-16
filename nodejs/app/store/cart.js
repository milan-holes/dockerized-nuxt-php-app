export const state = () => ({
    products: []
})

export const actions = {
    async getProducts({ commit }) {
        await this.$axios.$get('/api/cart/products').then(function(response) {
            commit('SET_PRODUCTS', response.products)
        })
    }
}

export const mutations = {
    SET_PRODUCTS(state, products) {
        state.products = products
    }
}
