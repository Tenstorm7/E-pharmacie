<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>
<template>
     <button
        :type="type"
        class="inline-flex mx-2 my-5 bg-green-500 items-center px-4 py-2 hover:bg-white hover:text-green-500 shadow-xl hover:w-40 border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 "
    >
        <slot name="categorie" />
    </button>
</template>