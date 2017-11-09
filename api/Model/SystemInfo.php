<?php

namespace Dockent\OpenAPI\Model;

class SystemInfo
{
    /**
     * @var string
     */
    protected $iD;
    /**
     * @var int
     */
    protected $containers;
    /**
     * @var int
     */
    protected $containersRunning;
    /**
     * @var int
     */
    protected $containersPaused;
    /**
     * @var int
     */
    protected $containersStopped;
    /**
     * @var int
     */
    protected $images;
    /**
     * @var string
     */
    protected $driver;
    /**
     * @var string[][]
     */
    protected $driverStatus;
    /**
     * @var string
     */
    protected $dockerRootDir;
    /**
     * @var string[][]
     */
    protected $systemStatus;
    /**
     * @var PluginsInfo
     */
    protected $plugins;
    /**
     * @var bool
     */
    protected $memoryLimit;
    /**
     * @var bool
     */
    protected $swapLimit;
    /**
     * @var bool
     */
    protected $kernelMemory;
    /**
     * @var bool
     */
    protected $cpuCfsPeriod;
    /**
     * @var bool
     */
    protected $cpuCfsQuota;
    /**
     * @var bool
     */
    protected $cPUShares;
    /**
     * @var bool
     */
    protected $cPUSet;
    /**
     * @var bool
     */
    protected $oomKillDisable;
    /**
     * @var bool
     */
    protected $iPv4Forwarding;
    /**
     * @var bool
     */
    protected $bridgeNfIptables;
    /**
     * @var bool
     */
    protected $bridgeNfIp6tables;
    /**
     * @var bool
     */
    protected $debug;
    /**
     * @var int
     */
    protected $nFd;
    /**
     * @var int
     */
    protected $nGoroutines;
    /**
     * @var string
     */
    protected $systemTime;
    /**
     * @var string
     */
    protected $loggingDriver;
    /**
     * @var string
     */
    protected $cgroupDriver;
    /**
     * @var int
     */
    protected $nEventsListener;
    /**
     * @var string
     */
    protected $kernelVersion;
    /**
     * @var string
     */
    protected $operatingSystem;
    /**
     * @var string
     */
    protected $oSType;
    /**
     * @var string
     */
    protected $architecture;
    /**
     * @var int
     */
    protected $nCPU;
    /**
     * @var int
     */
    protected $memTotal;
    /**
     * @var string
     */
    protected $indexServerAddress;
    /**
     * @var RegistryServiceConfig
     */
    protected $registryConfig;
    /**
     * @var GenericResourcesItem[]
     */
    protected $genericResources;
    /**
     * @var string
     */
    protected $httpProxy;
    /**
     * @var string
     */
    protected $httpsProxy;
    /**
     * @var string
     */
    protected $noProxy;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string[]
     */
    protected $labels;
    /**
     * @var bool
     */
    protected $experimentalBuild;
    /**
     * @var string
     */
    protected $serverVersion;
    /**
     * @var string
     */
    protected $clusterStore;
    /**
     * @var string
     */
    protected $clusterAdvertise;
    /**
     * @var Runtime[]
     */
    protected $runtimes;
    /**
     * @var string
     */
    protected $defaultRuntime;
    /**
     * @var SwarmInfo
     */
    protected $swarm;
    /**
     * @var bool
     */
    protected $liveRestoreEnabled;
    /**
     * @var string
     */
    protected $isolation;
    /**
     * @var string
     */
    protected $initBinary;
    /**
     * @var Commit
     */
    protected $containerdCommit;
    /**
     * @var Commit
     */
    protected $runcCommit;
    /**
     * @var Commit
     */
    protected $initCommit;
    /**
     * @var string[]
     */
    protected $securityOptions;
    /**
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }
    /**
     * @param string $iD
     *
     * @return self
     */
    public function setID($iD = null)
    {
        $this->iD = $iD;
        return $this;
    }
    /**
     * @return int
     */
    public function getContainers()
    {
        return $this->containers;
    }
    /**
     * @param int $containers
     *
     * @return self
     */
    public function setContainers($containers = null)
    {
        $this->containers = $containers;
        return $this;
    }
    /**
     * @return int
     */
    public function getContainersRunning()
    {
        return $this->containersRunning;
    }
    /**
     * @param int $containersRunning
     *
     * @return self
     */
    public function setContainersRunning($containersRunning = null)
    {
        $this->containersRunning = $containersRunning;
        return $this;
    }
    /**
     * @return int
     */
    public function getContainersPaused()
    {
        return $this->containersPaused;
    }
    /**
     * @param int $containersPaused
     *
     * @return self
     */
    public function setContainersPaused($containersPaused = null)
    {
        $this->containersPaused = $containersPaused;
        return $this;
    }
    /**
     * @return int
     */
    public function getContainersStopped()
    {
        return $this->containersStopped;
    }
    /**
     * @param int $containersStopped
     *
     * @return self
     */
    public function setContainersStopped($containersStopped = null)
    {
        $this->containersStopped = $containersStopped;
        return $this;
    }
    /**
     * @return int
     */
    public function getImages()
    {
        return $this->images;
    }
    /**
     * @param int $images
     *
     * @return self
     */
    public function setImages($images = null)
    {
        $this->images = $images;
        return $this;
    }
    /**
     * @return string
     */
    public function getDriver()
    {
        return $this->driver;
    }
    /**
     * @param string $driver
     *
     * @return self
     */
    public function setDriver($driver = null)
    {
        $this->driver = $driver;
        return $this;
    }
    /**
     * @return string[][]
     */
    public function getDriverStatus()
    {
        return $this->driverStatus;
    }
    /**
     * @param string[][] $driverStatus
     *
     * @return self
     */
    public function setDriverStatus(array $driverStatus = null)
    {
        $this->driverStatus = $driverStatus;
        return $this;
    }
    /**
     * @return string
     */
    public function getDockerRootDir()
    {
        return $this->dockerRootDir;
    }
    /**
     * @param string $dockerRootDir
     *
     * @return self
     */
    public function setDockerRootDir($dockerRootDir = null)
    {
        $this->dockerRootDir = $dockerRootDir;
        return $this;
    }
    /**
     * @return string[][]
     */
    public function getSystemStatus()
    {
        return $this->systemStatus;
    }
    /**
     * @param string[][] $systemStatus
     *
     * @return self
     */
    public function setSystemStatus(array $systemStatus = null)
    {
        $this->systemStatus = $systemStatus;
        return $this;
    }
    /**
     * @return PluginsInfo
     */
    public function getPlugins()
    {
        return $this->plugins;
    }
    /**
     * @param PluginsInfo $plugins
     *
     * @return self
     */
    public function setPlugins(PluginsInfo $plugins = null)
    {
        $this->plugins = $plugins;
        return $this;
    }
    /**
     * @return bool
     */
    public function getMemoryLimit()
    {
        return $this->memoryLimit;
    }
    /**
     * @param bool $memoryLimit
     *
     * @return self
     */
    public function setMemoryLimit($memoryLimit = null)
    {
        $this->memoryLimit = $memoryLimit;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSwapLimit()
    {
        return $this->swapLimit;
    }
    /**
     * @param bool $swapLimit
     *
     * @return self
     */
    public function setSwapLimit($swapLimit = null)
    {
        $this->swapLimit = $swapLimit;
        return $this;
    }
    /**
     * @return bool
     */
    public function getKernelMemory()
    {
        return $this->kernelMemory;
    }
    /**
     * @param bool $kernelMemory
     *
     * @return self
     */
    public function setKernelMemory($kernelMemory = null)
    {
        $this->kernelMemory = $kernelMemory;
        return $this;
    }
    /**
     * @return bool
     */
    public function getCpuCfsPeriod()
    {
        return $this->cpuCfsPeriod;
    }
    /**
     * @param bool $cpuCfsPeriod
     *
     * @return self
     */
    public function setCpuCfsPeriod($cpuCfsPeriod = null)
    {
        $this->cpuCfsPeriod = $cpuCfsPeriod;
        return $this;
    }
    /**
     * @return bool
     */
    public function getCpuCfsQuota()
    {
        return $this->cpuCfsQuota;
    }
    /**
     * @param bool $cpuCfsQuota
     *
     * @return self
     */
    public function setCpuCfsQuota($cpuCfsQuota = null)
    {
        $this->cpuCfsQuota = $cpuCfsQuota;
        return $this;
    }
    /**
     * @return bool
     */
    public function getCPUShares()
    {
        return $this->cPUShares;
    }
    /**
     * @param bool $cPUShares
     *
     * @return self
     */
    public function setCPUShares($cPUShares = null)
    {
        $this->cPUShares = $cPUShares;
        return $this;
    }
    /**
     * @return bool
     */
    public function getCPUSet()
    {
        return $this->cPUSet;
    }
    /**
     * @param bool $cPUSet
     *
     * @return self
     */
    public function setCPUSet($cPUSet = null)
    {
        $this->cPUSet = $cPUSet;
        return $this;
    }
    /**
     * @return bool
     */
    public function getOomKillDisable()
    {
        return $this->oomKillDisable;
    }
    /**
     * @param bool $oomKillDisable
     *
     * @return self
     */
    public function setOomKillDisable($oomKillDisable = null)
    {
        $this->oomKillDisable = $oomKillDisable;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIPv4Forwarding()
    {
        return $this->iPv4Forwarding;
    }
    /**
     * @param bool $iPv4Forwarding
     *
     * @return self
     */
    public function setIPv4Forwarding($iPv4Forwarding = null)
    {
        $this->iPv4Forwarding = $iPv4Forwarding;
        return $this;
    }
    /**
     * @return bool
     */
    public function getBridgeNfIptables()
    {
        return $this->bridgeNfIptables;
    }
    /**
     * @param bool $bridgeNfIptables
     *
     * @return self
     */
    public function setBridgeNfIptables($bridgeNfIptables = null)
    {
        $this->bridgeNfIptables = $bridgeNfIptables;
        return $this;
    }
    /**
     * @return bool
     */
    public function getBridgeNfIp6tables()
    {
        return $this->bridgeNfIp6tables;
    }
    /**
     * @param bool $bridgeNfIp6tables
     *
     * @return self
     */
    public function setBridgeNfIp6tables($bridgeNfIp6tables = null)
    {
        $this->bridgeNfIp6tables = $bridgeNfIp6tables;
        return $this;
    }
    /**
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }
    /**
     * @param bool $debug
     *
     * @return self
     */
    public function setDebug($debug = null)
    {
        $this->debug = $debug;
        return $this;
    }
    /**
     * @return int
     */
    public function getNFd()
    {
        return $this->nFd;
    }
    /**
     * @param int $nFd
     *
     * @return self
     */
    public function setNFd($nFd = null)
    {
        $this->nFd = $nFd;
        return $this;
    }
    /**
     * @return int
     */
    public function getNGoroutines()
    {
        return $this->nGoroutines;
    }
    /**
     * @param int $nGoroutines
     *
     * @return self
     */
    public function setNGoroutines($nGoroutines = null)
    {
        $this->nGoroutines = $nGoroutines;
        return $this;
    }
    /**
     * @return string
     */
    public function getSystemTime()
    {
        return $this->systemTime;
    }
    /**
     * @param string $systemTime
     *
     * @return self
     */
    public function setSystemTime($systemTime = null)
    {
        $this->systemTime = $systemTime;
        return $this;
    }
    /**
     * @return string
     */
    public function getLoggingDriver()
    {
        return $this->loggingDriver;
    }
    /**
     * @param string $loggingDriver
     *
     * @return self
     */
    public function setLoggingDriver($loggingDriver = null)
    {
        $this->loggingDriver = $loggingDriver;
        return $this;
    }
    /**
     * @return string
     */
    public function getCgroupDriver()
    {
        return $this->cgroupDriver;
    }
    /**
     * @param string $cgroupDriver
     *
     * @return self
     */
    public function setCgroupDriver($cgroupDriver = null)
    {
        $this->cgroupDriver = $cgroupDriver;
        return $this;
    }
    /**
     * @return int
     */
    public function getNEventsListener()
    {
        return $this->nEventsListener;
    }
    /**
     * @param int $nEventsListener
     *
     * @return self
     */
    public function setNEventsListener($nEventsListener = null)
    {
        $this->nEventsListener = $nEventsListener;
        return $this;
    }
    /**
     * @return string
     */
    public function getKernelVersion()
    {
        return $this->kernelVersion;
    }
    /**
     * @param string $kernelVersion
     *
     * @return self
     */
    public function setKernelVersion($kernelVersion = null)
    {
        $this->kernelVersion = $kernelVersion;
        return $this;
    }
    /**
     * @return string
     */
    public function getOperatingSystem()
    {
        return $this->operatingSystem;
    }
    /**
     * @param string $operatingSystem
     *
     * @return self
     */
    public function setOperatingSystem($operatingSystem = null)
    {
        $this->operatingSystem = $operatingSystem;
        return $this;
    }
    /**
     * @return string
     */
    public function getOSType()
    {
        return $this->oSType;
    }
    /**
     * @param string $oSType
     *
     * @return self
     */
    public function setOSType($oSType = null)
    {
        $this->oSType = $oSType;
        return $this;
    }
    /**
     * @return string
     */
    public function getArchitecture()
    {
        return $this->architecture;
    }
    /**
     * @param string $architecture
     *
     * @return self
     */
    public function setArchitecture($architecture = null)
    {
        $this->architecture = $architecture;
        return $this;
    }
    /**
     * @return int
     */
    public function getNCPU()
    {
        return $this->nCPU;
    }
    /**
     * @param int $nCPU
     *
     * @return self
     */
    public function setNCPU($nCPU = null)
    {
        $this->nCPU = $nCPU;
        return $this;
    }
    /**
     * @return int
     */
    public function getMemTotal()
    {
        return $this->memTotal;
    }
    /**
     * @param int $memTotal
     *
     * @return self
     */
    public function setMemTotal($memTotal = null)
    {
        $this->memTotal = $memTotal;
        return $this;
    }
    /**
     * @return string
     */
    public function getIndexServerAddress()
    {
        return $this->indexServerAddress;
    }
    /**
     * @param string $indexServerAddress
     *
     * @return self
     */
    public function setIndexServerAddress($indexServerAddress = null)
    {
        $this->indexServerAddress = $indexServerAddress;
        return $this;
    }
    /**
     * @return RegistryServiceConfig
     */
    public function getRegistryConfig()
    {
        return $this->registryConfig;
    }
    /**
     * @param RegistryServiceConfig $registryConfig
     *
     * @return self
     */
    public function setRegistryConfig(RegistryServiceConfig $registryConfig = null)
    {
        $this->registryConfig = $registryConfig;
        return $this;
    }
    /**
     * @return GenericResourcesItem[]
     */
    public function getGenericResources()
    {
        return $this->genericResources;
    }
    /**
     * @param GenericResourcesItem[] $genericResources
     *
     * @return self
     */
    public function setGenericResources(array $genericResources = null)
    {
        $this->genericResources = $genericResources;
        return $this;
    }
    /**
     * @return string
     */
    public function getHttpProxy()
    {
        return $this->httpProxy;
    }
    /**
     * @param string $httpProxy
     *
     * @return self
     */
    public function setHttpProxy($httpProxy = null)
    {
        $this->httpProxy = $httpProxy;
        return $this;
    }
    /**
     * @return string
     */
    public function getHttpsProxy()
    {
        return $this->httpsProxy;
    }
    /**
     * @param string $httpsProxy
     *
     * @return self
     */
    public function setHttpsProxy($httpsProxy = null)
    {
        $this->httpsProxy = $httpsProxy;
        return $this;
    }
    /**
     * @return string
     */
    public function getNoProxy()
    {
        return $this->noProxy;
    }
    /**
     * @param string $noProxy
     *
     * @return self
     */
    public function setNoProxy($noProxy = null)
    {
        $this->noProxy = $noProxy;
        return $this;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /**
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(array $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }
    /**
     * @return bool
     */
    public function getExperimentalBuild()
    {
        return $this->experimentalBuild;
    }
    /**
     * @param bool $experimentalBuild
     *
     * @return self
     */
    public function setExperimentalBuild($experimentalBuild = null)
    {
        $this->experimentalBuild = $experimentalBuild;
        return $this;
    }
    /**
     * @return string
     */
    public function getServerVersion()
    {
        return $this->serverVersion;
    }
    /**
     * @param string $serverVersion
     *
     * @return self
     */
    public function setServerVersion($serverVersion = null)
    {
        $this->serverVersion = $serverVersion;
        return $this;
    }
    /**
     * @return string
     */
    public function getClusterStore()
    {
        return $this->clusterStore;
    }
    /**
     * @param string $clusterStore
     *
     * @return self
     */
    public function setClusterStore($clusterStore = null)
    {
        $this->clusterStore = $clusterStore;
        return $this;
    }
    /**
     * @return string
     */
    public function getClusterAdvertise()
    {
        return $this->clusterAdvertise;
    }
    /**
     * @param string $clusterAdvertise
     *
     * @return self
     */
    public function setClusterAdvertise($clusterAdvertise = null)
    {
        $this->clusterAdvertise = $clusterAdvertise;
        return $this;
    }
    /**
     * @return Runtime[]
     */
    public function getRuntimes()
    {
        return $this->runtimes;
    }
    /**
     * @param Runtime[] $runtimes
     *
     * @return self
     */
    public function setRuntimes(\ArrayObject $runtimes = null)
    {
        $this->runtimes = $runtimes;
        return $this;
    }
    /**
     * @return string
     */
    public function getDefaultRuntime()
    {
        return $this->defaultRuntime;
    }
    /**
     * @param string $defaultRuntime
     *
     * @return self
     */
    public function setDefaultRuntime($defaultRuntime = null)
    {
        $this->defaultRuntime = $defaultRuntime;
        return $this;
    }
    /**
     * @return SwarmInfo
     */
    public function getSwarm()
    {
        return $this->swarm;
    }
    /**
     * @param SwarmInfo $swarm
     *
     * @return self
     */
    public function setSwarm(SwarmInfo $swarm = null)
    {
        $this->swarm = $swarm;
        return $this;
    }
    /**
     * @return bool
     */
    public function getLiveRestoreEnabled()
    {
        return $this->liveRestoreEnabled;
    }
    /**
     * @param bool $liveRestoreEnabled
     *
     * @return self
     */
    public function setLiveRestoreEnabled($liveRestoreEnabled = null)
    {
        $this->liveRestoreEnabled = $liveRestoreEnabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getIsolation()
    {
        return $this->isolation;
    }
    /**
     * @param string $isolation
     *
     * @return self
     */
    public function setIsolation($isolation = null)
    {
        $this->isolation = $isolation;
        return $this;
    }
    /**
     * @return string
     */
    public function getInitBinary()
    {
        return $this->initBinary;
    }
    /**
     * @param string $initBinary
     *
     * @return self
     */
    public function setInitBinary($initBinary = null)
    {
        $this->initBinary = $initBinary;
        return $this;
    }
    /**
     * @return Commit
     */
    public function getContainerdCommit()
    {
        return $this->containerdCommit;
    }
    /**
     * @param Commit $containerdCommit
     *
     * @return self
     */
    public function setContainerdCommit(Commit $containerdCommit = null)
    {
        $this->containerdCommit = $containerdCommit;
        return $this;
    }
    /**
     * @return Commit
     */
    public function getRuncCommit()
    {
        return $this->runcCommit;
    }
    /**
     * @param Commit $runcCommit
     *
     * @return self
     */
    public function setRuncCommit(Commit $runcCommit = null)
    {
        $this->runcCommit = $runcCommit;
        return $this;
    }
    /**
     * @return Commit
     */
    public function getInitCommit()
    {
        return $this->initCommit;
    }
    /**
     * @param Commit $initCommit
     *
     * @return self
     */
    public function setInitCommit(Commit $initCommit = null)
    {
        $this->initCommit = $initCommit;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getSecurityOptions()
    {
        return $this->securityOptions;
    }
    /**
     * @param string[] $securityOptions
     *
     * @return self
     */
    public function setSecurityOptions(array $securityOptions = null)
    {
        $this->securityOptions = $securityOptions;
        return $this;
    }
}