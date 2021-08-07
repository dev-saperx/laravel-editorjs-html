<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbcfa6c1f1327126ea55e972ede08ace0
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
    );

    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EditorJS\\' => 9,
        ),
        'A' => 
        array (
            'Ankitech\\LaravelEditorjsHtml\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EditorJS\\' => 
        array (
            0 => __DIR__ . '/..' . '/codex-team/editor.js/EditorJS',
        ),
        'Ankitech\\LaravelEditorjsHtml\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbcfa6c1f1327126ea55e972ede08ace0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbcfa6c1f1327126ea55e972ede08ace0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitbcfa6c1f1327126ea55e972ede08ace0::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitbcfa6c1f1327126ea55e972ede08ace0::$classMap;

        }, null, ClassLoader::class);
    }
}
