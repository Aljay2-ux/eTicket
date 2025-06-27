<template>
    <!-- component -->
<!-- This is an example component -->
<MyLayout>
    
</MyLayout>
</template>

<script setup>
import MyLayout from '@/Layouts/MyLayout.vue';
import { createApp, h,ref } from 'vue';
import { createInertiaApp, Head, router, Link } from '@inertiajs/vue3';
    const logout =()=> {
        router.post(route('logout'));
    }
</script>