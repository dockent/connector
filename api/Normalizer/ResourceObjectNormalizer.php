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
class ResourceObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\ResourceObject') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\ResourceObject) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\ResourceObject();
        if (property_exists($data, 'NanoCPUs')) {
            $object->setNanoCPUs($data->{'NanoCPUs'});
        }
        if (property_exists($data, 'MemoryBytes')) {
            $object->setMemoryBytes($data->{'MemoryBytes'});
        }
        if (property_exists($data, 'GenericResources')) {
            $values = array();
            foreach ($data->{'GenericResources'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Dockent\\OpenAPI\\Model\\GenericResourcesItem', 'json', $context);
            }
            $object->setGenericResources($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getNanoCPUs()) {
            $data->{'NanoCPUs'} = $object->getNanoCPUs();
        }
        if (null !== $object->getMemoryBytes()) {
            $data->{'MemoryBytes'} = $object->getMemoryBytes();
        }
        if (null !== $object->getGenericResources()) {
            $values = array();
            foreach ($object->getGenericResources() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'GenericResources'} = $values;
        }
        return $data;
    }
}