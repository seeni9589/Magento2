<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



namespace Smart\Hello\Controller\Index;
class Index extends \Magento\Framework\App\Action\Action
{
  public function __construct(
        \Magento\Framework\App\Action\Context $context
    ) {
        parent::__construct($context);
    }

    public function execute(){
        echo 'hi2';exit;
    }
}
