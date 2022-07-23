<template>
    <div class="grid col-span-1 relative">
        <div class="grid w-screen grid-cols-1">
            <div class="bg-gray-800 col-span-1">
                <div class="h-screen">
                    <img
                        src="/images/DSCF8585.jpg"
                        class="w-full h-full object-center object-cover lg:w-full lg:h-full"
                    />
                    <div
                        class="text-white absolute bottom-0 right-0 text-3xl m-3"
                    >
                        Ardee and Randy
                    </div>
                </div>
            </div>
            <div class="bg-gray-700 p-12">
                <div>
                    <h1 class="text-white text-2xl font-bold text-center">
                        Save the Date
                    </h1>
                    <p class="text-white text-lg text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quisquam, quidem.
                    </p>
                    <!-- create going and not going button -->
                    <div class="flex justify-center gap-3">
                        <button
                            @click="going"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full"
                        >
                            Going
                        </button>
                        <button
                            @click="notGoing"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full"
                        >
                            Not Going
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-[50vh] p-5 grid">
            <div class="text-center m-auto">
                {{
                    formatDate(
                        new Date(event.start_date),
                        new Date(event.end_date)
                    )
                }}
            </div>
        </div>
        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300" />
            </div>
            <div class="relative flex justify-center">
                <span class="px-2 bg-white text-sm text-gray-500">
                    Continue
                </span>
            </div>
        </div>
        <div class="h-[50vh] flex">
            <div class="text-center m-auto">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Deleniti molestiae debitis delectus dolores accusamus, pariatur
                aut mollitia eius, nisi sapiente cum. Nihil, vitae? Quidem
                ratione veniam tempora non eum libero.
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
import axios from "axios";
import { ReponseStatus } from "@/enum/status";
const { code: invitation, event } = defineProps({
    code: {
        type: Object,
        default: () => {},
    },
    event: {
        type: Object,
        default: () => {},
    },
});
function getMonthName(month: number) {
    const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];
    return months[month];
}
function getDay(day: Date) {
    return day.getDate();
}
function formatDate(date: Date, end: Date) {
    // format date August 20, 2022 @ 3:00 PM - 4:00 PM 12 hour format
    return `${getMonthName(date.getMonth())} ${getDay(
        date
    )}, ${date.getFullYear()} @ ${date.getHours() % 12 || 12} PM - ${
        end.getHours() % 12 || 12
    } PM`;
}
function going() {
    axios.put(`/api/invited/${invitation.event_id}`, {
        response_id: ReponseStatus.GOING,
    });
}
function notGoing() {
    axios.put(`/api/invited/${invitation.event_id}`, {
        response_id: ReponseStatus.NOTGOING,
    });
}
</script>
