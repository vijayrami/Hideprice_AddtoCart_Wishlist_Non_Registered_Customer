<?php
class Vijay_Hideprice_Block_Entity_Detailed extends Mage_Rating_Block_Entity_Detailed
{
    public function __construct()
    {
        parent::__construct();		
		$this->setTemplate('vijay/hideprice/rating/detailed.phtml');
    }
}
