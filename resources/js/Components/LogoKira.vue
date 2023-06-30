<script setup>
import { Link} from '@inertiajs/vue3';
</script>
<template>
<div class="logokira mx-1 overflow-hidden">
    <Link href="#">Web Care</Link>
</div>
</template>
<style>
.logokira{
    font-size: 25px;
    color: #06a749;
    text-decoration: none;
    font-weight: 600;
}

.logokira::before{
    position: relative;
    width: 100%;
    height: 100%;
    animation: showRight 2s ease forwards;
    animation-delay: .3s ;
    background: #fff;
}
@keyframes showRight {
    100%{
        width: 0;
    }
}
</style>