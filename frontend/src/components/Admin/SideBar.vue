<template>
    <div style="background-image: url('https://tailwindcss.com/_next/static/media/0.2a25f0af.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;"
        :class="[
            'bg-white/50 backdrop-blur-sm  duration-150 rounded-2xl pb-5 relative z-50',
            isOpen ? 'w-72' : 'w-0',
        ]"
    >
        <!-- @mouseenter="isOpen = true"
        @mouseleave="isOpen = false" -->
        <button
            @click="isOpen = !isOpen"
            class="bg-white/50 backdrop-blur-md py-1.5 rounded-r-md text-gray-400 absolute -right-4 top-5"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="1em"
                height="1em"
                preserveAspectRatio="xMidYMid meet"
                viewBox="0 0 24 24"
            >
                <path
                    fill="currentColor"
                    d="M15.125 21.1L6.7 12.7q-.15-.15-.212-.325q-.063-.175-.063-.375t.063-.375q.062-.175.212-.325l8.425-8.425q.35-.35.875-.35t.9.375q.375.375.375.875t-.375.875L9.55 12l7.35 7.35q.35.35.35.862q0 .513-.375.888t-.875.375q-.5 0-.875-.375Z"
                />
            </svg>
        </button>

        <!-- <log-out title="Log Out"></log-out> -->

        <div class="overflow-auto scroll h-[calc(100vh-60px)]">
            <div class="px-8 py-3 sticky top-0 bg-white rounded-sm shadow-md">
                <a class="block">
                    <div class="flex items-center">
                        <img
                            class="inline-block ring-2 ring-bus bg-white h-11 w-11 rounded-full"
                            src="http://pstu.ac.bd/images/settings/pstulogo.png"
                            alt="pstu logo"
                        />
                        <div class="ml-3 whitespace-nowrap overflow-hidden">
                            <p
                                class="text-xs font-medium text-gray-500 group-hover:text-gray-700"
                            >
                                Admin of
                            </p>
                            <p
                                class="text-lg font-bold text-bus group-hover:text-gray-900"
                            >
                                CSE | PSTU
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="px-6 pt-3">
                <span class="text-sm font-semibold text-faculty">
                    Manage Faculty
                </span>
            </div>
            <ul :class="[isOpen ? 'px-3' : 'px-8', 'space-y-1']">
                <!-- <SideBarLink icon="ic:round-dashboard-customize" name="Dashboard"/> -->
                <SideBarLink icon="mdi:home-floor-l" name="Rooms" />
                <SideBarLink icon="bi:building-fill" name="Departments"/>
                <SideBarLink icon="ion:book-sharp" name="Courses" />
                <SideBarLink icon="mdi:teacher" name="Teachers" />
            </ul>
            <div class="px-6">
                <span
                    class="inline-block border-b border-faculty w-full"
                ></span>
            </div>
            <div class="px-6 py-3 whitespace-nowrap">
                <span class="text-sm font-semibold text-bus">
                    Manage Pages
                </span>
                <ul class="bg-white p-1.5 mt-2 rounded-2xl">
                    <SideBarLink
                        iconBg
                        hoverVarient="faculty"
                        name="About"
                        icon="mdi:about-circle-outline"
                    />
                    <SideBarLink
                        iconBg
                        hoverVarient="faculty"
                        name="Events"
                        href="Event"
                        icon="clarity:event-solid"
                    />
                    <SideBarLink
                        iconBg
                        hoverVarient="faculty"
                        name="Notices"
                        icon="pepicons-print:bulletin-notice"
                    />
                    <SideBarLink
                        iconBg
                        hoverVarient="faculty"
                        name="Publications"
                        icon="game-icons:archive-research"
                    />
                    <SideBarLink
                        iconBg
                        hoverVarient="faculty"
                        name="Projects"
                        icon="file-icons:microsoft-project"
                    />
                </ul>
            </div>
            <div class="px-6 whitespace-nowrap">
                <!-- <ul
                    :class="[
                        'bg-white max-w-full scroll overflow-auto p-1.5 mt-2 rounded-2xl',
                        isOpen ? 'flex' : '',
                    ]"
                >
                    <SideBarLink
                        iconClass="w-6 h-6 px-0.5"
                        icon="majesticons:basket-2"
                    />
                    <SideBarLink
                        iconClass="w-6 h-6 px-0.5"
                        icon="majesticons:basket-2"
                    />
                    <SideBarLink
                        iconClass="w-6 h-6 px-0.5"
                        icon="majesticons:basket-2"
                    />
                    <SideBarLink
                        iconClass="w-6 h-6 px-0.5"
                        icon="majesticons:basket-2"
                    />
                </ul> -->
                <div
                    :class="[
                        'max-w-full scroll overflow-auto mt-2 rounded-2xl flex flex-col items-center ',
                        isOpen && 'p-2 py-4 bg-white',
                    ]"
                >
                    <button class="bg-bus hover:bg-faculty hover:border-bus text-white rounded-full p-3">
                        <Icon class="w-5 h-5" icon="bi:pen" />
                    </button>
                    <div v-if="isOpen" class="mt-2 text-center">
                        <h5 class="text-xl font-bold text-gray-600">
                            Update Settings
                        </h5>

                        <horizontal-border title="OR"></horizontal-border>
                        <a href="">
                            <span class="text-xs text-faculty hover:text-bus hover:underline font-semibold"
                            >Reset to Default</span
                        >
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { Icon } from "@iconify/vue";
import { ref } from "vue";
import SideBarLink from "./SideBarLink.vue";

const isOpen = ref(true);
</script>
