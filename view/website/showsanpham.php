
            
                
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
                        <p class="text-muted">Giá: <?php echo $gia." VND" ?></p>
                        <p class="text-muted">Mã SP: BC<?php echo $masp ?></p>
                        
                        <p class="text-muted">Độ cay: <?php if ($cay == 1) echo "<i class='fa fa-fire kim-hot'></i>"; else
                         echo "<i class='fa fa-minus kim-hot'></i>"
                          ;?>  </p>
                         <p class="text-muted">Thích hợp ăn chay: <?php if ($chay == 1) echo "<i class='fa fa-leaf kim-vegeterian'></i>"; else
                         echo "<i class='fa fa-minus kim-hot'></i>"
                          ;?>  </p>
                          
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-right">
                            <form method="post" action="?action=chitiet">
                                <input type="hidden" name="masp" value="<?php echo $masp ?>">
                                <input type="submit" value="Chi Tiết" class="btn btn-danger">
                            </form>
                         </div>
                         </div>
                    </div>
                </div>
                
  