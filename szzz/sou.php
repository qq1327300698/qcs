<?php

$servername = "193.112.37.253";
$username = "root";
$password = "sunhaiwei1998";
$dbname = "szzz_db";
$neir=$_GET["neir"];
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
 // 检测连接
if ($conn->connect_error) {
     die("连接失败: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");

$sql1 = "SELECT * FROM szzz_sp where bt like '%".$neir."%' or shiwan like '%".$neir."%' ORDER BY uptime,shiwan asc";
$result1=mysqli_query($conn, $sql1);
$xunh=1;
if(mysqli_num_rows($result1)>0){
    while ($row=mysqli_fetch_array($result1)) {
        echo "<li>
                <a href='./szshiping.php?biaoti=".$row['bt']."'>
                    <b>".$xunh."</b>
                    <div>
                        <span title='".$row["bt"]."'>".$row["bt"]."</span>
                    </div>
                </a>
            </li>";
        $xunh++;

    }
}
?>