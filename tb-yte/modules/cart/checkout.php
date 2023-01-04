<?php 
get_header();
?>
<?php
 $list_buy = get_list_buy();
?>
﻿<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="?mod=home&act=main">Trang chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Thanh Toán</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->


<!--Checkout page section-->
<div class="Checkout_section">
    <div class="checkout_form">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <form action="#">
                    <h3>Thông tin khách hàng</h3>
                    <div class="row">
                        <div class="col-12 mb-30">
                            <label>Họ và tên</label>
                            <input type="text">
                        </div>
                        <div class="col-12 mb-30">
                            <label>Địa chỉ nhận hàng <span>*</span></label>
                            <input type="text">
                        </div>
                        
                        <div class="col-lg-6 mb-30">
                            <label>Số điện thoại<span>*</span></label>
                            <input type="text">

                        </div>
                        <div class="col-lg-6 mb-30">
                            <label> Email <span>*</span></label>
                            <input type="text">

                        </div>
                        <div class="col-12">
                            <div class="order-notes">
                                <label for="order_note">Ghi chú</label>
                                <textarea id="order_note"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-6">
                <form action="#">
                    <h3>Thông tin đơn hàng</h3>
                    <div class="order_table table-responsive mb-30">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Tổng</th>
                                </tr>
                            </thead>
                            <?php
                                if(isset($list_buy)){
                            ?>
                            <tbody>
                                <?php
                                    foreach ($list_buy as $item){
                                ?>
                                 <tr>
                                    <td><?php echo $item['product_name'] ?><strong> ×<?php echo $item['qty'] ?></strong></td>
                                    <td><?php echo number_format($item['total']) ?></td>
                                </tr>
                                <?php
                                    }
                                 ?>                                                                                     
                            </tbody>
                            <?php
                                }
                            ?>
                            <tfoot>
                                <tr>
                                    <th>Tổng đơn sản phẩm</th>
                                    <td><?php echo number_format(total_cart()) ?></td>
                                </tr>
                                <tr>
                                    <th>Phí giao hàng</th>
                                    <td><strong></strong></td>
                                </tr>
                                <tr class="order_total">
                                    <th>Tổng đơn hàng</th>
                                    <td><strong><?php echo number_format(total_cart()) ?></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment_method">
                        <div class="panel-default">
                            <input id="payment" name="payment-method" type="radio" data-target="createp_account" value="online">
                            <label for="payment" data-toggle="collapse" data-target="#method" aria-controls="method">Thanh toán banking</label>
                        </div>
                        <div class="panel-default">
                            <input id="payment_defult" name="payment_method" type="radio" data-target="createp_account" value="cod">
                            <label for="payment_defult" data-toggle="collapse" data-target="#collapsedefult" aria-controls="collapsedefult">Thanh toán khi nhận hàng</label>
                        </div>
                        <div class="order_button">
                            <button type="submit">Thanh toán</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Checkout page section end-->

<?php
get_footer();
?>