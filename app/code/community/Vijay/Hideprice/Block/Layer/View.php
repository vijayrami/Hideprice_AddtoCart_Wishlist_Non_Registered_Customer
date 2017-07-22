<?php
class Vijay_Hideprice_Block_Layer_View extends Mage_Catalog_Block_Layer_View
{
    /**
     * Get all layer filters
     *
     * @return array
     */
    public function getFilters()
    {
        $filters = array();
        if ($categoryFilter = $this->_getCategoryFilter()) {
            $filters[] = $categoryFilter;
        }
		
        $filterableAttributes = $this->_getFilterableAttributes();
		
        foreach ($filterableAttributes as $attribute) {
        	if (Mage::helper('vijay_hideprice')->isEnabled()) {
        		if (!Mage::helper('vijay_hideprice')->isAllowedToSeePrices()) {
		        	if ($attribute->getAttributeCode() == 'price'){
		        		continue;
		        	}
				}
			}
            $filters[] = $this->getChild($attribute->getAttributeCode() . '_filter');
        }

        return $filters;
    }
}