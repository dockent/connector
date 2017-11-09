<?php

namespace Dockent\OpenAPI\Model;

class NetworkSettings
{
    /**
     * @var string
     */
    protected $bridge;
    /**
     * @var string
     */
    protected $sandboxID;
    /**
     * @var bool
     */
    protected $hairpinMode;
    /**
     * @var string
     */
    protected $linkLocalIPv6Address;
    /**
     * @var int
     */
    protected $linkLocalIPv6PrefixLen;
    /**
     * @var PortBinding[][]
     */
    protected $ports;
    /**
     * @var string
     */
    protected $sandboxKey;
    /**
     * @var Address[]
     */
    protected $secondaryIPAddresses;
    /**
     * @var Address[]
     */
    protected $secondaryIPv6Addresses;
    /**
     * @var string
     */
    protected $endpointID;
    /**
     * @var string
     */
    protected $gateway;
    /**
     * @var string
     */
    protected $globalIPv6Address;
    /**
     * @var int
     */
    protected $globalIPv6PrefixLen;
    /**
     * @var string
     */
    protected $iPAddress;
    /**
     * @var int
     */
    protected $iPPrefixLen;
    /**
     * @var string
     */
    protected $iPv6Gateway;
    /**
     * @var string
     */
    protected $macAddress;
    /**
     * @var EndpointSettings[]
     */
    protected $networks;
    /**
     * @return string
     */
    public function getBridge()
    {
        return $this->bridge;
    }
    /**
     * @param string $bridge
     *
     * @return self
     */
    public function setBridge($bridge = null)
    {
        $this->bridge = $bridge;
        return $this;
    }
    /**
     * @return string
     */
    public function getSandboxID()
    {
        return $this->sandboxID;
    }
    /**
     * @param string $sandboxID
     *
     * @return self
     */
    public function setSandboxID($sandboxID = null)
    {
        $this->sandboxID = $sandboxID;
        return $this;
    }
    /**
     * @return bool
     */
    public function getHairpinMode()
    {
        return $this->hairpinMode;
    }
    /**
     * @param bool $hairpinMode
     *
     * @return self
     */
    public function setHairpinMode($hairpinMode = null)
    {
        $this->hairpinMode = $hairpinMode;
        return $this;
    }
    /**
     * @return string
     */
    public function getLinkLocalIPv6Address()
    {
        return $this->linkLocalIPv6Address;
    }
    /**
     * @param string $linkLocalIPv6Address
     *
     * @return self
     */
    public function setLinkLocalIPv6Address($linkLocalIPv6Address = null)
    {
        $this->linkLocalIPv6Address = $linkLocalIPv6Address;
        return $this;
    }
    /**
     * @return int
     */
    public function getLinkLocalIPv6PrefixLen()
    {
        return $this->linkLocalIPv6PrefixLen;
    }
    /**
     * @param int $linkLocalIPv6PrefixLen
     *
     * @return self
     */
    public function setLinkLocalIPv6PrefixLen($linkLocalIPv6PrefixLen = null)
    {
        $this->linkLocalIPv6PrefixLen = $linkLocalIPv6PrefixLen;
        return $this;
    }
    /**
     * @return PortBinding[][]
     */
    public function getPorts()
    {
        return $this->ports;
    }
    /**
     * @param PortBinding[][] $ports
     *
     * @return self
     */
    public function setPorts(\ArrayObject $ports = null)
    {
        $this->ports = $ports;
        return $this;
    }
    /**
     * @return string
     */
    public function getSandboxKey()
    {
        return $this->sandboxKey;
    }
    /**
     * @param string $sandboxKey
     *
     * @return self
     */
    public function setSandboxKey($sandboxKey = null)
    {
        $this->sandboxKey = $sandboxKey;
        return $this;
    }
    /**
     * @return Address[]
     */
    public function getSecondaryIPAddresses()
    {
        return $this->secondaryIPAddresses;
    }
    /**
     * @param Address[] $secondaryIPAddresses
     *
     * @return self
     */
    public function setSecondaryIPAddresses(array $secondaryIPAddresses = null)
    {
        $this->secondaryIPAddresses = $secondaryIPAddresses;
        return $this;
    }
    /**
     * @return Address[]
     */
    public function getSecondaryIPv6Addresses()
    {
        return $this->secondaryIPv6Addresses;
    }
    /**
     * @param Address[] $secondaryIPv6Addresses
     *
     * @return self
     */
    public function setSecondaryIPv6Addresses(array $secondaryIPv6Addresses = null)
    {
        $this->secondaryIPv6Addresses = $secondaryIPv6Addresses;
        return $this;
    }
    /**
     * @return string
     */
    public function getEndpointID()
    {
        return $this->endpointID;
    }
    /**
     * @param string $endpointID
     *
     * @return self
     */
    public function setEndpointID($endpointID = null)
    {
        $this->endpointID = $endpointID;
        return $this;
    }
    /**
     * @return string
     */
    public function getGateway()
    {
        return $this->gateway;
    }
    /**
     * @param string $gateway
     *
     * @return self
     */
    public function setGateway($gateway = null)
    {
        $this->gateway = $gateway;
        return $this;
    }
    /**
     * @return string
     */
    public function getGlobalIPv6Address()
    {
        return $this->globalIPv6Address;
    }
    /**
     * @param string $globalIPv6Address
     *
     * @return self
     */
    public function setGlobalIPv6Address($globalIPv6Address = null)
    {
        $this->globalIPv6Address = $globalIPv6Address;
        return $this;
    }
    /**
     * @return int
     */
    public function getGlobalIPv6PrefixLen()
    {
        return $this->globalIPv6PrefixLen;
    }
    /**
     * @param int $globalIPv6PrefixLen
     *
     * @return self
     */
    public function setGlobalIPv6PrefixLen($globalIPv6PrefixLen = null)
    {
        $this->globalIPv6PrefixLen = $globalIPv6PrefixLen;
        return $this;
    }
    /**
     * @return string
     */
    public function getIPAddress()
    {
        return $this->iPAddress;
    }
    /**
     * @param string $iPAddress
     *
     * @return self
     */
    public function setIPAddress($iPAddress = null)
    {
        $this->iPAddress = $iPAddress;
        return $this;
    }
    /**
     * @return int
     */
    public function getIPPrefixLen()
    {
        return $this->iPPrefixLen;
    }
    /**
     * @param int $iPPrefixLen
     *
     * @return self
     */
    public function setIPPrefixLen($iPPrefixLen = null)
    {
        $this->iPPrefixLen = $iPPrefixLen;
        return $this;
    }
    /**
     * @return string
     */
    public function getIPv6Gateway()
    {
        return $this->iPv6Gateway;
    }
    /**
     * @param string $iPv6Gateway
     *
     * @return self
     */
    public function setIPv6Gateway($iPv6Gateway = null)
    {
        $this->iPv6Gateway = $iPv6Gateway;
        return $this;
    }
    /**
     * @return string
     */
    public function getMacAddress()
    {
        return $this->macAddress;
    }
    /**
     * @param string $macAddress
     *
     * @return self
     */
    public function setMacAddress($macAddress = null)
    {
        $this->macAddress = $macAddress;
        return $this;
    }
    /**
     * @return EndpointSettings[]
     */
    public function getNetworks()
    {
        return $this->networks;
    }
    /**
     * @param EndpointSettings[] $networks
     *
     * @return self
     */
    public function setNetworks(\ArrayObject $networks = null)
    {
        $this->networks = $networks;
        return $this;
    }
}