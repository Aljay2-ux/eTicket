<script setup>
import MyLayout from '@/Layouts/MyLayout.vue';
import {  usePage } from '@inertiajs/vue3';
import { reactive, ref } from 'vue';

const { props } = usePage();

import { createInertiaApp, Head, router, Link } from '@inertiajs/vue3';


    const logout =()=> {
        router.post(route('logout'));
    }

    
const date = ref('')
const time = ref('')
    const form = reactive({
  description_of_request: props.description_of_request,
  ict_service_request_type_id: props.ict_service_request_type_id,
  ict_inventory_id: props.ict_inventory_id,
  requested_by: props.auth.user.username,
  date_requested: '',

});

// Function to submit the form
function submit_f() {
  router.post('/request/defect/date',form);
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

    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
  <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
    <nav class="mb-4 flex" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
          <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-700 dark:text-gray-400 dark:hover:text-white">
            <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
            </svg>
            Home
          </a>
        </li>
        <li>
          <div class="flex items-center">
            <svg class="mx-1 h-4 w-4 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
            </svg>
            <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-primary-700 dark:text-gray-400 dark:hover:text-white md:ms-2">My account</a>
          </div>
        </li>
        <li aria-current="page">
          <div class="flex items-center">
            <svg class="mx-1 h-4 w-4 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
            </svg>
            <span class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400 md:ms-2">Service</span>
          </div>
        </li>
      </ol>
    </nav>
    <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl md:mb-6">Service Request Form</h2>
    <div class="gap-8 lg:flex">
      <!-- Sidenav -->
      <aside id="sidebar" class="hidden h-full w-80 shrink-0 overflow-y-auto border border-gray-200 bg-white p-3 shadow-sm dark:border-gray-700 dark:bg-gray-800 lg:block lg:rounded-lg">
        <button id="dropdownUserNameButton" data-dropdown-toggle="dropdownUserName1" type="button" class="dark:hover-bg-gray-700 mb-3 flex w-full items-center justify-between rounded-lg bg-white p-2 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700" >
          <span class="sr-only">Open user menu</span>
          <div class="flex w-full items-center justify-between">
            <div class="flex items-center">
              <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" class="mr-3 h-8 w-8 rounded-md" alt="Bonnie avatar" />
              <div class="text-left">
                <div class="mb-0.5 font-semibold leading-none text-gray-900 dark:text-white">{{ props.auth.user.username }}</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">{{ props.auth.user.email }}</div>
              </div>
            </div>
            <svg class="h-5 w-5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
            </svg>
          </div>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdownUserName1" class="z-10 hidden w-[294px] divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700" data-popper-placement="bottom">
          <a href="#" class="flex items-center rounded px-4 py-3 hover:bg-gray-50 dark:hover:bg-gray-600">
            <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-8 w-8 rounded" alt="Michael avatar" />
            <div class="text-left">
              <div class="mb-0.5 font-semibold leading-none text-gray-900 dark:text-white">Flowbite LLC (Company)</div>
              <div class="text-sm text-gray-500 dark:text-gray-400">company@flowbite.com</div>
            </div>
          </a>
        </div>
        <div class="mb-4 w-full border-y border-gray-100 py-4 dark:border-gray-700">
          <ul class="grid grid-cols-3 gap-2">
            <li>
              <a href="#" class="group flex flex-col items-center justify-center rounded-xl bg-primary-50 p-2.5 hover:bg-primary-100 dark:bg-primary-900 dark:hover:bg-primary-800">
                <span class="mb-1 flex h-8 w-8 items-center justify-center rounded-full bg-primary-100 group-hover:bg-primary-200 dark:bg-primary-800  dark:group-hover:bg-primary-700">
                  <svg class="h-5 w-5 text-primary-700 dark:text-primary-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>
                </span>
                <span class="text-sm font-medium text-primary-700 dark:text-primary-300">Profile</span>
              </a>
            </li>
            
            
          </ul>
        </div>

        <ul class="space-y-2">
          <li>
            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
              <svg class="h-6 w-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
              </svg>
              <span class="ml-3">My Request</span>
            </a>
          </li>
          <li>
            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
              <svg class="h-6 w-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-width="2" d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
              </svg>
              <span class="ml-3 flex-1 whitespace-nowrap">Reviews</span>
            </a>
          </li>
          <li>
            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
              <svg class="h-6 w-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
              </svg>
              <span class="ml-3 flex-1 whitespace-nowrap">Status</span>
            </a>
          </li>
          <li>
            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
              <svg class="h-6 w-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
              </svg>
              <span class="ml-3 flex-1 whitespace-nowrap">Recently viewed</span>
            </a>
          </li>
          
        </ul>
        <ul class="mt-5 space-y-2 border-t border-gray-100 pt-5 dark:border-gray-700">
          <li>
            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
              <svg class="h-6 w-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z"
                />
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
              </svg>
              <span class="ml-3 flex-1 whitespace-nowrap">Settings</span>
            </a>
          </li>
          <li>
            <a href="#" class="group flex items-center rounded-lg p-2 text-base font-medium text-red-600 hover:bg-red-100 dark:text-red-500 dark:hover:bg-gray-700">
              <svg class="h-6 w-6 flex-shrink-0 text-red-600 transition duration-75 dark:text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
              </svg>
              <span class="ml-3 flex-1 whitespace-nowrap">Log out</span>
            </a>
          </li>
        </ul>
      </aside>
      <!-- Right content -->
      <form @submit.prevent="submit_f" class="w-full space-y-6 lg:space-y-8">
        <div class="space-y-6 sm:space-y-8">
          <ol class="flex flex-col gap-4 rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 sm:justify-center md:flex-row md:items-center lg:gap-6">
            <li class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
              <svg class="h-5 w-5 text-primary-700 dark:text-primary-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
              <p class="text-sm font-medium leading-tight text-primary-700 dark:text-primary-500">My Request</p>
            </li>

            <div class="hidden h-px w-8 shrink-0 bg-gray-200 dark:bg-gray-700 md:block xl:w-16"></div>

            <li class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
              <svg class="h-5 w-5 text-primary-700 dark:text-primary-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
              <p class="text-sm font-medium leading-tight text-primary-700 dark:text-primary-400">Defect reason</p>
            </li>

            <div class="hidden h-px w-8 shrink-0 bg-gray-200 dark:bg-gray-700 md:block xl:w-16"></div>

            <li class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
              <svg class="h-5 w-5 text-primary-700 dark:text-primary-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
              <p class="text-sm font-medium leading-tight text-primary-700 dark:text-primary-400">Select date</p>
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
        

        <div class="flex flex-row space-x-6">
          
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">3. Select Date and Time:</h3>

          <div class="relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
              </svg>
            </div>
              <input type="date" v-model="form.date_requested" id="datepicker-actions" datepicker datepicker-buttons datepicker-autoselect-today  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
          </div>

          <div class="relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
              </svg>
            </div>
              <input type="time"   id="datepicker-actions" datepicker datepicker-buttons datepicker-autoselect-today timepicker timepicker-buttons timepicker-autoselect-today  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
            </div>



          
        </div>
        
        <div class="flex justify-between pt-80">
      <!-- Previous Button -->
      <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
         Prev: Select date
      </button>

      <!-- Next Button -->
    <button type="submit_f" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
        Next: Confirmation
    </button>
  
</div>
      </form>
    </div>
  </div>
</section>

</MyLayout>
</template>

