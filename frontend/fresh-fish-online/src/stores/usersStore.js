import { createPinia, defineStore, PiniaVuePlugin } from "pinia";

export const useStore = defineStore("userStore", {
  state: () => ({
    token: localStorage.getItem("token"),
    name: localStorage.getItem("name"),
    role: localStorage.getItem("role"),
    user_id: localStorage.getItem("user_id"),
    user: {
      name: localStorage.getItem("name"),
      email: localStorage.getItem("email"),
    },
  }),
  actions: {
    getItemCard(){
      
    },
    async addToCart(item) {
      try {
        const response = await axios.post("/api/cart", item);
        this.cart = response.data; 
      } catch (error) {
        console.error(error);
      }
    },

  },
});
