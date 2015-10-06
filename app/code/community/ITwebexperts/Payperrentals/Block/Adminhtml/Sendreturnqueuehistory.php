<?php

/**
 * Class ITwebexperts_Payperrentals_Block_Adminhtml_Sendreturnqueuehistory
 */
class ITwebexperts_Payperrentals_Block_Adminhtml_Sendreturnqueuehistory extends Mage_Core_Block_Template{

    /**
     *
     */
    public function __construct(){
	}

    /**
     * @var
     */
    protected $_grid;

    /**
     * @return $this
     */
    protected function _prepareLayout()
	{
		parent::_prepareLayout();
		$grid = $this->getLayout()
				->createBlock('payperrentals/adminhtml_html_sendreturnqueuegrid', 'my.payperrentals.queuegrid');
		$this->setChild('grid', $grid);
		$this->_grid = $grid;

		return $this;
	}

    /**
     * @return mixed
     */
    public function getGrid(){
		return $this->_grid;
	}

    /**
     * @return string
     */
    public function getGridHtml()
	{
		return $this->getChildHtml('grid');
	}

}