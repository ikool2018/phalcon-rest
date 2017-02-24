<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6bfaf0d18119201e276c5c7005b4b6e0
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
        '841780ea2e1d6545ea3a253239d59c05' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'duncan3dc\\Forker\\' => 17,
            'duncan3dc\\ForkerTests\\' => 22,
        ),
        'Q' => 
        array (
            'Qiniu\\' => 6,
        ),
        'P' => 
        array (
            'Phalcon\\' => 8,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'D' => 
        array (
            'Dmkit\\Phalcon\\Auth\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'duncan3dc\\Forker\\' => 
        array (
            0 => __DIR__ . '/..' . '/duncan3dc/fork-helper/src',
        ),
        'duncan3dc\\ForkerTests\\' => 
        array (
            0 => __DIR__ . '/..' . '/duncan3dc/fork-helper/tests',
        ),
        'Qiniu\\' => 
        array (
            0 => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu',
        ),
        'Phalcon\\' => 
        array (
            0 => __DIR__ . '/..' . '/phalcon/incubator/Library/Phalcon',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'Dmkit\\Phalcon\\Auth\\' => 
        array (
            0 => __DIR__ . '/..' . '/dmkit/phalcon-jwt-auth/src/Phalcon/Auth',
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6bfaf0d18119201e276c5c7005b4b6e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6bfaf0d18119201e276c5c7005b4b6e0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6bfaf0d18119201e276c5c7005b4b6e0::$classMap;

        }, null, ClassLoader::class);
    }
}
