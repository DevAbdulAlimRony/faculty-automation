import { createStore } from "vuex";
import axiosClient from "../axios";


const store = createStore({
    state: {
        user: {
            data: {},
            // token: 123
        },
        events: {
            loading: false,
            data: []
        },
        currentEvent: {
            loading: false,
            data: {}
        }
},

    getters: {},

    actions: {
        getEvents({commit}){
            commit('setEventsLoading', true)
            return axiosClient.get(`v1/admin/events`).then((res) => {
                commit('setEventsLoading', false)
                commit("setEvents", res.data);
                return res;
            });
        },
        getEvent({commit}, id){
            commit("setCurrentEventLoading", true);
            return axiosClient.get(`v1/admin/events/${id}`)
                .then((res) => {
                    commit("setCurrentEvent", res.data);
                    commit("setCurrentEventLoading", false);
                    return res;
                })
                .catch((err) => {
                    commit("setCurrentEventLoading", false);
                    throw err;
                });
        },

        saveEvent({commit}, event){
            let response;
            if(event.id){
                response = axiosClient.put(`v1/admin/events/${event.id}`, event).then((res) => {
                    commit("setCurrentEvent", res.data);
                    return res;
                });
            }
            else{
                response = axiosClient.post(`v1/admin/events`, event).then((res) => {
                    commit('setCurrentEvent', res.data);
                    return res;
                });
            }
            return response;
        },
        deleteEvent({ dispatch }, id){
            return axiosClient.delete(`v1/admin/events/${id}`).then((res) => {
                dispatch('getEvents')
                return res;
            });
        },
    },
    mutations: {
        setCurrentEventLoading: (state, loading) => {
            state.currentEvent.loading = loading;
        },
        setEventsLoading: (state, loading) => {
            state.events.loading = loading;
        },
        setCurrentEvent: (state,  event) => {
            state.currentEvent.data = event;
        },
        setEvents: (state,  events) => {
            state.events.data = events.data;
        },
        // createEvent: (state, event) => {
        //     state.events = [...state.events, event.data]
        // },
        // updateEvent: (state, event) => {
        //     state.events = state.events.map((s) => {
        //         if(s.id == event.id){
        //             return event.data;
        //         }
        //         return s;
        //     });
        // }
    },
});

export default store;
