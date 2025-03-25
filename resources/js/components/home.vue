<template>
<!-- Support Services -->
<section class="bg-white py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Our Support Services</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-100 p-6 rounded-lg text-center">
                <div class="mb-4 flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-4">Technical Support</h3>
                <p class="text-gray-600">Comprehensive technical assistance for all your product needs.</p>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg text-center">
                <div class="mb-4 flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-4">Billing Inquiries</h3>
                <p class="text-gray-600">Quick and transparent resolution of all billing-related questions.</p>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg text-center">
                <div class="mb-4 flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-4">Customer Support</h3>
                <p class="text-gray-600">Dedicated support team ready to assist you with any concerns.</p>
            </div>
        </div>
    </div>
</section>
</template>

<script>
export default {
  data() {
    return {
      title: 'Welcome to Vue 3'
    }
  }
}
</script>

<style scoped>
h1 {
  color: #42b983;
}
</style>