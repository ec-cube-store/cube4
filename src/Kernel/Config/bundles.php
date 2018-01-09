<?php
return [
//    symfony/framework-bundle
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
//    sensio/framework-extra-bundle
    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle::class => ['all' => true],
//    symfony/templating   symfony/twig-bundle
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],

//    doctrine/doctrine-bundle doctrine/orm
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],

//    Doctrine\Bundle\DoctrineCacheBundle\DoctrineCacheBundle::class => ['all' => true],

//    Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle::class => ['all' => true],

//    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],

    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
];