<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRPCHms0\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRPCHms0/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRPCHms0.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRPCHms0\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRPCHms0\App_KernelDevDebugContainer([
    'container.build_hash' => 'RPCHms0',
    'container.build_id' => '93546b9c',
    'container.build_time' => 1605169922,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRPCHms0');
