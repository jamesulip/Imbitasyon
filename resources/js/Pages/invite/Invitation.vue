<template>
    <div class="flex bg-hero-pattern">
        <div class="grid col-span-1 mx-auto relative max-w-3xl">
            <div class="grid grid-cols-1 relative" data-aos="zoom-in">
                <div class="bg-gray-800 col-span-1">
                    <div class="h-screen">
                        <img
                            src="/images/DSCF8585.jpg"
                            class="w-full h-full object-center object-cover lg:w-full lg:h-full"
                        />
                    </div>
                </div>

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
                <div class="w-full flex absolute bottom-6 text-white">
                    <div class="mx-auto animate-bounce">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-12 w-12"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M19 9l-7 7-7-7"
                            />
                        </svg>
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
                                class="text-right mx-auto text-md md:text-3xl self-center"
                            >
                                20<br />
                                AUG<br />
                                2022
                            </div>
                        </div>
                        <div
                            class="mx-auto text-sm md:text-2xl uppercase flex flex-col gap-3 text-left p-3"
                        >
                            <p data-aos="zoom-in">
                                Together with thier families, happily invite you
                                to celebrate thier love and marriage
                            </p>

                            3pm <br />
                            <a
                                target="_blank"
                                class="text-blue-600 underline"
                                href="https://goo.gl/maps/GdjqKgFzMHxbe4GBA"
                                data-aos="zoom-in"
                            >
                                Sta. Teresita Del Nino Jesus Parish <br />43
                                Kanlaon St., Brgy. Sta. Teresita, QC
                            </a>
                            <p data-aos="zoom-in">
                                6pm <br />
                                <a
                                    href="https://g.page/Asiong-pagoda?share"
                                    target="_blank"
                                    class="text-blue-600 underline"
                                >
                                    Asiong Sizzling House <br />
                                    815 Gonzalo Puyat St., Quiapo, Manila
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-5 flex">
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
                                Cong. Joel R. Chua
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Hon. Terrence Alibarbar
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Hon. Fog Abante
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Hon. Elmo Canino
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Hon. Melchor Garin
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Hon. Eddie Yu Jazmin
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mr. Anthony Jude Roño
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mr. Alvin Reyes
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mr. Hermie Sandiego
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mr. Christopher Benegay
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mr. Christian Quintana
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mr. Edwin Rioveros
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mr. Dominador Laylo
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
            <div class="py-5 flex">
                <div class="mx-auto flex flex-col text-sm md:text-2xl">
                    <h4
                        data-aos="zoom-in"
                        class="text-center uppercase"
                        style="font-family: 'century gothic'"
                    >
                        Secondary Sponsors
                    </h4>

                    <div class="flex gap-3 mx-auto text-sm md:text-2xl">
                        <ul class="">
                            <li
                                data-aos="fade-right"
                                class="text-right font-semibold"
                            >
                                BEST MAN
                            </li>
                            <li data-aos="fade-right" class="text-right mb-5">
                                Mr. Tyron Buenavista
                            </li>
                            <li
                                data-aos="fade-right"
                                class="text-right font-semibold"
                            >
                                GROOMSMEN
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mr. John Kyle Mariano
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mr. Rendell Valenzuela
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mr. Rodolfo Bajaro Jr.
                            </li>
                            <li data-aos="fade-right" class="text-right">
                                Mr. Michael Sean Roño
                            </li>
                        </ul>
                        <ul>
                            <li
                                data-aos="fade-left"
                                class="text-left font-semibold"
                            >
                                MAID OF HONOR
                            </li>
                            <li data-aos="fade-left" class="text-left mb-5">
                                Ms. Riza Grace Calib-og
                            </li>
                            <li
                                data-aos="fade-left"
                                class="text-left font-semibold"
                            >
                                BRIDESMAID
                            </li>
                            <li data-aos="fade-left" class="text-left">
                                Ms. Reisha Silorio
                            </li>
                            <li data-aos="fade-left" class="text-left">
                                Ms. Rose Ann Ernesto
                            </li>
                            <li data-aos="fade-left" class="text-left">
                                Ms. Hiyas Kim Endrano
                            </li>
                            <li data-aos="fade-left" class="text-left">
                                Mrs. Klarenz Roño
                            </li>
                        </ul>
                    </div>

                    <div class="flex gap-3 mx-auto text-sm md:text-2xl">
                        <ul class="">
                            <li
                                data-aos="fade-right"
                                class="text-right font-semibold"
                            >
                                CORD
                            </li>
                            <li data-aos="fade-right" class="text-right mb-5">
                                Ms. Fern Fabroa
                            </li>
                            <li data-aos="fade-right" class="text-right mb-5">
                                Mr. Johnver Reyes
                            </li>
                        </ul>
                        <ul>
                            <li
                                data-aos="fade-left"
                                class="text-left font-semibold"
                            >
                                VIEL
                            </li>
                            <li data-aos="fade-left" class="text-left mb-5">
                                Ms. Raven Valenzuela
                            </li>
                            <li data-aos="fade-left" class="text-left mb-5">
                                Mr. James Ulip
                            </li>
                        </ul>
                    </div>
                    <div class="flex gap-3 mx-auto text-sm md:text-2xl">
                        <ul class="">
                            <li
                                data-aos="fade-right"
                                class="text-center font-semibold"
                            >
                                RING BEARER
                            </li>
                            <li data-aos="fade-right" class="text-center mb-5">
                                Zach Miguel Roño
                            </li>
                            <li
                                data-aos="fade-left"
                                class="text-center font-semibold"
                            >
                                COIN BEARER
                            </li>
                            <li data-aos="fade-left" class="text-center mb-5">
                                John Matthew Roño
                            </li>
                            <li data-aos="fade-left" class="text-center">
                                KYLIE RAINN REYES
                            </li>
                            <li
                                data-aos="fade-right"
                                class="text-center font-semibold"
                            >
                                BIBLE BEARER
                            </li>
                            <li data-aos="fade-right" class="text-center mb-5">
                                Lance Lohnard Salen
                            </li>
                            <li
                                data-aos="fade-right"
                                class="text-center font-semibold"
                            >
                                FLOWER GIRL
                            </li>
                            <li data-aos="fade-left" class="text-center">
                                Erin Kale Skye Reyes
                            </li>
                            <li data-aos="fade-left" class="text-center">
                                Athalia Ryzane Dela Cruz
                            </li>
                            <li data-aos="fade-left" class="text-center">
                                John Maverick Medina
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-5 flex">
                <div class="mx-auto text-sm md:text-2xl">
                    <span> Attire </span>
                    <br />
                    Sponsors: Formal in the hues of brown Guests: Formal or
                    semi-formal in the hues of brown
                    <br /><br />
                    <span> Gift Guide </span><br />
                    We have been truly blessed with everything we have. However,
                    if you must give, we recommend a monetary present.
                </div>
            </div>
            <div class="h-screen w-full flex" id="rvsp">
                <div
                    class="mx-auto mt-10 text-md md:text-3xl text-center"
                    style="font-family: 'century gothic'"
                >
                    <div class="pb-12">
                        <span class="leading-loose text-2xl uppercase"
                            >r s v p</span
                        >
                        <br />
                        We hope you can join us!
                        <br />
                        Kindly reply by <b>August 14, 2022</b>
                    </div>
                    <div class="flex flex-col gap-6 w-80 mx-auto">
                        <div
                            v-for="response in plans"
                            :key="response.id"
                            class="flex items-center w-full gap-3"
                        >
                            <input
                                :id="response.id"
                                name="notification-method"
                                type="radio"
                                :value="response.id"
                                class="focus:ring-yellow-500 h-12 w-12 text-yellow-600 border-gray-300"
                                v-model="code.response_id"
                            />
                            <label
                                :for="response.id"
                                class="ml-3 block text-2xl text-left font-semibold text-black"
                            >
                                {{ response.name }}
                            </label>
                        </div>
                        <div class="mt-10 w-full">
                            <div
                                v-show="code.response_id == ReponseStatus.GOING"
                            >
                                How many guest will attend?
                                <div class="flex gap-5 items-center my-5">
                                    <div>
                                        <button
                                            class="bg-white dark:bg-yellow-800 p-2 w-10 h-10 ring-1 ring-yellow-900/5 dark:ring-yellow-200/20 shadow-lg rounded-full flex items-center justify-center"
                                            @click="code.attending--"
                                        >
                                            -
                                        </button>
                                    </div>
                                    <input
                                        type="number"
                                        min="1"
                                        max="20"
                                        name="name"
                                        id="name"
                                        class="mt-0 h-16 block w-full text-center px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black text-3xl"
                                        v-model="code.attending"
                                    />
                                    <div>
                                        <button
                                            class="bg-white dark:bg-yellow-800 p-2 w-10 h-10 ring-1 ring-yellow-900/5 dark:ring-yellow-200/20 shadow-lg rounded-full flex items-center justify-center"
                                            @click="code.attending++"
                                        >
                                            +
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- <div
                                v-show="code.response_id == ReponseStatus.GOING"
                            >
                                GOING
                            </div>
                            <div
                                v-show="
                                    code.response_id == ReponseStatus.NOTGOING
                                "
                            ></div> -->
                        </div>

                        <Response :invitation="code" />
                    </div>
                </div>
            </div>
            <!-- <div class="bg-gray-200 text-center p-2 bottom-0 z-50">
                <a href="#rvsp"> Click here to respond </a>
            </div> -->
        </div>
    </div>
</template>
<script setup lang="ts">
import axios from "axios";
import { ReponseStatus } from "@/enum/status";
import AOS from "aos";
import "aos/dist/aos.css";
import Response from "../../Components/Response.vue";

onMounted(() => {
    AOS.init();
});
const plans = [
    {
        id: ReponseStatus.GOING,
        name: "Gladly Accepts",
    },

    {
        id: ReponseStatus.NOTGOING,
        name: "Regretfully Declines",
    },
];
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
// watch invitation
watch(
    invitation,
    (val, old) => {
        if (old.response_id != val.response_id) {
            if (val.response_id == ReponseStatus.GOING) {
                val.attending = 1;
            } else {
                val.attending = 0;
            }
        } else {
            if (val.response_id == ReponseStatus.GOING) {
                if (val.attending < 1) {
                    val.attending = 1;
                }
            } else {
                val.attending = 0;
            }
        }
    },
    { deep: true }
);
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
