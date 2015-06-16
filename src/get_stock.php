<?php



$src = file_get_contents("http://stocks.finance.yahoo.co.jp/stocks/detail/?code=3660.t");


if(preg_match('|<td class="stoksPrice">([0-9,]+)</td>|', $src, $m)){
    print_r($m[1]);
}

