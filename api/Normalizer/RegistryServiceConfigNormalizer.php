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
class RegistryServiceConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\RegistryServiceConfig') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\RegistryServiceConfig) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\RegistryServiceConfig();
        if (property_exists($data, 'AllowNondistributableArtifactsCIDRs')) {
            $values = array();
            foreach ($data->{'AllowNondistributableArtifactsCIDRs'} as $value) {
                $values[] = $value;
            }
            $object->setAllowNondistributableArtifactsCIDRs($values);
        }
        if (property_exists($data, 'AllowNondistributableArtifactsHostnames')) {
            $values_1 = array();
            foreach ($data->{'AllowNondistributableArtifactsHostnames'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAllowNondistributableArtifactsHostnames($values_1);
        }
        if (property_exists($data, 'InsecureRegistryCIDRs')) {
            $values_2 = array();
            foreach ($data->{'InsecureRegistryCIDRs'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setInsecureRegistryCIDRs($values_2);
        }
        if (property_exists($data, 'IndexConfigs')) {
            $values_3 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'IndexConfigs'} as $key => $value_3) {
                $values_3[$key] = $this->denormalizer->denormalize($value_3, 'Dockent\\OpenAPI\\Model\\IndexInfo', 'json', $context);
            }
            $object->setIndexConfigs($values_3);
        }
        if (property_exists($data, 'Mirrors')) {
            $values_4 = array();
            foreach ($data->{'Mirrors'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setMirrors($values_4);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAllowNondistributableArtifactsCIDRs()) {
            $values = array();
            foreach ($object->getAllowNondistributableArtifactsCIDRs() as $value) {
                $values[] = $value;
            }
            $data->{'AllowNondistributableArtifactsCIDRs'} = $values;
        }
        if (null !== $object->getAllowNondistributableArtifactsHostnames()) {
            $values_1 = array();
            foreach ($object->getAllowNondistributableArtifactsHostnames() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'AllowNondistributableArtifactsHostnames'} = $values_1;
        }
        if (null !== $object->getInsecureRegistryCIDRs()) {
            $values_2 = array();
            foreach ($object->getInsecureRegistryCIDRs() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'InsecureRegistryCIDRs'} = $values_2;
        }
        if (null !== $object->getIndexConfigs()) {
            $values_3 = new \stdClass();
            foreach ($object->getIndexConfigs() as $key => $value_3) {
                $values_3->{$key} = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'IndexConfigs'} = $values_3;
        }
        if (null !== $object->getMirrors()) {
            $values_4 = array();
            foreach ($object->getMirrors() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'Mirrors'} = $values_4;
        }
        return $data;
    }
}