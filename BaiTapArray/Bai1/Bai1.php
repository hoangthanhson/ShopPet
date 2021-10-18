<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai1</title>
</head>
<body>
    <?php
    if(isset($_POST["submit"])){
        $n = $_POST["input"];
    }
    
    ?>
    <form action="" method="post">
        <div class="container" align="center">
            <div class="header">
                <h3>
                    Họ tên: Hoàng Thanh Sơn <br>
                    Mssv: 60136746
                </h3>
            </div>
            <div class="content">
                <table align="center" bgcolor="blue"> 
                    <tr align="center" bgcolor="orange">
                        <td colspan="2">
                            <h3>NHẬP VÀ THỰC HIỆN PHÉP TÍNH</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>Nhập n:</td>
                        <td>
                            <input type="text" name="input" id="" size="20" placeholder="Nhập n" required 
                            value="<?php if(isset($n)) echo $n; ?>">
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2">
                            <input type="submit" name="submit" value="Thực hiện">
                        </td>
                    </tr>
                </table>               
            </div>           
        </div>
        <div align="center">
        <?php
        if(is_numeric($n) && $n > 0 && is_int($n+0)){
            $rand = rand(-200,200);
            $dayso = [];
            $count = 0;
            $dem = 0;
            $tong = 0;
            $vitri = null;
            echo "Ngẫu nhiên ". $n ." số nguyên <br>";
            for($i = 1; $i<= $n;$i++){
                $dayso[$i] = rand(-200,200);
                
            }
            for($i = 1;$i<=count($dayso);$i++){
                echo $dayso[$i] ." ";
                if($dayso[$i] % 2 == 0){
                    $dem++;
                }
                if($dayso[$i] < 100){
                    $count++;
                }
                if($dayso[$i] < 0){
                    $tong +=$dayso[$i];
                }
                if($dayso[$i] == 0){
                    $vitri = $i;
                }
            }
            echo"<br>";
            echo "Số lượng các số chẵn là: $dem <br>";
            echo "Có $count bé hơn 100 <br>";
            echo "Tổng các số âm là $tong <br>";
            echo "Số 0 ở vị trí $vitri <br>";
            echo "Mảng đã sắp xếp là: <br>";
            sort($dayso);
            function duyet($dayso){
                $kq = "";
                for($i=0;$i<count($dayso);$i++){
                    $kq .= $dayso[$i] ." ";
                }
                return $kq;
            }
            $duyet = duyet($dayso);
            echo $duyet;
        }
        ?>
        </div>
    </form>
</body>
</html>