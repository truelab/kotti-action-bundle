<?php

namespace Truelab\KottiActionBundle\Model;

use Truelab\KottiModelBundle\TypeInfo\TypeInfo;

/**
 * Class HeaderActionManager
 * @package Truelab\KottiActionBundle\Model
 *
 * @TypeInfo({
 *   "table" = "header_action_managers",
 *   "type"  = "header_action_manager",
 *   "associated_table" = "base_action_managers",
 *   "association" = "header_action_managers.id = base_action_managers.id"
 * })
 */
class HeaderActionManager extends BaseActionManager
{

}
