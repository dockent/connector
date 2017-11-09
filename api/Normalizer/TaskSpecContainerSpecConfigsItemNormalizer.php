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
class TaskSpecContainerSpecConfigsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\TaskSpecContainerSpecConfigsItem') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\TaskSpecContainerSpecConfigsItem) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\TaskSpecContainerSpecConfigsItem();
        if (property_exists($data, 'File')) {
            $object->setFile($this->denormalizer->denormalize($data->{'File'}, 'Dockent\\OpenAPI\\Model\\TaskSpecContainerSpecConfigsItemFile', 'json', $context));
        }
        if (property_exists($data, 'ConfigID')) {
            $object->setConfigID($data->{'ConfigID'});
        }
        if (property_exists($data, 'ConfigName')) {
            $object->setConfigName($data->{'ConfigName'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getFile()) {
            $data->{'File'} = $this->normalizer->normalize($object->getFile(), 'json', $context);
        }
        if (null !== $object->getConfigID()) {
            $data->{'ConfigID'} = $object->getConfigID();
        }
        if (null !== $object->getConfigName()) {
            $data->{'ConfigName'} = $object->getConfigName();
        }
        return $data;
    }
}