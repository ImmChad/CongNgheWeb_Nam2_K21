<!DOCTYPE html>
<html>

<head>
    <title>Nhập và tính toán trên dãy số</title>
    <meta charset="utf-8">
    <style>
        * {
            font-family: Tahoma;
        }

        table {
            width: 400px;
            margin: 100px auto;
        }

        table th {
            background: #66CCFF;
            padding: 10px;
            font-size: 18px;
        }

        #ket_qua_nhap {
            background-image: linear-gradient(red, orange, yellow);
        }
    </style>
</head>
<?php
$ket_qua = 0;
$mang_so = 0;
if (isset($_POST['nhap_mang'])) {
    $mang_so = explode(" ", $_POST['nhap_mang']);
    $n = count($mang_so);
    for ($i = 0; $i < $n; $i++) {
        $ket_qua += $mang_so[$i];
    }
}


?>

<body>
    <form method="POST" action="mang-1.php">
        <table border="1">
            <thead>
                <tr>
                    <th colspan="2">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nhập dãy số:</td>
                    <td><input type="text" name="nhap_mang" value=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input id="ket_qua_nhap" type="submit" name="btn_goi" value="Tổng dãy số"></td>
                </tr>
                <tr>
                    <td>Tổng dãy số:</td>
                    <td><input type="text" name="ket_qua" disabled="disabled" value="<?php if(isset($ket_qua)) echo $ket_qua ?>"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>