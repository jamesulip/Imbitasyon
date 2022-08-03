<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
import InvitationStatus from "@/Components/InvitationResponse.vue";
import ImportInvited from "@/Components/ImportInvited.vue";
import { Link } from "@inertiajs/inertia-vue3";

import { statusText, ReponseStatus } from "@/enum/status";
const stats = [
    { name: "Total Subscribers", stat: "71,897" },
    { name: "Avg. Open Rate", stat: "58.16%" },
    { name: "Avg. Click Rate", stat: "24.57%" },
];
const { pEvent, invited, dashboard } = defineProps({
    pEvent: {
        type: Object,
        default: () => {},
    },
    invited: {
        type: Object,
        default: () => {
            data: [];
        },
    },
    dashboard: {
        type: Object,
        default: () => {
            data: [];
        },
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
                <div class="">
                    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div>
                            <h3
                                class="text-lg leading-6 font-medium text-gray-900"
                            >
                                <ImportInvited />
                            </h3>
                            <dl
                                class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3"
                            >
                                <div
                                    v-for="item in dashboard"
                                    :key="item.name"
                                    class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6"
                                >
                                    <dt
                                        class="text-sm font-medium text-gray-500 truncate"
                                    >
                                        {{ statusText()[item.response_id] }}
                                    </dt>
                                    <dd
                                        class="mt-1 text-3xl font-semibold text-gray-900"
                                    >
                                        {{ item.respondent }}
                                    </dd>
                                </div>
                            </dl>
                        </div>
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
                                                class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"
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
                                            v-for="invite in invited.data"
                                            class="bg-white"
                                        >
                                            <td
                                                class="px-4 py-2 whitespace-nowrap text-sm text-gray-900"
                                            >
                                                <a
                                                    :href="`https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${$inertia.page.props.appName.url}/invitation/${invite.code}`"
                                                >
                                                    <img
                                                        class="w-52 h-auto"
                                                        :src="`https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${$inertia.page.props.appName.url}/invitation/${invite.code}`"
                                                /></a>
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
                                                    v-if="
                                                        invite.response_id ==
                                                        ReponseStatus.GOING
                                                    "
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
                                <nav
                                    class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6"
                                    aria-label="Pagination"
                                >
                                    <div
                                        class="flex-1 flex justify-between sm:justify-end gap-1"
                                    >
                                        <Link
                                            type="button"
                                            as="button"
                                            v-for="link in invited.links"
                                            :href="link.url"
                                            class="disabled:opacity-50 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"
                                            v-html="link.label"
                                            :disabled="!link.url"
                                        >
                                        </Link>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
