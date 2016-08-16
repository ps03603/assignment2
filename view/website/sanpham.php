<?php include "../view/website/header.php"; ?>

<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 kim-directory"><p><a href="?action=home">Trang Chủ</a> &raquo; <a href="?action=sanpham">Sản Phẩm</a></p></div>
            <div class="col-lg-4 text-center">
                <h2 class="section-heading">Portfolio</h2>
                <h4 class="text-muted">Càng ăn càng mê!</h4>
            </div>
            <div class="col-lg-4"></div>
        </div>


        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2 class="section-heading">Món Mặn</h2>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">

                <div class="product-pagination text-center kim-change-page-color">
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>

                            <li><a href="#">3</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>                        

                </div>

            </div>
        </div>




        <div class="row">


            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo $hinh1 ?>" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <h4><?php echo $ten ?></h4>
                            <p class="text-muted">Giá: <?php echo $gia . " VND" ?></p>
                            <p class="text-muted">Mã SP: BC<?php echo $masp ?></p>

                            <p class="text-muted">Độ cay: <?php if ($cay == 0) echo "<i class='fa fa-fire kim-hot'></i>"; ?>  </p>
                            <p class="text-muted">Thích hợp ăn chay: <i class="fa fa-leaf kim-vegeterian"></i></p>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-right">
                            <a href="?action=dathang"><input type="submit" value="Đặt hàng" class="btn btn-danger"></a>
                        </div>
                    </div>
                </div>
            </div>






        </div>




        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2 class="section-heading">Món Ngọt</h2>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">

                <div class="product-pagination text-center kim-change-page-color">
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>

                            <li><a href="#">3</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>                        

                </div>

            </div>
        </div>




        <div class="row">







            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/botchien.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <h4>Bột Chiên</h4>
                            <p class="text-muted">Giá: 30.000 đ</p>
                            <p class="text-muted">Mã SP: BC001</p>

                            <p class="text-muted">Độ cay: <i class="fa fa-fire kim-hot"></i>  </p>
                            <p class="text-muted">Thích hợp ăn chay: <i class="fa fa-leaf kim-vegeterian"></i></p>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-right">
                            <input type="submit" value="Đặt hàng" class="btn btn-danger">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/botchien.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <h4>Bột Chiên</h4>
                            <p class="text-muted">Giá: 30.000 đ</p>
                            <p class="text-muted">Mã SP: BC001</p>

                            <p class="text-muted">Độ cay: <i class="fa fa-fire kim-hot"></i>  </p>
                            <p class="text-muted">Thích hợp ăn chay: <i class="fa fa-leaf kim-vegeterian"></i></p>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-right">
                            <input type="submit" value="Đặt hàng" class="btn btn-danger">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/botchien.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <h4>Bột Chiên</h4>
                            <p class="text-muted">Giá: 30.000 đ</p>
                            <p class="text-muted">Mã SP: BC001</p>

                            <p class="text-muted">Độ cay: <i class="fa fa-fire kim-hot"></i>  </p>
                            <p class="text-muted">Thích hợp ăn chay: <i class="fa fa-leaf kim-vegeterian"></i></p>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-right">
                            <input type="submit" value="Đặt hàng" class="btn btn-danger">
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2 class="section-heading">Món Ăn Vặt</h2>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">

                <div class="product-pagination text-center kim-change-page-color">
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>

                            <li><a href="#">3</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>                        

                </div>

            </div>
        </div>




        <div class="row">







            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/botchien.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <h4>Bột Chiên</h4>
                            <p class="text-muted">Giá: 30.000 đ</p>
                            <p class="text-muted">Mã SP: BC001</p>

                            <p class="text-muted">Độ cay: <i class="fa fa-fire kim-hot"></i>  </p>
                            <p class="text-muted">Thích hợp ăn chay: <i class="fa fa-leaf kim-vegeterian"></i></p>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-right">
                            <input type="submit" value="Đặt hàng" class="btn btn-danger">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/botchien.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <h4>Bột Chiên</h4>
                            <p class="text-muted">Giá: 30.000 đ</p>
                            <p class="text-muted">Mã SP: BC001</p>

                            <p class="text-muted">Độ cay: <i class="fa fa-fire kim-hot"></i>  </p>
                            <p class="text-muted">Thích hợp ăn chay: <i class="fa fa-leaf kim-vegeterian"></i></p>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-right">
                            <input type="submit" value="Đặt hàng" class="btn btn-danger">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/botchien.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <h4>Bột Chiên</h4>
                            <p class="text-muted">Giá: 30.000 đ</p>
                            <p class="text-muted">Mã SP: BC001</p>

                            <p class="text-muted">Độ cay: <i class="fa fa-fire kim-hot"></i>  </p>
                            <p class="text-muted">Thích hợp ăn chay: <i class="fa fa-leaf kim-vegeterian"></i></p>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-right">
                            <input type="submit" value="Đặt hàng" class="btn btn-danger">
                        </div>
                    </div>
                </div>
            </div>


        </div>




    </div>
</div>
</section>

<?php include "../view/website/footer.php"; ?>