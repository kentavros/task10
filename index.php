<?php
include ('libs/config.php');
include ('libs/SQL.php');

$db = new SQL();
//join
$inner = $db->select(TB_NAME.'.name')->from(TB_NAME)
    ->join('INNER', 'TABLE2', 'TABLE2.id', TB_NAME.'.id')->exec();
$leftInner = $db->select(TB_NAME.'.name')->from(TB_NAME)
    ->join('LEFT OUTER', 'TABLE2', 'TABLE2.id', TB_NAME.'.id')->exec();
$rightInner = $db->select(TB_NAME.'.name')->from(TB_NAME)
    ->join('RIGHT OUTER', 'TABLE2', 'TABLE2.id', TB_NAME.'.id')->exec();
$crossInner = $db->select(TB_NAME.'.name')->from(TB_NAME)
    ->join('CROSS', 'TABLE2')->exec();
$naturalInner = $db->select(TB_NAME.'.name')->from(TB_NAME)
    ->join('NATURAL', 'TABLE2')->exec();
//distinct
$distinct = $db->select('id, name', 'DISTINCT')->from(TB_NAME)->exec();

//Group by
$group = $db->select('id, name')->from(TB_NAME)->group('id')->exec();
$group2 = $db->select(TB_NAME.'.id, TABLE2.name')->from(TB_NAME.', TABLE2')
    ->where(TB_NAME.'.id = TABLE2.id')->group(TB_NAME.'.id')->exec();

//Having
$having = $db->select('id, name')->from(TB_NAME)->group('id')->having('MAX(\'id\')')->exec();

//ORDER
$order = $db->select('id, name')->from(TB_NAME)->order('id', 'DESC')->exec();
$order2 = $db->select('id, name')->from(TB_NAME)->where("name='Sasha'")->order('id', 'ASC')->exec();

//Limit
$limit = $db->select('id, name')->from(TB_NAME)->limit('2, 6')->exec();
$limit2 = $db->delete()->from(TB_NAME)->where('name=\'sasha\'')->limit(1)->exec();






include('template/tmp.php')
?>