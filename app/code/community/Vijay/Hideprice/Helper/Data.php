<?php
class Vijay_Hideprice_Helper_Data extends Mage_Core_Helper_Abstract
{
	const GENERAL_IS_ENABLED = 'priceconfig/module_config/active';
    const CAN_SEE_PRICE = 'priceconfig/priceareas/price';
    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return bool
     */
    public function isEnabled($store = null)
    {
        $isConfigEnabled = Mage::getStoreConfigFlag(self::GENERAL_IS_ENABLED, $store);
        $isModuleEnabled = $this->isModuleEnabled();
        $isModuleOutputEnabled = $this->isModuleOutputEnabled();
        return $isConfigEnabled && $isModuleEnabled && $isModuleOutputEnabled;
    }
	public function isAllowedToSeePrices($store = null)
    {
        $canSeePrice = Mage::getStoreConfigFlag(self::CAN_SEE_PRICE, $store);
        return $canSeePrice;
    }
}
