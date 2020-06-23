<?php
var_dump(preg_match('#^\d{4}/\d{2}/\d{2}$#u', '2010/02/01s'));
var_dump(preg_match('#^\d{4}/\d{2}/\d{2}$#u', '2010/02/01'));
var_dump(preg_match('#d{4}/d{2}/d{2}#u', '1999/09/09'));