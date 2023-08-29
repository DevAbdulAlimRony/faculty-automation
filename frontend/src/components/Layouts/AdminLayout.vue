<template>
        <div>
            <dashboard-header></dashboard-header>
            <side-bar></side-bar>

            <router-view></router-view>

            <dashboard-footer title="&#169; All Rights Reserved - CSE | PSTU"></dashboard-footer>
        </div>
</template>

<script>
    import DashboardHeader from "../Admin/DashboardHeader.vue";
    import SideBar from "../Admin/SideBar.vue";
    import DashboardFooter from "../Admin/DashboardFooter.vue";

    export default {
        components: {
            DashboardHeader, SideBar, DashboardFooter
        },
    }
</script>
