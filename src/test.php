<?php

echo '書籍名を入力してください'.PHP_EOL;
$book_name = trim(fgets(STDIN));

echo '著者名を入力してください'.PHP_EOL;
$author = trim(fgets(STDIN));

echo '読書状況を入力してください'.PHP_EOL;
$status = trim(fgets(STDIN));

echo '評価を入力してください(1~5点)'.PHP_EOL;
$score = trim(fgets(STDIN));

echo '感想を入力してください'.PHP_EOL;
$impression = trim(fgets(STDIN));

echo PHP_EOL;

echo '登録が完了しました'.PHP_EOL;
echo '登録情報を表示します'.PHP_EOL;

echo PHP_EOL;

echo '----------------------'.PHP_EOL;
echo '書籍名：'.$book_name.PHP_EOL;
echo '著者名：'.$author.PHP_EOL;
echo '読書状況：'.$status.PHP_EOL;
echo '評価：'.$score.PHP_EOL;
echo '感想：'.$impression.PHP_EOL;
echo '----------------------'.PHP_EOL;

