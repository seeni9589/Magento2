<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Smart\Feedback\Controller\Entry;
use Magento\Framework\Controller\ResultFactory;

class Form extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    
   public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }
    
    public function execute() {
       // $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
       // return $resultPage;
        $page_object = $this->_pageFactory->create();
        return $page_object;
    }
}