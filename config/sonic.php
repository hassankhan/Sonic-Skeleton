<?php

return array(

    /* Set the application environment */
    'sonic.environment'           => 'dev',

    /* Path to content directory */
    'sonic.content_dir'           => 'content',

    /* Path to plugins directory */
    'sonic.plugins_dir'           => 'plugins',

    /* Path to templates directory */
    'sonic.templates_dir'         => 'templates',

    /* Set the default template to render to */
    'sonic.default_template'      => 'base.twig',

    /* Set the default template to render lists of posts to */
    'sonic.default_list_template' => 'list.twig',

    /* Include only files with these extensions */
    'sonic.content_ext'           => array('md', 'markdown'),

    /* Enable or disable plugins */
    'sonic.plugins_enabled'       => true,

    /* Twig options */
    'twig'                        => array(

        'charset'           => 'utf-8',

        'cache'             => 'cache/twig',

        'strict_variables'  => false,

        'autoescape'        => false,

        'auto_reload'       => true,

        // 'debug'             => true
    )

);
