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
class TaskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\Task') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\Task) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\Task();
        if (property_exists($data, 'ID')) {
            $object->setID($data->{'ID'});
        }
        if (property_exists($data, 'Version')) {
            $object->setVersion($this->denormalizer->denormalize($data->{'Version'}, 'Dockent\\OpenAPI\\Model\\ObjectVersion', 'json', $context));
        }
        if (property_exists($data, 'CreatedAt')) {
            $object->setCreatedAt($data->{'CreatedAt'});
        }
        if (property_exists($data, 'UpdatedAt')) {
            $object->setUpdatedAt($data->{'UpdatedAt'});
        }
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Labels')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        }
        if (property_exists($data, 'Spec')) {
            $object->setSpec($this->denormalizer->denormalize($data->{'Spec'}, 'Dockent\\OpenAPI\\Model\\TaskSpec', 'json', $context));
        }
        if (property_exists($data, 'ServiceID')) {
            $object->setServiceID($data->{'ServiceID'});
        }
        if (property_exists($data, 'Slot')) {
            $object->setSlot($data->{'Slot'});
        }
        if (property_exists($data, 'NodeID')) {
            $object->setNodeID($data->{'NodeID'});
        }
        if (property_exists($data, 'AssignedGenericResources')) {
            $values_1 = array();
            foreach ($data->{'AssignedGenericResources'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Dockent\\OpenAPI\\Model\\GenericResourcesItem', 'json', $context);
            }
            $object->setAssignedGenericResources($values_1);
        }
        if (property_exists($data, 'Status')) {
            $object->setStatus($this->denormalizer->denormalize($data->{'Status'}, 'Dockent\\OpenAPI\\Model\\TaskStatus', 'json', $context));
        }
        if (property_exists($data, 'DesiredState')) {
            $object->setDesiredState($data->{'DesiredState'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getID()) {
            $data->{'ID'} = $object->getID();
        }
        if (null !== $object->getVersion()) {
            $data->{'Version'} = $this->normalizer->normalize($object->getVersion(), 'json', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'CreatedAt'} = $object->getCreatedAt();
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'UpdatedAt'} = $object->getUpdatedAt();
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getLabels()) {
            $values = new \stdClass();
            foreach ($object->getLabels() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'Labels'} = $values;
        }
        if (null !== $object->getSpec()) {
            $data->{'Spec'} = $this->normalizer->normalize($object->getSpec(), 'json', $context);
        }
        if (null !== $object->getServiceID()) {
            $data->{'ServiceID'} = $object->getServiceID();
        }
        if (null !== $object->getSlot()) {
            $data->{'Slot'} = $object->getSlot();
        }
        if (null !== $object->getNodeID()) {
            $data->{'NodeID'} = $object->getNodeID();
        }
        if (null !== $object->getAssignedGenericResources()) {
            $values_1 = array();
            foreach ($object->getAssignedGenericResources() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'AssignedGenericResources'} = $values_1;
        }
        if (null !== $object->getStatus()) {
            $data->{'Status'} = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if (null !== $object->getDesiredState()) {
            $data->{'DesiredState'} = $object->getDesiredState();
        }
        return $data;
    }
}