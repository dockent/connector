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
class TLSInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\TLSInfo') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\TLSInfo) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\TLSInfo();
        if (property_exists($data, 'TrustRoot')) {
            $object->setTrustRoot($data->{'TrustRoot'});
        }
        if (property_exists($data, 'CertIssuerSubject')) {
            $object->setCertIssuerSubject($data->{'CertIssuerSubject'});
        }
        if (property_exists($data, 'CertIssuerPublicKey')) {
            $object->setCertIssuerPublicKey($data->{'CertIssuerPublicKey'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTrustRoot()) {
            $data->{'TrustRoot'} = $object->getTrustRoot();
        }
        if (null !== $object->getCertIssuerSubject()) {
            $data->{'CertIssuerSubject'} = $object->getCertIssuerSubject();
        }
        if (null !== $object->getCertIssuerPublicKey()) {
            $data->{'CertIssuerPublicKey'} = $object->getCertIssuerPublicKey();
        }
        return $data;
    }
}