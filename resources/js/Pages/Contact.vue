<template>
    <AppLayout>
        <Head title="Contact - ModernApp" />
        
        <section class="pt-24 pb-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Get In Touch</h1>
                    <p class="text-xl text-gray-200 leading-relaxed">
                        Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="glass-dark p-8 rounded-3xl">
                        <h2 class="text-2xl font-bold text-white mb-6">Contact Information</h2>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <EnvelopeIcon class="w-6 h-6 text-primary-400 mr-4" />
                                <span class="text-gray-200">hello@modernapp.com</span>
                            </div>
                            <div class="flex items-center">
                                <PhoneIcon class="w-6 h-6 text-primary-400 mr-4" />
                                <span class="text-gray-200">+1 (555) 123-4567</span>
                            </div>
                            <div class="flex items-center">
                                <MapPinIcon class="w-6 h-6 text-primary-400 mr-4" />
                                <span class="text-gray-200">123 Innovation Street, Tech City, TC 12345</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="glass p-8 rounded-3xl">
                        <form @submit.prevent="submitForm" class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-white mb-2">Name</label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    v-model="form.name"
                                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent"
                                    placeholder="Your name"
                                    required
                                />
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-white mb-2">Email</label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    v-model="form.email"
                                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent"
                                    placeholder="your.email@example.com"
                                    required
                                />
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-white mb-2">Message</label>
                                <textarea 
                                    id="message" 
                                    rows="4" 
                                    v-model="form.message"
                                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent resize-none"
                                    placeholder="Your message..."
                                    required
                                ></textarea>
                            </div>
                            <button 
                                type="submit"
                                class="w-full bg-gradient-to-r from-primary-500 to-secondary-500 hover:from-primary-600 hover:to-secondary-600 text-white px-8 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105"
                            >
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import { ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import { EnvelopeIcon, PhoneIcon, MapPinIcon } from '@heroicons/vue/24/outline'

const form = ref({
    name: '',
    email: '',
    message: ''
})

const submitForm = () => {
    // Handle form submission here
    console.log('Form submitted:', form.value)
    // You can use Inertia.js form helper or axios to submit the form
}
</script>