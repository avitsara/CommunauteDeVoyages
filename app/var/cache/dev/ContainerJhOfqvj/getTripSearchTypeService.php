<?php

namespace ContainerJhOfqvj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTripSearchTypeService extends App_KernelDevContainer
{
    /*
     * Gets the private 'App\Form\TripSearchType' shared autowired service.
     *
     * @return \App\Form\TripSearchType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\TripSearchType'] = new \App\Form\TripSearchType();
    }
}
