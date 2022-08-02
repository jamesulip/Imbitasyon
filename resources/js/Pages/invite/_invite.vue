<template>
    <div>asd</div>
</template>
<script setup>
import axios from "axios";

axios.get("/invite/1").then((response) => {
    console.log(response.data);
});
</script>
