<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin:0;
        padding:40px;
        background:#fff6fa;
        font-family: "Tahoma", sans-serif;
        color:#555;
    }

    table{
        width:90%;
        margin:auto;
        border-collapse:collapse;
        background:#ffffff;
        border-radius:15px;
        overflow:hidden;
        box-shadow:0 8px 20px rgba(255,182,193,.25);
    }

    thead{
        background:#f8b6c8;
        color:white;
    }

    th{
        padding:16px;
        font-size:16px;
        letter-spacing:.5px;
    }

    td{
        padding:14px;
        text-align:center;
        border-bottom:1px solid #f8dbe5;
        transition:.3s;
    }

    tr:nth-child(even){
        background:#fff9fb;
    }

    tr:hover{
        background:#ffeaf1;
    }

    img{
        width:200px;
        border-radius:12px;
        border:3px solid #ffd6e3;
        padding:3px;
        background:white;
    }
</style>
<h2 style="
text-align:center;
color:#e87aa4;
margin-bottom:25px;
font-size:30px;
font-weight:bold;
">
🌸 รายการผู้เข้าพัก 🌸
</h2>
<body>
    
    <?php
        include "action/connect.php";
        //       ดึง   ทั้งหมด จาก ตาราง orders
        $sql = "SELECT * FROM orders";
        //                      db.  คำสั่ง
        $result = mysqli_query($con, $sql);
        // ทดสอบตัวแปร
        // var_dump($result);
    ?>

    <table border=1>
        <thead>
            <th>รหัสรายการ</th>
            <th>ชื่อผู้เข้าพัก</th>
            <th>ชำระเงิน</th>
            <th>ประเภท</th>
            <th>ห้อง</th>
            <th>ภาพ</th>
        </thead>

        <?php
            foreach($result as $order){
                ?>
                <tr>
                    <td><?= $order["orders_id"] ?></td>
                    <td><?= $order["name"] ?></td>
                    <td><?= $order["payment"] ?></td>
                    <td><?= $order["usage_type"] ?></td>
                    <td><?= $order["room_id"] ?></td>
                    <td>
                        <img 
                            src="<?= $order["image"] ?>"
                            style="width:200px"
                        >
                    </td>
                </tr>
                <?php
            }
        ?>
    </table>

</body>
</html>