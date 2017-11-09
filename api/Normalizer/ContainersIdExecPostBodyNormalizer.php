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
class ContainersIdExecPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\ContainersIdExecPostBody') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\ContainersIdExecPostBody) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\ContainersIdExecPostBody();
        if (property_exists($data, 'AttachStdin')) {
            $object->setAttachStdin($data->{'AttachStdin'});
        }
        if (property_exists($data, 'AttachStdout')) {
            $object->setAttachStdout($data->{'AttachStdout'});
        }
        if (property_exists($data, 'AttachStderr')) {
            $object->setAttachStderr($data->{'AttachStderr'});
        }
        if (property_exists($data, 'DetachKeys')) {
            $object->setDetachKeys($data->{'DetachKeys'});
        }
        if (property_exists($data, 'Tty')) {
            $object->setTty($data->{'Tty'});
        }
        if (property_exists($data, 'Env')) {
            $values = array();
            foreach ($data->{'Env'} as $value) {
                $values[] = $value;
            }
            $object->setEnv($values);
        }
        if (property_exists($data, 'Cmd')) {
            $values_1 = array();
            foreach ($data->{'Cmd'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCmd($values_1);
        }
        if (property_exists($data, 'Privileged')) {
            $object->setPrivileged($data->{'Privileged'});
        }
        if (property_exists($data, 'User')) {
            $object->setUser($data->{'User'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAttachStdin()) {
            $data->{'AttachStdin'} = $object->getAttachStdin();
        }
        if (null !== $object->getAttachStdout()) {
            $data->{'AttachStdout'} = $object->getAttachStdout();
        }
        if (null !== $object->getAttachStderr()) {
            $data->{'AttachStderr'} = $object->getAttachStderr();
        }
        if (null !== $object->getDetachKeys()) {
            $data->{'DetachKeys'} = $object->getDetachKeys();
        }
        if (null !== $object->getTty()) {
            $data->{'Tty'} = $object->getTty();
        }
        if (null !== $object->getEnv()) {
            $values = array();
            foreach ($object->getEnv() as $value) {
                $values[] = $value;
            }
            $data->{'Env'} = $values;
        }
        if (null !== $object->getCmd()) {
            $values_1 = array();
            foreach ($object->getCmd() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Cmd'} = $values_1;
        }
        if (null !== $object->getPrivileged()) {
            $data->{'Privileged'} = $object->getPrivileged();
        }
        if (null !== $object->getUser()) {
            $data->{'User'} = $object->getUser();
        }
        return $data;
    }
}