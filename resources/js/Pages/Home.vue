<template>
    <AppLayout>
        <Head title="Home - ModernApp" />
        
        <!-- Hero Section -->
        <HeroSection />
        
        <!-- Features Section -->
        <FeaturesSection :features="features" />
        
        <!-- Cards Section -->
        <CardsSection :stats="stats" />
    </AppLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import HeroSection from '@/Components/HeroSection.vue'
import FeaturesSection from '@/Components/FeaturesSection.vue'
import CardsSection from '@/Components/CardsSection.vue'

defineProps({
    features: Array,
    stats: Array
})
</script>