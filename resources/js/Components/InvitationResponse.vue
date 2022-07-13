<template>
    <span
        :class="reponseClass(invite.response_id)"
        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"
    >
        success
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
    };
}
</script>
