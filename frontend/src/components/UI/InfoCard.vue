<template>
    <div :class="mode">
        <slot></slot>

        <h2 class="text-3xl font-title font-bold">
            {{ title }}
        </h2>
        <p class="mb-2">
            {{ subtitle }}
        </p>
        <a
            href="#"
            class="link-icon inline-flex items-center text-sm font-medium text-center text-black focus:outline-none"
        >
            <svg
                class="w-3.5 h-3.5 ml-2 text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 10"
            >
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9"
                />
            </svg>
        </a>
    </div>
</template>

<script>
export default {
    props: ["title", "subtitle", "mode"],
};
</script>

<style scoped></style>
