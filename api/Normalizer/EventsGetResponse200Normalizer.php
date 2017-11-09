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
class EventsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\EventsGetResponse200') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\EventsGetResponse200) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\EventsGetResponse200();
        if (property_exists($data, 'Type')) {
            $object->setType($data->{'Type'});
        }
        if (property_exists($data, 'Action')) {
            $object->setAction($data->{'Action'});
        }
        if (property_exists($data, 'Actor')) {
            $object->setActor($this->denormalizer->denormalize($data->{'Actor'}, 'Dockent\\OpenAPI\\Model\\EventsGetResponse200Actor', 'json', $context));
        }
        if (property_exists($data, 'time')) {
            $object->setTime($data->{'time'});
        }
        if (property_exists($data, 'timeNano')) {
            $object->setTimeNano($data->{'timeNano'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'Type'} = $object->getType();
        }
        if (null !== $object->getAction()) {
            $data->{'Action'} = $object->getAction();
        }
        if (null !== $object->getActor()) {
            $data->{'Actor'} = $this->normalizer->normalize($object->getActor(), 'json', $context);
        }
        if (null !== $object->getTime()) {
            $data->{'time'} = $object->getTime();
        }
        if (null !== $object->getTimeNano()) {
            $data->{'timeNano'} = $object->getTimeNano();
        }
        return $data;
    }
}