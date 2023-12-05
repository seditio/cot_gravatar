<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=users.profile.tags
Tags=users.profile.tpl:{USERS_PROFILE_GRAVATAR}
Order=10
[END_COT_EXT]
==================== */

/**
 * Gravatar Plugin
 *
 * @version 1.02
 * @author Seditio.by
 * @copyright Seditio.by (c) 2011-2012
 */

defined('COT_CODE') or die("Wrong URL.");

require_once cot_langfile('gravatar', 'plug');

$t->assign([
	"USERS_PROFILE_GRAVATAR" => cot_rc_link(cot_url('users', 'm=profile&a=gravatar&x=' . $sys['xk']), $L['gravatar_profile_title'], array('title' => $L['gravatar_profile_desc'])),
]);
