<?php

/*
	Plugin Name: Online User Count with Bangla Language
	Plugin URI: https://github.com/oXamiloo/q2a-online-user-count
	Plugin Description: Q2A Online User And Visit Count Widget
	Plugin Version: 2.0
	Plugin Date: 2013-12-16
	Plugin Author: Ali Sayahiyan (Bangla Language by Jamil)
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.6
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

qa_register_plugin_phrases('show-online-user-count-lang.php', 'show_online_user_count_lang');
qa_register_plugin_module('page', 'show-online-user-count-page.php', 'show_online_user_count_page', 'Show online user count');
qa_register_plugin_module('widget', 'show-online-user-count-widget.php', 'show_online_user_count_widget', 'Show online user count');

?>
