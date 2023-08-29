<script setup>
import DataTable from "../../components/Layouts/CrudLayout.vue";

import store from "../../store";
import { computed } from "vue";

const events = computed(() => store.state.events.data);

store.dispatch('getEvents');

function deleteEvent(event) {
    if(
        confirm(
            "Are you sure? This operation can't be undone"
        )
    ) {
        store.dispatch("deleteEvent", event.id).then(() => {
           store.dispatch('getEvents');
        });

    }
}


// export default {
//     components: {
//         DataTable,
//     },

//     data() {
//         return {
//             events:[],
//         }
//     },

//     methods: {
//         allEvents(){
//             axios.get("http://127.0.0.1:8000/api/v1/admin/events/")
//                 .then(({ data }) => (this.events = data))
//                 .catch();
//         },
//         created() {
//             this.allEvents();
//         },
//     },
// };
</script>

<template>
    <data-table table_title="All Events" per_page="2" total_data="10">

        <template v-slot:create-button>
            <div class="flex-shrink-0 flex flex-col items-start md:flex-row md:items-center lg:justify-end space-y-3 md:space-y-0 md:space-x-3">
                            <router-link :to="{name: 'EventCreate'}" class="flex-shrink-0 inline-flex items-center justify-center py-2 px-3 text-xs font-medium text-bus focus:outline-none bg-white border border-bus hover:text-white hover:bg-bus focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 shadow-md hover:shadow-none transition duration-75">
                                <svg class="h-3.5 w-3.5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                </svg>
                                Add Event
                            </router-link>
                        </div>
        </template>

        <template v-slot:heading-data>
            <th scope="col" class="p-4">Event Name</th>
            <th scope="col" class="p-4">Category</th>
            <th scope="col" class="p-4">Start Date</th>
            <th scope="col" class="p-4">End Date</th>
            <th scope="col" class="p-4">Place</th>
            <th class="text-center">Actions</th>
        </template>

        <template v-slot:main-data>
            <tr
                class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700"
                v-for="event in events"
                :key="event.id"
            >
                <td class="p-4 w-4">
                    <div class="flex items-center">
                        <input
                            id="checkbox-table-search-1"
                            type="checkbox"
                            onclick="event.stopPropagation()"
                            class="w-4 h-4 text-primary-600 bg-gray-100 rounded border-gray-300 focus:ring-bus focus:bg-bus dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        />
                        <label for="checkbox-table-search-1" class="sr-only"
                            >checkbox</label
                        >
                    </div>
                </td>

                <td
                    scope="row"
                    class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                >
                    <div class="flex items-center mr-3">
                        {{event.title}}
                    </div>
                </td>
                <td class="px-4 py-3">
                    <span
                        class="bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300"
                        >{{event.event_type.title}}</span
                    >
                </td>
                <td
                    class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                >
                    <div class="flex items-center">
                        <div
                            class="h-4 w-4 rounded-full inline-block mr-2 bg-bus"
                        ></div>
                        {{event.start_date}}
                    </div>
                </td>
                <td
                    class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white h-4 w-4 rounded-full inline-block mr-2"
                >
                <div
                            class="h-4 w-4 rounded-full inline-block mr-2 bg-faculty"
                        ></div>
                    {{event.end_date}}
                </td>

                <td
                    class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                >
                   {{event.place}}
                </td>

                <!-- Edit and Preview -->
                <td
                    class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center"
                >
                    <div class="flex items-center space-x-4 justify-center">

                        <router-link :to="{name: 'EventUpdate', params: {id: event.id}}" class="py-2 px-3 flex items-center text-sm font-medium text-center text-black bg-white rounded-lg hover:bg-bus hover:text-white focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 mr-2 -ml-0.5"
                                viewbox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"
                                />
                                <path
                                    fill-rule="evenodd"
                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Edit
                        </router-link>

                        <!-- <button
                            type="button"
                            data-drawer-target="drawer-read-product-advanced"
                            data-drawer-show="drawer-read-product-advanced"
                            aria-controls="drawer-read-product-advanced"
                            class="py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewbox="0 0 24 24"
                                fill="currentColor"
                                class="w-4 h-4 mr-2 -ml-0.5"
                            >
                                <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                />
                            </svg>
                            Preview
                        </button> -->
                        <button
                            type="button"
                            class="flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900"
                            @click="deleteEvent(event)"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 mr-2 -ml-0.5"
                                viewbox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Delete
                        </button>
                    </div>
                </td>
            </tr>
        </template>
    </data-table>
</template>
