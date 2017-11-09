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
class ExecIdJsonGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\ExecIdJsonGetResponse200') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\ExecIdJsonGetResponse200) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\ExecIdJsonGetResponse200();
        if (property_exists($data, 'ID')) {
            $object->setID($data->{'ID'});
        }
        if (property_exists($data, 'Running')) {
            $object->setRunning($data->{'Running'});
        }
        if (property_exists($data, 'ExitCode')) {
            $object->setExitCode($data->{'ExitCode'});
        }
        if (property_exists($data, 'ProcessConfig')) {
            $object->setProcessConfig($this->denormalizer->denormalize($data->{'ProcessConfig'}, 'Dockent\\OpenAPI\\Model\\ProcessConfig', 'json', $context));
        }
        if (property_exists($data, 'OpenStdin')) {
            $object->setOpenStdin($data->{'OpenStdin'});
        }
        if (property_exists($data, 'OpenStderr')) {
            $object->setOpenStderr($data->{'OpenStderr'});
        }
        if (property_exists($data, 'OpenStdout')) {
            $object->setOpenStdout($data->{'OpenStdout'});
        }
        if (property_exists($data, 'ContainerID')) {
            $object->setContainerID($data->{'ContainerID'});
        }
        if (property_exists($data, 'Pid')) {
            $object->setPid($data->{'Pid'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getID()) {
            $data->{'ID'} = $object->getID();
        }
        if (null !== $object->getRunning()) {
            $data->{'Running'} = $object->getRunning();
        }
        if (null !== $object->getExitCode()) {
            $data->{'ExitCode'} = $object->getExitCode();
        }
        if (null !== $object->getProcessConfig()) {
            $data->{'ProcessConfig'} = $this->normalizer->normalize($object->getProcessConfig(), 'json', $context);
        }
        if (null !== $object->getOpenStdin()) {
            $data->{'OpenStdin'} = $object->getOpenStdin();
        }
        if (null !== $object->getOpenStderr()) {
            $data->{'OpenStderr'} = $object->getOpenStderr();
        }
        if (null !== $object->getOpenStdout()) {
            $data->{'OpenStdout'} = $object->getOpenStdout();
        }
        if (null !== $object->getContainerID()) {
            $data->{'ContainerID'} = $object->getContainerID();
        }
        if (null !== $object->getPid()) {
            $data->{'Pid'} = $object->getPid();
        }
        return $data;
    }
}