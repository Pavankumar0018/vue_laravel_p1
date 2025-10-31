<!-- About.vue -->
<template>
    <AppLayout>
        <Head title="About - ModernApp" />
        
        <section class="pt-24 pb-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">About ModernApp</h1>
                    <p class="text-xl text-gray-200 leading-relaxed">
                        We're building the future of web experiences with cutting-edge design and technology.
                    </p>
                </div>
                
                <div class="glass p-8 rounded-3xl">
                    <h2 class="text-2xl font-bold text-white mb-6">Our Mission</h2>
                    <p class="text-gray-200 leading-relaxed mb-6">
                        At ModernApp, we believe in creating digital experiences that inspire and engage. 
                        Our team combines creativity with technical expertise to build applications that 
                        not only look beautiful but perform exceptionally.
                    </p>
                    <p class="text-gray-200 leading-relaxed">
                        We're passionate about modern web technologies, user experience design, and 
                        creating solutions that make a real difference in people's lives.
                    </p>
                </div>
            </div>
        </section>
    </AppLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
</script>