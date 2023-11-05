 <!--CONTENT-->
 <div class="row content-cart ">
     <div class="container ">
         <form action=" " method="post " id="cartformpage ">
             <div class="cart-index ">
                 <h2>Chi tiết giỏ hàng</h2>
                 <div class="tbody text-center ">
                     <div class="col-xs-12 col-12 col-sm-12 col-md-8 col-lg-8 ">

                         <table class="table table-list-product ">

                             <thead>
                                 <tr style="background: #f3f3f3; ">
                                     <th>Hình ảnh</th>
                                     <th>Tên sản phẩm</th>
                                     <th class="text-center ">Đơn giá</th>
                                     <th class="text-center ">Số lượng</th>
                                     <th class="text-center ">Thành tiền</th>
                                     <th class="text-center ">Xóa</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td class="img-product-cart ">
                                         <a href="cay-song-doi-la-bong ">
                                             <img src="public/images/products/17c571a8bfd7c932fe3995ae19fd50f6.jpg " alt="Cây Sống Đời (Lá Bỏng) ">
                                         </a>
                                     </td>
                                     <td>
                                         <a href="cay-song-doi-la-bong " class="pull-left ">Cây Sống Đời (Lá Bỏng)</a>
                                     </td>
                                     <td>
                                         <span class="amount ">
                                             170,000 VNĐ </span>
                                     </td>
                                     <td>
                                         <div class="quantity clearfix ">
                                             <input name="quantity " id="45 " class="form-control " type="number " value="1 " min="1 " max="1000 " onchange="onChangeSL(45) ">
                                         </div>
                                     </td>
                                     <td>
                                         <span class="amount ">
                                             170,000 VNĐ </span>
                                     </td>
                                     <td>
                                         <a class="remove " title="Xóa " onclick="onRemoveProduct(45) "><i class="fas fa-trash-alt "></i></a>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                         <button class="btn " onclick="window.location.href='san-pham' "> <a href="http://localhost/Website/san-pham ">Tiếp tục mua hàng</a></button>
                     </div>

                     <div class="col-xs-12 col-sm-12 col-md-4 ">
                         <div class="clearfix btn-submit " style="padding-left: 10px;margin-top: 20px; ">
                             <table class="table total-price " style="border: 1px solid #ececec; ">
                                 <tbody>
                                     <tr style="background: #f4f4f4; ">
                                         <td>Tổng tiền</td>
                                         <td><strong>170,000 VNĐ</strong></td>
                                     </tr>
                                     <tr>
                                         <td colspan="2 ">
                                             <h5>Mua hàng trực tiếp tại cửa hàng giảm giá 5%</h5>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td colspan="2 ">
                                             <h5>Nếu đặt online Bạn hãy đồng ý với điều khoản sử dụng & hướng dẫn hoàn trả.</h5>
                                         </td>
                                     </tr>

                                     <tr>

                                         <td colspan="2 ">
                                             <button type="button " onclick="window.location.href='info-order' " class="btn-next-checkout ">Đặt hàng</button>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>

                         </div>
                     </div>
                 </div>

             </div>

         </form>
     </div>
 </div>
 