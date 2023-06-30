<script setup lang="ts">
import { reactive } from 'vue';

const props = defineProps({
    valeur:String,
    resultat:Array
});
const txt =reactive({
    title:'' as String
});
</script>
<template>
    <div
        class="flex w-full mx-auto focus:border-igreen-100 dark:focus:border-indigo-600 focus:ring-green-100 dark:focus:ring-green-100 rounded-md shadow-sm  dark:bg-gray-100">
        <input class="rounded-md w-full shadow-sm border-gray-300" type="text" v-model="txt.title"
            placeholder="Paracethamol, Tramadhol, Dollipranne..." autocomplete="off">
        <button class="bg-gray-500 ml-1 rounded-md border-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-16 h-8 text-white">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
            <p v-text="txt.title"></p>
        </button>
    </div>
</template>
  

  