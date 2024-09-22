<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "students";
    $conn = mysqli_connect($server, $user, $password, $db);
    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);}
    $sql = "SELECT * FROM students ORDER BY class ASC";
    $data = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=“https://cdn.jsdelivr.net/gh/NT36374/01.php@main/05.php“rel="stylesheet">
    <title>ณัฐชา</title>
</head>
<body>
    <div class="container pb-4 px-2">
        <h3 class="display-7 p-5 text-center">รายชื่อ Database</h3>
        <table class="table text-center">
            <thead>
                <tr>
                    <th>ชื่อ-นามสกุล</th>
                    <th>รหัสประจำตัว</th>
                    <th>ระดับชั้น</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($dat = mysqli_fetch_assoc($data)) {?>
                    <tr>
                        <td><?php echo $dat["fname"]." ".$dat["lname"]?></td>
                        <td><?php echo $dat["s_id"]?></td>
                        <td><?php echo $dat["class"]?></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>
