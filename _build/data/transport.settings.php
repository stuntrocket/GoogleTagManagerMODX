<?php
/**
 * systemSettings transport file for GoogleTagManager extra
 *
 * Copyright 2016 by StuntRocket hello@stuntrocket.co
 * Created on 10-10-2016
 *
 * @package googletagmanager
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $systemSettings */


$systemSettings = array();

$systemSettings[1] = $modx->newObject('modSystemSetting');
$systemSettings[1]->fromArray(array (
  'key' => 'google.gtm.exclude.contexts',
  'value' => '',
  'xtype' => 'textfield',
  'namespace' => 'googletagmanager',
  'area' => 'area1',
  'name' => 'GoogleTagManager Exclude Contexts',
  'description' => 'Exclude Contexts from Google Tag Manager (comma separated)',
), '', true, true);
$systemSettings[2] = $modx->newObject('modSystemSetting');
$systemSettings[2]->fromArray(array (
  'key' => 'google.gtmid',
  'value' => '',
  'xtype' => 'textfield',
  'namespace' => 'googletagmanager',
  'area' => 'area1',
  'name' => 'GoogleTagManager GTM ID',
  'description' => 'GTM ID From Google Tag Container Dashboard (GTM-XXXXXX)',
), '', true, true);
return $systemSettings;
