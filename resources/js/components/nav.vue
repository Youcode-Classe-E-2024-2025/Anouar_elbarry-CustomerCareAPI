<template>
<nav class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="text-2xl font-bold text-blue-600">
            CustomerCare
        </div>
        <div class="space-x-4">
            <router-link  to="/" class="nav-link nav-item text-gray-700 hover:text-blue-600">Home</router-link>
            <router-link  to="/tickets" class="nav-link nav-item text-gray-700 hover:text-blue-600">tickets</router-link>
            <router-link  class="nav-link nav-item text-gray-700 hover:text-blue-600">Contact</router-link>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Login
            </button>
        </div>
    </div>
</nav>
</template>

<script>
export default {
    name : 'NavComponent'
}
</script>