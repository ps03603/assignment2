<div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="product-images">
                                <form action="?action=add_cart" method="post" class="cart">
                                     <input type="hidden" name="productkey" value="<?php echo $masp;?>"/>
                                <div class="product-main-img">
                                    <img src="<?php echo $hinh1 ?>" alt="">
                                </div>
                            </div> 
                            <div class="col-lg-12"> 
                                <div class="product-gallery list-inline center-block">
                                    <div class="row">  
                                        <div class="col-lg-2"><input type="button" class="btn btn-success" value="Back" ></div>        
                                        <div class="col-lg-2 col-sm-2"><img src="<?php echo $hinh2 ?>" alt=""></div>
                                        <div class="col-lg-2 col-sm-2"><img src="<?php echo $hinh3 ?>" alt=""></div>
                                        <div class="col-lg-2 col-sm-2"><img src="<?php echo $hinh1 ?>" alt=""></div>
                                        <div class="col-lg-2 col-sm-2"><img src="<?php echo $hinh1 ?>" alt=""></div>

                                        
                                        <div class="col-lg-2"><input type="button" class="btn btn-success" value="Next" ></div>
                                    </div>      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">

                       
                    <div class="product-inner">
                        <h2 class="product-name"><?php echo $ten ?></h2>
                        <div class="product-inner-price">
                            <ins><?php echo $gia ?> Đồng</ins>
                            <p class="text-muted">Mã SP: BC <?php echo $masp ?></p>

                            <p class="text-muted">Độ cay: <?php if ($cay == 1) echo "<i class='fa fa-fire kim-hot'></i>"; else
                         echo "<i class='fa fa-minus kim-hot'></i>"
                          ;?></p>
                            <p class="text-muted">Thích hợp ăn chay:<?php if ($chay == 1) echo "<i class='fa fa-leaf kim-vegeterian'></i>"; else
                         echo "<i class='fa fa-minus kim-hot'></i>"
                          ;?> </p>

                        </div>   


                        
                            <div class="quantity">
                                <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="" min="1" step="1">
                                 <select class="input-text qty text" name="itemqty">  
                                <?php for($i=1;$i<=10;$i++): ?>
                                <option value="<?php echo $i; ?>">
                                 <?php echo $i?>
                                </option>
                                 <?php endfor; ?>
                                </select>
                            </div>   
                        <input type="submit" name="?action=add_cart" class="btn btn-success" value="Giỏ hàng"> <i class="fa fa-shopping-cart fa-lg"></i> 
                            <div data-celery="" data-celery-type="embed" data-celery-version="v2">Checkout</div>
<script async type="text/javascript" src="https://www.trycelery.com/js/celery.js"></script>

                         





                        <div role="tabpanel" class="kim-tabpanel">
                            <ul class="product-tab" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>

                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <h2>Product Description</h2>  
                                    <p><?php echo $mota ?></p>

                                    
                                </div>

                              </form>  

                            </div>

                        </div>
                    </div>
                </div>



            </div>
        </div>