<template>
    <span
        :class="reponseClass(invite.response_id)"
        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"
    >
        {{ responseText(invite.response_id) }}
    </span>
</template>
<script setup>
import { ReponseStatus } from "@/enum/status";
defineProps({
    invite: {
        type: Object,
        required: true,
    },
});
function reponseClass(response) {
    return {
        "bg-green-300 text-green-900": response === ReponseStatus.GOING,
        "bg-red-300 text-red-900": response === ReponseStatus.NOTGOING,
        "bg-yellow-300 text-yellow-900": response === ReponseStatus.MAYBE,
        "bg-gray-300 text-gray-900": response === ReponseStatus.NORESPONSE,
    };
}
function responseText(response) {
    return {
        [ReponseStatus.GOING]: "Going",
        [ReponseStatus.NOTGOING]: "Not Going",
        [ReponseStatus.MAYBE]: "Maybe",
        [ReponseStatus.NORESPONSE]: "No Response",
    }[response];
}
</script>
