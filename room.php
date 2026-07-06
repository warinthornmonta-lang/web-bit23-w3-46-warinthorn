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
        background:linear-gradient(135deg,#f8f3ff,#f3ecff);
        font-family:"Tahoma",sans-serif;
        color:#555;
    }

    h2{
        text-align:center;
        color:#8a5fbf;
        margin-bottom:30px;
        font-size:32px;
        font-weight:bold;
        letter-spacing:1px;
    }

    table{
        width:90%;
        margin:auto;
        border-collapse:collapse;
        background:#ffffff;
        border-radius:18px;
        overflow:hidden;
        box-shadow:0 10px 25px rgba(166,124,255,.20);
    }

    thead{
        background:#b794f4;
        color:white;
    }

    th{
        padding:18px;
        font-size:17px;
    }

    td{
        padding:16px;
        text-align:center;
        border-bottom:1px solid #ece2ff;
        transition:.3s;
    }

    tr:nth-child(even){
        background:#faf7ff;
    }

    tr:hover{
        background:#f1e9ff;
    }

    img{
        width:200px;
        border-radius:15px;
        border:3px solid #d8c3ff;
        padding:4px;
        background:white;
    }

    /* ปุ่มกลับ */
    a{
        display:block;
        width:240px;
        margin:35px auto 0;
        text-align:center;
        text-decoration:none;
        background:#a67cff;
        color:white;
        padding:14px 0;
        border-radius:30px;
        font-size:17px;
        font-weight:bold;
        box-shadow:0 6px 15px rgba(166,124,255,.35);
        transition:.3s;
    }

    a:hover{
        background:#8d63e6;
        transform:translateY(-3px);
        box-shadow:0 10px 20px rgba(166,124,255,.45);
    }

    a:active{
        transform:scale(.97);
    }
</style>
<h2>
💜 รายการห้องพัก 💜
</h2>
<body>
    
    <?php
        include "action/connect.php";
        //       ดึง   ทั้งหมด จาก ตาราง orders
       $sql = "SELECT * FROM rooms";
        //                      db.  คำสั่ง
        $result = mysqli_query($con, $sql);
        // ทดสอบตัวแปร
        // var_dump($result);
    ?>

    <table border=1>
        <thead>
            <th>room</th>
            <th>smoke</th>
            <th>bathtub</th>
            <th>price</th>
            
        </thead>

        <?php
            foreach($result as $order){
                ?>
                <tr>
                    <td><?= $order["room_id"] ?></td>
                    <td><?= $order["smoke"] ?></td>
                    <td><?= $order["bathtub"] ?></td>
                    <td><?= $order["price"] ?></td>
                    
                    
                </tr>
                <?php
            }
        ?>
    </table>
    <a href="index.php">

⬅ กลับหน้ารายการผู้เข้าพัก

</a>

</body>
</html>