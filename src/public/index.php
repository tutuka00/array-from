<?php
$tweets = [
    [
        'id' => 1,
        'userName' => 'くろさき',
        'tweets' => 'お腹すいた',
        'created_at' => '2022/10/22',
    ],
    [
        'id' => 2,
        'userName' => 'いしだ',
        'tweets' => 'カレーを食べたい',
        'created_at' => '2022/10/23',
    ],
    [
        'id' => 3,
        'userName' => 'すずき',
        'tweets' => 'すき焼きを食べたい',
        'created_at' => '2022/10/24',
    ],
    [
        'id' => 4,
        'userName' => 'さとう',
        'tweets' => '寿司を食べたい',
        'created_at' => '2022/10/25',
    ],
    [
        'id' => 5,
        'userName' => 'おだ',
        'tweets' => '熱々芸人',
        'created_at' => '2022/10/26',
    ],
    [
        'id' => 6,
        'userName' => 'いとう',
        'tweets' => '抹茶が好き',
        'created_at' => '2022/10/27',
    ],
    [
        'id' => 7,
        'userName' => 'さど',
        'tweets' => 'お散歩',
        'created_at' => '2022/10/28',
    ],
]; 
$satouTweets = [];
foreach ($tweets as $tweet) {
    if ($tweet["userName"] == "さとう") {
        $satouTweets[] = $tweet;
    }
}
?>
<!-- 以下はHTMLのコードになります -->
<!-- 今は「こんな処理をしているんだな〜」とざっくり見ていただけたらと思います！ -->
<!DOCTYPE html>
<html lang="ja">

<!-- headタグの中の処理で、ブラウザのタブに表示されるタイトルを設定しています -->
    <head>
        <meta charset="UTF-8">
        <title>投稿ページ</title>
    </head>
    <!-- bodyタグの中の処理で、ブラウザ上に表示させる「タイトル」や、別の画面に遷移する「ボタン」を作成しています -->
    <body>
        <h1>投稿ページ</h1>
        <a href="top.php">
            <button type="button">綺麗なデザインでやりたい方はこちら</button>
        </a>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ユーザー名</th>
                        <th>ツイート</th>
                        <th>作成日時</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($satouTweets as $tweet): ?>
                        <tr>
                            <td><?php echo $tweet['userName']; ?></td>
                            <td><?php echo $tweet['tweets']; ?></td>
                            <td><?php echo $tweet['created_at']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>