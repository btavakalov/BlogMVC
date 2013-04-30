<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'BlogMVC\Controller\Index' => 'BlogMVC\Controller\IndexController',
        ),
    ),


    'router' => array(
        'routes' => array(

        ),
    ),


    'view_manager' => array(
        'template_path_stack' => array(
            'blogmvc' => __DIR__ . '/../view',
        ),
    ),
);