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
 *   "fields" = {"link"},
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
}
