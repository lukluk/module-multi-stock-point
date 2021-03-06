<?php
	
class Mamoku_Multistockpoint_Block_Adminhtml_Locationcoverage_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "id";
				$this->_blockGroup = "multistockpoint";
				$this->_controller = "adminhtml_locationcoverage";
				$this->_updateButton("save", "label", Mage::helper("multistockpoint")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("multistockpoint")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("multistockpoint")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("locationcoverage_data") && Mage::registry("locationcoverage_data")->getId() ){

				    return Mage::helper("multistockpoint")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("locationcoverage_data")->getId()));

				} 
				else{

				     return Mage::helper("multistockpoint")->__("Add Item");

				}
		}
}