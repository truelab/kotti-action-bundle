<?php

namespace Truelab\KottiActionBundle\Model;

use Truelab\KottiModelBundle\TypeInfo\TypeInfo;

/**
 * Class NavigationActionManager
 * @package Truelab\KottiActionBundle\Model
 *
 * @TypeInfo({
 *   "table" = "navigation_action_managers",
 *   "type"  = "navigation_action_manager",
 *   "associated_table" = "base_action_managers",
 *   "association" = "navigation_action_managers.id = base_action_managers.id"
 * })
 */
class NavigationActionManager extends BaseActionManager
{

}
