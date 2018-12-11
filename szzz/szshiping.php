<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
            <title>
                青尘舍-舍长,相妄,樱花咸鱼,等网络游戏博主聚集地-路人甲制造
            </title>
    <meta name="title" content="青尘舍-舍长,相妄,樱花咸鱼,等网络游戏博主聚集地(路人甲制造)" />
    <meta name="keywords" content="优酷,青尘舍,舍长制造,相妄,樱花咸鱼,相声,搞笑,郭德纲徒弟,游戏,实况,视频" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <link rel="icon" href="../images/qcs2.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../images/qcs2.ico" type="image/x-icon">
    <link href="../../css/bootrtap-css/bootstrap.css" rel="stylesheet">
    <link href="../../css/vue.css" rel="stylesheet" type="text/css">
    <link href="../../css/normalize.css" rel="stylesheet" type="text/css">
    <link href="../../css/meiTiChaXun.css" media="(max-width:768px)" rel="stylesheet" type="text/css">
    <link href="../../css/header.css" media="(min-width:769px)" rel="stylesheet" type="text/css">
    <link href="../../css/sectionsj.css" media="(max-width:768px)" rel="stylesheet" type="text/css">
    <link href="../../css/section.css" media="(min-width:769px)" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../../css/shipingSection.css" media="(min-width:769px)">
    <link href="../../css/SJ_shipingSection.css" media="(max-width:768px)" rel="stylesheet" type="text/css">
    <style type="text/css">
       .dqian .num_name{
            color:#ff461f;
       }
    </style>
    </head>
    <body>
        <header id="headerApp">
            <div class="userInfo-img">
            </div>
            <div class="userInfo-gai">
            </div>
            <div class="userInfo">
                <div class="weibo">
                    <a class="weiboname" href="http://www.qingcs.com/">
                        <img src="../../images/qcs2.png" alt="" >
                        青尘舍
                    </a>
                    <a class="logoname" href="#">
                        <img alt="" src="images/jianju_03.png"/>
                    </a>
                </div>
                <nav class="nav">
                <ul class="nav_num">
                    <li class="num yinyue">
                        <embed src="http://music.163.com/style/swf/widget.swf?sid=458411341&amp;type=2&amp;auto=0&amp;width=278&amp;height=32" width="298" height="52" allownetworking="all">
                    </li>
                    <li class="num num_kongge">
                    </li>
                    <li class="num dqian">
                        <a href="http://www.qingcs.com/szzz">
                            <div class="num_name">
                                <div class="tbiao szzz" style=" border:1px #ff461f solid;">
                                </div>
                                舍长驾到
                            </div>
                        </a>
                    </li>
                    <li class="num num_kongge">
                    </li>
                    <li class="num">
                        <a href="http://www.qingcs.com/xiangwang">
                            <div class="num_name">
                            <div class="tbiao xw">
                            </div>
                                相妄精品
                            </div>
                        </a>
                    </li>
                    <li class="num num_kongge">
                    </li>
                    <li class="num">
                        <a href="https://music.163.com/#/artist?id=12265197&market=sogouqk" target="_blank">
                            <div class="num_name">
                            <div class="tbiao yhxy">
                            </div>
                                樱花咸鱼
                            </div>
                        </a>
                    </li>
                    <li class="num num_kongge">
                    </li>
                    <li class="num">
                        <a href="http://www.qingcs.com/santijh">
                            <div class="num_name">
                                三体计划
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
            </div>
            <div class="logo">
            </div>
        </header>
        <section id="sectionApp">
            <div class="play_zs">
                <div class="play-box">
                <!-- {ljdz}
                {bianhao} -->
                <div class="bofang">
                <?php
                    $servername = "193.112.37.253";
                        $username = "root";
                        $password = "sunhaiwei1998";
                        $dbname = "szzz_db";
                        // $q = isset($_GET["q"]) ? intval($_GET["q"]) : '';
                        $biaoti=$_GET["biaoti"];
                        // 创建连接
                        $conn = new mysqli($servername, $username, $password, $dbname);
                         // 检测连接
                        if ($conn->connect_error) {
                             die("连接失败: " . $conn->connect_error);
                        }
                        mysqli_set_charset($conn,"utf8");

                        $sql1 = "SELECT * FROM szzz_sp where bt='".$biaoti."'";
                        $result1=mysqli_query($conn, $sql1);
                        $row1=mysqli_fetch_array($result1);

                        echo '<embed type="application/x-shockwave-flash"  src="http://player.youku.com/player.php/sid/'.$row1["bfid"].'/v.swf"id="movie_player"
name="movie_player" bgcolor="#FFFFFF" quality="high" allowfullscreen="true"
flashvars="isShowRelatedVideo=false&showAd=0&isAutoPlay=true&isDe

bug=false&UserID=&winType=interior&playMovie=true&MMControl=false&

MMout=false&RecordCode=1001,1002,1003,1004,1005,1006,

2001,3001,3002,3003,3004,3005,3007,3008,9999" pluginspage=" http://www.macromedia.com/go/getflashplayer" width="973" height="545"/>';
                        echo '
                </div>

                <div class="play_xuanji scrollbar">
                    <ul>';
                    //----------------------------------------------------------------------
                        if($row1["fenlei"]){
                            $sql = "SELECT * FROM szzz_sp where fenlei='".$row1["fenlei"]."' ORDER BY uptime,shiwan asc";
                        }
                        else{
                            $sql = "SELECT * FROM szzz_sp where shiwan='".$row1["shiwan"]."' ORDER BY uptime,shiwan asc";
                        }
                        $result=mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result)>0){
                            while ($row=mysqli_fetch_array($result)) {
                                if($row["bt"]!=$biaoti)
                                    echo '<li title="'.$row["bt"].'" >
                                        <a href="./szshiping.php?biaoti='.$row["bt"].'"><img src="'.$row["srcimg"].'" alt="'.$row["bt"].'" width="100" height="60">
                                        <h1>'.$row["fenlei"]." ".$row["shiwan"].'</h1>
                                        <h5>'.$row["bt"].'</h5>
                                        </a>
                                    </li>';
                                else
                                    echo '<li class="biankuang" title="'.$row["bt"].'" >
                                        <a href="##"><img src="'.$row["srcimg"].'" alt="'.$row["bt"].'" width="100" height="56">
                                        <h1>'.$row["fenlei"]." ".$row["shiwan"].'</h1>
                                        <h5>'.$row["bt"].'</h5>
                                        </a>
                                    </li>';
                            }
                        }

                        // echo '<li v-for="value in nr" v-html="value" title="【舍长直播】西部爱情故事—《荒野大镖客2》实况17" >
                        //     <a href=""><img src="https://vthumb.ykimg.com/054101015BF378478B747593EE249258" alt="【舍长直播】西部爱情故事—《荒野大镖客2》实况17" width="100" height="60">
                        //     <h1>荒野大镖客2</h1>
                        //     <h5>【舍长直播】西部爱情故事—《荒野大镖客2》实况17</h5>
                        //     </a>
                        // </li>';
                        if ($conn->connect_error) {
                             die("连接失败: " . $conn->connect_error);
                        }
                        mysqli_set_charset($conn,"utf8");
                    //----------------------------------------------------------------------
                        $sql2 = "SELECT * FROM szzz_sp where bt='".$biaoti."'";
                        $result2=mysqli_query($conn, $sql2);
                        $row2=mysqli_fetch_array($result2);

                        echo '</ul>
                        </div>
                    </div>
                    <div class="biaoti-lanmu">
                        <div class="play_title"><a href="" id="smy">'.$row2["fenlei"]." ".$row2["shiwan"].'</a><span>'.$row2["bt"].'</span></div>
                        ';
                ?>
                <div class="play_guanggao">
                    <h1>去广告小贴士：<p>方法一：买一个优酷vip会员</p></h1>
                    <div class="f2">
                        <h1>方法二：
                        <p>C:\Windows\System32\drivers\etc</p>
                        <p class="ms">上述路径下hosts文件里粘贴以下代码<br>
                        然后重启浏览器</p>
                        <p>127.0.0.1 atm.youku.com<br>
                            127.0.0.1 Fvid.atm.youku.com<br>
                            127.0.0.1 html.atm.youku.com<br>
                            127.0.0.1 valb.atm.youku.com<br>
                            127.0.0.1 valf.atm.youku.com<br>
                            127.0.0.1 valo.atm.youku.com<br>
                            127.0.0.1 valp.atm.youku.com<br>
                            127.0.0.1 lstat.youku.com<br>
                            127.0.0.1 speed.lstat.youku.com<br>
                            127.0.0.1 urchin.lstat.youku.com<br>
                            127.0.0.1 stat.youku.com<br>
                            127.0.0.1 static.lstat.youku.com<br>
                            127.0.0.1 valc.atm.youku.com<br>
                            127.0.0.1 vid.atm.youku.com<br>
                            127.0.0.1 walp.atm.youku.com<br>
                        </p></h1>

                    </div>
                </div>
                    </div>
                    </div>
                <div class="gengduotuijian">
                <div class="tuijianbiaoti">
                    <h1 class="gdtj"></h1>
                    <!-- <span><a href="#">更多</a></span> -->
                </div>
                <div class="tuijiannr">
                    <ul class="deng">
                        <li class="tuijian_neirong">
                            <a href="http://www.qingcs.com/szzz/szshiping.php?biaoti=【舍长制造】刺客信条：兄弟会 DLC剧情娱乐解说 达芬奇的消失 01" title="【舍长制造】刺客信条：兄弟会 DLC剧情娱乐解说 达芬奇的消失 01">
                            <img src="https://vthumb.ykimg.com/05410408527141B66A0A3F42B66798A4" alt="">
                            <div class="nr_xx">
                                <p class="title">【舍长制造】刺客信条：兄弟会 DLC剧情娱乐解说 达芬奇的消失 01</p>
                                <div class="zhezhao">
                                    <p class="gtime"><img src="../../images/szhong.png" alt="">2011-04-14</p>
                                    <p class="play">时长：27:37</p>
                                </div>
                            </div>
                        </a>
                        </li>
                        <li class="tuijian_neirong">
                            <a href="http://www.qingcs.com/szzz/szshiping.php?biaoti=【舍长制造】丧尸、恐怖、求生——舍长的行尸走肉 第一期" title="【舍长制造】丧尸、恐怖、求生——舍长的行尸走肉 第一期">
                            <img src="https://vthumb.ykimg.com/05410508528A6DD76A0A462EFAA86C7D" alt="">
                            <div class="nr_xx">
                                <p class="title">【舍长制造】丧尸、恐怖、求生——舍长的行尸走肉 第一期</p>
                                <div class="zhezhao">
                                    <p class="gtime"><img src="../../images/szhong.png" alt="">2012-05-11</p>
                                    <p class="play">时长：57:57</p>
                                </div>
                            </div>
                        </a>
                        </li>
                        <li class="tuijian_neirong">
                            <a href="http://www.qingcs.com/szzz/szshiping.php?biaoti=【舍长制造】恐怖游戏？Grey（格林）完全实况 01" title="【舍长制造】恐怖游戏？Grey（格林）完全实况 01">
                            <img src="https://vthumb.ykimg.com/0541040852E885A96A0A4A56F1A86476" alt="">
                            <div class="nr_xx">
                                <p class="title">【舍长制造】恐怖游戏？Grey（格林）完全实况 01</p>
                                <div class="zhezhao">
                                    <p class="gtime"><img src="../../images/szhong.png" alt="">2012-09-28</p>
                                    <p class="play">时长：45:39</p>
                                </div>
                            </div>
                        </a>
                        </li>
                        <li class="tuijian_neirong">
                            <a href="http://www.qingcs.com/szzz/szshiping.php?biaoti=【自娱自乐】这不是相声" title="【自娱自乐】这不是相声">
                            <img src="https://vthumb.ykimg.com/0541040852F3550B6A0A450440EA935B" alt="">
                            <div class="nr_xx">
                                <p class="title">【自娱自乐】这不是相声</p>
                                <div class="zhezhao">
                                    <p class="gtime"><img src="../../images/szhong.png" alt="">2012-09-22</p>
                                    <p class="play">时长：35:22</p>
                                </div>
                            </div>
                        </a>
                        </li>
                        <li class="tuijian_neirong">
                            <a href="http://www.qingcs.com/szzz/szshiping.php?biaoti=【舍长制造】恐龙们的最终章? —方舟: 灭绝 DLC试玩" title="【舍长制造】恐龙们的最终章? —方舟: 灭绝 DLC试玩">
                            <img src="https://vthumb.ykimg.com/054101015BE4B65E8B39DA919AC7CEA0" alt="">
                            <div class="nr_xx">
                                <p class="title">【舍长制造】恐龙们的最终章? —方舟: 灭绝 DLC试玩</p>
                                <div class="zhezhao">
                                    <p class="gtime"><img src="../../images/szhong.png" alt="">2018-11-09</p>
                                    <p class="play">时长：36:30</p>
                                </div>
                            </div>
                        </a>
                        </li>
                        <li class="tuijian_neirong">
                            <a href="http://www.qingcs.com/szzz/szshiping.php?biaoti=【舍长制造】深海迷航（Subnautica） 通关生存01 下海的生活" title="【舍长制造】深海迷航（Subnautica） 通关生存01 下海的生活">
                            <img src="https://vthumb.ykimg.com/054101015A7830588B7B449CF5483C1D" alt="">
                            <div class="nr_xx">
                                <p class="title">【舍长制造】深海迷航（Subnautica） 通关生存01 下海的生活</p>
                                <div class="zhezhao">
                                    <p class="gtime"><img src="../../images/szhong.png" alt="">2018-02-05</p>
                                    <p class="play">时长：28:35</p>
                                </div>
                            </div>
                        </a>
                        </li>
                    </ul>
                    <div class="gd">
                        <a href="">更多>></a>
                    </div>
                </div>
            </div>

        </section>
        <footer>
            <div class="footer_nr">
               <div class="weix"><h5>微信公众号</h5>
                <img src="../images/ewm.jpg" width="50" height="50" alt="">
               </div>
               <div class="youqlj"><h5>友情链接</h5>
                    <p><a href="http://www.youku.com/">优酷</a></p>
                    <p><a href="https://music.163.com">网易云音乐</a></p>
                </div>
               <div class="xiangglj"><h5>相关链接</h5>
                   <p><a href="https://music.163.com">舍长驾到</a></p>
                   <p><a href="https://music.163.com">相妄精选</a></p>
               </div>
            </div>
        </footer>
</body>
<script src="../../js/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("embed").width(900);
            $("embed").height(500);
            $(".scrollbar").scrollTop($(".scrollbar").scrollTop() + $('.biankuang').offset().top - $(".scrollbar").offset().top);
            $.get("../count.php",function(data,status){
                console.log(data);
            });
        });
    </script>
</html>