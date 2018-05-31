<!DOCTYPE html PUBLIC "-//W3C//DTD HTML4.01 Tranditional//EN">
<html>
<head>
    <meta charset="utf-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <title>PHP基礎</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->
</head>
<body>
    <?php
        $nickname = $_POST['nickname'];
        $email = $_POST['email'];
        $goiken = $_POST['goiken'];

        if($nickname=='')
        {
            echo 'ニックネームが入力されていません';
        }else{
            echo 'ようこそ';
            echo $nickname;
            echo '様';
            echo'<br/>';
        }
        if($nickname==''||$email==''||$goiken==''){
            echo '<form>';
            echo '<input type = "button" onclick="history.back()" value="戻る">';
            echo '</form>';
        }else{
            print '<form method ="post" action = "thanks.php">';
            print '<input type = "button" onclick="history.back()" value = "もどる">';
            print '<input type = "submit" value="OK">';
            print '</form>';
        }
        // echo '<a href = "index.html">戻る</a>'

        echo 'Git Test'
    ?>

</body>
</html>
