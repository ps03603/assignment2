<?php include "../view/website/header.php";
$objQuest = null;
$objQuest = new Products();
$quest = $objQuest->getProductById($_GET['id']);
$tensanpham = $quest[1];
$hinhsanpham1 = $quest[5];
$LoaiID = $quest[10];
$mota = $quest[11];
$gia = $quest[2];
$IDsp = $quest[0];
?>
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <center><h1 style=" margin: 20px; color: #900; font-size: 24px;">Chỉnh sửa sản phẩm</h1></center>
        <form action="index.php?action=edit_product_action" method="post" enctype="multipart/form-data">
              
        <center><table>
            <tr><td colspan="2" align="center"><img src="../view/website/img/<?php echo "$hinhsanpham1" ?>" width="400px"/></td></tr> 
           
           <tr>
                <td>
                    <label for="loaiid">Chọn loại:</label></td>
                </td>
                <td align="left">
                    <select name="loaiid">
                        <?php echo'<option>'."$LoaiID".'</option>' ?>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>                       
                            </select>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="txtTenSP">Tên sản phẩm</label></td>
                 </td>
                 <td align="left">
                     <input type="text" name="txtTenSP" value="<?php echo "$tensanpham" ?>">
                 </td>
            </tr>
            
            <tr>
                <td>
                    <label for="file">Hình ảnh sản phẩm</label></td>
                 </td>
                 <td align="left">
                     <input type="file" name="file" id="file" >
                 </td>
            </tr>
            
            <tr>
                <td>
                    <label for="txtGiaSP">Giá sản phẩm</label></td>
                 </td>
                 <td align="left">
                     <input type="text" name="txtGiaSP"  value="<?php echo "$gia" ?>">
                 </td>
            </tr>
            <tr>
                
                 <td align="left">
                     <input type="hidden" name="txtIDSP" value="<?php echo"$IDsp" ?>">
                 </td>
            </tr>
            <tr>
                <td>
                    <label for="txtMotaSP">Mô tả sản phẩm</label></td>
                 </td>
                 <td align="left">
                     <textarea name="txtMotaSP" cols="40" rows="5"> <?php echo "$mota" ?></textarea>
                 </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <input type="submit" name="submit" value="Sửa sản phẩm" />
                <input type="reset"  value="Reset"/></td>
            </tr>
            
            
        </table></center>
        </form>
    </div>
</section>
<?php include "../view/website/footer.php";?>