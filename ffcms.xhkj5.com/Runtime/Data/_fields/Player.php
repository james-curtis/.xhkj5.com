<?php
return array (
  0 => 'player_id',
  1 => 'player_name_zh',
  2 => 'player_name_en',
  3 => 'player_info',
  4 => 'player_order',
  5 => 'player_status',
  6 => 'player_copyright',
  7 => 'player_jiexi',
  '_autoinc' => true,
  '_pk' => 'player_id',
  '_type' => 
  array (
    'player_id' => 'smallint(5) unsigned',
    'player_name_zh' => 'varchar(128)',
    'player_name_en' => 'varchar(128)',
    'player_info' => 'varchar(250)',
    'player_order' => 'smallint(3)',
    'player_status' => 'tinyint(1)',
    'player_copyright' => 'smallint(3)',
    'player_jiexi' => 'varchar(120)',
  ),
);
?>