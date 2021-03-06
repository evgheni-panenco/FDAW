<?php

namespace Container8Ki0HvV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TAEWvMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TAEWvM_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TAEWvM_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\SmartphoneController::delete' => ['privates', '.service_locator.nQVyWLG', 'get_ServiceLocator_NQVyWLGService', true],
            'App\\Controller\\SmartphoneController::edit' => ['privates', '.service_locator.nQVyWLG', 'get_ServiceLocator_NQVyWLGService', true],
            'App\\Controller\\SmartphoneController::findAllByName' => ['privates', '.service_locator.R.CXpkU', 'get_ServiceLocator_R_CXpkUService', true],
            'App\\Controller\\SmartphoneController::index' => ['privates', '.service_locator.R.CXpkU', 'get_ServiceLocator_R_CXpkUService', true],
            'App\\Controller\\SmartphoneController::show' => ['privates', '.service_locator.nQVyWLG', 'get_ServiceLocator_NQVyWLGService', true],
            'App\\Controller\\TypeController::delete' => ['privates', '.service_locator.AVQA72y', 'get_ServiceLocator_AVQA72yService', true],
            'App\\Controller\\TypeController::edit' => ['privates', '.service_locator.AVQA72y', 'get_ServiceLocator_AVQA72yService', true],
            'App\\Controller\\TypeController::index' => ['privates', '.service_locator.JFDFVbI', 'get_ServiceLocator_JFDFVbIService', true],
            'App\\Controller\\TypeController::show' => ['privates', '.service_locator.AVQA72y', 'get_ServiceLocator_AVQA72yService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\SmartphoneController:delete' => ['privates', '.service_locator.nQVyWLG', 'get_ServiceLocator_NQVyWLGService', true],
            'App\\Controller\\SmartphoneController:edit' => ['privates', '.service_locator.nQVyWLG', 'get_ServiceLocator_NQVyWLGService', true],
            'App\\Controller\\SmartphoneController:findAllByName' => ['privates', '.service_locator.R.CXpkU', 'get_ServiceLocator_R_CXpkUService', true],
            'App\\Controller\\SmartphoneController:index' => ['privates', '.service_locator.R.CXpkU', 'get_ServiceLocator_R_CXpkUService', true],
            'App\\Controller\\SmartphoneController:show' => ['privates', '.service_locator.nQVyWLG', 'get_ServiceLocator_NQVyWLGService', true],
            'App\\Controller\\TypeController:delete' => ['privates', '.service_locator.AVQA72y', 'get_ServiceLocator_AVQA72yService', true],
            'App\\Controller\\TypeController:edit' => ['privates', '.service_locator.AVQA72y', 'get_ServiceLocator_AVQA72yService', true],
            'App\\Controller\\TypeController:index' => ['privates', '.service_locator.JFDFVbI', 'get_ServiceLocator_JFDFVbIService', true],
            'App\\Controller\\TypeController:show' => ['privates', '.service_locator.AVQA72y', 'get_ServiceLocator_AVQA72yService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\SmartphoneController::delete' => '?',
            'App\\Controller\\SmartphoneController::edit' => '?',
            'App\\Controller\\SmartphoneController::findAllByName' => '?',
            'App\\Controller\\SmartphoneController::index' => '?',
            'App\\Controller\\SmartphoneController::show' => '?',
            'App\\Controller\\TypeController::delete' => '?',
            'App\\Controller\\TypeController::edit' => '?',
            'App\\Controller\\TypeController::index' => '?',
            'App\\Controller\\TypeController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\SmartphoneController:delete' => '?',
            'App\\Controller\\SmartphoneController:edit' => '?',
            'App\\Controller\\SmartphoneController:findAllByName' => '?',
            'App\\Controller\\SmartphoneController:index' => '?',
            'App\\Controller\\SmartphoneController:show' => '?',
            'App\\Controller\\TypeController:delete' => '?',
            'App\\Controller\\TypeController:edit' => '?',
            'App\\Controller\\TypeController:index' => '?',
            'App\\Controller\\TypeController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
