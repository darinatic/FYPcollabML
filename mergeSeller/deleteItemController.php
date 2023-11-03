<<<<<<< HEAD
<?php
require_once 'sellerEntity.php';

class deleteItem
	{
		public function deleteItem($inputdata)
		{	
			$sellerEntity = new sellerEntity;
            $result = $sellerEntity -> deleteItem($inputdata);

			if($result){
				return true;
			}
			else{
				return false;
			}
		}	
	}

=======
<?php
require_once 'sellerEntity.php';

class deleteItem
	{
		public function deleteItem($inputdata)
		{	
			$sellerEntity = new sellerEntity;
            $result = $sellerEntity -> deleteItem($inputdata);

			if($result){
				return true;
			}
			else{
				return false;
			}
		}	
	}

>>>>>>> b293445d9cc8caf15a9e3382479b0b546a14cb80
?>