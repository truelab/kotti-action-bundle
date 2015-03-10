<?php

namespace Truelab\KottiActionBundle\Util;

use Truelab\KottiFrontendBundle\Util\PathHandlerInterface;
use Truelab\KottiActionBundle\Model\LinkAction;
use Truelab\KottiFrontendBundle\Util\TemplateApi;

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
     * @param TemplateApi $templateApi
     *
     * @return string
     */
    public function getPath($context, TemplateApi $templateApi)
    {
        if($context instanceof LinkAction) {

            $url = $context->getLink();

            if(!$this->isAbsoluteUrl($url)) {
                return $templateApi->frontendDomain($url);
            }else{
                return $url;
            }
        }
        return null;
    }

    protected static function isAbsoluteUrl($url)
    {
        if (preg_match("~^(?:f|ht)tps?://~i", $url)) {
            return true;
        }
        return false;
    }
}
