<?php
/**
 * GoogleTagManagerBody snippet for GoogleTagManager extra
 *
 * Copyright 2016 by StuntRocket hello@stuntrocket.co
 * Created on 10-10-2016
 *
 * GoogleTagManager is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * GoogleTagManager is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * GoogleTagManager; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package googletagmanager
 */

/**
 * Description
 * -----------
 * Goes inside body tag
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package googletagmanager
 **/
 $gtm_noscript = "";

 $ctx = $modx->context->get('key');

 $excludedContexts = $modx->getOption('google.gtm.exclude.contexts');
 if(!empty($excludedContexts)) {
   $excludedContexts = explode(',', $excludedContexts);
   if (in_array($ctx , $excludedContexts)) {
     return $gtm_noscript;
   }
 }

 $google_gtmid = $modx->getOption('google.gtmid');

 if(!empty($google_gtmid)) {

   $chunk_data = array('gtmid' => $google_gtmid);
   $gtm_noscript = $modx->getChunk('GTMBody', $chunk_data);
 }

 return $gtm_noscript;
