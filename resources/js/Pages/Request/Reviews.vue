<script setup>
import MyLayout from '@/Layouts/MyLayout.vue';
import { usePage, router} from '@inertiajs/vue3';
const { props } = usePage();

  let submit= () => {
    router.post ('/status');
  }

</script>
<template>
    <MyLayout>
     
    
<!-- <form class="max-w-sm mx-auto">
  <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your country</label>
  <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    <option>Computer Diagnosis/Repair</option>
    <option>Software Installation</option>
    <option>Hardware Installation</option>
    <option>Repair Internet/Network Connectivity</option>
    <option>Printer Installation</option>
  </select>
</form> -->



</MyLayout>
</template>

