<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9022d1fece14a12eec627e4f058aabca
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '5a29f2abde115bb0e1aa502d691e2e50' => __DIR__ . '/..' . '/gerardojbaez/money/src/helpers.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        'bbf73f3db644d3dced353b837903e74c' => __DIR__ . '/..' . '/php-di/php-di/src/DI/functions.php',
        '0d77221f32e6ee627f8edece96e8d8ab' => __DIR__ . '/../..' . '/src/helpers.php',
        'db2f4f727088800639b1a291c9053fe0' => __DIR__ . '/..' . '/pecee/simple-router/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Simcify\\' => 8,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
            'PhpDocReader\\' => 13,
            'Pecee\\' => 6,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'I' => 
        array (
            'Invoker\\' => 8,
            'Interop\\Container\\' => 18,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
            'Gumlet\\' => 7,
            'Gerardojbaez\\Money\\' => 19,
        ),
        'E' => 
        array (
            'EasyCSRF\\' => 9,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
            'DotEnvWriter\\' => 13,
            'DI\\' => 3,
        ),
        'A' => 
        array (
            'AfricasTalking\\SDK\\Tests\\' => 25,
            'AfricasTalking\\SDK\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Simcify\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PhpDocReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader',
        ),
        'Pecee\\' => 
        array (
            0 => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Invoker\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/invoker/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Gumlet\\' => 
        array (
            0 => __DIR__ . '/..' . '/gumlet/php-image-resize/lib',
        ),
        'Gerardojbaez\\Money\\' => 
        array (
            0 => __DIR__ . '/..' . '/gerardojbaez/money/src',
        ),
        'EasyCSRF\\' => 
        array (
            0 => __DIR__ . '/..' . '/gilbitron/easycsrf/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'DotEnvWriter\\' => 
        array (
            0 => __DIR__ . '/..' . '/oohology/dotenvwriter/src',
        ),
        'DI\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/php-di/src/DI',
        ),
        'AfricasTalking\\SDK\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/africastalking/africastalking/tests',
        ),
        'AfricasTalking\\SDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/africastalking/africastalking/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Suin' => 
            array (
                0 => __DIR__ . '/..' . '/suin/php-image-resizer/Source',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9022d1fece14a12eec627e4f058aabca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9022d1fece14a12eec627e4f058aabca::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9022d1fece14a12eec627e4f058aabca::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
