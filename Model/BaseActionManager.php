<?php

namespace Truelab\KottiActionBundle\Model;
use Truelab\KottiModelBundle\Model\Content;

use Truelab\KottiModelBundle\TypeInfo\TypeInfo;

/**
 * Class BaseActionManager
 * @package Truelab\KottiActionBundle\Model
 *
 * @TypeInfo({
 *   "table" = "base_action_managers",
 *   "type"  = "base_action_manager",
 *   "associated_table" = "contents",
 *   "association" = "base_action_managers.id = contents.id"
 * })
 */
class BaseActionManager extends Content
{

}
