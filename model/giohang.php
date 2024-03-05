<?php 
    class giohang
    {   
        function addItem($key, $quanlity)
        {
            $product = new hanghoa();
            $pro = $product->getHangHoaId($key);

            if(isset($_SESSION['cart'][$key]))
            {
                $a = $quanlity + $_SESSION['cart'][$key]['soluong'];
                $gh = new giohang();
                $gh->Update($key, $a);
                return;
            }

            $hinh = $pro["hinh"];
            $ten = $pro["tenhh"];
            $cost = $pro["dongia"];
            $sale = $pro["giamgia"];
            if($pro['giamgia'] == 0)
            {
                $total = $quanlity * $cost;
            }
            else
                $total = $quanlity * $sale;
            
            

            $item = array(
                "mahh" => $key,
                "hinh" => $hinh,
                "ten" => $ten,
                "dongia" => $cost,
                "giamgia" => $sale,
                "soluong" => $quanlity,
                "total" => $total,
                
            );

            $_SESSION["cart"][$key] = $item;
        }

        function getTotal()
        {
            $subtotal = 0;
            foreach($_SESSION['cart'] as $item)
            {
                $subtotal = $subtotal + $item['total'];
            }
            return number_format($subtotal, 2);
        }


        function Update($key, $quanlity_new)
        {
            if($quanlity_new <= 0)
                unset($_SESSION['cart'][$key]);
            else
            {
                $_SESSION['cart'][$key]['soluong'] = $quanlity_new;
                if($_SESSION['cart'][$key]['giamgia'] == 0)
                    $total_new = $quanlity_new * $_SESSION['cart'][$key]['dongia'];
                else
                    $total_new = $quanlity_new * $_SESSION['cart'][$key]['giamgia'];    
                $_SESSION['cart'][$key]['total'] = $total_new;
                
            }
        }
    }
?>
