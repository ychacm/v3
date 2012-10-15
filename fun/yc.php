<?php
	require 'gen.php';
	class yc
	{
		private  function loc($sql)
		{
			$ych=new mysql('sql209.byethost5.com','b5_10631563','19860129','b5_10631563_ych','utf8','conn');

			return $ych->query($sql);
		}
		private function net($sql)
		{
			$ych=new mysql('sql209.byethost5.com','b5_10631563','19860129','b5_10631563_ych','utf8','conn');
			return $ych->query($sql);
		}
		
		public function method($cc)
		{
			return $this->loc($cc);
		}
	}
?>
