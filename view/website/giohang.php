<?php include "../view/website/header.php"; ?>

<section>
        <div class="container">
            <div class="row">
            
            <div class="col-lg-4 kim-directory"><p><a href="#">Trang Chủ </a> &raquo;<a href="#"> Sản Phẩm </a>&raquo;<a href="#"> Chi Tiết </a>&raquo;<a href="#"> Giỏ Hàng </a></p></div>
                <div class="col-lg-4 text-center">
                    <h2 class="section-heading">Giỏ Hàng Của Bạn</h2>
                    <h4 class="text-muted">Thế giới của Bà Ngoại Cuisine</h4>
                </div>
                 <div class="col-lg-4"></div>
            </div>
            
           
            <div class="row cart-head">
                <div class="container">
                
                
                
                </div>
            </div>    
            <div class="row cart-body">
                <form class="form-horizontal" method="post" action="">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-md-push-4  col-sm-push-4">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                      <div class="panel-heading">
                            Review Order <div class="pull-right"><small><a class="afix-1" href="#">Edit Cart</a></small></div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-2 col-xs-2 col-lg-2">
                                    <img class="img-responsive" src="img/bunthitnuong.jpg" />
                                </div>
                                <div class="col-sm-5 col-xs-5 col-lg-5">
                                    <div class="col-xs-12">Tên sản phẩm:</div>
                                    <div class="col-xs-12">Mã Sản Phẩm:</div>
                                    <div class="col-xs-12">Số Lượng:<span>1</span></div>
                                </div>
                                <div class="col-sm-2 col-xs-2 text-right">
                                    <h6><span>$</span>25.00</h6>
                                </div>
                                <div class="col-sm-3 col-xs-3 col-lg-3"><a class="btn btn-success" href="#"> <i class="fa fa-minus"></i></a>
                               <a class="btn btn-success" href="#"> <i class="fa fa-plus"></i></a>
                               <a class="btn btn-danger" href="#">Xóa</a></div>
                            </div>
                            
                             <div class="form-group"><hr /></div>
                            
                            
                            
                            
                            
                            
                         
                          
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Subtotal</strong>
                                    <div class="pull-right"><span>$</span><span>200.00</span></div>
                                </div>
                                <div class="col-xs-12">
                                    <small>Shipping</small>
                                    <div class="pull-right"><span>-</span></div>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Order Total</strong>
                                    <div class="pull-right"><span>$</span><span>150.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-md-pull-8 col-sm-pull-8">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-heading">Address</div>
                        <div class="panel-body">
                           
                            <div class="form-group">
                                <div class="col-md-12"><strong>Công ty:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="country" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-xs-12">
                                    <strong>Tên:</strong>
                                    <input type="text" name="first_name" class="form-control" value="" />
                                </div>
                                <div class="span1"></div>
                                <div class="col-md-6 col-xs-12">
                                    <strong>Họ:</strong>
                                    <input type="text" name="last_name" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Số nhà:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Đường:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="city" class="form-control" value="" />
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <div class="col-md-12"><strong>Quận:</strong></div>
                                <div class="col-md-12">
                                    <select id="CreditCardType" name="CreditCardType" class="form-control">
                                        <option value="5">1</option>
                                        <option value="6">2</option>
                                        <option value="7">3</option>
                                        <option value="8">4</option>
                                        <option value="8">5</option>
                                         <option value="8">6</option>
                                          <option value="8">7</option>
                                           <option value="8">8</option>
                                            <option value="8">9</option>
                                             <option value="8">10</option>
                                              <option value="8">11</option>
                                               <option value="8">12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Số Điện Thoại Nhà</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="zip_code" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Số Điện Thoại Di Động</strong></div>
                                <div class="col-md-12"><input type="text" name="phone_number" class="form-control" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Địa Chỉ Email:</strong></div>
                                <div class="col-md-12"><input type="text" name="email_address" class="form-control" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="btn btn-success btn-submit-fix">Đặt hàng</button>
                                    <button type="reset" class="btn btn-success btn-submit-fix">Nhập lại</button>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    
                    <!--SHIPPING METHOD END-->
                    
                </div>
                
                </form>
            </div>
            
    </div>
       
        </div>
</section>
<?php include "../view/website/footer.php"; ?>