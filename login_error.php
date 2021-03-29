<?php
session_start();
if (isset($_SESSION['id'])) {
    header("Location:mypage.php");
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    
    <body>
         <header>
            <img src="4eachblog_logo.jpg" class="logo">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>
        
        <main>
            <div class="box">
                <div class="error">
                    <p>メールアドレスまたはパスワードが間違っています。</p>
                </div>
                <form method="post" action="mypage.php">
                    <div class="mail">
                        <label>メールアドレス</label><br>
                        <input type="text" class="formbox" size="40" name="mail">
                    </div>
                    <div class="password">
                        <label>パスワード</label><br>
                        <input type="password" class="formbox" size="40" name="password">
                    </div>
                    <div class="button">
                        <input type="submit" class="submit" value="ログイン">
                    </div>
                    
                </form>
            </div>
        </main>
        <footer>
            ©2018 InterNous.inc. All rights reserved
        </footer>
    </body>
    
</html>