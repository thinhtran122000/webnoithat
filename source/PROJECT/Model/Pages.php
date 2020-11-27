<?php
class Pages
{
	public static function findStart($limit)
	{
		if((!isset($_GET["page"])) || ($_GET["page"]=="1"))
		{
			$start=0;
			$_GET["page"]=1;
		}
		else
			$start=($_GET["page"]-1)*$limit;
		return $start;
	}
	public static function findPages($count,$limit)
	{
		$pages=(($count%$limit)==0)?$count/$limit:floor($count/$limit)+1;
		return $pages;
	}
	public static function NextPrev($curpage,$url,$pages)
	{
		$next_prev="";
		if($curpage-1<=0)
			$next_prev.="Preview";
		else
			$next_prev.="<a href=\"".$_SERVER['PHP_SELF'].$url."page=".($curpage-1)."\">Preview</a>";
		$next_prev.=" | ";
		if(($curpage+1)>$pages)
			$next_prev.="Next";
		else
			$next_prev.="<a href=\"".$_SERVER['PHP_SELF'].$url."page=".($curpage+1)."\">Next</a>";
		return $next_prev;
	}
}
?>