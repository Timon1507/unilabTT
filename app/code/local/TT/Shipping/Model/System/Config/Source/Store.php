<?php
/**
 * Used in creating options config value selection
 *
 */
class TT_Shipping_Model_System_Config_Source_Store {

	/**
	 * Options getter
	 *
	 * @return array
	 */
	public function toOptionArray()
	{
		return array(
			array('value' => '', 'label'=>Mage::helper('shipping')->__('None')),
			array('value' => 1,  'label'=>Mage::helper('shipping')->__('Almi')),
			array('value' => 2,  'label'=>Mage::helper('shipping')->__('Sosedi')),
			array('value' => 3,  'label'=>Mage::helper('shipping')->__('Green')),
		);
	}

	/**
	 * Get options in "key-value" format
	 *
	 * @return array
	 */
	public function toArray()
	{
		return array(
			'' => Mage::helper('shipping')->__('None'),
			1  => Mage::helper('shipping')->__('Almi'),
			2  => Mage::helper('shipping')->__('Sosedi'),
			3  => Mage::helper('shipping')->__('Green'),
		);
	}
}