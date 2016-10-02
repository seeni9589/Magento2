<?php

namespace Smart\Black\Controller\Index;

class World extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute(){
       $page_object = $this->_pageFactory->create();
        return $page_object;
        
       // $this->_view->loadLayout();
       // $this->_view->renderLayout();
    }

}
