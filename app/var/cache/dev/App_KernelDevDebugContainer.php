<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9FygVC7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9FygVC7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9FygVC7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9FygVC7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9FygVC7\App_KernelDevDebugContainer([
    'container.build_hash' => '9FygVC7',
    'container.build_id' => 'ede12fc5',
    'container.build_time' => 1646948313,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9FygVC7');
