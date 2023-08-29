<template>
        <footer class="w-full h-10 text-center bg-bus-5 absolute bottom-0 z-20 text-black font-bold font-stylish flex justify-between items-center">

        <div class="w-71">
           <log-out title="Log Out"></log-out>
        </div>

        <div class="px-8">
            {{ title }}
        </div>
    </footer>
</template>

<script>
    import LogOut from "./LogOut.vue";
    export default {
    props: ["title"],

    components: {
            LogOut,
        },
    };
</script>
