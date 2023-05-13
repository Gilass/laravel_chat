<template>

    <div class="h-full flex flex-col gap-5">

        <div class="flex-grow-1">
            <ChatMessages :messages="messages" class="backdrop-blur-none"></ChatMessages>
        </div>



        <div class="mt-auto w-full mt-auto">
            <ChatForm v-on:messagesent="addMessage" :user="user" class="bottom-0"></ChatForm>
        </div>
    </div>



</template>

<script>
import ChatMessages from "./ChatMessages.vue";
import ChatForm from "./ChatForm.vue";

export default {
    name: "ChatContainer",
    data() {
        return {
            messages: []
        }
    },
    created() {
        this.fetchMessages();

        window.Echo.private('chat')
            .listen('MessageSent', (e) => {
                this.messages.push({
                    message: e.message.message,
                    user: e.user
                });
            });
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
