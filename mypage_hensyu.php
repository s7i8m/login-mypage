<?php
mb_internal_encoding("utf8");
session_start();

if (empty($_SESSION['id'])) {
    header("Location:login_error.php");
}

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>
    <body>
        <header>
            <img src="4eachblog_logo.jpg" class="logo">
            <div class="logout"><a href="log_out.php">ログアウト</a></div>
        </header>
        <main>
            <div class="box">
                <h2>会員情報</h2>
                <div class="hello">
                    <p>こんにちは！　<?php echo $_SESSION['name'];?>さん</p>
                </div>
                <form method="post" action="mypage_update.php">
                    <div class="picture">
                        <p><img src="<?php echo $_SESSION['picture'];?>"></p>
                    </div>
                    <div class="info">
                        <label>氏名：</label>
                        <input type="text" class="formbox" size="40" value="<?php echo $_SESSION['name'];?>" name="name"><br>
                        
                        <label>メール：</label>
                        <input type="text" class="formbox" size="40" value="<?php echo $_SESSION['mail'];?>" name="mail"><br>
                        
                        <label>パスワード：</label>
                        <input type="text" class="formbox" size="40" value="<?php echo $_SESSION['password'];?>" pattern="^[a-zA-Z0-9]{6,}$" name="password" required><br>
                    </div>
                    <div class="comments">
                        <textarea rows="3" cols="80" value="<?php echo $_SESSION['comments'];?>" name="comments"></textarea>
                    </div>
                    <div class="button">
                        <input type="submit" class="submit" size="40" value="この内容に変更する">
                    </div>
                </form>
            </div>
        </main>
        <footer>
            ©2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>