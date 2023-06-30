<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});

const classes = computed(() =>
    props.active
        ? 'inline-flex w-full h-full items-center px-1 pt-1 border-2 border-green-500 dark:border-indigo-500 text-sm font-medium dark:text-white-300 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
        : 'inline-flex h-15 items-center px-1 pt-1 text-sm hover:text-white dark:hover:text-black focus:outline-none focus:text-white dark:focus:text-black dark:text-black hover:bg-green-600 transition duration-150 ease-in-out'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
