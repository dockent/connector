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
class PluginConfigLinuxNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\PluginConfigLinux') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\PluginConfigLinux) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\PluginConfigLinux();
        if (property_exists($data, 'Capabilities')) {
            $values = array();
            foreach ($data->{'Capabilities'} as $value) {
                $values[] = $value;
            }
            $object->setCapabilities($values);
        }
        if (property_exists($data, 'AllowAllDevices')) {
            $object->setAllowAllDevices($data->{'AllowAllDevices'});
        }
        if (property_exists($data, 'Devices')) {
            $values_1 = array();
            foreach ($data->{'Devices'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Dockent\\OpenAPI\\Model\\PluginDevice', 'json', $context);
            }
            $object->setDevices($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCapabilities()) {
            $values = array();
            foreach ($object->getCapabilities() as $value) {
                $values[] = $value;
            }
            $data->{'Capabilities'} = $values;
        }
        if (null !== $object->getAllowAllDevices()) {
            $data->{'AllowAllDevices'} = $object->getAllowAllDevices();
        }
        if (null !== $object->getDevices()) {
            $values_1 = array();
            foreach ($object->getDevices() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'Devices'} = $values_1;
        }
        return $data;
    }
}