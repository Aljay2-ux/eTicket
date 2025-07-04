<script setup>
import MyLayout from '@/Layouts/MyLayout.vue';
import { usePage, router} from '@inertiajs/vue3';
const { props } = usePage();

  let submit= () => {
    router.post ('/status');
  }
//   const createUser= (values, { resetForm}) => {
//     axios.post('/request/my-request', values)
//     .then((response)) => {
//         users.value.unshift
//     }
//   }

//   const editUser = () => {
//     $('#createUserModal').modal('show');
//   };
const viewing = () => {
    router.get ('/request/viewing');
}

</script>
<template>
    <MyLayout>
     
    


<div class="relative  shadow-md sm:rounded-lg ">
    <div class=" overflow-x-auto ">
    <table class=" text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 w-[calc(70%+8rem)] " >
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400" >
            <tr >
                
                <th scope="col" class="px-6 py-3">
                    Requested by
                </th>
                <th scope="col" class="px-6 py-3">
                    Department Unit
                </th>
                <th scope="col" class="px-6 py-3">
                    Date and Time Requested
                </th>
                <th scope="col" class="px-6 py-3">
                    Date Needed
                </th>
                <th scope="col" class="px-6 py-3">
                    Service Requested
                </th>
                <th scope="col" class="px-6 py-3">
                    Description of Service Requested
                </th>
                
               
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600" v-for="assets_1 in props.assets_1" :key="assets_1.id"  >
                
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" >
                    {{ assets_1.requested_by }}
                </th>
                <td class="px-6 py-4">
                    {{}}
                </td>
                <td class="px-6 py-4">
                    {{ assets_1.date_requested}}
                </td>
                <td class="px-6 py-4">
                    {{ assets_1.date_needed}}
                </td>
                <td class="px-6 py-4">
                    {{ assets_1.request_type}}
                </td>
                <td class="px-6 py-4">
                    {{ assets_1.description}}
                </td>
                
                
                
            </tr>
           
            
            
            
           
        </tbody>
    </table>
  </div>
</div>




</MyLayout>
</template>

