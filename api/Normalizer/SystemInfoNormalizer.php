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
class SystemInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Dockent\\OpenAPI\\Model\\SystemInfo') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Dockent\OpenAPI\Model\SystemInfo) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Dockent\OpenAPI\Model\SystemInfo();
        if (property_exists($data, 'ID')) {
            $object->setID($data->{'ID'});
        }
        if (property_exists($data, 'Containers')) {
            $object->setContainers($data->{'Containers'});
        }
        if (property_exists($data, 'ContainersRunning')) {
            $object->setContainersRunning($data->{'ContainersRunning'});
        }
        if (property_exists($data, 'ContainersPaused')) {
            $object->setContainersPaused($data->{'ContainersPaused'});
        }
        if (property_exists($data, 'ContainersStopped')) {
            $object->setContainersStopped($data->{'ContainersStopped'});
        }
        if (property_exists($data, 'Images')) {
            $object->setImages($data->{'Images'});
        }
        if (property_exists($data, 'Driver')) {
            $object->setDriver($data->{'Driver'});
        }
        if (property_exists($data, 'DriverStatus')) {
            $values = array();
            foreach ($data->{'DriverStatus'} as $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setDriverStatus($values);
        }
        if (property_exists($data, 'DockerRootDir')) {
            $object->setDockerRootDir($data->{'DockerRootDir'});
        }
        if (property_exists($data, 'SystemStatus')) {
            $values_2 = array();
            foreach ($data->{'SystemStatus'} as $value_2) {
                $values_3 = array();
                foreach ($value_2 as $value_3) {
                    $values_3[] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $object->setSystemStatus($values_2);
        }
        if (property_exists($data, 'Plugins')) {
            $object->setPlugins($this->denormalizer->denormalize($data->{'Plugins'}, 'Dockent\\OpenAPI\\Model\\PluginsInfo', 'json', $context));
        }
        if (property_exists($data, 'MemoryLimit')) {
            $object->setMemoryLimit($data->{'MemoryLimit'});
        }
        if (property_exists($data, 'SwapLimit')) {
            $object->setSwapLimit($data->{'SwapLimit'});
        }
        if (property_exists($data, 'KernelMemory')) {
            $object->setKernelMemory($data->{'KernelMemory'});
        }
        if (property_exists($data, 'CpuCfsPeriod')) {
            $object->setCpuCfsPeriod($data->{'CpuCfsPeriod'});
        }
        if (property_exists($data, 'CpuCfsQuota')) {
            $object->setCpuCfsQuota($data->{'CpuCfsQuota'});
        }
        if (property_exists($data, 'CPUShares')) {
            $object->setCPUShares($data->{'CPUShares'});
        }
        if (property_exists($data, 'CPUSet')) {
            $object->setCPUSet($data->{'CPUSet'});
        }
        if (property_exists($data, 'OomKillDisable')) {
            $object->setOomKillDisable($data->{'OomKillDisable'});
        }
        if (property_exists($data, 'IPv4Forwarding')) {
            $object->setIPv4Forwarding($data->{'IPv4Forwarding'});
        }
        if (property_exists($data, 'BridgeNfIptables')) {
            $object->setBridgeNfIptables($data->{'BridgeNfIptables'});
        }
        if (property_exists($data, 'BridgeNfIp6tables')) {
            $object->setBridgeNfIp6tables($data->{'BridgeNfIp6tables'});
        }
        if (property_exists($data, 'Debug')) {
            $object->setDebug($data->{'Debug'});
        }
        if (property_exists($data, 'NFd')) {
            $object->setNFd($data->{'NFd'});
        }
        if (property_exists($data, 'NGoroutines')) {
            $object->setNGoroutines($data->{'NGoroutines'});
        }
        if (property_exists($data, 'SystemTime')) {
            $object->setSystemTime($data->{'SystemTime'});
        }
        if (property_exists($data, 'LoggingDriver')) {
            $object->setLoggingDriver($data->{'LoggingDriver'});
        }
        if (property_exists($data, 'CgroupDriver')) {
            $object->setCgroupDriver($data->{'CgroupDriver'});
        }
        if (property_exists($data, 'NEventsListener')) {
            $object->setNEventsListener($data->{'NEventsListener'});
        }
        if (property_exists($data, 'KernelVersion')) {
            $object->setKernelVersion($data->{'KernelVersion'});
        }
        if (property_exists($data, 'OperatingSystem')) {
            $object->setOperatingSystem($data->{'OperatingSystem'});
        }
        if (property_exists($data, 'OSType')) {
            $object->setOSType($data->{'OSType'});
        }
        if (property_exists($data, 'Architecture')) {
            $object->setArchitecture($data->{'Architecture'});
        }
        if (property_exists($data, 'NCPU')) {
            $object->setNCPU($data->{'NCPU'});
        }
        if (property_exists($data, 'MemTotal')) {
            $object->setMemTotal($data->{'MemTotal'});
        }
        if (property_exists($data, 'IndexServerAddress')) {
            $object->setIndexServerAddress($data->{'IndexServerAddress'});
        }
        if (property_exists($data, 'RegistryConfig')) {
            $object->setRegistryConfig($this->denormalizer->denormalize($data->{'RegistryConfig'}, 'Dockent\\OpenAPI\\Model\\RegistryServiceConfig', 'json', $context));
        }
        if (property_exists($data, 'GenericResources')) {
            $values_4 = array();
            foreach ($data->{'GenericResources'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Dockent\\OpenAPI\\Model\\GenericResourcesItem', 'json', $context);
            }
            $object->setGenericResources($values_4);
        }
        if (property_exists($data, 'HttpProxy')) {
            $object->setHttpProxy($data->{'HttpProxy'});
        }
        if (property_exists($data, 'HttpsProxy')) {
            $object->setHttpsProxy($data->{'HttpsProxy'});
        }
        if (property_exists($data, 'NoProxy')) {
            $object->setNoProxy($data->{'NoProxy'});
        }
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Labels')) {
            $values_5 = array();
            foreach ($data->{'Labels'} as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setLabels($values_5);
        }
        if (property_exists($data, 'ExperimentalBuild')) {
            $object->setExperimentalBuild($data->{'ExperimentalBuild'});
        }
        if (property_exists($data, 'ServerVersion')) {
            $object->setServerVersion($data->{'ServerVersion'});
        }
        if (property_exists($data, 'ClusterStore')) {
            $object->setClusterStore($data->{'ClusterStore'});
        }
        if (property_exists($data, 'ClusterAdvertise')) {
            $object->setClusterAdvertise($data->{'ClusterAdvertise'});
        }
        if (property_exists($data, 'Runtimes')) {
            $values_6 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Runtimes'} as $key => $value_6) {
                $values_6[$key] = $this->denormalizer->denormalize($value_6, 'Dockent\\OpenAPI\\Model\\Runtime', 'json', $context);
            }
            $object->setRuntimes($values_6);
        }
        if (property_exists($data, 'DefaultRuntime')) {
            $object->setDefaultRuntime($data->{'DefaultRuntime'});
        }
        if (property_exists($data, 'Swarm')) {
            $object->setSwarm($this->denormalizer->denormalize($data->{'Swarm'}, 'Dockent\\OpenAPI\\Model\\SwarmInfo', 'json', $context));
        }
        if (property_exists($data, 'LiveRestoreEnabled')) {
            $object->setLiveRestoreEnabled($data->{'LiveRestoreEnabled'});
        }
        if (property_exists($data, 'Isolation')) {
            $object->setIsolation($data->{'Isolation'});
        }
        if (property_exists($data, 'InitBinary')) {
            $object->setInitBinary($data->{'InitBinary'});
        }
        if (property_exists($data, 'ContainerdCommit')) {
            $object->setContainerdCommit($this->denormalizer->denormalize($data->{'ContainerdCommit'}, 'Dockent\\OpenAPI\\Model\\Commit', 'json', $context));
        }
        if (property_exists($data, 'RuncCommit')) {
            $object->setRuncCommit($this->denormalizer->denormalize($data->{'RuncCommit'}, 'Dockent\\OpenAPI\\Model\\Commit', 'json', $context));
        }
        if (property_exists($data, 'InitCommit')) {
            $object->setInitCommit($this->denormalizer->denormalize($data->{'InitCommit'}, 'Dockent\\OpenAPI\\Model\\Commit', 'json', $context));
        }
        if (property_exists($data, 'SecurityOptions')) {
            $values_7 = array();
            foreach ($data->{'SecurityOptions'} as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setSecurityOptions($values_7);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getID()) {
            $data->{'ID'} = $object->getID();
        }
        if (null !== $object->getContainers()) {
            $data->{'Containers'} = $object->getContainers();
        }
        if (null !== $object->getContainersRunning()) {
            $data->{'ContainersRunning'} = $object->getContainersRunning();
        }
        if (null !== $object->getContainersPaused()) {
            $data->{'ContainersPaused'} = $object->getContainersPaused();
        }
        if (null !== $object->getContainersStopped()) {
            $data->{'ContainersStopped'} = $object->getContainersStopped();
        }
        if (null !== $object->getImages()) {
            $data->{'Images'} = $object->getImages();
        }
        if (null !== $object->getDriver()) {
            $data->{'Driver'} = $object->getDriver();
        }
        if (null !== $object->getDriverStatus()) {
            $values = array();
            foreach ($object->getDriverStatus() as $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $data->{'DriverStatus'} = $values;
        }
        if (null !== $object->getDockerRootDir()) {
            $data->{'DockerRootDir'} = $object->getDockerRootDir();
        }
        if (null !== $object->getSystemStatus()) {
            $values_2 = array();
            foreach ($object->getSystemStatus() as $value_2) {
                $values_3 = array();
                foreach ($value_2 as $value_3) {
                    $values_3[] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $data->{'SystemStatus'} = $values_2;
        }
        if (null !== $object->getPlugins()) {
            $data->{'Plugins'} = $this->normalizer->normalize($object->getPlugins(), 'json', $context);
        }
        if (null !== $object->getMemoryLimit()) {
            $data->{'MemoryLimit'} = $object->getMemoryLimit();
        }
        if (null !== $object->getSwapLimit()) {
            $data->{'SwapLimit'} = $object->getSwapLimit();
        }
        if (null !== $object->getKernelMemory()) {
            $data->{'KernelMemory'} = $object->getKernelMemory();
        }
        if (null !== $object->getCpuCfsPeriod()) {
            $data->{'CpuCfsPeriod'} = $object->getCpuCfsPeriod();
        }
        if (null !== $object->getCpuCfsQuota()) {
            $data->{'CpuCfsQuota'} = $object->getCpuCfsQuota();
        }
        if (null !== $object->getCPUShares()) {
            $data->{'CPUShares'} = $object->getCPUShares();
        }
        if (null !== $object->getCPUSet()) {
            $data->{'CPUSet'} = $object->getCPUSet();
        }
        if (null !== $object->getOomKillDisable()) {
            $data->{'OomKillDisable'} = $object->getOomKillDisable();
        }
        if (null !== $object->getIPv4Forwarding()) {
            $data->{'IPv4Forwarding'} = $object->getIPv4Forwarding();
        }
        if (null !== $object->getBridgeNfIptables()) {
            $data->{'BridgeNfIptables'} = $object->getBridgeNfIptables();
        }
        if (null !== $object->getBridgeNfIp6tables()) {
            $data->{'BridgeNfIp6tables'} = $object->getBridgeNfIp6tables();
        }
        if (null !== $object->getDebug()) {
            $data->{'Debug'} = $object->getDebug();
        }
        if (null !== $object->getNFd()) {
            $data->{'NFd'} = $object->getNFd();
        }
        if (null !== $object->getNGoroutines()) {
            $data->{'NGoroutines'} = $object->getNGoroutines();
        }
        if (null !== $object->getSystemTime()) {
            $data->{'SystemTime'} = $object->getSystemTime();
        }
        if (null !== $object->getLoggingDriver()) {
            $data->{'LoggingDriver'} = $object->getLoggingDriver();
        }
        if (null !== $object->getCgroupDriver()) {
            $data->{'CgroupDriver'} = $object->getCgroupDriver();
        }
        if (null !== $object->getNEventsListener()) {
            $data->{'NEventsListener'} = $object->getNEventsListener();
        }
        if (null !== $object->getKernelVersion()) {
            $data->{'KernelVersion'} = $object->getKernelVersion();
        }
        if (null !== $object->getOperatingSystem()) {
            $data->{'OperatingSystem'} = $object->getOperatingSystem();
        }
        if (null !== $object->getOSType()) {
            $data->{'OSType'} = $object->getOSType();
        }
        if (null !== $object->getArchitecture()) {
            $data->{'Architecture'} = $object->getArchitecture();
        }
        if (null !== $object->getNCPU()) {
            $data->{'NCPU'} = $object->getNCPU();
        }
        if (null !== $object->getMemTotal()) {
            $data->{'MemTotal'} = $object->getMemTotal();
        }
        if (null !== $object->getIndexServerAddress()) {
            $data->{'IndexServerAddress'} = $object->getIndexServerAddress();
        }
        if (null !== $object->getRegistryConfig()) {
            $data->{'RegistryConfig'} = $this->normalizer->normalize($object->getRegistryConfig(), 'json', $context);
        }
        if (null !== $object->getGenericResources()) {
            $values_4 = array();
            foreach ($object->getGenericResources() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'GenericResources'} = $values_4;
        }
        if (null !== $object->getHttpProxy()) {
            $data->{'HttpProxy'} = $object->getHttpProxy();
        }
        if (null !== $object->getHttpsProxy()) {
            $data->{'HttpsProxy'} = $object->getHttpsProxy();
        }
        if (null !== $object->getNoProxy()) {
            $data->{'NoProxy'} = $object->getNoProxy();
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getLabels()) {
            $values_5 = array();
            foreach ($object->getLabels() as $value_5) {
                $values_5[] = $value_5;
            }
            $data->{'Labels'} = $values_5;
        }
        if (null !== $object->getExperimentalBuild()) {
            $data->{'ExperimentalBuild'} = $object->getExperimentalBuild();
        }
        if (null !== $object->getServerVersion()) {
            $data->{'ServerVersion'} = $object->getServerVersion();
        }
        if (null !== $object->getClusterStore()) {
            $data->{'ClusterStore'} = $object->getClusterStore();
        }
        if (null !== $object->getClusterAdvertise()) {
            $data->{'ClusterAdvertise'} = $object->getClusterAdvertise();
        }
        if (null !== $object->getRuntimes()) {
            $values_6 = new \stdClass();
            foreach ($object->getRuntimes() as $key => $value_6) {
                $values_6->{$key} = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data->{'Runtimes'} = $values_6;
        }
        if (null !== $object->getDefaultRuntime()) {
            $data->{'DefaultRuntime'} = $object->getDefaultRuntime();
        }
        if (null !== $object->getSwarm()) {
            $data->{'Swarm'} = $this->normalizer->normalize($object->getSwarm(), 'json', $context);
        }
        if (null !== $object->getLiveRestoreEnabled()) {
            $data->{'LiveRestoreEnabled'} = $object->getLiveRestoreEnabled();
        }
        if (null !== $object->getIsolation()) {
            $data->{'Isolation'} = $object->getIsolation();
        }
        if (null !== $object->getInitBinary()) {
            $data->{'InitBinary'} = $object->getInitBinary();
        }
        if (null !== $object->getContainerdCommit()) {
            $data->{'ContainerdCommit'} = $this->normalizer->normalize($object->getContainerdCommit(), 'json', $context);
        }
        if (null !== $object->getRuncCommit()) {
            $data->{'RuncCommit'} = $this->normalizer->normalize($object->getRuncCommit(), 'json', $context);
        }
        if (null !== $object->getInitCommit()) {
            $data->{'InitCommit'} = $this->normalizer->normalize($object->getInitCommit(), 'json', $context);
        }
        if (null !== $object->getSecurityOptions()) {
            $values_7 = array();
            foreach ($object->getSecurityOptions() as $value_7) {
                $values_7[] = $value_7;
            }
            $data->{'SecurityOptions'} = $values_7;
        }
        return $data;
    }
}