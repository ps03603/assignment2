<?php include "../view/website/header.php";?>
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <center><h1 style=" margin: 20px; color: #900; font-size: 24px;">Thêm sản phẩm mới</h1></center>
        <br/><br/>
        <form action="../controller/index.php"  method="post" enctype="multipart/form-data">
            <input type="hidden"  name="action" action="add_submit" value="add_submit"  />
        <center><table>
          
            <tr>
                <td>
                    <label for="loaiid">Chọn loại:</label></td>
                </td>
                <td align="left">
                    <select name="loaiid">
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
                     <input type="text" name="txtTenSP">
                 </td>
            </tr>
            
            <tr>
                <td>
                    <label for="file">Hình ảnh sản phẩm</label></td>
                 </td>
                 <td align="left">
                     <input type="file" name="file" id="file">
                 </td>
            </tr>
            
            <tr>
                <td>
                    <label for="txtGiaSP">Giá sản phẩm</label></td>
                 </td>
                 <td align="left">
                     <input type="text" name="txtGiaSP">
                 </td>
            </tr>
            
            <tr>
                <td>
                    <label for="txtMotaSP">Mô tả sản phẩm</label></td>
                 </td>
                 <td align="left">
                     <textarea name="txtMotaSP" cols="40" rows="5"></textarea>
                 </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <input type="submit" name="submit" value="Thêm sản phẩm" />
                <input type="reset"  value="Reset"/></td>
            </tr>
        </table></center>
            <br/><br/>
        </form>
    </div>
</section>
<?php include "../view/website/footer.php";?>
