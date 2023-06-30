<script setup>
import IndexLayout from "@/Layouts/IndexLayout.vue";
import CategorieComponent from "@/Components/CategorieComponent.vue";

</script>
<template>
    <IndexLayout>
        <template #main>
            <div class="flex flex-col font-serif dark:bg-gray-900 font-bold">
                <div class="flex flex-col items-center">
                    <h1 class="dark:text-white">Medicaments</h1><br>
                    <div class="flex">
                        <CategorieComponent> 
                            <template #categorie>
                              douleurs et fiervre
                            </template>
                        </CategorieComponent>
                        <CategorieComponent> 
                            <template #categorie>
                              medecine douce
                            </template>
                        </CategorieComponent>
                        <CategorieComponent> 
                            <template #categorie>
                              maux de george et toux
                            </template>
                        </CategorieComponent>
                        <CategorieComponent> 
                            <template #categorie>
                              maux de bouche
                            </template>
                        </CategorieComponent><CategorieComponent> 
                            <template #categorie>
                              medicaments bebe
                            </template>
                        </CategorieComponent>
                    </div>
                </div>
            </div>
        </template>
    </IndexLayout>
</template>
