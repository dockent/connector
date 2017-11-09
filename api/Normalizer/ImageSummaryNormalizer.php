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
class ImageSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\ImageSummary') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\ImageSummary) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\ImageSummary();
        if (property_exists($data, 'Id')) {
            $object->setId($data->{'Id'});
        }
        if (property_exists($data, 'ParentId')) {
            $object->setParentId($data->{'ParentId'});
        }
        if (property_exists($data, 'RepoTags')) {
            $values = array();
            foreach ($data->{'RepoTags'} as $value) {
                $values[] = $value;
            }
            $object->setRepoTags($values);
        }
        if (property_exists($data, 'RepoDigests')) {
            $values_1 = array();
            foreach ($data->{'RepoDigests'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRepoDigests($values_1);
        }
        if (property_exists($data, 'Created')) {
            $object->setCreated($data->{'Created'});
        }
        if (property_exists($data, 'Size')) {
            $object->setSize($data->{'Size'});
        }
        if (property_exists($data, 'SharedSize')) {
            $object->setSharedSize($data->{'SharedSize'});
        }
        if (property_exists($data, 'VirtualSize')) {
            $object->setVirtualSize($data->{'VirtualSize'});
        }
        if (property_exists($data, 'Labels')) {
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setLabels($values_2);
        }
        if (property_exists($data, 'Containers')) {
            $object->setContainers($data->{'Containers'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'Id'} = $object->getId();
        }
        if (null !== $object->getParentId()) {
            $data->{'ParentId'} = $object->getParentId();
        }
        if (null !== $object->getRepoTags()) {
            $values = array();
            foreach ($object->getRepoTags() as $value) {
                $values[] = $value;
            }
            $data->{'RepoTags'} = $values;
        }
        if (null !== $object->getRepoDigests()) {
            $values_1 = array();
            foreach ($object->getRepoDigests() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'RepoDigests'} = $values_1;
        }
        if (null !== $object->getCreated()) {
            $data->{'Created'} = $object->getCreated();
        }
        if (null !== $object->getSize()) {
            $data->{'Size'} = $object->getSize();
        }
        if (null !== $object->getSharedSize()) {
            $data->{'SharedSize'} = $object->getSharedSize();
        }
        if (null !== $object->getVirtualSize()) {
            $data->{'VirtualSize'} = $object->getVirtualSize();
        }
        if (null !== $object->getLabels()) {
            $values_2 = new \stdClass();
            foreach ($object->getLabels() as $key => $value_2) {
                $values_2->{$key} = $value_2;
            }
            $data->{'Labels'} = $values_2;
        }
        if (null !== $object->getContainers()) {
            $data->{'Containers'} = $object->getContainers();
        }
        return $data;
    }
}