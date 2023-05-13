<template>
    <div class="flex flex-col">

        <div v-for="message in messages" :key="message.id"
             class="flex relative gap-4 group transition rounded-xl hover:bg-slate-700/20 p-3">


            <div
                class="absolute flex gap-4 top-0 right-0 text-slate-600 transition group-hover:text-slate-400 p-3 text-2xl"
                v-if="message.user.id === auth_user.id">
                <i class="bi bi-pencil-square transition hover:text-cyan-500 cursor-pointer" ></i>
                <i class=" bi bi-trash-fill transition hover:text-red-500 cursor-pointer" @click="deleteMessage(message)"></i>
            </div>

            <div>
                <img :src="'/storage/'+message.user.avatar" class="w-12 h-12 rounded-full border-2 border-slate-700">
            </div>
            <div class="flex flex-col">
                <div>
                    <span class="text-xl font-bold text-amber-500">{{ message.user.name }}</span>
                    <span class="text-slate-400 text-sm font-light ml-2 select-none">{{ moment(message.created_at).format('DD/MM/YYYY ss:HH')  }}</span>
                </div>
                <div class="mt-1">
                    {{ message.message }}
                </div>


            </div>
        </div>

    </div>
</template>
<script>
import moment from 'moment';


export default {
    methods: {
        async deleteMessage(message) {
            const response = await axios.delete('/messages',
                {
                    data: {
                        message: message
                    }
                })
            console.log(response.data)
            this.$emit("deletemessage", message);
        }
    },
    setup(){
      return {
          moment
      }
    },
    props: ["messages", "auth_user"],
};
</script>
