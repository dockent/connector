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
class TaskSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\TaskSpec') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\TaskSpec) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\TaskSpec();
        if (property_exists($data, 'PluginSpec')) {
            $object->setPluginSpec($this->denormalizer->denormalize($data->{'PluginSpec'}, 'Dockent\\OpenAPI\\Model\\TaskSpecPluginSpec', 'json', $context));
        }
        if (property_exists($data, 'ContainerSpec')) {
            $object->setContainerSpec($this->denormalizer->denormalize($data->{'ContainerSpec'}, 'Dockent\\OpenAPI\\Model\\TaskSpecContainerSpec', 'json', $context));
        }
        if (property_exists($data, 'Resources')) {
            $object->setResources($this->denormalizer->denormalize($data->{'Resources'}, 'Dockent\\OpenAPI\\Model\\TaskSpecResources', 'json', $context));
        }
        if (property_exists($data, 'RestartPolicy')) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data->{'RestartPolicy'}, 'Dockent\\OpenAPI\\Model\\TaskSpecRestartPolicy', 'json', $context));
        }
        if (property_exists($data, 'Placement')) {
            $object->setPlacement($this->denormalizer->denormalize($data->{'Placement'}, 'Dockent\\OpenAPI\\Model\\TaskSpecPlacement', 'json', $context));
        }
        if (property_exists($data, 'ForceUpdate')) {
            $object->setForceUpdate($data->{'ForceUpdate'});
        }
        if (property_exists($data, 'Runtime')) {
            $object->setRuntime($data->{'Runtime'});
        }
        if (property_exists($data, 'Networks')) {
            $values = array();
            foreach ($data->{'Networks'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Dockent\\OpenAPI\\Model\\TaskSpecNetworksItem', 'json', $context);
            }
            $object->setNetworks($values);
        }
        if (property_exists($data, 'LogDriver')) {
            $object->setLogDriver($this->denormalizer->denormalize($data->{'LogDriver'}, 'Dockent\\OpenAPI\\Model\\TaskSpecLogDriver', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getPluginSpec()) {
            $data->{'PluginSpec'} = $this->normalizer->normalize($object->getPluginSpec(), 'json', $context);
        }
        if (null !== $object->getContainerSpec()) {
            $data->{'ContainerSpec'} = $this->normalizer->normalize($object->getContainerSpec(), 'json', $context);
        }
        if (null !== $object->getResources()) {
            $data->{'Resources'} = $this->normalizer->normalize($object->getResources(), 'json', $context);
        }
        if (null !== $object->getRestartPolicy()) {
            $data->{'RestartPolicy'} = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
        }
        if (null !== $object->getPlacement()) {
            $data->{'Placement'} = $this->normalizer->normalize($object->getPlacement(), 'json', $context);
        }
        if (null !== $object->getForceUpdate()) {
            $data->{'ForceUpdate'} = $object->getForceUpdate();
        }
        if (null !== $object->getRuntime()) {
            $data->{'Runtime'} = $object->getRuntime();
        }
        if (null !== $object->getNetworks()) {
            $values = array();
            foreach ($object->getNetworks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Networks'} = $values;
        }
        if (null !== $object->getLogDriver()) {
            $data->{'LogDriver'} = $this->normalizer->normalize($object->getLogDriver(), 'json', $context);
        }
        return $data;
    }
}