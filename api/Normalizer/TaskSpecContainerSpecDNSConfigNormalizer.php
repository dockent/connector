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
class TaskSpecContainerSpecDNSConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\TaskSpecContainerSpecDNSConfig') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\TaskSpecContainerSpecDNSConfig) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\TaskSpecContainerSpecDNSConfig();
        if (property_exists($data, 'Nameservers')) {
            $values = array();
            foreach ($data->{'Nameservers'} as $value) {
                $values[] = $value;
            }
            $object->setNameservers($values);
        }
        if (property_exists($data, 'Search')) {
            $values_1 = array();
            foreach ($data->{'Search'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSearch($values_1);
        }
        if (property_exists($data, 'Options')) {
            $values_2 = array();
            foreach ($data->{'Options'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setOptions($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getNameservers()) {
            $values = array();
            foreach ($object->getNameservers() as $value) {
                $values[] = $value;
            }
            $data->{'Nameservers'} = $values;
        }
        if (null !== $object->getSearch()) {
            $values_1 = array();
            foreach ($object->getSearch() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Search'} = $values_1;
        }
        if (null !== $object->getOptions()) {
            $values_2 = array();
            foreach ($object->getOptions() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'Options'} = $values_2;
        }
        return $data;
    }
}