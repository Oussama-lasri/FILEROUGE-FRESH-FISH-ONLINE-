import { createPinia, defineStore, PiniaVuePlugin } from "pinia";
import axios from "axios";
import Swal from "sweetalert2";

export const useStore = defineStore("userStore", {
  state: () => {
    return {
      token: localStorage.getItem("token"),
      name: localStorage.getItem("name"),
      role: localStorage.getItem("role"),
      user_id: localStorage.getItem("user_id"),
      cart: [],
      total : 0,
      user: {
        name: localStorage.getItem("name"),
        email: localStorage.getItem("email"),
      },
    };
  },
  actions: {
    async getItemsCard() {
      try {
        const response  = await axios.get(
          "http://127.0.0.1:8000/api/getProductUser/" + this.user_id
        );
        this.cart = response.data.data;
        this.getTotal()
        console.log(this.cart);
      } catch (error) {
        console.error(error);
      }
    },
    async addToCart(fish_id) {
      try {
        const existingItem = this.cart.find((item) => item.fish_id === fish_id);
        if (existingItem) {
          Swal.fire("This item is already in your cart");
          return;
        }
        const response = await axios.post("http://127.0.0.1:8000/api/pannier", {
          user_id: this.user_id,
          fish_id: fish_id,
          qty: 1,
        });
        this.getItemsCard();
        Swal.fire("added to cart");
      } catch (error) {
        console.error(error);
      }
    },

    async plus(qty,id){
      qty +=1;
      try {
        const response = await axios.post("http://127.0.0.1:8000/api/updateItem", {
          user_id: this.user_id,
          fish_id: id,
          qty: qty,
        });
        this.getItemsCard();
      } catch (error) {
        console.error(error);
      }
    },
    async moins(qty,id){
      qty -=1;
      try {
        const response = await axios.post("http://127.0.0.1:8000/api/updateItem", {
          user_id: this.user_id,
          fish_id: id,
          qty: qty,
        });
        this.getItemsCard();
      } catch (error) {
        console.error(error);
      }
    },
    async remove(id){
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            try {
                const response = axios.post('http://127.0.0.1:8000/api/deleteItem', {
                  user_id: this.user_id,
                  fish_id: id,
                } )
                    .then(res => {
                        Swal.fire(
                            'Deleted!',
                            'success'
                        );
                        this.getItemsCard()
                    });
            } catch (error) {
                console.error(error);
            }


        }
    })
    },
    async clearCart(){
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't clear cart",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            try {
                const response = axios.delete('http://127.0.0.1:8000/api/clearCart/'+this.user_id)
                    .then(res => {
                        Swal.fire(
                            'Deleted!',
                            'success'
                        );
                        this.getItemsCard()
                    });
            } catch (error) {
                console.error(error);
            }


        }
    })
    },
    async getTotal(){
      // console.log(typeof(this.cart[0].qty)) 
      this.total = this.cart.reduce((total, item) => total + (parseInt(item.fish.price) * parseInt(item.qty)), 0);
    }
  },
});
