<?php

/**
 * @file
 * Glue code for implementing the WebhookReceiver.
 */

use Octis\Webhookreceiver\WebhookReceiverWorker;

// Autoloading.
require __DIR__ . '/../vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Creating the WebhookReceiverWorker point.
$webhookReceiver = new WebhookReceiverWorker('../example_repos_settings.yml');
//$webhookReceiver->setLogger($logger);
$webhookReceiver->createApiPoint();
