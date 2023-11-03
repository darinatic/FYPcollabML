<<<<<<< HEAD
<?php
require_once 'sellerEntity.php';

class sellerView
	{   
        private $sellerEntity;
        public function __construct()
        {
            $this->sellerEntity = new sellerEntity;
        }
		public function showItems()
		{	
            $result = $this->sellerEntity->showItems();	

			if($result)
            {
				return $result;
			}
			else
            {
				return false;
			}
		}	

		public function showSettings(){
			$result = $this->sellerEntity->showSettings();

			if($result)
			{
				return $result;
			}
			else
			{
				return false;
			}
		}
		public function getCategoryName($category_id){
            $result = $this->sellerEntity->getCategoryName($category_id);
            if($result){
                return $result;
            }
            else{
                return false;
            }
        }
	}
		
=======
<?php
require_once 'sellerEntity.php';

class sellerView
	{   
        private $sellerEntity;
        public function __construct()
        {
            $this->sellerEntity = new sellerEntity;
        }
		public function showItems()
		{	
            $result = $this->sellerEntity->showItems();	

			if($result)
            {
				return $result;
			}
			else
            {
				return false;
			}
		}	

		public function showSettings(){
			$result = $this->sellerEntity->showSettings();

			if($result)
			{
				return $result;
			}
			else
			{
				return false;
			}
		}
		public function getCategoryName($category_id){
            $result = $this->sellerEntity->getCategoryName($category_id);
            if($result){
                return $result;
            }
            else{
                return false;
            }
        }
	}
		
>>>>>>> b293445d9cc8caf15a9e3382479b0b546a14cb80
?>