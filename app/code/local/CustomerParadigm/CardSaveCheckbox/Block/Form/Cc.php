<?php
/**
 * @class CustomerParadigm_CardSaveCheckbox_Model_Observer
 * @author Dave Gieger <dave.gieger@customerparadigm.com>
 * @author Graham Lipsman <graham@customerparadigm.com>
 */

class CustomerParadigm_CardSaveCheckbox_Block_Form_Cc extends Mage_Payment_Block_Form_Cc {
    
    public function _construct() {
        parent::_construct();
        
        /**
         * we updated the template to add a "save this card" checkbox to the
         * "Pay with Card" payment option
         */
        $this->setTemplate('customerparadigm_cardsavecheckbox/form/cc.phtml');
    }
}
