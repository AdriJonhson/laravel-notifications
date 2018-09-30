<template>
	<div>
		<a class="dropdown-item" href="#">
			<span @click.prevent="markAsRead(notification.id)">
				<i class="far fa-check-square"></i>
			</span>
        	<strong>{{comment.user.name}} comentou:</strong> {{ comment.title }}
    	</a>
	</div>
</template>

<script>
export default{
	props: ['notification'],

	computed: {
		comment() {
			return this.notification.data.comment
		}
	},

	methods: {
		markAsRead(idNotification) {
			this.$store.dispatch('markAsRead', {id: idNotification})
		}
	}
}
</script>