<?php
$servername = "193.112.37.253";
$username = "root";
$password = "sunhaiwei1998";
$dbname = "szzz_db";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
 // 检测连接
if ($conn->connect_error) {
     die("连接失败: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");

$sql1 = "SELECT * FROM xw_sp ORDER BY uptime DESC LIMIT 15";
$result1=mysqli_query($conn, $sql1);
$xunh=0;
date_default_timezone_set('Asia/Shanghai');
if(mysqli_num_rows($result1)>0){
    while ($row=mysqli_fetch_array($result1)) {
        if($row["fenlei"]){
            if($xunh<10){
                echo "
                <li class='tuijian_neirong'>
                            <a href='./szshiping.php?biaoti=".$row["bt"]."'' title='".$row["bt"]."'>
                            <img src='".$row["srcimg"]."' alt=''>
                            <div class='nr_xx'>
                                <p class='title'>".$row["bt"]."</p>
                                <div class='zhezhao'>
                                    <p class='gtime'><img src='../images/szhong.png' alt=''>".date("m-d",strtotime($row["uptime"]))."</p>
                                    <p class='play'>时长：".$row["timeing"]."</p>
                                </div>
                            </div>
                        </a>
                    </li>";
                $xunh++;
            }
        }
    }
}

 ?>