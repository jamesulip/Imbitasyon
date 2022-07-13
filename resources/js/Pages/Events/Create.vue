<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
const form = ref({
    name: "",
    description: "",
    start_date: "",
    end_date: "",
    location: "",
});
function submit() {
    Inertia.post(`/api/events`, form.value);
}
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                New Event
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <form @submit.prevent="submit">
                    <div class="space-y-6">
                        <div class="text-center">
                            <h1
                                class="text-3xl uppercase leading-6 font-medium text-gray-900"
                            >
                                Create a new event.
                            </h1>
                        </div>

                        <div>
                            <label
                                for="project-name"
                                class="block text-sm font-semibold text-gray-700"
                            >
                                Name Of Event
                            </label>
                            <div class="mt-1">
                                <input
                                    v-model="form.name"
                                    type="text"
                                    name="project-name"
                                    id="project-name"
                                    class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md"
                                />
                            </div>
                        </div>

                        <div>
                            <div class="flex gap-3">
                                <div class="w-full">
                                    <label
                                        for="description"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Start Date
                                    </label>
                                    <div class="mt-1">
                                        <input
                                            v-model="form.start_date"
                                            type="datetime-local"
                                            name="date"
                                            step="any"
                                            id="date"
                                            class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md"
                                        />
                                    </div>
                                </div>
                                <div class="w-full">
                                    <label
                                        for="end-date"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        End Date
                                    </label>
                                    <div class="mt-1">
                                        <input
                                            v-model="form.end_date"
                                            step="any"
                                            type="datetime-local"
                                            name="end-date"
                                            id="end-date"
                                            class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label
                                for="description"
                                class="block text-sm font-medium text-gray-700"
                            >
                                Description
                            </label>
                            <div class="mt-1">
                                <textarea
                                    v-model="form.description"
                                    id="description"
                                    name="description"
                                    rows="3"
                                    class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border border-gray-300 rounded-md"
                                />
                            </div>
                        </div>

                        <div>
                            <label
                                for="location"
                                class="block text-sm font-medium text-gray-700"
                            >
                                Event Location
                            </label>
                            <input
                                v-model="form.location"
                                type="text"
                                name="location"
                                id="location"
                                class="mt-1 block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md"
                            />
                        </div>
                        <div>
                            <label
                                for="attendees"
                                class="block text-sm font-medium text-gray-700"
                            >
                                Maximum Number of Attendees
                            </label>
                            <input
                                v-model="form.max_guests"
                                type="number"
                                name="attendees"
                                id="attendees"
                                class="mt-1 block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md"
                            />
                        </div>
                        <div class="flex justify-end">
                            <button
                                type="button"
                                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500"
                            >
                                Cancel
                            </button>
                            <button
                                type="submit"
                                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-sky-500 hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500"
                            >
                                Create Event
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
