<template>
    <header>
        <div class="bg-blue-300 py-2 px-4 flex justify-between items-center">
            <h1 class="text-2xl">Glenn Meering</h1>
            <svg @click="toggleDropDownMenu" v-if="DropDownIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor"
                 class="h-10 w-10 z-10 p-1 bg-white rounded">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
            <svg @click="toggleDropDownMenu" v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor"
                 class="h-10 w-10">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </div>
        <div>
            <div v-if="DropDownIsOpen" @click="toggleDropDownMenu" class="w-screen h-screen bg-black bg-opacity-25 absolute top-0 left-0"></div>
            <div class="absolute top-0 w-96 bg-gray-800 h-screen text-white text-2xl z-10 transition duration-150 ease-in-out"
                 :class="DropDownIsOpen ? 'left-0' : '-left-96'">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Skills</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Education</a></li>
                    <li><a href="#">Contact Me</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: "MainHeader",
    data() {
        return {
            DropDownIsOpen: false,
        }
    },
    methods: {
        toggleDropDownMenu() {
            this.DropDownIsOpen = !this.DropDownIsOpen;
        }
    }
}
</script>

<style scoped>

</style>
