<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRpxxdtK\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRpxxdtK/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRpxxdtK.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRpxxdtK\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRpxxdtK\App_KernelDevDebugContainer([
    'container.build_hash' => 'RpxxdtK',
    'container.build_id' => 'ce77c5f5',
    'container.build_time' => 1604357422,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRpxxdtK');
