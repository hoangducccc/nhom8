<?php
ob_start();
?>
<?php
global $list_product_cat;
$list_cat = $list_product_cat;
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>NHÓM 08 - KTUDPM</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.png">

        <!-- all css here -->
        <link rel="stylesheet" href="assets\css\bootstrap.min.css">
        <link rel="stylesheet" href="assets\css\plugin.css">
        <link rel="stylesheet" href="assets\css\bundle.css">
        <link rel="stylesheet" href="assets\css\style.css">
        <link rel="stylesheet" href="assets\css\responsive.css">
        <script src="assets\js\vendor\modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- Add your site or application content here -->
<?php
get_header();
?>
<!--content-->
<div class="pos_home_section">
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
                                <a href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single_slider" style="background-image: url(assets/img/slider/slider3.jpg)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1>Best Collection</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                <a href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--banner slider start-->

            <!--new product area start-->

            <div class="new_product_area"> 
                <?php
                foreach ($list_cat as $cat) {
                    ?>
                    <div class="block_title">
                        <h3><?php echo $cat['cat_title'] ?></h3>
                    </div>
                    <div class="row">
                            <?php
                            #lấy danh sách sản phẩm
                            $list_item = get_list_product_by_cat($cat['cat_id']);
                            ?>
                            <div class="product_active owl-carousel">
                                <?php
                                if (!empty($list_item)) {
                                    ?>
                                    <?php
                                    foreach ($list_item as $item) {
                                        ?>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="<?php echo $item['url'] ?>"><img src="<?php echo "assets/img/product/{$item['thumb']}" ?>" alt=""></a>
                                        <div class="img_icone">
                                            <img src="assets\img\cart\span-new.png" alt="">
                                        </div>
                                        <div class="product_action">
                                            <a href="<?php echo "?mod=cart&act=add&id={$item['id']}" ?>"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <span class="product_price_goc"><?php echo $item['price'] ?></span>
                                        <span class="product_price_dis">3.900.000 VND</span>
                                        <h3 class="product_name"><?php echo $item['product_name'] ?></h3>
                                        <!--<h3 class="product_title"><a href="single-product-video.html">Curabitur sodales</a></h3>-->
                                    </div>
                                    <div class="product_info">
                                        <ul>
                                            <li><a href="#" title=" Add to Wishlist ">Yêu thích</a></li>
                                            <li><a href="<?php echo $item['url'] ?>" data-toggle="modal" data-target="#modal_box" title="Quick view">Thông tin chi tiết</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <?php }
                                }
                                ?>
                        </div>
                    </div>
                    <?php
                }
                ?>               
            </div>
            <!--new product area start-->
        </div>
    </div>
</div>
<!--pos home section end-->
<?php
get_footer();
?>