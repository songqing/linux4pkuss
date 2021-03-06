<?php

namespace service;
use DBHelper;
require_once '../util/DBHelper.class.php';
/**
 *
 * @author xusong
 *        
 */
class AttachmentCheckService {
	// TODO - Insert your code here
	function check_input($value)
	{
		// 去除斜杠
		if (get_magic_quotes_gpc())
		{
			$value = stripslashes($value);
		}
		// 如果不是数字则加引号
		if (!is_numeric($value))
		{
			$value = "'" . mysql_real_escape_string($value) . "'";
		}
		return $value;
	}
	
	public function GetList($strWhere)
	{	
		$param=self::check_input($strWhere);
		$sql = "select * from attachment_tb where 1=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	public function PassCheck($strWhere)
	{
		$param=self::check_input($strWhere);
		$sql = "update attachment_tb set isshare=1 where id=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	public function DeleteAttach($strWhere)
	{
		$param=self::check_input($strWhere);
		$sql = "delete from attachment_tb where id=$param ";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
}

?>