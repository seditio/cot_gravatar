<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=users.profile.first
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

if ($a == 'gravatar') {
	cot_check_xg();
	$avatar = 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($usr['profile']['user_email']))) . '?size=' . $cfg['plugin']['gravatar']['size'];
	$db->update($db_users, array('user_avatar' => $avatar), "user_id = {$usr['id']}");
	cot_redirect(cot_url('users', "m=profile", '#avatar', true));
}
