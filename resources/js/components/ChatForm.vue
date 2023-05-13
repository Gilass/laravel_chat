<template>
    <div class="flex">
        <input
            id="btn-input"
            type="text"
            name="message"
            class="p-2 px-4 w-full bg-slate-800 rounded-l-xl transition focus:outline-none border-2 border-transparent focus:border-sky-500"
            placeholder="Type your message here..."
            v-model="newMessage"
        @keyup.enter="sendMessage"
        />
        <span>
      <button class="h-full px-5 bg-sky-500 rounded-r-xl hover:bg-sky-400 focus:outline-none" id="btn-chat" @click="sendMessage">
        Send
      </button>
    </span>

    </div>
</template>
<script>
export default {
    props: ["user"],
    data() {
        return {
            newMessage: "",
        };
    },
    methods: {
        sendMessage() {
            this.$emit("messagesent", {
                user: this.user,
                message: this.newMessage,
            });
            this.newMessage = "";
        },
    },
};
</script>
