<template>
    <div class="container">
        <div class="card">
            <div class="card-header">Chats</div>
            <div class="card-body">
                <ChatMessages :messages="messages"></ChatMessages>
            </div>
            <div class="card-footer">
                <ChatForm v-on:messagesent="addMessage" :user="user"></ChatForm>
            </div>
        </div>
    </div>
</template>

<script>
import ChatMessages from "./ChatMessages.vue";
import ChatForm from "./ChatForm.vue";

export default {
    name: "ChatContainer",
    data() {
        return{
            messages: []
        }
    },
    created() {
        this.fetchMessages();
    },
    methods: {
        fetchMessages() {
            axios.get('/messages').then(response => {
                this.messages = response.data;
            });
        },
        addMessage(message) {
            this.messages.push(message);
            axios.post('/messages', message).then(response => {
                console.log(response.data);
            });
        }
    },
    props: ["user"],
    components: {
        ChatMessages,
        ChatForm
    }
}
</script>

<style scoped>

</style>
