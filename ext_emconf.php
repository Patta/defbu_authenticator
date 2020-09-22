<?php
/**
 * Copyright notice
 *
 * (c) 2020 DEFBU - Frank Buijze
 *
 * All rights reserved
 */

/**
 * Extension Manager/Repository config file for ext "user_sense".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Authenticator',
    'description' => 'A simple 2FA time-based one-time authentication service for backend',
    'category' => 'module',
    'constraints' => [
        'depends' => [
            'typo3' => '10.0.0-10.99.99',
            'php' => '7.2.0-7.4.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'DEFBU\\DefbuAuthenticator\\' => 'Classes/'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Frank Buijze',
    'author_email' => 'info@defbu.nl',
    'author_company' => 'Defbu',
    'version' => '1.0.0',
];
