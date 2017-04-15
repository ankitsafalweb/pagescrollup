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

namespace Safalweb\PageScrollUp\Block\System\Config\Field;

class Color extends \Magento\Config\Block\System\Config\Form\Field
{
    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $fieldhtml = $element->getElementHtml();
        $value = $element->getData('value');

        $fieldhtml .= '<script type="text/javascript">
            require(["jquery","jquery/colorpicker/js/colorpicker"], function ($) {
                $(document).ready(function () {
                    var $el = $("#'.$element->getHtmlId().'");
                    $el.css("backgroundColor", "'.$value.'");
 
                    $el.ColorPicker({
                        color: "'.$value.'",
                        onChange: function (hsb, hex, rgb) {
                            $el.css("backgroundColor", "#" + hex).val("#" + hex);
                        }
                    });
                });
            });
            </script>';

        return $fieldhtml;
    }
}