<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerR99vc8a\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerR99vc8a/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerR99vc8a.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerR99vc8a\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerR99vc8a\appDevDebugProjectContainer(array(
    'container.build_hash' => 'R99vc8a',
    'container.build_id' => '738a8991',
    'container.build_time' => 1541326488,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerR99vc8a');
