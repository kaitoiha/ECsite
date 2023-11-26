<?php

namespace App\Constants;

Class Common
{
    // 増やす
    const PRODUCT_ADD = '1';
    //減らす
    const PRODUCT_REDUCE = '2';

    const PRODUCT_LIST = [
        'add' => self::PRODUCT_ADD,
        'reduce' => self::PRODUCT_REDUCE
    ];

    // おすすめ順
    const ORDER_RECOMMEND = '0';
    // 料金の高い順
    const ORDER_HIGHER = '1';
    // 料金の安い順
    const ORDER_LOWER = '2';
    // 新しい順
    const ORDER_LATER = '3';
    // 古い順
    const ORDER_OLDER = '4';
    const SORT_ORDER = [
        'recommend' => self::ORDER_RECOMMEND,
        'higherPrice' => self::ORDER_HIGHER,
        'lowerPrice' => self::ORDER_LOWER,
        'later' => self::ORDER_LATER,
        'older' => self::ORDER_OLDER
    ];
}
