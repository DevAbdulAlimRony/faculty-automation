<template>
    <!-- Exclusive Card Created by Abdul Alim- CSE 15th PSTU -->
    <div class="w-52 h-44 rounded-lg bg-white flex flex-col justify-center items-center p-2 shadow-sm shadow-bus-45 relative border-b-4 border-bus-45">

        <h2 class="font-bold text-black font-stylish text-normal text-center">
            {{ title }}
        </h2>

            <div class="w-32 h-32 ml-5">
                <slot></slot>
            </div>

            <div class="w-12 h-12 rounded-full bg-faculty text-white absolute left-3 bottom-5 flex items-center text-center justify-center font-bold">
                {{ count }}
            </div>
    </div>
</template>

<script>
    export default {
        props: ['title', 'count']
    }
</script>