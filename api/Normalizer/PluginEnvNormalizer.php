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
class PluginEnvNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\PluginEnv') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\PluginEnv) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\PluginEnv();
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
        if (property_exists($data, 'Value')) {
            $object->setValue($data->{'Value'});
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
        if (null !== $object->getValue()) {
            $data->{'Value'} = $object->getValue();
        }
        return $data;
    }
}