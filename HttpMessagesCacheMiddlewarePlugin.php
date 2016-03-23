<?php

namespace Craft;

class HttpMessagesCacheMiddlewarePlugin extends BasePlugin
{
    /**
     * Get Name
     *
     * @return string Name
     */
    public function getName()
    {
         return Craft::t('Http Messages - Cache Middleware');
    }

    /**
     * Get Version
     *
     * @return string Version
     */
    public function getVersion()
    {
        return '0.0.0';
    }

    /**
     * Get Developer
     *
     * @return string Developer
     */
    public function getDeveloper()
    {
        return 'Airtype';
    }

    /**
     * Get Developer Url
     *
     * @return string Developer Url
     */
    public function getDeveloperUrl()
    {
        return 'http://airtype.com';
    }

    /**
     * Register Http Messages Middleware
     *
     * @return
     */
    public function registerHttpMessagesMiddlewareHandle()
    {
        return 'cache';
    }

    /**
     * Register Http Messages Middleware
     *
     * @return
     */
    public function registerHttpMessagesMiddlewareClass()
    {
        return 'HttpMessagesCacheMiddleware\\Middleware\\CacheMiddleware';
    }

    /**
     * On Before Install
     *
     * @return false|void
     */
    public function onBeforeInstall()
    {
        $http_messages = craft()->plugins->getPlugin('httpMessages');

        if (!$http_messages) {
            return false;
        }

        if (!version_compare('0.0.0', $http_messages->getVersion(), '>=')) {
            return false;
        }
    }

}
