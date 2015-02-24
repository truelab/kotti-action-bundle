<?php

namespace Truelab\KottiActionBundle\Util;

use Truelab\KottiFrontendBundle\Util\PathHandlerInterface;
use Truelab\KottiActionBundle\Model\LinkAction;

/**
 * Class LinkActionPathHandler
 * @package Truelab\KottiActionBundle\Util
 */
class LinkActionPathHandler implements PathHandlerInterface
{

    /**
     * @param $context
     *
     * @return bool
     */
    public function support($context)
    {
        return $context instanceof LinkAction;
    }

    /**
     * @param $context
     *
     * @return string
     */
    public function getPath($context)
    {
        if($context instanceof LinkAction) {
            return $context->getLink();
        }
        return null;
    }
}
