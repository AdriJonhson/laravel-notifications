<template>
	<div>
		<li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-bell"></i> Notificações ({{ notifications.length }}) <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <notification 
                    v-for="notification in notifications" 
                    :key="notification.id"
                    :notification="notification">
                </notification>

                <a class="dropdown-item" href="#" @click.prevent="markAllAsRead()">
                    Limpar Notificações
                </a>
            </div>
        </li>
	</div>
</template>

<script>
export default{
    created(){
        this.$store.dispatch('loadNotifications')
    },

    computed: {
        notifications(){
            return this.$store.state.notifications.items
        }
    },

    methods: {
        markAllAsRead(){
            this.$store.dispatch('markAllAsRead')
            this.$toast.success({
                            title: 'Sucesso',
                            message: 'Todas as notificações foram marcadas como lidas',
                            showMethod: 'fadeInRight',
                            hideMethod: 'fadeOutRight'
                        })
        }
    }
}
</script>