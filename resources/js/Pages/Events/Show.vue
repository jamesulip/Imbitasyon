<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
import InvitationStatus from "@/Components/InvitationResponse.vue";
console.log(route);
const { pEvent } = defineProps({
    pEvent: {
        type: Object,
        default: () => {},
    },
});
function submit() {
    Inertia.put(`/api/events/${route().params.event}`, pEvent);
}
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ pEvent.name }}
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h2
                    class="max-w-6xl mx-auto mt-8 px-4 text-lg leading-6 font-medium text-gray-900 sm:px-6 lg:px-8"
                >
                    Invited
                </h2>

                <!-- Activity list (smallest breakpoint only) -->

                <!-- Activity table (small breakpoint and up) -->
                <div class="">
                    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex flex-col mt-2">
                            <div
                                class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg"
                            >
                                <table
                                    class="min-w-full divide-y divide-gray-200"
                                >
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                                scope="col"
                                            >
                                                QR
                                            </th>

                                            <th
                                                class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                                scope="col"
                                            >
                                                Invited
                                            </th>
                                            <th
                                                class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"
                                                scope="col"
                                            >
                                                Code
                                            </th>
                                            <th
                                                class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"
                                                scope="col"
                                            >
                                                Attendees
                                            </th>
                                            <th
                                                class="hidden px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider md:block"
                                                scope="col"
                                            >
                                                Status
                                            </th>
                                            <th
                                                class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"
                                                scope="col"
                                            >
                                                Response Date
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-gray-200"
                                    >
                                        <tr
                                            v-for="invite in pEvent.invited"
                                            class="bg-white"
                                        >
                                            <td
                                                class="px-4 py-2 whitespace-nowrap text-sm text-gray-900"
                                            >
                                                <img
                                                    class="w-52 h-auto"
                                                    :src="`https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=http://ardee-and-randy.test/${invite.code}`"
                                                />
                                            </td>
                                            <td
                                                class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                                            >
                                                <div class="flex">
                                                    <a
                                                        href="#"
                                                        class="group inline-flex space-x-2 truncate text-sm"
                                                    >
                                                        <p
                                                            class="text-gray-500 truncate group-hover:text-gray-900"
                                                        >
                                                            {{ invite.name }}
                                                        </p>
                                                    </a>
                                                </div>
                                            </td>
                                            <td
                                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                                            >
                                                <span
                                                    class="text-gray-900 font-medium"
                                                    >{{ invite.code }}
                                                </span>
                                            </td>
                                            <td
                                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                                            >
                                                <span
                                                    class="text-gray-900 font-medium"
                                                    >{{ invite.attending }}
                                                </span>
                                            </td>
                                            <td
                                                class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block"
                                            >
                                                <InvitationStatus
                                                    :invite="invite"
                                                />
                                            </td>
                                            <td
                                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                                            >
                                                <time
                                                    :datetime="
                                                        invite.created_at
                                                    "
                                                    >{{
                                                        invite.created_at
                                                    }}</time
                                                >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
