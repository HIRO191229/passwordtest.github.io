<?php
// 正しいパスワードを設定
$correctPassword = "secret123";

// ユーザーが入力したパスワードを取得
$enteredPassword = $_POST['password'];

// パスワードが一致するか確認
if ($enteredPassword === $correctPassword) {
    echo "<h3>アクセス許可されました</h3>";
    echo "<p>ここに秘密のコンテンツが表示されます。</p>";
} else {
    echo "<h3>パスワードが違います</h3>";
    echo "<p>もう一度試してください。</p>";
}
?>
