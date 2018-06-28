<?php

// @codingStandardsIgnoreFile

/**
 * @file
 * Production area specific file. Include in settings.php of dev area
 */
$config['config_split.config_split.stage']['status'] = TRUE;

//  Environment Indicator Related Settings
$config['environment_indicator.indicator']['name'] = "Stage";
$config['environment_indicator.indicator']['bg_color'] = "blue";
$config['environment_indicator.indicator']['fg_color'] = "white";
$config['stage_file_proxy.settings']['origin'] = "http://yourproductionwebsite.com";
