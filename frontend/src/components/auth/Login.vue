<template>
  <div>
    <form  @submit.prevent="submitLogin" >
        <div class="bao">
            <div class="logo1"><img class="logo-img" src="image/logo.png"></div>
        </div>
        <h2>Đăng Nhập</h2>
        <input  v-model="customer.email"  class="f-input" type="email" placeholder="email" value="">
        <input  v-model="customer.password" class="f-input" type="password" placeholder="Password" value="">
        <button  class="btn-dangnhap" type="submit">login</button>
        <div class="dangky1">Bạn chưa có tài khoản <router-link to ="/register">đăng kí</router-link></div>
    </form>
  </div>
</template>

<script>
import axios from 'axios'
export default { 
    data(){
        return{
            customer: {
                email:'',
                password:''
            },
            loading:false
        }
    },
    methods:{
        validate(){
            let isValid= true
            this.errors={
                email:'',
                password:'',  
            }
            if(!this.loginForm.email){
                this.errors.email=" không nhập email à"
                isValid = false
            }
            if(!this.loginForm.password){
                this.errors.password=" không nhập pass sao vào"
                isValid = false
            }
            return isValid
        },
        submitLogin(){
            
            console.log(this.customer);
            axios.post('http://127.0.0.1:8000/api/login',this.customer)
            .then(response=> {
              localStorage.setItem('token', response.data.access_token);
              this.$router.push('home');
                
            })
            .catch(function (error) {
                console.log(error.response.data);
            });
                    }
                }
}
</script>

<style>

</style>