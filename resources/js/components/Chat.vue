<template>
    <div>
        <ul>
            <li v-for="m in messages">{{m}}</li>
        </ul>
        <form @submit.prevent="sendChat">
            <input v-model="message">
            <button type="submit">Send</button>
        </form>
    </div>
</template>

<script>
export default {
    name: "Chat",
    props: {
        user: Object
    },
    data() {
        return {
            message: '',
            messages: []
        };
    },
    methods: {
        sendChat() {
            axios.post('/chat/send-message', {'message': this.message});
            alert('Message sent');
        }
    },
    mounted() {
        console.log(this.user);
        window.Echo.private('cir.'+this.user.id).listen('ChatSent', (e) => {
            console.log(e);
        });
        window.Echo.private('ccr.'+this.user.id).listen('ChatCreated', (e) => {
            this.messages.push(e.data);
        });
    }
}
</script>

<style scoped>

</style>
