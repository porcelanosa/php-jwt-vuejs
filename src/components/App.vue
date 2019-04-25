<template>
    <div>
        <p class="active">{{ message }}</p>
    </div>
</template>

<script>
	export default {
		name: 'Hello',
		data () {
			return {
				message: 'Hello World',
			}
		},
	}
</script>

<style scoped lang="scss">
    p {
        font-style: italic;
    }
</style>
