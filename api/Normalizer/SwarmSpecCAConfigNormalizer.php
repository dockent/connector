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
class SwarmSpecCAConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\SwarmSpecCAConfig') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\SwarmSpecCAConfig) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\SwarmSpecCAConfig();
        if (property_exists($data, 'NodeCertExpiry')) {
            $object->setNodeCertExpiry($data->{'NodeCertExpiry'});
        }
        if (property_exists($data, 'ExternalCAs')) {
            $values = array();
            foreach ($data->{'ExternalCAs'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Dockent\\OpenAPI\\Model\\SwarmSpecCAConfigExternalCAsItem', 'json', $context);
            }
            $object->setExternalCAs($values);
        }
        if (property_exists($data, 'SigningCACert')) {
            $object->setSigningCACert($data->{'SigningCACert'});
        }
        if (property_exists($data, 'SigningCAKey')) {
            $object->setSigningCAKey($data->{'SigningCAKey'});
        }
        if (property_exists($data, 'ForceRotate')) {
            $object->setForceRotate($data->{'ForceRotate'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getNodeCertExpiry()) {
            $data->{'NodeCertExpiry'} = $object->getNodeCertExpiry();
        }
        if (null !== $object->getExternalCAs()) {
            $values = array();
            foreach ($object->getExternalCAs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'ExternalCAs'} = $values;
        }
        if (null !== $object->getSigningCACert()) {
            $data->{'SigningCACert'} = $object->getSigningCACert();
        }
        if (null !== $object->getSigningCAKey()) {
            $data->{'SigningCAKey'} = $object->getSigningCAKey();
        }
        if (null !== $object->getForceRotate()) {
            $data->{'ForceRotate'} = $object->getForceRotate();
        }
        return $data;
    }
}