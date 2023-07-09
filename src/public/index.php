<?php 
$countries = ["ブラジル", "日本", "スペイン"];

foreach ($countries as $number => $countryName) {
  $position = $number + 1;
  echo $position . "番目: " . $countryName . "が入っています。" . "\n";
}
