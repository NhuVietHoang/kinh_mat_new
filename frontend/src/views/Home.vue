<template>
  <div>
    	<!-- <div id="id-logo" class="logo">
		<a href="trangchu.html"><img class="matviet" src="image/logo.png"></a>
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
		<div class="dangnhap"><a href="dangky.html">Đăng nhập</a> /</div>
		<div class="dangnhap"><a href="#">Đăng ký</a></div>
	    </div>
	<div class="tim-cua-hang">
		<img src="image/tim.png">
	</div>
	<div class="do-mat">
		<p class="mat1">Đo mắt miễn phí</p>
		<img src="image/do.png">
	</div> -->
	<div class="container">
		
		<div class="lay">
			<div class="gia">
				<div class="mn mn-vt0">
				<ul >LỌC THEO
					<li v-for="category in categories" :key="category.id">{{category.name}}</li>
					
				</ul>
			</div>
			</div>
			<img class="lay1" src="image/k12.jpg">
		</div>
		<div class="sanpham">
			<div class="mn mn-vt1">
				<ul>CÁC CHUYÊN MỤC
					<li>Chăm sóc mắt</li>
					<li>Chương Trình Ưu Đãi</li>
					<li>Giải pháp thị lực</li>
					<li>Hình Ảnh Hệ Thống Cửa Hàng</li>
					<li>Những tình trạng của mắt</li>
					<li>Thương hiệu Tròng Kính</li>
					<li>Tìm Hiểu Về Thị Lực</li>
					<li>Tin Tức Cập Nhật</li>
				</ul>
			</div>
			<div v-for="product in products" :key="product.id" class="sp1"   >
				<img class="pic1" src="image/j1-1.jpg">
				<img class="pic2" src="image/j1.jpg">
				<p class="p1">{{product.name}}</p>
				<p class="p2">{{product.unit_price}}</p>
				<div class="cl">
					<div class="cl1"></div>
					<div class="cl2"></div>
				</div>
				<div class="op">
					<button class="op1" @click="addCart(product.slug)">mua nhanh</button>
					<div class="op0"></div>
					<div class="op1"><router-link :to="`product/${product.slug}`">xem chi tiết </router-link></div>
				</div>
			</div>
			<div class="chuyentrang">
				<div class="n1">1</div>
				<div class="n1">2</div>
				<div class="n1">3</div>
				<div class="n1">4</div>
				<div class="n1">5</div>
				<div class="n1">6</div>
				<div class="n1">7</div>
				<div class="n1">></div>
			</div>
		</div>
	</div>
	<div class="foot">
		<div class="footer">
			<div class="f1">
				<img src="image/logo2.png">
				<div class="fp">
					<span class="fp1">Số điện thoại :</span>
					<span class="fp2">0968940243</span>
				</div>
				<div class="fp">
					<span class="fp1">Hotline :</span>
					<span class="fp2">1900111</span>
				</div>
				<div class="fp">
					<span class="fp1">Email :</span>
					<span class="fp2">cuongcc1234@gmail.com</span>
				</div>
				
				<div class="fp">
					<span class="fp1">Địa chỉ :</span>
					<div class="fp2">234 Hoàng Quốc Việt,Cầu Giấy, Hà Nội</div>
				</div>
			</div>
			<div class="f1">
				<div class="fp">
					<p class="fp3">VỀ MẮT VIỆT</p>
				</div>
				<div class="fp">
					<span class="fp1">Giới thiệu Mắt Việt</span>
				</div>
				<div class="fp">
					<span class="fp1">Tầm nhìn - Sứ mệnh</span>
				</div>
				<div class="fp">
					<span class="fp1">Tuyển dụng</span>
				</div>
				<div class="fp">
					<span class="fp1">Hệ thông cửa hàng</span>
				</div>
			</div>
			<div class="f1">
				<div class="fp">
					<p class="fp3">CHÍNH SÁCH VÀ DỊCH VỤ</p>
				</div>
				<div class="fp">
					<span class="fp1">Chính sách</span>
				</div>

				<div class="fp">
					<div class="fp2">Chính sách và Quy định chung</div>
				</div>
				<div class="fp">
					<div class="fp2">Quy định và Hình thức thanh toán</div>
				</div>
				<div class="fp">
					<div class="fp2">Chính sách Vận Chuyển và Giao Nhận</div>
				</div>
				<div class="fp">
					<div class="fp2">Chính sách bảo hành</div>
				</div>
				<div class="fp">
					<div class="fp2">Chính sách đổi trả và hoàn tiền</div>
				</div>
				<div class="fp">
					<div class="fp2">Chính sách bảo vệ thông tin cá nhân của người tiêu dùng</div>
				</div>
				<div class="fp">
					<span class="fp1">ĐO KHÁM MẮT</span>
				</div>
				<div class="fp">
					<span class="fp2">Đăng ký lịch</span>
					<span class="fp2">Tìm cửa hàng</span>
				</div>
				<div class="fp">
					<span class="fp1">THƯƠNG HIỆU</span>
				</div>
				<div class="fp">
					<span class="fp2">rayban</span>
					<span class="fp2">oakley</span>
					<span class="fp2">bolon</span>
					<span class="fp2">burberry</span>
				</div>


			</div>
			<div class="f1">
				<div class="fp">
					<p class="fp3">THỜI GIAN LÀM VIỆC</p>
				</div>
				<div class="fp">
					<div class="fp1">Tất cả các ngày trong tuần trên toàn hệ thống của hàng Mắt Việt. ( chi tiết thời gian mở của của các cửa hàng: tại đây)
					Sala Mắt Việt</div>
				</div>
				
			</div>
		</div>
	</div>

  </div>
</template>

<script>
import axios from 'axios';

export default {
    name:'product',
    data(){
        return{
            products:[],
            categories:[],
			customer:[],
			token: "", 
        }
    },
    created(){
        this.getPoducts()
        this.getCategory()
    },
	mounted(){
		// this.checkLogin()
		 this.token = window.localStorage.getItem('token');
			
	},
    methods:{
        async getPoducts(){
        await  axios.get('http://127.0.0.1:8000/api/products').then(res=>{
                this.products = res.data
				
            })
        },
        async getCategory(){
        await axios.get('http://127.0.0.1:8000/api/category').then(res=>{
            this.categories = res.data
         })
        },
		// checkLogin(){
		// 	let token = window.localStorage.getItem('token');
		// 	if(!token == null){
		// 		isAuth = false
		// 	}
		// 	// console.log(localStorage.getItem('token'))
		// 	axios.get('http://127.0.0.1:8000/api/user-profile', 
		// 		{headers: { Authorization: `Bearer ${token}` }}
		// 	)
		// 	.then(res => {
        //                       this.customer = res.data
		// 					 console.log(res)
        //                   })
        //                   .catch(() => {
        //                       this.$router.push({name: "login"})
        //                   }); 
		// }
		async addCart(slug){
			 axios.post('http://127.0.0.1:8000/api/add-to-cart/'+ slug , [],
			  	{ headers: {Authorization: `Bearer ${this.token}`}}
			  ).then(
				console.log('saved')
			);
		}
    }

}
</script>

<style>

</style>