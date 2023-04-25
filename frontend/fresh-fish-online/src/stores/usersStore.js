import { createPinia, defineStore, PiniaVuePlugin } from "pinia";

export const useStore = defineStore("userStore", {
  state: () => ({
    token: 'testest',
    // userId: localStorage.getItem("id"),
    // role: localStorage.getItem("role"),
    user: {
    //   name: localStorage.getItem("name"),
    //   email: localStorage.getItem("email"),
    //   avatar: localStorage.getItem("avatar"),
    },
  }),
  actions: () => {},
});
