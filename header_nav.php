<?php
if(!isset($_SESSION)) { 
    session_start(); 
} 
?>
<header id="wn__header" class="header__area header__absolute sticky__header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                <div class="logo">
                    <a href="./index.php">
                        <img src="./images/logo/logo.png" alt="logo images" />
                    </a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <nav class="mainmenu__nav">
                    <ul class="meninmenu d-flex justify-content-start">
                        <li class="drop with--one--item">
                            <a href="./index.php">TRANG CHỦ</a>
                        </li>

                        <li class="drop">
                            <a href="danhmuc.php">SÁCH</a>
                            <div class="megamenu mega03">
                                <!-- list_category -->
                                <?php require './list_categorygroup.php' ?>
                            </div>
                        </li>
                        <li class="drop">
                            <a href="/danh-muc">BÀI TẬP</a>
                            <div class="megamenu mega02">
                                <ul class="item item01">
                                    <li class="title">PHPvaFORM</li>
                                    <li>
                                        <a href="./BaiTap.php?bt=1-1">Bai1</a>
                                    </li>
                                    <li>
                                        <a href="./BaiTap.php?bt=1-2">Bai2</a>
                                    </li>
                                    <li>
                                        <a href="./BaiTap.php?bt=1-3">Bai3</a>
                                    </li>
                                    <li>
                                        <a href="./BaiTap.php?bt=1-4">Bai4</a>
                                    </li>
                                    <li>
                                        <a href="./BaiTap.php?bt=1-5">Bai5</a>
                                    </li>
                                    <li>
                                        <a href="./BaiTap.php?bt=1-6">Bai6</a>
                                    </li>
                                    <li>
                                        <a href="./BaiTap.php?bt=1-8">Bai8</a>
                                    </li>
                                </ul>
                                <ul class="item item01">
                                    <li class="title">PHPvaMANG</li>
                                    <li>
                                        <a href="">Bai1</a>
                                    </li>
                                    <li>
                                        <a href="">Bai2</a>
                                    </li>
                                    <li>
                                        <a href="">Bai3</a>
                                    </li>
                                    <li>
                                        <a href="">Bai4</a>
                                    </li>
                                    <li>
                                        <a href="">Bai5</a>
                                    </li>
                                    <li>
                                        <a href="">Bai6</a>
                                    </li>
                                    <li>
                                        <a href="">Bai8</a>
                                    </li>
                                </ul>
                                <ul class="item item01">
                                    <li class="title">PHPvaSQL</li>
                                    <li>
                                        <a href="">Bai1</a>
                                    </li>
                                    <li>
                                        <a href="">Bai2</a>
                                    </li>
                                    <li>
                                        <a href="">Bai3</a>
                                    </li>
                                    <li>
                                        <a href="">Bai4</a>
                                    </li>
                                    <li>
                                        <a href="">Bai5</a>
                                    </li>
                                    <li>
                                        <a href="">Bai6</a>
                                    </li>
                                    <li>
                                        <a href="">Bai7</a>
                                    </li>
                                    <li>
                                        <a href="">Bai8</a>
                                    </li>
                                    <li>
                                        <a href="">Bai9</a>
                                    </li>
                                    <li>
                                        <a href="">Bai10</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="./danhgia.php">REVIEW</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                <ul class="header__sidebar__right d-flex justify-content-end align-items-center" id="shopcartcontent">
                    <?php require './shop_cart_content.php' ?>

                </ul>
            </div>
        </div>
        <!-- Start Mobile Menu -->
        <div class="row d-none">
            <div class="col-lg-12 d-none">
                <nav class="mobilemenu__nav">
                    <ul class="meninmenu">
                        <li><a href="./NhomPHP">Trang chủ</a></li>
                        <li>
                            <a href="#">Thể loại</a>
                            <ul>
                                <?php require "./list_category.php" ?>

                            </ul>
                        </li>
                        <li>
                            <a href="#">Đánh giá</a>
                        </li>
                        <li><a href="#">Liên hệ</a></li>

                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Mobile Menu -->
        <div class="mobile-menu d-block d-lg-none"></div>
        <!-- Mobile Menu -->
    </div>
</header>

<div class="brown--color box-search-content search_active block-bg close__top">
    <form action="./searchbook.php" class="minisearch" id="search_mini_form" method="get">
        <div class="field__search">
            <input class="txtSearch" name="searchString" type="text" placeholder="Tìm kiếm sách của bạn ngay tại đây"
                autocomplete="on" />
            <div class="action">
                <button type="submit"><i class="zmdi zmdi-search"></i></button>
            </div>
        </div>
    </form>
    <div class="close__wrap">
        <span>Đóng</span>
    </div>
</div>
<script src="./Scripts/active.js"></script>