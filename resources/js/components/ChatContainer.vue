<template>

    <div class="h-full flex flex-col gap-5">

        <div class="flex-grow-1">
            <ChatMessages :messages="messages" :auth_user="user" v-on:deletemessage="deleteMessage" class="backdrop-blur-none"></ChatMessages>
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
                    id: e.message.id,
                    message: e.message.message,
                    user: e.user
                });
            }).listen('MessageDeleted', (data) => {
                this.deleteMessage(data.message);
        });

    },
    methods: {
        fetchMessages() {
            axios.get('/messages').then(response => {
                this.messages = response.data;
            });
        },
        addMessage(message) {

            axios.post('/messages', message).then(response => {
                console.log(response.data);
                message.id = response.data.message.id;
                this.messages.push(message);
            });
        },
        deleteMessage(message) {
            console.log('message deleted');
            const messageId = message.id;
            console.log(messageId);
            const index = this.messages.findIndex(message => message.id === messageId);
            if (index !== -1) {
                this.messages.splice(index, 1);
            }
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
