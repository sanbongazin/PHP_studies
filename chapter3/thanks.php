<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML4.01 Tranditional//EN"
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP基礎</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $goiken = $_POST['goiken'];
    
    echo $nickname;
    echo '様<br/>';
    
    echo 'Thanks for your messege!';

    echo 'いただいたご意見:';
    echo $email;
    echo 'にメールを送りましたので、ご確認ください。';

    ?>
</body>
</html>