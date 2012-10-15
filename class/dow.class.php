<?php
class dow{
	function addNews($title,$photourl,$cc,$dowurl,$itemid){
		$insertSQL="insert into dow(dowFile,imgurl,zz,dowurl,itemId) values('$title','$photourl','$cc','$dowurl',$itemid)";
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
		$selectSQL="select * from file";
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
			$selectSQL="select * from dow where itemId=$nid";
			$db=new DB_MySQL;
			$newslist=$db->fetch_page_query($selectSQL,$page,$records);
			$db->close();
			return $newslist;
		}
	
	function deleteNews($nid){
		$deleteSQL="delete from dow where dowid=$nid";
		$db=new DB_MySQL;
		$db->query($deleteSQL);
		$db->close();
	}
	function getNews($nid){
		$selectSQL="select * from dow where dowId=$nid";
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
