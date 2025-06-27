<template>
    <!-- <Layout> -->
        <Head title="Create User" />

    <h1 class="flex items-center justify-center">Create New User</h1>
  <div class="flex items-center justify-center h-screen"> 
    

    <form @submit.prevent="submit" class="max-w-md mx-auto- mt-8">
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="name"
            >
                Name
            </label>

            <input v-model="form.name" class="border border-gray-400 p-2 w-full"
                   type="text"
                   name="name"
                   id="name"
                   
            />
            <div v-if="props.errors.name"
             v-text="props.errors.name" class="text-red-500 text-xs mt-1"></div>

        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="email"
            >
                Email
            </label>

            <input v-model="form.email" class="border border-gray-400 p-2 w-full"
                   type="email"
                   name="email"
                   id="email"
                  

            />
            <div v-if="props.errors.email"
             v-text="props.errors.email" class="text-red-500 text-xs mt-1"></div>
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="password"
            >
                Password
            </label>

            <input v-model="form.password" class="border border-gray-400 p-2 w-full"
                   type="password"
                   name="password"
                   id="password"
                
                
            />
            
            <div v-if="props.errors.password"
             v-text="props.errors.password" class="text-red-500 text-xs mt-1"></div>
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
            :disabled="processing"    
            >
                Submit
        </button>

        </div>

        
        
    </form>
    </div> 
    <!-- </Layout> -->
   
</template>

<script setup>
// import Layout from '@/Pages/Profile/Layout.vue';
import { reactive, ref } from 'vue';
import { router } from '@inertiajs/vue3';
// import { useForm } from '@inertiajs/inertia';

const props = defineProps({
    errors: Object
});

    let form= reactive({
        name: '',
        email: '',
        password: ''
    });

    // setTimeout(() => {
    //     form.reset();
    // }, 3000);

    let processing = ref(false);

    let submit= () => {
        // processing.value = true;
        router.post('/create', form, {
            onStart: () => { processing.value = true },
            onFinish: () => { processing.value = false },
        });
    };
   
</script>