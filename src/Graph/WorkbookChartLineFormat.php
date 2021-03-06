<?php

/**
 * Generated by phpSPO model generator 2020-05-25T06:42:59+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class WorkbookChartLineFormat extends ClientObject
{
    /**
     * @return string
     */
    public function getColor()
    {
        if (!$this->isPropertyAvailable("Color")) {
            return null;
        }
        return $this->getProperty("Color");
    }
    /**
     * @var string
     */
    public function setColor($value)
    {
        $this->setProperty("Color", $value, true);
    }
}