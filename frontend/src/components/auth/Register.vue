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
                <li class="li1"><a href="trongkinh.html">Tròng kính</a>
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
            <input class="thanh-tim-kiem" type="text" placeholder="Tìm kiếm...">
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
    <form action="#">
        <div class="bao">
            <div class="logo1"><img class="logo-img" src="image/logo.png"></div>
        </div>
        <h2>Đăng Kí</h2>
        <input  v-model="form.name" class="f-input" type="text" placeholder="Username" value="">
        <input  v-model="form.password" class="f-input" type="password" placeholder="Password" value="">
        <input v-model="form.phone" class="f-input" type="Text" placeholder="Phone" value="">
        <input  v-model="form.address" class="f-input" type="text" placeholder="address" value="">
        <input  v-model="form.email" class="f-input" type="email" placeholder="email" value="">
        <button id="id-dangnhap" class="btn-dangnhap" @click.prevent="submitRegister" type="submit">Đăng Nhập</button>
       
    </form>
  </div>
</template>

<script>
import axios from 'axios'
export default {
    data(){
        return{
          form:{
               name:'',
               password:'',
               phone:'',
               address:'',
               email:'' 
          } 
        }
    },
    methods:{
        async  submitRegister(){
         axios.post('http://localhost:8000/api/register ',this.form).then(()=>{
               console.log('saved');
            })
        }
    }
    
}
</script>

<style>

</style>