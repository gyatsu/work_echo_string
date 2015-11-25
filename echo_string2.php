<?php

echo "正の整数を入力して下さい\n";
$n = fgets(STDIN,4096);

echo "文字を1つ入力して下さい\n";
$s = fgets(STDIN,4096);
$s = rtrim($s, " \n.");

echo "結果を出力します\n";
echo "------------------------\n";

for ($count = 0; $count < $n; $count++){
  echo $s;
}
echo "\n";
