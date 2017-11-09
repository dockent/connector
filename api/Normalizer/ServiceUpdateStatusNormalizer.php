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
class ServiceUpdateStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\ServiceUpdateStatus') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\ServiceUpdateStatus) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\ServiceUpdateStatus();
        if (property_exists($data, 'State')) {
            $object->setState($data->{'State'});
        }
        if (property_exists($data, 'StartedAt')) {
            $object->setStartedAt($data->{'StartedAt'});
        }
        if (property_exists($data, 'CompletedAt')) {
            $object->setCompletedAt($data->{'CompletedAt'});
        }
        if (property_exists($data, 'Message')) {
            $object->setMessage($data->{'Message'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getState()) {
            $data->{'State'} = $object->getState();
        }
        if (null !== $object->getStartedAt()) {
            $data->{'StartedAt'} = $object->getStartedAt();
        }
        if (null !== $object->getCompletedAt()) {
            $data->{'CompletedAt'} = $object->getCompletedAt();
        }
        if (null !== $object->getMessage()) {
            $data->{'Message'} = $object->getMessage();
        }
        return $data;
    }
}