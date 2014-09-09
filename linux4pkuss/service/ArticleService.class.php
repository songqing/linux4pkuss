<?php 

/*
 * author:liqing
 * */
require_once '../util/DBHelper.class.php';

class ArticleService{
	
	//发表文章，默认审核标志为0
	public function  article_add($num,$title,$createdate,$content,$isshare,$theme_id){
		$sql="insert into article_tb(num,title,createdate,content,isshare,theme_id) values('$num','$title','$createdate','$content','$isshare','$theme_id')";
		$db=new DBHelper();
		$result=$db->exec_other($sql);
		return $result;
	}
	//文章列表中显示经过审核的文章
	public function article_queryAll(){
		$sql="select * from article_tb where isshare=1 order by id asc";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	//通过id定位到某一文章，用于显示文章内容
	public function article_queryById($id){
		$sql="select * from article_tb where isshare=1 and id=$id";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	//点击首页上的一级标题：相关文章(id为4)，显示其下的二级标题
	public function theme_query(){
		$sql="select * from theme_tb where parent_id=4 order by createdate desc";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	//点击首页上的一级标题：相关文章(id为4)，显示其下的二级标题
	public function theme_queryById($themeid){
		$sql="select * from theme_tb where parent_id=4 and id=".$themeid;
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	
	public function teacher_query(){
		$sql="select * from theme_tb where id=7";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
	//修改更新文章
	public function article_upt($id,$title,$createdate,$content,$theme_id){
		$sql="update article_tb set title="."'".$title."'".",createdate="."'".$createdate."'".",content="."'".$content."'".",theme_id=".$theme_id." where id=".$id;
		$db=new DBHelper();
		$result=$db->exec_other($sql);
		return $result;
	}
	//删除文章
	public function article_del($id){
		$sql="delete from article_tb where id in"."(".$id.")";
		$db=new DBHelper();
		$result=$db->exec_other($sql);
		
		return $result;
	}
	public function GetList($strWhere)
	{
		$sql = "select * from ArticleContent where ArticleID='".$strWhere."'";
		$db=new DBHelper();
		$result=$db->exec_query($sql);
		return $result;
	}
}



