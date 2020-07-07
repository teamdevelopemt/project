<?php
//そら
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dare式</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <!-- ダレさん（左側に今回は設置） -->
    <header>

    </header>
    <main>
        <!-- ダレさん -->
        <div class="top"></div>
        <div class="products"></div>
        <!-- 内藤さん -->
        <div class="about"></div>
        <div class="mentors"></div>
    </main>
    <!-- そら -->
    <footer>
        <div class="contact">
            <h4 class="">体験予約</h4>
            <form action="contact01.php" method="POST">
                <dl>
                    <dt>name</dt>
                    <dd>
                        <input name="name" type="text" required="required" id="name">
                    </dd>
                    <dt>email</dt>
                    <dd>
                        <input name="email" type="email" required="required" id="email">
                    </dd>
                    <dt>お問い合わせ内容</dt>
                    <dd>
                        <textarea name="content" required="required" id="content"></textarea>
                    </dd>
                    <input type="hidden" id="token" name="token" value="1234567" />
                </dl>
                <div>
                    <button>submit</button>
                </div>


            </form>
            <h4 class="">入会申込み</h4>
            <form action="contact02.php">

            </form>
        </div>
        <div class="office"></div>
    </footer>
    <!-- 内藤さん -->
    <script>

    </script>
</body>

</html>
