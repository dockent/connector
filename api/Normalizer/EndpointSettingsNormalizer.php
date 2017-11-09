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
class EndpointSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\EndpointSettings') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\EndpointSettings) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\EndpointSettings();
        if (property_exists($data, 'IPAMConfig')) {
            $object->setIPAMConfig($this->denormalizer->denormalize($data->{'IPAMConfig'}, 'Dockent\\OpenAPI\\Model\\EndpointIPAMConfig', 'json', $context));
        }
        if (property_exists($data, 'Links')) {
            $values = array();
            foreach ($data->{'Links'} as $value) {
                $values[] = $value;
            }
            $object->setLinks($values);
        }
        if (property_exists($data, 'Aliases')) {
            $values_1 = array();
            foreach ($data->{'Aliases'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAliases($values_1);
        }
        if (property_exists($data, 'NetworkID')) {
            $object->setNetworkID($data->{'NetworkID'});
        }
        if (property_exists($data, 'EndpointID')) {
            $object->setEndpointID($data->{'EndpointID'});
        }
        if (property_exists($data, 'Gateway')) {
            $object->setGateway($data->{'Gateway'});
        }
        if (property_exists($data, 'IPAddress')) {
            $object->setIPAddress($data->{'IPAddress'});
        }
        if (property_exists($data, 'IPPrefixLen')) {
            $object->setIPPrefixLen($data->{'IPPrefixLen'});
        }
        if (property_exists($data, 'IPv6Gateway')) {
            $object->setIPv6Gateway($data->{'IPv6Gateway'});
        }
        if (property_exists($data, 'GlobalIPv6Address')) {
            $object->setGlobalIPv6Address($data->{'GlobalIPv6Address'});
        }
        if (property_exists($data, 'GlobalIPv6PrefixLen')) {
            $object->setGlobalIPv6PrefixLen($data->{'GlobalIPv6PrefixLen'});
        }
        if (property_exists($data, 'MacAddress')) {
            $object->setMacAddress($data->{'MacAddress'});
        }
        if (property_exists($data, 'DriverOpts')) {
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'DriverOpts'} as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setDriverOpts($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getIPAMConfig()) {
            $data->{'IPAMConfig'} = $this->normalizer->normalize($object->getIPAMConfig(), 'json', $context);
        }
        if (null !== $object->getLinks()) {
            $values = array();
            foreach ($object->getLinks() as $value) {
                $values[] = $value;
            }
            $data->{'Links'} = $values;
        }
        if (null !== $object->getAliases()) {
            $values_1 = array();
            foreach ($object->getAliases() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Aliases'} = $values_1;
        }
        if (null !== $object->getNetworkID()) {
            $data->{'NetworkID'} = $object->getNetworkID();
        }
        if (null !== $object->getEndpointID()) {
            $data->{'EndpointID'} = $object->getEndpointID();
        }
        if (null !== $object->getGateway()) {
            $data->{'Gateway'} = $object->getGateway();
        }
        if (null !== $object->getIPAddress()) {
            $data->{'IPAddress'} = $object->getIPAddress();
        }
        if (null !== $object->getIPPrefixLen()) {
            $data->{'IPPrefixLen'} = $object->getIPPrefixLen();
        }
        if (null !== $object->getIPv6Gateway()) {
            $data->{'IPv6Gateway'} = $object->getIPv6Gateway();
        }
        if (null !== $object->getGlobalIPv6Address()) {
            $data->{'GlobalIPv6Address'} = $object->getGlobalIPv6Address();
        }
        if (null !== $object->getGlobalIPv6PrefixLen()) {
            $data->{'GlobalIPv6PrefixLen'} = $object->getGlobalIPv6PrefixLen();
        }
        if (null !== $object->getMacAddress()) {
            $data->{'MacAddress'} = $object->getMacAddress();
        }
        if (null !== $object->getDriverOpts()) {
            $values_2 = new \stdClass();
            foreach ($object->getDriverOpts() as $key => $value_2) {
                $values_2->{$key} = $value_2;
            }
            $data->{'DriverOpts'} = $values_2;
        }
        return $data;
    }
}