<?php
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */
namespace OxidEsales\EshopCommunity\Internal\Common\DataMapper;

abstract class AbstractDataMapper
{
    abstract protected function getIdMapping();
    abstract protected function getFieldsMapping();

    public function getIdFieldName()
    {
        $mapping = $this->getIdMapping();
        return key($mapping[0]);
    }

    public function map($object, $data)
    {
        $mapping = array_merge($this->getIdMapping(), $this->getFieldsMapping());
        foreach ($mapping as $fieldName => $propertyName) {
            $methodName = 'set' . ucfirst($propertyName);
            $object->$methodName($data[$fieldName]);
        }
        return $object;
    }

    public function unmap($object)
    {
        $mapping = array_merge($this->getIdMapping(), $this->getFieldsMapping());
        foreach ($mapping as $fieldName => $propertyName) {
            $methodName = 'get' . ucfirst($propertyName);
            $data[$fieldName] = $object->$methodName();
        }
        return $data;
    }
}
