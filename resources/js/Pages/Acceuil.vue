<script setup>
import IndexLayout from "@/Layouts/IndexLayout.vue";
import Item from "@/Components/Item.vue";

// import 'vue3-carousel/dist/carousel.css'
// import { Carousel, Navigation, Slide } from 'vue3-carousel'

</script>
<template>
    <IndexLayout>
        <template #main>
            <div class="flex flex-col font-serif dark:bg-gray-900 font-bold">
                <div>
                    <Carousel :items-to-show="1" :wrap-around="true">
                        <Slide v-for="slide in 6" :key="slide">
                            <div class="carousel__item">
                                <img
                                    id="slider"
                                    :src="`images/carousel/slide${slide}.jpg`"
                                    alt=""
                                />
                            </div>
                        </Slide>

                        <template #addons>
                            <Navigation />
                        </template>
                    </Carousel>
                </div>
                <div class="flex flex-row">
                    <Item logopath="/images/logo/logo.png" />
                    <Item
                        logopath="/images/logo/logo.png"
                        description="Excelent choix"
                    />
                    <Item
                        logopath="/images/logo/plus.png"
                        description="Excelent choix"
                    />
                    <Item
                        logopath="/images/logo/logo.png"
                        description="Excelent choix"
                    />
                    <Item
                        logopath="/images/medicaments/canabis.jpg"
                        description="Excelent choix"
                    />
                </div>
                <div class="flex flex-row">
                    <Item
                        logopath="/images/medicaments/canabis.jpg"
                        description="Excelent choix"
                    />
                    <Item
                        logopath="/images/medicaments/love_medoc.jpg"
                        description="Excelent choix"
                    />
                    <Item
                        logopath="/images/medicaments/love_medoc.jpg"
                        description="Excelent choix"
                    />
                    <Item
                        logopath="/images/logo/logo.png"
                        description="Excelent choix"
                    />
                    <Item
                        logopath="/images/medicaments/canabis.jpg"
                        description="Excelent choix"
                    />
                </div>
            </div>
        </template>
    </IndexLayout>
</template>
<style>
.carousel__item {
    font-size: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.carousel__prev,
.carousel__next {
    width: 40px;
    height: 200px;
    color: rgb(196, 196, 196);
    margin-top: -100px;
    border: transparent
}

.carousel__prev:hover,
.carousel__next:hover {
    width: 40px;
    height: 200px;
    color: rgb(212, 212, 212);
    margin-top: -100px;
    border: 3px solid rgb(217, 217, 217);
}
</style>