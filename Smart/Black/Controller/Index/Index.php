<?php

namespace Smart\Black\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_process;
    protected $_productFactory;
    
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Smart\Black\Model\ProcessFactory $process,
        \Magento\Catalog\Model\ProductFactory $productFactory
    ) {
        $this->_process = $process;
        $this->_productFactory = $productFactory;
        parent::__construct($context);
    }

    public function execute(){
        $product = $this->_productFactory->create();
        $product->load(1);
        echo $product->getName();
        
       $myprocess = $this->_process->create();
       $a = $myprocess->getMyData('Vas');
       echo $a;exit;
       // echo 'hi55';exit;
    }

}
