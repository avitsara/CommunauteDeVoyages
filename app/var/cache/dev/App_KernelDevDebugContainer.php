<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLSCkY9g\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLSCkY9g/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLSCkY9g.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLSCkY9g\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLSCkY9g\App_KernelDevDebugContainer([
    'container.build_hash' => 'LSCkY9g',
    'container.build_id' => 'b5953a87',
    'container.build_time' => 1647256019,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLSCkY9g');
