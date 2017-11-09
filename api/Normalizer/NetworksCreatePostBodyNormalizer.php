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
class NetworksCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\NetworksCreatePostBody') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\NetworksCreatePostBody) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\NetworksCreatePostBody();
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'CheckDuplicate')) {
            $object->setCheckDuplicate($data->{'CheckDuplicate'});
        }
        if (property_exists($data, 'Driver')) {
            $object->setDriver($data->{'Driver'});
        }
        if (property_exists($data, 'Internal')) {
            $object->setInternal($data->{'Internal'});
        }
        if (property_exists($data, 'Attachable')) {
            $object->setAttachable($data->{'Attachable'});
        }
        if (property_exists($data, 'Ingress')) {
            $object->setIngress($data->{'Ingress'});
        }
        if (property_exists($data, 'IPAM')) {
            $object->setIPAM($this->denormalizer->denormalize($data->{'IPAM'}, 'Dockent\\OpenAPI\\Model\\IPAM', 'json', $context));
        }
        if (property_exists($data, 'EnableIPv6')) {
            $object->setEnableIPv6($data->{'EnableIPv6'});
        }
        if (property_exists($data, 'Options')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Options'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setOptions($values);
        }
        if (property_exists($data, 'Labels')) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setLabels($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getCheckDuplicate()) {
            $data->{'CheckDuplicate'} = $object->getCheckDuplicate();
        }
        if (null !== $object->getDriver()) {
            $data->{'Driver'} = $object->getDriver();
        }
        if (null !== $object->getInternal()) {
            $data->{'Internal'} = $object->getInternal();
        }
        if (null !== $object->getAttachable()) {
            $data->{'Attachable'} = $object->getAttachable();
        }
        if (null !== $object->getIngress()) {
            $data->{'Ingress'} = $object->getIngress();
        }
        if (null !== $object->getIPAM()) {
            $data->{'IPAM'} = $this->normalizer->normalize($object->getIPAM(), 'json', $context);
        }
        if (null !== $object->getEnableIPv6()) {
            $data->{'EnableIPv6'} = $object->getEnableIPv6();
        }
        if (null !== $object->getOptions()) {
            $values = new \stdClass();
            foreach ($object->getOptions() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'Options'} = $values;
        }
        if (null !== $object->getLabels()) {
            $values_1 = new \stdClass();
            foreach ($object->getLabels() as $key_1 => $value_1) {
                $values_1->{$key_1} = $value_1;
            }
            $data->{'Labels'} = $values_1;
        }
        return $data;
    }
}