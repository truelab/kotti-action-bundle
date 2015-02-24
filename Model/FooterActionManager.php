<?php

namespace Truelab\KottiActionBundle\Model;

use Truelab\KottiModelBundle\TypeInfo\TypeInfo;

/**
 * Class FooterActionManager
 * @package Truelab\KottiActionBundle\Model
 *
 * @TypeInfo({
 *   "table" = "footer_action_managers",
 *   "type"  = "footer_action_manager",
 *   "associated_table" = "base_action_managers",
 *   "association" = "footer_action_managers.id = base_action_managers.id"
 * })
 */
class FooterActionManager extends BaseActionManager
{

}
