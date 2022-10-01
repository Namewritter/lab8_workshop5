<?php include "connect.php" ?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div style="display:flex">
            <?php
                $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?"); // 1. รับค่าจาก URL
                $stmt->bindParam(1, $_GET["username"]); // 2. นำค่า username จาก URL
                $stmt->execute(); // 3. นำมาหา
                $row = $stmt->fetch(); // 4. ดึงผลลัพธ์
            ?>

            <div style="padding: 30px; text-align: center">
                <img src='../member_photo/<?=$row["username"]?>.jpg' width='100'>
                <div style="padding: 15px">
                    ชื่อสมาชิก: <?=$row ["name"]?><br>
                    ที่อยู่: <?=$row ["address"]?><br>
                    อีเมล์: <?=$row ["email"]?>
                </div>
            </div>
        </div>
    </body>
</html>
