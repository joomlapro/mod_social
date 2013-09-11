<?php
/**
 * @package     Social
 * @subpackage  mod_social
 *
 * @author      Bruno Batista <bruno@atomtech.com.br>
 * @copyright   Copyright (C) 2013 AtomTech IT Services. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

// Initialise variables.
$moduleclass_sfx  = htmlspecialchars($params->get('moduleclass_sfx'));
$twitterUsername  = htmlspecialchars($params->get('twitter_username'));
$facebookUsername = htmlspecialchars($params->get('facebook_username'));
$rssUrl           = htmlspecialchars($params->get('rss_url', JRoute::_('&format=feed&type=rss', false)));

// Render the module.
require JModuleHelper::getLayoutPath('mod_social', $params->get('layout', 'default'));
