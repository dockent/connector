<?php

namespace Dockent\OpenAPI\Model;

class Commit
{
    /**
     * @var string
     */
    protected $iD;
    /**
     * @var string
     */
    protected $expected;
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
     * @return string
     */
    public function getExpected()
    {
        return $this->expected;
    }
    /**
     * @param string $expected
     *
     * @return self
     */
    public function setExpected($expected = null)
    {
        $this->expected = $expected;
        return $this;
    }
}