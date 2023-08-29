<script setup>
import store from "../../store";
import { ref, watch, computed } from "vue";
import { useRoute, useRouter } from "vue-router";

const route = useRoute();
const router = useRouter();

const eventLoading = computed(() => store.state.currentEvent.loading);

let model = ref({
    title: "",
    start_date: "",
    end_date: "",
    event_type_id: null,
    place: "",
    start_time: null,
    end_time: null,
    registration_link: null,
    facebook_link: null,
    about: "",
});

watch(
    () => store.state.currentEvent.data,
    (newVal, oldVal) => {
        model.value = {
            ...JSON.parse(JSON.stringify(newVal)),
        };
    }
);

if (route.params.id) {
    store.dispatch("getEvent", route.params.id);
}

function saveEvent() {
    store.dispatch("saveEvent", model.value).then(({ data }) => {
        router.push({
            name: "EventUpdate",
            params: { id: data.data.id },
        });
    });
}
</script>

<template>
    <main class="">
        <div class="relative p-4 w-full max-w-3xl h-full md:h-auto">
            <!-- Modal content -->
            <div
                class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5"
            >
                <!-- Modal header -->
                <div
                    class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600"
                >
                    <h3
                        class="text-lg font-semibold text-gray-900 dark:text-white"
                    >
                        {{ route.params.id ? model.title : "Create an Event" }}
                    </h3>
                </div>
                <div v-if="eventLoading" class="flex justify-center text-black p-10 border-2 border-bus">
                    Loading..
                </div>
                <!-- Modal body -->
                <form v-else @submit.prevent="saveEvent">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label
                                for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Event Name</label
                            >
                            <input
                                type="text"
                                name="title"
                                id="title"
                                v-model="model.title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Type event name"
                            />
                        </div>

                        <div>
                            <label
                                for="type"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Which Type Event?</label
                            >
                            <select
                                id="type"
                                name="event_type_id"
                                v-model="model.event_type_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            >
                                <option selected="">Select type</option>
                                <option value=""></option>
                            </select>
                        </div>

                        <div>
                            <label
                                for="start_date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Starting Date</label
                            >
                            <input
                                type="date"
                                name="start_date"
                                id="start_date"
                                v-model="model.start_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Event start date"
                            />
                        </div>

                        <div>
                            <label
                                for="end_date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Ending date</label
                            >
                            <input
                                type="date"
                                name="end_date"
                                id="end_date"
                                v-model="model.end_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Even end date"
                            />
                        </div>

                        <div>
                            <label
                                for="reg_link"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Registration Link</label
                            >
                            <input
                                type="url"
                                name="registration_link"
                                id="reg_link"
                                v-model="model.registration_link"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Link if any"
                            />
                        </div>

                        <div>
                            <label
                                for="fb_link"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Facebook Link</label
                            >
                            <input
                                type="url"
                                name="facebook_link"
                                id="fb_link"
                                v-model="model.facebook_link"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="If any social details"
                            />
                        </div>

                        <div
                            class="grid gap-4 sm:col-span-2 md:gap-6 sm:grid-cols-3"
                        >
                            <div>
                                <label
                                    for="start_time"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Starting Time</label
                                >
                                <input
                                    type="text"
                                    name="start_time"
                                    id="start_time"
                                    v-model="model.start_time"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Event start time (optional)"
                                />
                            </div>

                            <div>
                                <label
                                    for="end_time"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Ending Time</label
                                >
                                <input
                                    type="text"
                                    name="end_time"
                                    id="end_time"
                                    v-model="model.end_time"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Event end time (optional)"
                                />
                            </div>

                            <div>
                                <label
                                    for="place"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Venue of the Event</label
                                >
                                <input
                                    type="text"
                                    name="place"
                                    id="place"
                                    v-model="model.place"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Event Place"
                                />
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label
                                for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Description Shortly</label
                            >
                            <textarea
                                id="description"
                                rows="4"
                                name="about"
                                v-model="model.about"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Write event description here"
                            ></textarea>
                        </div>
                    </div>

                    <div
                        class="items-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4"
                    >
                        <button
                            type="submit"
                            class="w-full sm:w-auto justify-center text-white inline-flex bg-bus hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                        >
                            Save
                        </button>

                        <router-link
                            :to="{ name: 'DataTable' }"
                            class="w-full justify-center sm:w-auto text-gray-500 inline-flex items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                        >
                            <svg
                                class="mr-1 -ml-1 w-5 h-5"
                                fill="currentColor"
                                viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Discard
                        </router-link>
                    </div>
                </form>
            </div>
        </div>
    </main>
</template>
