<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Votre panier est a vous</h2>
        </template>

        <div class="flex flex-rows ml-5 dark:text-gray-200">

            <div class="py-9 text-center ">
                <table class="table-fixed ">
                    <thead>
                        <tr class="bg-emerald-600">
                            <th>Produits</th>
                            <th>Prix-Unitaire</th>
                            <th>Disp</th>
                            <th>Notice</th>
                            <th>Qte</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TRAMADHOL</td>
                            <td>5k</td>
                            <td>En Stock</td>
                            <td><a href="#">notice</a></td>
                            <td class="items-center flex flex-rows-1 ">
                                <button class="text-xl ml-3 w-10 h-5 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                    </svg>
                                </button>
                                <label class="text-center ml-4" for="qte">5</label>
                                <button class="text-xl ml-4 rounded-full"><svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                </button>
                            </td>
                            <td>
                                5k <a class="ml-8" href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Dollipranne</td>
                            <td>5k</td>
                            <td>En Stock</td>
                            <td><a href="#">notice</a></td>
                            <td class="items-center flex flex-rows-1 ">
                                <button class="text-xl ml-3 rounded-full"><svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                    </svg>
                                </button>
                                <label class="text-center ml-4" for="qte">5</label>
                                <button class="text-xl ml-4 rounded-full"><svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                </button>
                            </td>
                            <td>
                                5k<a class="ml-8" href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Shining Star</td>
                            <td>Earth, Wind, and Fire</td>
                            <td>1975</td>
                            <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                            <td>Malcolm Lockyer</td>
                            <td>1961</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="grid grid-cols py-9 ml-auto mr-auto ml-9">
                <div class="box  h-100 w-120">
                    <button
                        class="bg-neutral-900 ml-5 text-white rounded scale-100 h-100 w-120 border border-sky-100 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300">Continuer
                         l'ajout</button>
                </div>

                <div class="box-content h-64 w-69 p-4 border-3">
                    <label class="text-emerald-600" for="total"> TOTAL Produits: 15k</label><br>
                    <label class="" for="livraison"> Frais livraison: 2k</label><br><br>
                    <label class="" for="TOTAL"> TOTAL : 17k </label><br>
                    <button
                        class="bg-emerald-600 font-mono rounded border border-sky-100 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-11 hover:bg-orange-600 duration-300">Commander</button>

                </div>
            </div>

        </div>


    </AuthenticatedLayout>
</template>
