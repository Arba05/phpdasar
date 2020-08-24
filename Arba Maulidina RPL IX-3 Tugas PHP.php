<?php 
	class laptop
	{
		public $merk;

		public function hidupkan()
		{
			return 'Nyalakan laptop '.$this->merk;
 		}
	}

	$laptop1 = new laptop();
	$laptop1->merk = 'acer';
	echo $laptop1->Nyalakan();
 ?>