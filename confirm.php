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
    $_SESSION['reason'] = $_POST['reason'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['email_cf'] = $_POST['email_cf'];
    $_SESSION['phone'] = $_POST['phone'];
    //未
    $_SESSION['contact'] = $_POST['contact'];
    //未
    $_SESSION['date01'] = $_POST['date01'];
    //未
    $_SESSION['date02'] = $_POST['date02'];
    $_SESSION['content'] = $_POST['content'];

    //ラジオボタン用
    if (isset($_POST["grade"])) {
        $grade = $_POST["grade"];
    }


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
                                    <?php echo $_SESSION['grade'] ?>
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
                                    <?php echo $_SESSION['email_cf'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[携帯電話番号]:</td>
                                <td>
                                    <?php echo $_SESSION['email_cf'] ?>
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
                                    <?php echo nl2br($_SESSION['date01']); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[無料体験希望日時]:</td>
                                <td>
                                    <?php echo nl2br($_SESSION['date02']); ?>
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
