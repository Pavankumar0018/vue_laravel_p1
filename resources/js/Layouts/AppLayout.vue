<template>
    <div class="min-h-screen mesh-bg">
        <!-- Navigation -->
        <NavBar :is-mobile-menu-open="isMobileMenuOpen" @toggle-mobile-menu="toggleMobileMenu" />
        
        <!-- Main Content -->
        <main>
            <slot />
        </main>
        
        <!-- Footer -->
        <FooterComponent />
        
    </div>
</template>

<script setup>
import { ref } from 'vue'
import NavBar from '@/components/Navbar.vue'
import FooterComponent from '@/components/Footer.vue'

const isMobileMenuOpen = ref(false)

const toggleMobileMenu = () => {
    isMobileMenuOpen.value = !isMobileMenuOpen.value
}

const closeSidebar = () => {
    isMobileMenuOpen.value = false
}
</script>

<style scoped>
.mesh-bg {
    background-image: 
        radial-gradient(at 40% 20%, hsla(228,100%,74%,1) 0px, transparent 50%),
        radial-gradient(at 80% 0%, hsla(189,100%,56%,1) 0px, transparent 50%),
        radial-gradient(at 40% 40%, hsla(340,100%,76%,1) 0px, transparent 50%),
        radial-gradient(at 0% 50%, hsla(356,100%,93%,1) 0px, transparent 50%),
        radial-gradient(at 80% 50%, hsla(340,100%,76%,1) 0px, transparent 50%),
        radial-gradient(at 0% 100%, hsla(22,100%,77%,1) 0px, transparent 50%),
        radial-gradient(at 80% 100%, hsla(242,100%,70%,1) 0px, transparent 50%),
        radial-gradient(at 0% 0%, hsla(343,100%,76%,1) 0px, transparent 50%);
}
</style>