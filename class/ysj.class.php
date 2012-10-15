<?php
class ysj{
	function addNews($title,$item,$url,$text){
		$insertSQL="insert into ysj(ysjTitle,itemsId,imgurl,ysjText) values('$title',$item,'$url','$text')";
		$db=new DB_MySQL;
		$db->query($insertSQL);
		$db->close();
	}
	function getNewses($page,$records){
		$selectSQL="select * from ysj";
		$db=new DB_MySQL;
		$newslist=$db->fetch_page_query($selectSQL,$page,$records);
		$db->close();
		return $newslist;
	}
	
	function getListItem(){
		$selectSQL="select * from ysj";
		$db=new DB_MySQL;
		$data=$db->fetch_all_array($selectSQL);
		$db->close();
		return $data;
	}
	
	function getItem(){
		$selectSQL="select * from ysitems";
		$db=new DB_MySQL;
		$data=$db->fetch_all_array($selectSQL);
		$db->close();
		return $data;
	}
	
	function getPageRows($offset,$num,$id,$table){
         $query = "select * from $table where itemsid=$id limit $offset,$num";
         $db=new DB_MySQL;
         $list=$db->fetch_all_array($query);
         $db->close();
         return $list;        
         
     }
     
     function getRowTotal($table,$id){
        $query="select * from $table where itemsid=$id";
        $db=new DB_MySQL;
        $numrow=$db->num_rows($query);
        $db->close();
        return $numrow;
    }
	
	function getNewsItem($page,$records,$nid){
			$selectSQL="select * from ysj where itemsId=$nid";
			$db=new DB_MySQL;
			$newslist=$db->fetch_page_query($selectSQL,$page,$records);
			$db->close();
			return $newslist;
		}
	
	function deleteNews($nid){
		$deleteSQL="delete from ysj where ysjid=$nid";
		$db=new DB_MySQL;
		$db->query($deleteSQL);
		$db->close();
	}
	function getNews($nid){
		$selectSQL="select * from ysj where ysjId=$nid";
		$db=new DB_MySQL;
		$news=$db->fetch_one_array($selectSQL);
		$db->close();
		return $news;
	}
	function updateNews($nid,$ntitle,$ncontent){
		$updateSQL="update news set ntitle='$ntitle',ncontent='$ncontent' where nid=$nid";
		$db=new DB_MySQL;
		$db->query($updateSQL);
		$db->close();
	}
}
?>
