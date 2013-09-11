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

// Load the tooltip bootstrap script.
JHtml::_('bootstrap.tooltip', '.list-social a', array('placement' => 'top'));
?>
<ul class="list-unstyled list-social<?php echo $moduleclass_sfx; ?>">
	<?php if ($twitterUsername): ?>
		<li><a href="https://twitter.com/<?php echo $twitterUsername; ?>" title="<?php echo JText::_('MOD_SOCIAL_MESSAGE_TWITTER'); ?>" target="_blank"><i class="icon-twitter"></i></a></li>
	<?php endif; ?>
	<?php if ($facebookUsername): ?>
		<li><a href="https://www.facebook.com/<?php echo $facebookUsername; ?>" title="<?php echo JText::_('MOD_SOCIAL_MESSAGE_FACEBOOK'); ?>" target="_blank"><i class="icon-facebook"></i></a></li>
	<?php endif; ?>
	<?php if ($rssUrl): ?>
		<li><a href="<?php echo $rssUrl; ?>" title="<?php echo JText::_('MOD_SOCIAL_MESSAGE_RSS'); ?>" target="_blank"><i class="icon-rss"></i></a></li>
	<?php endif; ?>
</ul>