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
class GenericResourcesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\GenericResourcesItem') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\GenericResourcesItem) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\GenericResourcesItem();
        if (property_exists($data, 'NamedResourceSpec')) {
            $object->setNamedResourceSpec($this->denormalizer->denormalize($data->{'NamedResourceSpec'}, 'Dockent\\OpenAPI\\Model\\GenericResourcesItemNamedResourceSpec', 'json', $context));
        }
        if (property_exists($data, 'DiscreteResourceSpec')) {
            $object->setDiscreteResourceSpec($this->denormalizer->denormalize($data->{'DiscreteResourceSpec'}, 'Dockent\\OpenAPI\\Model\\GenericResourcesItemDiscreteResourceSpec', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getNamedResourceSpec()) {
            $data->{'NamedResourceSpec'} = $this->normalizer->normalize($object->getNamedResourceSpec(), 'json', $context);
        }
        if (null !== $object->getDiscreteResourceSpec()) {
            $data->{'DiscreteResourceSpec'} = $this->normalizer->normalize($object->getDiscreteResourceSpec(), 'json', $context);
        }
        return $data;
    }
}