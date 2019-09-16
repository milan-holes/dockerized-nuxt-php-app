export const state = () => ({
    product: []
})

export const actions = {
    async getProduct({ commit }, productId) {
        await this.$axios
            .$get('http://nginx:80/api/product/' + productId)
            .then(function(response) {
                commit('SET_PRODUCT', response.product)
            })
    }
}

export const mutations = {
    SET_PRODUCT(state, product) {
        state.product = product
    }
}
