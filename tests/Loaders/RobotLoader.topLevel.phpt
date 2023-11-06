<?php

/**
 * Test: Nette\Loaders\RobotLoader top level.
 */

declare(strict_types=1);

use Nette\Loaders\RobotLoader;
use Tester\Assert;


require __DIR__ . '/../bootstrap.php';


$loader = new RobotLoader;
$loader->setTempDirectory(getTempDir());
$loader->topLevelOnly = false;
$loader->addDirectory(__DIR__ . '/files');
$loader->register();

Assert::true(class_exists('ConditionalClass'));   // files/conditional.class.php
