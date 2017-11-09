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
class TaskSpecPlacementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\TaskSpecPlacement') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\TaskSpecPlacement) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\TaskSpecPlacement();
        if (property_exists($data, 'Constraints')) {
            $values = array();
            foreach ($data->{'Constraints'} as $value) {
                $values[] = $value;
            }
            $object->setConstraints($values);
        }
        if (property_exists($data, 'Preferences')) {
            $values_1 = array();
            foreach ($data->{'Preferences'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Dockent\\OpenAPI\\Model\\TaskSpecPlacementPreferencesItem', 'json', $context);
            }
            $object->setPreferences($values_1);
        }
        if (property_exists($data, 'Platforms')) {
            $values_2 = array();
            foreach ($data->{'Platforms'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Dockent\\OpenAPI\\Model\\Platform', 'json', $context);
            }
            $object->setPlatforms($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getConstraints()) {
            $values = array();
            foreach ($object->getConstraints() as $value) {
                $values[] = $value;
            }
            $data->{'Constraints'} = $values;
        }
        if (null !== $object->getPreferences()) {
            $values_1 = array();
            foreach ($object->getPreferences() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'Preferences'} = $values_1;
        }
        if (null !== $object->getPlatforms()) {
            $values_2 = array();
            foreach ($object->getPlatforms() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'Platforms'} = $values_2;
        }
        return $data;
    }
}