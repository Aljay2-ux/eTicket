<script setup>
import MyLayout from '@/Layouts/MyLayout.vue';
import { usePage, router} from '@inertiajs/vue3';
const { props } = usePage();

  let submit= () => {
    router.get ('/request/status', {
      description_of_request: form.description_of_request,
   ict_service_request_type_id: form.ict_service_request_type_id,
    asset_id: props.asset_id,
    requested_by: props.auth.user.username
    });
  }

</script>
<template>
    <MyLayout>
   <form @submit.prevent="submit" class="w-full space-y-6 lg:space-y-8">
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
              <svg class="h-5 w-5 text-primary-700 dark:text-primary-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
              <p class="text-sm font-medium leading-tight text-primary-700 dark:text-primary-400">Confirmation</p>
            </li>
          </ol>
        </div>
        <div class="pt-10">
          <img class="w-24" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTXtIFTTv5tBE-uvkiFk-fjQgmpz2zFwAKygP7zNCFKYViwVp95"/>
        </div>
        <div class="space-y-2">
          <span class="text-2xl font-bold "> Your request has been registered succesfully.</span>
          <div class="pl-4 mp-8">
          <p class="text-normal font-medium text-gray-500 text-left "> I have successfully received your request to repair this items,</p>
          <p class="text-normal font-medium text-gray-500 text-left "> until we resolve this case you can track the status of your request.</p>
        </div> 
        </div>  
        
         <div class="flex justify-between ">
      

      <!-- Next Button -->
    <button @click="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800 ">
       <svg class="h-6 w-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
              </svg>
              
              <span class="ps-1">View status</span>
    </button>
  
</div>
      </form>

</MyLayout>
</template>

