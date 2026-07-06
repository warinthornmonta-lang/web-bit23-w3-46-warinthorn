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
        background:linear-gradient(135deg,#fff8fb,#ffeef5);
        font-family:"Tahoma",sans-serif;
        color:#666;
    }

    table{
        width:90%;
        margin:auto;
        border-collapse:collapse;
        background:#ffffff;
        border-radius:18px;
        overflow:hidden;
        box-shadow:0 10px 25px rgba(255,182,193,.25);
    }

    thead{
        background:#f7a9c4;
        color:white;
    }

    th{
        padding:18px;
        font-size:17px;
        letter-spacing:.5px;
    }

    td{
        padding:16px;
        text-align:center;
        border-bottom:1px solid #ffe0ea;
        transition:.3s;
    }

    tr:nth-child(even){
        background:#fff9fc;
    }

    tr:hover{
        background:#ffeef5;
    }

    img{
        width:200px;
        border-radius:15px;
        border:3px solid #ffd6e5;
        padding:4px;
        background:white;
    }

    h2{
        text-align:center;
        color:#e87aa4;
        margin-bottom:30px;
        font-size:32px;
        font-weight:bold;
        letter-spacing:1px;
    }

    form{
        text-align:center;
        margin-top:35px;
    }

    input[type="submit"]{
        background:#f7a9c4;
        color:white;
        border:none;
        border-radius:30px;
        padding:14px 40px;
        font-size:17px;
        font-weight:bold;
        cursor:pointer;
        box-shadow:0 6px 15px rgba(247,169,196,.35);
        transition:.3s;
    }

    input[type="submit"]:hover{
        background:#ee8fb3;
        transform:translateY(-3px);
        box-shadow:0 10px 20px rgba(247,169,196,.45);
    }

    input[type="submit"]:active{
        transform:scale(.97);
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
    <form action="room.php" method="post">
        <input type="submit" value="room">

</body>
</html>