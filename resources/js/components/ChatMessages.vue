<template>
    <div class="flex flex-col">
        <div v-for="message in messages" :key="message.id" class="flex gap-4">
            <div>
                <div class="w-12 h-12 bg-white rounded-full">

                </div>
            </div>
            <div class="flex flex-col">
                <p class="text-xl font-bold text-amber-500">{{ message.user.name }}
                    <span class="text-slate-400 text-sm font-light ml-2">{{message.created_at}}</span>
                </p>
                <div class="mt-1">
                    {{ message.message }}
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ["messages"],
};
</script>
