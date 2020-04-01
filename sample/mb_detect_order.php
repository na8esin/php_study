<?php
echo implode(", ", mb_detect_order()).PHP_EOL;

/* 
mbstring.languageをコメントアウトした状態
PS>php .\mb_detect_order.php
ASCII, UTF-8

mbstring.language = Japaneseコメントイン
PS>php .\mb_detect_order.php
ASCII, JIS, UTF-8, EUC-JP, SJIS
*/

var_dump(mb_ereg_match("鐵",'鐵薔薇'));