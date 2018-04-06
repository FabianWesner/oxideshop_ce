<?php
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */
namespace OxidEsales\EshopCommunity\Internal\Review\DataMapper;

use OxidEsales\EshopCommunity\Internal\Common\DataMapper\AbstractDataMapper;

class RatingDataMapper extends AbstractDataMapper
{
    protected function getIdMapping()
    {
        return [
            'OXID' => 'id'
        ];
    }

    protected function getFieldsMapping()
    {
        return [
            'OXRATING' => 'rating'
        ];
    }
}
