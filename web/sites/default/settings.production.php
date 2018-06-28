<?php

// @codingStandardsIgnoreFile

/**
 * @file
 * Production area specific file. Include in settings.php of dev area
 */
$config ['config_split.config_split.production'] ['status'] = TRUE;
$config['config_split.config_split.excluded']['status'] = true;

//  Environment Indicator Related Settings
$config['environment_indicator.indicator']['name'] = "Production";
$config['environment_indicator.indicator']['bg_color'] = "red";
$config['environment_indicator.indicator']['fg_color'] = "yellow";