<template>
    <li>
        <router-link
            :to="{name: href}"
            :class="[
                'text-gray-500 flex items-center whitespace-nowrap overflow-hidden rounded-2xl py-2 px-3',
                hoverVarients[hoverVarient],
            ]"
        >
            <Icon
                :class="[
                    'shrink-0',
                    iconBg && 'bg-gray-200 p-1 rounded-full',
                    iconClass,
                ]"
                :icon="icon"
            />
            <div
                v-if="name"
                class="ml-3 font-semibold flex justify-between w-full items-center"
            >
                <span>{{ name }}</span>
                <slot />
            </div>
        </router-link>
    </li>
</template>
<script setup>
import { Icon } from "@iconify/vue";
const hoverVarients = {
    gray: "hover:bg-gray-200",
    blue: "hover:bg-white hover:text-black hover:rounded-none hover:shadow-md hover:border-l-4 hover:border-bus",
    faculty: "hover:bg-gradient-to-r hover:from-faculty-40 hover:to-white hover:text-black",
};

defineProps({
    href: {
        type: String,

    },
    hoverVarient: {
        type: String,
        default: "blue",
    },
    icon: {
        type: String,
        default: "ic:round-dashboard-customize",
    },
    iconClass: {
        type: String,
        default: "w-7 h-7",
    },
    iconBg: Boolean,
    name: String,
});
</script>
