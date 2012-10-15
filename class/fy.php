<?php
class Page{
	private $total;   //保存所有的数据表记录的总条数
    private $page;    //保存当前是第几页
    private $num;     //保存每页显示记录的条数
    private $pageNum; //保存一共分的页数
    private $offset ; //保存从数据库中取得的记录的开始偏移数
    
    function __construct($total,$page=1,$num=5){
            $this->total = $total;
            $this->page = $page;
            $this->num = $num;
            $this->pageNum = $this->getPageNum();
            $this->offset = $this->getOffset();
    }
	
	private function getPageNum(){
            return ceil($this->total/$this->num); //返回记录的总页数
        }
        
        private function getNextPage(){
            if($this->page==$this->pageNum){ //判断是不是最后一页
                return false ;
            }
            return $this->page + 1;
        }

        private function getPrevPage(){
            if($this->page==1){
                return false;
            }
            return $this->page - 1;
        }
        
        private function getOffset(){
             return ($this->page-1)*$this->num;
        }
        
        private function getStartNum(){  //调用这个方法，返回当前页开始的记录偏移数
            if($this->total==0)
                return 0;                  //若是表中没有记录，返回0
            else
                return $this->offset + 1;  //若是表中有记录，返回记录开始偏移数            
        }
        
        private function getEndNum(){
            return min($this->offset+$this->num,$this->total);
        }
        
        public function getPageInfo(){
            $pageInfo = array(
                "row_total" => $this->total,
                "row_num" => $this->num,
                "page_num" => $this->getPageNum(),
                "current_page" => $this->page,
                "row_offset" => $this->getOffset(),
                "next_page" => $this->getNextPage(),
                "prev_page" => $this->getPrevPage(),
                "page_start" => $this->getStartNum(),
                "page_end" => $this->getEndNum()
            );
            return $pageInfo;
        }
}
?>
