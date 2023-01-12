<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">活動実績一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>社会運動記録</legend>
                <label>活動テーマ：<input type="text" name="action"></label><br>
                <label>活動家名：<input type="text" name="name"></label><br>
                <label>活動内容：<input type="text" name="content"></label><br>
                <!-- <label><textarea name="content" rows="4" cols="40"></textarea></label><br> -->
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
</body>

</html>
