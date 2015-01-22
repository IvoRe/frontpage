<?php

namespace frontpage\models;

use Yii;

class Browser
{
    /**
    * Whether the request comes from an iPhone:
    * @returns boolean
    */
    public static function iPhone()
    {
        return (false !== strpos(Yii::$app->request->userAgent, "iPhone"));
    }
    /**
    * Whether the request comes from an iPad:
    * @returns boolean
    */
    public static function iPad()
    {
        return (false !== strpos(Yii::$app->request->userAgent, "iPad"));
    }
}