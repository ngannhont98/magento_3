<?php
namespace Smartosc\Announcements\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Image extends Template implements BlockInterface
{
    protected $_template = "widget/image.phtml";

    public function getConfig($value)
    {
        return $this->getData($value);
    }
}
