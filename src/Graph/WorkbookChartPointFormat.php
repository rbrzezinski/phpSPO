<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:05:50+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class WorkbookChartPointFormat extends ClientObject
{
    /**
     * @return WorkbookChartFill
     */
    public function getFill()
    {
        if (!$this->isPropertyAvailable("Fill")) {
            $this->setProperty("Fill", new WorkbookChartFill($this->getContext(), new ResourcePath("Fill", $this->getResourcePath())));
        }
        return $this->getProperty("Fill");
    }
}