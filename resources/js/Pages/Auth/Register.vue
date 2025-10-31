<template>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-900 via-purple-900 to-indigo-900">
        <div class="max-w-md w-full space-y-8 p-8">
            <div class="text-center">
                <h2 class="mt-6 text-3xl font-extrabold text-white">
                    Create your account
                </h2>
                <p class="mt-2 text-sm text-gray-300">
                    Or
                    <a href="/login" class="font-medium text-blue-400 hover:text-blue-300">
                        sign in to your existing account
                    </a>
                </p>
            </div>
            
            <form class="mt-8 space-y-6" @submit.prevent="submitForm">
                <div class="rounded-md shadow-sm space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-300 mb-2">
                            Full Name
                        </label>
                        <input
                            id="name"
                            name="name"
                            type="text"
                            v-model="form.name"
                            required
                            class="appearance-none rounded-lg relative block w-full px-3 py-3 border border-gray-600 placeholder-gray-400 text-white bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent focus:z-10 sm:text-sm"
                            placeholder="Enter your full name"
                        />
                        <div v-if="errors.name" class="mt-1 text-sm text-red-400">
                            {{ errors.name }}
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-2">
                            Email address
                        </label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            v-model="form.email"
                            required
                            class="appearance-none rounded-lg relative block w-full px-3 py-3 border border-gray-600 placeholder-gray-400 text-white bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent focus:z-10 sm:text-sm"
                            placeholder="Enter your email"
                        />
                        <div v-if="errors.email" class="mt-1 text-sm text-red-400">
                            {{ errors.email }}
                        </div>
                    </div>
                    
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-300 mb-2">
                            Password
                        </label>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            v-model="form.password"
                            required
                            class="appearance-none rounded-lg relative block w-full px-3 py-3 border border-gray-600 placeholder-gray-400 text-white bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent focus:z-10 sm:text-sm"
                            placeholder="Create a password"
                        />
                        <div v-if="errors.password" class="mt-1 text-sm text-red-400">
                            {{ errors.password }}
                        </div>
                    </div>
                    
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-300 mb-2">
                            Confirm Password
                        </label>
                        <input
                            id="password_confirmation"
                            name="password_confirmation"
                            type="password"
                            v-model="form.password_confirmation"
                            required
                            class="appearance-none rounded-lg relative block w-full px-3 py-3 border border-gray-600 placeholder-gray-400 text-white bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent focus:z-10 sm:text-sm"
                            placeholder="Confirm your password"
                        />
                        <div v-if="errors.password_confirmation" class="mt-1 text-sm text-red-400">
                            {{ errors.password_confirmation }}
                        </div>
                    </div>
                </div>

                <div>
                    <button
                        type="submit"
                        :disabled="processing"
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:opacity-50 disabled:cursor-not-allowed transition duration-150 ease-in-out"
                    >
                        <span v-if="processing" class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </span>
                        {{ processing ? 'Creating account...' : 'Create account' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: ''
})

const errors = ref({})
const processing = ref(false)

const submitForm = () => {
    processing.value = true
    errors.value = {}
    
    form.post('/register', {
        onSuccess: () => {
            // Redirect will be handled by Laravel
        },
        onError: (error) => {
            errors.value = error
            processing.value = false
        },
        onFinish: () => {
            processing.value = false
        }
    })
}
</script>

