<template>
    <div class="flex w-screen">
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
                        class="sm:text-3xl"
                        style="font-family: 'century-gothic'"
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
                    <div class="flex" style="font-family: century-gothic">
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
                                Together with thier families,
                                <br />happily invite you to celebrate thier love
                                and marriage
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

            <table
                dir="ltr"
                class="text-sm md:text-2xl"
                cellspacing="0"
                cellpadding="0"
                style="font-family: century-gothic"
            >
                <colgroup>
                    <col width="180" />
                    <col width="180" />
                </colgroup>
                <tbody>
                    <tr>
                        <td
                            data-aos="fade-up"
                            colspan="2"
                            class="text-center font-semibold"
                        >
                            Principal Sponsors
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Cong. Atty. Joel R. Chua</td>
                        <td data-aos="fade-up">Dir. Roselle Delos Reyes</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Hon. Terrence Alibarbar</td>
                        <td data-aos="fade-up">Ms. Ritchelle Marie Pobre</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Hon. Fog Abante</td>
                        <td data-aos="fade-up">Hon. Joy Villamar</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Hon. Elmo Canino</td>
                        <td data-aos="fade-up">Mrs. Helen Abdosan</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Hon. Melchor Garin</td>
                        <td data-aos="fade-up">Hon. Maile Atienza</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Hon. Eddie Yu Jazmin</td>
                        <td data-aos="fade-up">Mrs. Hilda Vicencio</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Mr. Anthony Jude Ro&ntilde;o</td>
                        <td data-aos="fade-up">Mrs. Mabel Leon</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Mr. Alvin Reyes</td>
                        <td data-aos="fade-up">Mrs. Norma Reyes</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Mr. Hermie Sandiego</td>
                        <td data-aos="fade-up">Mrs. Chariza Calib-og</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Mr. Christopher Benegay</td>
                        <td data-aos="fade-up">Mrs. Rachel Silorio</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Mr. Christian Quintana</td>
                        <td data-aos="fade-up">Mrs. Marie Author</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Mr. Edwin Rioveros</td>
                        <td data-aos="fade-up">Mrs. Rizza Pillos</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Mr. Dominador Laylo</td>
                        <td data-aos="fade-up">Mrs. Analyn Suan</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">&nbsp;</td>
                        <td data-aos="fade-up">&nbsp;</td>
                    </tr>
                    <tr>
                        <td
                            data-aos="fade-up"
                            colspan="2"
                            class="text-center font-semibold"
                        >
                            Secondary Sponsors
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up" class="font-semibold">
                            BEST MAN
                        </td>
                        <td data-aos="fade-up" class="font-semibold">
                            MAID OF HONOR
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Mr. Tyron Buenavista</td>
                        <td data-aos="fade-up">Ms. Riza Grace Calib-og</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">&nbsp;</td>
                        <td data-aos="fade-up">&nbsp;</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up" class="font-semibold">
                            GROOMSMEN
                        </td>
                        <td data-aos="fade-up" class="font-semibold">
                            BRIDESMAID
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Mr. John Kyle Mariano</td>
                        <td data-aos="fade-up">Ms. Reisha Silorio</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Mr. Rendell Valenzuela</td>
                        <td data-aos="fade-up">Ms. Rose Ann Ernesto</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Mr. Rodolfo Bajaro Jr.</td>
                        <td data-aos="fade-up">Ms. Hiyas Kim Endrano</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Mr. Michael Sean Ro&ntilde;o</td>
                        <td data-aos="fade-up">Mrs. Klarenz Ro&ntilde;o</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">&nbsp;</td>
                        <td data-aos="fade-up">&nbsp;</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up" class="font-semibold">CORD</td>
                        <td data-aos="fade-up" class="font-semibold">VEIL</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Ms. Fern Fabroa</td>
                        <td data-aos="fade-up">Ms. Raven Valenzuela</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">Mr. Johnver Reyes</td>
                        <td data-aos="fade-up">Mr. James Ulip</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">&nbsp;</td>
                        <td data-aos="fade-up">&nbsp;</td>
                    </tr>
                    <tr>
                        <td
                            data-aos="fade-up"
                            colspan="2"
                            class="text-center font-semibold"
                        >
                            CANDLE
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up" colspan="2" class="text-center">
                            Ms. Kristel Pae Reyes
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up" colspan="2" class="text-center">
                            Mr. Aldrich Ro&ntilde;o
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">&nbsp;</td>
                        <td data-aos="fade-up">&nbsp;</td>
                    </tr>
                    <tr>
                        <td
                            data-aos="fade-up"
                            colspan="2"
                            class="text-center font-semibold"
                        >
                            RING BEARER
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up" colspan="2" class="text-center">
                            Zach Miguel Ro&ntilde;o
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">&nbsp;</td>
                        <td data-aos="fade-up">&nbsp;</td>
                    </tr>
                    <tr>
                        <td
                            data-aos="fade-up"
                            colspan="2"
                            class="text-center font-semibold"
                        >
                            COIN BEARER
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up" colspan="2" class="text-center">
                            John Matthew Ro&ntilde;o
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up" colspan="2" class="text-center">
                            with Kylie Rainn Reyes
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">&nbsp;</td>
                        <td data-aos="fade-up">&nbsp;</td>
                    </tr>
                    <tr>
                        <td
                            data-aos="fade-up"
                            colspan="2"
                            class="text-center font-semibold"
                        >
                            BIBLE BEARER
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up" colspan="2" class="text-center">
                            Lance Lohnard Salen
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up">&nbsp;</td>
                        <td data-aos="fade-up">&nbsp;</td>
                    </tr>
                    <tr>
                        <td
                            data-aos="fade-up"
                            colspan="2"
                            class="text-center font-semibold"
                        >
                            FLOWER GIRLS &amp; ESCORT
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up" colspan="2" class="text-center">
                            Erin Kale Skye Reyes
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up" colspan="2" class="text-center">
                            Athalia Ryzane Dela Cruz &amp; John Maverick Medina
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up" colspan="2" class="text-center">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td
                            data-aos="fade-up"
                            colspan="2"
                            class="text-center font-semibold"
                        >
                            LITTLE BRIDE
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-up" colspan="2" class="text-center">
                            Vielle Kyrie Valenzuela
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="p-5 flex">
                <div class="mx-auto text-sm md:text-2xl">
                    <span> Attire </span>
                    <br />
                    <p>Sponsors: Formal in the hues of brown</p>
                    <p>Guests: Formal or semi-formal in the hues of brown</p>
                    <br /><br />
                    <span> Gift Guide </span><br />
                    <p>
                        We have been truly blessed with everything we have.
                        However, if you must give, we recommend a monetary
                        present.
                    </p>
                </div>
            </div>
            <Gallery :gallery="event.gallery" />
            <div class="h-screen w-full flex" id="rvsp">
                <div
                    class="mx-auto mt-10 text-md md:text-3xl text-center"
                    style="font-family: 'century-gothic'"
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
import Gallery from "@/Components/Gallery.vue";

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
<style>
/* select first td on tr were no colspan*/
tr td:first-child:nth-last-child(2) {
    text-align: right;
}
tr td {
    padding: 0px 0.5rem;
    white-space: nowrap;
}
</style>
