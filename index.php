<?php

use Symfony\Component\Form\FormFactory;
use SymfonyFormCloneTest\Form\ParentType;
use SymfonyFormCloneTest\Kernel;

require __DIR__ . '/vendor/autoload.php';

$kernel = new Kernel('dev', false);
$kernel->boot();

function benchmark(FormFactory $formFactory, array $formOptions, int $childCount) {
    $formData = [
        'child' => []
    ];

    for ($i = 0; $i < $childCount; $i++) {
        $formData['child'][] = [
            'integer1' => $i,
            'integer2' => $i,
            'integer3' => $i,
            'integer4' => $i,
            'integer5' => $i,
            'integer6' => $i,
            'integer7' => $i,
            'integer8' => $i,
            'integer9' => $i,
            'integer10' => $i
        ];
    }

    $form = $formFactory->create(ParentType::class, null, $formOptions);
    $memory = memory_get_usage(true);
    $time = microtime(true);

    $form->submit($formData);

    $afterTime = microtime(true);
    $afterMemory = memory_get_usage(true);

    return ['duration' => $afterTime - $time, 'memory_diff' => $afterMemory - $memory, 'memory_total' => $afterMemory, 'form' => $form];
}

/** @var FormFactory $formFactory */
$formFactory = $kernel->getContainer()->get('form.factory');
$result = benchmark($formFactory, ['clone_entry_instance' => true], 5000);

dump('Time (sec): ' . $result['duration']);
dump('After memory usage (MB): ' . ($result['memory_total'] / 1024 / 1024));
dump('Memory diff (MB): ' . ($result['memory_diff'] / 1024 / 1024));
