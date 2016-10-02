<?php

namespace Smart\Black\Observer;

use Magento\Framework\Event\ObserverInterface;

class ProductAddAfter implements ObserverInterface
{
    protected $_logger;

    public function __construct(\Smart\Black\Logger\Logger $logger) {
        $this->_logger = $logger;
    }
    
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $a = $observer->getEvent()->getQuoteItem()->getSku();
        $this->_logger->info('from my observer'.$a);
        return $this;
    }
}
