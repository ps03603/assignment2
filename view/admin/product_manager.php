<?php include "../view/website/header.php";?>
<style>
.products_list_manager th{ 
        border:1px dotted #666; 
        text-align:center;
        padding:10px 15px;
}
.products_list_pages td{
        border:1px solid #FFF; 
        background:#f3f3f3; 
        padding:10px 15px;
}
.products_list_pages a:link{color:#000;}
.products_list_pages a:hover{color:#00F;}
</style>
<section id="portfolio" class="bg-light-gray">
    <div class="container">
    <center><h1>Danh sách sản phẩm</h1></center><br/>
    <center>
    <table border="0" width="840" class="products_list_manager">
        <tr>
         <th>Mã sản phẩm</th>
         <th>Tên sản phẩm</th>
         <th>Hình ảnh</th>
         <th>Giá</th>
         <th>Giới thiệu</th>
        </tr>
          <?php
        $quest = new Products();
         $display = 8;
        if(isset($_GET['page']) && (int)$_GET['page']) {
                $page = $_GET['page'];
            } else { 
                $count = $quest->CountProductAll();
                $record = $count[0];
                if($record > $display) {
                    $page = ceil($record/$display);
                } else {
                    $page = 1;
                }
            }
        $start = (isset($_GET['start']) && (int)$_GET['start']>=0) ? $_GET['start'] : 0;
        $result = $quest->getListPage($start,$display);
        
       
         while($set = $result->fetch())
         {
            echo "<tr>";
            echo "<th>$set[SanPhamID]</th>";
            echo "<th>$set[TenSanPham]</th>";
            echo "<th><img src=".'"'."../view/website/img/"."$set[HinhSanPham1]".'"'."width=" .'"'."100px" .'"'."/></td>";
            echo "<th>$set[Gia]₫</th>";
             echo "<th>$set[MoTaSanPham]</th>";
            ?>
           <th><a href='?action=edit_product&id=<?php echo "$set[SanPhamID]";?>'><img src="../view/website/img/update-icon.png" width="35px"/></a></th>
           <th><a href="?action=delete_product&id=<?php echo "$set[SanPhamID]";?>"><img src="../view/website/img/delete-icon.png" width="35px"/></a></th>
           </tr>
         <?php } ?>     
        </table></center>
    </table>
    </center>
    <?php
        if($page > 1) { 
                
                $next = $start + $display;
                $prev = $start - $display;
                $current = ($start/$display)+1;?>
                <center><table class="products_list_pages">
                        <tr>
                            <?php  //Hien thi trang Previous
                                if($current !=1) {
                                echo "<td><a href='index.php?action=$action&start=$prev&page=$page'>Previous</a></td>";
                                } ?>
                            
                            <?php 
                                for($i=1;$i<=$page;$i++) {
                                    if($current != $i) {
                                    echo "<td><a href='index.php?action=$action&start=".($display*($i-1))."&page=$page'>$i</a></td>";
                                } else {
                                    echo "<td class='current'>$i</td>";
                                }
                                } //End: FOR
                               ?>
                            
                                <?php //Hiển thị trang trước đó

                                 if($current != $page) {
                                     echo "<td><a href='index.php?action=$action&start=$next&page=$page'>Next</a></td>";
                                 }

                                }
                                ?>
                        </tr>
                                <a href="?action=add_product"><h2>Thêm sản phẩm </h2></a>    
        </table> </center>
    
    </div>
</section>
<?php include "../view/website/footer.php";?>