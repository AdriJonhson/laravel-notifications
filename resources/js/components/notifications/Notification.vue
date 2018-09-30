<template>
	<div>
		<a class="dropdown-item" href="#">
        	<strong>{{comment.user.name}} comentou:</strong> {{ comment.title }}
    	</a>
	</div>
</template>

<script>
export default{
	props: ['notification'],

	computed: {
		comment() {
			return this.notification.comment
		}
	}
}
</script>