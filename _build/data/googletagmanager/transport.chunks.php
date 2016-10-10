<?php
/**
 * chunks transport file for GoogleTagManager extra
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
/* @var xPDOObject[] $chunks */


$chunks = array();

$chunks[1] = $modx->newObject('modChunk');
$chunks[1]->fromArray(array (
  'id' => 1,
  'description' => 'Chunk used inside head tag',
  'name' => 'GTMHead',
), '', true, true);
$chunks[1]->setContent(file_get_contents($sources['source_core'] . '/elements/chunks/gtmhead.chunk.html'));

$chunks[2] = $modx->newObject('modChunk');
$chunks[2]->fromArray(array (
  'id' => 2,
  'description' => 'Chunk used inside body tag',
  'name' => 'GTMBody',
), '', true, true);
$chunks[2]->setContent(file_get_contents($sources['source_core'] . '/elements/chunks/gtmbody.chunk.html'));

return $chunks;
