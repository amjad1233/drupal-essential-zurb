<?php

// @codingStandardsIgnoreFile

/**
 * @file
 * Production area specific file. Include in settings.php of dev area
 */

$config['config_split.config_split.dev']['status'] = TRUE;

$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

//  Environment Indicator Related Settings
$config['environment_indicator.indicator']['name'] = "Developement";
$config['environment_indicator.indicator']['bg_color'] = "green";
$config['environment_indicator.indicator']['fg_color'] = "white";
$config['stage_file_proxy.settings']['origin'] = "http://nsla.epublisher.com.au";
