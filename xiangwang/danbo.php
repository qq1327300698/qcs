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

$sql1 = "SELECT fenlei, MAX(uptime) AS MAXIMUM,MAX(srcimg) as img,min(bt) as bt,min(uptime) FROM xw_sp GROUP BY fenlei ORDER BY MAXIMUM asc";
$result1=mysqli_query($conn, $sql1);
$xunh=0;
date_default_timezone_set('Asia/Shanghai');
if(mysqli_num_rows($result1)>0){
    while ($row=mysqli_fetch_array($result1)) {
        $sql = "SELECT COUNT(fenlei) FROM xw_sp WHERE fenlei='".$row["fenlei"]."'";
        $result=mysqli_query($conn, $sql);
        $roww=mysqli_fetch_array($result);

        $sql2 = "SELECT * FROM xw_sp WHERE uptime='".$row["min(uptime)"]."'";
        $result2=mysqli_query($conn, $sql2);
        $row2=mysqli_fetch_array($result2);

        if($row["fenlei"]){
            if($xunh%5!=0){
                echo "<li class='kongg'></li>";
            }
            echo "
                    <li class='groom-module'>
                        <a href='./szshiping.php?biaoti=".$row2["bt"]."' title=''>
                            <img src='".$row["img"]."' alt=''>
                            <div class='card-mark'>
                                <p class='title'>".$row["fenlei"]."</p>
                                <p class='gtime'>更新:".date("Y-m-d",strtotime($row["MAXIMUM"]))."</p>
                                <p class='play'>视频数:".$roww["COUNT(fenlei)"]."</p>
                            </div>
                        </a>
                    </li>";
            $xunh++;
        }


    }
}
$sql3 = "SELECT shiwan, MAX(uptime) AS MAXIMUM,MAX(srcimg) as img,min(bt) as bt,min(uptime) FROM xw_sp GROUP BY shiwan ORDER BY MAXIMUM asc";
$result3=mysqli_query($conn, $sql3);
if(mysqli_num_rows($result3)>0){
    while ($row3=mysqli_fetch_array($result3)) {
        $sql4 = "SELECT COUNT(*) FROM xw_sp WHERE shiwan='".$row3["shiwan"]."'";
        $result4=mysqli_query($conn, $sql4);
        $row4=mysqli_fetch_array($result4);

        $sql5 = "SELECT * FROM xw_sp WHERE uptime='".$row3["min(uptime)"]."'";
        $result5=mysqli_query($conn, $sql5);
        $row5=mysqli_fetch_array($result5);
        if($row3["shiwan"]){
            if($xunh%5!=0){
            echo "<li class='kongg'></li>";
            }
        echo "
                <li class='groom-module'>
                    <a href='./szshiping.php?biaoti=".$row5["bt"]."' title=''>
                        <img src='".$row3["img"]."' alt=''>
                        <div class='card-mark'>
                            <p class='title'>".$row3["shiwan"]."</p>
                            <p class='gtime'>更新:".date("Y-m-d",strtotime($row3["MAXIMUM"]))."</p>
                            <p class='play'>视频数:".$row4["COUNT(*)"]."</p>
                        </div>
                    </a>
                </li>";
            $xunh++;
        }

    }
}
 ?>