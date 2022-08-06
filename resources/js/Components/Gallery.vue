<script setup>
const { gallery } = defineProps({
    gallery: {
        type: Object,
        default: () => ({
            data: [],
        }),
    },
});
const aosAnim = ["fade-left", "fade-right"];
const randomAosAnim = () => {
    return aosAnim[Math.floor(Math.random() * aosAnim.length)];
};
</script>

<template>
    <div>
        <!-- random aos from list of aosAnim -->

        <div
            class="h-[50vh] p-5"
            :data-aos="randomAosAnim()"
            v-for="i in gallery"
        >
            <img
                :src="i.url"
                class="w-full h-full object-center object-cover lg:w-full lg:h-full"
            />
        </div>
    </div>
</template>
