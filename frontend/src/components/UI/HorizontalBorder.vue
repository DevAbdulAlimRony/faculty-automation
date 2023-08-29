<template>
    <div class="mt-6 grid grid-cols-3 items-center text-gray-400">
        <hr class="border-gray-400" />
        <p class="text-center text-sm">{{ title }}</p>
        <hr class="border-gray-400" />
    </div>
</template>

<script>
    export default {
    props: ["title"],
    };
</script>
