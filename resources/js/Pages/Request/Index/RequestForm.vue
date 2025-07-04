<script setup>
import MyLayout from '@/Layouts/MyLayout.vue';
import { usePage} from '@inertiajs/vue3';
const { props } = usePage();

import { createInertiaApp, Head, router, Link } from '@inertiajs/vue3';
    const logout =()=> {
        router.post(route('logout'));
    }

    let submit_h = (id) =>{
      router.get('/request/defect',
        {asset_id: id}
      );
    }
</script>
<template>
    <MyLayout>
      
      <div class="w-full space-y-6 lg:space-y-8">
        <div class="space-y-6 sm:space-y-8">
          <ol class="flex flex-col gap-4 rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 sm:justify-center md:flex-row md:items-center lg:gap-6">
            <li class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
              <svg class="h-5 w-5 text-primary-700 dark:text-primary-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
              <p class="text-sm font-medium leading-tight text-primary-700 dark:text-primary-500">My products</p>
            </li>

            <div class="hidden h-px w-8 shrink-0 bg-gray-200 dark:bg-gray-700 md:block xl:w-16"></div>

            <li class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
              <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
              <p class="text-sm font-medium leading-tight text-gray-500 dark:text-gray-400">Defect reason</p>
            </li>

            <div class="hidden h-px w-8 shrink-0 bg-gray-200 dark:bg-gray-700 md:block xl:w-16"></div>

            <li class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
              <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
              <p class="text-sm font-medium leading-tight text-gray-500 dark:text-gray-400">Select date</p>
            </li>

            <div class="hidden h-px w-8 shrink-0 bg-gray-200 dark:bg-gray-700 md:block xl:w-16"></div>

            <li class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
              <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
              <p class="text-sm font-medium leading-tight text-gray-500 dark:text-gray-400">Confirmation</p>
            </li>
          </ol>
        </div>

        <div class="space-y-6">
          
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">1. Select the product you want to repair:</h3>

          <div class="divide-y divide-gray-200 overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm dark:divide-gray-700 dark:border-gray-700 dark:bg-gray-800">
            <div class="flex items-center gap-8 p-6 sm:items-start lg:items-center" v-for="asset in props.assets" :key="asset.id">
              <div>
                <input id="product1" type="checkbox" value="" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-700 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                <label for="product1" class="sr-only"> Product 1 </label>
              </div>

              <div class="min-w-0 flex-1 gap-14 xl:flex xl:items-center">
                <div class="min-w-0 max-w-xl flex-1 gap-6 sm:flex sm:items-center">
                  <a  class="mb-4 flex aspect-square h-14 w-14 shrink-0 items-center sm:mb-0">
                    <img class="h-auto max-h-full w-full dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg" alt="imac image" />
                    <img class="hidden h-auto max-h-full w-full dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="imac image" />
                  </a>
                  <button @click="submit_h(asset.id)" class="mt-4 font-medium text-gray-900 hover:underline dark:text-white sm:mt-0"> {{ asset.equipment_type}}</button>
                </div>

                <div class="mt-4 flex shrink-0 flex-col gap-2 sm:flex-row sm:justify-between md:items-center xl:mt-0 xl:flex-col xl:items-start">
                  <dl class="flex items-center gap-2.5">
                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400 xl:w-36">Property Number:</dt>
                    <dd class="text-base font-normal text-gray-500 dark:text-gray-400">
                      <a >{{ asset.code }}</a>
                    </dd>
                  </dl>

                  <dl class="flex items-center gap-2.5">
                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400 xl:w-36">Aquisition Date:</dt>
                    <dd class="text-base font-normal text-gray-500 dark:text-gray-400">{{ asset.date_acquired }}</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>

          
        </div>
        <div class="flex justify-between">

          <!-- Previous Button -->
          <button  class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
              Prev: Cancel
          </button>

        <!-- Next Button -->
          <button class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                Next: Defect reason
            </button>
        </div>
      </div>
      
    
 

</MyLayout>
</template>

