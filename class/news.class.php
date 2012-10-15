<?php
class News{
	function addNews($title,$id,$text){
		$insertSQL="insert into news(newsTitle,itemsId,newsText) values('$title',$id,'$text')";
		$db=new DB_MySQL;
		$db->query($insertSQL);
		$db->close();
	}
	function getNewses($page,$records){
		$selectSQL="select newsId,newsTitle,newsTime from news";
		$db=new DB_MySQL;
		$newslist=$db->fetch_page_query($selectSQL,$page,$records);
		$db->close();
		return $newslist;
	}
	
	function getListItem(){
		$selectSQL="select * from news";
		$db=new DB_MySQL;
		$data=$db->fetch_all_array($selectSQL);
		$db->close();
		return $data;
	}
	
	function getItem(){
		$selectSQL="select * from items";
		$db=new DB_MySQL;
		$data=$db->fetch_all_array($selectSQL);
		$db->close();
		return $data;
	}
	
	function getNewsItem($page,$records,$nid){
			$selectSQL="select newsId,newsTitle,newsTime from news where itemsId=$nid";
			$db=new DB_MySQL;
			$newslist=$db->fetch_page_query($selectSQL,$page,$records);
			$db->close();
			return $newslist;
		}
	
	function getPageRows($offset,$num,$id,$table){
         $query = "select * from $table where itemsid=$id limit $offset,$num";
         $db=new DB_MySQL;
         $list=$db->fetch_all_array($query);
         $db->close();
         return $list;        
         
     }
     
     public function getRowTotal($table,$id){
        $query="select * from $table where itemsid=$id";
        $db=new DB_MySQL;
        $numrow=$db->num_rows($query);
        $db->close();
        return $numrow;
    }
	
	function deleteNews($nid){
		$deleteSQL="delete from news where newsid=$nid";
		$db=new DB_MySQL;
		$db->query($deleteSQL);
		$db->close();
	}
	function getNews($nid){
		$selectSQL="select * from news where newsId=$nid";
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
