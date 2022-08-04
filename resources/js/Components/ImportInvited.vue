<script>
import { useForm } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
export default {
    setup() {
        const form = useForm({
            event_id: route().params.event,
            import: null,
        });

        function submit() {
            Inertia.post("/import-invited", form);
        }

        Inertia.on("invalid", (event) => {
            event.preventDefault();
            // Handle the invalid response yourself
        });
        return { form, submit };
    },
};
</script>

<template>
    <form @submit.prevent="submit" class="flex gap-3">
        <input
            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            type="file"
            @input="form.import = $event.target.files[0]"
        />
        <progress
            v-if="form.progress"
            :value="form.progress.percentage"
            max="100"
        >
            {{ form.progress.percentage }}%
        </progress>
        <button
            type="submit"
            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150"
        >
            Upload
        </button>
    </form>
</template>
