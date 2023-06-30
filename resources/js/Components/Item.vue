<script setup>
const props = defineProps({
    logopath: {
        type: String,
        required: true,
    },
    description: {
        type: String,
        required: true,
    },
});
</script>
<template>
    <div
        class="border bg-gray-200 dark:bg-white w-1/5 h-5/5 my-5 ml-5 items-center hover:shadow-xl hover:w-2/5 flex flex-col cursor-pointer"
    >
        <img :src="props.logopath" alt="Logo" class="w-25 mt-3 h-20" />
        <p class="flex"> {{props.description}} </p>
        <Link>Ajouter au pannier</Link>
    </div>
</template>
