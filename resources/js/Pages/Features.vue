<!-- Features.vue -->
<template>
    <AppLayout>
        <Head title="Features - ModernApp" />
        
        <section class="pt-24 pb-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Powerful Features</h1>
                    <p class="text-xl text-gray-200 leading-relaxed max-w-3xl mx-auto">
                        Discover all the amazing features that make ModernApp the perfect choice for your next project.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="glass p-8 rounded-2xl">
                        <div class="w-12 h-12 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-xl mb-6 flex items-center justify-center">
                            <BoltIcon class="w-6 h-6 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Lightning Fast</h3>
                        <p class="text-gray-200">Optimized performance with Vue 3 and modern build tools for blazing fast user experiences.</p>
                    </div>
                    
                    <div class="glass p-8 rounded-2xl">
                        <div class="w-12 h-12 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-xl mb-6 flex items-center justify-center">
                            <DevicePhoneMobileIcon class="w-6 h-6 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Responsive Design</h3>
                        <p class="text-gray-200">Beautiful designs that work perfectly on all devices, from mobile to desktop.</p>
                    </div>
                    
                    <div class="glass p-8 rounded-2xl">
                        <div class="w-12 h-12 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-xl mb-6 flex items-center justify-center">
                            <ShieldCheckIcon class="w-6 h-6 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Secure</h3>
                        <p class="text-gray-200">Built with security best practices and modern authentication systems.</p>
                    </div>
                    
                    <div class="glass p-8 rounded-2xl">
                        <div class="w-12 h-12 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-xl mb-6 flex items-center justify-center">
                            <CogIcon class="w-6 h-6 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Customizable</h3>
                        <p class="text-gray-200">Highly customizable components and themes to match your brand perfectly.</p>
                    </div>
                    
                    <div class="glass p-8 rounded-2xl">
                        <div class="w-12 h-12 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-xl mb-6 flex items-center justify-center">
                            <CloudIcon class="w-6 h-6 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Cloud Ready</h3>
                        <p class="text-gray-200">Deploy anywhere with modern cloud infrastructure and scalability built-in.</p>
                    </div>
                    
                    <div class="glass p-8 rounded-2xl">
                        <div class="w-12 h-12 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-xl mb-6 flex items-center justify-center">
                            <ChatBubbleLeftRightIcon class="w-6 h-6 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">24/7 Support</h3>
                        <p class="text-gray-200">Get help when you need it with our dedicated support team available around the clock.</p>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import { 
    BoltIcon, 
    DevicePhoneMobileIcon, 
    ShieldCheckIcon, 
    CogIcon, 
    CloudIcon, 
    ChatBubbleLeftRightIcon 
} from '@heroicons/vue/24/outline'
</script>
