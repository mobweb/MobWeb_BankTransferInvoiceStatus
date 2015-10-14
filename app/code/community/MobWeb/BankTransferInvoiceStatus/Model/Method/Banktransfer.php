<?php

class MobWeb_BankTransferInvoiceStatus_Model_Method_Banktransfer extends Mage_Payment_Model_Method_Banktransfer
{
    protected $_canCapture = true;
    protected $_canCapturePartial = true;
}
