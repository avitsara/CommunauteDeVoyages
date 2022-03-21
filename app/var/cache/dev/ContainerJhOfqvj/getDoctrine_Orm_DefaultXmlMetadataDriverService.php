<?php

namespace ContainerJhOfqvj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultXmlMetadataDriverService extends App_KernelDevContainer
{
    /*
     * Gets the private 'doctrine.orm.default_xml_metadata_driver' shared service.
     *
     * @return \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['doctrine.orm.default_xml_metadata_driver'] = $instance = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver([(\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/config/doctrine') => 'Vich\\UploaderBundle\\Entity']);

        $instance->setGlobalBasename('mapping');

        return $instance;
    }
}
