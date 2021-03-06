<?php

/**
 * Updated By PHP Office365 Generator 2020-04-25T20:53:05+00:00 16.0.20008.12009
 */
namespace Office365\OutlookServices;

use Office365\Runtime\ResourcePath;

/**
 * A message, contact, or event that's attached to another message or event
 */
class ItemAttachment extends Attachment
{
    /**
     * The attached message or event. Navigation property.
     * @var Item
     */
    public $Item;
    /**
     * @return Item
     */
    public function getItem()
    {
        if (!$this->isPropertyAvailable("Item")) {
            $this->setProperty("Item", new Item($this->getContext(),
                new ResourcePath("Item", $this->getResourcePath())));
        }
        return $this->getProperty("Item");
    }
}