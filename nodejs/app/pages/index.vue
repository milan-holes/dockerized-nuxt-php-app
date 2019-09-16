<template>
    <div>
        <h1>H1</h1>
        <p>{{ message }}</p>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            message: ''
        }
    },
    created: function() {
        this.$axios
            .$get('/api')
            .then(response => (this.message = response.message))
    }
}
</script>
