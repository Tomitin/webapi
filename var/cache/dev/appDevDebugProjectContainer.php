<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container06p4tdi\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container06p4tdi/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container06p4tdi.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container06p4tdi\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container06p4tdi\appDevDebugProjectContainer(array(
    'container.build_hash' => '06p4tdi',
    'container.build_id' => 'd5490a3d',
    'container.build_time' => 1542652048,
), __DIR__.\DIRECTORY_SEPARATOR.'Container06p4tdi');
