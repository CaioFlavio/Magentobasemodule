<?php 
	Class YourCompany_ModuleName_Model_Observer{
		public function observerTest(){
			Mage::log('Observer working!', null, 'baseModule.log');
		}
	}