<?php

namespace Dockent\OpenAPI\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PluginMountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\PluginMount') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\PluginMount) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\PluginMount();
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Description')) {
            $object->setDescription($data->{'Description'});
        }
        if (property_exists($data, 'Settable')) {
            $values = array();
            foreach ($data->{'Settable'} as $value) {
                $values[] = $value;
            }
            $object->setSettable($values);
        }
        if (property_exists($data, 'Source')) {
            $object->setSource($data->{'Source'});
        }
        if (property_exists($data, 'Destination')) {
            $object->setDestination($data->{'Destination'});
        }
        if (property_exists($data, 'Type')) {
            $object->setType($data->{'Type'});
        }
        if (property_exists($data, 'Options')) {
            $values_1 = array();
            foreach ($data->{'Options'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setOptions($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getDescription()) {
            $data->{'Description'} = $object->getDescription();
        }
        if (null !== $object->getSettable()) {
            $values = array();
            foreach ($object->getSettable() as $value) {
                $values[] = $value;
            }
            $data->{'Settable'} = $values;
        }
        if (null !== $object->getSource()) {
            $data->{'Source'} = $object->getSource();
        }
        if (null !== $object->getDestination()) {
            $data->{'Destination'} = $object->getDestination();
        }
        if (null !== $object->getType()) {
            $data->{'Type'} = $object->getType();
        }
        if (null !== $object->getOptions()) {
            $values_1 = array();
            foreach ($object->getOptions() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Options'} = $values_1;
        }
        return $data;
    }
}