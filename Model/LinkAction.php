<?php

namespace Truelab\KottiActionBundle\Model;
use Truelab\KottiModelBundle\Model\Document;

use Truelab\KottiModelBundle\TypeInfo\TypeInfo;

/**
 * Class LinkAction
 * @package Truelab\KottiActionBundle\Model
 *
 * @TypeInfo({
 *   "table" = "link_actions",
 *   "type"  = "link_action",
 *   "fields" = {"link", "target"},
 *   "associated_table" = "documents",
 *   "association" = "link_actions.id = documents.id"
 * })
 */
class LinkAction extends Document
{
    /**
     * @var string $link
     */
    protected $link;

    /**
     * @var string $target;
     */
    protected $target;

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param $target
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }

    /**
     * @return string
     */
    public function  getTarget()
    {
        return $this->target;
    }
}
