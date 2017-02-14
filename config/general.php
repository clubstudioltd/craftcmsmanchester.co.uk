<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(

    /* --------------------------------------------------------------------------
     * Global
     * -------------------------------------------------------------------------- */

    '*' => array(
        'omitScriptNameInUrls' => true,
        'errorTemplatePrefix' => "_errors/",
    ),

    /* --------------------------------------------------------------------------
     * Development
     * -------------------------------------------------------------------------- */

    '.dev' => array(
        'devMode' => true,
        'siteUrl' => 'http://craftcmsmanchester.dev',
        'environmentVariables' => array(
            'basePath' => '/home/vagrant/www/craftcmsmanchester.co.uk/public/',
            'baseUrl' => 'http://craftcmsmanchester.dev/',
        )
    ),

    /* --------------------------------------------------------------------------
     * Staging
     * -------------------------------------------------------------------------- */

    'craftcmsmanchester.clubstudio.net' => array(
        'siteUrl' => 'http://craftcmsmanchester.clubstudio.net',
        'environmentVariables' => array(
            'basePath' => '/home/forge/craftcmsmanchester.clubstudio.net/public/',
            'baseUrl' => 'http://craftcmsmanchester.clubstudio.net/',
        )
    ),

    /* --------------------------------------------------------------------------
     * Production
     * -------------------------------------------------------------------------- */

    '.co.uk' => array(
        'siteUrl' => 'https://craftcmsmanchester.co.uk',
        'environmentVariables' => array(
            'basePath' => '/home/forge/craftcmsmanchester.co.uk/public/',
            'baseUrl' => 'https://craftcmsmanchester.co.uk/',
        )
    )

);
