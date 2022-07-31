<template>
    <div class="flex bg-hero-pattern">
        <div class="grid col-span-1 mx-auto relative max-w-3xl">
            not final design
            <div class="grid grid-cols-1 relative" data-aos="zoom-in">
                <div class="bg-gray-800 col-span-1">
                    <div class="h-screen">
                        <img
                            src="/images/DSCF8585.jpg"
                            class="w-full h-full object-center object-cover lg:w-full lg:h-full"
                        />
                    </div>
                </div>
                <!-- <div
                    class="absolute top-0 text-white text-center w-full mt-2"
                    style="font-family: 'century gothic'"
                >
                    Hi, <br />
                </div> -->
                <div
                    class="w-full absolute top-0 left-0 sm:p-12 p-11 text-white"
                >
                    <div
                        class="sm:text-3xl -rotate-45"
                        style="font-family: amalfi-coast"
                    >
                        You are invited, <br />{{ code.name }}
                    </div>
                </div>
            </div>

            <div class="h-screen p-5 grid">
                <div class="text-black h-[40vh] text-center flex">
                    <div
                        data-aos="zoom-in"
                        style="font-family: amalfi-coast"
                        class="text-6xl leading-tight m-auto"
                    >
                        Ardee &<br />
                        Randy
                    </div>
                </div>
                <div class="">
                    <!-- {{
                    formatDate(
                        new Date(event.start_date),
                        new Date(event.end_date)
                    )
                }} -->
                    <div class="flex">
                        <div class="p-3 border-r font-bold flex">
                            <div
                                data-aos="zoom-in"
                                class="text-right text-2xl self-center"
                            >
                                20<br />
                                AUG<br />
                                2022
                            </div>
                        </div>
                        <div
                            class="text-sm uppercase flex flex-col gap-3 text-left p-3"
                        >
                            <p data-aos="zoom-in">
                                Together with thier families, happily invite you
                                to celebrate thier love and marriage
                            </p>
                            <p data-aos="zoom-in">
                                3pm <br />
                                Sta. Teresita Del Nino Jesus Parish <br />43
                                Kanlaon St., Brgy. Sta. Teresita, QC
                            </p>
                            <p data-aos="zoom-in">
                                6pm <br />
                                Asiong Sizzling House <br />
                                815 Gonzalo Puyat St., Quiapo, Manila
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="h-[50vh] flex">
                <div class="text-center m-auto">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Deleniti molestiae debitis delectus dolores accusamus,
                    pariatur aut mollitia eius, nisi sapiente cum. Nihil, vitae?
                    Quidem ratione veniam tempora non eum libero.
                </div>
            </div> -->
            <div class="h-screen flex">
                <!-- create 2 column list -->
                <div class="mx-auto text-sm md:text-2xl">
                    <h4
                        data-aos="zoom-in"
                        class="text-center uppercase"
                        style="font-family: 'century gothic'"
                    >
                        Principal Sponsors
                    </h4>

                    <div class="flex gap-3 mx-auto text-sm md:text-2xl">
                        <ul class="">
                            <li data-aos="fade-right" class="text-right">
                                Dir. Roselle Delos Reyes
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Ms. Ritchelle Marie Pobre
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Hon. Joy Villamar
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mrs. Helen Abdosan
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Hon. Maile Atienza
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mrs. Hilda Vicencio
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mrs. Mabel Leon
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mrs. Norma Reyes
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mrs. Chariza Calib-og
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mrs. Rachelle Silorio
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mrs. Marie Author
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mrs. Rizza Pillos
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mrs. Analyn Suan
                            </li>
                        </ul>
                        <ul>
                            <li data-aos="fade-left" class="text-left">
                                Dir. Roselle Delos Reyes
                            </li>
                            <li data-aos="fade-left" class="text-left">
                                Ms. Ritchelle Marie Pobre
                            </li>
                            <li data-aos="fade-left" class="text-left">
                                Hon. Joy Villamar
                            </li>
                            <li data-aos="fade-left" class="text-left">
                                Mrs. Helen Abdosan
                            </li>
                            <li data-aos="fade-left" class="text-left">
                                Hon. Maile Atienza
                            </li>
                            <li data-aos="fade-left" class="text-left">
                                Mrs. Hilda Vicencio
                            </li>
                            <li data-aos="fade-left" class="text-left">
                                Mrs. Mabel Leon
                            </li>
                            <li data-aos="fade-left" class="text-left">
                                Mrs. Norma Reyes
                            </li>
                            <li data-aos="fade-left" class="text-left">
                                Mrs. Chariza Calib-og
                            </li>
                            <li data-aos="fade-left" class="text-left">
                                Mrs. Rachelle Silorio
                            </li>
                            <li data-aos="fade-left" class="text-left">
                                Mrs. Marie Author
                            </li>
                            <li data-aos="fade-left" class="text-left">
                                Mrs. Rizza Pillos
                            </li>
                            <li data-aos="fade-left" class="text-left">
                                Mrs. Analyn Suan
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bg-gray-700 p-2 sticky hidden bottom-0">
                <div>
                    <div class="flex justify-center gap-3">
                        <!-- <button
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
                    </button> -->
                        <button
                            class="text-white font-bold py-2 px-4 rounded-full"
                        >
                            RSVP
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
import axios from "axios";
import { ReponseStatus } from "@/enum/status";
import AOS from "aos";
import "aos/dist/aos.css";
onMounted(() => {
    AOS.init();
});
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
