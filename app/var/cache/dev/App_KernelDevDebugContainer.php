<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDSXsvlT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDSXsvlT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDSXsvlT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDSXsvlT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDSXsvlT\App_KernelDevDebugContainer([
    'container.build_hash' => 'DSXsvlT',
    'container.build_id' => '18791183',
    'container.build_time' => 1646256266,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDSXsvlT');
