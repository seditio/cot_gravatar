<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=usertags.main
[END_COT_EXT]
==================== */

defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('userimages', 'plug');

if (empty($user_data['user_avatar']) && !empty($user_data['user_email']) && $cfg['plugin']['gravatar']['empty']) {
	$av_hash = md5(mb_strtolower($user_data['user_email']));
	$temp_array['AVATAR'] = cot_userimages_build('http://www.gravatar.com/avatar/' . $av_hash . '?size=' . $cfg['plugin']['gravatar']['size'], 'avatar');
}
