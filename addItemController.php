<<<<<<< HEAD
<?php
require_once 'sellerEntity.php';

class itemAdd
	{
		public function addItem($inputdata)
		{	
			$sellerEntity = new sellerEntity;
			$result = $sellerEntity -> addItem($inputdata);	

			if($result)
            {
				return true;
			}
			else
            {
				return false;
			}
		}

		public function getCategoriesForDropdown()
		{	
			$sellerEntity = new sellerEntity;
			$result = $sellerEntity -> getCategoriesForDropdown();	

			if($result)
            {
				return true;
			}
			else
            {
				return false;
			}
		}		
	}

=======
<?php
require_once 'sellerEntity.php';

class itemAdd
	{
		public function addItem($inputdata)
		{	
			$sellerEntity = new sellerEntity;
			$result = $sellerEntity -> addItem($inputdata);	

			if($result)
            {
				return true;
			}
			else
            {
				return false;
			}
		}

		public function getCategoriesForDropdown()
		{	
			$sellerEntity = new sellerEntity;
			$result = $sellerEntity -> getCategoriesForDropdown();	

			if($result)
            {
				return true;
			}
			else
            {
				return false;
			}
		}		
	}

>>>>>>> b293445d9cc8caf15a9e3382479b0b546a14cb80
?>