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

namespace Safalweb\PageScrollUp\Model\System\Config\Source;

class Position implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [['value' => 'left', 'label' => __('Left')], ['value' => 'right', 'label' => __('Right')]];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return ["left" => __('Left'), "right" => __('Right')];
    }
}