<template>
    <a href="#">
        <div
        class="sticky bottom-0 bg-bus text-white text-lg font-bold py-3 m-0 drop-shadow-md w-72 flex items-center justify-center hover:border-t-4 hover:border-faculty group transition-all duration-100"
    >

        {{ title }}

        <svg
            class="w-5 h-5 text-white ml-2 group-hover:ml-0"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M14 5l7 7m0 0l-7 7m7-7H3"
            ></path>
        </svg>
    </div>
    </a>
</template>

<script>
export default {
    props: ["title"],
};
</script>
