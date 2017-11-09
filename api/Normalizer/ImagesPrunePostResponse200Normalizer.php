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
class ImagesPrunePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\ImagesPrunePostResponse200') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\ImagesPrunePostResponse200) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\ImagesPrunePostResponse200();
        if (property_exists($data, 'ImagesDeleted')) {
            $values = array();
            foreach ($data->{'ImagesDeleted'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Dockent\\OpenAPI\\Model\\ImageDeleteResponseItem', 'json', $context);
            }
            $object->setImagesDeleted($values);
        }
        if (property_exists($data, 'SpaceReclaimed')) {
            $object->setSpaceReclaimed($data->{'SpaceReclaimed'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getImagesDeleted()) {
            $values = array();
            foreach ($object->getImagesDeleted() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'ImagesDeleted'} = $values;
        }
        if (null !== $object->getSpaceReclaimed()) {
            $data->{'SpaceReclaimed'} = $object->getSpaceReclaimed();
        }
        return $data;
    }
}