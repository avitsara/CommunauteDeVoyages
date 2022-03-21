<?php

namespace ContainerJhOfqvj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelDevContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ContactController::contact' => ['privates', '.service_locator.jrLxc7I', 'get_ServiceLocator_JrLxc7IService', true],
            'App\\Controller\\CrudTripController::delete' => ['privates', '.service_locator.pJlD2Ny', 'get_ServiceLocator_PJlD2NyService', true],
            'App\\Controller\\CrudTripController::edit' => ['privates', '.service_locator.pJlD2Ny', 'get_ServiceLocator_PJlD2NyService', true],
            'App\\Controller\\CrudTripController::index' => ['privates', '.service_locator.H2TsYNw', 'get_ServiceLocator_H2TsYNwService', true],
            'App\\Controller\\CrudTripController::new' => ['privates', '.service_locator.H2TsYNw', 'get_ServiceLocator_H2TsYNwService', true],
            'App\\Controller\\CrudTripController::show' => ['privates', '.service_locator.YQY7QL9', 'get_ServiceLocator_YQY7QL9Service', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.csdigcb', 'get_ServiceLocator_CsdigcbService', true],
            'App\\Controller\\LoginFormController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.spC.Z_T', 'get_ServiceLocator_SpC_ZTService', true],
            'App\\Controller\\TripController::create' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TripSearchController::searchCar' => ['privates', '.service_locator.Odt2NUI', 'get_ServiceLocator_Odt2NUIService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\ContactController:contact' => ['privates', '.service_locator.jrLxc7I', 'get_ServiceLocator_JrLxc7IService', true],
            'App\\Controller\\CrudTripController:delete' => ['privates', '.service_locator.pJlD2Ny', 'get_ServiceLocator_PJlD2NyService', true],
            'App\\Controller\\CrudTripController:edit' => ['privates', '.service_locator.pJlD2Ny', 'get_ServiceLocator_PJlD2NyService', true],
            'App\\Controller\\CrudTripController:index' => ['privates', '.service_locator.H2TsYNw', 'get_ServiceLocator_H2TsYNwService', true],
            'App\\Controller\\CrudTripController:new' => ['privates', '.service_locator.H2TsYNw', 'get_ServiceLocator_H2TsYNwService', true],
            'App\\Controller\\CrudTripController:show' => ['privates', '.service_locator.YQY7QL9', 'get_ServiceLocator_YQY7QL9Service', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.csdigcb', 'get_ServiceLocator_CsdigcbService', true],
            'App\\Controller\\LoginFormController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.spC.Z_T', 'get_ServiceLocator_SpC_ZTService', true],
            'App\\Controller\\TripController:create' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TripSearchController:searchCar' => ['privates', '.service_locator.Odt2NUI', 'get_ServiceLocator_Odt2NUIService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\ContactController::contact' => '?',
            'App\\Controller\\CrudTripController::delete' => '?',
            'App\\Controller\\CrudTripController::edit' => '?',
            'App\\Controller\\CrudTripController::index' => '?',
            'App\\Controller\\CrudTripController::new' => '?',
            'App\\Controller\\CrudTripController::show' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\LoginFormController::login' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\TripController::create' => '?',
            'App\\Controller\\TripSearchController::searchCar' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ContactController:contact' => '?',
            'App\\Controller\\CrudTripController:delete' => '?',
            'App\\Controller\\CrudTripController:edit' => '?',
            'App\\Controller\\CrudTripController:index' => '?',
            'App\\Controller\\CrudTripController:new' => '?',
            'App\\Controller\\CrudTripController:show' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\LoginFormController:login' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\TripController:create' => '?',
            'App\\Controller\\TripSearchController:searchCar' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]));
    }
}
