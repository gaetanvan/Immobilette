<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerN1V41FK\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerN1V41FK/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerN1V41FK.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerN1V41FK\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerN1V41FK\App_KernelProdContainer([
    'container.build_hash' => 'N1V41FK',
    'container.build_id' => 'b9194352',
    'container.build_time' => 1673955683,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerN1V41FK');
