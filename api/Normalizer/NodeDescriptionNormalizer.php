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
class NodeDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\NodeDescription') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\NodeDescription) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\NodeDescription();
        if (property_exists($data, 'Hostname')) {
            $object->setHostname($data->{'Hostname'});
        }
        if (property_exists($data, 'Platform')) {
            $object->setPlatform($this->denormalizer->denormalize($data->{'Platform'}, 'Dockent\\OpenAPI\\Model\\Platform', 'json', $context));
        }
        if (property_exists($data, 'Resources')) {
            $object->setResources($this->denormalizer->denormalize($data->{'Resources'}, 'Dockent\\OpenAPI\\Model\\ResourceObject', 'json', $context));
        }
        if (property_exists($data, 'Engine')) {
            $object->setEngine($this->denormalizer->denormalize($data->{'Engine'}, 'Dockent\\OpenAPI\\Model\\EngineDescription', 'json', $context));
        }
        if (property_exists($data, 'TLSInfo')) {
            $object->setTLSInfo($this->denormalizer->denormalize($data->{'TLSInfo'}, 'Dockent\\OpenAPI\\Model\\TLSInfo', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getHostname()) {
            $data->{'Hostname'} = $object->getHostname();
        }
        if (null !== $object->getPlatform()) {
            $data->{'Platform'} = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
        }
        if (null !== $object->getResources()) {
            $data->{'Resources'} = $this->normalizer->normalize($object->getResources(), 'json', $context);
        }
        if (null !== $object->getEngine()) {
            $data->{'Engine'} = $this->normalizer->normalize($object->getEngine(), 'json', $context);
        }
        if (null !== $object->getTLSInfo()) {
            $data->{'TLSInfo'} = $this->normalizer->normalize($object->getTLSInfo(), 'json', $context);
        }
        return $data;
    }
}