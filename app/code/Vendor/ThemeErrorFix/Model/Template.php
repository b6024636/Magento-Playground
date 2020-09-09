<?php

namespace Vendor\ThemeErrorFix\Model;

use Magento\Email\Model\Template as coreTemplate;

class Template extends coreTemplate

{
    public function setForcedArea($templateId)
    {
        if (!isset($this->area)) {
            $this->area = $this->emailConfig->getTemplateArea($templateId);
        }
        return $this;
    }
}