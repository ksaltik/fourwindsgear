<?php

class ITwebexperts_Payperrentals_Block_Adminhtml_Catalog_Product_Renderer_Available extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Price
{
    /**
     * Renders grid column
     *
     * @param   Varien_Object $row
     * @return  string
     */
    public function render(Varien_Object $_row)
    {

        if (ITwebexperts_Payperrentals_Helper_Data::isReservationType($_row->getId())) {
            $dates = Mage::helper('payperrentals/timebox')->getProductGridDates();
            $data = intval(ITwebexperts_Payperrentals_Helper_Inventory::getQuantity($_row->getId(), $dates['start_date'], $dates['end_date']));
        }else{
            $data = 0;
        }


        return $data;
    }
}