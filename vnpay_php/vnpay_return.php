<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>VNPAY RESPONSE</title>
        <!-- Bootstrap core CSS -->
        <!-- <link href="/vnpay_php/assets/bootstrap.min.css" rel="stylesheet"/> -->
        <!-- Custom styles for this template -->
        <!-- <link href="/vnpay_php/assets/jumbotron-narrow.css" rel="stylesheet">          -->
        <script src="/vnpay_php/assets/jquery-1.11.3.min.js"></script>
        <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        .success-message {
            color: green;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .receipt {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: left;
            max-width: 400px;
            margin: 0 auto;
        }
        html, body {
  height: auto;
}

.wrap {

  height: auto;
  display: flex;
  align-items: center;
  justify-content: center;
}

.button {
  width: 140px;
  height: 45px;
  font-family: 'Roboto', sans-serif;
  font-size: 15px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  }

.button:hover {
  background-color: #2EE59D;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
  transform: translateY(-7px);
}
    </style>
    </head>
    <body>
        <?php
        require_once("./config.php");
        $vnp_SecureHash = $_GET['vnp_SecureHash'];
        $inputData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }
        
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }

        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
        ?>
        <!--Begin display -->
        <div class="container">
            <div class="header clearfix">
                <h3 class="text-muted">VNPAY RESPONSE</h3>
            </div>
            <div class="table-responsive">
                <!-- <div class="form-group">
                    <label >Mã đơn hàng:</label>

                   
                </div>    
                <div class="form-group">

                    <label >Số tiền:</label>
                   
                </div>  
                <div class="form-group">
                    <label >Nội dung thanh toán:</label>
                  
                </div> 
                <div class="form-group">
                    <label >Mã phản hồi (vnp_ResponseCode):</label>
                  
                </div> 
                <div class="form-group">
                    <label >Mã GD Tại VNPAY:</label>
                 
                </div> 
                <div class="form-group">
                    <label >Mã Ngân hàng:</label>
              
                </div> 
                <div class="form-group">
                    <label >Thời gian thanh toán:</label>
                  
                </div> 
                <div class="form-group">
                    <label >Kết quả:</label>
                    <label>
                    

                    </label>
                </div>  -->
                                        <div class="success-message">
                                        <p>Hóa đơn thanh toán của bạn!</p>
                                        </div>
                
                                        <div class="receipt">
                                        <h2>Thông Tin Hóa Đơn</h2> <label><?php echo $_GET['vnp_TxnRef'] ?></label>
                                        <p><strong>Số tiền:</strong> <label><?php echo $_GET['vnp_Amount']/100 ?></label>VNĐ</p>
                                        <p><strong>Nội dung thanh toán:</strong>  <label><?php echo $_GET['vnp_OrderInfo'] ?></label> </p>
                                        <p><strong>Mã phản hồi:</strong> <label><?php echo $_GET['vnp_ResponseCode'] ?></label></p>
                                        <p><strong>Mã GD tại VNPAY:</strong> <label><?php echo $_GET['vnp_TransactionNo'] ?></label></p>
                                        <p><strong>Mã ngân hàng:</strong> <label><?php echo $_GET['vnp_BankCode'] ?></label></p>
                                        <!-- <p><strong>Thời gian thanh toán:</strong> <label><?php echo $_GET['vnp_PayDate'] ?></label></p> -->
                                        <p><strong>Kết quả:</strong>    <?php
                                                                if ($secureHash == $vnp_SecureHash) {
                                                                    if ($_GET['vnp_ResponseCode'] == '00') {
                                                                        echo "<span style='color:blue'>GD Thành công</span>";
                                                                    } else {
                                                                        echo "<span style='color:red'>GD Không thành công</span>";
                                                                    }
                                                                } else {
                                                                    echo "<span style='color:red'>Chữ ký không hợp lệ</span>";
                                                                }
                                                                ?></p>
                                        </div>
                                      
                                      
                                      
                                      
                                        <div class="wrap">
                                        <a href="../index.php"> <button class="button">Trang chủ</button></a>
                                        </div>    
                                    
                                              
                                        
            </div>
            <p>
                &nbsp;
            </p>
            <footer class="footer">
                   <p>&copy; VNPAY <?php echo date('Y')?></p>
            </footer>
        </div>  
    </body>
</html>
