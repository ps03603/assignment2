<?php include "../view/website/header.php"; ?>

<section id="order">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 kim-directory"><p><a href="#">Trang Chủ </a> &raquo;<a href="#"> Sản Phẩm </a> &raquo;<a href="#"> Đặt Hàng</a></p></div>
            <div class="col-lg-4 text-center">
                <h2 class="section-heading">Sản Phẩm</h2>
                <h4 class="text-muted">Thế giới của Bà Ngoại Cuisine</h4>
            </div>
            <div class="col-lg-4"></div>
        </div>

            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="product-images">
                                <div class="product-main-img">
                                    <img src="img/botchien.jpg" alt="">
                                </div>
                            </div> 
                            <div class="col-lg-12"> 
                                <div class="product-gallery list-inline center-block">
                                    <div class="row">  
                                        <div class="col-lg-2"><input type="button" class="btn btn-success" value="Back" ></div>        
                                        <div class="col-lg-2 col-sm-2"><img src="img/botchien.jpg" alt=""></div>
                                        <div class="col-lg-2 col-sm-2"><img src="img/botchien.jpg" alt=""></div>
                                        <div class="col-lg-2 col-sm-2"><img src="img/botchien.jpg" alt=""></div>
                                        <div class="col-lg-2 col-sm-2"><img src="img/botchien.jpg" alt=""></div>

                                        <div class="col-lg-2"><input type="button" class="btn btn-success" value="Next" ></div>
                                    </div>      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">


                    <div class="product-inner">
                        <h2 class="product-name">Bột Chiên</h2>
                        <div class="product-inner-price">
                            <ins>30.000đ</ins>
                            <p class="text-muted">Mã SP: BC001</p>

                            <p class="text-muted">Độ cay: <i class="fa fa-fire kim-hot"></i>  </p>
                            <p class="text-muted">Thích hợp ăn chay: <i class="fa fa-leaf kim-vegeterian"></i></p>

                        </div>   


                        <form action="" class="cart">
                            <div class="quantity">
                                <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                            </div>   
                            <a class="btn btn-success" href="#"> <i class="fa fa-shopping-cart fa-lg"></i> Giỏ Hàng</a>

                        </form>   





                        <div role="tabpanel" class="kim-tabpanel">
                            <ul class="product-tab" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>

                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <h2>Product Description</h2>  
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.</p>

                                    <p>Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.</p>
                                </div>



                            </div>

                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>
</section>
<?php include "../view/website/footer.php"; ?>