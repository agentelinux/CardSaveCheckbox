<?php
/**
 * @class CustomerParadigm_CardSaveCheckbox_Model_Observer
 * @author Dave Gieger <dave.gieger@customerparadigm.com>
 * @author Graham Lipsman <graham@customerparadigm.com>
 */

class CustomerParadigm_CardSaveCheckbox_Block_Payment_Methods extends SFC_AuthnetToken_Block_Checkout_Onepage_Payment_Methods {
    
    /**
     * @method boolean _canUseMethod()
     * @description By overriding 'ccsave' to return false, it will not show
     * as a checkout option.
     * 
     * @return boolean
     */
    protected function _canUseMethod($method) {
        if( $method->getCode() == 'ccsave' ) {
            return false;
        }
        
        return parent::_canUseMethod($method);
    }
}

