import { createApp } from 'vue'
import store from './store'
import router from './router'
import './style.css'


import MainHeading from './components/UI/MainHeading.vue'
import SubHeading from './components/UI/SubHeading.vue'
import BaseButton from './components/UI/BaseButton.vue'
import InfoCard from './components/UI/InfoCard.vue'
import HorizontalBorder from './components/UI/HorizontalBorder.vue'
import ExpandableSearch from "./components/UI/ExpandableSearch.vue";
import NormalSearch from "./components/UI/NormalSearch.vue";
import AccountModal from "./components/UI/AccountModal.vue";
import EnrollConfirm from "./components/UI/EnrollConfirm.vue";
import ViewButton from "./components/UI/ViewButton.vue";
import CountCard from "./components/UI/CountCard.vue";
import CrudLayout from "./components/Layouts/CrudLayout.vue";


import App from './App.vue'


createApp(App)
    .use(store)
    .use(router)
    .component('base-button', BaseButton)
    .component('main-heading', MainHeading)
    .component('sub-heading', SubHeading)
    .component('normal-search', NormalSearch)
    .component('expandable-search', ExpandableSearch)
    .component('info-card', InfoCard)
    .component('horizontal-border', HorizontalBorder)
    .component('account-modal', AccountModal)
    .component('enroll-confirm', EnrollConfirm)
    .component('view-button', ViewButton)
    .component('count-card', CountCard)
    .component('crud-layout', CrudLayout)
    .mount('#app')

