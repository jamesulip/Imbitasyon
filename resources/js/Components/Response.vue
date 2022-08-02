<template>
    <div>
        <button
            @click="submitResponse()"
            type="button"
            class="inline-flex items-center px-6 py-3 border border-gray-300 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500"
        >
            Confirm RSVP
        </button>
    </div>
    <TransitionRoot as="template" :show="open">
        <Dialog as="div" class="relative z-10 w-full" @close="open = false">
            <TransitionChild
                as="template"
                enter="ease-out duration-300"
                enter-from="opacity-0"
                enter-to="opacity-100"
                leave="ease-in duration-200"
                leave-from="opacity-100"
                leave-to="opacity-0"
            >
                <div
                    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                />
            </TransitionChild>

            <div class="fixed z-10 inset-0 overflow-y-auto">
                <div
                    class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0"
                >
                    <TransitionChild
                        as="template"
                        enter="ease-out duration-300"
                        enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        enter-to="opacity-100 translate-y-0 sm:scale-100"
                        leave="ease-in duration-200"
                        leave-from="opacity-100 translate-y-0 sm:scale-100"
                        leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    >
                        <DialogPanel
                            class="relative bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-sm sm:w-full sm:p-6"
                        >
                            <div>
                                <div class="mt-3 text-center sm:mt-5">
                                    <DialogTitle
                                        as="h3"
                                        class="text-lg leading-6 font-medium text-gray-900"
                                    >
                                        RSVP Submitted
                                    </DialogTitle>
                                    <div class="mt-2">
                                        <p
                                            class="text-sm text-gray-500"
                                            v-if="
                                                invitation.response_id ==
                                                ReponseStatus.GOING
                                            "
                                        >
                                            Thank you for your response. We look
                                            forward to seeing you at the
                                            wedding!
                                        </p>
                                        <p
                                            class="text-sm text-gray-500"
                                            v-if="
                                                invitation.response_id ==
                                                ReponseStatus.NOTGOING
                                            "
                                        >
                                            Sorry to hear you can't make it. We
                                            hope to see you at the next one!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 sm:mt-6">
                                <button
                                    type="button"
                                    class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-yellow-600 text-base font-medium text-white hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 sm:text-sm"
                                    @click="open = false"
                                >
                                    Close
                                </button>
                            </div>
                        </DialogPanel>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>

<script setup>
import { ReponseStatus } from "@/enum/status";
import { Inertia } from "@inertiajs/inertia";
import {
    Dialog,
    DialogPanel,
    DialogTitle,
    TransitionChild,
    TransitionRoot,
} from "@headlessui/vue";
const { invitation } = defineProps({
    invitation: {
        type: Object,
    },
});
const open = ref(false);
async function submitResponse() {
    axios.put(`/api/invited/${invitation.code}`, invitation);
    open.value = true;
}
</script>
