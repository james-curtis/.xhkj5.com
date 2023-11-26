<?php
$data = array (
  'exp' => 0,
  'data' => 
  array (
    'evalcode' => 
    array (
      'interthread' => 
      array (
        'check' => '
			$parameter[\'pnumber\'] = $parameter[\'pnumber\'] ? $parameter[\'pnumber\'] : array(1);
			if(!in_array($params[2] + 1, (array)$parameter[\'pnumber\'])
			|| $_G[\'basescript\'] == \'forum\' && $parameter[\'fids\'] && !in_array($_G[\'fid\'], $parameter[\'fids\'])
			|| $_G[\'basescript\'] == \'group\' && $parameter[\'groups\'] && !in_array($_G[\'grouptypeid\'], $parameter[\'groups\'])
			) {
				$checked = false;
			}',
        'create' => '$adcode = $codes[$adids[array_rand($adids)]];',
      ),
    ),
    'parameters' => 
    array (
      'interthread' => 
      array (
        8 => 
        array (
          'link' => 'http://wpa.qq.com/msgrd?V=3&uin=2444300667&Site=%20%D1%B6%BB%C3%CD%F8%C2%E7&Menu=yes&from=discuz',
          'alt' => '广告位招租 - 请联系QQ:2444300667',
          'width' => '853',
          'height' => '',
          'url' => 'http://www.xhkj5.com/data/attachment/common/cf/150601t8yqq5dond8nnnn3.png',
          'fids' => 
          array (
          ),
          'pnumber' => 
          array (
            0 => '1',
            1 => '2',
            2 => '3',
            3 => '4',
            4 => '5',
            5 => '6',
            6 => '7',
            7 => '8',
            8 => '9',
            9 => '10',
          ),
        ),
      ),
    ),
    'code' => 
    array (
      'forum' => 
      array (
        'interthread' => 
        array (
          8 => '<a href="http://wpa.qq.com/msgrd?V=3&uin=2444300667&Site=%20%D1%B6%BB%C3%CD%F8%C2%E7&Menu=yes&from=discuz" target="_blank"><img src="http://www.xhkj5.com/data/attachment/common/cf/150601t8yqq5dond8nnnn3.png" width="853" alt="广告位招租 - 请联系QQ:2444300667" border="0"></a>',
        ),
      ),
      'group' => 
      array (
        'interthread' => 
        array (
          8 => '<a href="http://wpa.qq.com/msgrd?V=3&uin=2444300667&Site=%20%D1%B6%BB%C3%CD%F8%C2%E7&Menu=yes&from=discuz" target="_blank"><img src="http://www.xhkj5.com/data/attachment/common/cf/150601t8yqq5dond8nnnn3.png" width="853" alt="广告位招租 - 请联系QQ:2444300667" border="0"></a>',
        ),
      ),
    ),
  ),
);
