
<template>
<footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-4 text-center">
        <div class="mb-6">
            <h3 class="text-2xl font-bold mb-4">CustomerCare Support</h3>
            <p class="text-gray-400">Your satisfaction is our top priority</p>
        </div>
        <div class="flex justify-center space-x-6 mb-6">
            <router-link class="text-gray-300 hover:text-white">About Us</router-link>
            <router-link class="text-gray-300 hover:text-white">Contact</router-link>
            <router-link class="text-gray-300 hover:text-white">Privacy Policy</router-link>
        </div>
        <p class="text-gray-500">&copy; 2025 CustomerCare Support. All Rights Reserved.</p>
    </div>
</footer>
</template>

<script>
export default {
    name : 'FooterComponent'
}
</script>