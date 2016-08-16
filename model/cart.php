<?php
function add_item($key,$quantity){
    $pros = new Products();
    $pro = $pros->getProductById($key);
    //Nếu sản phẩm đã có trong giỏ hàng, cập nhật số lượng
    if(isset($_SESSION['cart'][$key]))
    {
        $quantity += $_SESSION['cart'][$key]['qty'];
        update_item($key,$quantity);
        return;
    }
    // Tạo đối tượng mảng lưu trữ thông tin sản phẩm cần thêm vào giỏ hàng
    $cost = $pro['Gia'];
    $img = $pro['HinhSanPham1'];
    $total = $cost * $quantity;
    $item = array(
        'name' => $pro['TenSanPham'],
        'cost' => $cost,
        'img' => $img,
        'qty' => $quantity,
        'total' => $total
     );
    
    // Thêm sản phẩm vào giỏ hàng thông qua mảng biến Session $_SESSION['cartview']
      $_SESSION['cart'][$key]= $item;
}
      // Cập nhật sản phẩm cùng giỏ hàng
      function update_item($key,$quantity)
      {
          $quantity = (int) $quantity;
          if($quantity <= 0)
          {
              //Thực hiện hủy phần tử trong giỏ hàng nếu người dùng nhập giá trị số lượng <=0 
              unset($_SESSION['cart'][$key]);
          }
          else
          {
              // Thực hiện cập nhật số lượng và thành tiền của sản phẩm trong giỏ hàng
              // với mảng biến $_SESSION['cartview'] tại vị trí $key của mảng
              $_SESSION['cart'][$key]['qty'] = $quantity;
              $total = $_SESSION['cart'][$key]['cost'] * $_SESSION['cart'][$key]['qty'];
              $_SESSION['cart'][$key]['total'] = $total;
          }
      }   
      // Lấy tổng doanh thu của giỏ hàng
      
      function get_subtotal()
      {
          $subtotal = 0;
          foreach($_SESSION['cart'] as $item)
        {
                $subtotal += $item['total'];
        }
      
      $subtotal = number_format($subtotal,2);
      return $subtotal;
     }
      // Tính tống số lượng sản phẩm đã order
     function get_subtotalitem()
      {
          $subtotalitem = 0;
          foreach($_SESSION['cart'] as $item)
        {
                $subtotalitem += $item['qty'];
        }
      
      $subtotal = number_format($subtotalitem ,2);
      return $subtotalitem;
     }
?>
