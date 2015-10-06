<?php
class ITwebexperts_Maintenance_Block_Adminhtml_Maintenance_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
        $this->_objectId = 'id';
        $this->_blockGroup = 'itwebexperts_maintenance';
        $this->_controller = 'adminhtml_maintenance';
        $this->_mode = 'edit';
        $this->_updateButton('save', 'label', Mage::helper('simaintenance')->__('Save Maintenance Record'));
        $this->_updateButton('delete', 'label', Mage::helper('simaintenance')->__('Delete Maintenance Record'));
    }

    public function getHeaderText(){
        return Mage::helper('simaintenance')->__('Editing Maintenance Record');
    }
}