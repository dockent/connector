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
class SystemDfGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\SystemDfGetResponse200') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\SystemDfGetResponse200) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\SystemDfGetResponse200();
        if (property_exists($data, 'LayersSize')) {
            $object->setLayersSize($data->{'LayersSize'});
        }
        if (property_exists($data, 'Images')) {
            $values = array();
            foreach ($data->{'Images'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Dockent\\OpenAPI\\Model\\ImageSummary', 'json', $context);
            }
            $object->setImages($values);
        }
        if (property_exists($data, 'Containers')) {
            $values_1 = array();
            foreach ($data->{'Containers'} as $value_1) {
                $values_2 = array();
                foreach ($value_1 as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Dockent\\OpenAPI\\Model\\ContainerSummaryItem', 'json', $context);
                }
                $values_1[] = $values_2;
            }
            $object->setContainers($values_1);
        }
        if (property_exists($data, 'Volumes')) {
            $values_3 = array();
            foreach ($data->{'Volumes'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Dockent\\OpenAPI\\Model\\Volume', 'json', $context);
            }
            $object->setVolumes($values_3);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getLayersSize()) {
            $data->{'LayersSize'} = $object->getLayersSize();
        }
        if (null !== $object->getImages()) {
            $values = array();
            foreach ($object->getImages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Images'} = $values;
        }
        if (null !== $object->getContainers()) {
            $values_1 = array();
            foreach ($object->getContainers() as $value_1) {
                $values_2 = array();
                foreach ($value_1 as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $values_1[] = $values_2;
            }
            $data->{'Containers'} = $values_1;
        }
        if (null !== $object->getVolumes()) {
            $values_3 = array();
            foreach ($object->getVolumes() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'Volumes'} = $values_3;
        }
        return $data;
    }
}