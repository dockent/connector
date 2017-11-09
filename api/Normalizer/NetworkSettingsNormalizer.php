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
class NetworkSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\NetworkSettings') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\NetworkSettings) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\NetworkSettings();
        if (property_exists($data, 'Bridge')) {
            $object->setBridge($data->{'Bridge'});
        }
        if (property_exists($data, 'SandboxID')) {
            $object->setSandboxID($data->{'SandboxID'});
        }
        if (property_exists($data, 'HairpinMode')) {
            $object->setHairpinMode($data->{'HairpinMode'});
        }
        if (property_exists($data, 'LinkLocalIPv6Address')) {
            $object->setLinkLocalIPv6Address($data->{'LinkLocalIPv6Address'});
        }
        if (property_exists($data, 'LinkLocalIPv6PrefixLen')) {
            $object->setLinkLocalIPv6PrefixLen($data->{'LinkLocalIPv6PrefixLen'});
        }
        if (property_exists($data, 'Ports')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Ports'} as $key => $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Dockent\\OpenAPI\\Model\\PortBinding', 'json', $context);
                }
                $values[$key] = $values_1;
            }
            $object->setPorts($values);
        }
        if (property_exists($data, 'SandboxKey')) {
            $object->setSandboxKey($data->{'SandboxKey'});
        }
        if (property_exists($data, 'SecondaryIPAddresses')) {
            $values_2 = array();
            foreach ($data->{'SecondaryIPAddresses'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Dockent\\OpenAPI\\Model\\Address', 'json', $context);
            }
            $object->setSecondaryIPAddresses($values_2);
        }
        if (property_exists($data, 'SecondaryIPv6Addresses')) {
            $values_3 = array();
            foreach ($data->{'SecondaryIPv6Addresses'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Dockent\\OpenAPI\\Model\\Address', 'json', $context);
            }
            $object->setSecondaryIPv6Addresses($values_3);
        }
        if (property_exists($data, 'EndpointID')) {
            $object->setEndpointID($data->{'EndpointID'});
        }
        if (property_exists($data, 'Gateway')) {
            $object->setGateway($data->{'Gateway'});
        }
        if (property_exists($data, 'GlobalIPv6Address')) {
            $object->setGlobalIPv6Address($data->{'GlobalIPv6Address'});
        }
        if (property_exists($data, 'GlobalIPv6PrefixLen')) {
            $object->setGlobalIPv6PrefixLen($data->{'GlobalIPv6PrefixLen'});
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
        if (property_exists($data, 'MacAddress')) {
            $object->setMacAddress($data->{'MacAddress'});
        }
        if (property_exists($data, 'Networks')) {
            $values_4 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Networks'} as $key_1 => $value_4) {
                $values_4[$key_1] = $this->denormalizer->denormalize($value_4, 'Dockent\\OpenAPI\\Model\\EndpointSettings', 'json', $context);
            }
            $object->setNetworks($values_4);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getBridge()) {
            $data->{'Bridge'} = $object->getBridge();
        }
        if (null !== $object->getSandboxID()) {
            $data->{'SandboxID'} = $object->getSandboxID();
        }
        if (null !== $object->getHairpinMode()) {
            $data->{'HairpinMode'} = $object->getHairpinMode();
        }
        if (null !== $object->getLinkLocalIPv6Address()) {
            $data->{'LinkLocalIPv6Address'} = $object->getLinkLocalIPv6Address();
        }
        if (null !== $object->getLinkLocalIPv6PrefixLen()) {
            $data->{'LinkLocalIPv6PrefixLen'} = $object->getLinkLocalIPv6PrefixLen();
        }
        if (null !== $object->getPorts()) {
            $values = new \stdClass();
            foreach ($object->getPorts() as $key => $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $values->{$key} = $values_1;
            }
            $data->{'Ports'} = $values;
        }
        if (null !== $object->getSandboxKey()) {
            $data->{'SandboxKey'} = $object->getSandboxKey();
        }
        if (null !== $object->getSecondaryIPAddresses()) {
            $values_2 = array();
            foreach ($object->getSecondaryIPAddresses() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'SecondaryIPAddresses'} = $values_2;
        }
        if (null !== $object->getSecondaryIPv6Addresses()) {
            $values_3 = array();
            foreach ($object->getSecondaryIPv6Addresses() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'SecondaryIPv6Addresses'} = $values_3;
        }
        if (null !== $object->getEndpointID()) {
            $data->{'EndpointID'} = $object->getEndpointID();
        }
        if (null !== $object->getGateway()) {
            $data->{'Gateway'} = $object->getGateway();
        }
        if (null !== $object->getGlobalIPv6Address()) {
            $data->{'GlobalIPv6Address'} = $object->getGlobalIPv6Address();
        }
        if (null !== $object->getGlobalIPv6PrefixLen()) {
            $data->{'GlobalIPv6PrefixLen'} = $object->getGlobalIPv6PrefixLen();
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
        if (null !== $object->getMacAddress()) {
            $data->{'MacAddress'} = $object->getMacAddress();
        }
        if (null !== $object->getNetworks()) {
            $values_4 = new \stdClass();
            foreach ($object->getNetworks() as $key_1 => $value_4) {
                $values_4->{$key_1} = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'Networks'} = $values_4;
        }
        return $data;
    }
}