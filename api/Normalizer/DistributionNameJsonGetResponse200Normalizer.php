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
class DistributionNameJsonGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\DistributionNameJsonGetResponse200') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\DistributionNameJsonGetResponse200) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\DistributionNameJsonGetResponse200();
        if (property_exists($data, 'Descriptor')) {
            $object->setDescriptor($this->denormalizer->denormalize($data->{'Descriptor'}, 'Dockent\\OpenAPI\\Model\\DistributionNameJsonGetResponse200Descriptor', 'json', $context));
        }
        if (property_exists($data, 'Platforms')) {
            $values = array();
            foreach ($data->{'Platforms'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Dockent\\OpenAPI\\Model\\DistributionNameJsonGetResponse200PlatformsItem', 'json', $context);
            }
            $object->setPlatforms($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getDescriptor()) {
            $data->{'Descriptor'} = $this->normalizer->normalize($object->getDescriptor(), 'json', $context);
        }
        if (null !== $object->getPlatforms()) {
            $values = array();
            foreach ($object->getPlatforms() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Platforms'} = $values;
        }
        return $data;
    }
}