<?php
/**
 * Safalweb
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.safalweb.com/end-user-license
 *
 * ******************************************************************
 * *               MAGENTO EDITION USAGE NOTICE                     *
 * ******************************************************************
 * This software is designed to work with Magento community edition and
 * its use on an edition other than specified is prohibited. SafalWeb does not
 * provide extension support in case of incorrect edition use.
 * ******************************************************************
 * @category    Safalweb
 * @package     Safalweb_PageScrollUp
 * @version     1.0.0
 * @author      SafalWeb <support@safalweb.com>
 * @license     http://www.safalweb.com/end-user-license
 */

namespace Safalweb\PageScrollUp\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $_storeManager;
    protected $_storeConfig;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    )
    {
        $this->_storeManager = $storeManager;
        $this->_storeConfig = $scopeConfig;
        parent::__construct($context);
    }

    public function getConfig($path = null)
    {
        if($path == null){
            $path = "pagescrollup";
        }
        return $this->scopeConfig->getValue($path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function isEnabled()
    {
        return $this->getConfig("pagescrollup/general/enable");
    }

    public function getPosition()
    {
        return $this->getConfig("pagescrollup/frontend/position");
    }

    public function getPositionLeft()
    {
        return $this->getConfig("pagescrollup/frontend/position_left");
    }

    public function getPositionRight()
    {
        return $this->getConfig("pagescrollup/frontend/position_right");
    }

    public function getPositionBottom()
    {
        return $this->getConfig("pagescrollup/frontend/position_bottom");
    }

    public function getHPosition()
    {
        $position = "";
        if($this->getPosition() == "left" && $this->getPositionLeft() != null){
            $position = $this->getPositionLeft();
        }
        elseif($this->getPosition() == "right" && $this->getPositionRight() != null){
            $position = $this->getPositionRight();
        }
        return $position;
    }

    public function getType()
    {
        return $this->getConfig("pagescrollup/frontend/type");
    }

    public function getImage()
    {
        $path = "scrollup_image/".$this->getConfig("pagescrollup/frontend/scrollup_image");
        return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA) . $path;
    }

    public function getLinkText()
    {
        return $this->getConfig("pagescrollup/frontend/text");
    }

    public function getRadius()
    {
        return $this->getConfig("pagescrollup/frontend/radius");
    }

    public function getBackgroundColor()
    {
        return $this->getConfig("pagescrollup/frontend/backgroundcolor");
    }

    public function getTextColor()
    {
        return $this->getConfig("pagescrollup/frontend/textcolor");
    }

    public function getScrollOffset()
    {
        return $this->getConfig("pagescrollup/frontend/scroll_offset");
    }

    public function getScrollSpeed()
    {
        return $this->getConfig("pagescrollup/frontend/scroll_speed");
    }

    public function getAnimation()
    {
        return $this->getConfig("pagescrollup/frontend/animation");
    }

    public function getAnimationSpeed()
    {
        return $this->getConfig("pagescrollup/frontend/animation_speed");
    }

    public function getZindex()
    {
        return $this->getConfig("pagescrollup/frontend/zindex");
    }

    public function getFontWeight()
    {
        return $this->getConfig("pagescrollup/frontend/text_weight");
    }

    public function getFontSize()
    {
        return $this->getConfig("pagescrollup/frontend/text_size");
    }

    public function getStyle()
    {
        $style = array();
        if($this->getType() == "pill"){
            if($this->getBackgroundColor() != null){
                $style[] = "background-color:".$this->getBackgroundColor();
            }
        }
        if($this->getType() == "pill" || $this->getType() == "link"){
            if($this->getTextColor() != null){
                $style[] = "color:".$this->getTextColor();
            }
            if($this->getFontWeight() != null){
                $style[] = "font-weight:".$this->getFontWeight();
            }
            if($this->getFontSize() != null){
                $style[] = "font-size:".$this->getFontSize();
            }
        }
        return implode(";",$style);
    }
}