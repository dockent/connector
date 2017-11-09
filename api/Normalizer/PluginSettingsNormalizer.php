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
class PluginSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\PluginSettings') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\PluginSettings) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\PluginSettings();
        if (property_exists($data, 'Mounts')) {
            $values = array();
            foreach ($data->{'Mounts'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Dockent\\OpenAPI\\Model\\PluginMount', 'json', $context);
            }
            $object->setMounts($values);
        }
        if (property_exists($data, 'Env')) {
            $values_1 = array();
            foreach ($data->{'Env'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEnv($values_1);
        }
        if (property_exists($data, 'Args')) {
            $values_2 = array();
            foreach ($data->{'Args'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setArgs($values_2);
        }
        if (property_exists($data, 'Devices')) {
            $values_3 = array();
            foreach ($data->{'Devices'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Dockent\\OpenAPI\\Model\\PluginDevice', 'json', $context);
            }
            $object->setDevices($values_3);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getMounts()) {
            $values = array();
            foreach ($object->getMounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Mounts'} = $values;
        }
        if (null !== $object->getEnv()) {
            $values_1 = array();
            foreach ($object->getEnv() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Env'} = $values_1;
        }
        if (null !== $object->getArgs()) {
            $values_2 = array();
            foreach ($object->getArgs() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'Args'} = $values_2;
        }
        if (null !== $object->getDevices()) {
            $values_3 = array();
            foreach ($object->getDevices() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'Devices'} = $values_3;
        }
        return $data;
    }
}