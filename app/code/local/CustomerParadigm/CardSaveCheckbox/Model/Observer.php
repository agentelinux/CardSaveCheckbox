<?php
/**
 * @class CustomerParadigm_CardSaveCheckbox_Model_Observer
 * @author Dave Gieger <dave.gieger@customerparadigm.com>
 * @author Graham Lipsman <graham@customerparadigm.com>
 */

class CustomerParadigm_CardSaveCheckbox_Model_Observer {
    /**
     * @method void overridePaymentMethod()
     * @description Called on event 'sales_quote_payment_import_data_before'
     *
     * @return void
     */
    public function overridePaymentMethod(Varien_Event_Observer $observer) {
        
        /**
         * Is the "Save this card" box checked?  If it is, change the payment
         * method to 'ccsave'
         */
        if( $observer->getInput()->getData('save_card') == 'on') {
            $observer->getInput()->setMethod('ccsave');
        }
    }
}

