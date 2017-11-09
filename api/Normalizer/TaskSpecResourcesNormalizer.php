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
class TaskSpecResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\TaskSpecResources') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\TaskSpecResources) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\TaskSpecResources();
        if (property_exists($data, 'Limits')) {
            $object->setLimits($this->denormalizer->denormalize($data->{'Limits'}, 'Dockent\\OpenAPI\\Model\\ResourceObject', 'json', $context));
        }
        if (property_exists($data, 'Reservation')) {
            $object->setReservation($this->denormalizer->denormalize($data->{'Reservation'}, 'Dockent\\OpenAPI\\Model\\ResourceObject', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getLimits()) {
            $data->{'Limits'} = $this->normalizer->normalize($object->getLimits(), 'json', $context);
        }
        if (null !== $object->getReservation()) {
            $data->{'Reservation'} = $this->normalizer->normalize($object->getReservation(), 'json', $context);
        }
        return $data;
    }
}