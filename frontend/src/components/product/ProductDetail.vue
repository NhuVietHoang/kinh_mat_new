<template>
<div>
     <div class="container">
    <div class="box-muasanpham">
        <div class="boxcon-muasanpham">
        <div class="box-avatar">
                <div class="box-avt-sanpham"><img class="avt-sanpham" :src="`images`" alt=""> </div>
                <div class="box-avtcon-sanpham"><img class="avtcon-sanpham" src="image/contrainer/sanpham/sanpham1.jpg" alt=""></div>
            </div>
            <div class="mua">
                <div class="muacon">
                    <div class="muacon1">
                        <div class="yeuthich">yêu thích+</div>
                        <span>{{product.name}}</span>
                    </div>
                    <div class="muacon2">
                        <div class="box-star">
                            <div class="star-box">
                            <div style="font-size: 15px;">5/5</div>
                            <div class="star"><i class="fas fa-star"></i></div>
                            <div class="star"><i class="fas fa-star"></i></div>
                            <div class="star"><i class="fas fa-star"></i></div>
                            <div class="star"><i class="fas fa-star"></i></div>
                            <div class="star"><i class="fas fa-star"></i></div>
                            </div>
                        </div>
                        <div>
                            <div class="box-star">
                                <div class="text-muacon2">2.1k đã bán</div>
                            </div>
                        </div>
                    </div>
                    <div class="muacon3">
                        <div class="box-muacon3">
                            <div class="muacon3-1">
                                <div class="no-sale">109.000 VNĐ</div>
                            </div>
                            <div class="muacon3-1">
                                <div class="now-sale">{{product.unit_price}}VNĐ</div>
                            </div>
                            <div class="muacon3-1">
                                 <div class="tile"> giảm %</div>         
                            </div>
                        </div>
                    </div>
                    <div class="muacon4">
                        <div class="box-muacon4">
                           <div class="box-thongtin">
                               <div class="thongtin">
                                    thông tin
                                </div>
                            </div>
                           <div class="box-thongtin">
                                <div class="tongquan">
                                    Tổng quan <br>
                                    <span class="text-tongquan">
                                            {{product.description}}
                                       </span>
                                </div>
                           </div>
                        </div>
                    </div>
                    <div class="muacon5">
                        <div class="box-soluong">
                            <div class="soluong">
                                Số Lượng
                            </div>
                            <div class="button-soluong">
                                <input class="button-tru" onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ) result.value--;return false;" type='button' value='-' />
                                <input class="text-soluong" id='quantity' min='1' name='quantity' type='text' value='1' />
                                <input class="buttton-cong" onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' />
                                
                            
                            </div>
                        </div>
                    </div>
                    <div class="muacon6">
                        <div class="box-donvi">
                            <div class="donvi"> Đơn Vị</div>
                            <div class="chai">con</div>
                        </div>
                    </div>
                    <div class="muacon1">
                        <input type="submit" value="mua hàng">
                    </div>
                </div>
            </div>
        </div>
        <div class="icon-mua">
        </div>    
        
    </div>
   
    </div>
</div>
 
</template>

<script>
import axios from 'axios';
export default {
    data(){
        return{
            product:{
                name:"",
                code:"",
                unit_price:"",
                description:"",
                image:""
            }
        }
    },
    created(){
            let slug = this.$route.params.slug;
            
            this.getProduct(slug);
    },
    methods:{
        getProduct(slug) {
            axios.get(`http://localhost:8000/api/products/${slug}`).then(res =>{
                this.product =res.data
                
            })
      

        }
    }


}
</script>

<style>

</style>