<?php
/*---------------------------------------------------------------------------
* @Module Name: Forum
* @Description: Forum for LiveStreet
* @Version: 1.0
* @Author: Chiffa
* @LiveStreet Version: 1.0
* @File Name: english.php
* @License: CC BY-NC, http://creativecommons.org/licenses/by-nc/3.0/
*----------------------------------------------------------------------------
*/

return array(
	'forum' => 'Forum',
	'forums' => 'Forums',

	'button_edit' => 'Edit',
	'button_delete' => 'Delete',

	'in_progress' => 'In development',
	'notice' => 'You can just talk',

	'header_last_post' => 'Last post',
	'header_answers' => 'Replies',
	'header_topics' => 'Topics',
	'header_views' => 'Views',
	'header_author' => 'Author',

	'clear' => 'Forum not found',
	'empty' => 'Not found any topic',
	'on_page' => 'To page',
	'and' => 'and',

	'stats' => 'Stats',
	'stats_visitors' => 'Who is online',
	'stats_birthday' => 'Birthdays',
	'stats_birthday_notice' => '',
	'stats_post_count' => 'Posts',
	'stats_topic_count' => 'Topics',
	'stats_user_count' => 'Users',
	'stats_user_last' => 'Last user',

	'categories' => 'Categories',

	'create' => 'Make a forum',
	'create_ok' => 'Forum has been successfully created',
	'create_warning' => 'Before you create a forum, create at least one category',
	'create_block_main' => 'Basic configuration',
	'create_block_redirect' => 'Forwarding settings',
	'create_title' => 'Forum name',
	'create_url' => 'Forum URL',
	'create_url_note' => 'A short address to which the forum will be available (optional)',
	'create_url_error' => 'Forum URL must be between %%min%% and %%max%% characters and only in the Latin alphabet + numbers and symbols "-", "_"',
	'create_url_error_badword' => 'Forum URL must be different from:',
	'create_url_error_used' => 'Forum with the URL already exists',
	'create_sort' => 'Sorting',
	'create_sort_notice' => 'Sets the sorting when displaying',
	'create_description' => 'Description',
	'create_parent' => 'Select the parent forum or category',
	'create_type' => 'State',
	'create_type_notice' => '',
	'create_type_active' => 'Active',
	'create_type_archive' => 'Read-only Archive',
	'create_sub_can_post' => 'Make a forum category?',
	'create_sub_can_post_notice' => 'If you select <b>"Yes"</b>, then the forum will be a category, it will be allowed to open and publish messages, respectively, all of these settings will have no power.<br><br>If you select <b>"No"</b>, the forum will be normal, it will be allowed to open by publication of the messages (if enabled).',
	'create_quick_reply' => 'Add a quick reply?',
	'create_quick_reply_notice' => '',
	'create_rating' => 'Rating restrictions',
	'create_rating_notice' => 'Rating, needed by user to post to this forum',
	'create_redirect_url' => 'URL address to move',
	'create_redirect_url_notice' => '',
	'create_redirect_on' => 'Switch forum to move?',
	'create_redirect_on_notice' => 'If you select <b>"Yes"</b> the following blocks of settings will have no effect, as a forum will be only a reference. Already existing topics within the forum will not be available!',
	'create_submit' => 'Create',

	'create_forum' => 'Make a forum',
	'create_category' => 'Create a category',

	'edit' => 'Edit forum',
	'edit_ok' => 'The changes are saved',
	'edit_submit' => 'Save',

	'edit_forum' => 'Edit forum',
	'edit_category' => 'Edit category',

	'delete' => 'Delete the forum',
	'delete_confirm' => 'Delete the forum %%title%%',
	'delete_move_items' => 'Move all the threads and posts in',
	'delete_move_items_note' => '',
	'delete_move_items_error_category' => 'You can not move topics and posts in the category of',
	'delete_move_items_error_self' => 'You can not move topics and messages in the deleted forum!',
	'delete_move_items_error_descendants' => '',
	'delete_move_childrens' => 'Move all the subforums in',
	'delete_move_childrens_note' => '',
	'delete_move_childrens_error_self' => 'You can not move to delete a forum subforums!',
	'delete_move_childrens_error_descendants' => '',
	'delete_move_error' => '',
	'delete_success' => 'Forum deleted',

	'delete_forum' => 'Delete the forum',
	'delete_category' => 'Delete a category',


	'topic' => 'Tpic',
	'topic_close' => 'Close this topic',
	'topic_open' => 'Open this topic',
	'topic_delete' => 'Delete this topic',
	'topic_delete_warning' => 'When you delete a theme, and will remove all of its messages. Continue only if you really want to delete this topic. No more warnings will not be.',
	'topic_pin' => '"Pinned" this topic',
	'topic_unpin' => '"Unpinned" this topic',
	'topic_answers' => 'Replies to this topic',

	'topics' => 'Topics',
	'topics_forum' => 'Forum topics',
	'topics_pinned' => 'Important topics',
	'topic_pinned' => 'Pinned',
	'topic_closed' => 'Locked',
	'topic_mod_option' => 'Options moderator',
	'topic_move' => 'Move topic',
	'topic_move_for' => 'Move topic to forum',
	'topic_move_error_self' => 'This theme is so chosen forum!',
	'topic_move_error_category' => 'You can not move the topic into the category of',
	'topic_post_count' => 'Posts in topic',
	'topic_acl' => 'You may not post new threads',
	'topic_time_limit' => 'You may not post new threads too often',

	'new_topic' => 'New topic',
	'new_topic_for' => 'Creating a theme of',
	'new_topic_title' => 'Topic title',
	'new_topic_title_notice' => '',
	'new_topic_title_error' => 'The title should be between %%min%% and %%max%% characters',
	'new_topic_description' => 'Description',
	'new_topic_description_notice' => 'optional',
	'new_topic_description_error' => 'Description of the topic should not exceed 100 characters',
	'new_topic_text_error' => 'The text should be between %%min%% to %%max%% characters',
	'new_topic_not_allow' => 'You can not start a new topic',

	'new_topic_pin' => 'Pin',
	'new_topic_close' => 'Close',

	'topic_edit' => 'Editing topic',
	'topic_edit_not_allow' => 'No access to this action',


	'post' => 'Post',
	'posts' => 'Posts',
	'post_anchor_promt' => 'Copy a direct link to this message, to save the clipboard',
	'post_last' => 'Last post',
	'post_create_title' => 'Post subject',
	'post_create_title_notice' => 'optional',
	'post_create_title_error' => 'Name of message should be between 2 and 100 characters',
	'post_create_text' => 'Text',
	'post_create_text_notice' => 'Available in html-tags',
	'post_create_text_error_unique' => 'You have already written the message with the content',
	'post_by' => 'from',//!!
	'post_edit' => 'Edit reply',
	'post_edit_for' => 'Edit reply in %%topic%%',
	'post_edit_reason' => 'Reason for edit',
	'post_edit_reason_notice' => 'Required field',
	'post_edit_not_allow' => 'No access to this action',
	'post_editing' => 'Last edit',
	'post_delete_not_allow' => 'No access to this action',

	'reply' => 'Reply',
	'reply_for' => 'Reply in %%topic%%',
	'reply_notallow' => 'Locked',
	'reply_not_allow' => 'You can not write in this topic',
	'reply_time_limit' => 'You can send messages too often',
	'fast_reply' => 'Quick Reply',

	'redirect_hits' => 'Jump',

	'subforums' => 'Subforums',
	'themes_list' => 'List of topics',

	'not_reading' => 'New topics',

	'acp' => 'Management forum',
	'acp_main' => 'Control center',
	'acp_forums_control' => 'Manage forums',
	'acp_forums_moders' => 'Office of the moderators',

	'sort_up' => 'move Up',
	'sort_down' => 'move Down',
	'sort_submit_ok' => 'Sort changed',

	'plugin_about' => 'About the plugin',
	'plugin_about_text' => '<strong>CC BY-NC (Атрибуция — Некоммерческое использование)</strong><br>Эта лицензия позволяет другим изменять, поправлять и брать за основу ваше произведение некоммерческим образом и хотя их новые произведения должны указывать вас в качестве автора и быть некоммерческими и они не должны лицензировать их производные произведения на тех же условиях.<br><a href="http://creativecommons.org/licenses/by-nc/3.0/" target="_blank"><img src="http://i.creativecommons.org/l/by-nc/3.0/88x31.png" title="ARS Mod License" width="88" height="31"></a><br><a href="http://creativecommons.org/licenses/by-nc/3.0" target="_blank">Смотреть общее краткое описание лицензии</a><br><a href="http://creativecommons.org/licenses/by-nc/3.0/legalcode" target="_blank">Смотреть юридический текст</a>',

	'welcome' => '<a href="%%root%%admin/forums/new?type=category">Create first forum</a>',

	'topics_declension' => 'Topic;Topics;Topics',
	'posts_declension' => 'Post;Posts;Posts',
	'redirect_hits_declension' => 'Jump;Jumps;Jumps',
	'views_declension' => 'View;Views;Views',
	'users_declension' => 'User;Users;Users',
	'guest_declension' => 'Guest;Gests;Gests',

	'user_menu_publication_topics' => 'Topics on the forum',
	'user_menu_publication_posts' => 'Forum posts',

	'event_type_add_topic' => 'Add a topic to the forum',
	'event_type_add_post' => 'Add a message to the forum',

	'event_add_topic' => 'Added new topic on the forum',
	'event_add_post' => 'Added a new post on the forum',

	'subscribe_forum' => 'Subscribe to new themes',
	'subscribe_topic' => 'Subscribe to new posts',

	'notify_subject_new_topic' => 'New topic on the forum',
	'notify_subject_new_post' => 'New reply to topic',
);

?>