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
class SwarmInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\SwarmInfo') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\SwarmInfo) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\SwarmInfo();
        if (property_exists($data, 'NodeID')) {
            $object->setNodeID($data->{'NodeID'});
        }
        if (property_exists($data, 'NodeAddr')) {
            $object->setNodeAddr($data->{'NodeAddr'});
        }
        if (property_exists($data, 'LocalNodeState')) {
            $object->setLocalNodeState($data->{'LocalNodeState'});
        }
        if (property_exists($data, 'ControlAvailable')) {
            $object->setControlAvailable($data->{'ControlAvailable'});
        }
        if (property_exists($data, 'Error')) {
            $object->setError($data->{'Error'});
        }
        if (property_exists($data, 'RemoteManagers')) {
            $values = array();
            foreach ($data->{'RemoteManagers'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Dockent\\OpenAPI\\Model\\PeerNode', 'json', $context);
            }
            $object->setRemoteManagers($values);
        }
        if (property_exists($data, 'Nodes')) {
            $object->setNodes($data->{'Nodes'});
        }
        if (property_exists($data, 'Managers')) {
            $object->setManagers($data->{'Managers'});
        }
        if (property_exists($data, 'Cluster')) {
            $object->setCluster($this->denormalizer->denormalize($data->{'Cluster'}, 'Dockent\\OpenAPI\\Model\\ClusterInfo', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getNodeID()) {
            $data->{'NodeID'} = $object->getNodeID();
        }
        if (null !== $object->getNodeAddr()) {
            $data->{'NodeAddr'} = $object->getNodeAddr();
        }
        if (null !== $object->getLocalNodeState()) {
            $data->{'LocalNodeState'} = $object->getLocalNodeState();
        }
        if (null !== $object->getControlAvailable()) {
            $data->{'ControlAvailable'} = $object->getControlAvailable();
        }
        if (null !== $object->getError()) {
            $data->{'Error'} = $object->getError();
        }
        if (null !== $object->getRemoteManagers()) {
            $values = array();
            foreach ($object->getRemoteManagers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'RemoteManagers'} = $values;
        }
        if (null !== $object->getNodes()) {
            $data->{'Nodes'} = $object->getNodes();
        }
        if (null !== $object->getManagers()) {
            $data->{'Managers'} = $object->getManagers();
        }
        if (null !== $object->getCluster()) {
            $data->{'Cluster'} = $this->normalizer->normalize($object->getCluster(), 'json', $context);
        }
        return $data;
    }
}