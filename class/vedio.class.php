<?php
class vedioFile{
	function addNews($title,$url,$photourl){
		$insertSQL="insert into file(fileName,fileUrl,imgurl) values('$title','$url','$photourl')";
		$db=new DB_MySQL;
		$db->query($insertSQL);
		$db->close();
	}
	function getNewses($page,$records){
		$selectSQL="select * from file";
		$db=new DB_MySQL;
		$newslist=$db->fetch_page_query($selectSQL,$page,$records);
		$db->close();
		return $newslist;
	}
	
	function getListItem(){
		$selectSQL="select * from dow";
		$db=new DB_MySQL;
		$data=$db->fetch_all_array($selectSQL);
		$db->close();
		return $data;
	}
	
	function getItem(){
		$selectSQL="select * from dowitems";
		$db=new DB_MySQL;
		$data=$db->fetch_all_array($selectSQL);
		$db->close();
		return $data;
	}
	
	function getPageRows($offset,$num,$table){
         $query = "select * from $table limit $offset,$num";
         $db=new DB_MySQL;
         $list=$db->fetch_all_array($query);
         $db->close();
         return $list;        
         
     }
     
     function getRowTotal($table){
        $query="select * from $table ";
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
		$deleteSQL="delete from file where fileid=$nid";
		$db=new DB_MySQL;
		$db->query($deleteSQL);
		$db->close();
	}
	function getNews($nid){
		$selectSQL="select * from file where fileId=$nid";
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
