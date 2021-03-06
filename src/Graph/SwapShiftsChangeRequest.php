<?php

/**
 * Generated by phpSPO model generator 2020-05-29T07:19:37+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
/**
 * Represents a type of shift request to swap a [shift](../resources/shift.md) with another user in the [team](../resources/team.md).
 */
class SwapShiftsChangeRequest extends ClientObject
{
    /**
     * ShiftId for the recipient user with whom the request is to swap.
     * @return string
     */
    public function getRecipientShiftId()
    {
        if (!$this->isPropertyAvailable("RecipientShiftId")) {
            return null;
        }
        return $this->getProperty("RecipientShiftId");
    }
    /**
     * ShiftId for the recipient user with whom the request is to swap.
     * @var string
     */
    public function setRecipientShiftId($value)
    {
        $this->setProperty("RecipientShiftId", $value, true);
    }
}