<script setup>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import InputError from "@/Components/InputError.vue";
import NavLink from "@/Components/NavLink.vue";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Footers from "@/Components/Footer.vue";
import LogoKira from "@/Components/LogoKira.vue";
import Dropdown from "@/Components/Dropdown.vue";
import Search from "@/Components/Search.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import { Link, Head, useForm } from "@inertiajs/vue3";
import { refDefault, useDark, useToggle } from "@vueuse/core";
// import { useCartStore } from '@/store/cart';
// const cartStore = useCartStore()

const isDark = useDark();
const toggleDark = useToggle(isDark);
let accountAndList = ref(false);

const accountAndListFunc = (bool) => {
    setTimeout(() => {
        accountAndList.value = bool;
    }, 150);
};
</script>

<template>
    <Head title="PHARMA237" />
    <header
        class="block w-full mx-auto my-auto justify-between items-center text-sm"
    >
        <div
            class="flex w-full h-12.05 bg-black text-white w-full dark:bg-gray-300:text-black flex"
        >
            <div class="flex items-center">
                <Link class="flex ml-3 px-auto">
                    Contactez-nous<svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-5 h-5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                    </svg>
                </Link>
                <Link class="flex ml-3 mx-auto"
                    >Qui somme-nous ?<svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-5 h-5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                    </svg>
                </Link>
            </div>
            <div class="ml-auto items-center flex">
                <div v-if="$page.props.auth.user" class="flex">
                    <Dropdown align="right" width="48">
                        <template #trigger>
                            <span class="inline-flex rounded-md">
                                <button
                                    type="button"
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md bg-green-900 dark:text-gray-1000 text-white hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-6 fill-blue-500 h-6"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                                        />
                                    </svg>

                                    {{ $page.props.auth.user.name }}

                                    <svg
                                        class="ml-2 -mr-0.5 h-4 w-4"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </button>
                            </span>
                        </template>

                        <template #content>
                            <DropdownLink :href="route('profile.edit')">
                                Profile
                            </DropdownLink>
                            <DropdownLink
                                :href="route('logout')"
                                method="post"
                                as="button"
                            >
                                Log Out
                            </DropdownLink>
                        </template>
                    </Dropdown>
                </div>
                <div v-else class="p-1 text-center">
                    <div class="p-1 text-center"></div>
                    <Link
                        :href="route('login')"
                        class="text-center items-center px-20 py-1.5 bg-blue-500 border border-gray-600 rounded-sm text-sm font-extrabold text-black"
                    >
                        Sign in
                    </Link>
                    <div class="text-sm pt-1">
                        New customer?
                        <Link
                            :href="route('register')"
                            class="text-blue-700 hover:text-red-700"
                        >
                            Start here.
                        </Link>
                    </div>
                </div>

                <div
                    class="w-19 h-11 items-center bg-green-900 dark:text-gray-1000 text-white py-2 mx-2 shadow-sm rounded px-3 flex duration-300 top-0 cursor-pointer"
                    @click="toggleDark()"
                >
                    <div class="dark:text-black">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                            />
                        </svg>
                    </div>
                    {{ isDark ? "Dark" : "Light" }}
                </div>
            </div>
        </div>
        <div class="flex-row mx-15% bg-white dark:bg-gray-100">
            <div class="flex">
                <div class="ml-1 flex w-1/3 items-center">
                    <ApplicationLogo />
                    <LogoKira />
                </div>
                <div class="my-auto mx-3 w-2/3">
                    <Search />
                </div>
                <div class="flex my-auto mx-auto mr-1 w-1/5">
                    <PrimaryButton class="">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-9 h-7"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"
                            />
                        </svg>
                        <!-- <span class="absolute text-center right-[21px] w-[14px] -top-0 rounded-full text-[20px]">
                            <div class="text-orange-400 font-extrabold bg-gray-900 h-[16px]">{{ cartStore.cart.length }}
                            </div>
                        </span> -->
                        <h>Mon Pannier</h>
                    </PrimaryButton>
                </div>
            </div>
            <div class="pt-5 w-full h-full">
                <div
                    class="space-x-8 sm:-my-px font-serif font-bold text-lg flex-cols sm:ml-10 sm:flex"
                >
                    <NavLink :href="route('medicaments')">
                        <h1>MEDICAMENTS</h1>
                    </NavLink>
                    <NavLink>
                        <h1>PARAPHARMACIE</h1>
                    </NavLink>
                    <NavLink>
                        <h1>VETERINAIRE</h1>
                    </NavLink>
                    <NavLink>
                        <h1>SERVICE</h1>
                    </NavLink>
                </div>
            </div>
            <div class="bg-green-500 flex text-white items-center">
                <div class="w-1/3 flex ml-auto">
                    <h1>Votre livraison en 24h</h1>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5"
                        />
                    </svg>

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-8 h-7"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"
                        />
                    </svg>
                </div>
            </div>
        </div>
    </header>

    <main>
        <slot name="main" />
    </main>

    <footer>
        <Footers class="object-bottom inset-x-0 bottom-0" />
    </footer>
</template>
<style>
.logo {
    font-size: 25px;
    color: #06a749;
    text-decoration: none;
    font-weight: 600;
    position: relative;
}

.logo::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    animation: showRight 2s ease forwards;
    animation-delay: 0.3s;
    background: #fff;
}
</style>
