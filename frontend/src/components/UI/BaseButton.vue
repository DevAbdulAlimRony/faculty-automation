<template>
    <button :type="type" :class="mode">
        <slot></slot>
    </button>
</template>

<script>
    export default {
        props: ['type', 'mode']
    }
</script>

<style>

</style>
