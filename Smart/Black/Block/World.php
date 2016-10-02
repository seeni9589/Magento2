<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Smart\Black\Block;

class World extends \Magento\Framework\View\Element\Template
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
        //$myprocess = $this->_process->create();
        $a = $this->_process->getMyData1('Seeni');
        $this->setName($a);
    }
}