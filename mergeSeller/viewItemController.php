<<<<<<< HEAD
<?php
require_once 'sellerEntity.php';

class itemView
	{
		public function getItemData($inputdata)
		{	
			$sellerEntity = new sellerEntity;
			$result = $sellerEntity -> getItemData($inputdata);	

			if($result)
            {
				return $result;
			}
			else
            {
				return false;
			}
		}	
		
		public function getItemReviews($inputdata)
		{	
			$sellerEntity = new sellerEntity;
			$result = $sellerEntity -> getItemReviews($inputdata);	

			if($result)
            {
				return $result;
			}
			else
            {
				return false;
			}
			
		}	
		public function getItemAverage($inputdata)
		{	
			$sellerEntity = new sellerEntity;
			$result = $sellerEntity -> getItemAverage($inputdata);

			if($result)
            {
				return true;
			}
			else
            {
				return false;
			}
		}		
		public function getSellerData($inputdata)
		{	
			$sellerEntity = new sellerEntity;
			$result = $sellerEntity -> getSellerData($inputdata);

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

class itemView
	{
		public function getItemData($inputdata)
		{	
			$sellerEntity = new sellerEntity;
			$result = $sellerEntity -> getItemData($inputdata);	

			if($result)
            {
				return $result;
			}
			else
            {
				return false;
			}
		}	
		
		public function getItemReviews($inputdata)
		{	
			$sellerEntity = new sellerEntity;
			$result = $sellerEntity -> getItemReviews($inputdata);	

			if($result)
            {
				return $result;
			}
			else
            {
				return false;
			}
			
		}	
		public function getItemAverage($inputdata)
		{	
			$sellerEntity = new sellerEntity;
			$result = $sellerEntity -> getItemAverage($inputdata);

			if($result)
            {
				return true;
			}
			else
            {
				return false;
			}
		}		
		public function getSellerData($inputdata)
		{	
			$sellerEntity = new sellerEntity;
			$result = $sellerEntity -> getSellerData($inputdata);

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