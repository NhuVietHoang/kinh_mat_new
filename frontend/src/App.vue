<template>
  <div id="app">
     <div id="id-logo" class="logo">
		<!-- <a href="trangchu.html"><img class="matviet" src="image/logo.png"></a> -->
	<router-link to="/home"><img class="matviet" src="image/logo.png"></router-link>
		<div class="menu">
			<ul class="ul1">
				<li class="li1"><a href="thuonghieu.html">Thương hiệu</a>
					<ul class="ul2 ul2-thuonghieu">
						<li class="li2">Ray Ban</li>
						<li class="li2">Bolon</li>
						<li class="li2">Molsion</li>
						<li class="li2">Vogue</li>
						<li class="li2">Flyer</li>
						<li class="li2">Giorgio Ferri</li>
						<li class="li2">Guy Laroche</li>
					</ul>
				</li>
				<li class="li1"><a href="trongkinh.html">Sản Phẩm</a>
					<ul class="ul2 ul2-trongkinh">
						<li class="li2">Đơn tròng Crizal</li>
						<li class="li2">Đơn tròng Essilor</li>
						<li class="li2">Đơn tròng Varilux</li>
						<li class="li2">Đơn tròng Transitions</li>
					</ul>
				</li>
				<li class="li1"><a href="thiluc.html">Thị lực</a>
					<ul class="ul2 ul2-thiluc">
						<li class="li2">Tiêu chuẩn đo mắt</li>
						<li class="li2">Đăng ký đo mắt</li>
					</ul>
				</li>
				<li class="li1"><a href="sanpham.html">Sản Phẩm</a></li>
				<li class="li1"><a href="thanhtoan.html">Hướng dẫn mua hàng</a></li>
				<li class="li1"><a href="gioithieu.html">Giới thiệu</a></li>
			</ul>

		</div>
		<div class="search">
			<input class="thanh-tim-kiem" type="text"  placeholder="Tìm kiếm...">
			<img class="timkiem" src="image/search.png">
		</div>
		<div class="dangnhap" v-if="isAuth==false"><router-link to="/login">đăng nhập</router-link> /</div>
		<div class="dangnhap" v-if="isAuth==false"><router-link to="/register">đăng kí</router-link></div>
		<div class="dangnhap" v-if="isAuth==true"><router-link to="/cart">{{customer.name}}</router-link></div>
		<div class="dangnhap" v-if="isAuth==true"><router-link to="/logout">logout</router-link></div>

	    </div>
	<div class="tim-cua-hang">
		<img src="image/tim.png">
	</div>
	<div class="do-mat">
		<p class="mat1">Đo mắt miễn phí</p>
		<img src="image/do.png">
	</div>
   <router-view/>
  </div>
</template>
<script>
import axios from 'axios'
export default{
	
	data(){
		return {
			isAuth: true,
			customer :[]
		}
	},
	mounted(){
		this.checkLogin()
	},
	//tìm hiểu  props emit
	methods:{
	checkLogin(){
			let token = window.localStorage.getItem('token');
			if(token == null){
				isAuth = false
			}
			axios.get('http://127.0.0.1:8000/api/user-profile', 
				{headers: { Authorization: `Bearer ${token}` }}
		
			)
			.then(res => {
                              this.customer = res.data
							 console.log(res.data)
                          })
                          .catch(() => {
                              this.$router.push({name: "login"})
                          }); 
		}
	}
}
</script>
<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}

nav a.router-link-exact-active {
  color: #42b983;
}
</style>
