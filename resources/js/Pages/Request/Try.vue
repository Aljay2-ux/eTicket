<template>
  <div class="flex items-center justify-center h-screen">
    <button @click="showModal = true" class="w-full px-4 py-2 text-sm text-white font-medium bg-blue-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
      Subscribe to Newsletter
    </button>

    <div v-if="showModal" class="fixed inset-0 transition-opacity" @click="closeModal">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div v-if="showModal" class="fixed z-10 inset-0 overflow-y-auto" @click.self="closeModal">
      <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="w-full inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
              <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-100">
                <svg width="64px" height="64px" viewBox="0 0 24 24" class="h-6 w-6 text-blue-600" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#2563eb" stroke-width="0.36">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.88534 5.2371C3.20538 5.86848 2.75 6.89295 2.75 8.5V15.5C2.75 17.107 3.20538 18.1315 3.88534 18.7629C4.57535 19.4036 5.61497 19.75 7 19.75H17C18.385 19.75 19.4246 19.4036 20.1147 18.7629C20.7946 18.1315 21.25 17.107 21.25 15.5V8.5C21.25 6.89295 20.7946 5.86848 20.1147 5.2371C19.4246 4.59637 18.385 4.25 17 4.25H7C5.61497 4.25 4.57535 4.59637 3.88534 5.2371Z" fill="#2563eb"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M19.3633 7.31026C19.6166 7.63802 19.5562 8.10904 19.2285 8.3623L13.6814 12.6486C12.691 13.4138 11.3089 13.4138 10.3185 12.6486L4.77144 8.3623C4.44367 8.10904 4.38328 7.63802 4.63655 7.31026C4.88982 6.98249 5.36083 6.9221 5.6886 7.17537L11.2356 11.4616C11.6858 11.8095 12.3141 11.8095 12.7642 11.4616L18.3113 7.17537C18.6391 6.9221 19.1101 6.98249 19.3633 7.31026Z" fill="#2563eb"></path>
                </svg>
              </div>
              <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Subscribe to Newsletter</h3>
                <div class="mt-2">
                  <p class="text-sm text-gray-500">Enter your email to subscribe to our newsletter.</p>
                  <input type="email" v-model="email" class="mt-2 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring focus:border-blue-500" placeholder="name@example.com">
                </div>
              </div>
            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <button @click="subscribeToNewsletter" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">Subscribe</button>
            <button @click="closeModal" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      showModal: false,
      email: ''
    };
  },
  methods: {
    closeModal() {
      this.showModal = false;
    },
    subscribeToNewsletter() {
      // Handle the subscription logic here
      console.log("Subscribed with email:", this.email);
      this.closeModal();
    }
  }
};
</script>

<style scoped>
/* Add any additional styles here */
</style>