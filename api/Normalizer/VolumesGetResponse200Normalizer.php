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
class VolumesGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\VolumesGetResponse200') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\VolumesGetResponse200) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\VolumesGetResponse200();
        if (property_exists($data, 'Volumes')) {
            $values = array();
            foreach ($data->{'Volumes'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Dockent\\OpenAPI\\Model\\Volume', 'json', $context);
            }
            $object->setVolumes($values);
        }
        if (property_exists($data, 'Warnings')) {
            $values_1 = array();
            foreach ($data->{'Warnings'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setWarnings($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getVolumes()) {
            $values = array();
            foreach ($object->getVolumes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Volumes'} = $values;
        }
        if (null !== $object->getWarnings()) {
            $values_1 = array();
            foreach ($object->getWarnings() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Warnings'} = $values_1;
        }
        return $data;
    }
}