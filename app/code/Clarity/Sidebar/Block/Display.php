<?php

namespace Clarity\Sidebar\Block;


use \Magento\Framework\App\Config\ScopeConfigInterface;

class Display extends \Magento\Framework\View\Element\Template
{
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * Display constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        ScopeConfigInterface $scopeConfig
    )
    {
        parent::__construct($context);
        $this->scopeConfig = $scopeConfig;
    }

    public function sayHello()
    {
        return __('Sidebar');
    }

    public function isActive()
    {
        return $this->scopeConfig->getValue('sidebar/general/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
    public function displayText()
    {
        return $this->scopeConfig->getValue('sidebar/general/display_text', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}