<?php
/**
 * snippets transport file for GoogleTagManager extra
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
/* @var xPDOObject[] $snippets */


$snippets = array();

$snippets[1] = $modx->newObject('modSnippet');
$snippets[1]->fromArray(array (
  'id' => 1,
  'description' => 'Goes inside head tag',
  'name' => 'GoogleTagManagerHead',
), '', true, true);
$snippets[1]->setContent(file_get_contents($sources['source_core'] . '/elements/snippets/googletagmanagerhead.snippet.php'));

$snippets[2] = $modx->newObject('modSnippet');
$snippets[2]->fromArray(array (
  'id' => 2,
  'description' => 'Goes inside body tag',
  'name' => 'GoogleTagManagerBody',
), '', true, true);
$snippets[2]->setContent(file_get_contents($sources['source_core'] . '/elements/snippets/googletagmanagerbody.snippet.php'));

return $snippets;
