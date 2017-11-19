<?php
/**
 * Application configuration shared by all applications and test types
 */
return [
    'id' => 'migratearray-module-test',
    'basePath' => dirname(__DIR__),
    'language' => 'ru',
    'sourceLanguage' => 'en',
/*    'controllerMap' => [
        'fixture' => [
            'class' => 'yii\faker\FixtureController',
            'fixtureDataPath' => '@tests/codeception/common/_fixtures/data',
            'templatePath' => '@tests/codeception/common/_templates/fixtures',
            'namespace' => 'tests\codeception\common\fixtures',
        ],
    ],*/
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            // 'class' => 'common\components\db\ConnectCloneBackup',
            // 'dsn' => 'mysql:host=localhost;dbname=yii2-migrate-array',
            'dsn' => 'sqlite:/_data/db.sqlite',
        ],
        'mailer' => [
            'useFileTransport' => true,
        ],
        'urlManager' => [
            'showScriptName' => true,
        ],
    ],
];
