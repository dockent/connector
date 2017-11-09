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
class TaskStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\TaskStatus') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\TaskStatus) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\TaskStatus();
        if (property_exists($data, 'Timestamp')) {
            $object->setTimestamp($data->{'Timestamp'});
        }
        if (property_exists($data, 'State')) {
            $object->setState($data->{'State'});
        }
        if (property_exists($data, 'Message')) {
            $object->setMessage($data->{'Message'});
        }
        if (property_exists($data, 'Err')) {
            $object->setErr($data->{'Err'});
        }
        if (property_exists($data, 'ContainerStatus')) {
            $object->setContainerStatus($this->denormalizer->denormalize($data->{'ContainerStatus'}, 'Dockent\\OpenAPI\\Model\\TaskStatusContainerStatus', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTimestamp()) {
            $data->{'Timestamp'} = $object->getTimestamp();
        }
        if (null !== $object->getState()) {
            $data->{'State'} = $object->getState();
        }
        if (null !== $object->getMessage()) {
            $data->{'Message'} = $object->getMessage();
        }
        if (null !== $object->getErr()) {
            $data->{'Err'} = $object->getErr();
        }
        if (null !== $object->getContainerStatus()) {
            $data->{'ContainerStatus'} = $this->normalizer->normalize($object->getContainerStatus(), 'json', $context);
        }
        return $data;
    }
}