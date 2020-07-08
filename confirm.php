<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <title>送信確認フォーム</title>
    <!-- PHP -->
    <?php
    session_start();
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['kana'] = $_POST['kana'];
    $_SESSION['child_name'] = $_POST['child_name'];
    $_SESSION['child_kana'] = $_POST['child_kana'];
    $_SESSION['organization'] = $_POST['organization'];
    // $grade = $_POST['grade'];
    //未
    // $_SESSION['reason'] = $_POST['reason'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['email_cf'] = $_POST['email_cf'];
    $_SESSION['phone'] = $_POST['phone'];
    //未
    // $_SESSION['contact'] = $_POST['contact'];
    //未
    $_SESSION['date01'] = $_POST['date01'];
    //未
    $_SESSION['date02'] = $_POST['date02'];
    $_SESSION['content'] = $_POST['content'];
    $_SESSION['token'] = $_POST['token'];

    //ラジオボタン用
    if (isset($_POST["grade"])) {
        $_SESSION['grade'] = $_POST["grade"];
    }

    //チェックボックス用
    if (isset($_POST['reason']) && is_array($_POST['reason'])) {
        $_SESSION['reason'] = implode("、", $_POST["reason"]);
    }
    // var_dump($_SESSION['reason']);

    if (isset($_POST['contact']) && is_array($_POST['contact'])) {
        $_SESSION['contact'] = implode("、", $_POST["contact"]);
    }

    if (isset($_POST['time01']) && is_array($_POST['time01'])) {
        $_SESSION['time01'] = implode("、", $_POST["time01"]);
    }

    if (isset($_POST['time02']) && is_array($_POST['time02'])) {
        $_SESSION['time02'] = implode("、", $_POST["time02"]);
    }


    // var_dump($_SESSION['reason']);

    // if (empty($_POST['address'])) {
    //     $_SESSION['address'] = "記入無し";
    // } else {
    //     $_SESSION['address'] = $_POST['address'];
    // }
    // if (empty($_POST['phone'])) {
    //     $_SESSION['phone'] = "記入無し";
    // } else {
    //     $_SESSION['phone'] = $_POST['phone'];
    // }
    // $value = $_POST['subjectR'];
    // if ($value == "checkboxA") {
    //     $_SESSION['subject'] = "〇〇について";
    // } elseif ($value == "checkboxB") {
    //     $_SESSION['subject'] = "△△について";
    // } else {
    //     $_SESSION['subject'] = $_POST['subject'];
    // }
    // $_SESSION['main'] = $_POST['main'];
    ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="conrtainer left">
                <div class="col-xs-10 col-xs-offset-1" style="margin-top:30px; margin-bottom:30px;">
                    お問い合わせありがとうございます。<br>
                    この内容で送信いたします。<br>
                    <table class="table" style="table-layout:fixed;">
                        <thead>
                            <th style="width:200px;"></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>[氏名]:</td>
                                <td>
                                    <?php echo $_SESSION['name']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[氏名(カナ)]:</td>
                                <td>
                                    <?php echo $_SESSION['kana']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[お子様氏名]:</td>
                                <td>
                                    <?php echo $_SESSION['child_name']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[お子様氏名(カナ)]:</td>
                                <td>
                                    <?php echo $_SESSION['child_name']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[お子様の学校名・団体名]:</td>
                                <td>
                                    <?php echo $_SESSION['organization']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[お子様の学年]:</td>
                                <td>
                                    <input type="radio" name="grade" value="01" <?php if ($_SESSION['grade'] == '01') {
                                                                                    echo 'readonly checked';
                                                                                } else {
                                                                                    echo 'disabled';
                                                                                } ?>>高１
                                    <input type="radio" name="grade" value="02" <?php if ($_SESSION['grade'] == '02') {
                                                                                    echo 'readonly checked';
                                                                                } else {
                                                                                    echo 'disabled';
                                                                                } ?>>高２
                                    <input type="radio" name="grade" value="03" <?php if ($_SESSION['grade'] == '03') {
                                                                                    echo 'readonly checked';
                                                                                } else {
                                                                                    echo 'disabled';
                                                                                } ?>>高３

                                </td>
                            </tr>
                            <tr>
                                <td>[当HPアクセスのきっかけ]:</td>
                                <td>
                                    <?php echo $_SESSION['reason'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[メールアドレス]:</td>
                                <td>
                                    <?php echo $_SESSION['email'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[メールアドレス(確認)]:</td>
                                <td>
                                    <?php echo $_SESSION['email_cf'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[携帯電話番号]:</td>
                                <td>
                                    <?php echo $_SESSION['phone'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[お問い合わせ内容]:</td>
                                <td>
                                    <?php echo nl2br($_SESSION['contact']); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[無料面談希望日時]:</td>
                                <td>
                                    <?php echo nl2br($_SESSION['date01']); ?><br>
                                    <?php echo nl2br($_SESSION['time01']); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[無料体験希望日時]:</td>
                                <td>
                                    <?php echo nl2br($_SESSION['date02']); ?><br>
                                    <?php echo nl2br($_SESSION['time02']); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[お問い合わせ詳細]:</td>
                                <td>
                                    <?php echo nl2br($_SESSION['content']); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="submit.php" method="Post">
                        <button type="submit" class="btn btn-success btn-lg btn-block">送信</button>
                    </form>
                    <br>
                    <form action="edit.php" method="Post">
                        <button type="submit" class="btn btn-warning btn-lg btn-block">編集</button>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>
