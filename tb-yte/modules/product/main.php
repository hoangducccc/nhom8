<?php
get_header();
?>
<?php
global $list_product;
$list_item = $list_product;
?>
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="?mod=home&act=main">Trang chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>sản phẩm</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--pos home section-->
<div class=" pos_home_section">
    <div class="row pos_home">

        <div class="col-lg-9 col-md-12">
            <!--banner slider start-->
            <div class="banner_slider slider_1">
                <div class="slider_active owl-carousel">
                    <div class="single_slider" style="background-image: url(assets/img/slider/hocy1.jpg)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <!--<h1>Women's Fashion</h1>-->
                                <p>SỨC KHỎE VÀ HẠNH PHÚC CỦA BẠN</p>
                                <p>LÀ NIỀM VUI VÀ TRÁCH NHIỆM CỦA CHÚNG TÔI</p>
                                <!--<a href="#">shop now</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="single_slider" style="background-image: url(assets/img/slider/slider2.jpg)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1>Đảm bảo</h1>
                                <p>Chất lượng - Hiệu quả- Lan tỏa niềm tin</p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="single_slider" style="background-image: url(assets/img/slider/slider3.jpg)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1>Uy tín</h1>
                                <p>Niềm tin của mọi nhà</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--banner slider start-->
            <!--shop tab product-->
            <div class="shop_tab_product">   
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="large" role="tabpanel">
                        <div class="row">
                            <?php
                            if (!empty($list_item)) {
                                ?>
                                <?php
                                foreach ($list_item as $item) {
                                    ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="<?php echo "?mod=product&act=detail&id={$item['id']}"?>"><img src="<?php echo "assets/img/product/{$item['thumb']}" ?>" alt=""></a>
                                                <div class="img_icone">
                                                    <img src="assets\img\cart\span-new.png" alt="">
                                                </div>
                                                <div class="product_action">
                                                    <a href="<?php echo "?mod=cart&act=add&id={$item['id']}" ?>"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <span class="product_price_goc"><?php echo number_format($item['price']).' VND' ?></span>
                                                <span class="product_price_dis">3.900.000 VND</span>
                                                <h3 class="product_name"><?php echo $item['product_name'] ?></h3>
                                                <!--<h3 class="product_title"><a href="single-product.html">Curabitur sodales</a></h3>-->
                                            </div>
                                            <div class="product_info">
                                                <ul>
                                                    <li><a href="#" title=" Add to Wishlist ">Yêu thích</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">Thông tin chi tiết</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>


                        </div>    
                    </div>    
                </div>     
            </div>
        </div>    
    </div>
</div>
</div> 

<!-- modal area end --> 


<?php
get_footer();
?>