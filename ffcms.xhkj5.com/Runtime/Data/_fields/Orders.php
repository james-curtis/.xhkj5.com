<?php
return array (
  0 => 'order_id',
  1 => 'order_sign',
  2 => 'order_status',
  3 => 'order_uid',
  4 => 'order_gid',
  5 => 'order_money',
  6 => 'order_ispay',
  7 => 'order_shipping',
  8 => 'order_addtime',
  9 => 'order_paytime',
  10 => 'order_confirmtime',
  11 => 'order_info',
  '_autoinc' => true,
  '_pk' => 'order_id',
  '_type' => 
  array (
    'order_id' => 'int(10)',
    'order_sign' => 'varchar(32)',
    'order_status' => 'tinyint(1)',
    'order_uid' => 'mediumint(8)',
    'order_gid' => 'mediumint(8)',
    'order_money' => 'decimal(8,2)',
    'order_ispay' => 'tinyint(1)',
    'order_shipping' => 'tinyint(1)',
    'order_addtime' => 'int(11)',
    'order_paytime' => 'int(11)',
    'order_confirmtime' => 'int(11)',
    'order_info' => 'tinytext',
  ),
);
?>