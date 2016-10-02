<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Smart\Feedback\Block;

class Feedback extends \Magento\Framework\View\Element\Template
{
    protected $_process;
    
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Smart\Black\Model\Process $process,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_process = $process;
    }
    
    protected function _prepareLayout()
    {
        $this->setMessage('Hello Again World');
       
    }
    
     public function toHtml()
    {
        return parent::toHtml();
    }
    public function getFeedbackUrl(){
        return $this->getUrl('feedback/entry/submit');
    }

}