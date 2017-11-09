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
class ContainersIdTopGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\ContainersIdTopGetResponse200') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\ContainersIdTopGetResponse200) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\ContainersIdTopGetResponse200();
        if (property_exists($data, 'Titles')) {
            $values = array();
            foreach ($data->{'Titles'} as $value) {
                $values[] = $value;
            }
            $object->setTitles($values);
        }
        if (property_exists($data, 'Processes')) {
            $values_1 = array();
            foreach ($data->{'Processes'} as $value_1) {
                $values_2 = array();
                foreach ($value_1 as $value_2) {
                    $values_2[] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $object->setProcesses($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTitles()) {
            $values = array();
            foreach ($object->getTitles() as $value) {
                $values[] = $value;
            }
            $data->{'Titles'} = $values;
        }
        if (null !== $object->getProcesses()) {
            $values_1 = array();
            foreach ($object->getProcesses() as $value_1) {
                $values_2 = array();
                foreach ($value_1 as $value_2) {
                    $values_2[] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $data->{'Processes'} = $values_1;
        }
        return $data;
    }
}