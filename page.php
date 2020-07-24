
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="./images/logo_e.png">
    <!-- <link rel="icon" href="./img/logo/icon_rect.png"> -->
    <link rel="stylesheet" type="text/css" href="./css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="./css/page.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>手洗い記録 | て AR/AI</title>
</head>
<body>
    <?php
        session_start();
        $id = $_SESSION['id'];
        $hash = $_SESSION['hash'];

        $workspace = "https://kn46itblog.com/hackathon/VRHack20200723";
        $api = "/php_apis/getRecord.php";  // APIの指定
        $url = $workspace.$api;

        // JSONにするオブジェクトの構成例
        // テスト用
        $data = array(
            "id" => $id,
            "hash" => $hash
        );

        // print_r($data);  // 取得はされてるっぽい
        // JSON形式に変換
        $data = json_encode($data);
        // ストリームコンテキストのオプションを作成
        $options = array(
            // HTTPコンテキストオプションをセット
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-type: application/json; charset=UTF-8', //JSON形式で表示
                'content' => $data
            )
        );
        // ストリームコンテキストのオプションを作成
        $options = array(
            // HTTPコンテキストオプションをセット
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-type: application/json; charset=UTF-8', //JSON形式で表示
                'content' => $data
            )
        );
        // ストリームコンテキストの生成
        // ストリーム
        // -> I/Oデータをプログラムで扱えるよう抽象化したもの
        //    -> 抽象化の過程でストリームラッパーが用いられる
        $context = stream_context_create($options);
        // POST送信
        $contents = file_get_contents($url, false, $context);
        // APIのレスポンスをArrayに変換
        global $json_arr;
        $json_arr = json_decode($contents, true);
        //print_r($json_arr["record_list"]);

        //優先度でのソート
        //現在は残り時間のみでのソート。
        //最優先のタスクを取り出す
        
        // -------------------川上
        // $alert = "<script type='text/javascript'>alert('"
        //          .$first["task_id"]."');</script>";
        // echo $alert; // 最初のタスクが表示される！
        // -------------------
    ?>
    <section class="page">
        <section class="header">
            <div class="logout">
                <form action="logout.php" method="POST">
                    <button href="./logout.php" class="btn" name="logout">Logout (<?php echo $id; ?>さん)</button>
                </form>
            </div>
            <div class="logo"><img src="./images/logo_e.png" alt="logo" /></div>
        </section>
        <section class="main">
            <div id="record-page" class="record">
                <?php
                session_start();
                $id = $_SESSION['id'];
                $hash = $_SESSION['hash'];
        
                $workspace = "https://kn46itblog.com/hackathon/VRHack20200723";
                $api = "/php_apis/getRecord.php";  // APIの指定
                $url = $workspace.$api;
        
                // JSONにするオブジェクトの構成例
                // テスト用
                $data = array(
                    "id" => $id,
                    "hash" => $hash
                );
        
                // print_r($data);  // 取得はされてるっぽい
                // JSON形式に変換
                $data = json_encode($data);
                // ストリームコンテキストのオプションを作成
                $options = array(
                    // HTTPコンテキストオプションをセット
                    'http' => array(
                        'method' => 'POST',
                        'header' => 'Content-type: application/json; charset=UTF-8', //JSON形式で表示
                        'content' => $data
                    )
                );
                // ストリームコンテキストのオプションを作成
                $options = array(
                    // HTTPコンテキストオプションをセット
                    'http' => array(
                        'method' => 'POST',
                        'header' => 'Content-type: application/json; charset=UTF-8', //JSON形式で表示
                        'content' => $data
                    )
                );
                // ストリームコンテキストの生成
                // ストリーム
                // -> I/Oデータをプログラムで扱えるよう抽象化したもの
                //    -> 抽象化の過程でストリームラッパーが用いられる
                $context = stream_context_create($options);
                // POST送信
                $contents = file_get_contents($url, false, $context);
                // APIのレスポンスをArrayに変換
                global $json_arr;
                $json_arr = json_decode($contents, true);
                //print_r($json_arr["record_list"]);
        
                //優先度でのソート
                //現在は残り時間のみでのソート。
                //最優先のタスクを取り出す
                
                // -------------------川上
                // $alert = "<script type='text/javascript'>alert('"
                //          .$first["task_id"]."');</script>";
                // echo $alert; // 最初のタスクが表示される！
                // -------------------
            
                //print_r('test');
                //global $json_arr;
                //タスクの表示
                
                function draw_task($json_arr) {
                    /*
                    foreach ($json_arr as $key => $val) {
                        echo "<h1>$key</h1>";
                        if (empty($val)) {
                            continue;
                        }
                        echo "<table border=1 style=border-collapse:collapse;>";
                        echo "<tr>";
                        foreach ($json_arr[$key] as $key2 => $val2) {
                        echo "<th>";
                        echo $key2;
                        echo "</th>";
                        }
                        echo "</tr>";
                        echo "<tr>";
                        foreach ($json_arr[$key] as $key2 => $val2) {
                        echo "<td>";
                        echo $val2;
                        echo "</td>";
                        }
                        echo "</tr>";tml
                        echo "</table>";
                    }*/
                    echo '<table>';
                    echo '<tr><th scope="col">score</th><th scope="col">date</th></tr>';
                    
                    foreach ($json_arr as $item) {
                        echo '<tr><td>'.$item["score"].'</td><td>'.$item["date"].'</td></tr>';
                    }
                    echo '</table>';
                }
                if($json_arr["total_num"] != 0) {
                    draw_task($json_arr["record_list"]);
                    //print_r($json_arr['record_list']);
                }else {
                    echo '<div class="notask"><p> タスクデータがありません... </p><img class="notask_img" src="./img/notask.png" style="width:80%;"></div>';

                }
                ?>
            </div>
        </section>
    </section>
    <script src="https://kit.fontawesome.com/402de0a268.js" crossorigin="anonymous"></script>
    <script src="./js/function.js" type="text/javascript"></script>
    <script src="./js/window_test.js" type="text/javascript"></script>
</body>
</html>
