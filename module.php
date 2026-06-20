<?php

/**
 * Birthday-reminders module for webtrees 2.x.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\Module;

require_once __DIR__ . '/RemindersModule.php';

// This script must return an object that implements ModuleCustomInterface.
return new RemindersModule();
