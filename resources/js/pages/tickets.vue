<template>
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
                <h2 class="text-2xl font-bold text-gray-800">Your Support Tickets</h2>
            </div>
            
            <div v-if="tickets.length === 0" class="p-6 text-center text-gray-500">
                No tickets found. Create a new support request.
            </div>
            
            <div v-else class="divide-y divide-gray-200">
                <div v-for="ticket in tickets" :key="ticket.id" class="px-6 py-4 hover:bg-gray-50 transition duration-150">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">{{ ticket.title }}</h3>
                            <p class="text-sm text-gray-600 mt-1">{{ ticket.description }}</p>
                        </div>
                        
                        <div>
                            <span 
                                :class="{
                                    'bg-green-100 text-green-800': ticket.status === 'Resolved',
                                    'bg-yellow-100 text-yellow-800': ticket.status === 'In Progress',
                                    'bg-red-100 text-red-800': ticket.status === 'Open'
                                }"
                                class="px-3 py-1 rounded-full text-xs font-medium"
                            >
                                {{ ticket.status }}
                            </span>
                        </div>
                    </div>
                    
                    <div class="mt-3 text-sm text-gray-500">
                        <span>Created: {{ formatDate(ticket.created_at) }}</span>
                        <span class="ml-4">Last Updated: {{ formatDate(ticket.updated_at) }}</span>
                    </div>
                </div>
            </div>
            
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                <button 
                    @click="openCreateTicketModal" 
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300"
                >
                    Create New Ticket
                </button>
            </div>
        </div>

        <!-- Create Ticket Modal -->
        <div 
            v-if="isCreateTicketModalOpen" 
            class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
        >
            <div class="bg-white rounded-lg shadow-xl w-full max-w-md p-6">
                <h2 class="text-2xl font-bold mb-4 text-gray-800">Create New Support Ticket</h2>
                
                <form @submit.prevent="submitTicket">
                    <div class="mb-4">
                        <label 
                            for="ticket-title" 
                            class="block text-gray-700 text-sm font-bold mb-2"
                        >
                            Title
                        </label>
                        <input 
                            id="ticket-title"
                            v-model="newTicket.title"
                            type="text" 
                            required
                            placeholder="Briefly describe your issue"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                    </div>

                    <div class="mb-4">
                        <label 
                            for="ticket-description" 
                            class="block text-gray-700 text-sm font-bold mb-2"
                        >
                            Description
                        </label>
                        <textarea 
                            id="ticket-description"
                            v-model="newTicket.description"
                            rows="4"
                            required
                            placeholder="Provide detailed information about your issue"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        ></textarea>
                    </div>

                    <div class="flex justify-end space-x-4">
                        <button 
                            type="button"
                            @click="closeCreateTicketModal"
                            class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition duration-300"
                        >
                            Cancel
                        </button>
                        <button 
                            type="submit"
                            class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300"
                        >
                            Submit Ticket
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data() {
        return {
            isCreateTicketModalOpen: false,
            newTicket: {
                title: '',
                description: ''
            },
            tickets: [
                {
                    id: 1,
                    title: 'Website Performance Issue',
                    description: 'Experiencing slow page load times during peak hours',
                    status: 'In Progress',
                    created_at: '2024-03-20T10:30:00Z',
                    updated_at: '2024-03-25T14:45:00Z'
                },
                {
                    id: 2,
                    title: 'Login Authentication Problem',
                    description: 'Unable to log in with my credentials',
                    status: 'Open',
                    created_at: '2024-03-22T15:20:00Z',
                    updated_at: '2024-03-22T15:20:00Z'
                },
                {
                    id: 3,
                    title: 'Billing Inquiry Resolved',
                    description: 'Clarification on recent invoice',
                    status: 'Resolved',
                    created_at: '2024-03-15T09:10:00Z',
                    updated_at: '2024-03-18T11:30:00Z'
                }
            ]
        }
    },
    methods: {
        formatDate(dateString) {
            return new Date(dateString).toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'short',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            })
        },
        openCreateTicketModal() {
            this.isCreateTicketModalOpen = true
        },
        closeCreateTicketModal() {
            this.isCreateTicketModalOpen = false
            // Reset form
            this.newTicket = {
                title: '',
                description: ''
            }
        },
        submitTicket() {
            // Implement actual API call to backend
             axios.post('/api/tickets', this.newTicket)
                 .then(response => {
                     this.tickets.unshift(response.data)
                     this.closeCreateTicketModal()
                 })
                 .catch(error => {
                     console.error('Error creating ticket:', error)
                 })
        }
    }
}
</script>
