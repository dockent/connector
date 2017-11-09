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
class PluginsInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\PluginsInfo') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\PluginsInfo) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\PluginsInfo();
        if (property_exists($data, 'Volume')) {
            $values = array();
            foreach ($data->{'Volume'} as $value) {
                $values[] = $value;
            }
            $object->setVolume($values);
        }
        if (property_exists($data, 'Network')) {
            $values_1 = array();
            foreach ($data->{'Network'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setNetwork($values_1);
        }
        if (property_exists($data, 'Authorization')) {
            $values_2 = array();
            foreach ($data->{'Authorization'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setAuthorization($values_2);
        }
        if (property_exists($data, 'Log')) {
            $values_3 = array();
            foreach ($data->{'Log'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setLog($values_3);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getVolume()) {
            $values = array();
            foreach ($object->getVolume() as $value) {
                $values[] = $value;
            }
            $data->{'Volume'} = $values;
        }
        if (null !== $object->getNetwork()) {
            $values_1 = array();
            foreach ($object->getNetwork() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Network'} = $values_1;
        }
        if (null !== $object->getAuthorization()) {
            $values_2 = array();
            foreach ($object->getAuthorization() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'Authorization'} = $values_2;
        }
        if (null !== $object->getLog()) {
            $values_3 = array();
            foreach ($object->getLog() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'Log'} = $values_3;
        }
        return $data;
    }
}