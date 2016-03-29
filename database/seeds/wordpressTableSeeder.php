<?php

class wordpressTableSeeder extends Seeder {
    public function run()
    {
        
        DB::table('lw_comments')->insert(array(
            
            array(
                'comment_ID' => 1,
                'comment_post_ID' => 1,
                'comment_author' => 'Mr WordPress',
                'comment_author_email' => NULL,
                'comment_author_url' => 'https://wordpress.org/',
                'comment_author_IP' => NULL,
                'comment_date' => '2016-03-25 17:05:32',
                'comment_date_gmt' => '2016-03-25 17:05:32',
                'comment_content' => 'Hi, this is a comment.
To delete a comment, just log in and view the post&#039;s comments. There you will have the option to edit or delete them.',
                'comment_karma' => 0,
                'comment_approved' => 1,
                'comment_agent' => NULL,
                'comment_type' => NULL,
                'comment_parent' => 0,
                'user_id' => 0,
            )

        ));
        DB::table('lw_options')->insert(array(
            
            array(
                'option_id' => 1,
                'option_name' => 'siteurl',
                'option_value' => 'http://wlc.app',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 2,
                'option_name' => 'home',
                'option_value' => 'http://wlc.app',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 3,
                'option_name' => 'blogname',
                'option_value' => 'Genesis Site',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 4,
                'option_name' => 'blogdescription',
                'option_value' => 'Just another WordPress site',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 5,
                'option_name' => 'users_can_register',
                'option_value' => 0,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 6,
                'option_name' => 'admin_email',
                'option_value' => 'admin@genesis.com',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 7,
                'option_name' => 'start_of_week',
                'option_value' => 1,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 8,
                'option_name' => 'use_balanceTags',
                'option_value' => 0,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 9,
                'option_name' => 'use_smilies',
                'option_value' => 1,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 10,
                'option_name' => 'require_name_email',
                'option_value' => 1,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 11,
                'option_name' => 'comments_notify',
                'option_value' => 1,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 12,
                'option_name' => 'posts_per_rss',
                'option_value' => 10,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 13,
                'option_name' => 'rss_use_excerpt',
                'option_value' => 0,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 14,
                'option_name' => 'mailserver_url',
                'option_value' => 'mail.example.com',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 15,
                'option_name' => 'mailserver_login',
                'option_value' => 'login@example.com',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 16,
                'option_name' => 'mailserver_pass',
                'option_value' => 'password',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 17,
                'option_name' => 'mailserver_port',
                'option_value' => 110,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 18,
                'option_name' => 'default_category',
                'option_value' => 4,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 19,
                'option_name' => 'default_comment_status',
                'option_value' => 'open',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 20,
                'option_name' => 'default_ping_status',
                'option_value' => 'open',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 21,
                'option_name' => 'default_pingback_flag',
                'option_value' => 1,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 22,
                'option_name' => 'posts_per_page',
                'option_value' => 10,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 23,
                'option_name' => 'date_format',
                'option_value' => 'F j, Y',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 24,
                'option_name' => 'time_format',
                'option_value' => 'g:i a',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 25,
                'option_name' => 'links_updated_date_format',
                'option_value' => 'F j, Y g:i a',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 26,
                'option_name' => 'comment_moderation',
                'option_value' => 0,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 27,
                'option_name' => 'moderation_notify',
                'option_value' => 1,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 28,
                'option_name' => 'permalink_structure',
                'option_value' => NULL,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 29,
                'option_name' => 'hack_file',
                'option_value' => 0,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 30,
                'option_name' => 'blog_charset',
                'option_value' => 'UTF-8',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 31,
                'option_name' => 'moderation_keys',
                'option_value' => NULL,
                'autoload' => 'no',
            ),

            array(
                'option_id' => 32,
                'option_name' => 'active_plugins',
                'option_value' => 'a:2:{i:0;s:25:\"fakerpress/fakerpress.php\";i:1;s:27:\"wp-markdown/wp-markdown.php\";}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 33,
                'option_name' => 'category_base',
                'option_value' => NULL,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 34,
                'option_name' => 'ping_sites',
                'option_value' => 'http://rpc.pingomatic.com/',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 35,
                'option_name' => 'comment_max_links',
                'option_value' => 2,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 36,
                'option_name' => 'gmt_offset',
                'option_value' => 0,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 37,
                'option_name' => 'default_email_category',
                'option_value' => 1,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 38,
                'option_name' => 'recently_edited',
                'option_value' => NULL,
                'autoload' => 'no',
            ),

            array(
                'option_id' => 39,
                'option_name' => 'template',
                'option_value' => 'twentysixteen',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 40,
                'option_name' => 'stylesheet',
                'option_value' => 'twentysixteen',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 41,
                'option_name' => 'comment_whitelist',
                'option_value' => 1,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 42,
                'option_name' => 'blacklist_keys',
                'option_value' => NULL,
                'autoload' => 'no',
            ),

            array(
                'option_id' => 43,
                'option_name' => 'comment_registration',
                'option_value' => 0,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 44,
                'option_name' => 'html_type',
                'option_value' => 'text/html',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 45,
                'option_name' => 'use_trackback',
                'option_value' => 0,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 46,
                'option_name' => 'default_role',
                'option_value' => 'subscriber',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 47,
                'option_name' => 'db_version',
                'option_value' => 35700,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 48,
                'option_name' => 'uploads_use_yearmonth_folders',
                'option_value' => 1,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 49,
                'option_name' => 'upload_path',
                'option_value' => NULL,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 50,
                'option_name' => 'blog_public',
                'option_value' => 1,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 51,
                'option_name' => 'default_link_category',
                'option_value' => 0,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 52,
                'option_name' => 'show_on_front',
                'option_value' => 'posts',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 53,
                'option_name' => 'tag_base',
                'option_value' => NULL,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 54,
                'option_name' => 'show_avatars',
                'option_value' => 1,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 55,
                'option_name' => 'avatar_rating',
                'option_value' => 'G',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 56,
                'option_name' => 'upload_url_path',
                'option_value' => NULL,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 57,
                'option_name' => 'thumbnail_size_w',
                'option_value' => 150,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 58,
                'option_name' => 'thumbnail_size_h',
                'option_value' => 150,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 59,
                'option_name' => 'thumbnail_crop',
                'option_value' => 1,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 60,
                'option_name' => 'medium_size_w',
                'option_value' => 300,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 61,
                'option_name' => 'medium_size_h',
                'option_value' => 300,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 62,
                'option_name' => 'avatar_default',
                'option_value' => 'mystery',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 63,
                'option_name' => 'large_size_w',
                'option_value' => 1024,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 64,
                'option_name' => 'large_size_h',
                'option_value' => 1024,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 65,
                'option_name' => 'image_default_link_type',
                'option_value' => 'none',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 66,
                'option_name' => 'image_default_size',
                'option_value' => NULL,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 67,
                'option_name' => 'image_default_align',
                'option_value' => NULL,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 68,
                'option_name' => 'close_comments_for_old_posts',
                'option_value' => 0,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 69,
                'option_name' => 'close_comments_days_old',
                'option_value' => 14,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 70,
                'option_name' => 'thread_comments',
                'option_value' => 1,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 71,
                'option_name' => 'thread_comments_depth',
                'option_value' => 5,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 72,
                'option_name' => 'page_comments',
                'option_value' => 0,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 73,
                'option_name' => 'comments_per_page',
                'option_value' => 50,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 74,
                'option_name' => 'default_comments_page',
                'option_value' => 'newest',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 75,
                'option_name' => 'comment_order',
                'option_value' => 'asc',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 76,
                'option_name' => 'sticky_posts',
                'option_value' => 'a:0:{}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 77,
                'option_name' => 'widget_categories',
                'option_value' => 'a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 78,
                'option_name' => 'widget_text',
                'option_value' => 'a:0:{}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 79,
                'option_name' => 'widget_rss',
                'option_value' => 'a:0:{}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 80,
                'option_name' => 'uninstall_plugins',
                'option_value' => 'a:1:{s:27:\"wp-markdown/wp-markdown.php\";a:2:{i:0;s:18:\"WordPress_Markdown\";i:1;s:9:\"uninstall\";}}',
                'autoload' => 'no',
            ),

            array(
                'option_id' => 81,
                'option_name' => 'timezone_string',
                'option_value' => NULL,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 82,
                'option_name' => 'page_for_posts',
                'option_value' => 0,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 83,
                'option_name' => 'page_on_front',
                'option_value' => 0,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 84,
                'option_name' => 'default_post_format',
                'option_value' => 0,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 85,
                'option_name' => 'link_manager_enabled',
                'option_value' => 0,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 86,
                'option_name' => 'finished_splitting_shared_terms',
                'option_value' => 1,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 87,
                'option_name' => 'site_icon',
                'option_value' => 0,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 88,
                'option_name' => 'medium_large_size_w',
                'option_value' => 768,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 89,
                'option_name' => 'medium_large_size_h',
                'option_value' => 0,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 90,
                'option_name' => 'initial_db_version',
                'option_value' => 35700,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 91,
                'option_name' => 'lw_user_roles',
                'option_value' => 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 92,
                'option_name' => 'widget_search',
                'option_value' => 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 93,
                'option_name' => 'widget_recent-posts',
                'option_value' => 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 94,
                'option_name' => 'widget_recent-comments',
                'option_value' => 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 95,
                'option_name' => 'widget_archives',
                'option_value' => 'a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 96,
                'option_name' => 'widget_meta',
                'option_value' => 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 97,
                'option_name' => 'sidebars_widgets',
                'option_value' => 'a:3:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:13:\"array_version\";i:3;}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 100,
                'option_name' => 'widget_pages',
                'option_value' => 'a:1:{s:12:\"_multiwidget\";i:1;}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 101,
                'option_name' => 'widget_calendar',
                'option_value' => 'a:1:{s:12:\"_multiwidget\";i:1;}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 102,
                'option_name' => 'widget_tag_cloud',
                'option_value' => 'a:1:{s:12:\"_multiwidget\";i:1;}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 103,
                'option_name' => 'widget_nav_menu',
                'option_value' => 'a:1:{s:12:\"_multiwidget\";i:1;}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 104,
                'option_name' => 'cron',
                'option_value' => 'a:4:{i:1459141557;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1459184815;a:1:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1459185103;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}s:7:\"version\";i:2;}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 106,
                'option_name' => '_site_transient_update_core',
                'option_value' => 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-4.4.2.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-4.4.2.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-4.4.2-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-4.4.2-new-bundled.zip\";s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:5:\"4.4.2\";s:7:\"version\";s:5:\"4.4.2\";s:11:\"php_version\";s:5:\"5.2.4\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"4.4\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1459098393;s:15:\"version_checked\";s:5:\"4.4.2\";s:12:\"translations\";a:0:{}}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 111,
                'option_name' => '_site_transient_update_themes',
                'option_value' => 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1459098399;s:7:\"checked\";a:3:{s:13:\"twentyfifteen\";s:3:\"1.4\";s:14:\"twentyfourteen\";s:3:\"1.6\";s:13:\"twentysixteen\";s:3:\"1.1\";}s:8:\"response\";a:0:{}s:12:\"translations\";a:0:{}}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 113,
                'option_name' => '_site_transient_timeout_browser_6741b33694dec51d9a69e7f1142c87d3',
                'option_value' => 1459530416,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 114,
                'option_name' => '_site_transient_browser_6741b33694dec51d9a69e7f1142c87d3',
                'option_value' => 'a:9:{s:8:\"platform\";s:9:\"Macintosh\";s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:12:\"49.0.2623.87\";s:10:\"update_url\";s:28:\"http://www.google.com/chrome\";s:7:\"img_src\";s:49:\"http://s.wordpress.org/images/browsers/chrome.png\";s:11:\"img_src_ssl\";s:48:\"https://wordpress.org/images/browsers/chrome.png\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 132,
                'option_name' => 'can_compress_scripts',
                'option_value' => 1,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 136,
                'option_name' => 'recently_activated',
                'option_value' => 'a:1:{s:37:\"tinymce-advanced/tinymce-advanced.php\";i:1459069713;}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 139,
                'option_name' => 'WPLANG',
                'option_value' => NULL,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 168,
                'option_name' => '_transient_timeout_plugin_slugs',
                'option_value' => 1459156824,
                'autoload' => 'no',
            ),

            array(
                'option_id' => 169,
                'option_name' => '_transient_plugin_slugs',
                'option_value' => 'a:4:{i:0;s:19:\"akismet/akismet.php\";i:1;s:25:\"fakerpress/fakerpress.php\";i:2;s:9:\"hello.php\";i:3;s:27:\"wp-markdown/wp-markdown.php\";}',
                'autoload' => 'no',
            ),

            array(
                'option_id' => 172,
                'option_name' => 'category_children',
                'option_value' => 'a:0:{}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 179,
                'option_name' => '_site_transient_timeout_poptags_40cd750bba9870f18aada2478b24840a',
                'option_value' => 1459072565,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 180,
                'option_name' => '_site_transient_poptags_40cd750bba9870f18aada2478b24840a',
                'option_value' => 'a:100:{s:6:\"widget\";a:3:{s:4:\"name\";s:6:\"widget\";s:4:\"slug\";s:6:\"widget\";s:5:\"count\";s:4:\"5762\";}s:4:\"post\";a:3:{s:4:\"name\";s:4:\"Post\";s:4:\"slug\";s:4:\"post\";s:5:\"count\";s:4:\"3580\";}s:6:\"plugin\";a:3:{s:4:\"name\";s:6:\"plugin\";s:4:\"slug\";s:6:\"plugin\";s:5:\"count\";s:4:\"3548\";}s:5:\"admin\";a:3:{s:4:\"name\";s:5:\"admin\";s:4:\"slug\";s:5:\"admin\";s:5:\"count\";s:4:\"3046\";}s:5:\"posts\";a:3:{s:4:\"name\";s:5:\"posts\";s:4:\"slug\";s:5:\"posts\";s:5:\"count\";s:4:\"2757\";}s:9:\"shortcode\";a:3:{s:4:\"name\";s:9:\"shortcode\";s:4:\"slug\";s:9:\"shortcode\";s:5:\"count\";s:4:\"2281\";}s:7:\"sidebar\";a:3:{s:4:\"name\";s:7:\"sidebar\";s:4:\"slug\";s:7:\"sidebar\";s:5:\"count\";s:4:\"2190\";}s:6:\"google\";a:3:{s:4:\"name\";s:6:\"google\";s:4:\"slug\";s:6:\"google\";s:5:\"count\";s:4:\"2045\";}s:7:\"twitter\";a:3:{s:4:\"name\";s:7:\"twitter\";s:4:\"slug\";s:7:\"twitter\";s:5:\"count\";s:4:\"1999\";}s:4:\"page\";a:3:{s:4:\"name\";s:4:\"page\";s:4:\"slug\";s:4:\"page\";s:5:\"count\";s:4:\"1968\";}s:6:\"images\";a:3:{s:4:\"name\";s:6:\"images\";s:4:\"slug\";s:6:\"images\";s:5:\"count\";s:4:\"1959\";}s:8:\"comments\";a:3:{s:4:\"name\";s:8:\"comments\";s:4:\"slug\";s:8:\"comments\";s:5:\"count\";s:4:\"1915\";}s:5:\"image\";a:3:{s:4:\"name\";s:5:\"image\";s:4:\"slug\";s:5:\"image\";s:5:\"count\";s:4:\"1828\";}s:8:\"facebook\";a:3:{s:4:\"name\";s:8:\"Facebook\";s:4:\"slug\";s:8:\"facebook\";s:5:\"count\";s:4:\"1641\";}s:3:\"seo\";a:3:{s:4:\"name\";s:3:\"seo\";s:4:\"slug\";s:3:\"seo\";s:5:\"count\";s:4:\"1539\";}s:11:\"woocommerce\";a:3:{s:4:\"name\";s:11:\"woocommerce\";s:4:\"slug\";s:11:\"woocommerce\";s:5:\"count\";s:4:\"1532\";}s:9:\"wordpress\";a:3:{s:4:\"name\";s:9:\"wordpress\";s:4:\"slug\";s:9:\"wordpress\";s:5:\"count\";s:4:\"1509\";}s:6:\"social\";a:3:{s:4:\"name\";s:6:\"social\";s:4:\"slug\";s:6:\"social\";s:5:\"count\";s:4:\"1338\";}s:7:\"gallery\";a:3:{s:4:\"name\";s:7:\"gallery\";s:4:\"slug\";s:7:\"gallery\";s:5:\"count\";s:4:\"1281\";}s:5:\"links\";a:3:{s:4:\"name\";s:5:\"links\";s:4:\"slug\";s:5:\"links\";s:5:\"count\";s:4:\"1276\";}s:5:\"email\";a:3:{s:4:\"name\";s:5:\"email\";s:4:\"slug\";s:5:\"email\";s:5:\"count\";s:4:\"1178\";}s:7:\"widgets\";a:3:{s:4:\"name\";s:7:\"widgets\";s:4:\"slug\";s:7:\"widgets\";s:5:\"count\";s:4:\"1080\";}s:5:\"pages\";a:3:{s:4:\"name\";s:5:\"pages\";s:4:\"slug\";s:5:\"pages\";s:5:\"count\";s:4:\"1055\";}s:6:\"jquery\";a:3:{s:4:\"name\";s:6:\"jquery\";s:4:\"slug\";s:6:\"jquery\";s:5:\"count\";s:3:\"996\";}s:5:\"media\";a:3:{s:4:\"name\";s:5:\"media\";s:4:\"slug\";s:5:\"media\";s:5:\"count\";s:3:\"950\";}s:9:\"ecommerce\";a:3:{s:4:\"name\";s:9:\"ecommerce\";s:4:\"slug\";s:9:\"ecommerce\";s:5:\"count\";s:3:\"922\";}s:3:\"rss\";a:3:{s:4:\"name\";s:3:\"rss\";s:4:\"slug\";s:3:\"rss\";s:5:\"count\";s:3:\"907\";}s:5:\"video\";a:3:{s:4:\"name\";s:5:\"video\";s:4:\"slug\";s:5:\"video\";s:5:\"count\";s:3:\"892\";}s:4:\"ajax\";a:3:{s:4:\"name\";s:4:\"AJAX\";s:4:\"slug\";s:4:\"ajax\";s:5:\"count\";s:3:\"889\";}s:5:\"login\";a:3:{s:4:\"name\";s:5:\"login\";s:4:\"slug\";s:5:\"login\";s:5:\"count\";s:3:\"878\";}s:7:\"content\";a:3:{s:4:\"name\";s:7:\"content\";s:4:\"slug\";s:7:\"content\";s:5:\"count\";s:3:\"878\";}s:10:\"javascript\";a:3:{s:4:\"name\";s:10:\"javascript\";s:4:\"slug\";s:10:\"javascript\";s:5:\"count\";s:3:\"822\";}s:10:\"responsive\";a:3:{s:4:\"name\";s:10:\"responsive\";s:4:\"slug\";s:10:\"responsive\";s:5:\"count\";s:3:\"784\";}s:10:\"buddypress\";a:3:{s:4:\"name\";s:10:\"buddypress\";s:4:\"slug\";s:10:\"buddypress\";s:5:\"count\";s:3:\"778\";}s:8:\"security\";a:3:{s:4:\"name\";s:8:\"security\";s:4:\"slug\";s:8:\"security\";s:5:\"count\";s:3:\"759\";}s:5:\"photo\";a:3:{s:4:\"name\";s:5:\"photo\";s:4:\"slug\";s:5:\"photo\";s:5:\"count\";s:3:\"743\";}s:4:\"feed\";a:3:{s:4:\"name\";s:4:\"feed\";s:4:\"slug\";s:4:\"feed\";s:5:\"count\";s:3:\"737\";}s:4:\"spam\";a:3:{s:4:\"name\";s:4:\"spam\";s:4:\"slug\";s:4:\"spam\";s:5:\"count\";s:3:\"736\";}s:7:\"youtube\";a:3:{s:4:\"name\";s:7:\"youtube\";s:4:\"slug\";s:7:\"youtube\";s:5:\"count\";s:3:\"735\";}s:4:\"link\";a:3:{s:4:\"name\";s:4:\"link\";s:4:\"slug\";s:4:\"link\";s:5:\"count\";s:3:\"732\";}s:5:\"share\";a:3:{s:4:\"name\";s:5:\"Share\";s:4:\"slug\";s:5:\"share\";s:5:\"count\";s:3:\"727\";}s:10:\"e-commerce\";a:3:{s:4:\"name\";s:10:\"e-commerce\";s:4:\"slug\";s:10:\"e-commerce\";s:5:\"count\";s:3:\"726\";}s:8:\"category\";a:3:{s:4:\"name\";s:8:\"category\";s:4:\"slug\";s:8:\"category\";s:5:\"count\";s:3:\"687\";}s:6:\"photos\";a:3:{s:4:\"name\";s:6:\"photos\";s:4:\"slug\";s:6:\"photos\";s:5:\"count\";s:3:\"681\";}s:4:\"form\";a:3:{s:4:\"name\";s:4:\"form\";s:4:\"slug\";s:4:\"form\";s:5:\"count\";s:3:\"671\";}s:9:\"analytics\";a:3:{s:4:\"name\";s:9:\"analytics\";s:4:\"slug\";s:9:\"analytics\";s:5:\"count\";s:3:\"671\";}s:5:\"embed\";a:3:{s:4:\"name\";s:5:\"embed\";s:4:\"slug\";s:5:\"embed\";s:5:\"count\";s:3:\"670\";}s:3:\"css\";a:3:{s:4:\"name\";s:3:\"CSS\";s:4:\"slug\";s:3:\"css\";s:5:\"count\";s:3:\"661\";}s:6:\"search\";a:3:{s:4:\"name\";s:6:\"search\";s:4:\"slug\";s:6:\"search\";s:5:\"count\";s:3:\"648\";}s:9:\"slideshow\";a:3:{s:4:\"name\";s:9:\"slideshow\";s:4:\"slug\";s:9:\"slideshow\";s:5:\"count\";s:3:\"630\";}s:6:\"custom\";a:3:{s:4:\"name\";s:6:\"custom\";s:4:\"slug\";s:6:\"custom\";s:5:\"count\";s:3:\"629\";}s:6:\"slider\";a:3:{s:4:\"name\";s:6:\"slider\";s:4:\"slug\";s:6:\"slider\";s:5:\"count\";s:3:\"626\";}s:5:\"stats\";a:3:{s:4:\"name\";s:5:\"stats\";s:4:\"slug\";s:5:\"stats\";s:5:\"count\";s:3:\"609\";}s:6:\"button\";a:3:{s:4:\"name\";s:6:\"button\";s:4:\"slug\";s:6:\"button\";s:5:\"count\";s:3:\"602\";}s:7:\"comment\";a:3:{s:4:\"name\";s:7:\"comment\";s:4:\"slug\";s:7:\"comment\";s:5:\"count\";s:3:\"591\";}s:4:\"tags\";a:3:{s:4:\"name\";s:4:\"tags\";s:4:\"slug\";s:4:\"tags\";s:5:\"count\";s:3:\"585\";}s:4:\"menu\";a:3:{s:4:\"name\";s:4:\"menu\";s:4:\"slug\";s:4:\"menu\";s:5:\"count\";s:3:\"585\";}s:5:\"theme\";a:3:{s:4:\"name\";s:5:\"theme\";s:4:\"slug\";s:5:\"theme\";s:5:\"count\";s:3:\"585\";}s:9:\"dashboard\";a:3:{s:4:\"name\";s:9:\"dashboard\";s:4:\"slug\";s:9:\"dashboard\";s:5:\"count\";s:3:\"584\";}s:10:\"categories\";a:3:{s:4:\"name\";s:10:\"categories\";s:4:\"slug\";s:10:\"categories\";s:5:\"count\";s:3:\"570\";}s:6:\"mobile\";a:3:{s:4:\"name\";s:6:\"mobile\";s:4:\"slug\";s:6:\"mobile\";s:5:\"count\";s:3:\"562\";}s:10:\"statistics\";a:3:{s:4:\"name\";s:10:\"statistics\";s:4:\"slug\";s:10:\"statistics\";s:5:\"count\";s:3:\"558\";}s:3:\"ads\";a:3:{s:4:\"name\";s:3:\"ads\";s:4:\"slug\";s:3:\"ads\";s:5:\"count\";s:3:\"548\";}s:4:\"user\";a:3:{s:4:\"name\";s:4:\"user\";s:4:\"slug\";s:4:\"user\";s:5:\"count\";s:3:\"540\";}s:6:\"editor\";a:3:{s:4:\"name\";s:6:\"editor\";s:4:\"slug\";s:6:\"editor\";s:5:\"count\";s:3:\"537\";}s:5:\"users\";a:3:{s:4:\"name\";s:5:\"users\";s:4:\"slug\";s:5:\"users\";s:5:\"count\";s:3:\"526\";}s:4:\"list\";a:3:{s:4:\"name\";s:4:\"list\";s:4:\"slug\";s:4:\"list\";s:5:\"count\";s:3:\"517\";}s:7:\"picture\";a:3:{s:4:\"name\";s:7:\"picture\";s:4:\"slug\";s:7:\"picture\";s:5:\"count\";s:3:\"507\";}s:9:\"affiliate\";a:3:{s:4:\"name\";s:9:\"affiliate\";s:4:\"slug\";s:9:\"affiliate\";s:5:\"count\";s:3:\"502\";}s:7:\"plugins\";a:3:{s:4:\"name\";s:7:\"plugins\";s:4:\"slug\";s:7:\"plugins\";s:5:\"count\";s:3:\"501\";}s:6:\"simple\";a:3:{s:4:\"name\";s:6:\"simple\";s:4:\"slug\";s:6:\"simple\";s:5:\"count\";s:3:\"491\";}s:9:\"multisite\";a:3:{s:4:\"name\";s:9:\"multisite\";s:4:\"slug\";s:9:\"multisite\";s:5:\"count\";s:3:\"489\";}s:12:\"social-media\";a:3:{s:4:\"name\";s:12:\"social media\";s:4:\"slug\";s:12:\"social-media\";s:5:\"count\";s:3:\"486\";}s:12:\"contact-form\";a:3:{s:4:\"name\";s:12:\"contact form\";s:4:\"slug\";s:12:\"contact-form\";s:5:\"count\";s:3:\"484\";}s:7:\"contact\";a:3:{s:4:\"name\";s:7:\"contact\";s:4:\"slug\";s:7:\"contact\";s:5:\"count\";s:3:\"466\";}s:8:\"pictures\";a:3:{s:4:\"name\";s:8:\"pictures\";s:4:\"slug\";s:8:\"pictures\";s:5:\"count\";s:3:\"452\";}s:4:\"shop\";a:3:{s:4:\"name\";s:4:\"shop\";s:4:\"slug\";s:4:\"shop\";s:5:\"count\";s:3:\"438\";}s:10:\"navigation\";a:3:{s:4:\"name\";s:10:\"navigation\";s:4:\"slug\";s:10:\"navigation\";s:5:\"count\";s:3:\"436\";}s:3:\"url\";a:3:{s:4:\"name\";s:3:\"url\";s:4:\"slug\";s:3:\"url\";s:5:\"count\";s:3:\"436\";}s:4:\"html\";a:3:{s:4:\"name\";s:4:\"html\";s:4:\"slug\";s:4:\"html\";s:5:\"count\";s:3:\"435\";}s:3:\"api\";a:3:{s:4:\"name\";s:3:\"api\";s:4:\"slug\";s:3:\"api\";s:5:\"count\";s:3:\"434\";}s:9:\"marketing\";a:3:{s:4:\"name\";s:9:\"marketing\";s:4:\"slug\";s:9:\"marketing\";s:5:\"count\";s:3:\"428\";}s:5:\"flash\";a:3:{s:4:\"name\";s:5:\"flash\";s:4:\"slug\";s:5:\"flash\";s:5:\"count\";s:3:\"422\";}s:10:\"newsletter\";a:3:{s:4:\"name\";s:10:\"newsletter\";s:4:\"slug\";s:10:\"newsletter\";s:5:\"count\";s:3:\"419\";}s:4:\"meta\";a:3:{s:4:\"name\";s:4:\"meta\";s:4:\"slug\";s:4:\"meta\";s:5:\"count\";s:3:\"414\";}s:4:\"news\";a:3:{s:4:\"name\";s:4:\"News\";s:4:\"slug\";s:4:\"news\";s:5:\"count\";s:3:\"404\";}s:3:\"tag\";a:3:{s:4:\"name\";s:3:\"tag\";s:4:\"slug\";s:3:\"tag\";s:5:\"count\";s:3:\"404\";}s:8:\"calendar\";a:3:{s:4:\"name\";s:8:\"calendar\";s:4:\"slug\";s:8:\"calendar\";s:5:\"count\";s:3:\"402\";}s:6:\"events\";a:3:{s:4:\"name\";s:6:\"events\";s:4:\"slug\";s:6:\"events\";s:5:\"count\";s:3:\"402\";}s:8:\"tracking\";a:3:{s:4:\"name\";s:8:\"tracking\";s:4:\"slug\";s:8:\"tracking\";s:5:\"count\";s:3:\"398\";}s:11:\"advertising\";a:3:{s:4:\"name\";s:11:\"advertising\";s:4:\"slug\";s:11:\"advertising\";s:5:\"count\";s:3:\"397\";}s:10:\"shortcodes\";a:3:{s:4:\"name\";s:10:\"shortcodes\";s:4:\"slug\";s:10:\"shortcodes\";s:5:\"count\";s:3:\"394\";}s:9:\"thumbnail\";a:3:{s:4:\"name\";s:9:\"thumbnail\";s:4:\"slug\";s:9:\"thumbnail\";s:5:\"count\";s:3:\"390\";}s:4:\"text\";a:3:{s:4:\"name\";s:4:\"text\";s:4:\"slug\";s:4:\"text\";s:5:\"count\";s:3:\"388\";}s:6:\"upload\";a:3:{s:4:\"name\";s:6:\"upload\";s:4:\"slug\";s:6:\"upload\";s:5:\"count\";s:3:\"386\";}s:7:\"sharing\";a:3:{s:4:\"name\";s:7:\"sharing\";s:4:\"slug\";s:7:\"sharing\";s:5:\"count\";s:3:\"384\";}s:4:\"code\";a:3:{s:4:\"name\";s:4:\"code\";s:4:\"slug\";s:4:\"code\";s:5:\"count\";s:3:\"384\";}s:12:\"notification\";a:3:{s:4:\"name\";s:12:\"notification\";s:4:\"slug\";s:12:\"notification\";s:5:\"count\";s:3:\"384\";}s:9:\"automatic\";a:3:{s:4:\"name\";s:9:\"automatic\";s:4:\"slug\";s:9:\"automatic\";s:5:\"count\";s:3:\"381\";}s:6:\"paypal\";a:3:{s:4:\"name\";s:6:\"paypal\";s:4:\"slug\";s:6:\"paypal\";s:5:\"count\";s:3:\"381\";}}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 193,
                'option_name' => 'markdown_version',
                'option_value' => '1.5.1',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 194,
                'option_name' => 'markdown',
                'option_value' => 'a:3:{s:10:\"post_types\";a:1:{i:0;s:4:\"post\";}s:11:\"markdownbar\";a:1:{i:0;s:10:\"posteditor\";}s:8:\"prettify\";i:1;}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 201,
                'option_name' => '_site_transient_update_plugins',
                'option_value' => 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1459098397;s:8:\"response\";a:0:{}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:4:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":6:{s:2:\"id\";s:2:\"15\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:5:\"3.1.8\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/akismet.3.1.8.zip\";}s:25:\"fakerpress/fakerpress.php\";O:8:\"stdClass\":6:{s:2:\"id\";s:5:\"51295\";s:4:\"slug\";s:10:\"fakerpress\";s:6:\"plugin\";s:25:\"fakerpress/fakerpress.php\";s:11:\"new_version\";s:5:\"0.4.3\";s:3:\"url\";s:41:\"https://wordpress.org/plugins/fakerpress/\";s:7:\"package\";s:53:\"https://downloads.wordpress.org/plugin/fakerpress.zip\";}s:9:\"hello.php\";O:8:\"stdClass\":6:{s:2:\"id\";s:4:\"3564\";s:4:\"slug\";s:11:\"hello-dolly\";s:6:\"plugin\";s:9:\"hello.php\";s:11:\"new_version\";s:3:\"1.6\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/hello-dolly/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/plugin/hello-dolly.1.6.zip\";}s:27:\"wp-markdown/wp-markdown.php\";O:8:\"stdClass\":6:{s:2:\"id\";s:5:\"29827\";s:4:\"slug\";s:11:\"wp-markdown\";s:6:\"plugin\";s:27:\"wp-markdown/wp-markdown.php\";s:11:\"new_version\";s:5:\"1.5.1\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/wp-markdown/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/wp-markdown.1.5.1.zip\";}}}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 203,
                'option_name' => '_site_transient_timeout_available_translations',
                'option_value' => 1459084389,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 204,
                'option_name' => '_site_transient_available_translations',
                'option_value' => 'a:77:{s:2:\"ar\";a:8:{s:8:\"language\";s:2:\"ar\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-07 13:09:53\";s:12:\"english_name\";s:6:\"Arabic\";s:11:\"native_name\";s:14:\"العربية\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.4.2/ar.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"ar\";i:2;s:3:\"ara\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:16:\"المتابعة\";}}s:3:\"ary\";a:8:{s:8:\"language\";s:3:\"ary\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-12 10:15:45\";s:12:\"english_name\";s:15:\"Moroccan Arabic\";s:11:\"native_name\";s:31:\"العربية المغربية\";s:7:\"package\";s:62:\"https://downloads.wordpress.org/translation/core/4.4.2/ary.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"ar\";i:3;s:3:\"ary\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:16:\"المتابعة\";}}s:2:\"az\";a:8:{s:8:\"language\";s:2:\"az\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-07 20:53:51\";s:12:\"english_name\";s:11:\"Azerbaijani\";s:11:\"native_name\";s:16:\"Azərbaycan dili\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.4.2/az.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"az\";i:2;s:3:\"aze\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:5:\"Davam\";}}s:3:\"azb\";a:8:{s:8:\"language\";s:3:\"azb\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-11 22:42:10\";s:12:\"english_name\";s:17:\"South Azerbaijani\";s:11:\"native_name\";s:29:\"گؤنئی آذربایجان\";s:7:\"package\";s:62:\"https://downloads.wordpress.org/translation/core/4.4.2/azb.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"az\";i:3;s:3:\"azb\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:8:\"Continue\";}}s:5:\"bg_BG\";a:8:{s:8:\"language\";s:5:\"bg_BG\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-08 08:50:29\";s:12:\"english_name\";s:9:\"Bulgarian\";s:11:\"native_name\";s:18:\"Български\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/bg_BG.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"bg\";i:2;s:3:\"bul\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:22:\"Продължение\";}}s:5:\"bn_BD\";a:8:{s:8:\"language\";s:5:\"bn_BD\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-08 13:17:04\";s:12:\"english_name\";s:7:\"Bengali\";s:11:\"native_name\";s:15:\"বাংলা\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/bn_BD.zip\";s:3:\"iso\";a:1:{i:1;s:2:\"bn\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:23:\"এগিয়ে চল.\";}}s:5:\"bs_BA\";a:8:{s:8:\"language\";s:5:\"bs_BA\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-04 09:40:25\";s:12:\"english_name\";s:7:\"Bosnian\";s:11:\"native_name\";s:8:\"Bosanski\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/bs_BA.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"bs\";i:2;s:3:\"bos\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:7:\"Nastavi\";}}s:2:\"ca\";a:8:{s:8:\"language\";s:2:\"ca\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-03-24 08:27:23\";s:12:\"english_name\";s:7:\"Catalan\";s:11:\"native_name\";s:7:\"Català\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.4.2/ca.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"ca\";i:2;s:3:\"cat\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:8:\"Continua\";}}s:3:\"ceb\";a:8:{s:8:\"language\";s:3:\"ceb\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-16 15:34:57\";s:12:\"english_name\";s:7:\"Cebuano\";s:11:\"native_name\";s:7:\"Cebuano\";s:7:\"package\";s:62:\"https://downloads.wordpress.org/translation/core/4.4.2/ceb.zip\";s:3:\"iso\";a:2:{i:2;s:3:\"ceb\";i:3;s:3:\"ceb\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:7:\"Padayun\";}}s:2:\"cy\";a:8:{s:8:\"language\";s:2:\"cy\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-01-26 16:01:40\";s:12:\"english_name\";s:5:\"Welsh\";s:11:\"native_name\";s:7:\"Cymraeg\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.4.2/cy.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"cy\";i:2;s:3:\"cym\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:6:\"Parhau\";}}s:5:\"da_DK\";a:8:{s:8:\"language\";s:5:\"da_DK\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-08 22:48:20\";s:12:\"english_name\";s:6:\"Danish\";s:11:\"native_name\";s:5:\"Dansk\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/da_DK.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"da\";i:2;s:3:\"dan\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:12:\"Forts&#230;t\";}}s:5:\"de_CH\";a:8:{s:8:\"language\";s:5:\"de_CH\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-08 14:19:21\";s:12:\"english_name\";s:20:\"German (Switzerland)\";s:11:\"native_name\";s:17:\"Deutsch (Schweiz)\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/de_CH.zip\";s:3:\"iso\";a:1:{i:1;s:2:\"de\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:10:\"Fortfahren\";}}s:5:\"de_DE\";a:8:{s:8:\"language\";s:5:\"de_DE\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-29 10:47:54\";s:12:\"english_name\";s:6:\"German\";s:11:\"native_name\";s:7:\"Deutsch\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/de_DE.zip\";s:3:\"iso\";a:1:{i:1;s:2:\"de\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:10:\"Fortfahren\";}}s:12:\"de_DE_formal\";a:8:{s:8:\"language\";s:12:\"de_DE_formal\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-26 16:11:56\";s:12:\"english_name\";s:15:\"German (Formal)\";s:11:\"native_name\";s:13:\"Deutsch (Sie)\";s:7:\"package\";s:71:\"https://downloads.wordpress.org/translation/core/4.4.2/de_DE_formal.zip\";s:3:\"iso\";a:1:{i:1;s:2:\"de\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:10:\"Fortfahren\";}}s:2:\"el\";a:8:{s:8:\"language\";s:2:\"el\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-03-01 18:27:32\";s:12:\"english_name\";s:5:\"Greek\";s:11:\"native_name\";s:16:\"Ελληνικά\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.4.2/el.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"el\";i:2;s:3:\"ell\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:16:\"Συνέχεια\";}}s:5:\"en_AU\";a:8:{s:8:\"language\";s:5:\"en_AU\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-07 04:39:48\";s:12:\"english_name\";s:19:\"English (Australia)\";s:11:\"native_name\";s:19:\"English (Australia)\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/en_AU.zip\";s:3:\"iso\";a:3:{i:1;s:2:\"en\";i:2;s:3:\"eng\";i:3;s:3:\"eng\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:8:\"Continue\";}}s:5:\"en_GB\";a:8:{s:8:\"language\";s:5:\"en_GB\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-01-14 21:14:29\";s:12:\"english_name\";s:12:\"English (UK)\";s:11:\"native_name\";s:12:\"English (UK)\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/en_GB.zip\";s:3:\"iso\";a:3:{i:1;s:2:\"en\";i:2;s:3:\"eng\";i:3;s:3:\"eng\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:8:\"Continue\";}}s:5:\"en_CA\";a:8:{s:8:\"language\";s:5:\"en_CA\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-06 23:10:59\";s:12:\"english_name\";s:16:\"English (Canada)\";s:11:\"native_name\";s:16:\"English (Canada)\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/en_CA.zip\";s:3:\"iso\";a:3:{i:1;s:2:\"en\";i:2;s:3:\"eng\";i:3;s:3:\"eng\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:8:\"Continue\";}}s:5:\"en_ZA\";a:8:{s:8:\"language\";s:5:\"en_ZA\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-15 11:52:35\";s:12:\"english_name\";s:22:\"English (South Africa)\";s:11:\"native_name\";s:22:\"English (South Africa)\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/en_ZA.zip\";s:3:\"iso\";a:3:{i:1;s:2:\"en\";i:2;s:3:\"eng\";i:3;s:3:\"eng\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:8:\"Continue\";}}s:5:\"en_NZ\";a:8:{s:8:\"language\";s:5:\"en_NZ\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-08 13:34:17\";s:12:\"english_name\";s:21:\"English (New Zealand)\";s:11:\"native_name\";s:21:\"English (New Zealand)\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/en_NZ.zip\";s:3:\"iso\";a:3:{i:1;s:2:\"en\";i:2;s:3:\"eng\";i:3;s:3:\"eng\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:8:\"Continue\";}}s:2:\"eo\";a:8:{s:8:\"language\";s:2:\"eo\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-01-25 13:07:29\";s:12:\"english_name\";s:9:\"Esperanto\";s:11:\"native_name\";s:9:\"Esperanto\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.4.2/eo.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"eo\";i:2;s:3:\"epo\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:8:\"Daŭrigi\";}}s:5:\"es_PE\";a:8:{s:8:\"language\";s:5:\"es_PE\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-01-24 15:17:36\";s:12:\"english_name\";s:14:\"Spanish (Peru)\";s:11:\"native_name\";s:17:\"Español de Perú\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/es_PE.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"es\";i:2;s:3:\"spa\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Continuar\";}}s:5:\"es_ES\";a:8:{s:8:\"language\";s:5:\"es_ES\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-13 12:28:49\";s:12:\"english_name\";s:15:\"Spanish (Spain)\";s:11:\"native_name\";s:8:\"Español\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/es_ES.zip\";s:3:\"iso\";a:1:{i:1;s:2:\"es\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Continuar\";}}s:5:\"es_MX\";a:8:{s:8:\"language\";s:5:\"es_MX\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-07 17:35:10\";s:12:\"english_name\";s:16:\"Spanish (Mexico)\";s:11:\"native_name\";s:19:\"Español de México\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/es_MX.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"es\";i:2;s:3:\"spa\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Continuar\";}}s:5:\"es_VE\";a:8:{s:8:\"language\";s:5:\"es_VE\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-01-13 06:14:13\";s:12:\"english_name\";s:19:\"Spanish (Venezuela)\";s:11:\"native_name\";s:21:\"Español de Venezuela\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/es_VE.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"es\";i:2;s:3:\"spa\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Continuar\";}}s:5:\"es_CO\";a:8:{s:8:\"language\";s:5:\"es_CO\";s:7:\"version\";s:6:\"4.3-RC\";s:7:\"updated\";s:19:\"2015-08-04 06:10:33\";s:12:\"english_name\";s:18:\"Spanish (Colombia)\";s:11:\"native_name\";s:20:\"Español de Colombia\";s:7:\"package\";s:65:\"https://downloads.wordpress.org/translation/core/4.3-RC/es_CO.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"es\";i:2;s:3:\"spa\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Continuar\";}}s:5:\"es_GT\";a:8:{s:8:\"language\";s:5:\"es_GT\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-09 18:08:52\";s:12:\"english_name\";s:19:\"Spanish (Guatemala)\";s:11:\"native_name\";s:21:\"Español de Guatemala\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/es_GT.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"es\";i:2;s:3:\"spa\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Continuar\";}}s:5:\"es_CL\";a:8:{s:8:\"language\";s:5:\"es_CL\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-03-02 20:27:44\";s:12:\"english_name\";s:15:\"Spanish (Chile)\";s:11:\"native_name\";s:17:\"Español de Chile\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/es_CL.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"es\";i:2;s:3:\"spa\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Continuar\";}}s:5:\"es_AR\";a:8:{s:8:\"language\";s:5:\"es_AR\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-23 00:46:01\";s:12:\"english_name\";s:19:\"Spanish (Argentina)\";s:11:\"native_name\";s:21:\"Español de Argentina\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/es_AR.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"es\";i:2;s:3:\"spa\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Continuar\";}}s:2:\"et\";a:8:{s:8:\"language\";s:2:\"et\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-18 06:44:22\";s:12:\"english_name\";s:8:\"Estonian\";s:11:\"native_name\";s:5:\"Eesti\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.4.2/et.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"et\";i:2;s:3:\"est\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:6:\"Jätka\";}}s:2:\"eu\";a:8:{s:8:\"language\";s:2:\"eu\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-03-03 10:31:09\";s:12:\"english_name\";s:6:\"Basque\";s:11:\"native_name\";s:7:\"Euskara\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.4.2/eu.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"eu\";i:2;s:3:\"eus\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:8:\"Jarraitu\";}}s:5:\"fa_IR\";a:8:{s:8:\"language\";s:5:\"fa_IR\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-01-31 19:24:20\";s:12:\"english_name\";s:7:\"Persian\";s:11:\"native_name\";s:10:\"فارسی\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/fa_IR.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"fa\";i:2;s:3:\"fas\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:10:\"ادامه\";}}s:2:\"fi\";a:8:{s:8:\"language\";s:2:\"fi\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-23 06:49:15\";s:12:\"english_name\";s:7:\"Finnish\";s:11:\"native_name\";s:5:\"Suomi\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.4.2/fi.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"fi\";i:2;s:3:\"fin\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:5:\"Jatka\";}}s:5:\"fr_BE\";a:8:{s:8:\"language\";s:5:\"fr_BE\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-08 13:47:35\";s:12:\"english_name\";s:16:\"French (Belgium)\";s:11:\"native_name\";s:21:\"Français de Belgique\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/fr_BE.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"fr\";i:2;s:3:\"fra\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Continuer\";}}s:5:\"fr_FR\";a:8:{s:8:\"language\";s:5:\"fr_FR\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-03-08 17:19:17\";s:12:\"english_name\";s:15:\"French (France)\";s:11:\"native_name\";s:9:\"Français\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/fr_FR.zip\";s:3:\"iso\";a:1:{i:1;s:2:\"fr\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Continuer\";}}s:5:\"fr_CA\";a:8:{s:8:\"language\";s:5:\"fr_CA\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-09 02:16:19\";s:12:\"english_name\";s:15:\"French (Canada)\";s:11:\"native_name\";s:19:\"Français du Canada\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/fr_CA.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"fr\";i:2;s:3:\"fra\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Continuer\";}}s:2:\"gd\";a:8:{s:8:\"language\";s:2:\"gd\";s:7:\"version\";s:5:\"4.3.3\";s:7:\"updated\";s:19:\"2015-09-24 15:25:30\";s:12:\"english_name\";s:15:\"Scottish Gaelic\";s:11:\"native_name\";s:9:\"Gàidhlig\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.3.3/gd.zip\";s:3:\"iso\";a:3:{i:1;s:2:\"gd\";i:2;s:3:\"gla\";i:3;s:3:\"gla\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:15:\"Lean air adhart\";}}s:5:\"gl_ES\";a:8:{s:8:\"language\";s:5:\"gl_ES\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-01-13 16:48:03\";s:12:\"english_name\";s:8:\"Galician\";s:11:\"native_name\";s:6:\"Galego\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/gl_ES.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"gl\";i:2;s:3:\"glg\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Continuar\";}}s:3:\"haz\";a:8:{s:8:\"language\";s:3:\"haz\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-05 00:59:09\";s:12:\"english_name\";s:8:\"Hazaragi\";s:11:\"native_name\";s:15:\"هزاره گی\";s:7:\"package\";s:62:\"https://downloads.wordpress.org/translation/core/4.4.2/haz.zip\";s:3:\"iso\";a:1:{i:3;s:3:\"haz\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:10:\"ادامه\";}}s:5:\"he_IL\";a:8:{s:8:\"language\";s:5:\"he_IL\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-03-16 18:59:27\";s:12:\"english_name\";s:6:\"Hebrew\";s:11:\"native_name\";s:16:\"עִבְרִית\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/he_IL.zip\";s:3:\"iso\";a:1:{i:1;s:2:\"he\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:12:\"להמשיך\";}}s:5:\"hi_IN\";a:8:{s:8:\"language\";s:5:\"hi_IN\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-03-24 14:53:42\";s:12:\"english_name\";s:5:\"Hindi\";s:11:\"native_name\";s:18:\"हिन्दी\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/hi_IN.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"hi\";i:2;s:3:\"hin\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:12:\"जारी\";}}s:2:\"hr\";a:8:{s:8:\"language\";s:2:\"hr\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-03-04 08:39:26\";s:12:\"english_name\";s:8:\"Croatian\";s:11:\"native_name\";s:8:\"Hrvatski\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.4.2/hr.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"hr\";i:2;s:3:\"hrv\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:7:\"Nastavi\";}}s:5:\"hu_HU\";a:8:{s:8:\"language\";s:5:\"hu_HU\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-03 14:37:42\";s:12:\"english_name\";s:9:\"Hungarian\";s:11:\"native_name\";s:6:\"Magyar\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/hu_HU.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"hu\";i:2;s:3:\"hun\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:7:\"Tovább\";}}s:2:\"hy\";a:8:{s:8:\"language\";s:2:\"hy\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-04 07:13:54\";s:12:\"english_name\";s:8:\"Armenian\";s:11:\"native_name\";s:14:\"Հայերեն\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.4.2/hy.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"hy\";i:2;s:3:\"hye\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:20:\"Շարունակել\";}}s:5:\"id_ID\";a:8:{s:8:\"language\";s:5:\"id_ID\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-21 16:17:50\";s:12:\"english_name\";s:10:\"Indonesian\";s:11:\"native_name\";s:16:\"Bahasa Indonesia\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/id_ID.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"id\";i:2;s:3:\"ind\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Lanjutkan\";}}s:5:\"is_IS\";a:8:{s:8:\"language\";s:5:\"is_IS\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-08 00:20:24\";s:12:\"english_name\";s:9:\"Icelandic\";s:11:\"native_name\";s:9:\"Íslenska\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/is_IS.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"is\";i:2;s:3:\"isl\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:6:\"Áfram\";}}s:5:\"it_IT\";a:8:{s:8:\"language\";s:5:\"it_IT\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-03-13 13:43:58\";s:12:\"english_name\";s:7:\"Italian\";s:11:\"native_name\";s:8:\"Italiano\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/it_IT.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"it\";i:2;s:3:\"ita\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:8:\"Continua\";}}s:2:\"ja\";a:8:{s:8:\"language\";s:2:\"ja\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-25 13:08:14\";s:12:\"english_name\";s:8:\"Japanese\";s:11:\"native_name\";s:9:\"日本語\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.4.2/ja.zip\";s:3:\"iso\";a:1:{i:1;s:2:\"ja\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"続ける\";}}s:5:\"ka_GE\";a:8:{s:8:\"language\";s:5:\"ka_GE\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-09 08:53:31\";s:12:\"english_name\";s:8:\"Georgian\";s:11:\"native_name\";s:21:\"ქართული\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/ka_GE.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"ka\";i:2;s:3:\"kat\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:30:\"გაგრძელება\";}}s:5:\"ko_KR\";a:8:{s:8:\"language\";s:5:\"ko_KR\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-24 00:12:01\";s:12:\"english_name\";s:6:\"Korean\";s:11:\"native_name\";s:9:\"한국어\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/ko_KR.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"ko\";i:2;s:3:\"kor\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:6:\"계속\";}}s:5:\"lt_LT\";a:8:{s:8:\"language\";s:5:\"lt_LT\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-08 20:07:24\";s:12:\"english_name\";s:10:\"Lithuanian\";s:11:\"native_name\";s:15:\"Lietuvių kalba\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/lt_LT.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"lt\";i:2;s:3:\"lit\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:6:\"Tęsti\";}}s:5:\"ms_MY\";a:8:{s:8:\"language\";s:5:\"ms_MY\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-01-28 05:41:39\";s:12:\"english_name\";s:5:\"Malay\";s:11:\"native_name\";s:13:\"Bahasa Melayu\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/ms_MY.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"ms\";i:2;s:3:\"msa\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:8:\"Teruskan\";}}s:5:\"my_MM\";a:8:{s:8:\"language\";s:5:\"my_MM\";s:7:\"version\";s:6:\"4.1.10\";s:7:\"updated\";s:19:\"2015-03-26 15:57:42\";s:12:\"english_name\";s:17:\"Myanmar (Burmese)\";s:11:\"native_name\";s:15:\"ဗမာစာ\";s:7:\"package\";s:65:\"https://downloads.wordpress.org/translation/core/4.1.10/my_MM.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"my\";i:2;s:3:\"mya\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:54:\"ဆက်လက်လုပ်ေဆာင်ပါ။\";}}s:5:\"nb_NO\";a:8:{s:8:\"language\";s:5:\"nb_NO\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-07 10:01:09\";s:12:\"english_name\";s:19:\"Norwegian (Bokmål)\";s:11:\"native_name\";s:13:\"Norsk bokmål\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/nb_NO.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"nb\";i:2;s:3:\"nob\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:8:\"Fortsett\";}}s:12:\"nl_NL_formal\";a:8:{s:8:\"language\";s:12:\"nl_NL_formal\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-01-20 13:35:50\";s:12:\"english_name\";s:14:\"Dutch (Formal)\";s:11:\"native_name\";s:20:\"Nederlands (Formeel)\";s:7:\"package\";s:71:\"https://downloads.wordpress.org/translation/core/4.4.2/nl_NL_formal.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"nl\";i:2;s:3:\"nld\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:8:\"Doorgaan\";}}s:5:\"nl_NL\";a:8:{s:8:\"language\";s:5:\"nl_NL\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-23 18:59:13\";s:12:\"english_name\";s:5:\"Dutch\";s:11:\"native_name\";s:10:\"Nederlands\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/nl_NL.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"nl\";i:2;s:3:\"nld\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:8:\"Doorgaan\";}}s:5:\"nn_NO\";a:8:{s:8:\"language\";s:5:\"nn_NO\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-14 12:19:44\";s:12:\"english_name\";s:19:\"Norwegian (Nynorsk)\";s:11:\"native_name\";s:13:\"Norsk nynorsk\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/nn_NO.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"nn\";i:2;s:3:\"nno\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Hald fram\";}}s:3:\"oci\";a:8:{s:8:\"language\";s:3:\"oci\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-08 16:21:37\";s:12:\"english_name\";s:7:\"Occitan\";s:11:\"native_name\";s:7:\"Occitan\";s:7:\"package\";s:62:\"https://downloads.wordpress.org/translation/core/4.4.2/oci.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"oc\";i:2;s:3:\"oci\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Contunhar\";}}s:5:\"pl_PL\";a:8:{s:8:\"language\";s:5:\"pl_PL\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-03-24 15:31:29\";s:12:\"english_name\";s:6:\"Polish\";s:11:\"native_name\";s:6:\"Polski\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/pl_PL.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"pl\";i:2;s:3:\"pol\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Kontynuuj\";}}s:2:\"ps\";a:8:{s:8:\"language\";s:2:\"ps\";s:7:\"version\";s:6:\"4.1.10\";s:7:\"updated\";s:19:\"2015-03-29 22:19:48\";s:12:\"english_name\";s:6:\"Pashto\";s:11:\"native_name\";s:8:\"پښتو\";s:7:\"package\";s:62:\"https://downloads.wordpress.org/translation/core/4.1.10/ps.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"ps\";i:2;s:3:\"pus\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:8:\"دوام\";}}s:5:\"pt_PT\";a:8:{s:8:\"language\";s:5:\"pt_PT\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-03-25 14:37:07\";s:12:\"english_name\";s:21:\"Portuguese (Portugal)\";s:11:\"native_name\";s:10:\"Português\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/pt_PT.zip\";s:3:\"iso\";a:1:{i:1;s:2:\"pt\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Continuar\";}}s:5:\"pt_BR\";a:8:{s:8:\"language\";s:5:\"pt_BR\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-03-03 17:32:29\";s:12:\"english_name\";s:19:\"Portuguese (Brazil)\";s:11:\"native_name\";s:20:\"Português do Brasil\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/pt_BR.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"pt\";i:2;s:3:\"por\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Continuar\";}}s:5:\"ro_RO\";a:8:{s:8:\"language\";s:5:\"ro_RO\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-24 11:09:36\";s:12:\"english_name\";s:8:\"Romanian\";s:11:\"native_name\";s:8:\"Română\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/ro_RO.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"ro\";i:2;s:3:\"ron\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Continuă\";}}s:5:\"ru_RU\";a:8:{s:8:\"language\";s:5:\"ru_RU\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-03-21 18:23:26\";s:12:\"english_name\";s:7:\"Russian\";s:11:\"native_name\";s:14:\"Русский\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/ru_RU.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"ru\";i:2;s:3:\"rus\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:20:\"Продолжить\";}}s:5:\"sk_SK\";a:8:{s:8:\"language\";s:5:\"sk_SK\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-26 11:29:13\";s:12:\"english_name\";s:6:\"Slovak\";s:11:\"native_name\";s:11:\"Slovenčina\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/sk_SK.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"sk\";i:2;s:3:\"slk\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:12:\"Pokračovať\";}}s:5:\"sl_SI\";a:8:{s:8:\"language\";s:5:\"sl_SI\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-11-26 00:00:18\";s:12:\"english_name\";s:9:\"Slovenian\";s:11:\"native_name\";s:13:\"Slovenščina\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/sl_SI.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"sl\";i:2;s:3:\"slv\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:10:\"Nadaljujte\";}}s:2:\"sq\";a:8:{s:8:\"language\";s:2:\"sq\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-02-23 10:30:30\";s:12:\"english_name\";s:8:\"Albanian\";s:11:\"native_name\";s:5:\"Shqip\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.4.2/sq.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"sq\";i:2;s:3:\"sqi\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:6:\"Vazhdo\";}}s:5:\"sr_RS\";a:8:{s:8:\"language\";s:5:\"sr_RS\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-09 09:09:51\";s:12:\"english_name\";s:7:\"Serbian\";s:11:\"native_name\";s:23:\"Српски језик\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/sr_RS.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"sr\";i:2;s:3:\"srp\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:14:\"Настави\";}}s:5:\"sv_SE\";a:8:{s:8:\"language\";s:5:\"sv_SE\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-08 23:28:56\";s:12:\"english_name\";s:7:\"Swedish\";s:11:\"native_name\";s:7:\"Svenska\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/sv_SE.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"sv\";i:2;s:3:\"swe\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:9:\"Fortsätt\";}}s:2:\"th\";a:8:{s:8:\"language\";s:2:\"th\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-08 03:22:55\";s:12:\"english_name\";s:4:\"Thai\";s:11:\"native_name\";s:9:\"ไทย\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.4.2/th.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"th\";i:2;s:3:\"tha\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:15:\"ต่อไป\";}}s:2:\"tl\";a:8:{s:8:\"language\";s:2:\"tl\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-11-27 15:51:36\";s:12:\"english_name\";s:7:\"Tagalog\";s:11:\"native_name\";s:7:\"Tagalog\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.4.2/tl.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"tl\";i:2;s:3:\"tgl\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:10:\"Magpatuloy\";}}s:5:\"tr_TR\";a:8:{s:8:\"language\";s:5:\"tr_TR\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-17 23:12:27\";s:12:\"english_name\";s:7:\"Turkish\";s:11:\"native_name\";s:8:\"Türkçe\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/tr_TR.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"tr\";i:2;s:3:\"tur\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:5:\"Devam\";}}s:5:\"ug_CN\";a:8:{s:8:\"language\";s:5:\"ug_CN\";s:7:\"version\";s:6:\"4.1.10\";s:7:\"updated\";s:19:\"2015-03-26 16:45:38\";s:12:\"english_name\";s:6:\"Uighur\";s:11:\"native_name\";s:9:\"Uyƣurqə\";s:7:\"package\";s:65:\"https://downloads.wordpress.org/translation/core/4.1.10/ug_CN.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"ug\";i:2;s:3:\"uig\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:26:\"داۋاملاشتۇرۇش\";}}s:2:\"uk\";a:8:{s:8:\"language\";s:2:\"uk\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2016-01-03 22:04:41\";s:12:\"english_name\";s:9:\"Ukrainian\";s:11:\"native_name\";s:20:\"Українська\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.4.2/uk.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"uk\";i:2;s:3:\"ukr\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:20:\"Продовжити\";}}s:2:\"vi\";a:8:{s:8:\"language\";s:2:\"vi\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-09 01:01:25\";s:12:\"english_name\";s:10:\"Vietnamese\";s:11:\"native_name\";s:14:\"Tiếng Việt\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/translation/core/4.4.2/vi.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"vi\";i:2;s:3:\"vie\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:12:\"Tiếp tục\";}}s:5:\"zh_CN\";a:8:{s:8:\"language\";s:5:\"zh_CN\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-12 22:55:08\";s:12:\"english_name\";s:15:\"Chinese (China)\";s:11:\"native_name\";s:12:\"简体中文\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/zh_CN.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"zh\";i:2;s:3:\"zho\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:6:\"继续\";}}s:5:\"zh_TW\";a:8:{s:8:\"language\";s:5:\"zh_TW\";s:7:\"version\";s:5:\"4.4.2\";s:7:\"updated\";s:19:\"2015-12-11 18:51:41\";s:12:\"english_name\";s:16:\"Chinese (Taiwan)\";s:11:\"native_name\";s:12:\"繁體中文\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.4.2/zh_TW.zip\";s:3:\"iso\";a:2:{i:1;s:2:\"zh\";i:2;s:3:\"zho\";}s:7:\"strings\";a:1:{s:8:\"continue\";s:6:\"繼續\";}}}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 205,
                'option_name' => '_transient_timeout_feed_ac0b00fe65abe10e0c5b588f3ed8c7ca',
                'option_value' => 1459139145,
                'autoload' => 'no',
            ),

            array(
                'option_id' => 206,
                'option_name' => '_transient_feed_ac0b00fe65abe10e0c5b588f3ed8c7ca',
                'option_value' => 'a:4:{s:5:\"child\";a:1:{s:0:\"\";a:1:{s:3:\"rss\";a:1:{i:0;a:6:{s:4:\"data\";s:3:\"


\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:7:\"version\";s:3:\"2.0\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:1:{s:0:\"\";a:1:{s:7:\"channel\";a:1:{i:0;a:6:{s:4:\"data\";s:49:\"
	
	
	
	
	
	
	
	
	
	
		
		
		
		
		
		
		
		
		
	\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:3:{s:0:\"\";a:7:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:14:\"WordPress News\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:26:\"https://wordpress.org/news\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:14:\"WordPress News\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:13:\"lastBuildDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 24 Mar 2016 03:50:27 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:8:\"language\";a:1:{i:0;a:5:{s:4:\"data\";s:5:\"en-US\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:9:\"generator\";a:1:{i:0;a:5:{s:4:\"data\";s:38:\"https://wordpress.org/?v=4.5-RC1-37083\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"item\";a:10:{i:0;a:6:{s:4:\"data\";s:39:\"
		
		
		
		
				
		
		

		
		
				
			\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:3:{s:0:\"\";a:6:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"WordPress 4.5 Release Candidate\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:67:\"https://wordpress.org/news/2016/03/wordpress-4-5-release-candidate/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 24 Mar 2016 03:50:27 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:8:\"category\";a:3:{i:0;a:5:{s:4:\"data\";s:11:\"Development\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:1;a:5:{s:4:\"data\";s:8:\"Releases\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:2;a:5:{s:4:\"data\";s:3:\"4.5\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"https://wordpress.org/news/?p=4165\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:344:\"The release candidate for WordPress 4.5 is now available. We&#8217;ve made 49 changes since releasing Beta 4 a week ago. RC means we think we’re done, but with millions of users and thousands of plugins and themes, it’s possible we’ve missed something. We hope to ship WordPress 4.5 on Tuesday, April 12, but we need your help [&#8230;]\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Mike Schroder\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:40:\"http://purl.org/rss/1.0/modules/content/\";a:1:{s:7:\"encoded\";a:1:{i:0;a:5:{s:4:\"data\";s:2251:\"<p>The release candidate for WordPress 4.5 is now available.</p>
<p>We&#8217;ve made <a href=\"https://core.trac.wordpress.org/log/trunk?action=stop_on_copy&amp;mode=stop_on_copy&amp;rev=37077&amp;stop_rev=37026&amp;limit=120&amp;verbose=on\">49 changes</a> since releasing Beta 4 a week ago. RC means we think we’re done, but with millions of users and thousands of plugins and themes, it’s possible we’ve missed something. We hope to ship WordPress 4.5 on <strong>Tuesday, April 12</strong>, but we need your help to get there.</p>
<p>If you haven’t tested 4.5 yet, now is the time!</p>
<p><strong>Think you&#8217;ve found a bug?</strong> Please post to the <a href=\"https://wordpress.org/support/forum/alphabeta/\">Alpha/Beta support forum</a>. If any known issues come up, you&#8217;ll be able to <a href=\"https://core.trac.wordpress.org/report/5\">find them here</a>.</p>
<p>To test WordPress 4.5, you can use the <a href=\"https://wordpress.org/plugins/wordpress-beta-tester/\">WordPress Beta Tester</a> plugin or you can <a href=\"https://wordpress.org/wordpress-4.5-RC1.zip\">download the release candidate here</a> (zip).</p>
<p>For more information about what’s new in version 4.5, check out the <a href=\"https://wordpress.org/news/2016/02/wordpress-4-5-beta-1/\">Beta 1</a>, <a href=\"https://wordpress.org/news/2016/03/wordpress-4-5-beta-2/\">Beta 2</a>, <a href=\"https://wordpress.org/news/2016/03/wordpress-4-5-beta-3/\">Beta 3</a>, and <a href=\"https://wordpress.org/news/2016/03/wordpress-4-5-beta-4/\">Beta 4</a> blog posts.</p>
<p><strong>Developers</strong>, please test your plugins and themes against WordPress 4.5 and update your plugin&#8217;s <em>Tested up to</em> version in the readme to 4.5 before next week. If you find compatibility problems, we never want to break things, so please be sure to post to the support forums so we can figure those out before the final release.</p>
<p>Be sure to <a href=\"https://make.wordpress.org/core/\">follow along the core development blog</a>, where we&#8217;ll continue to post <a href=\"https://make.wordpress.org/core/tag/dev-notes+4-5/\">notes for developers</a> for 4.5.</p>
<p><em>Free as in Freedom</em><br />
<em>It is WordPress 4.5</em><br />
<em>Also free as in beer</em></p>
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:1;a:6:{s:4:\"data\";s:42:\"
		
		
		
		
				
		
		
		

		
		
				
			\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:3:{s:0:\"\";a:6:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:20:\"WordPress 4.5 Beta 4\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:56:\"https://wordpress.org/news/2016/03/wordpress-4-5-beta-4/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 17 Mar 2016 04:30:25 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:8:\"category\";a:4:{i:0;a:5:{s:4:\"data\";s:11:\"Development\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:1;a:5:{s:4:\"data\";s:8:\"Releases\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:2;a:5:{s:4:\"data\";s:3:\"4.5\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:3;a:5:{s:4:\"data\";s:4:\"beta\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"https://wordpress.org/news/?p=4155\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:329:\"WordPress 4.5 Beta 4 is now available! This software is still in development, so we don’t recommend you run it on a production site. Consider setting up a test site just to play with the new version. To test WordPress 4.5, try the WordPress Beta Tester plugin (you’ll want “bleeding edge nightlies”). Or you can [&#8230;]\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Mike Schroder\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:40:\"http://purl.org/rss/1.0/modules/content/\";a:1:{s:7:\"encoded\";a:1:{i:0;a:5:{s:4:\"data\";s:3409:\"<p>WordPress 4.5 Beta 4 is now available!</p>
<p>This software is still in development<strong>,</strong> so we don’t recommend you run it on a production site. Consider setting up a test site just to play with the new version. To test WordPress 4.5, try the <a href=\"https://wordpress.org/plugins/wordpress-beta-tester/\" target=\"_blank\">WordPress Beta Tester</a> plugin (you’ll want “bleeding edge nightlies”). Or you can <a href=\"https://wordpress.org/wordpress-4.5-beta4.zip\" target=\"_blank\">download the beta here</a> (zip).</p>
<p>For more information on what&#8217;s new in 4.5, check out the <a href=\"https://wordpress.org/news/2016/02/wordpress-4-5-beta-1/\">Beta 1</a>, <a href=\"https://wordpress.org/news/2016/03/wordpress-4-5-beta-2/\">Beta 2</a>, and <a href=\"https://wordpress.org/news/2016/03/wordpress-4-5-beta-3/\">Beta 3</a> blog posts, along with <a href=\"https://make.wordpress.org/core/tag/4-5+dev-notes/\">in-depth field guides on make/core</a>. This is the final <a href=\"https://make.wordpress.org/core/version-4-5-project-schedule/\">planned beta</a> of WordPress 4.5, with a release candidate scheduled for next week.</p>
<p>Some of the changes in Beta 4 include:</p>
<ul>
<li>Add support for oEmbed <strong>moments and timelines from Twitter</strong> (<a href=\"https://core.trac.wordpress.org/ticket/36197\">#36197</a>).</li>
<li>More changes to better support <strong>HHVM with Imagick</strong>.<strong> </strong>Please test with HHVM setups and resizing/rotating images (<a href=\"https://core.trac.wordpress.org/ticket/35973\">#35973</a>).</li>
<li>Tightened up the <strong>Inline Link</strong> feature (<a href=\"https://core.trac.wordpress.org/ticket/33301\">#33301</a>, <a href=\"https://core.trac.wordpress.org/ticket/30468\">#30468</a>).</li>
<li>Support <code>&lt;hr&gt;</code> <strong>editor shortcut</strong> with 3 or more dashes (<code>---</code>); no spaces. To give more time to study the best shortcuts for users, text patterns for bold and italic have been removed and won&#8217;t ship with for 4.5 (<a href=\"https://core.trac.wordpress.org/ticket/33300\">#33300</a>).</li>
<li>Fixes for <strong>SSL with Responsive Images</strong>. Please test with SSL, especially on sites with mixed http/https setups (<a href=\"https://core.trac.wordpress.org/ticket/34945\">#34945</a>).</li>
<li>Allow rewrite rules to work in nested <strong>WordPress installations on IIS</strong> (<a href=\"https://core.trac.wordpress.org/ticket/35558\">#35558</a>).</li>
<li><strong>Various bug fixes</strong>. We&#8217;ve made <a href=\"https://core.trac.wordpress.org/log/?action=stop_on_copy&amp;mode=stop_on_copy&amp;rev=37025&amp;stop_rev=36932&amp;limit=200&amp;verbose=on\">almost 100 changes</a> during the last week.</li>
</ul>
<p><strong>If you think you’ve found a bug</strong>, you can post to the <a href=\"https://wordpress.org/support/forum/alphabeta\" target=\"_blank\">Alpha/Beta area</a> in the support forums. We’d love to hear from you! If you’re comfortable writing a reproducible bug report, <a href=\"https://make.wordpress.org/core/reports/\" target=\"_blank\">file one on the WordPress Trac</a>. There, you can also find <a href=\"https://core.trac.wordpress.org/tickets/major\" target=\"_blank\">a list of known bugs.</a></p>
<p>Happy testing!</p>
<p class=\"p1\"><em>Llegamos al fin</em><br />
<em>del tiempo pa&#8217; beta</em><br />
<em>¡Pruébalo Ahora!</em></p>
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:2;a:6:{s:4:\"data\";s:42:\"
		
		
		
		
				
		
		
		

		
		
				
			\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:3:{s:0:\"\";a:6:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:20:\"WordPress 4.5 Beta 3\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:56:\"https://wordpress.org/news/2016/03/wordpress-4-5-beta-3/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 10 Mar 2016 06:59:26 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:8:\"category\";a:4:{i:0;a:5:{s:4:\"data\";s:11:\"Development\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:1;a:5:{s:4:\"data\";s:8:\"Releases\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:2;a:5:{s:4:\"data\";s:3:\"4.5\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:3;a:5:{s:4:\"data\";s:4:\"beta\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"https://wordpress.org/news/?p=4128\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:329:\"WordPress 4.5 Beta 3 is now available! This software is still in development, so we don’t recommend you run it on a production site. Consider setting up a test site just to play with the new version. To test WordPress 4.5, try the WordPress Beta Tester plugin (you’ll want “bleeding edge nightlies”). Or you can [&#8230;]\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Mike Schroder\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:40:\"http://purl.org/rss/1.0/modules/content/\";a:1:{s:7:\"encoded\";a:1:{i:0;a:5:{s:4:\"data\";s:3631:\"<p>WordPress 4.5 Beta 3 is now available!</p>
<p>This software is still in development<strong>,</strong> so we don’t recommend you run it on a production site. Consider setting up a test site just to play with the new version. To test WordPress 4.5, try the <a href=\"https://wordpress.org/plugins/wordpress-beta-tester/\" target=\"_blank\">WordPress Beta Tester</a> plugin (you’ll want “bleeding edge nightlies”). Or you can <a href=\"https://wordpress.org/wordpress-4.5-beta3.zip\" target=\"_blank\">download the beta here</a> (zip).</p>
<p>For more information on what&#8217;s new in 4.5, check out the <a href=\"https://wordpress.org/news/2016/02/wordpress-4-5-beta-1/\">Beta 1</a> and <a href=\"https://wordpress.org/news/2016/03/wordpress-4-5-beta-2/\">Beta 2</a> blog posts, along with <a href=\"https://make.wordpress.org/core/tag/4-5+dev-notes/\">in-depth field guides on make/core</a>. Some of the fixes in Beta 3 include:</p>
<ul>
<li>Many <strong>Theme Logo Support</strong> (<a href=\"https://core.trac.wordpress.org/ticket/33755\">#33755</a>) fixes, including support for bundled Twenty Fifteen (<a href=\"https://core.trac.wordpress.org/ticket/35944\">#35944</a>).</li>
<li>Add <strong>Responsive Preview</strong> to theme install previewer (<a href=\"https://core.trac.wordpress.org/ticket/36017\">#36017</a>).</li>
<li>Support <strong>Imagick in HHVM</strong> (<a href=\"https://core.trac.wordpress.org/ticket/35973\">#35973</a>).</li>
<li><strong>Whitelist IPTC, XMP, and EXIF profiles</strong> from <code>strip_meta()</code> to maintain authorship, copyright, license, and image orientation (<a href=\"https://core.trac.wordpress.org/ticket/28634\">#28634</a>).</li>
<li>Support <strong>Windows shares/DFS roots</strong> in <code>wp_normalize_path()</code> (<a href=\"https://core.trac.wordpress.org/ticket/35996\">#35996</a>).</li>
<li><span class=\"s1\">New installs default to <strong>generating secret keys and salts locally</strong> instead of relying on the <span class=\"s2\">WordPress.org</span> API. Please test installing WP in situations where it can’t connect to the internet <span class=\"s1\">(like on a ?, ✈️, or ?) </span></span><span class=\"s1\">(<a href=\"https://core.trac.wordpress.org/ticket/35290\">#35290</a>).</span></li>
<li>OPTIONS requests to REST API should <strong>return Allow header</strong> (<a href=\"https://core.trac.wordpress.org/ticket/35975\">#35975</a>).</li>
<li>Upgrade twemoji.js to version 2 (<a href=\"https://core.trac.wordpress.org/ticket/36059\">#36059</a>) and add extra IE11 compatibility (<a href=\"https://core.trac.wordpress.org/ticket/35977\">#35977</a>) for <strong>Emoji</strong>.</li>
<li><strong>Various bug fixes</strong>. We&#8217;ve made <a href=\"https://core.trac.wordpress.org/log/?action=stop_on_copy&amp;mode=stop_on_copy&amp;rev=36931&amp;stop_rev=36814&amp;limit=200&amp;verbose=on\">more than 100 changes</a> during the last week.</li>
</ul>
<p><strong>If you think you’ve found a bug</strong>, you can post to the <a href=\"https://wordpress.org/support/forum/alphabeta\" target=\"_blank\">Alpha/Beta area</a> in the support forums. We’d love to hear from you! If you’re comfortable writing a reproducible bug report, <a href=\"https://make.wordpress.org/core/reports/\" target=\"_blank\">file one on the WordPress Trac</a>. There, you can also find <a href=\"https://core.trac.wordpress.org/tickets/major\" target=\"_blank\">a list of known bugs.</a></p>
<p>Happy testing!</p>
<p class=\"p1\"><em><span class=\"s1\">Beta one, two, three<br />
</span><span class=\"s1\">so many bugs have been fixed<br />
</span><span class=\"s2\">Closer now; four, five.</span></em></p>
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:3;a:6:{s:4:\"data\";s:39:\"
		
		
		
		
				
		
		

		
		
				
			\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:3:{s:0:\"\";a:6:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:20:\"WordPress 4.5 Beta 2\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:56:\"https://wordpress.org/news/2016/03/wordpress-4-5-beta-2/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 03 Mar 2016 04:55:35 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:8:\"category\";a:3:{i:0;a:5:{s:4:\"data\";s:11:\"Development\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:1;a:5:{s:4:\"data\";s:8:\"Releases\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:2;a:5:{s:4:\"data\";s:3:\"4.5\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"https://wordpress.org/news/?p=4116\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:329:\"WordPress 4.5 Beta 2 is now available! This software is still in development, so we don’t recommend you run it on a production site. Consider setting up a test site just to play with the new version. To test WordPress 4.5, try the WordPress Beta Tester plugin (you’ll want “bleeding edge nightlies”). Or you can [&#8230;]\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Mike Schroder\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:40:\"http://purl.org/rss/1.0/modules/content/\";a:1:{s:7:\"encoded\";a:1:{i:0;a:5:{s:4:\"data\";s:2370:\"<p>WordPress 4.5 Beta 2 is now available!</p>
<p>This software is still in development<strong>,</strong> so we don’t recommend you run it on a production site. Consider setting up a test site just to play with the new version. To test WordPress 4.5, try the <a href=\"https://wordpress.org/plugins/wordpress-beta-tester/\" target=\"_blank\">WordPress Beta Tester</a> plugin (you’ll want “bleeding edge nightlies”). Or you can <a href=\"https://wordpress.org/wordpress-4.5-beta2.zip\" target=\"_blank\">download the beta here</a> (zip).</p>
<p>For more information on what&#8217;s new in 4.5, check out the <a href=\"https://wordpress.org/news/2016/02/wordpress-4-5-beta-1/\">Beta 1 blog post</a>. Some of the fixes in Beta 2 include:</p>
<ul>
<li>Added <a href=\"https://core.trac.wordpress.org/ticket/33300\">Horizontal Rule (HR) editing shortcut</a> and <a href=\"https://core.trac.wordpress.org/ticket/28612\">dismissible &#8220;Paste as Text&#8221; notice</a> in <strong>TinyMCE</strong>.</li>
<li><strong>Selective Refresh</strong> support is <a href=\"https://core.trac.wordpress.org/changeset/36797\">enabled for core themes titles and taglines</a>, which allows shift-click to focus on controls and PHP filters to apply in the preview.</li>
<li>Resolved a fatal error on <strong>image upload</strong> when ImageMagick could not complete stripping meta during resize (<a href=\"https://core.trac.wordpress.org/ticket/33642\">#33642</a>).</li>
<li><strong>Various bug fixes</strong>. We&#8217;ve made <a href=\"https://core.trac.wordpress.org/log/?action=stop_on_copy&amp;mode=stop_on_copy&amp;rev=36813&amp;stop_rev=36701&amp;limit=200&amp;verbose=on\">just over 100 changes</a> in the last week.</li>
</ul>
<p><strong>If you think you’ve found a bug</strong>, you can post to the <a href=\"https://wordpress.org/support/forum/alphabeta\" target=\"_blank\">Alpha/Beta area</a> in the support forums. We’d love to hear from you! If you’re comfortable writing a reproducible bug report, <a href=\"https://make.wordpress.org/core/reports/\" target=\"_blank\">file one on the WordPress Trac</a>. There, you can also find <a href=\"https://core.trac.wordpress.org/tickets/major\" target=\"_blank\">a list of known bugs.</a></p>
<p>Happy testing!</p>
<p><em>It&#8217;s peer pressure time</em><br />
<em>Testing: all cool kids do it</em><br />
<em>Help find ALL the bugs!</em></p>
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:4;a:6:{s:4:\"data\";s:33:\"
		
		
		
		
				

		
		
				
			\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:3:{s:0:\"\";a:6:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"Contributor Weekend: One-Hour Video\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:70:\"https://wordpress.org/news/2016/02/contributor-weekend-one-hour-video/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 26 Feb 2016 19:36:30 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:8:\"category\";a:1:{i:0;a:5:{s:4:\"data\";s:9:\"Community\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"https://wordpress.org/news/?p=4112\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:349:\"It&#8217;s time for our second global contributor weekend, and this time we&#8217;re focusing on the video team. For this month&#8217;s challenge, in honor of it being our second month, you have two options for how you can participate! The challenge for this month overall is to work with at least one hour worth of WordCamp video, which [&#8230;]\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:3:\"Jen\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:40:\"http://purl.org/rss/1.0/modules/content/\";a:1:{s:7:\"encoded\";a:1:{i:0;a:5:{s:4:\"data\";s:2590:\"<p>It&#8217;s time for our second global contributor weekend, and this time we&#8217;re focusing on the <a href=\"https://make.wordpress.org/tv\">video team</a>. For this month&#8217;s challenge, in honor of it being our second month, you have two options for how you can participate! The challenge for this month overall is to work with at least one hour worth of WordCamp video, which you can do by either creating subtitles or editing the video file in preparation for upload to <a href=\"http://WordPress.tv\">WordPress.tv</a>.</p>
<p>One of the great things about contributing to the video team is that you get to learn so much, since all the work basically involves watching WordCamp presentation videos. Subtitling is a doubly important need, as it is needed to make all those WordCamp videos accessible to people who are deaf or hard of hearing and can&#8217;t listen to the audio track, as well as making it possible for the videos to be consumed (in some cases after subtitle translation) by people who speak different languages.</p>
<p>The challenge will last from Saturday, February 27, 2016 through Sunday, February 28, 2016, and the results will be reviewed afterward by members of the video team. If you enjoy the challenge, the video team would be very excited to welcome you into their ranks! Interested? <a href=\"https://wp.me/P6onIa-28D\">Here&#8217;s how to participate</a>.</p>
<h3>What About Last Month?</h3>
<p>In January, the inaugural contributor weekend was focused on the support forums. That challenge had 73 participants, including 10 people who provided 20 or more correct answers to open support threads, thereby winning the challenge. Congratulations to Harris Anastasiadis, Ahmad Awais, Takis Bouyouris, Phil Erb, Eric Gunawan, Jackie McBride, Diana Nichols, Kostas Nicolacopoulos, Juhi Saxena, and Sarah Semark! To them and to everyone else who participated, thank you <strong>so much</strong> for your efforts. Every answer helps, and over the course of this contributor weekend, these amazing volunteers responded to <strong>800 support threads</strong>. The support forums queue of requests with no replies went from 28 pages to 7 pages &#8212; that was an incredible success, of which every participant was a part!</p>
<p>So head on over to see how to <a href=\"https://wp.me/P6onIa-28D\">get involved with the one-hour video challenge</a> this weekend, and help us make next month&#8217;s post just as impressive! <img src=\"https://s.w.org/images/core/emoji/72x72/1f642.png\" alt=\"?\" class=\"wp-smiley\" style=\"height: 1em; max-height: 1em;\" /></p>
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:5;a:6:{s:4:\"data\";s:41:\"
		
		
		
		
				
		
		

		
		
				
	

		\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:3:{s:0:\"\";a:7:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:20:\"WordPress 4.5 Beta 1\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:56:\"https://wordpress.org/news/2016/02/wordpress-4-5-beta-1/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 25 Feb 2016 03:27:13 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:8:\"category\";a:3:{i:0;a:5:{s:4:\"data\";s:11:\"Development\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:1;a:5:{s:4:\"data\";s:8:\"Releases\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:2;a:5:{s:4:\"data\";s:3:\"4.5\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"https://wordpress.org/news/?p=4080\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:329:\"WordPress 4.5 Beta 1 is now available! This software is still in development, so we don’t recommend you run it on a production site. Consider setting up a test site just to play with the new version. To test WordPress 4.5, try the WordPress Beta Tester plugin (you’ll want “bleeding edge nightlies”). Or you can [&#8230;]\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:9:\"enclosure\";a:2:{i:0;a:5:{s:4:\"data\";s:0:\"\";s:7:\"attribs\";a:1:{s:0:\"\";a:3:{s:3:\"url\";s:62:\"https://wordpress.org/news/files/2016/02/wp-inline-linking.mp4\";s:6:\"length\";s:6:\"409018\";s:4:\"type\";s:9:\"video/mp4\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:1;a:5:{s:4:\"data\";s:0:\"\";s:7:\"attribs\";a:1:{s:0:\"\";a:3:{s:3:\"url\";s:62:\"https://wordpress.org/news/files/2016/02/wp-editor-updates.mp4\";s:6:\"length\";s:6:\"231953\";s:4:\"type\";s:9:\"video/mp4\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Mike Schroder\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:40:\"http://purl.org/rss/1.0/modules/content/\";a:1:{s:7:\"encoded\";a:1:{i:0;a:5:{s:4:\"data\";s:5453:\"<p>WordPress 4.5 Beta 1 is now available!</p>
<p><strong>This software is still in development,</strong> so we don’t recommend you run it on a production site. Consider setting up a test site just to play with the new version. To test WordPress 4.5, try the <a href=\"https://wordpress.org/plugins/wordpress-beta-tester/\" target=\"_blank\">WordPress Beta Tester</a> plugin (you’ll want “bleeding edge nightlies”). Or you can <a href=\"https://wordpress.org/wordpress-4.5-beta1.zip\" target=\"_blank\">download the beta here</a> (zip).</p>
<p>WordPress 4.5 is slated for release on <a href=\"https://make.wordpress.org/core/version-4-5-project-schedule/\" target=\"_blank\">April 12</a>, but to get there, we need your help testing what we have been working on, including:</p>
<ul>
<li><strong>Responsive Preview of your site in the Customizer </strong>(<a href=\"https://core.trac.wordpress.org/ticket/31195\">#31195</a>) &#8211; See how your site looks in <a href=\"https://make.wordpress.org/core/2016/01/28/previewing-site-responsiveness-in-the-customizer/\">mobile, tablet, and desktop</a> contexts before making changes to its appearance.</li>
<li><strong>Theme Logo Support </strong>(<a href=\"https://core.trac.wordpress.org/ticket/33755\">#33755</a>) &#8211; Native support for a <a href=\"https://make.wordpress.org/core/2016/02/24/theme-logo-support/\">theme logo within the Customizer</a>.</li>
<li><strong>Inline Link Editing</strong> (<a href=\"https://core.trac.wordpress.org/ticket/33301\">#33301</a>) &#8211; Within the visual editor, <a href=\"https://wordpress.org/news/files/2016/02/wp-inline-linking.mp4\">edit links inline</a> for a smoother workflow.</li>
<li><strong>Additional Editor Shortcuts</strong> (<a href=\"https://core.trac.wordpress.org/ticket/33300\">#33300</a>) &#8211; <a href=\"https://wordpress.org/news/files/2016/02/wp-editor-updates.mp4\">Includes a few new shortcuts</a>, like <code>`..`</code> for <code>code</code> and <code>**..**</code> for <strong>bold</strong>.</li>
<li><strong>Comment Moderation Improvements </strong>(<a href=\"https://core.trac.wordpress.org/ticket/34133\">#34133</a>) &#8211; An enhanced experience when moderating comments, including preview with rendered formatting.</li>
<li><strong>Optimization of Image Generation </strong>(<a href=\"https://core.trac.wordpress.org/ticket/33642\">#33642</a>) &#8211; Image sizes are generated more efficiently and remove unneeded meta, while still including color profiles in Imagick, for reduced sizes of up to 50% with near identical visual quality.</li>
</ul>
<p>&nbsp;</p>
<p>There have been changes for developers to explore as well:</p>
<ul>
<li><strong>Selective Refresh </strong>(<a href=\"https://core.trac.wordpress.org/ticket/27355\">#27355</a>)<strong> </strong>&#8211; A <a href=\"https://make.wordpress.org/core/2016/02/16/selective-refresh-in-the-customizer/\">comprehensive framework</a> for rendering parts of the customizer preview in real time. Theme and plugin authors should test their widgets specifically for compatibility with selective refresh, and note that it <a href=\"https://core.trac.wordpress.org/ticket/35855\">may ultimately be opt-in for 4.5</a>.</li>
<li><strong>Backbone and Underscore updated to latest versions</strong> (<a href=\"https://core.trac.wordpress.org/ticket/34350\">#34350</a>)<b> </b>&#8211; Backbone is upgraded from 1.1.2 to 1.2.3 and Underscore is upgraded from 1.6.0 to 1.8.3. See the <a href=\"https://make.wordpress.org/core/2016/02/17/backbone-and-underscore-updated-to-latest-versions/\">this post</a> for important changes.</li>
<li><strong>Embed templates</strong> (<a href=\"https://core.trac.wordpress.org/ticket/34561\">#34561</a>) &#8211; Embed templates were split into parts and can now be directly overridden by themes via the template hierarchy.</li>
<li><strong>New WP_Site class</strong> (<a href=\"https://core.trac.wordpress.org/ticket/32450\">#32450</a>) &#8211; More object-oriented approach for managing sites in Multisite</li>
<li><strong>Script loader</strong> (<a href=\"https://core.trac.wordpress.org/ticket/14853\">#14853</a>, <a href=\"https://core.trac.wordpress.org/ticket/35873\">#35873</a>) &#8211; Introduces <code>wp_add_inline_script()</code> for including inline JavaScript just like <code>wp_add_inline_style()</code> works for CSS, and better support for script header/footer dependencies.</li>
</ul>
<p>If you want a more in-depth view of what major changes have made it into 4.5, <a href=\"https://make.wordpress.org/core/tag/4-5/\" target=\"_blank\">check out all 4.5-tagged posts</a> on the main development blog, or check out a <a href=\"https://core.trac.wordpress.org/query?status=closed&amp;resolution=fixed&amp;milestone=4.5&amp;group=component&amp;order=priority\">list of everything</a> that&#8217;s changed.</p>
<p><strong>If you think you’ve found a bug</strong>, you can post to the <a href=\"https://wordpress.org/support/forum/alphabeta\" target=\"_blank\">Alpha/Beta area</a> in the support forums. We’d love to hear from you! If you’re comfortable writing a reproducible bug report, <a href=\"https://make.wordpress.org/core/reports/\" target=\"_blank\">file one on the WordPress Trac</a>. There, you can also find <a href=\"https://core.trac.wordpress.org/tickets/major\" target=\"_blank\">a list of known bugs.</a></p>
<p>Happy testing!</p>
<p><em>A wonderful day</em><br />
<em>is one that brings new WordPress</em><br />
<em>Four Five Beta One</em></p>
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:6;a:6:{s:4:\"data\";s:39:\"
		
		
		
		
				
		
		

		
		
				
			\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:3:{s:0:\"\";a:6:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:30:\"Experiment: WordCamp Incubator\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:65:\"https://wordpress.org/news/2016/02/experiment-wordcamp-incubator/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 18 Feb 2016 19:28:32 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:8:\"category\";a:3:{i:0;a:5:{s:4:\"data\";s:9:\"Community\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:1;a:5:{s:4:\"data\";s:6:\"Events\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:2;a:5:{s:4:\"data\";s:8:\"WordCamp\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"https://wordpress.org/news/?p=4076\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:399:\"WordCamps are locally-organized WordPress conferences that happen all over the world (and are so fun). Sometimes people don&#8217;t realize that WordCamps are organized by local volunteers rather than a central organization, and they contact us asking, &#8220;Can you bring WordCamp to my city?&#8221; When this happens, we always suggest they start with a meetup group, and think about [&#8230;]\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:3:\"Jen\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:40:\"http://purl.org/rss/1.0/modules/content/\";a:1:{s:7:\"encoded\";a:1:{i:0;a:5:{s:4:\"data\";s:2989:\"<p><a href=\"http://wordcamp.org\">WordCamps</a> are locally-organized WordPress conferences that happen all over the world (and are so fun). Sometimes people don&#8217;t realize that WordCamps are organized by local volunteers rather than a central organization, and they contact us asking, &#8220;Can you bring WordCamp to my city?&#8221; When this happens, we always suggest they start with a meetup group, and think about organizing a WordCamp themselves after their group has been active for a few months. We emphasize that WordCamps are locally-organized events, not something that the central <a href=\"https://make.wordpress.org/community\">community team</a> plans from afar.</p>
<p>This has been successful in many areas &#8212; there are currently 241 meetup groups on our meetup.com chapter program! In some regions, though, enthusiastic volunteers have had more of a challenge getting things started. Because of this, we&#8217;re going to try an experiment this year called the WordCamp Incubator.</p>
<p>The intention of the incubator program is to help spread WordPress to underserved areas through providing more significant organizing support for a first event. In practical terms, this experiment means we&#8217;ll be choosing three cities in 2016 where there is not an active WordPress community &#8212; but where it seems like there is a lot of potential and where there are some people excited to become organizers &#8212; and will help to organize their first WordCamp. These WordCamps will be small, one-day, one-track events geared toward the goal of generating interest and getting people involved in creating an ongoing local community.*</p>
<p>So, where should we do these three events?  If you have always wanted a WordCamp in your city but haven&#8217;t been able to get a meetup group going, this is a great opportunity. We will be taking applications for the next week, then will get in touch with everyone who applied to discuss the possibilities. We will announce the  cities chosen by the end of March.</p>
<p>To apply, <a href=\"http://wordpressdotorg.polldaddy.com/s/wordcamp-incubator-application\">fill in the application</a> by February 26, 2016. You don&#8217;t need to have any specific information handy, it&#8217;s just a form to let us know you&#8217;re interested. You can apply to nominate your city even if you don&#8217;t want to be the main organizer, but for this experiment  we will need local liaisons and volunteers, so please only nominate cities where you live or work so that we have at least one local connection to begin.</p>
<p>Thanks, and good luck!</p>
<p><em><strong>* </strong>For the record, that describes the ideal first WordCamp even if you have an active meetup &#8212; there&#8217;s no need to wait until your group is big enough to support a large multi-day event, and small events are a lot of fun because everyone has a chance to be involved and get to know most of the other attendees.</em></p>
<p>&nbsp;</p>
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:7;a:6:{s:4:\"data\";s:36:\"
		
		
		
		
				
		

		
		
				
			\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:3:{s:0:\"\";a:6:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:48:\"WordPress 4.4.2 Security and Maintenance Release\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:84:\"https://wordpress.org/news/2016/02/wordpress-4-4-2-security-and-maintenance-release/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Tue, 02 Feb 2016 17:57:13 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:8:\"category\";a:2:{i:0;a:5:{s:4:\"data\";s:8:\"Releases\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:1;a:5:{s:4:\"data\";s:8:\"Security\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"https://wordpress.org/news/?p=4065\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:375:\"WordPress 4.4.2 is now available. This is a security release for all previous versions and we strongly encourage you to update your sites immediately. WordPress versions 4.4.1 and earlier are affected by two security issues: a possible SSRF for certain local URIs, reported by Ronni Skansing; and an open redirection attack, reported by Shailesh Suthar. Thank you [&#8230;]\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Samuel Sidler\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:40:\"http://purl.org/rss/1.0/modules/content/\";a:1:{s:7:\"encoded\";a:1:{i:0;a:5:{s:4:\"data\";s:2072:\"<p>WordPress 4.4.2 is now available. This is a <strong>security release</strong> for all previous versions and we strongly encourage you to update your sites immediately.</p>
<p>WordPress versions 4.4.1 and earlier are affected by two security issues: a possible SSRF for certain local URIs, reported by <a href=\"https://www.linkedin.com/in/ronni-skansing-36143b65\">Ronni Skansing</a>; and an open redirection attack, reported by <a href=\"https://twitter.com/shailesh4594\">Shailesh Suthar</a>.</p>
<p>Thank you to both reporters for practicing <a href=\"https://make.wordpress.org/core/handbook/testing/reporting-security-vulnerabilities/\">responsible disclosure</a>.</p>
<p>In addition to the security issues above, WordPress 4.4.2 fixes 17 bugs from 4.4 and 4.4.1. For more information, see the <a href=\"https://codex.wordpress.org/Version_4.4.2\">release notes</a> or consult the <a href=\"https://core.trac.wordpress.org/query?milestone=4.4.2\">list of changes</a>.</p>
<p><a href=\"https://wordpress.org/download/\">Download WordPress 4.4.2</a> or venture over to Dashboard → Updates and simply click “Update Now.” Sites that support automatic background updates are already beginning to update to WordPress 4.4.2.</p>
<p>Thanks to everyone who contributed to 4.4.2:</p>
<p><a href=\"https://profiles.wordpress.org/afercia\">Andrea Fercia</a>, <a href=\"https://profiles.wordpress.org/berengerzyla\">berengerzyla</a>, <a href=\"https://profiles.wordpress.org/boonebgorges\">Boone Gorges</a>, <a href=\"https://profiles.wordpress.org/chandrapatel\">Chandra Patel</a>, <a href=\"https://profiles.wordpress.org/chriscct7\">Chris Christoff</a>, <a href=\"https://profiles.wordpress.org/dd32\">Dion Hulse</a>, <a href=\"https://profiles.wordpress.org/ocean90\">Dominik Schilling</a>, <a href=\"https://profiles.wordpress.org/firebird75\">firebird75</a>, <a href=\"https://profiles.wordpress.org/ivankristianto\">Ivan Kristianto</a>, <a href=\"https://profiles.wordpress.org/jmdodd\">Jennifer M. Dodd</a>, <a href=\"https://profiles.wordpress.org/salvoaranzulla\">salvoaranzulla</a></p>
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:8;a:6:{s:4:\"data\";s:42:\"
		
		
		
		
				
		
		
		

		
		
				
			\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:3:{s:0:\"\";a:6:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"Contributor Weekend: Support Forums\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:70:\"https://wordpress.org/news/2016/01/contributor-weekend-support-forums/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 22 Jan 2016 18:31:49 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:8:\"category\";a:4:{i:0;a:5:{s:4:\"data\";s:9:\"Community\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:1;a:5:{s:4:\"data\";s:6:\"Events\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:2;a:5:{s:4:\"data\";s:12:\"contributors\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:3;a:5:{s:4:\"data\";s:14:\"Support Forums\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"https://wordpress.org/news/?p=4055\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:351:\"Our first global contributor drive is coming up next weekend, January 30-31, 2016, and we want you to be involved! Many of our current contributors first got involved at a Contributor Day at a WordCamp or WordPress Meetup event near them, but not everyone has had that opportunity, so we&#8217;re trying to create an online experience that [&#8230;]\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:3:\"Jen\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:40:\"http://purl.org/rss/1.0/modules/content/\";a:1:{s:7:\"encoded\";a:1:{i:0;a:5:{s:4:\"data\";s:2112:\"<p>Our first global contributor drive is coming up next weekend, January 30-31, 2016, and we want you to be involved!</p>
<p>Many of our current contributors first got involved at a Contributor Day at a <a href=\"http://wordcamp.org\">WordCamp</a> or <a href=\"http://www.meetup.com/pro/wordpress/\">WordPress Meetup</a> event near them, but not everyone has had that opportunity, so we&#8217;re trying to create an online experience that will give new contributors the same kind of live support and group dynamic. We&#8217;ll be doing these as weekend challenges rather than one-day events so that WordPress users all over the world can participate without worrying about pesky time zones, but each challenge will be designed to be completed within a few hours, comparable to an in-person Contributor Day.</p>
<p>Our inaugural Contributor Weekend is focused on the <a href=\"https://make.wordpress.org/support\">Support Team</a> &#8212; the folks who volunteer their time to help people with WordPress questions in the <a href=\"https://wordpress.org/support\">support forums</a> and <a href=\"https://make.wordpress.org/support/irc-support-channel/\">IRC</a>. Over the two day span, forum moderators will be available online to help new contributors and answer questions as needed. The challenge this month is called <em>20 Questions;</em> your mission (should you choose to accept it) is to help WordPress users by answering 20 forum support requests over the course of the weekend.</p>
<p>You can participate on your own, or you can get together with other people from your local meetup group and work on it together. Working together in person is really fun, so we highly recommend trying to get some folks together if you&#8217;re able, but if that&#8217;s not possible you can still connect to other participants online. Either way, this is a great way to give back to the WordPress project and have some fun helping people at the same time.</p>
<p>Interested? <a href=\"https://make.wordpress.org/support/20-questions/\">Get the details on how to participate</a>.</p>
<p>Hope to see you next weekend!</p>
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:9;a:6:{s:4:\"data\";s:39:\"
		
		
		
		
				
		
		

		
		
				
			\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:3:{s:0:\"\";a:6:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:48:\"WordPress 4.4.1 Security and Maintenance Release\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:84:\"https://wordpress.org/news/2016/01/wordpress-4-4-1-security-and-maintenance-release/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Wed, 06 Jan 2016 20:07:41 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:8:\"category\";a:3:{i:0;a:5:{s:4:\"data\";s:8:\"Releases\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:1;a:5:{s:4:\"data\";s:8:\"Security\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}i:2;a:5:{s:4:\"data\";s:3:\"4.4\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"https://wordpress.org/news/?p=4041\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:376:\"WordPress 4.4.1 is now available. This is a security release for all previous versions and we strongly encourage you to update your sites immediately. WordPress versions 4.4 and earlier are affected by a cross-site scripting vulnerability that could allow a site to be compromised. This was reported by Crtc4L. There were also several non-security bug fixes: Emoji [&#8230;]\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:12:\"Aaron Jorbin\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:40:\"http://purl.org/rss/1.0/modules/content/\";a:1:{s:7:\"encoded\";a:1:{i:0;a:5:{s:4:\"data\";s:5153:\"<p>WordPress 4.4.1 is now available. This is a <strong>security release</strong> for all previous versions and we strongly encourage you to update your sites immediately.</p>
<p>WordPress versions 4.4 and earlier are affected by a cross-site scripting vulnerability that could allow a site to be compromised. This was <a href=\"https://make.wordpress.org/core/handbook/reporting-security-vulnerabilities/\">reported</a> by <a href=\"https://hackerone.com/crtc4l\">Crtc4L</a>.</p>
<p>There were also several non-security bug fixes:</p>
<ul>
<li>Emoji support has been updated to include all of the latest emoji characters, including the new diverse emoji! <img src=\"https://s.w.org/images/core/emoji/72x72/1f44d.png\" alt=\"?\" class=\"wp-smiley\" style=\"height: 1em; max-height: 1em;\" /><img src=\"https://s.w.org/images/core/emoji/72x72/1f3ff.png\" alt=\"?\" class=\"wp-smiley\" style=\"height: 1em; max-height: 1em;\" /><img src=\"https://s.w.org/images/core/emoji/72x72/1f44c.png\" alt=\"?\" class=\"wp-smiley\" style=\"height: 1em; max-height: 1em;\" /><img src=\"https://s.w.org/images/core/emoji/72x72/1f3fd.png\" alt=\"?\" class=\"wp-smiley\" style=\"height: 1em; max-height: 1em;\" /><img src=\"https://s.w.org/images/core/emoji/72x72/1f44f.png\" alt=\"?\" class=\"wp-smiley\" style=\"height: 1em; max-height: 1em;\" /><img src=\"https://s.w.org/images/core/emoji/72x72/1f3fc.png\" alt=\"?\" class=\"wp-smiley\" style=\"height: 1em; max-height: 1em;\" /></li>
<li>Some sites with older versions of OpenSSL installed were unable to communicate with other services provided through some plugins.</li>
<li>If a post URL was ever re-used, the site could redirect to the wrong post.</li>
</ul>
<p>WordPress 4.4.1 fixes 52 bugs from 4.4. For more information, see the <a href=\"https://codex.wordpress.org/Version_4.4.1\">release notes</a> or consult the <a href=\"https://core.trac.wordpress.org/query?milestone=4.4.1\">list of changes</a>.</p>
<p><a href=\"https://wordpress.org/download/\">Download WordPress 4.4.1</a> or venture over to Dashboard → Updates and simply click “Update Now.” Sites that support automatic background updates are already beginning to update to WordPress 4.4.1.</p>
<p>Thanks to everyone who contributed to 4.4.1:</p>
<p><a href=\"https://profiles.wordpress.org/aaroncampbell\">Aaron D. Campbell</a>, <a href=\"https://profiles.wordpress.org/jorbin\">Aaron Jorbin</a>, <a href=\"https://profiles.wordpress.org/afercia\">Andrea Fercia</a>, <a href=\"https://profiles.wordpress.org/nacin\">Andrew Nacin</a>, <a href=\"https://profiles.wordpress.org/azaozz\">Andrew Ozz</a>, <a href=\"https://profiles.wordpress.org/boonebgorges\">Boone Gorges</a>, <a href=\"https://profiles.wordpress.org/Compute\">Compute</a>, <a href=\"https://profiles.wordpress.org/redsweater\">Daniel Jalkut (Red Sweater)</a>, <a href=\"https://profiles.wordpress.org/DvanKooten\">Danny van Kooten</a>, <a href=\"https://profiles.wordpress.org/dd32\">Dion Hulse</a>, <a href=\"https://profiles.wordpress.org/ocean90\">Dominik Schilling (ocean90)</a>, <a href=\"https://profiles.wordpress.org/dossy\">Dossy Shiobara</a>, <a href=\"https://profiles.wordpress.org/eherman24\">Evan Herman</a>, <a href=\"https://profiles.wordpress.org/pento\">Gary Pendergast</a>, <a href=\"https://profiles.wordpress.org/gblsm\">gblsm</a>, <a href=\"https://profiles.wordpress.org/hnle\">Hinaloe</a>, <a href=\"https://profiles.wordpress.org/igmoweb\">Ignacio Cruz Moreno</a>, <a href=\"https://profiles.wordpress.org/jadpm\">jadpm</a>, <a href=\"https://profiles.wordpress.org/jeffpyebrookcom/\">Jeff Pye Brook</a>, <a href=\"https://profiles.wordpress.org/joemcgill\">Joe McGill</a>, <a href=\"https://profiles.wordpress.org/johnbillion\">John Blackbourn</a>, <a href=\"https://profiles.wordpress.org/JPr\">jpr</a>, <a href=\"https://profiles.wordpress.org/obenland\">Konstantin Obenland</a>, <a href=\"https://profiles.wordpress.org/KrissieV\">KrissieV</a>, <a href=\"https://profiles.wordpress.org/tyxla\">Marin Atanasov</a>, <a href=\"https://profiles.wordpress.org/wp-architect\">Matthew Ell</a>, <a href=\"https://profiles.wordpress.org/meitar\">Meitar</a>, <a href=\"https://profiles.wordpress.org/swissspidy\">Pascal Birchler</a>, <a href=\"https://profiles.wordpress.org/peterwilsoncc\">Peter Wilson</a>, <a href=\"https://profiles.wordpress.org/rogerhub\">Roger Chen</a>, <a href=\"https://profiles.wordpress.org/rmccue\">Ryan McCue</a>, <a href=\"https://profiles.wordpress.org/salcode\">Sal Ferrarello</a>, <a href=\"https://profiles.wordpress.org/wonderboymusic\">Scott Taylor</a>, <a href=\"https://profiles.wordpress.org/scottbrownconsulting\">scottbrownconsulting</a>, <a href=\"https://profiles.wordpress.org/SergeyBiryukov\">Sergey Biryukov</a>, <a href=\"https://profiles.wordpress.org/ShinichiN\">Shinichi Nishikawa</a>, <a href=\"https://profiles.wordpress.org/smerriman\">smerriman</a>, <a href=\"https://profiles.wordpress.org/netweb\">Stephen Edgar</a>, <a href=\"https://profiles.wordpress.org/stephenharris\">Stephen Harris</a>, <a href=\"https://profiles.wordpress.org/tharsheblows\">tharsheblows</a>, <a href=\"https://profiles.wordpress.org/voldemortensen\">voldemortensen</a>, and <a href=\"https://profiles.wordpress.org/webaware\">webaware</a>.</p>
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}}}s:27:\"http://www.w3.org/2005/Atom\";a:1:{s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:0:\"\";s:7:\"attribs\";a:1:{s:0:\"\";a:3:{s:4:\"href\";s:32:\"https://wordpress.org/news/feed/\";s:3:\"rel\";s:4:\"self\";s:4:\"type\";s:19:\"application/rss+xml\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:44:\"http://purl.org/rss/1.0/modules/syndication/\";a:2:{s:12:\"updatePeriod\";a:1:{i:0;a:5:{s:4:\"data\";s:6:\"hourly\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:15:\"updateFrequency\";a:1:{i:0;a:5:{s:4:\"data\";s:1:\"1\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}}}}}}}}s:4:\"type\";i:128;s:7:\"headers\";a:10:{s:6:\"server\";s:5:\"nginx\";s:4:\"date\";s:29:\"Sun, 27 Mar 2016 16:25:45 GMT\";s:12:\"content-type\";s:34:\"application/rss+xml; charset=UTF-8\";s:10:\"connection\";s:5:\"close\";s:25:\"strict-transport-security\";s:11:\"max-age=360\";s:6:\"x-olaf\";s:3:\"⛄\";s:13:\"last-modified\";s:29:\"Thu, 24 Mar 2016 03:50:27 GMT\";s:4:\"link\";s:63:\"<https://wordpress.org/news/wp-json/>; rel=\"https://api.w.org/\"\";s:15:\"x-frame-options\";s:10:\"SAMEORIGIN\";s:4:\"x-nc\";s:11:\"HIT lax 249\";}s:5:\"build\";s:14:\"20130910210210\";}',
                'autoload' => 'no',
            ),

            array(
                'option_id' => 207,
                'option_name' => '_transient_timeout_feed_mod_ac0b00fe65abe10e0c5b588f3ed8c7ca',
                'option_value' => 1459139145,
                'autoload' => 'no',
            ),

            array(
                'option_id' => 208,
                'option_name' => '_transient_feed_mod_ac0b00fe65abe10e0c5b588f3ed8c7ca',
                'option_value' => 1459095945,
                'autoload' => 'no',
            ),

            array(
                'option_id' => 209,
                'option_name' => '_transient_timeout_feed_d117b5738fbd35bd8c0391cda1f2b5d9',
                'option_value' => 1459139147,
                'autoload' => 'no',
            ),

            array(
                'option_id' => 210,
                'option_name' => '_transient_feed_d117b5738fbd35bd8c0391cda1f2b5d9',
                'option_value' => 'a:4:{s:5:\"child\";a:1:{s:0:\"\";a:1:{s:3:\"rss\";a:1:{i:0;a:6:{s:4:\"data\";s:3:\"


\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:7:\"version\";s:3:\"2.0\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:1:{s:0:\"\";a:1:{s:7:\"channel\";a:1:{i:0;a:6:{s:4:\"data\";s:61:\"
	
	
	
	




















































\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:1:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:16:\"WordPress Planet\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://planet.wordpress.org/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:8:\"language\";a:1:{i:0;a:5:{s:4:\"data\";s:2:\"en\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:47:\"WordPress Planet - http://planet.wordpress.org/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"item\";a:50:{i:0;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:49:\"Post Status: WordPress and SaaS — Draft podcast\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"https://poststatus.com/?p=23047\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:52:\"https://poststatus.com/wordpress-saas-draft-podcast/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:2616:\"<p>Welcome to the Post Status <a href=\"https://poststatus.com/category/draft\">Draft podcast</a>, which you can find <a href=\"https://itunes.apple.com/us/podcast/post-status-draft-wordpress/id976403008\">on iTunes</a>, <a href=\"http://www.stitcher.com/podcast/krogsgard/post-status-draft-wordpress-podcast\">Stitcher</a>, and <a href=\"http://simplecast.fm/podcasts/1061/rss\">via RSS</a> for your favorite podcatcher. Post Status Draft is hosted by Joe Hoyle &#8212; the CTO of Human Made &#8212; and Brian Krogsgard.</p>
<p><span>Software as a service (SaaS) is often viewed as a holy grail for successful online business. The ability to generate recurring revenue that doesn’t require hours-for-dollars is attractive to most entrepreneurs.</span></p>
<p><span>WordPress can be a helpful tool to get a lot of SaaS functionality out of the box. In today’s episode, we discuss WordPress and SaaS in two contexts: one, using WordPress as a technology basis for a SaaS in another industry, and two, creating a SaaS catered to the WordPress world.</span></p>
<!--[if lt IE 9]><script>document.createElement(\'audio\');</script><![endif]-->
<a href=\"https://poststatus.com/category/planet/feed/\"></a>
<p><a href=\"http://audio.simplecast.com/33745.mp3\">Direct Download</a></p>
<h3>Links</h3>
<p><span>We mentioned the following SaaS products, and probably some others too.</span></p>
<ul>
<li><span><a href=\"http://www.happytables.com/\">Happy Tables</a> </span></li>
<li><span><a href=\"http://restaurantengine.com/\">Restaurant Engine</a> </span></li>
<li><span><a href=\"https://eventsmart.com/\">Event Smart</a> </span></li>
<li><span><a href=\"http://faithmade.com/\">Faithmade</a> </span></li>
<li><span><a href=\"http://varsitynewsnetwork.com/\">Varsity News Network</a> </span></li>
<li><a href=\"https://www.imagely.com/\">Imagely</a></li>
<li><span><a href=\"http://rainmakerplatform.com/\">Rainmaker</a> </span></li>
<li><span><a href=\"https://wordpress.com/\">WordPress.com</a> </span></li>
<li><span><a href=\"http://optinmonster.com/\">OptinMonster</a> </span></li>
<li><span><a href=\"https://ithemes.com/sync/\">iThemes Sync</a> </span></li>
<li><span><a href=\"https://wpremote.com/\">WP Remote</a> </span></li>
<li><span><a href=\"https://akismet.com/\">Akismet</a> </span></li>
<li><span><a href=\"https://vaultpress.com/\">VaultPress</a> </span></li>
</ul>
<p>Today’s podcast is sponsored by WP Migrate DB Pro by <a href=\"https://deliciousbrains.com/\">Delicious Brains</a>, the tool that makes syncing your databases effortless. Check out WP Migrate DB Pro and all their other great products on their website.</p>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Sat, 26 Mar 2016 17:44:47 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:14:\"Katie Richards\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:1;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:89:\"WPTavern: Draft and Save Customizer Changes for Later with New Customize Snapshots Plugin\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52655\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:99:\"http://wptavern.com/draft-and-save-customizer-changes-for-later-with-new-customize-snapshots-plugin\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:6422:\"<a href=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/snapshots.jpg\"><img src=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/snapshots.jpg?resize=750%2C446\" alt=\"photo credit: Chantel Lucas\" class=\"size-full wp-image-52875\" /></a>photo credit: <a href=\"https://stocksnap.io/photo/410Y7ES74I\">Chantel Lucas</a>
<p>As the WordPress customizer becomes more widely adopted by theme and plugin developers, users often have a host of live preview options to play with when personalizing their sites. Different combinations can produce wildly different designs. What if you could save a preview of customizations before going live with it? This is the idea behind the new <a href=\"https://wordpress.org/plugins/customize-snapshots/\" target=\"_blank\">Customize Snapshots</a> plugin from Weston Ruter, Derek Herman, and the team at <a href=\"https://xwp.co/\" target=\"_blank\">XWP</a>.</p>
<p>Customize Snapshots lets you draft and preview customizer states that can be shared via a private URL that the plugin generates. Users who are not authenticated can preview snapshots on the frontend without loading the customizer. Authenticated users will be able to load the snapshot inside the customizer to make further edits or publish the draft.</p>
<p><a href=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/customize-snapshot.gif\"><img src=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/customize-snapshot.gif?resize=1025%2C525\" alt=\"customize-snapshot\" class=\"aligncenter size-full wp-image-52864\" /></a></p>
<p>You may not be able to see it in the demo above, but snapshots can be saved with a scope of full or dirty, according to the plugin details page:</p>
<ul>
<li><strong>Full:</strong> will playback all the settings during preview [changeset]</li>
<li><strong>Dirty:</strong> will only playback the ones that were marked dirty when the snapshot was taken [snapshot]</li>
</ul>
<p>&#8220;Snapshots was written as a feature plugin to implement a key feature that the <a href=\"https://make.wordpress.org/core/2015/01/26/customizer-transactions-proposal/\" target=\"_blank\">Customizer Transactions proposal</a> will make possible,&#8221; Weston Ruter said. Ruter is the Technology Director at XWP and a co-maintainer of WordPress&#8217; core customizer component. He said the plugin was also developed specifically for a client&#8217;s project requirements.</p>
<p>&#8220;Customize Snapshots stores the Customizer state in a custom post type,&#8221; he said. &#8220;You can access the frontend of the site with the UUID for the snapshot added as a URL parameter to load the site with that Customizer state applied. So this makes it possible to preview Customizer changes on other devices entirely.&#8221;</p>
<h3>Coming Soon: Schedule Customizier Changes to Go Live at a Future Date</h3>
<p>WordPress core lacks the ability to schedule out changes to content that has already been published. The only option for editing published posts is to push changes live. This is also the same for the customizer, but the XWP team is aiming to add scheduling to Customize Snapshots.</p>
<p>&#8220;The idea here, though not implemented yet in the feature plugin, is that you could also schedule a snapshot (aka transaction) to go live at a certain time,&#8221; Ruter said. &#8220;So you could bundle up a bunch of changes in the Customizer and &#8216;Save &amp; Publish&#8217; at a scheduled time, like Sunday at midnight.&#8221;</p>
<p>With transactions added to the customizer, users could build up a large &#8216;changeset&#8217; as a draft, including things like building new pages, adding a collection of widgets, and updating menu items. The entire set of changes can then be scheduled to go live at the same time.</p>
<p>&#8220;On the other side of that coin, it allows for there to be revision history for changes made in the Customizer,&#8221; Ruter said. &#8220;And this will work seamlessly with the <a href=\"https://github.com/xwp/wp-customize-posts\" target=\"_blank\">Customize Posts</a> feature plugin &#8211; the goal being to let the author do as much as possible during a Customizer session, for all changes to be previewed together, submitted for review and iteration, and staged for publishing at some point in time.&#8221;</p>
<p>Ruter said he sees Customize Snapshots as another take on the common desire to build out content on a staging environment, preview changes, and then promote those changes to production.</p>
<p>&#8220;This is a hard problem to solve, and lots of plugins are available with solutions, like WP-CFM, Ramp, and others,&#8221; he said. &#8220;But in the Customizer it&#8217;s something you can get for free because of its model, and you don&#8217;t need multiple environments. You just need to indicate which snapshot/transaction state you want to preview.&#8221;</p>
<p>If you previously had a difficult time grasping the technical details of Ruter&#8217;s <a href=\"https://make.wordpress.org/core/2015/01/26/customizer-transactions-proposal/\" target=\"_blank\">customizer transactions proposal</a>, the Customize Snapshots plugin is a perfect example of the kind of functionality that transactions would enable. The feature plugin is an adaptation of his proposed changes that implement the more fundamental “transactions” construct.</p>
<p>Customize Snapshots adds to <a href=\"https://profiles.wordpress.org/xwp/#content-plugins\" target=\"_blank\">XWP&#8217;s collection of plugins</a> that extend the customizer in innovative ways and intersect with <a href=\"https://make.wordpress.org/core/2015/09/23/outlining-a-possible-roadmap-for-the-customizer/\" target=\"_blank\">the framework&#8217;s long-term roadmap</a>. Occasionally, this will also tie into client work, as with the case of Customize Snapshots.</p>
<p>&#8220;We try to propose Customizer solutions for client projects as a way to fund Customizer advances, but we also believe in the Customizer and would be working on it regardless,&#8221; Ruter said.</p>
<p><a href=\"https://wordpress.org/plugins/customize-snapshots/\" target=\"_blank\">Customize Snapshots</a> makes the customizer a more collaborative environment within WordPress. If you need to make a large number of changes and share a preview with others, this plugin will help you do that. The ability to see snapshots in the admin and schedule changes will make it even more useful in the future.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 25 Mar 2016 20:52:53 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:2;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:50:\"WPTavern: Get Your Widgets Ready for WordPress 4.5\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52812\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:60:\"http://wptavern.com/get-your-widgets-ready-for-wordpress-4-5\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:2255:\"<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2015/07/testing.jpg\"><img src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2015/07/testing.jpg?resize=960%2C474\" alt=\"testing\" class=\"aligncenter size-full wp-image-46092\" /></a></p>
<p>WordPress 4.5 is right around the corner with the <a href=\"https://wordpress.org/news/2016/03/wordpress-4-5-release-candidate/\" target=\"_blank\">first release candidate</a> now available for download. It includes <a href=\"https://core.trac.wordpress.org/log/trunk?action=stop_on_copy&mode=stop_on_copy&rev=37077&stop_rev=37026&limit=120&verbose=on\" target=\"_blank\">49 changes</a> from the last beta &#8211; improvements to the new custom logo feature, a minor update to jQuery, updates to inline documentation, and fixes for various small bugs.</p>
<p>The upcoming release is packed full of <a href=\"https://make.wordpress.org/core/2016/03/10/customizer-improvements-in-4-5/\" target=\"_blank\">improvements to the customizer</a>: selective refresh, support for setting-less controls, and device preview. Plugin and theme authors who want to be on the cutting edge of the customizer&#8217;s new capabilities will want to review Weston Ruter&#8217;s post on <a href=\"https://make.wordpress.org/core/2016/03/22/implementing-selective-refresh-support-for-widgets/\" target=\"_blank\">Implementing Selective Refresh Support for Widgets</a>. All of the default WordPress themes and core widgets will ship with selective refresh in 4.5, but the feature is opt-in for plugins and themes.</p>
<p>For most themes with standard sidebars, adding selective refresh is as simple as including one line to declare theme support:</p>
<pre class=\"brush: php; light: true; title: ; notranslate\">add_theme_support( \'customize-selective-refresh-widgets\' );</pre>
<p>Adding support for widgets is a bit more involved, depending on whether the widget uses JavaScript for initialization. Ruter&#8217;s post includes a tutorial for how to add selective refresh in either scenario. The <a href=\"https://make.wordpress.org/core/version-4-5-project-schedule/\" target=\"_blank\">target release date for 4.5</a> is April 12, 2016, so plugin and theme developers still have three weeks to add support.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 25 Mar 2016 16:18:43 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:3;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:80:\"WPTavern: Versions of WP-CLI Prior to 0.23.0 Are Incompatible with WordPress 4.5\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52830\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:90:\"http://wptavern.com/versions-of-wp-cli-prior-to-0-23-0-are-incompatible-with-wordpress-4-5\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:1858:\"<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2015/12/restful-wp-cli.png\"><img class=\"aligncenter size-full wp-image-49286\" src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2015/12/restful-wp-cli.png?resize=1025%2C459\" alt=\"restful-wp-cli\" /></a>Daniel Bachhuber, maintainer of <a href=\"http://wp-cli.org/\">WP-CLI</a>, a popular command line interface utility for managing WordPress sites, <a href=\"http://wp-cli.org/blog/version-0.23.0.html\">has released</a> version 0.23.0. This release includes a number of bug fixes, improvements, and features, but the most important thing to note is that earlier versions of WP-CLI will not work with WordPress 4.5.</p>
<p>According to Bachhuber, WordPress 4.5 loads a file in wp-settings.php and since WP-CLI uses a custom wp-settings-cli.php file, 0.23.0 and above are the only versions compatible with WordPress 4.5. Bachhuber created a <a href=\"https://core.trac.wordpress.org/ticket/34936\">new ticket on Trac</a> to start a discussion on using wp-settings.php instead of the custom file.</p>
<p>&#8220;WP-CLI uses a custom wp-settings-cli.php to load WordPress, instead of wp-settings.php. While I appreciate the <a class=\"ext-link\" href=\"http://wp-cli.org/blog/how-wp-cli-loads-wordpress.html\">historical justifications</a> for the bootstrap process, it would be much better if WP-CLI could use wp-settings.php because, occasionally, there are <a class=\"ext-link\" href=\"http://wp-cli.org/blog/versions-0.21.1-and-0.20.4.html\">substantial problems</a> arising from needing to maintain a fork,&#8221; Bachhuber said.</p>
<p>To see a full list of changes with detailed explanations on how to use new features such as installing community commands from the package index, check out the <a href=\"http://wp-cli.org/blog/version-0.23.0.html\">release post</a>.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 24 Mar 2016 21:59:59 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Jeff Chandler\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:4;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:74:\"WPTavern: WPWeekly Episode 227 – The HeroPress Story with Topher DeRosia\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:44:\"http://wptavern.com?p=52825&preview_id=52825\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:80:\"http://wptavern.com/wpweekly-episode-227-the-heropress-story-with-topher-derosia\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:2102:\"<p>In this episode of WordPress Weekly, <a href=\"http://marcuscouch.com/\">Marcus Couch</a> and I are joined by <a href=\"https://topher1kenobe.com/\">Topher DeRosia</a> to learn about the origins of <a href=\"http://heropress.com/\">HeroPress</a>. DeRosia explains his motivation for creating the site and why despite not reaching his crowdfunding goal, decided to press on.</p>
<p>We also discuss the impact the essays are having on people across the world and whether or not HeroPress is accomplishing <a href=\"http://heropress.com/about/\">its mission</a>. Last but not least, DeRosia shares a personal story of someone who couldn&#8217;t write an essay for the site because they&#8217;re spending all of their time trying to stay alive.</p>
<h2>Plugins Picked By Marcus:</h2>
<p><a href=\"https://wordpress.org/plugins/media-from-ftp/\">Media from FTP</a> allows you to import items into the WordPress media library that are uploaded via FTP.</p>
<p class=\"shortdesc\"><a href=\"https://wordpress.org/plugins/wp-open-last-modified/\">WP Open Last Modified </a>adds the last modified date and the current revision of your post/page using the [last_modified_date] shortcode.</p>
<p><a href=\"https://wordpress.org/plugins/advanced-wp-reset/\">Advanced WordPress Reset</a> is a convenient way to restore WordPress back to a fresh install without having to go through the traditional installation process.</p>
<h2>WPWeekly Meta:</h2>
<p><strong>Next Episode:</strong> Wednesday, March 30th 9:30 P.M. Eastern</p>
<p><strong>Subscribe To WPWeekly Via Itunes: </strong><a href=\"https://itunes.apple.com/us/podcast/wordpress-weekly/id694849738\" target=\"_blank\">Click here to subscribe</a></p>
<p><strong>Subscribe To WPWeekly Via RSS: </strong><a href=\"http://www.wptavern.com/feed/podcast\" target=\"_blank\">Click here to subscribe</a></p>
<p><strong>Subscribe To WPWeekly Via Stitcher Radio: </strong><a href=\"http://www.stitcher.com/podcast/wordpress-weekly-podcast?refid=stpr\" target=\"_blank\">Click here to subscribe</a></p>
<p><strong>Listen To Episode #227:</strong><br />
</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 24 Mar 2016 20:56:59 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Jeff Chandler\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:5;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:46:\"WP Mobile Apps: WordPress for iOS: Version 6.0\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:33:\"http://apps.wordpress.org/?p=3229\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:68:\"https://apps.wordpress.com/2016/03/24/wordpress-for-ios-version-6-0/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:2905:\"<p>Hello, WordPress users! <a href=\"https://itunes.apple.com/us/app/wordpress/id335703880?mt=8&uo=6&at=&ct=\">Version 6.0 of the WordPress for iOS app</a> is now available in the App Store.</p>
<h1>What&#8217;s New:</h1>
<p><strong>Delete sites from the app!</strong>  We know, we know, creating WordPress.com sites can get addictive. But if you feel like decluttering your dashboard, you can now delete a site (or two) directly from the app.</p>

<a href=\"https://apps.wordpress.com/img_2103/\"><img width=\"169\" height=\"300\" src=\"https://apps.files.wordpress.com/2016/03/img_2103.png?w=169&h=300\" class=\"attachment-medium size-medium\" alt=\"It\'s now possible to delete sites from within the app.\" /></a>
<a href=\"https://apps.wordpress.com/img_2104/\"><img width=\"169\" height=\"300\" src=\"https://apps.files.wordpress.com/2016/03/img_2104.png?w=169&h=300\" class=\"attachment-medium size-medium\" alt=\"You can choose to keep all your content when deleting a site.\" /></a>

<p><strong>More improvements.</strong> Several magical <a href=\"https://github.com/wordpress-mobile/WordPress-iOS/issues?utf8=✓&q=is%3Aclosed+is%3Aissue+milestone%3A6.0+label%3A%22%5BType%5D+Enhancement%22+\">behind-the-scenes improvements</a> to make sure our codebase is stronger than ever.</p>
<p><strong>Bug fixes.</strong> As usual, we squashed some bugs, but there weren&#8217;t many this time around. Keep an eye on <a href=\"https://github.com/wordpress-mobile/WordPress-iOS/issues?utf8=✓&q=is%3Aclosed+is%3Aissue+milestone%3A6.0+label%3A%22%5BType%5D+Bug%22+\">the complete list of bugs here</a>.</p>
<h1>Thank You!</h1>
<p>Thanks to all of the contributors who worked on this release:<br />
<a href=\"https://github.com/aerych\">@aerych</a>, <a href=\"https://github.com/alexcurylo\">@alexcurylo</a>, <a href=\"https://github.com/astralbodies\">@astralbodies</a>, <a href=\"https://github.com/diegoreymendez\">@diegoreymendez</a>, <a href=\"https://github.com/frosty\">@frosty</a>, <a href=\"https://github.com/hugobaeta\">@hugobaeta</a>, <a href=\"https://github.com/jleandroperez\">@jleandroperez</a>, <a href=\"https://github.com/koke\">@koke</a>, <a href=\"https://github.com/kurzee\">@kurzee</a>, <a href=\"https://github.com/kwonye\">@kwonye</a>, <a href=\"https://github.com/mattmiklic\">@mattmiklic</a>, <a href=\"https://github.com/maxme\">@maxme</a>, <a href=\"https://github.com/oguzkocer\">@oguzkocer</a>, <a href=\"https://github.com/sendhil\">@sendhil</a> and <a href=\"https://github.com/SergioEstevao\">@SergioEstevao</a>..</p>
<p>You can track the development progress for the next update by visiting <a href=\"https://github.com/wordpress-mobile/WordPress-iOS/issues?q=is%3Aopen+is%3Aissue+milestone%3A6.1\" target=\"_blank\">our 6.1 milestone on GitHub</a>. Until next time!</p><img alt=\"\" border=\"0\" src=\"https://pixel.wp.com/b.gif?host=apps.wordpress.com&blog=108068616&post=3229&subd=apps&ref=&feed=1\" width=\"1\" height=\"1\" />\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 24 Mar 2016 12:48:04 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:14:\"diegoreymendez\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:6;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:81:\"WPTavern: Cast of Silicon Valley Nails The Meaning of Automattic on The First Try\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52809\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:91:\"http://wptavern.com/cast-of-silicon-valley-nails-the-meaning-of-automattic-on-the-first-try\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:1475:\"<p><a href=\"http://www.hbo.com/silicon-valley\">Silicon Valley</a> is a comedic television series on HBO about a group of six engineers who create a startup company in Silicon Valley. <a href=\"http://www.wired.com/\">Wired.com</a> sat down with the cast and gave them the names to real startup companies to see if they could guess what they do.</p>
<p>Among the names mentioned is <a href=\"https://automattic.com/\">Automattic</a>. Fast forward to <a href=\"https://youtu.be/5Y64UeNeiOM?t=1m14s\">1:14</a> to watch Kumail Nanjiani, who plays <a href=\"http://www.hbo.com/silicon-valley/cast-and-crew/kumail-nanjiani/index.html\">Dinesh</a> on the show, correctly guess the meaning of the name on his first try, &#8220;Automattic with two T&#8217;s is a company ran by a dude named Matt,&#8221; he says. His response to being told he&#8217;s correct is pretty funny.</p>
<p>Warning, the video contains strong language and is not safe for work.</p>
<div class=\"embed-wrap\"></div>
<p>Automattic, founded in 2005, is the driving force behind WordPress.com and a handful of other services like Akismet, Gravatar, VaultPress, IntenseDebate, Polldaddy, and more.</p>
<p>While many people are confused between WordPress the software project and WordPress.com, the reason for two T&#8217;s in Automattic was guessed correctly on the first try by someone who is not deeply involved in the community. There&#8217;s something mildly humorous about that.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Wed, 23 Mar 2016 23:45:00 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Jeff Chandler\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:7;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:53:\"WPTavern: Restrict BuddyPress Signups by Email Domain\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52202\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:63:\"http://wptavern.com/restrict-buddypress-signups-by-email-domain\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:2637:\"<p><a href=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2015/02/mailboxes.jpg\"><img src=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2015/02/mailboxes.jpg?resize=1024%2C496\" alt=\"mailboxes\" class=\"aligncenter size-full wp-image-39214\" /></a></p>
<p>Spam is one of the most discouraging things about managing a BuddyPress-powered social network. Since WordPress itself is already a magnet for spam signups and comments, BuddyPress is subject to the same and then some. With an ordinary WordPress site you can block most of it fairly well, but with BuddyPress you often have to wade through signups to verify that real humans aren&#8217;t getting blocked.</p>
<p>One of the best ways to cut down on the avalanche of unwanted signups is to restrict them by email domain. <a href=\"https://wordpress.org/plugins/bp-rsed/\" target=\"_blank\">BP Restrict Signup by Email Domain</a> is a plugin that allows you to whitelist an email domain or set of domains that will be required for registration on the site. You can also set an error message and create a custom message to appear on the registration page.</p>
<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/email-address-restrictions.png\"><img src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/email-address-restrictions.png?resize=566%2C862\" alt=\"email-address-restrictions\" class=\"aligncenter size-full wp-image-52791\" /></a></p>
<p>The plugin was created by BuddyPress contributing developer Ray Hoh for the <a href=\"http://commons.gc.cuny.edu/\" target=\"_blank\">CUNY Academic Commons</a>. It&#8217;s part of a suite of plugins recommended by the <a href=\"http://commonsinabox.org/\" target=\"_blank\">Commons In A Box (CBOX)</a> free software project. The university uses the plugin to ensure that anyone signing up to the Academic Commons will have a CUNY email address. You can see it in action on the <a href=\"http://commons.gc.cuny.edu/register/\" target=\"_blank\">registration page</a>.</p>
<p>BP Restrict Signup by Email Domain works on both single site and multisite installations of WordPress. It has been tested with the latest version of BuddyPress (2.5) but should also be compatible back to version 1.6.</p>
<p>Not every social site can afford to limit email domains, but this plugin works well for academic sites, nonprofit or other types of organizations, or any community that excludes all but a few set email domains. <a href=\"https://wordpress.org/plugins/bp-rsed/\" target=\"_blank\">BP Restrict Signup by Email Domain</a> is open source on WordPress.org and is actively maintained for use on CUNY.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Wed, 23 Mar 2016 23:09:28 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:8;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:67:\"WPTavern: Frederick Townes Confirms W3 Total Cache is Not Abandoned\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52766\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:77:\"http://wptavern.com/frederick-townes-confirms-w3-total-cache-is-not-abandoned\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:7219:\"<p><a href=\"https://wordpress.org/plugins/w3-total-cache/\">W3 Total Cache</a> is a free, caching WordPress plugin created by <a href=\"https://profiles.wordpress.org/fredericktownes/\">Frederick Townes</a> that&#8217;s active on more than one million sites. While the plugin&#8217;s core functionality is free to use, there&#8217;s a handful of services users can buy from within the plugin such as enhanced support to server and site configurations.</p>
<a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/W3TCUpsells.png\"><img class=\"size-full wp-image-52768\" src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/W3TCUpsells.png?resize=1025%2C700\" alt=\"W3 Total Cache Upsells\" /></a>W3 Total Cache Upsells
<p>A recent post by Scott Tuchman on the <a href=\"https://www.facebook.com/groups/advancedwp/permalink/1116520665076813/\">Advanced WordPress Facebook group</a> cites that the plugin hasn&#8217;t been updated in more than seven months and is not compatible with WordPress 4.4.2. Out of 44 reports, 34 people say W3 Total Cache 0.9.4.1 doesn&#8217;t work with WordPress 4.4.2.</p>
<a href=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/W3TCBroken.png\"><img class=\"size-full wp-image-52769\" src=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/W3TCBroken.png?resize=884%2C626\" alt=\"W3 Total Cache Not Compatible With WordPress 4.4.2\" /></a>W3 Total Cache Not Compatible With WordPress 4.4.2
<p>The plugin was recently updated with the <a href=\"https://plugins.trac.wordpress.org/changeset/1375883/w3-total-cache\">only change</a> being the readme.txt file which states it has been tested up to WordPress 4.5. A cursory glance at the support forums indicates <a href=\"https://wordpress.org/support/topic/how-come-the-version-0941-now-says-updated-on-mar-21\">some users</a> are <a href=\"https://wordpress.org/support/topic/compatible-up-to-45-but-no-update-since-9-months-ago\">not pleased</a> with the simple update.</p>
<h2>A Rocky Year</h2>
<p>In 2015, a disgruntled customer who purchased services from <a href=\"http://www.w3-edge.com/\">W3 Edge</a>, <a href=\"https://www.reddit.com/r/Wordpress/comments/2r7un1/my_experience_with_what_its_like_with_w3_total/\">described their negative experience</a> in a post on the WordPress subreddit. The complaints include, a lack of communication, not receiving purchased services, and project delays. Mike McAlister, of <a href=\"https://arraythemes.com/\">Array Themes</a>, told the Tavern about his experience with W3 Edge.</p>
<blockquote><p>In 2014, I signed up for the premium version of W3 Total Cache to unlock some of the advanced caching features. The email confirmation said that the license would auto-renew unless cancelled, so I contacted them right away with my request to cancel the auto-renewal. I didn&#8217;t hear anything back and wrongly assumed this was taken care of.</p>
<p>Fast forward one year and I get an email out of nowhere that my W3 license had been renewed. I immediately contacted W3 with details of my order and politely requested a solution, but never heard a response.</p>
<p>I wrote a total of four emails and several tweets directed at W3 Edge and its founder, Frederick Townes, with not a single response throughout the ordeal. Like many others, I had to resort to calling the bank and filing a dispute to get my money back, which dragged the issue out for several months.</p></blockquote>
<p>At the end of the Reddit thread, W3 Edge <a href=\"https://www.reddit.com/r/Wordpress/comments/2r7un1/my_experience_with_what_its_like_with_w3_total/cqag9sw\">responded to the criticism</a> and admitted that the company let users down with its lack of engagement. It also admitted to having a small team and the challenges involved with its support model.</p>
<p>&#8220;One of the largest lessons learned is that there&#8217;s a lot to get right especially with a small team,&#8221; W3 Edge said. &#8220;We&#8217;ve made some changes to the team recently and we&#8217;re working to rectify experiences like the ones noted here. Since it’s the customer experience that matters and not intentions, I apologize for the negative experiences. Our mission remains to enable independent publishers with great software and solutions.&#8221;</p>
<h2>W3 Total Cache Status Update</h2>
<p>The company&#8217;s <a href=\"https://twitter.com/w3edge/with_replies?lang=en\">official Twitter account</a> has been inactive since April of 2015 and the <a href=\"https://www.w3-edge.com/weblog/\">last post published</a> on its blog was 10 months ago. Combined with the lack of plugin updates, it&#8217;s understandable why customers and users are concerned with the plugin&#8217;s status.</p>
<p>Frederick Townes, founder of W3 Edge, issued the following statement to the Tavern.</p>
<blockquote><p>Since the last update, development and other operations have been ongoing. There have been several hundred bug fixes based on user feedback, more than 100 improvements and numerous major improvements. We’ve added tens of thousands of unit tests for the various bugs and improvements in an attempt to allow us to release more updates faster in the future.</p>
<p>We’re also working on a new services and support model, which is more exclusive in an attempt to reduce the volume of service requests and misaligned customer / subscriber expectations.</p>
<p>Our goal is unchanged, to create easy ways for publishers and developers to increase WordPress performance and tune user-experience in self-hosted environments. As we work towards leaving beta and moving towards a 1.0 release (and making our GitHub repository public rather than private) our goal is to offer hosted services that use automation to simplify the performance optimization process in the future.</p></blockquote>
<p>I spoke to Townes for an hour on Skype and he comes across as a sincere, concerned business owner who is struggling to find a system that works for the amount of support volume he and his team are dealing with. I asked what keeps him motivated to continue working on W3 Total Cache, &#8220;I love solving complex problems which is what W3 Total Cache does,&#8221; Townes replied.</p>
<p>I can only imagine how heavy the burdens are maintaining a free plugin that&#8217;s active on more than a million sites. Joost de Valk, founder of <a href=\"https://yoast.com/\">Yoast.com</a>, and lead developer of <a href=\"https://wordpress.org/plugins/wordpress-seo/\">WordPress SEO</a>, a plugin active on more than one million sites shared some of the <a href=\"https://yoast.com/yoast-seo-3-0-release-a-recap/\">lessons he learned</a> after users experienced issues upgrading to 3.0.</p>
<h2>Have The Changes Worked?</h2>
<p>While researching for this article, I requested feedback from thousands of people to learn what recent customers are experiencing with the company but no one responded. This can mean any number of things but it&#8217;s difficult to determine whether the changes mentioned in the Reddit thread have improved the situation without getting feedback from recent customers.</p>
<p>If you&#8217;ve recently purchased services from W3 Edge, please share your experience with us in the comments.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Wed, 23 Mar 2016 20:42:57 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Jeff Chandler\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:9;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:76:\"WPTavern: GitHub Issue and Pull Request Templates: Choose Your Own Adventure\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52746\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:85:\"http://wptavern.com/github-issue-and-pull-request-templates-choose-your-own-adventure\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:2633:\"<p>Last month GitHub <a href=\"http://wptavern.com/github-introduces-issue-and-pull-request-templates\" target=\"_blank\">introduced issue and pull request templates</a> in response to the <a href=\"http://wptavern.com/open-source-project-maintainers-confront-github-with-open-letter-on-issue-management\" target=\"_blank\">&#8220;Dear GitHub&#8221; letter of complaints</a> from open source project maintainers. The new templates let maintainers streamline contributions to be more structured and meaningful for the project.</p>
<p>Creating issue and pull request templates could be a boring addition to your project&#8217;s task list, or you can have a little fun with <a href=\"https://twitter.com/TalAter\" target=\"_blank\">Tal Ater</a>&#8216;s new <a href=\"https://www.talater.com/open-source-templates/\" target=\"_blank\">open source template generator</a>. It leads you on a whimsical journey inspired by Lewis Carroll and H.P. Lovecraft while creating templates for your project.</p>
<p><a href=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/issue-pull-request-generator.png\"><img src=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/issue-pull-request-generator.png?resize=1025%2C485\" alt=\"issue-pull-request-generator\" class=\"aligncenter size-full wp-image-52757\" /></a></p>
<p>The generator lets you build your templates in the style of a Choose Your Own Adventure book. At every step you make selections that will help structure the final templates. For example, you can choose whether or not to focus on bug reports, or prioritize new features/improvements, or make room for both in your issues template.</p>
<p>In a post titled &#8220;<a href=\"http://www.theopensourcer.com/2016/learning-to-ship-through-ridiculousness/\" target=\"_blank\">Learn to Ship Faster by Embracing Ridiculousness</a>,&#8221; Ater explains how he built the project over three days as an exercise to help him learn to let go and ship imperfect products:</p>
<blockquote><p>The project’s own imperfections are by definition its greatest strengths. Is it user friendly? About as friendly as a mad hatter. Does the writing make sense? Absolutely not. Did I get it from idea to shipping in 3 days? Abso-freaking-lutely.</p></blockquote>
<p>The result is a fun little time machine that transports you back to childhood while outputting some useful templates for your open source projects. They may require a bit of additional tweaking for your particular use, but Ater&#8217;s <a href=\"https://www.talater.com/open-source-templates/#/\" target=\"_blank\">generator</a> gives you an easy way to get started.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Wed, 23 Mar 2016 16:32:44 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:10;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:77:\"WPTavern: WordPress Theme Review Team Moves Towards Automating Review Process\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52730\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:87:\"http://wptavern.com/wordpress-theme-review-team-moves-towards-automating-review-process\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:2402:\"<a href=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2015/01/red-pen.jpg\"><img src=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2015/01/red-pen.jpg?resize=1024%2C500\" alt=\"photo credit: pollas - cc\" class=\"size-full wp-image-37241\" /></a>photo credit: <a href=\"https://www.flickr.com/photos/pollas/526544001/\">pollas</a> &#8211; <a href=\"http://creativecommons.org/licenses/by-nc-sa/2.0/\">cc</a>
<p>Getting a theme approved for the WordPress directory can sometimes take months, depending on the number of corrections required and reviewers available to handle the queue. As part of a larger plan to make things more efficient, the WordPress Theme Review Team is making progress towards automating many of the time-consuming checks involved in reviewing submissions and updates.</p>
<p><a href=\"https://twitter.com/grapplerulrich\" target=\"_blank\">Ulrich Pogson</a>, who is leading the effort, published a <a href=\"https://make.wordpress.org/themes/2016/03/21/work-on-requirements-automation-update-1/\" target=\"_blank\">list of requirements</a> that might be good candidates for automated checks. Each item is now an issue on GitHub where contributors can discuss implementation and help build the checks. A few examples include &#8220;<a href=\"https://github.com/Otto42/theme-check/issues/133\" target=\"_blank\">Use the Customizer for implementing theme options</a>,&#8221; &#8220;<a href=\"https://github.com/Otto42/theme-check/issues/134\" target=\"_blank\">Don’t include any plugins</a>,&#8221; and &#8220;<a href=\"https://github.com/Otto42/theme-check/issues/126\" target=\"_blank\">Don’t include admin/feature pointers</a>.&#8221;</p>
<p>During the most recent meeting, the team approved a <a href=\"https://make.wordpress.org/themes/2016/03/22/22-march-team-meeting/\" target=\"_blank\">list of 13 requirements</a> they are aiming to automate. They will need to write checks for each one and are inviting collaboration on GitHub.</p>
<p>&#8220;It could be making a pull request, helping write the regex, or contributing ideas how to implement the check,&#8221; Pogson said. &#8220;Once the checks have been written we need help testing them for false positives.&#8221;</p>
<p>Check out the <a href=\"https://github.com/Otto42/theme-check/issues\" target=\"_blank\">issues queue</a> for the Theme Check plugin if you want to help the team automate more checks.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Tue, 22 Mar 2016 22:30:51 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:11;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:81:\"WPTavern: Submit Pull Requests to WordPress Core with the GitHub-to-Patch Utility\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52711\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:91:\"http://wptavern.com/submit-pull-requests-to-wordpress-core-with-the-github-to-patch-utility\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:3623:\"<p><a href=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/github-to-patch.png\"><img src=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/github-to-patch.png?resize=1025%2C499\" alt=\"github-to-patch\" class=\"aligncenter size-full wp-image-52720\" /></a></p>
<p>When Matt Mullenweg asked the audience who has used Git and/or GitHub during his <a href=\"http://wptavern.com/matt-mullenwegs-state-of-the-word-highlights-internationalization-mobile-and-new-tools-for-wordpress-contributors\" target=\"_blank\">2014 State of the Word</a> address, the response was almost unanimous. “Whoah, that’s all the hands!” he exclaimed before announcing that core contributors will soon be able to submit pull requests on GitHub.</p>
<p>Two years later, an official patch workflow has not yet been established. In addition to ironing out the logistics, contributors must also take into account what might be lost or gained in the GitHub approach to problem solving. The GitHub pull request collaboration style is markedly different than the lengthy discussions that happen on WordPress Trac.</p>
<p>Nevertheless, WordPress contributors who use GitHub as part of daily life are eager to see progress on an official pipeline for pull requests. In the meantime, Ryan McCue has just launched a utility that allows contributors to submit pull requests to core. <a href=\"https://rmccue.io/patch/\" target=\"_blank\">GitHub-to-Patch</a> is a proof-of-concept that provides an easy way to submit a pull request as a patch.</p>
<p>The process that McCue outlines in his <a href=\"http://journal.rmccue.io/367/patch-wordpress-via-github/\" target=\"_blank\">post</a> involves submitting a pull request to the <a href=\"https://github.com/WordPress/WordPress\" target=\"_blank\">WordPress/WordPress repo</a>, selecting the request via the utility, and associating the request with the corresponding ticket number. He also advises heading back to the ticket to leave a comment about the patch you added.</p>
<p><a href=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/github-to-patch-step-1.png\"><img src=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/github-to-patch-step-1.png?resize=1025%2C703\" alt=\"github-to-patch-step-1\" class=\"aligncenter size-full wp-image-52726\" /></a></p>
<p>&#8220;Internally, the utility uses GitHub’s API to get a patch format of the pull request, then uses Trac’s XML-RPC API to upload,&#8221; McCue said. &#8220;This requires your WordPress.org credentials, and because of cross-origin policy, also requires an intermediary server. I hope to fix this in the future, either by integrating the tool into Trac itself, or by using OAuth with WordPress.org.&#8221;</p>
<p>McCue clarified on Twitter that his utility is not meant to be a final solution to WordPress/GitHub interactions but rather a stop-gap measure until a better solution is available. He <a href=\"https://twitter.com/rmccue/status/712143679780200448\" target=\"_blank\">referenced</a> Weston Ruter&#8217;s approach that <a href=\"https://make.xwp.co/2015/12/05/streamlining-contributions-to-wordpress-core-via-github/\" target=\"_blank\">uses Travis CI to handle uploading patches from trusted pull requests to Trac</a> as one of the more elegant examples in the works.</p>
<p>For those with no SVN experience, GitHub-to-Patch significantly lowers the barrier to entry for contributing to core. If you don&#8217;t want to use the <a href=\"https://rmccue.io/patch/\" target=\"_blank\">utility</a> on McCue&#8217;s server, the code is available on GitHub and can be installed on your own server.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Tue, 22 Mar 2016 18:34:38 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:12;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:86:\"WPTavern: WordPress Adopts Accessibility Coding Standards for All New and Updated Code\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52690\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:96:\"http://wptavern.com/wordpress-adopts-accessibility-coding-standards-for-all-new-and-updated-code\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:3221:\"<a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/paper-1.jpg\"><img src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/paper-1.jpg?resize=960%2C501\" alt=\"photo credit: Startup Stock Photos\" class=\"size-full wp-image-52706\" /></a>photo credit: <a href=\"https://stocksnap.io/photo/L2KBJB91D6\">Startup Stock Photos</a>
<p>The Accessibility Team announced today that the <a href=\"https://make.wordpress.org/core/handbook/best-practices/coding-standards/accessibility-coding-standards/\" target=\"_blank\">WordPress Accessibility Coding Standards</a> have been approved for the core handbook. The team <a href=\"http://wptavern.com/your-chance-to-give-feedback-on-wordpress-accessibility-coding-standards\" target=\"_blank\">sought feedback on the draft of the guidelines</a> earlier this year and, after a few revisions, the coding standards are out of draft status.</p>
<p>Contributors will now be required to meet these guidelines in order to have their code merged into core:</p>
<blockquote><p>All new or updated code released in WordPress must conform with the <a href=\"https://www.w3.org/WAI/intro/wcag\" target=\"_blank\">WCAG 2.0 guidelines</a> at level AA.</p></blockquote>
<p>Level AA, according to accessibility team member Rian Rietveld, includes guidelines used as a reference for a legal standard in many countries. WordPress&#8217; new accessibility coding standards cover five key areas:</p>
<ul>
<li>HTML Semantics</li>
<li>Color Contrast</li>
<li>Keyboard Accessibility</li>
<li>Images and Icons</li>
<li>Labeling</li>
</ul>
<p>The default Twenty Sixteen theme is already compliant with WCAG 2 AA and more <a href=\"https://wordpress.org/themes/tags/accessibility-ready/\" target=\"_blank\">accessibility-ready themes</a> are tagged in the official directory. At this time, themes and plugins hosted on WordPress.org are not required to meet these guidelines.</p>
<p>&#8220;Having a dedicated principle that WordPress needs to meet a certain level of accessibility standards is incredibly powerful,&#8221; contributor Joe Dolson said in a reaction on his <a href=\"https://www.joedolson.com/2016/03/wordpress-goes-wcag-mean/\" target=\"_blank\">blog</a>.</p>
<p>&#8220;Since it doesn’t change the fact that the WordPress Accessibility team consists of a relatively small group of part-time volunteers, we have to realistically acknowledge that we won’t catch everything.</p>
<p>&#8220;But that still leaves us with an overall arc that leads to a future with a more accessible WordPress, and that’s an unmistakable win for accessibility,&#8221; he said.</p>
<p>Vocal accessibility advocates have been <a href=\"http://wptavern.com/your-chance-to-give-feedback-on-wordpress-accessibility-coding-standards\" target=\"_blank\">calling for WordPress to adopt a set of standards</a> and these new guidelines demonstrate the project&#8217;s commitment to serving those with a disability. With WCAG 2 AA established as the standard, the accessibility team is now in a better position to provide a list of requirements for an <a href=\"https://make.wordpress.org/accessibility/2014/05/02/automated-accessibility-testing/\" target=\"_blank\">automated testing tool</a>.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Tue, 22 Mar 2016 05:17:25 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:13;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:78:\"WPTavern: WP Engine Adds 2FA to User Portal, Opt-In PHP 7 Support In the Works\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52657\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:88:\"http://wptavern.com/wp-engine-adds-2fa-to-user-portals-opt-in-php-7-support-in-the-works\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:6799:\"<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2014/11/wp-engine.jpg\"><img class=\"aligncenter size-full wp-image-34106\" src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2014/11/wp-engine.jpg?resize=1025%2C427\" alt=\"wp-engine\" /></a></p>
<p>WP Engine <a href=\"https://wpengine.com/blog/two-factor-authentication/\" target=\"_blank\">announced</a> today that two-factor authentication (2FA) is now available to its 42,000 customers. The security measure will help combat increasing attempts on the host&#8217;s user portal.</p>
<p>&#8220;As we grow, almost everything about the company changes, and security is one of them,&#8221; said WP Engine founder Jason Cohen. &#8220;For example, we see things like fraudulent accounts and account impersonation/phishing, and other things which didn’t appear often when we were smaller and less of a target.&#8221;</p>
<p>Adding 2FA is part of a larger plan for improved security that the company began last year when it hired Eric Murphy as its new security director.</p>
<p>&#8220;We’ve had a cross-departmental internal security group of about a dozen people for a few years now, but in 2015 we decided we needed even more leadership in that area,&#8221; Cohen said.</p>
<p>&#8220;We hired Eric last year, in fact before the December security incident, so in hindsight that was excellent timing.&#8221;</p>
<p>Murphy is now overseeing the technical aspects of security, like firewalls and VPNs, as well as the social engineering and training aimed at protecting customer account access.</p>
<p>After the December breach where <a href=\"http://wptavern.com/wp-engine-security-breach-customer-credentials-exposed\" target=\"_blank\">customer credentials were exposed</a>, WP Engine began moving its customers off of Linode&#8217;s cloud infrastructure. Cohen confirmed that thousands of customers have been moved and that no new customers have been added to Linode.</p>
<h3>The Challenges of Implementing 2FA</h3>
<p>Although providing 2FA for accounts is a security best practice, Cohen said that it would not have prevented the December breach, as the entry point was with Linode. Regardless, WP Engine customers have been requesting 2FA support for the user portal for years. When asked why it took the company so long to implement it, Cohen identified a few of the technical challenges.</p>
<p>&#8220;One of the challenges was in identity recovery,&#8221; he said. &#8220;We can’t use email as a way to recover from a lost phone, because then the email address becomes a &#8216;single factor,&#8217; i.e. you can use it to recover your password as well as your phone aspect.</p>
<p>&#8220;However, nowadays with the advent of Google Authenticator and other apps, plus people’s general awareness of how to use things like scratch codes, we felt it was now not going to be hard for people to use,&#8221; Cohen said.</p>
<p>When it comes to protecting WordPress, WP Engine customers have always been able to use a plugin to add 2FA. Cohen said that the company is investigating a solution to make it more convenient for customers who manage multiple accounts.</p>
<p>&#8220;Suppose you manage 50 WP sites and you want 2FA,&#8221; he said. &#8220;So do you configure 2FA on every site and have 50 entries in your Google Authenticator App? That stinks!</p>
<p>&#8220;So, something better would be a SSO system somewhere, have 2FA on <em>that</em>, and then use that to get into WordPress,&#8221; Cohen said.</p>
<p>&#8220;Another way would be to use OAuth, e.g. use Google OAuth on WP, and indeed for customers who already use Google Apps, we do recommend that method. Another method might be that our own User Portal be an OAuth provider.&#8221;</p>
<p>With a host of solutions already available, Cohen said they are also considering simply pointing customers to a list of recommendations.</p>
<p>&#8220;Even if we do our own, we’d always support the other methods,&#8221; he said. &#8220;The idea isn’t to box anyone into a single method.&#8221;</p>
<h3>WP Engine Plans to Add Opt-In PHP 7 Support in 2016</h3>
<p>WP Engine is currently <a href=\"https://wpengine.com/blog/php-7-the-way-of-the-future/\" target=\"_blank\">working on a PHP 7 implementation</a> for all customers. In December, the company tested 25 concurrent users over 5 minutes across 10 randomly selected URLs — run against a basic WordPress (4.3.1) install on its Mercury Vagrant configuration. The results showed that PHP 7 handles the raw hits 2.6x faster than PHP 5.5.</p>
<p><a href=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/wp-engine-testing.png\"><img class=\"aligncenter size-full wp-image-52674\" src=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/wp-engine-testing.png?resize=1025%2C709\" alt=\"wp-engine-testing\" /></a></p>
<p>Unfortunately, customers who are eager to see WP Engine upgrade to PHP 7 across the board will be waiting for the rest of the WordPress ecosystem to catch up. As an alternative, the company is looking at the possibility of making PHP 7 an opt-in.</p>
<p>&#8220;We have PHP7 running on some machines,&#8221; Cohen said. &#8220;But it’s actually amazing how few WP sites in the field are compatible. We’re finding that it&#8217;s less than 20%. There will need to be an opt-in for that reason.&#8221;</p>
<p>Although WordPress core is compatible with PHP 7, the vast majority of WordPress plugins and themes are not.</p>
<p>&#8220;Even WooCommerce doesn’t completely work with it,&#8221; Cohen said. &#8220;Many big, popular plugins are not yet compatible. With PHP v5.5 there was some of that, but this is much more. Of course PHP7 is the future so it’s inevitable, but it’s going to take more time than some other PHP releases did.&#8221;</p>
<p>Cohen said the best case scenario would be for customers to choose PHP 7 on an install-by-install basis and change at any time. He does not yet have an ETA, as the company is working on an undisclosed big project that Cohen says is part and parcel of it.</p>
<p>&#8220;We have to make some decisions about how much to put into it before release, versus releasing it earlier and then layering in more things afterwards,&#8221; he said.</p>
<p>There are several large hurdles to allowing PHP version selection on an install-by-install basis, which need to be worked out before rolling it out to thousands of customers.</p>
<p>&#8220;One challenge is running multiple versions at the same time on the same machine,&#8221; Cohen said. &#8220;Another is tech support — if something doesn’t work in it, we need our 150+ support techs to understand how to figure that out and help.&#8221;</p>
<p>Cohen said he could see opt-in PHP 7 support happening for customers as early as this year but could not specify when.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Mon, 21 Mar 2016 20:17:13 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:14;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:33:\"Matt: Chamath on Growing Facebook\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:22:\"https://ma.tt/?p=46387\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:50:\"https://ma.tt/2016/03/chamath-on-growing-facebook/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:1405:\"<p><span class=\"embed-youtube\"></span></p>
<p>This is a cool talk from <a href=\"https://twitter.com/chamath\">Chamath Palihapitiya</a> from a few years ago in 2013 which makes it extra interesting. It seems like a smaller audience so it&#8217;s fun and unguarded. (Though a great thing about Chamath is he&#8217;s incredibly candid in every context.) You can&#8217;t see the slides in the video, and there&#8217;s not much to them, but here they are:</p>
<p> 
<div> <strong> <a href=\"https://www.slideshare.net/growthhackersconference/how-we-put-facebook-on-the-path-to-1-billion-users\" title=\"Facebook&#x27;s Growth Hacker on how they put Facebook on the Path to 1 Billion Users\" target=\"_blank\">Facebook&#x27;s Growth Hacker on how they put Facebook on the Path to 1 Billion Users</a> </strong> from <strong><a target=\"_blank\" href=\"http://www.slideshare.net/growthhackersconference\">growthhackersconference</a></strong> </div>
<p>Here are the values he talks about at the end:</p>
<ol>
<li>Very high IQ.</li>
<li>Strong sense of purpose.</li>
<li>Relentless focus on success.</li>
<li>Aggressive and competitive.</li>
<li>High quality bar bordering on perfectionism.</li>
<li>Likes changing and disrupting things.</li>
<li>New ideas on how to do things better.</li>
<li>High integrity.</li>
<li>Surrounds themselves with good people.</li>
<li>Cares about building real value over perception.</li>
</ol>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Mon, 21 Mar 2016 02:00:08 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:4:\"Matt\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:15;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:43:\"WPTavern: In Case You Missed It – Issue 5\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:44:\"http://wptavern.com?p=52645&preview_id=52645\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:49:\"http://wptavern.com/in-case-you-missed-it-issue-5\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:7253:\"<a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/01/ICYMIFeaturedImage.png\" rel=\"attachment wp-att-50955\"><img class=\"size-full wp-image-50955\" src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/01/ICYMIFeaturedImage.png?resize=676%2C292\" alt=\"In Case You Missed It Featured Image\" /></a>photo credit: <a href=\"http://www.flickr.com/photos/112901923@N07/16153818039\">Night Moves</a> &#8211; <a href=\"https://creativecommons.org/licenses/by-nc/2.0/\">(license)</a>
<p>There&#8217;s a lot of great WordPress content published in the community but not all of it is featured on the Tavern. This post is an assortment of items related to WordPress that caught my eye but didn&#8217;t make it into a full post.</p>
<h2>Human Made Hires Siobhan McKeown</h2>
<p>Development firm, Human Made Ltd., <a href=\"https://hmn.md/2016/03/17/siobhan-mckeown-joins-human-made/\">announced</a> that it has hired Siobhan McKeown as their events director. Human Made worked closely with McKeown who helped organize and run <a href=\"https://feelingrestful.com\">A Day of REST</a>, a conference devoted to the WordPress REST API. According to the post, McKeown&#8217;s role is to expand the company&#8217;s events, including the Day of Rest conference.</p>
<h2>WordPress is the Light in a Sea of Darkness</h2>
<p>Raghavendra Satish Peri from India, who discovered at the age of 14 that he was 80% blind, <a href=\"http://heropress.com/essays/finding-hope-darkness/\">describes how WordPress</a> became a shining light in a sea of darkness.</p>
<blockquote><p>WordPress has changed the way I see my life, today I am a full time <a href=\"http://www.digitala11y.com\">Digital Accessibility Consultant</a> &amp; I build most of my code examples on WP. This is helping me grow professionally &amp; personally each day. I am financially independent, travel around the world, attend &amp; speak at conferences/meet-ups, fought depression with my writing, wrote a bucket list &amp; am actively pursuing it. All this would have not been possible with the power of publishing &amp; WP has simplified it for me.</p></blockquote>
<p>In the post, Satish Peri says he has two wishes. The first is to attend WordCamp US and meet Matt Mullenweg. The second is to see every part of WordPress core be accessible. While the <a href=\"https://make.wordpress.org/accessibility/\">WordPress accessibility team</a> is working on his second wish, how can we as a community grant the first?</p>
<h2>WordPress&#8217; Greatest Threat Isn&#8217;t a CMS</h2>
<p>Chris Wallace explains why the <a href=\"http://chriswallace.org/the-biggest-threat-to-wordpress-isnt-another-cms/\">greatest threat to WordPress</a> isn&#8217;t a competing CMS, but the people who criticize it in a rude and disrespectful way.</p>
<blockquote><p>But the biggest threat to WordPress right now is not a CMS. Heck, it’s not even a technology challenge or an issue with legacy code. The biggest threat to WordPress is people in the community who voice opinions in a rude and disrespectful way, echoing a deep lack of appreciation for the contributors and project leaders simply trying to make WordPress better within the framework of being used on 25% of the web <em>with a desire to continue increasing that number</em>.</p></blockquote>
<p>I tried to explain <a href=\"http://wptavern.com/how-not-to-communicate-grievances-with-wordpress\">how to be helpful</a> when criticizing WordPress last year, but I&#8217;m not sure I made an impact. I know from experience that encountering a constant barrage of criticism is unhealthy and can lead to burnout. The same holds true for those who are committed to improving WordPress on a daily basis.</p>
<p>It&#8217;s not that things need to be sugarcoated, it&#8217;s that criticism should be given in an actionable way to make things better for all involved. It&#8217;s also about civil discourse and treating others with respect.</p>
<p>The final part of Wallace&#8217;s post is great advice:</p>
<blockquote><p>Let’s all take a few minutes to be grateful for the opportunity to make a living off the hard work of thousands of other people who donated their time and code to build something that has made a huge impact on the Internet and in people’s actual lives.</p></blockquote>
<h2>Matt Mullenweg on The Changelog Podcast</h2>
<p>Matt Mullenweg appeared on <a href=\"https://changelog.com/197/\">The Changelog podcast</a> to discuss the future of WordPress and how Calypso fits in. It&#8217;s a great show as the duo dive deep into the role JavaScript plays in the future of WordPress.</p>
<h2>Developing a WordPress Plugin That Uses Service APIs</h2>
<p>Smashing Magazine <a href=\"https://www.smashingmagazine.com/2016/03/making-a-wordpress-plugin-that-uses-service-apis/\">published a great guide</a> that explains how to create a plugin that taps into third-party service APIs.</p>
<h2>Adopting Plugins is Life Changing for Some</h2>
<p><a href=\"http://www.zdnet.com/meet-the-team/us/david-gewirtz/\">David Gewirtz</a>, who writes for ZDNet, describes how <a href=\"http://www.zdnet.com/article/a-year-later-what-happens-when-you-adopt-an-open-source-project/\">adopting 10 WordPress plugins changed his life</a>. It&#8217;s one of the coolest stories I&#8217;ve read on the use of the <a href=\"http://wptavern.com/adopt-me-plugin-tag-is-now-in-use-on-wordpress-org\">&#8220;Adopt-Me&#8221; tag</a> in the WordPress plugin directory. One of the best parts of the story is when Gewirtz explains what happened when he adopted a plugin with more than 10K active installs.</p>
<blockquote><p>Seamless Donations had more than 10,000 active users on the day I adopted it. I expected my workload would be roughly the same as for the widget. I&#8217;d make a few security fixes as they came along and tweaks for compatibility.</p>
<p>I was wrong.</p>
<p>I also expected the users to be seasoned webmasters. After all, if you&#8217;re installing an open source project on your server, you&#8217;re obviously going to be experienced with Linux and PHP and all the rest, right? Right?</p>
<p>Oh, how wrong I was.</p></blockquote>
<p>Definitely give this a read if you&#8217;re thinking about adopting a popular plugin.</p>
<h2>Warm Weather Wapuu</h2>
<p>As a traditional part of this series, I end each issue by featuring a Wapuu design. For those who don&#8217;t know, Wapuu is the <a href=\"http://wapuu.jp/2015/12/12/wapuu-origins/\">unofficial mascot</a> of the WordPress project. Since the first day of Spring in the US is Sunday, March 20th, I decided to feature the Wapuu family from WordCamp Miami. Each member of the family except for the basketball one, is a reminder that warmer weather is on the way!</p>
<blockquote class=\"twitter-tweet\"><p lang=\"en\" dir=\"ltr\">The official <a href=\"https://twitter.com/hashtag/wcmia?src=hash\">#wcmia</a> Wapuu family. <a href=\"http://t.co/U2Ao9Yh0qN\">pic.twitter.com/U2Ao9Yh0qN</a></p>
<p>&mdash; WordCamp Miami (@wordcampmiami) <a href=\"https://twitter.com/wordcampmiami/status/606179756472692736\">June 3, 2015</a></p></blockquote>
<p></p>
<p>That&#8217;s it for issue five. If you recently discovered a cool resource or post related to WordPress, please share it with us in the comments.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Sat, 19 Mar 2016 01:40:10 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Jeff Chandler\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:16;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:79:\"WPTavern: WordPress 4.5 to Add oEmbed Support for Twitter Moments and Timelines\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52535\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:89:\"http://wptavern.com/wordpress-4-5-to-add-oembed-support-for-twitter-moments-and-timelines\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:1549:\"<p>WordPress introduced oEmbed support for tweets in its <a href=\"https://codex.wordpress.org/Version_3.4\" target=\"_blank\">3.4 release</a>, but recent changes to Twitter&#8217;s API requires updates to core. On May 1, Twitter will be <a href=\"https://twittercommunity.com/t/deprecation-of-xml-response-type-for-single-tweet-oembed/62013\" target=\"_blank\">removing the XML response format</a> from the single Tweet oEmbed endpoint. Twitter engineer Niall Kennedy opened a <a href=\"https://core.trac.wordpress.org/ticket/36197\" target=\"_blank\">ticket</a> to change the oEmbed URL for single tweets from api.twitter.com to publish.twitter.com.</p>
<p>In addition to the patch Kennedy submitted with the ticket, core committer Dominik Schilling added a patch to extend the provider list to support <a href=\"https://about.twitter.com/moments\" target=\"_blank\">moments</a> and <a href=\"https://support.twitter.com/articles/164083\" target=\"_blank\">timelines</a> from Twitter.</p>
<p>The update was included in this week&#8217;s <a href=\"https://wordpress.org/news/2016/03/wordpress-4-5-beta-4/\" target=\"_blank\">WordPress 4.5 Beta 4 release</a>. To see it in action you can take the latest beta for a test drive or check out the embedded moment and timeline links below.</p>
<p><a class=\"twitter-moment\" href=\"https://twitter.com/i/moments/650667182356082688\">The Obamas\' wedding anniversary</a></p>
<p><a class=\"twitter-grid\" href=\"https://twitter.com/TwitterDev/timelines/539487832448843776\">National Park Tweets</a></p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 18 Mar 2016 21:29:36 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:17;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:48:\"Post Status: WordPress Hosting — Draft podcast\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"https://poststatus.com/?p=22401\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:55:\"https://poststatus.com/wordpress-hosting-draft-podcast/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:2464:\"<p>Welcome to the Post Status <a href=\"https://poststatus.com/category/draft\">Draft podcast</a>, which you can find <a href=\"https://itunes.apple.com/us/podcast/post-status-draft-wordpress/id976403008\">on iTunes</a>, <a href=\"http://www.stitcher.com/podcast/krogsgard/post-status-draft-wordpress-podcast\">Stitcher</a>, and <a href=\"http://simplecast.fm/podcasts/1061/rss\">via RSS</a> for your favorite podcatcher. Post Status Draft is hosted by Joe Hoyle &#8212; the CTO of Human Made &#8212; and Brian Krogsgard.</p>
<p>WordPress hosting is always a hot topic of conversation, due to the difficult task of differentiating one host from another. There is also a lot of money and marketing involved in the industry &#8212; an industry that includes some of the largest companies in the WordPress ecosystem.</p>
<p>In this episode, Joe and I attempt to break down what different types of hosting are available, how they are applicable to WordPress, and even dig in to some of the drama and politics that surround the hosting world.</p>
<p>The techical part of the conversation is the first 50 minutes or so, and around that mark, we get into the politics and non-technical issues around WordPress hosting, as well as tell some stories of how companies have successfully marketed themselves by getting embedded in the WordPress community.</p>
<p><a href=\"https://audio.simplecast.com/32589.mp3\">https://audio.simplecast.com/32589.mp3</a><br />
<a href=\"https://audio.simplecast.com/32589.mp3\">Direct Download</a></p>
<h3>Links</h3>
<ul>
<li><a href=\"http://reviewsignal.com\">Review Signal</a> is a great resource for comparing hosting.</li>
<li>The 2015 <a href=\"http://reviewsignal.com/blog/2015/07/28/wordpress-hosting-performance-benchmarks-2015/\">Review Signal WordPress hosting review</a> is a nice guide.</li>
<li>WordPress <a href=\"https://wordpress.org/hosting/\">recommended hosting page</a> is a source of a number of questions.</li>
<li>We talk about a lot of different hosting companies during this episode. Just Google them.</li>
</ul>
<p>This episode is sponsored by one of our great partners, Prospress. Check out <a href=\"https://poststatus.com/organizations/prospress-inc/\">Prospress&#8217;s Post Status profile</a>, as well as <a href=\"https://prospress.com/?utm_source=post_status&utm_medium=banner&utm_campaign=ps_ads\">their website</a>. They are the makers of the excellent WooCommerce Subscriptions plugin, amongst other helpful products.</p>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 18 Mar 2016 20:02:49 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:15:\"Brian Krogsgard\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:18;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:59:\"WPTavern: Is W3C Replicating the WordPress Pingback System?\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52624\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:68:\"http://wptavern.com/is-w3c-replicating-the-wordpress-pingback-system\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:6137:\"<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/JamesRichmanProfile.png\" rel=\"attachment wp-att-52632\"><img src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/JamesRichmanProfile.png?resize=150%2C150\" alt=\"JamesRichmanProfile\" class=\"alignright size-thumbnail wp-image-52632\" /></a>This post was contributed by guest author <a href=\"http://1stwebdesigner.com/\" target=\"_blank\">James Richman</a>. James writes about marketing, digital design, entrepreneurship, and technology. He has gained most of his experience from running a variety of his own businesses for more than a decade.<br />
&nbsp;</p>
<hr />
<p>On January 12, 2016, the W3C (the World Wide Web Consortium) released its first public working draft of <a href=\"https://www.w3.org/TR/2016/WD-webmention-20160112/\" target=\"_blank\">Webmentions</a>, but the announcement didn’t feel new. In fact, Webmentions have been around since IndieWebCamp created them in 2013, and <a href=\"https://www.toptal.com/wordpress\" target=\"_blank\">top WordPress developers</a> are already using a Webmentions plugin to utilize the tool.</p>
<p>Yet, for those who use WordPress, Webmentions seemed like a retread of WordPress’ Pingback system from the early 2000s, which featured a similar concept.</p>
<p>The Pingback system was invented in 2002 by Stuart Langridge, and in essence, it allowed pieces that were published on different WordPress sites to talk to each other. This is perhaps best explained by walking through an example scenario:</p>
<ol>
<li>Website A posts a new entry on its blog.</li>
<li>Website B responds to that blog post with its own post and links to the post on Website A.</li>
<li>The Pingback system then notifies Website A that Website B wrote about and linked to its blog post.</li>
<li>Website A then verifies the content and link on Website B. If it is not spam, Website A will post a comment on the original blog post linking to Website B’s post.</li>
</ol>
<p>It’s important to note a few things about the Pingback system. First, it is exclusively for WordPress sites, and both sites have to enable Pingback for it to work. Second, the whole Pingback system is automated, streamlining the process of trackbacks, which is the manual equivalent of the automated Pingback.</p>
<p>Yet despite its perks, <a href=\"http://wptavern.com/its-time-for-xml-rpc-in-wordpress-to-hit-the-road\" target=\"_blank\">Pingback system usage</a> declined after the automatic system was taken advantage of by spammers.</p>
<p>The issue of spamming and abuse of such a communication channel has long been the problem with this type of communication channel. Prior to Pingbacks, WordPress used a Trackback system that provided the same type of communication.</p>
<p>The only difference between the Trackback system and Pingbacks is that Trackbacks had to be inputted manually. Spamming problems were just as prevalent with trackbacks. In fact the WPTavern site <a href=\"http://wptavern.com/wptavern-was-trackbacked-to-death\" target=\"_blank\">shut down in 2010</a> because of trackback spam.</p>
<p>So what makes Webmentions different than the Pingbacks and Trackbacks that came before? Well, not all that much. Turns out, Webmentions do the exact same thing as the Pingback system; they just do it better.</p>
<p>The biggest difference between the two is the code they’re composed of. Pingback uses XMLRPC, an outdated approach that encodes data with XML and then transports that data with HTTP. The Pingback system is bulky and slow. Webmentions, on the other hand, uses HTTP and x-www-form-urlencoded content, a much more widely accepted format in today’s world. The result is that Webmentions is much faster and much easier to integrate.</p>
<p>As Pingback’s creator Langridge <a href=\"http://www.kryogenix.org/days/2014/11/29/enabling-webmentions/\" target=\"_blank\">points out on his blog</a>, “XMLRPC is considerably less popular than it was, and is really heavyweight for this sort of thing. We’ve learned since then that HTTP can actually do all this stuff for us way more simply.” If you haven’t guessed, the Pingback founder has converted to Webmentions too.</p>
<p>Webmention’s growing popularity is due to the tool’s ease of use and the fact that it blocks spam effectively with the <a href=\"http://indiewebcamp.com/Vouch\" target=\"_blank\">Vouch protocol</a>. But Webmentions also look better aesthetically in the comments section. Pingback comments look robotic and aren’t exactly readable; a Pingback comment contains the title of the post that sent the Pingback and an ellipsed summary that doesn’t make much sense.</p>
<p>Webmentions look and feel like human comments with the help of the <a href=\"https://github.com/pfefferle/wordpress-semantic-linkbacks\" target=\"_blank\">Semantic Linkbacks plugin</a>. This plugin parses the Webmention linkback and translates it into a full sentence (e.g. ‘Sarah mentioned this post in her article x on site y’) and can even include the author’s profile picture.</p>
<p>Webmentions are quickly replacing the Pingback system because of the tool’s convenience and better implementation to reach a similar goal, and this has been happening prior to W3C’s public endorsement. So what does W3C’s support of <a href=\"http://indiewebcamp.com/webmention\" target=\"_blank\">IndieWebCamp’s creation</a> mean?</p>
<p>Ultimately, W3C’s announcement will likely help cement Webmention’s place on the internet. And so W3C’s recent push can be and should be considered as an effort to standardize the wild web.</p>
<p>The internet was created to communicate and share information, yet individual pieces of content are unable to communicate with each other as easily as users can. The Pingback system was a worthy, but flawed, attempt to change that, and now Pingback’s legacy survives through the broader support and growing distribution of Webmention’s network. If Webmentions become more popular, maybe one day in the future, they will connect the strands of the web together, so that the web will have earned its namesake in truth.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 18 Mar 2016 17:40:57 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:19;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:107:\"WPTavern: Cory Miller and Pippin Williamson Discuss the Importance of Mental Health on Office Hours Podcast\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52599\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:117:\"http://wptavern.com/cory-miller-and-pippin-williamson-discuss-the-importance-of-mental-health-on-office-hours-podcast\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:2006:\"<a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/heart.jpg\" rel=\"attachment wp-att-52604\"><img src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/heart.jpg?resize=1024%2C587\" alt=\"photo credit: rubryan\" class=\"size-full wp-image-52604\" /></a>photo credit: <a href=\"https://www.flickr.com/photos/rubyran2626/2263837091/in/faves-57854010@N05/\">rubryan</a>
<p>In the latest episode of <a href=\"http://officehours.fm/\" target=\"_blank\">Office Hours</a>, a WordPress business podcast, host Carrie Dils interviewed <a href=\"https://ithemes.com/\" target=\"_blank\">Cory Miller</a> and <a href=\"https://pippinsplugins.com/\" target=\"_blank\">Pippin Williamson</a> to discuss the importance of personal wellness. The episode is titled &#8220;<a href=\"http://officehours.fm/podcast/95-2/\" target=\"_blank\">Taking Care of Your Business Means Taking Care of Yourself</a>&#8221; and the video is now available on OfficeHours.fm.</p>
<p>Both Miller and Williamson are successful WordPress entrepreneurs who have recently shared their experiences on maintaining mental health. In this interview Dils chats with the guests about stress and depression and how they can impact your business. They each share tips for how to recharge or &#8220;Go find your soul food,&#8221; as Williamson put it. The episode covers a broad range of topics that aren&#8217;t often discussed in the world of business:</p>
<ul>
<li>Extracting yourself from toxic relationships</li>
<li>Fear of failure/ fear of not working</li>
<li>Setting healthy boundaries</li>
<li>Taking breaks</li>
<li>Establishing a support team</li>
<li>Transparency with peers</li>
<li>Combatting negative thoughts</li>
<li>Finding a mentor</li>
</ul>
<p>If you are experiencing the unique pressures of entrepreneurship or struggling with maintaining your mental health, check out the <a href=\"http://officehours.fm/podcast/95-2/\" target=\"_blank\">latest episode of Office Hours</a> for some practical tips.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 18 Mar 2016 05:25:23 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:20;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:82:\"WPTavern: WPForms Aims to be the Most Beginner Friendly Forms Plugin for WordPress\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52516\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:92:\"http://wptavern.com/wpforms-aims-to-be-the-most-beginner-friendly-forms-plugin-for-wordpress\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:9192:\"<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormsFeaturedImage.png\" rel=\"attachment wp-att-52594\"><img class=\"aligncenter size-full wp-image-52594\" src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormsFeaturedImage.png?resize=817%2C261\" alt=\"WPForms Featured Image\" /></a></p>
<p><a href=\"https://wordpress.org/plugins/wpforms-lite/\">WPForms Lite</a> is a new plugin developed by <a href=\"https://profiles.wordpress.org/smub/\">Syed Balkhi</a> and <a href=\"https://profiles.wordpress.org/jaredatch/\">Jared Atchison</a> that aims to be the most beginner friendly form creation plugin in the market, &#8220;We made simple tasks EASY rather than letting the complex tasks define how hard simple will be,&#8221; Balkhi told the Tavern. I took the plugin for a test drive to see how easy it is to use.</p>
<h2>A Great Introduction</h2>
<p>Upon activation, a WPForms introduction screen is displayed. This screen provides information on how to create your first form and includes an embedded video explaining how. I had to watch the video a few times to follow along but overall it serves its purpose.</p>
<p>If video is not your thing, consider walking through the <a href=\"https://wpforms.com/docs/creating-first-form/\">step by step guide</a> on the WPForms website. Those who want to jump right in can do so by clicking the <strong>WPForms &gt; Add New</strong> link.</p>
<a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormsIntroductionScreen.png\" rel=\"attachment wp-att-52581\"><img class=\"size-full wp-image-52581\" src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormsIntroductionScreen.png?resize=1025%2C675\" alt=\"WP Forms Introduction Screen\" /></a>WPForms Introduction Screen
<h2>WPForm User Interface Forces You to Focus</h2>
<p>One of the first things I noticed is the user interface and how it appears over WordPress. It was shocking at first to see WordPress disappear but the team chose to use this interface to avoid being constrained with WordPress&#8217; user interface. After working with WPForms for more than an hour, I found myself enjoying the fact that the interface forced me to focus on creating my form.</p>
<p>WPForms ships with six different templates to handle the most common use cases. All templates except the Blank Form and the Simple Contact form require you to upgrade to the commercial version. I chose the simple contact form template.</p>
<a href=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormTemplates.png\" rel=\"attachment wp-att-52582\"><img class=\"size-full wp-image-52582\" src=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormTemplates.png?resize=1025%2C559\" alt=\"WPForm Templates\" /></a>WPForm Templates
<p>The simple contact form template automatically adds a name, email, paragraph, and submit fields to the form. An important time saver that sets WPForms apart from other plugins is that, the fields are automatically flagged as required.</p>
<a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormSimpleContactFormTemplate.png\" rel=\"attachment wp-att-52583\"><img class=\"size-full wp-image-52583\" src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormSimpleContactFormTemplate.png?resize=1025%2C605\" alt=\"WPForm Simple Contact Form Template\" /></a>WPForm Simple Contact Form Template
<p>You can rearrange the fields by clicking and dragging them up or down. Rearranging fields is a breeze, doesn&#8217;t require a page refresh, and doesn&#8217;t bog down the browser. When clicking on a field, its properties are displayed on the left where you can configure its label, format, description, and whether or not its required.</p>
<p>Advanced options enable you to determine a field&#8217;s size, placeholder text, default values, and whether to hide the label or sub-labels. Switching between screens and configuring fields is a fast, straightforward process.</p>
<a href=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormFieldOptions.png\" rel=\"attachment wp-att-52584\"><img class=\"size-full wp-image-52584\" src=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormFieldOptions.png?resize=1025%2C671\" alt=\"WPForm Field Options\" /></a>WPForm Field Options
<p>Once the fields are configured, you&#8217;ll want to click the Settings screen. This is where you can configure what happens when a visitor clicks the submit button. You can enable or disable email notifications and use smart tags to configure the form&#8217;s output. This version of WPForms Lite doesn&#8217;t have email templates but Balkhi says it&#8217;s something the team is working on.</p>
<a href=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormSmartTags.png\" rel=\"attachment wp-att-52585\"><img class=\"size-full wp-image-52585\" src=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormSmartTags.png?resize=1025%2C489\" alt=\"WPForm Smart Tags\" /></a>WPForm Smart Tags
<p>Here is what the form&#8217;s output looks like in Thunderbird. Personally, I like Jetpack&#8217;s formatting style more but this could change once WPForms supports email templates.</p>
<a href=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormOutput.png\" rel=\"attachment wp-att-52586\"><img class=\"size-full wp-image-52586\" src=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormOutput.png?resize=836%2C367\" alt=\"WPForm Output\" /></a>WPForms Output
<p>As a comparison, this is what Jetpack&#8217;s Contact Form module output looks like in Thunderbird. The text looks better and I appreciate the bold field names.</p>
<a href=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/JetpacksFormOutput.png\" rel=\"attachment wp-att-52588\"><img class=\"size-full wp-image-52588\" src=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/JetpacksFormOutput.png?resize=809%2C310\" alt=\"Jetpack Contact Form Output\" /></a>Jetpack Contact Form Module Output
<p>WPForms battles spam using two different methods, honeypot and <a href=\"https://wpforms.com/docs/setup-captcha-wpforms/\">reCAPTCHA.</a> reCAPTCHA is a free,  <a href=\"https://www.google.com/recaptcha/intro/index.html\">anti-spam service</a> provided by Google. In order to use it with WPForms, you&#8217;ll need to sign up for an account and add your site key and secret key to WPForm&#8217;s settings page.</p>
<a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormsSettingsPage.png\" rel=\"attachment wp-att-52590\"><img class=\"size-full wp-image-52590\" src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormsSettingsPage.png?resize=1025%2C420\" alt=\"WPForms Settings Page\" /></a>WPForms Settings Page
<p>Once a form is configured and saved, adding it to a page is easy. Simply create a new page in WordPress and in the editor, click the Add Form button. A modal will pop up giving you the option to choose which form to add to the page. You can also choose whether to show the form&#8217;s title and description from this box. When a form is added to the page, WPForms puts a shortcode like [ wpforms id=&#8221;50582&#8243; ] into the content area.</p>
<a href=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormInsertUI.png\" rel=\"attachment wp-att-52592\"><img class=\"size-full wp-image-52592\" src=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormInsertUI.png?resize=498%2C219\" alt=\"UI For Inserting a WPForm into a Page\" /></a>UI For Inserting a WPForm into a Page
<p>I configured WPForms to not apply styling to my form. However, you can choose whether WPForms applies base and form theme styling or base styling only. You&#8217;ll want to experiment with these options to see if your form looks any better with styles applied.</p>
<a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormsTavernContactForm.png\" rel=\"attachment wp-att-52593\"><img class=\"size-full wp-image-52593\" src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/WPFormsTavernContactForm.png?resize=696%2C881\" alt=\"WPForms Contact Form on The Tavern Frontend\" /></a>WPForms Contact Form on The Tavern Frontend
<h2>My Verdict?</h2>
<p>You should know that outside of creating simple contact forms and what&#8217;s available via the standard fields, almost everything else requires you to upgrade to the commercial version, including the ability to store and view form entries in WordPress. However, the plugin doesn&#8217;t nag or annoy you with popups that a commercial version is available. Upgrade prompts are only triggered when trying to access a commercial feature.</p>
<p>After putting WPForms Lite through its paces, it&#8217;s definitely one of the easiest and fastest ways to set up a contact form. It&#8217;s clear by using the supplied templates that Balkhi and his team have considered common pitfalls and have done a great job eliminating them.</p>
<p>I haven&#8217;t looked into the contact form space in WordPress for a few years but after testing WPForms, I&#8217;m motivated to compare some of the most popular plugins in the space to see how each one tackles the user experience. Expect a detailed roundup in the next few weeks.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 18 Mar 2016 02:05:36 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Jeff Chandler\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:21;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:123:\"WPTavern: Stack Overflow Survey Results Show WordPress is Trending Up, Despite Being Ranked Among Most Dreaded Technologies\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52540\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:132:\"http://wptavern.com/stack-overflow-survey-results-show-wordpress-is-trending-up-despite-being-ranked-among-most-dreaded-technologies\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:7217:\"<p><a href=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/stack-overflow-developer-survey-2016.png\" rel=\"attachment wp-att-52554\"><img src=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/stack-overflow-developer-survey-2016.png?resize=1025%2C462\" alt=\"stack-overflow-developer-survey-2016\" class=\"aligncenter size-full wp-image-52554\" /></a></p>
<p>Stack Overflow published the results of its <a href=\"https://stackoverflow.com/research/developer-survey-2016\" target=\"_blank\">2016 Developer Survey</a>, summarizing responses from 56,033 developers in 173 countries. The 45-question survey collected answers from more than twice as many developers as the previous year.</p>
<p>The results were published along with a disclaimer recognizing that the survey is &#8220;biased against devs who don&#8217;t speak English, or who don&#8217;t like taking English-language surveys.&#8221; Nevertheless, since the survey captured responses from such a large number of developers on a site that receives 40 million visitors per month, the results are definitely worth a read.</p>
<p>The average age of developers surveyed was 29.6 years old and 92.8% of the respondents were male. Most of them are at least partially self-taught (69%) with 45% of them having acquired degrees in computer science or a related field.</p>
<p>A quick developer profile of those surveyed shows that the largest section (28%) is made up of those who identify as a full-stack web developer.</p>
<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/developer-profile.png\" rel=\"attachment wp-att-52557\"><img src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/developer-profile.png?resize=1025%2C490\" alt=\"developer-profile\" class=\"aligncenter size-full wp-image-52557\" /></a></p>
<h3>Developers Value Diversity</h3>
<p>Despite the fact that the vast majority of the respondents were male, the results indicate that developers value diversity. In summarizing 42,156 responses, Stack Overflow found the following:</p>
<blockquote><p>Overall, about 73% of developers tell us they think diversity is at least somewhat important in the workplace. 41% of developers say diversity is very important. And developers who most often influence hiring decisions are more likely to believe in the value of diversity than other developer types.</p></blockquote>
<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/diversity.png\" rel=\"attachment wp-att-52544\"><img src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/diversity.png?resize=1025%2C481\" alt=\"diversity\" class=\"aligncenter size-full wp-image-52544\" /></a></p>
<h3>Visual Basic and WordPress Top the List for Most Dreaded Technologies</h3>
<p>WordPress moved up one spot from last year in the ranking of <a href=\"https://stackoverflow.com/research/developer-survey-2016#technology-most-loved-dreaded-and-wanted\" target=\"_blank\">most dreaded technologies</a> that respondents would prefer not to use. This is not surprising given that the most popular tags for posts on Stack Overflow are JavaScript, Java, Android, and Python.</p>
<p><a href=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/most-dreaded.png\" rel=\"attachment wp-att-52546\"><img src=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/most-dreaded.png?resize=1025%2C634\" alt=\"most-dreaded\" class=\"aligncenter size-full wp-image-52546\" /></a></p>
<p>On the other hand, when surveying the <a href=\"https://stackoverflow.com/research/developer-survey-2016#most-popular-technologies-per-occupation\" target=\"_blank\">most popular technologies per developer type</a>, WordPress is currently used by 24.1% of front-end developers. As a side note, this also corresponds roughly to its current <a href=\"http://w3techs.com/technologies/history_overview/content_management/all\" target=\"_blank\">market share</a> (26%).</p>
<h3>WordPress and JavaScript Technologies Are Trending Up</h3>
<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/trending-technologies.png\" rel=\"attachment wp-att-52548\"><img src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/trending-technologies.png?resize=1025%2C842\" alt=\"trending-technologies\" class=\"aligncenter size-full wp-image-52548\" /></a></p>
<p>Newer technologies like React, Node.js, and AngularJS are trending, with the above percentages representing the change in share of Stack Overflow votes between January 2015 and January 2016. All three are also among the <a href=\"https://stackoverflow.com/research/developer-survey-2016#technology-top-paying-tech\" target=\"_blank\">top-paying technologies</a> per occupation for both full stack and front-end developers.</p>
<p>It&#8217;s worth noting that all of these trending technologies are also becoming more readily integrated with WordPress, and will be more widely used when the REST API is finally merged with core.</p>
<p>Despite the fact that WordPress ranks second in the most dreaded technology category, it is also trending up 18.5% from 2015. According to these results, WordPress&#8217; popularity is increasing at a rate similar to that of many JavaScript-based technologies.</p>
<h3>Job Title and Remote Work Are Important Priorities for Experienced Developers</h3>
<p>The 2016 results found that 91% of developers surveyed worldwide are “gainfully employed” (full-time, self-employed, or freelance). Developers are in high demand, with just 15% of respondents actively looking for a job. It&#8217;s also interesting to note that 78% of developers surveyed are interested in exploring new employment opportunities.</p>
<p>If you&#8217;re trying to hire a developer, one of the most important things to consider is that they highly prioritize being able to work remotely. Responses from 49,521 developers indicate that as they gain more years of experience, both job title and remote work options are increasing priorities.</p>
<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/priorities.png\" rel=\"attachment wp-att-52549\"><img src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/priorities.png?resize=1025%2C675\" alt=\"priorities\" class=\"aligncenter size-full wp-image-52549\" /></a></p>
<p>Only 30% of developers currently work remotely part-time or full-time, but Stack Overflow found that remote developers are more likely to love their jobs than other developers. If you own a company that hires developers, chances are that you will attract a larger, more experienced pool of applicants if employees are allowed to work remotely.</p>
<p>Developers who want to get a better understanding of the broader industry&#8217;s work challenges, salary expectations, and most popular technologies will want to review the full <a href=\"https://stackoverflow.com/research/developer-survey-2016\" target=\"_blank\">results of the survey</a>.</p>
<p>The document includes some important feedback for the WordPress community to consider. Although WordPress is among the technologies that are trending up, the broader development community still does not seem to enjoy working with it. How can we make the software more developer-friendly without compromising user friendliness?</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 17 Mar 2016 21:57:29 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:22;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:42:\"WPTavern: WPWeekly Episode 226 – Burnout\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:44:\"http://wptavern.com?p=52552&preview_id=52552\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:48:\"http://wptavern.com/wpweekly-episode-226-burnout\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:2888:\"<p>In this episode of WordPress Weekly, <a href=\"http://marcuscouch.com/\">Marcus Couch</a> and I discuss the symptoms of burnout and share tips on how to prevent it. We provide a status update on WordPress 4.5 and discuss my experience hooking up a site to Apple News Publisher. To round out the show, Marcus shares his experience using Shopify&#8217;s new WordPress plugin.</p>
<h2>Stories Discussed:</h2>
<p><a href=\"http://wptavern.com/when-contributing-to-wordpress-full-time-leads-to-burnout\">When Contributing to WordPress Full-Time Leads to Burnout</a><br />
<a href=\"http://wptavern.com/wordpress-global-translation-day-set-for-april-24-2016\">WordPress Global Translation Day Set for April 24, 2016</a><br />
<a href=\"http://wptavern.com/tickets-for-wordcamp-jacksonville-2016-now-on-sale\">Tickets for WordCamp Jacksonville 2016 Now on Sale</a><br />
<a href=\"http://wptavern.com/how-to-connect-your-wordpress-powered-site-to-apple-news-publisher\">How to Connect Your WordPress Powered Site to Apple News Publisher</a><br />
<a href=\"http://wptavern.com/shopify-launches-official-plugin-for-wordpress\">Shopify Launches Official Plugin for WordPress</a></p>
<h2>Plugins Picked By Marcus:</h2>
<p><a href=\"https://wordpress.org/plugins/shopify-ecommerce-shopping-cart/\">Shopify</a> is an eCommerce plugin for WordPress that makes selling products on your site simple. In just a few clicks, you can create a Buy Button that lets visitors securely checkout from any page on your site.</p>
<p><a href=\"https://wordpress.org/plugins/woomaxmin/\">WooMaxMin for WooCommerce </a>gives you the ability to set up minimum and maximum purchase limits for your customers.</p>
<p><a href=\"https://wordpress.org/plugins/lifterlms-wpmktgengine-extension/\">LifterLMS &#8211; WPMKTGENGINE Extension </a>allows you to automatically track all of the participation within a LifterLMS installation from your WPMktgEngine customer database. You can use this information to incorporate their participation with courses and memberships along with other activity information to target messages, create new products that will hit the mark, and build tighter and trusting relationships with customers.</p>
<h2>WPWeekly Meta:</h2>
<p><strong>Next Episode:</strong> Wednesday, March 23rd 9:30 P.M. Eastern</p>
<p><strong>Subscribe To WPWeekly Via Itunes: </strong><a href=\"https://itunes.apple.com/us/podcast/wordpress-weekly/id694849738\" target=\"_blank\">Click here to subscribe</a></p>
<p><strong>Subscribe To WPWeekly Via RSS: </strong><a href=\"http://www.wptavern.com/feed/podcast\" target=\"_blank\">Click here to subscribe</a></p>
<p><strong>Subscribe To WPWeekly Via Stitcher Radio: </strong><a href=\"http://www.stitcher.com/podcast/wordpress-weekly-podcast?refid=stpr\" target=\"_blank\">Click here to subscribe</a></p>
<p><strong>Listen To Episode #226:</strong><br />
</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 17 Mar 2016 21:05:23 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Jeff Chandler\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:23;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:25:\"Matt: Saving the Open Web\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:22:\"https://ma.tt/?p=46383\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:42:\"https://ma.tt/2016/03/saving-the-open-web/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:230:\"<p><a href=\"http://buytaert.net/can-we-save-the-open-web\">Dries Buytaert asks &#8220;Can we save the open web?&#8221;</a> and makes an amazing case for why we should. I agree with and endorse basically everything in that post.</p>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 17 Mar 2016 14:39:32 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:4:\"Matt\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:24;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:88:\"WPTavern: Fight for the Future Launches “Save Security” Campaign in Support of Apple\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52486\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:92:\"http://wptavern.com/fight-for-the-future-launches-save-security-campaign-in-support-of-apple\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:3063:\"<p><a href=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/save-security.png\" rel=\"attachment wp-att-52525\"><img src=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/save-security.png?resize=1025%2C456\" alt=\"save-security\" class=\"aligncenter size-full wp-image-52525\" /></a></p>
<p><a href=\"https://www.fightforthefuture.org/\" target=\"_blank\">Fight for the Future</a>, a non-profit organization that works to preserve freedom of expression on the web, launched its new &#8220;<a href=\"https://savesecurity.org/\" target=\"_blank\">Save Security</a>&#8221; campaign today in support of Apple. The FBI has requested that the company hack into an iPhone recovered from one of the terrorists involved in the <a href=\"https://en.wikipedia.org/wiki/2015_San_Bernardino_attack\" target=\"_blank\">San Bernardino mass shooting</a> to assist in the criminal investigation.</p>
<p>Apple has refused numerous court orders to create a new tool that would allow the government to circumvent the iPhone&#8217;s security measures that protect the encrypted communications of private individuals. The company will go to court on March 22nd for hearing in Riverside, CA. Fight for the Future plans to display thousands of statements in support of Apple from Internet users outside the courthouse.</p>
<p>The Save Security campaign website summarized what is at stake with the government forcing Apple to weaken its encryption:</p>
<blockquote><p>In its attacks on Apple, the FBI is seeking a legal precedent that would let them force any company to weaken the security of its products. Engineers use consumer products like the iPhone to maintain the most sensitive systems on the planet. Hospitals. Air traffic control. Nuclear power. What the FBI is asking for puts lives at risk, by undermining security everywhere.</p></blockquote>
<p>Two weeks ago, Automattic <a href=\"https://transparency.automattic.com/2016/03/03/automattic-and-wordpress-com-stand-with-apple-to-support-digital-security/\" target=\"_blank\">announced</a> that it stands with Apple to support digital security. The company <a href=\"https://cloudup.com/iZG9vzAV3U3\" target=\"_blank\">filed an amicus brief</a> in support of Apple alongside Cloudflare, Ebay, Kickstarter, Twitter, GitHub, Reddit, Square, and other leading technology companies.</p>
<p>&#8220;The fact is that if a security flaw exists, there is no way to ensure that only trusted governments, investigating a crime, can exploit that vulnerability,&#8221; Automattic&#8217;s attorney Paul Sieminski said in the announcement. &#8220;Improving security for everyone means aggressively finding and closing holes, not creating new ones.&#8221;</p>
<p>If you want to join in Fight for the Future&#8217;s campaign to support Apple, the <a href=\"https://savesecurity.org/\" target=\"_blank\">SaveSecurity.org</a> website offers a profile picture you can use as well as a website banner (see <a href=\"https://savesecurity.org/?ALWAYS_SHOW_SC_BANNER=true\" target=\"_blank\">live demo</a>) to raise awareness.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Wed, 16 Mar 2016 22:56:45 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:25;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:76:\"WPTavern: How to Connect Your WordPress Powered Site to Apple News Publisher\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52502\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:86:\"http://wptavern.com/how-to-connect-your-wordpress-powered-site-to-apple-news-publisher\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:5623:\"<p>When Apple News Publisher <a href=\"http://www.apple.com/pr/library/2015/06/08Apple-Announces-News-App-for-iPhone-iPad.html\">launched in September, 2015</a>, it partnered with 20 publishers including, ESPN, The New York Times, and CNN. Today, publishers large and small are able to <a href=\"https://icloud.com/newspublisher\">sign up</a> to Apple&#8217;s <a href=\"https://developer.apple.com/news-publisher/\">News Publisher program</a> which delivers content from sites to devices running iOS 9 or above. Since its launch, the service has garnered more than <a href=\"http://9to5mac.com/2015/10/27/apple-news-40-million/\">40 million users</a>.</p>
<p>Aside from its user base, one of the main benefits to syndicating through News Publisher is that content is optimized across all of Apple&#8217;s iOS 9 devices, providing a better user experience as opposed to RSS readers that can render content unpredictably.</p>
<h2>Configuring Sites for News Publisher</h2>
<p>There are three options for publishers to push content to the service. You can use the content creation screen inside of News Publisher, connect an existing site using a plugin, or submit the URL to your site&#8217;s RSS feed.</p>
<a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/NewsPublisherContentAuthoring.png\" rel=\"attachment wp-att-52504\"><img class=\"size-full wp-image-52504\" src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/NewsPublisherContentAuthoring.png?resize=1025%2C544\" alt=\"News Publisher Content Creation Screen\" /></a>News Publisher Content Creation Screen
<p>I submitted the Tavern to News Publisher a few weeks ago and received a notification today that the site is approved. When submitting your site, you&#8217;ll need to give Apple your contact phone number and physical address. You&#8217;ll also need to upload a PNG logo that&#8217;s transparent, less than 2MB in size, and meets <a href=\"https://help.apple.com/newspublisher/icloud/#/apd7c9ae979c\">Apple&#8217;s logo guidelines</a>.</p>
<a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/PublisherSubmissionProcess2.png\" rel=\"attachment wp-att-52506\"><img class=\"size-full wp-image-52506\" src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/PublisherSubmissionProcess2.png?resize=837%2C652\" alt=\"News Publisher Submission Process\" /></a>News Publisher Submission Process
<p>If you use WordPress and your site is approved, consider using the <a href=\"https://wordpress.org/plugins/publish-to-apple-news/\">Publish to Apple News</a> plugin developed by <a href=\"http://www.alleyinteractive.com/\">Alley Interactive</a> and other contributing developers. Once installed, visit your channel&#8217;s administration page in News Publisher and click on the API Key link. This will give you the three things needed to connect your site.</p>
<a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/ChannelAPIInfo.png\" rel=\"attachment wp-att-52507\"><img class=\"size-full wp-image-52507\" src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/ChannelAPIInfo.png?resize=693%2C536\" alt=\"Channel API Information\" /></a>Channel API Information
<p>Login to your WordPress site and visit <strong>Settings &gt; Apple News</strong> and insert the following information into the corresponding fields. Since the field names and order don&#8217;t match, I created this short list.</p>
<ul>
<li>Channel ID &gt; API Channel</li>
<li>Key ID &gt; API Key</li>
<li>Secret &gt; API Secret</li>
</ul>
<p>From the settings screen, you can configure if the plugin should publish and update articles to Apple News automatically and whether to do it at the same time as WordPress in one action. You can also choose which Post Types are available. At the bottom of the screen, there are a host of design options that enable you to alter the display of how your articles look in Apple News.</p>
<a href=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/NewsPublisherOptionsPage.png\" rel=\"attachment wp-att-52508\"><img class=\"size-full wp-image-52508\" src=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/NewsPublisherOptionsPage.png?resize=757%2C835\" alt=\"News Publisher Plugin Options Page\" /></a>News Publisher Plugin Options Page
<p>I don&#8217;t know what the Tavern&#8217;s content looks like on News Publisher as I wait for the initial series of posts to be approved. For the time being, the content is styled with the default settings.</p>
<h3>Monetizing Your Feed</h3>
<p>To monetize your News Publisher feed, enable iTunes connect with your developer ID. If you don&#8217;t have one, you&#8217;ll need to enroll in <a href=\"https://developer.apple.com/programs/enroll/\">Apple&#8217;s Developer Program </a>Once that&#8217;s complete, sign the Apple News Content Agreement and provide your tax and banking information on iTunes Connect. Note, that in order to <a href=\"https://help.apple.com/newspublisher/icloud/#/apdd44eeeeeb\">place ads</a> in your content, you need to publish articles from a CMS like WordPress.</p>
<h2>Is News Publisher Worth the Hassle?</h2>
<p>As a new publisher to Apple&#8217;s syndication system, it&#8217;s too early to tell if signing up was a waste of time or a benefit to readers. In the next week or two, I&#8217;ll report my findings, including feedback from Tavern readers on what they think of the format. Until then, you can subscribe to our channel by <a href=\"https://apple.news/TQYQeeBHDRce_JL3U0PCWGw\">opening this link</a> on a device that uses iOS 9 or later. If you subscribe to the Tavern, tell us about your experience in the comments.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Wed, 16 Mar 2016 20:46:00 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Jeff Chandler\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:26;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:33:\"Matt: Kat Hagan Works Differently\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:22:\"https://ma.tt/?p=46347\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:50:\"https://ma.tt/2016/03/kat-hagan-works-differently/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:246:\"<p><span class=\"embed-youtube\"></span></p>
<p>&nbsp;</p>
<p><a href=\"http://workdifferent.com/wdstories-kat-hagan-automatic/\">Kat Hagan is an engineer and a team lead at Automattic, and you can read all about her story that led her there</a>.</p>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Wed, 16 Mar 2016 18:51:19 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:4:\"Matt\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:27;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:78:\"WPTavern: Dyad: A Beautiful Free WordPress Theme for Photographers and Foodies\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52207\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:87:\"http://wptavern.com/dyad-a-beautiful-free-wordpress-theme-for-photographers-and-foodies\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:2976:\"<p><a href=\"https://wordpress.org/themes/dyad/\" target=\"_blank\">Dyad</a> is the latest free theme release from the folks at Automattic. It was designed to suit creative websites, with written content and photographs receiving equal treatment.</p>
<p>The theme is actually a fork of <a href=\"https://wordpress.org/themes/receptar/\" target=\"_blank\">Receptar</a>, a theme by <a href=\"http://www.webmandesign.eu/\" target=\"_blank\">WebMan Design</a>. The original split-screen, book-like design for single posts was created to look like a modern cook book.</p>
<p>Automattic designers added a featured content slider to the homepage along with a sticky top navigation menu, among other changes. The featured tag can be set in the customizer. If you don&#8217;t want to use the slider, the theme will default to displaying the custom header image (which is set by adding a featured image to the page assigned as the static homepage).</p>
<p><a href=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/dyad-screenshot.png\" rel=\"attachment wp-att-52479\"><img src=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/dyad-screenshot.png?resize=660%2C683\" alt=\"dyad-screenshot\" class=\"aligncenter size-full wp-image-52479\" /></a></p>
<p>The homepage sports a grid layout for posts with featured images and excerpts side-by-side. Single posts display the featured image and title at 50% of of the screen with the content on the other half. The layout responds nicely for mobile devices.</p>
<p><a href=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/dyad-single-post-responsive.png\" rel=\"attachment wp-att-52495\"><img src=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/dyad-single-post-responsive.png?resize=660%2C391\" alt=\"dyad-single-post-responsive\" class=\"aligncenter size-full wp-image-52495\" /></a></p>
<p>Dyad includes one expandable widget area in the footer. Any widgets dropped into this area will expand to fit one, two, three, or four columns. The footer also includes space for a social links menu with icons available for 26 different social accounts.</p>
<p>Check out a <a href=\"https://dyaddemo.wordpress.com/\" target=\"_blank\">live demo</a> of Dyad on WordPress.com to see the theme in action.</p>
<p>One consideration for using the theme is that you will always need to have large-sized feature images readily available to maintain the design. The optimal size is 1800px x 1280px. This shouldn&#8217;t be a problem for photography, cooking, portfolio, or other image-heavy sites. However, if your content is more text-oriented with a few scattered images, you may want to select a different theme.</p>
<p><a href=\"https://wordpress.org/themes/dyad/\" target=\"_blank\">Dyad</a> is Automattic&#8217;s 87th free theme release on WordPress.org. Full documentation for setting it up is available on the theme&#8217;s WordPress.com <a href=\"https://wordpress.com/themes/dyad/\" target=\"_blank\">homepage</a>.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Wed, 16 Mar 2016 17:47:01 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:28;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:94:\"WPTavern: White House Seeks Feedback on GitHub for Government-Wide Open Source Software Policy\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52437\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:104:\"http://wptavern.com/white-house-seeks-feedback-on-github-for-government-wide-open-source-software-policy\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:3710:\"<a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/white-house.jpg\" rel=\"attachment wp-att-52474\"><img src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/white-house.jpg?resize=1024%2C520\" alt=\"photo credit: The White House Washington DC - (license)\" class=\"size-full wp-image-52474\" /></a>photo credit: <a href=\"http://www.flickr.com/photos/71380981@N06/19902559769\">The White House Washington DC</a> &#8211; <a href=\"https://creativecommons.org/licenses/by-nc-nd/2.0/\">(license)</a>
<p>The White House is <a href=\"https://sourcecode.cio.gov/\" target=\"_blank\">calling for developers to comment</a> on its proposed draft for a Government-wide Open Source Software policy. In the request for public comment, the <a href=\"https://www.whitehouse.gov/omb/\" target=\"_blank\">White House Office of Management and Budget (OMB)</a> outlined two major goals for the new policy:</p>
<blockquote><p>This policy requires that, among other things: (1) new custom code whose development is paid for by the Federal Government be made available for reuse across Federal agencies; and (2) a portion of that new custom code be released to the public as Open Source Software (OSS).</p></blockquote>
<p>The pilot program proposed in the draft policy would require &#8220;covered agencies to release at least 20 percent of their newly-developed custom code, in addition to the release of all custom code developed by Federal employees at covered agencies as part of their official duties.&#8221;</p>
<p>Specifically, the government is asking for feedback on a list of considerations regarding releasing custom code as open source. A few examples include the following:</p>
<ul>
<li>To what extent is the proposed pilot an effective means to fuel innovation, lower costs, benefit the public, and meet the operational and mission needs of covered agencies?</li>
<li>Would a different minimum percentage be more or less effective in achieving the goals above?</li>
<li>To what extent could this policy have an effect on the software development market? For example, could such a policy increase or decrease competition among vendors, dollar amounts bid on Federal contracts, or total life-cycle cost to the Federal Government?</li>
<li>What opportunities and challenges exist in Government-wide adoption of an open source policy?</li>
</ul>
<p>Encouraging developers to produce reusable code to be shared across federal agencies could significantly lower development costs and improve government efficiency. It could also promote transparency of the code quality produced by vendors and employees.</p>
<p>After the embarrassing <a href=\"http://nymag.com/daily/intelligencer/2013/10/silicon-valley-reacts-to-healthcaregov.html\" target=\"_blank\">debacle of Healthcare.gov</a>, which cost taxpayers hundreds of millions of dollars, it&#8217;s good to see government embracing open source in an expanded capacity.</p>
<h3>How to Contribute</h3>
<p>You can join the conversation by participating in discussions on the <a href=\"https://github.com/whitehouse/source-code-policy/issues\" target=\"_blank\">source code policy GitHub issues</a> or by logging a new issue. The White House even welcomes changes and line edits to the policy content via <a href=\"https://github.com/whitehouse/source-code-policy/edit/gh-pages/pages/index.md\" target=\"_blank\">pull requests</a>.</p>
<p>Anyone can <a href=\"https://github.com/WhiteHouse/source-code-policy\" target=\"_blank\">contribute on GitHub</a> to help shape the federal source code policy until April 11, 2016. At that time public contributions will be closed and the White House will analyze feedback while creating the final policy.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Tue, 15 Mar 2016 22:54:28 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:29;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:56:\"WPTavern: Shopify Launches Official Plugin for WordPress\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52450\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:66:\"http://wptavern.com/shopify-launches-official-plugin-for-wordpress\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:2620:\"<p>Shopify <a href=\"https://www.shopify.com/blog/113145925-introducing-shopify-for-wordpress\" target=\"_blank\">announced</a> today that the company is jumping into the WordPress market with a new official plugin and three WordPress themes. The Canadian company captures just <a href=\"https://wappalyzer.com/categories/ecommerce\" target=\"_blank\">8% of the e-commerce technology market share</a>, trailing WooCommerce (31%), Magento (19%), OpenCart (11%), Prestashop (10%), and others (13%).</p>
<p>The new <a href=\"https://github.com/Shopify/buy-button-wordpress\" target=\"_blank\">Shopify Buy Button</a> plugin is intended for users who already have a business set up on WordPress and are only looking to sell a few products with a buy button, as opposed to a full-fledged store. It allows users to sell products that have already been added to their Shopify stores and requires a $9/month Shopify Lite subscription.</p>
<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/shopify-wp.gif\" rel=\"attachment wp-att-52463\"><img src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/shopify-wp.gif?resize=975%2C549\" alt=\"shopify-wp\" class=\"aligncenter size-full wp-image-52463\" /></a></p>
<p>Shopify partnered with Themezilla, Themify, and Ultralinx to build Shopify-powered WordPress themes. The themes are only free to download for a limited time, which leaves users without updates unless they purchase the theme from the commercial provider.</p>
<p>The corresponding plugin is currently hosted on GitHub but is in the process of being reviewed for WordPress.org, according to product representative Daniel Patricio.</p>
<p>&#8220;Many users have already been using it through the themes for a couple weeks now so we just wanted to get it out there to the rest of our users,&#8221; Patricio said. &#8220;We are in the review cycle to get it listed and should be up shortly where people will be able to get updates as we add features.&#8221;</p>
<p>It is not advisable to use or install the plugin until it is hosted on WordPress.org, as Shopify currently has no way to deliver security updates to users. It is unclear why the company chose to officially launch its new WordPress integration without updates in mind, but this is a major concern. If a vulnerability were discovered, the company has no straightforward way to alert people who have downloaded the plugin from GitHub.</p>
<p>When asked for an ETA for the plugin&#8217;s arrival on WordPress.org, Patricio said, &#8220;We don&#8217;t have a timeline yet but will be getting it up there soon.&#8221;</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Tue, 15 Mar 2016 19:23:16 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:30;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:38:\"Matt: What’s in My Bag, 2016 edition\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:22:\"https://ma.tt/?p=46172\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:51:\"https://ma.tt/2016/03/whats-in-my-bag-2016-edition/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:13433:\"<p>Many people have been requesting an update to <a href=\"https://ma.tt/2015/01/whats-in-my-bag-2014/\">my what&#8217;s in my bag post from last year</a>. Almost every single item in the bag has changed, this year has had particularly high turnover. We&#8217;re <a href=\"https://ma.tt/2015/05/macbook-usb-c-review/\">still in a weird teenage period of USB-C adoption</a>, and I hope by next year to have many fewer non-USB-C or Lightning cables. Things with a asterisk * are the same from last year. Without further ado:</p>
<p><a href=\"http://i0.wp.com/ma.tt/files/2016/02/DSC_1387.jpg?ssl=1\"><img class=\"aligncenter size-full wp-image-46178\" src=\"http://i0.wp.com/ma.tt/files/2016/02/DSC_1387.jpg?w=604&ssl=1\" alt=\"\" /></a></p>
<ol>
<li><a href=\"http://shop.lululemon.com/products/clothes-accessories/men-bags/Mens-Cruiser-Backpack\">This is my favorite item of the new year, a Lululemon Cruiser backpack</a> that has a million pockets both inside and outside, and allows me to carry more stuff, more comfortably, and access it faster. Lululemon updates their products and designs every few months, but if you ever spot something like this online or in the store check it out. Hat tip on this one to <a href=\"http://roseinmidair.com/\">Rose</a>.</li>
<li><a href=\"http://www.amazon.com/gp/product/B00TX5YUCM\">A short Lightning + micro USB cable</a>, which is great for pairing with a battery pack. I sometimes carry a few of these around and give them away all the time, as &#8220;do you have a light?&#8221; has evolved to &#8220;do you have a charge?&#8221; in the new millenium.</li>
<li><a href=\"http://www.amazon.com/gp/product/B012V56D2A\">Short regular USB to USB-C cable</a>.</li>
<li><a href=\"http://www.amazon.com/gp/product/B000BX47X2\">Belkin Retractable Ethernet</a>. *</li>
<li>Anker <a href=\"http://www.amazon.com/gp/product/B0119OI9XU\">USB-C to USB-C cable</a>. Make sure to read the reviews when you buy these to get the ones that do the proper voltage. I can charge a Macbook with this, and the new Nexus 5x, directly from the battery pack or the #43 wall charger.</li>
<li><a href=\"http://www.amazon.com/gp/product/B000CDFYNS\">Mini-USB cable</a>, which I use for the odd older device (like a Nikon camera) that still does mini-USB (that older big one). Would love to get rid of this one.</li>
<li>A charge cable for #45, the Fitbit Charge HR. <a href=\"http://www.amazon.com/gp/product/B0142A96G2\">You can buy these cheap on Amazon</a>, and if you lose it you&#8217;re out of luck, so I usually keep a few at home and one in my bag.</li>
<li><a href=\"http://www.apple.com/shop/product/ME291AM/A/lightning-to-usb-cable\">This is my goldilocks regular lightning cable, not too long and not too short</a>, 0.5m.</li>
<li>A retractable micro-USB.</li>
<li><a href=\"http://www.apple.com/shop/product/MLA02LL/A/magic-mouse-2\">Apple Magic Mouse 2</a>, the new one that charges via Lightning, natch.</li>
<li>Way over to the right, <a href=\"http://www.muji.us/store/stationery/notebooks.html\">a small Muji notebook</a>.</li>
<li>This is a weird but cool cable, <a href=\"http://www.amazon.com/gp/product/B00T7BK9PY\">basically bridges USB to Norelco shavers</a>. I use a Norelco beard trimmer and for some reason all of these companies think we want to carry around proprietary chargers, this is a slightly unwieldy cable but better than carrying around the big Norelco power brick.</li>
<li>Lockpick set. *</li>
<li><a href=\"https://www.honest.com/bath-and-body/honest-organic-lip-balm-trio\">Lavender mint organic lip balm from Honest Co</a>, which I think I got for free somewhere.</li>
<li><a href=\"http://www.aesop.com/usa/skin-care/lip/rosehip-seed-lip-cream.html\">Aesop rosehip seed lip cream</a>, which I bought mostly for the smell, when it&#8217;s done I&#8217;ll probably switch to <a href=\"http://www.aesop.com/usa/skin-care/lip/avail-lip-balm.html\">their lip balm</a>. (I should do a cosmetics version of this for my dopp kit, it&#8217;s had lots of trial and error as well.) I love Aesop, especially t<a href=\"http://www.aesop.com/usa/body-care/cleanse/resurrection-aromatique-hand-wash-4.html\">heir Resurrection line</a>.</li>
<li><a href=\"http://www.amazon.com/Aveda-Blue-Oil-0-24-oz/dp/B0031KN9UE\">Aveda Blue Oil</a> that I find relaxing. *</li>
<li><a href=\"http://www.amazon.com/Apple-Thunderbolt-Cable-0-5-Meter-MD862LL/dp/B00WVDGZM6/\">Short thunderbolt to thunderbolt cable</a>, which is great for transferring between computers. *</li>
<li>Muji international power adapter, much simpler, lighter, and cooler than what I used before.</li>
<li>Way on the top right, this is probably the least-travel-friendly thing I travel with, but the utility is so great I put up with it. It&#8217;s the <a href=\"http://www.amazon.com/gp/product/B00D4LBOV6\">Sennheiser Culture Series Wideband Headset</a>, which I use for podcasts, Skype, Facetime, Zoom, and Google Hangout calls with external folks and teams inside of Automattic. Light, comfortable, great sound quality, and great at blocking out background noise so you don&#8217;t annoy other people on the call. Worth the hassle.</li>
<li>A customized Macbook Pro 15&#8243;, in space grey, with the WordPress logo that shines through.</li>
<li><a href=\"http://www.amazon.com/Belkin-Car-Vent-Mount-Smartphones/dp/B00O5JARCI/\">Belkin car mount</a>, which is great for rentals. *</li>
<li>A <a href=\"http://www.amazon.com/gp/product/B00X8Z47XA\">USB 3.0 SD / CompactFlash / etc reader</a>.</li>
<li>microSD to SD adapter, with a 64gb micro SD in it. Good for cameras, phones, and occasionally transferring files. Can be paired with the card reader if the computer has a USB port but not a SD reader. <a href=\"http://www.amazon.com/dp/B010Q588D4/\">When you get a microSD card it usually comes with this</a>.</li>
<li>One of my new favorite things: <a href=\"http://www.dxo.com/us/dxo-one\">DxO One camera</a>. It&#8217;s a SLR-quality camera that plugs in directly to the lightning port on your iPhone, and can store the photos directly on your phone. Photo quality is surprisingly good, the only problem I&#8217;ve had with it is the lightning port pop-up will no longer close. The other similar device I tried but wasn&#8217;t as good was the <a href=\"http://www.getolympus.com/us/en/air-a01.html\">Olympus Air A01</a>, so I just carry around the DxO now.</li>
<li><a href=\"https://www.amazon.com/gp/product/B007PTCFFW/\">TP-LINK TL-WR702N Wireless N150 Travel Router</a>, which works so-so. Not sure why I still carry this, haven&#8217;t used it in a while. *</li>
<li><a href=\"http://www.amazon.com/gp/product/B018TGGH4E\">Aukey car 49.5W 3-port USB adapter</a>, which has two high-powered USB ports and a Quick Charge 3.0 USB-C port.</li>
<li>My favorite external battery right now, the <a href=\"http://www.amazon.com/gp/product/B019IFIJW8\">RAVPower 20100mAh Portable Charger</a>, also with Quick Charge 3.0 and a USB-C port. This thing is a beast, can charge a USB-C Macbook too.</li>
<li><a href=\"http://www.amazon.com/High-Resolution-Display-Adaptive-PagePress-Sensors/dp/B00IOY8XWQ\">Kindle Voyage</a> with the <a href=\"http://www.amazon.com/Limited-Edition-Premium-Leather-Origami/dp/B00NO84J0W\">brown leather cover</a>. *</li>
<li>Macbook power adapter.</li>
<li>Very cool <a href=\"http://en-us.sennheiser.com/momentum-wireless-headphones-with-mic\">Sennheiser Momentum Wireless</a> headphones in ivory,customized with the WordPress logo. I&#8217;m testing this out as a possible gift for <a href=\"https://automattic.com/\">Automatticians</a> when they reach a certain number of years at the company. For a fuller review, <a href=\"https://ma.tt/2015/04/best-headphones-spring-2015-edition/\">see this post</a>.</li>
<li><a href=\"https://www.cotopaxi.com/products/waterbottle-white?variant=8128462529\">Cotopaxi water bottle</a> that I got for free at the <a href=\"https://sas.summit.co/\">Summit at Sea conference</a>. The backpack has a handy area to carry a water bottle, and I&#8217;ve become a guy who refills water bottles at the airport instead of always buying disposable ones.</li>
<li>Special cord for the #30 Momentum headphones.</li>
<li><a href=\"http://www.amazon.com/dp/B004C51HRY/\">Retractable 1/8th inch audio cable</a>. *</li>
<li><a href=\"http://www.amazon.com/dp/B00IYA2ZJW/\">Powerbeats 2 Wireless headphones</a> that I use for running, working out, or just going around the city.</li>
<li><a href=\"http://www.amazon.com/gp/product/B00E9W11QM\">Belkin headphone splitter</a>, for sharing audio when watching a movie on a plane. *</li>
<li><a href=\"https://www.google.com/chromecast/speakers/\">Chromecast audio</a>, which I&#8217;ve never used but it&#8217;s so small and light I carry it around just in case.</li>
<li><a href=\"https://www.google.com/chromecast/tv/\">Chromecast TV</a>, which I&#8217;ve also never used but also small and light and I&#8217;m sure it&#8217;ll come in handy one of these days.</li>
<li>Verizon iPhone 6s+, which is normal, but the new thing here is I&#8217;ve stopped carrying a wallet, and a separate phone case, and now carry this big &#8216;ol <a href=\"http://www.amazon.com/gp/product/B00VGDQRAW\">Sena Heritage Wallet Book</a>. At first I felt utterly ridiculous doing this as it feels GINORMOUS at first, but after it wore in a little bit, and I got used to it, it&#8217;s so freeing to only have one thing to keep track of, and it&#8217;s also forced me to carry a lot less than I used to in my wallet.</li>
<li>Maison Bonnet sunglasses. Hat tip to <a href=\"https://about.me/tonyconrad\">Tony</a>.</li>
<li>Stickers! <a href=\"http://wapuu.jp/\">Wapuu</a> and <a href=\"https://slack.com/\">Slack</a>.</li>
<li><a href=\"http://www.amazon.com/Blinks-Ultralight-Comfortable-Contoured-Blindfold/dp/B000WNX21Y/\">Bucky eye shades</a>, like an eye mask but has a curve so it doesn’t touch your eyes. I don’t use this often but when I do it’s a life-saver. *</li>
<li>My favorite USB wall plug, after trying dozens, is this <a href=\"https://www.amazon.com/gp/product/B00UWMCXD8/\">Aukey 30W / 6A travel wall charger</a>. I love the foldable plug, and it&#8217;s really fast.</li>
<li>I generally only have one wall charger, but temporarily carrying around this <a href=\"http://www.amazon.com/gp/product/B019C23ZGW\">Tronsmart 33W USB-C + USB charger with Quick Charge 3.0</a>, which can very quickly charge the battery or the Nexus, and a Macbook in a pinch. Hopefully will combine this and #42 sometime this year. One thing I really dislike about this item is the bright light on it, which I need to cover with tape.</li>
<li>The only pill / vitamin / anything I take every day: <a href=\"http://www.elysiumhealth.com/\">Elysium Health Basis</a>. I&#8217;m not an expert or a doctor, but read up on them and the research around it, pretty interesting stuff.</li>
<li><a href=\"https://www.fitbit.com/chargehr\">Fitbit Charge HR</a>. I gave up on my Apple Watch. I&#8217;ll probably try the Fitbit watch when it comes out. My favorite feature is the sleep tracking. Least favorite is the retro screen, and that it doesn&#8217;t always show the time.</li>
<li><a href=\"http://www.amazon.com/Sharpie-Permanent-Markers-Marker-32101PP/dp/B000XANH9S\">Double-sided sharpie (thick and thin point)</a> and a <a href=\"http://www.muji.us/store/pen-pencils.html\">Muji pen</a>.</li>
<li><a href=\"http://www.westoneaudio.com/index.php/products/hearing-protection/es49-custom-hearing-protection.html\">Westone ES49 custom earplugs</a>, for if I go to concerts or anyplace overly loud. *</li>
<li>Some index cards, good for brainstorming.</li>
<li>Passport. * As Mia Farrow said about Frank Sinatra, &#8220;I learned to bring my passport to dinner.&#8221;</li>
<li>Jetpack notebook, I like to have a paper notebook to take notes, especially in group or product meetings, because there isn&#8217;t the distraction of a screen.</li>
<li><a href=\"https://www.google.com/nexus/5x/\">Nexus 5x</a>, which is definitely one of the better Android devices I&#8217;ve had, paired with <a href=\"https://fi.google.com/\">Google Project Fi</a> phone / data service, which has saved me thousands of dollars with its $10/gb overseas data pricing. Since my iPhone is so huge, I tried to go for a smaller Android device. I always travel with both in case something happens to one phone, for network diversity, and as I said this has better international data pricing than Verizon.</li>
<li>Business card holder. *</li>
<li>Post-it notes.</li>
</ol>
<p>All in all 13 items stayed the same, the other 40 are new to this edition.</p>
<p><a href=\"http://i0.wp.com/ma.tt/files/2016/02/DSC_1387.jpg?ssl=1\"><img class=\"aligncenter size-full wp-image-46178\" src=\"http://i0.wp.com/ma.tt/files/2016/02/DSC_1387.jpg?w=604&ssl=1\" alt=\"\" /></a></p>
<p>That&#8217;s a wrap, folks! If you have any questions or suggestions please drop them in the comments. Once my <a href=\"https://ma.tt/2016/02/lent-this-year-buying-things/\">no-buying-things moratorium for Lent</a> is over I can start trying new things out again.</p>
<p>Update 2016-03-26: A few people have asked how much the bag weighs with all of this stuff in it. I didn&#8217;t weigh it at the time of the photo, but at the airport the other day I put it on the luggage scale and it came in at 16 pounds, which is probably close enough. The pockets on the Lululemon backpack distribute the &#8220;stuff&#8221; pretty well and it doesn&#8217;t feel heavy at all, and doesn&#8217;t stick out too far on my back.</p>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Tue, 15 Mar 2016 17:24:01 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:4:\"Matt\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:31;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:60:\"WPTavern: Tickets for WordCamp Jacksonville 2016 Now on Sale\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52421\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:70:\"http://wptavern.com/tickets-for-wordcamp-jacksonville-2016-now-on-sale\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:2514:\"<p><a href=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/wordcamp-jacksonville.png\" rel=\"attachment wp-att-52424\"><img src=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/wordcamp-jacksonville.png?resize=1025%2C502\" alt=\"wordcamp-jacksonville\" class=\"aligncenter size-full wp-image-52424\" /></a></p>
<p>Florida hosts some of the most successful and longest-running WordCamps in the US with events in Miami, Orlando, and Tampa Bay. Jacksonville, the largest city in Florida with a population of more than 800,000, will be hosting its very first WordCamp. The event will be held April 16-17 downtown at the <a href=\"https://2016.jacksonville.wordcamp.org/location/\" target=\"_blank\">Florida State College</a> campus.</p>
<p>According to <a href=\"http://frankcorso.me/\" target=\"_blank\">Frank Corso</a>, lead organizer for the WordCamp and an organizer of the Gainesville WordPress Meetup, the team is planning for 250 attendees. The WordPress community in northern Florida is working together to make the event happen.</p>
<p>&#8220;One of the co-organizers is the organizer of the local WPjax meet-up group and another organizer is the organizer of another city&#8217;s WP meetup group,&#8221; Corso said. &#8220;A few of us started talking at WordCamp Miami 2015 and realized that we really wanted to have a local WordCamp in our area. So, we reached out some others in the Jacksonville area to see if there was enough demand for it. We received a large amount of support for it and decided to proceed.&#8221;</p>
<p>Last week the event&#8217;s organizers introduced the <a href=\"https://2016.jacksonville.wordcamp.org/2016/03/11/introducing-the-first-round-of-speakers/\" target=\"_blank\">first round of speakers</a>, which includes local tech entrepreneurs and WordPress community leaders from around Florida. The deadline for speaker applications has passed, but organizers are still looking for <a href=\"https://2016.jacksonville.wordcamp.org/2016/03/03/call-for-volunteers/\" target=\"_blank\">volunteers</a> and <a href=\"https://2016.jacksonville.wordcamp.org/2016/01/04/call-for-sponsors/\" target=\"_blank\">sponsors</a>.</p>
<p>WordCamp Jacksonville <a href=\"https://2016.jacksonville.wordcamp.org/tickets/\" target=\"_blank\">tickets</a> went on sale today, but there are only 250 available due to venue capacity. Follow <a href=\"https://twitter.com/WordCampJax\" target=\"_blank\">@WordCampJax</a> and the #wcjax hashtag on Twitter for all the latest news.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Mon, 14 Mar 2016 22:34:00 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:32;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:67:\"WPTavern: When Contributing to WordPress Full-Time Leads to Burnout\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52409\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:77:\"http://wptavern.com/when-contributing-to-wordpress-full-time-leads-to-burnout\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:4014:\"<a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/BurnoutFeaturedImage.png\" rel=\"attachment wp-att-52418\"><img class=\"size-full wp-image-52418\" src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/BurnoutFeaturedImage.png?resize=657%2C333\" alt=\"Burnout Featured Image\" /></a><a href=\"http://www.flickr.com/photos/12480780@N05/24053903526\">Fireplace 4</a> &#8211; <a href=\"https://creativecommons.org/licenses/by-nc-nd/2.0/\">(license)</a>
<p>As a distributed worker, one of the toughest obstacles I face is burnout. It&#8217;s one of the reasons I took a month off from all things WordPress. According to <a href=\"http://www.merriam-webster.com/dictionary/burnout\">Merriam-Webster</a>, burnout is, &#8220;the condition of someone who has become very physically and emotionally tired after doing a difficult job for a long time.&#8221; Once burnout sets in, it&#8217;s tough to recover without avoiding the job completely.</p>
<p>Drew Jaynes, WordPress core developer, describes how contributing to the WordPress project full-time <a href=\"http://werdswords.com/contributing-full-time-isnt-everyone/\">led to burnout</a>.</p>
<p>&#8220;Here’s the thing: burnout is a real struggle. And when you’re working on something full-bore, 100 percent of the time, and you burnout, there aren’t a lot of good options to help combat that except to keep pressing on and try to get your groove back,&#8221; Jaynes said.</p>
<p>Recognizing the signs that burnout is imminent is an important step towards avoiding it, &#8220;I typically realize I’m burned out when I basically lose interest in whatever thing I’d been previously passionate about. Burnout is the result of going at something too hard for too long. And then when you stop, getting started again is a struggle,&#8221; he said.</p>
<p>Jaynes realized it was time to move on from full-time contributing to something new after experiencing burnout three times in seven months. Although he will continue to contribute back to WordPress, it will be in a more limited role as he focuses on products.</p>
<h2>How Matt Mullenweg Avoids Burnout</h2>
<p>People combat burnout differently based on their individual circumstances. When asked <a href=\"https://www.producthunt.com/live/matt-mullenweg#comment-151645\">how he combats burnout</a> in an <a href=\"http://wptavern.com/highlights-from-matt-mullenwegs-qa-session-on-product-hunt\">Ask Me Anything segment</a> in September 2015, Matt Mullenweg, CEO of Automattic, responded:</p>
<blockquote><p>Everything is connected, so if one of ( health | diet | relationships | family | work | soul | creative outlet ) is running on empty for too long, it will impact the others and you might end up treating the symptom rather than the cause. Recovery always comes from the people around you who give you unconditional love and support, which I&#8217;ve been lucky to have since I was an infant.</p>
<p>To avoid it now I try to take small mini-breaks frequently, be that a ten minute meditation every day, jogging a few times a week, or taking a few days to recharge once a month. I find that&#8217;s better (and less stressful) than trying to do a big blow-out reset or vacation once a year. Conversely, a lot of times when people think I&#8217;m on vacation I&#8217;m actually working as much or more than when I&#8217;m at home, just from a more interesting location (often with fewer distractions). Funnily enough I&#8217;m more likely to actually take time off and unplug at home, and more likely to be working when in an exotic location.</p></blockquote>
<p>I work for a company that has an unlimited vacation policy. I took advantage of it by taking a month off to clear my mind to help me refocus and it worked wonders for my mental well-being. If you feel it&#8217;s necessary and your employer has a similar policy, don&#8217;t be afraid to ask for some time off to regroup. What do you do to combat burnout? Please share your advice in the comments.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Mon, 14 Mar 2016 22:05:50 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Jeff Chandler\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:33;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:29:\"Matt: Addicted to Distraction\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:22:\"https://ma.tt/?p=46355\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:46:\"https://ma.tt/2016/03/addicted-to-distraction/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:665:\"<blockquote><p>Addiction is the relentless pull to a substance or an activity that becomes so compulsive it ultimately interferes with everyday life. By that definition, nearly everyone I know is addicted in some measure to the Internet. It has arguably replaced work itself as our most socially sanctioned addiction. [&#8230;]</p>
<p>Denial is any addict’s first defense. No obstacle to recovery is greater than the infinite capacity to rationalize our compulsive behaviors.</p></blockquote>
<p>Oldie but goodie <a href=\"http://www.nytimes.com/2015/11/29/opinion/sunday/addicted-to-distraction.html?_r=2\">from the New York Times, Addicted to Distraction</a>.</p>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Mon, 14 Mar 2016 18:57:38 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:4:\"Matt\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:34;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:65:\"WPTavern: WordPress Global Translation Day Set for April 24, 2016\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=51996\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:74:\"http://wptavern.com/wordpress-global-translation-day-set-for-april-24-2016\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:4941:\"<a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2014/08/globe.jpg\" rel=\"attachment wp-att-29134\"><img src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2014/08/globe.jpg?resize=1024%2C499\" alt=\"photo credit: . Entrer dans le rêve - cc\" class=\"size-full wp-image-29134\" /></a>photo credit: <a href=\"https://www.flickr.com/photos/tranbina/4765484383/\">. Entrer dans le rêve</a> &#8211; <a href=\"http://creativecommons.org/licenses/by-nc-sa/2.0/\">cc</a>
<p>The WordPress Polyglots team is planning its first ever <a href=\"https://make.wordpress.org/polyglots/2016/03/02/wordpress-global-translation-day-april-24th-2016/\" target=\"_blank\">Global Translation Day</a> to be held April 24, 2016, in every timezone around the globe. The 24-hour translation sprint will start at dawn in the East and end in the West. In addition to translating strings, organizers are also looking to grow the translation teams and educate new translators. They have identified the following three goals for the event:</p>
<ul>
<li>Show people who are interested in translating WordPress in their language how to get involved</li>
<li>Translate and validate the waiting strings for current projects under the supervision of the current General translation editors</li>
<li>Add more general translation editors to different translation teams</li>
</ul>
<p>The Global Translation Day is an ambitious undertaking that involves coordinating a 24-hour live stream of tutorials about translating WordPress in different languages, as well as local, on-site contributor teams.</p>
<p>&#8220;Not very many people know how big the translation efforts around WordPress are, how dedicated our volunteer Translation Editors are to making sure we have quality, consistent software translations,&#8221; Polyglots contributor Petya Raykovska said. &#8220;We wanted the Global Translation Day to shed a bit of light on that and especially on the local teams.</p>
<h3>Growing the WordPress Platform by Making it More Internationally Accessible</h3>
<p>The Polyglots team is slowly chipping away at the world&#8217;s most widely spoken languages to provide core, theme, and plugin translations for users in their own languages.</p>
<p>&#8220;We have many languages that need a lot of help,&#8221; Raykovska said. &#8220;Our Japanese, German, French, Dutch, Spanish, Portuguese teams are amazing, these are active 100% translated locales,&#8221; she said. &#8220;But when it comes to plugin and theme translations, that’s where the demand is greatest.</p>
<p>&#8220;On the other hand, we have languages that need help for WordPress core. All the Indian languages can use a huge push, our African and Asian languages need help.&#8221;</p>
<p>The progress of each locale is tracked on the <a href=\"https://make.wordpress.org/polyglots/teams/\" target=\"_blank\">Translation Teams</a> page, displaying the percentage of strings translated for each.</p>
<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/translations.png\" rel=\"attachment wp-att-52391\"><img src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/translations.png?resize=1025%2C395\" alt=\"translations\" class=\"aligncenter size-full wp-image-52391\" /></a></p>
<p>&#8220;Some of the biggest languages in the world are represented in this chart and if we got them to 100% that could have a huge impact on WordPress itself,&#8221; Raykovska said.</p>
<p>&#8220;If you remember the big jump WordPress did in 2011 and then in 2014, when international downloads surpassed English downloads, half of those international downloads were for Japanese,&#8221; she said.</p>
<p>&#8220;Now imagine what impact languages like Chinese, Hindi (and other Indian languages) and other languages in countries where English is not a default language, can have. The Global WordPress Translation day is about making WordPress accessible to more people and also about helping the platform’s growth,&#8221; Raykovska said.</p>
<p>The Polyglots are calling all multilingual contributors to join in the event. Raykovska reports that so far they have more than 60 teams committing to take part, with 10 mini-contributor days held locally and more incoming. The Polyglots are also planning to host remote events where local teams use their own Slack channels to onboard contributors and work on translations.</p>
<p>Contributors can choose from a number of ways to get involved. You can record a video in your language for the promotion clip, volunteer to do a live stream talk about translating WordPress into your language, organize a local contributor day, or get involved with the main organization.</p>
<p>If you have the language skills to participate in the translation sprint, it&#8217;s one of the easiest ways to start contributing to WordPress and help prepare the platform for its next major international leap. Join #polyglots on Slack to connect with the team.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Mon, 14 Mar 2016 18:11:02 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:35;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:23:\"Matt: Changelog Podcast\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:22:\"https://ma.tt/?p=46350\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:40:\"https://ma.tt/2016/03/changelog-podcast/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:575:\"<p>I know a lot of people are on their way to SxSW right now, <a href=\"https://changelog.com/197/\">here&#8217;s a podcast I joined called The Changelog you can download and check out on the way there</a> (or back). It&#8217;s a bit more technical than the interviews I normally do, we talk about Javascript, Calypso, the philosophy of open source and WordPress, some of the thinking behind Automattic&#8217;s acquisitions, and my favorite programming books. I hope <a href=\"https://changelog.com/197/\">you can check it out</a>, Adam and Jerod did a great job on this one.</p>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Sat, 12 Mar 2016 02:17:19 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:4:\"Matt\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:36;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:43:\"WPTavern: In Case You Missed It – Issue 4\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:44:\"http://wptavern.com?p=52368&preview_id=52368\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:49:\"http://wptavern.com/in-case-you-missed-it-issue-4\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:6892:\"<a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/01/ICYMIFeaturedImage.png\" rel=\"attachment wp-att-50955\"><img class=\"size-full wp-image-50955\" src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/01/ICYMIFeaturedImage.png?resize=676%2C292\" alt=\"In Case You Missed It Featured Image\" /></a>photo credit: <a href=\"http://www.flickr.com/photos/112901923@N07/16153818039\">Night Moves</a> &#8211; <a href=\"https://creativecommons.org/licenses/by-nc/2.0/\">(license)</a>
<p>There&#8217;s a lot of great WordPress content published in the community but not all of it is featured on the Tavern. This post is an assortment of items related to WordPress that caught my eye but didn&#8217;t make it into a full post.</p>
<h2>Justin Tadlock Announces Simpler Pricing</h2>
<p>Justin Tadlock <a href=\"http://themehybrid.com/weblog/simpler-pricing-for-theme-designer-and-plugin-developer\">revamped his pricing</a> model for his <a href=\"http://themehybrid.com/plugins/plugin-developer\">Plugin Developer</a> and <a href=\"http://themehybrid.com/plugins/theme-designer\">Theme Designer</a> plugins. Based on two months of feedback, Tadlock removed the pricing tiers in favor of a single price. Both plugins are $90 and come with source files, one year of support, and access to the Theme Hybrid Slack channel.</p>
<p>Existing customers have already been upgraded and can take advantage of the new perks. What&#8217;s nice is that Tadlock is giving those who purchased the plugins for $125 a partial refund of $35 to make up the difference.</p>
<h2>Using WordPress to Break The Silence</h2>
<p>Mahangu Weerasinghe, who works at Automattic as a Happiness Engineer, <a href=\"http://heropress.com/essays/breaking-the-silence/\">published a fantastic essay</a> on HeroPress this week that describes how WordPress helped him break his silence. Weerasinghe suffers from stuttering and as a result, remained silent even if he had something to say. It&#8217;s an inspirational story and the best content I&#8217;ve read all week. There are many quotable spots in the post, but this is my favorite.</p>
<blockquote><p>There are a lot of things we cannot control in this world, many forces at work that we cannot even see. But, as members of this community, I think we can content ourselves with this thought:</p>
<p>Because of the GPL, and the way it works, WordPress will be available as a publishing platform for decades to come, and long after the next social network comes and goes, for as long as the Internet remains free and accessible, anyone with WordPress will be able to have their say.</p>
<p>What WordPress did for me, it can do for others. And that’s why we need to keep going.</p>
<p>Because every silence can be overcome.</p></blockquote>
<p>Congrats Weerasinghe on defeating the silence and helping others to do the same.</p>
<h2>Automattic Acquires Pressable</h2>
<p>Automattic has purchased the rest of Vid Luther&#8217;s common stock shares in Pressable and has effectively <a href=\"https://poststatus.com/automattic-pressable/\">acquired the company</a>. Chris Lauzon, a Happiness Engineer at Automattic, is the company&#8217;s interim CEO. Be sure to read Matt Mulleweng&#8217;s statement which clearly indicates to me that the company is not part of Automattic&#8217;s long-term interests.</p>
<h2>Matt Mullenweg in The Irish Times</h2>
<p>Ciara O&#8217;Brien <a href=\"http://www.irishtimes.com/business/technology/matt-mullenweg-how-wordpress-got-the-whole-world-blogging-1.2558828\">interviewed Matt Mullenweg</a> when he visited Dublin, Ireland to speak at an Irish Software Association event. It&#8217;s one of the better interviews I&#8217;ve read in recent memory and if you know Matt well enough, you can tell which parts of the interview he showed his sense of humor.</p>
<p>For example, when asked how he relaxes and switches off work mode, he responds &#8220;Well, this is lovely. We have tea and little cookies.” I can almost guarantee you that he chuckled while making that remark.</p>
<h2>Introvert Reviews Pressnomics</h2>
<p>Jeff Matson, who leads the documentation efforts for Rocketgenius, <a href=\"http://jeffmatson.net/realization-of-progress-and-success/\">documented</a> (pun intended) his experience at Pressnomics 4. Thanks to his involvement in the community the past few years, people recognized him and started conversations with him instead of the other way around.</p>
<blockquote><p>I’m the nerd with the thick glasses, overgrown beard, and a hoodie; the guy who lives in a rather small apartment, drives a Kia, and shops at outlet malls. To put it simply, I’m your typical every-day middle-class 20-something guy. Certainly not the typically targeted clientele for such a high level business-centric conference.</p></blockquote>
<p>Yet, he had a great time and strengthened relationships and created new ones with members of the community. As a friend, it&#8217;s great to see Jeff make large strides both in his professional and personal life.</p>
<h2>Co-Organizing WordCamp Miami</h2>
<p>David Bisset <a href=\"http://davidbisset.com/wordcamp-miami-2016-the-mega-review/\">shares his experience</a> co-organizing one of the largest WordCamps in the US. According to a recent tweet, the team is already making plans for WordCamp Miami, FL 2017.</p>
<blockquote class=\"twitter-tweet\"><p lang=\"en\" dir=\"ltr\">One of the reasons <a href=\"https://twitter.com/hashtag/wcmia?src=hash\">#wcmia</a> organization team is so great: post-conference planning meetups. 2017 planning has begun. <a href=\"https://t.co/NZF31TRNOj\">pic.twitter.com/NZF31TRNOj</a></p>
<p>&mdash; David Bisset (@dimensionmedia) <a href=\"https://twitter.com/dimensionmedia/status/708282526477979650\">March 11, 2016</a></p></blockquote>
<p></p>
<h2>Wapuu of the North!</h2>
<p>As a traditional part of this series, I end each issue by featuring a Wapuu design. For those who don&#8217;t know, Wapuu is the <a href=\"http://wapuu.jp/2015/12/12/wapuu-origins/\">unofficial mascot</a> of the WordPress project. St. Patrick&#8217;s day is right around the corner, so what better way to celebrate than with a Wapuu with Irish roots. Meet, The Wapuu of the North.</p>
<p>The Wapuu of the North was created by Peter of <a href=\"http://1440design.com/wordpress/branding-wordcamp-belfast/\" target=\"_blank\">1440 Design</a> for WordCamp Belfast, Ireland. This particular Wapuu has quite the head of hair!</p>
<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/belfast_wapuu.jpg\" rel=\"attachment wp-att-52005\"><img class=\"aligncenter size-full wp-image-52005\" src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/belfast_wapuu.jpg?resize=1000%2C1000\" alt=\"belfast_wapuu\" /></a></p>
<p>That&#8217;s it for issue four. If you recently discovered a cool resource or post related to WordPress, please share it with us in the comments.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Sat, 12 Mar 2016 01:24:46 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Jeff Chandler\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:37;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:77:\"WPTavern: OnePress: A Free Single-Page WordPress Theme Built with Bootstrap 4\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=51305\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:86:\"http://wptavern.com/onepress-a-free-single-page-wordpress-theme-built-with-bootstrap-4\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:3001:\"<p>If you&#8217;re a fan of the scrolling single-page parallax style themes, <a href=\"https://wordpress.org/themes/onepress/\" target=\"_blank\">OnePress</a> is a new one on WordPress.org that may pique your interest. After less than a month in the official directory, it has already been installed on more than 3,000 websites. OnePress was developed by the folks at <a href=\"https://www.famethemes.com/themes/onepress/\" target=\"_blank\">FameThemes</a> using <a href=\"http://v4-alpha.getbootstrap.com/\" target=\"_blank\">Bootstrap version 4</a>. It is suitable for business, portfolio, and agency websites.</p>
<p>The theme features a full-screen background image with action buttons in the first major section. Scrolling further down reveals an about section, services, a video lightbox, an animated counter, team section, latest news, and contact form (powered by Contact Form 7).</p>
<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/onepress.png\" rel=\"attachment wp-att-52246\"><img src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/onepress.png?resize=1025%2C769\" alt=\"onepress\" class=\"aligncenter size-full wp-image-52246\" /></a></p>
<p>All of the sections can be easily configured in the customizer and each has design options such as overlay color and opacity, section titles and subtitles, number of columns, and more. You can elect to hide any of the sections that you don&#8217;t want to use.</p>
<p>Also, if you&#8217;re not a fan of the parallax animations, there are options to disable them per element or globally for all the animations in the theme. You can also disable the sticky header when scrolling.</p>
<p><a href=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/onepress-customizer.png\" rel=\"attachment wp-att-52356\"><img src=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/onepress-customizer.png?resize=1025%2C374\" alt=\"onepress-customizer\" class=\"aligncenter size-full wp-image-52356\" /></a></p>
<p>OnePress includes controls in the customizer for setting social profiles in the footer. It also includes a setting for pasting in a MailChimp Action URL for a newsletter signup form.</p>
<p>Check out a <a href=\"http://www.famethemes.com/preview/?theme=OnePress\" target=\"_blank\">live demo</a> of OnePress and click the menu items or scroll to view all of the sections. You can also toggle through desktop, tablet, and mobile views. Its smooth responsiveness and mobile-friendly menu are powered by Bootstrap.</p>
<p>OnePress is an excellent example of how a single-page WordPress theme can be easily configurable via WordPress&#8217; native customizer. It is available for <a href=\"https://wordpress.org/themes/onepress/\" target=\"_blank\">download from WordPress.org</a> or via your admin theme browser. The OnePress homepage on FameThemes has thorough <a href=\"http://docs.famethemes.com/article/43-onepress-documentation\" target=\"_blank\">documentation</a> for setting up each of the sections.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 11 Mar 2016 22:10:01 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:38;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:59:\"WPTavern: WordPress 4.5 Improves Comment Moderation Screens\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52295\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:69:\"http://wptavern.com/wordpress-4-5-improves-comment-moderation-screens\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:6151:\"<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2014/08/comments.png\" rel=\"attachment wp-att-28128\"><img class=\"aligncenter size-full wp-image-28128\" src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2014/08/comments.png?resize=984%2C455\" alt=\"comments\" /></a>Building on the momentum generated from the <a href=\"https://make.wordpress.org/core/2015/10/28/comment-object-and-query-features-in-4-4/\">WordPress 4.4 development cycle</a>, WordPress 4.5 includes a number of enhancements to comments. In a <a href=\"https://make.wordpress.org/core/2016/03/09/comment-changes-in-wordpress-4-5/\">post on the Make Core blog</a>, Rachel Baker explains the changes and what to expect.</p>
<p>&#8220;WordPress 4.5 includes several ancient bug fixes and a few enhancements in the Comments component. We have <a href=\"https://core.trac.wordpress.org/query?status=closed&component=Comments&milestone=4.5&group=resolution&col=id&col=summary&col=owner&col=type&col=priority&col=component&col=version&order=priority\">closed 25 tickets</a>,&#8221; Baker said.</p>
<p>The biggest change users will notice are the design improvements to the comment moderation screen when clicking one of the available links in a comment moderation email. Instead of appearing as a large block of plain-text, comments are formatted as long as they contain the following HTML elements.</p>
<ul>
<li>A &#8211; Links</li>
<li>Abbr &#8211; Abbreviations</li>
<li>Acronym &#8211; Defines an acronym</li>
<li>B &#8211; Bold</li>
<li>Blockquote &#8211; Specifies a section that is quoted from another source</li>
<li>Cite &#8211; Defines the title of a work</li>
<li>Code &#8211; Defines a piece of computer code</li>
<li>Del &#8211; Defines text that has been deleted from a document</li>
<li>Em &#8211; Emphasizes text</li>
<li>I &#8211; Italicize</li>
<li>Q &#8211; Defines a short quotation</li>
<li>S &#8211; Specifies text that is no longer correct</li>
<li>Strike &#8211; Defines strikethrough text</li>
<li>Strong &#8211; Defines important text</li>
</ul>
<p>During testing, I noticed that in some cases, the text still appears in a large block as if the paragraph tag is ignored. I&#8217;ve already reported this issue to Baker who is looking into it. As you can see, the text that is bold, blockquoted, linked, and italicized, maintains its formatting on the moderation screen.</p>
<a href=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/CommentFormattingOnModerationScreen.png\" rel=\"attachment wp-att-52346\"><img class=\"size-full wp-image-52346\" src=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/CommentFormattingOnModerationScreen.png?resize=1025%2C571\" alt=\"Formatted Text On The Comment Moderation Screen\" /></a>Formatted Text On The Comment Moderation Screen
<p>In addition to visual enhancements, an Edit Comment link was added to the bottom of the comment. In the future, it would be nice to edit a comment in place during the moderation flow, similar to how Quick Edit works, instead of navigating to a different screen. Other notable changes include:</p>
<ul>
<li>Updated message styles that match other screens.</li>
<li>The comment date is only wrapped in a link if the comment permalink exists.</li>
<li><code>#wpbody-content</code> is appended to comment moderation email links for accessibility.</li>
<li>The <code>rel=nofollow</code> attribute and value pair will no longer be added to relative or same domain links within <code>comment_content</code>.</li>
<li><code>WP_Comment_Query</code> now supports the <code>author_url</code> parameter.</li>
<li>The new <code>pre_wp_update_comment_count_now</code> filter allows you to bail out of updating the comment count for a given Post.</li>
</ul>
<h2>Maximum Comment Field Length</h2>
<p>Those who publish lengthy comments will be happy to know that in WordPress 4.5, &#8220;the comment fields will enforce the maximum length of each field’s respective database column with hardcoded attributes. The hardcoded limits can be adjusted to accommodate custom database schemas using the <code>comment_form_default_fields</code> filter,&#8221; Baker said. By default, the limits are as follows:</p>
<ul>
<li>Comment: 65525 characters</li>
<li>Name : 245 characters</li>
<li>Email: 100 characters</li>
<li>Url: 200 characters</li>
</ul>
<p>When comments are submitted in 4.5, they&#8217;ll be checked by the new <code>wp_get_comment_fields_max_lengths()</code> function and the <code>wp_get_comment_fields_max_lengths</code> filter. If a value is more than the limit, a <code>WP_Error</code> is displayed. If a user publishes a comment and sees an error page, they&#8217;ll be able to navigate back to their comment via a link rather than having to use their browser&#8217;s back button.</p>
<a href=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/CommentErrorNavigation.png\" rel=\"attachment wp-att-52347\"><img class=\"size-full wp-image-52347\" src=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/CommentErrorNavigation.png?resize=724%2C354\" alt=\"Comment Error Page Navigation\" /></a>Comment Error Page Navigation
<p>It&#8217;s great that comments continue to receive attention, even if there&#8217;s a long way to go. Unfortunately, the ability to <a href=\"https://core.trac.wordpress.org/ticket/33717\">send a notification email when a comment is approved from moderation</a> was punted to a future release. I&#8217;m looking forward to reviewing plugins that allow users to easily configure the comment length limits as seen above. It would be nice to configure the limits so spammers see an error message because of their comment&#8217;s length rather than being placed into the moderation queue.</p>
<p>To see and test these improvements yourself, download and install <a href=\"https://wordpress.org/news/2016/03/wordpress-4-5-beta-3/\">WordPress beta 3</a> on a test site. If you think you’ve discovered a bug, please create a new post on the <a href=\"https://wordpress.org/support/forum/alphabeta\" target=\"_blank\">Alpha/Beta area</a> of the support forums. What do you think of these changes to comments in WordPress 4.5?</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 11 Mar 2016 20:07:32 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Jeff Chandler\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:39;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:85:\"WPTavern: GitHub Now Supports Emoji Reactions for Pull Requests, Issues, and Comments\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52304\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:93:\"http://wptavern.com/github-now-supports-emoji-reactions-for-pull-requests-issues-and-comments\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:3903:\"<p>Last month GitHub finally <a href=\"http://wptavern.com/github-responds-to-letter-from-open-source-project-maintainers\" target=\"_blank\">responded</a> to the <a href=\"http://wptavern.com/open-source-project-maintainers-confront-github-with-open-letter-on-issue-management\" target=\"_blank\">open letter on issue management</a> that has now been <a href=\"https://docs.google.com/spreadsheets/d/1oGsg02jS-PnlIMJ3OlWIOEmhtG-udTwuDz_vsQPBHKs/htmlview?usp=sharing&sle=true\" target=\"_blank\">signed</a> by nearly 2,000 open source project maintainers. GitHub officially apologized for the lack of communication and promised to add new features and iterate on the core experience.</p>
<p>Shortly after acknowledging the letter, GitHub <a href=\"http://wptavern.com/github-introduces-issue-and-pull-request-templates\" target=\"_blank\">introduced templates for issues and pull requests</a>, which allow project maintainers to guide contributors towards submitting more meaningful contributions.</p>
<p>One of the other major requests included in the open letter was a voting system to declutter +1&#8217;s from issues. While the +1&#8217;s constitute valuable feedback, maintainers need a better UI to help make these conversations easier to read.</p>
<p>GitHub has now answered this request by <a href=\"https://github.com/blog/2119-pull-request-and-issue-reactions\" target=\"_blank\">adding emoji reactions to pull requests, issues, and comments</a>. Emoji support is nothing new but organizing it into reactions helps keep comments more manageable:</p>
<blockquote><p>In many cases, especially on popular projects, the result is a long thread full of emoji and not much content, which makes it difficult to have a discussion. With reactions, you can now reduce the noise in these threads.</p></blockquote>
<p>Reactions are currently limited to six emoji that are commonly used in GitHub conversations:</p>
<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/github-reactions.gif\" rel=\"attachment wp-att-52312\"><img src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/github-reactions.gif?resize=917%2C359\" alt=\"github-reactions\" class=\"aligncenter size-full wp-image-52312\" /></a></p>
<p>Going forward, emoji reactions should make life easier for project maintainers, as they provide a quick way to assess consensus. If contributors embrace emoji reactions, the new feature can help maintainers gauge how widespread a bug is. They also serve to highlight the most helpful comments in a conversation.</p>
<p>Emoji reactions, which were also recently adopted by Slack and Facebook, are making their way into more applications as an alternative way of offering feedback. Path was one of the first social apps to offer reactions in 2012. Buzzfeed has taken the feature to a new level with the addition of gif reaction options at the end of articles:</p>
<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/buzzfeed-reactions.png\" rel=\"attachment wp-att-52327\"><img src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/buzzfeed-reactions.png?resize=1025%2C601\" alt=\"buzzfeed-reactions\" class=\"aligncenter size-full wp-image-52327\" /></a></p>
<p>A feature that was once limited to social networks is now changing communication in the workplace by facilitating conversations for large groups of people. While emoji reactions offer people more ways of expressing themselves, they can also serve as a metric, a gauge, and a voting system.</p>
<p>The new <a href=\"http://wptavern.com/new-feature-plugin-for-wordpress-adds-emoji-reactions-to-posts\" target=\"_blank\">Reactions feature plugin</a> for WordPress received no small amount of criticism when it was introduced earlier this week. Even if the plugin never reaches the proposal stage, the conversation about the value of emoji reactions in modern communication is worth having.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 11 Mar 2016 16:10:15 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:40;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:32:\"Matt: From Silence to Publishing\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:22:\"https://ma.tt/?p=46343\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:49:\"https://ma.tt/2016/03/from-silence-to-publishing/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:722:\"<blockquote><p>My parents first noticed my stutter when I was three years old. For the longest time, I thought I would one day be rid of it. I went for speech therapy, I did fluency exercises, I prayed. But now, at age thirty, I’m fairly confident that it’s here to stay. [&#8230;]</p>
<p>Somehow, as I progressed through high school, the expectant pauses of those listening to me were more difficult to bear that the nicknames and name calling. Often, I would not speak up, even when I had something I wanted to say.</p>
<p>My default setting was silence.</p></blockquote>
<p><a href=\"http://heropress.com/essays/breaking-the-silence/\">Read the rest of Mahangu Weerasinghe&#8217;s story, Breaking the Silence</a>.</p>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 10 Mar 2016 22:48:42 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:4:\"Matt\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:41;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:67:\"Post Status: Automattic has purchased a majority stake in Pressable\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"https://poststatus.com/?p=22262\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:44:\"https://poststatus.com/automattic-pressable/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:5218:\"<p><a href=\"https://automattic.com\">Automattic</a> has purchased a majority stake in <a href=\"https://pressable.com/\">Pressable</a>, one of the earliest managed WordPress hosting companies, founded in 2010. They were first known as ZippyKid, and <a href=\"https://poststatus.com/zippykid-pressable/\">rebranded in 2013</a>.</p>
<p>Automattic was already a shareholder in Pressable, most recently as the primary investor of <a href=\"https://www.crunchbase.com/organization/pressable#/entity\">a $1.5 million round</a> in April of 2015.</p>
<p>Technically, Automattic purchased  common stock shares from Vid Luther, the CEO of Pressable. The monetary value of that common stock was, &#8220;enough to be debt free,&#8221; according to Vid. He owned about 37% of the company, or 4.5 million shares of 7 million shares of common stock (versus preferred shares). The company has also been in debt, reportedly close to $1 million worth.</p>
<p>Automattic is now the majority owner of Pressable, and since Vid sold his shares, this is effectively an acquisition, and Automattic will be able to set the direction of the company from now on. Chris Lauzon, a Happiness Engineer at Automattic, is the interim CEO. There are other smaller investors in Pressable whom maintain their shares in the company, and it&#8217;s unknown what those investors will do.</p>
<p>When I confirmed the exit with Vid, he said, &#8220;This is the best thing that I could have done for my family, or myself.&#8221; He was burning the candle at both ends, working twice as much as he wanted to be working, and wasn&#8217;t seeing the growth and success that he dreamed of for so many years. Pressable has always done okay in the managed WordPress market, but never outpaced quick-growth and heavily funded WP Engine, or the first entry to the market, Pagely. But Pressable has not been in a position of strength for a really long time.</p>
<p>Pagely, WP Engine, and Pressable were really the first three into the market of managed hosting &#8212; a market that now includes nearly every big name host. It&#8217;s fascinating to see the different directions they&#8217;ve gone since. WP Engine <a href=\"https://www.crunchbase.com/organization/wp-engine#/entity\">has raised</a> nearly $40 million over the years and gone for scale (Automattic also invested in their Series A), while Pagely has bootstrapped the whole way and really hit their stride in the last couple of years with a move to the higher end of the market. Dozens of managed hosting companies exist today.</p>
<p>The work these three companies put into the early managed market got the attention of the biggest players in the market, like GoDaddy and EIG (owner of BlueHost, HostGator, and many more). Pressable fought hard, and Vid&#8217;s exit from the company comes after a long road with many challenges.</p>
<p>Pressable has long been on Rackspace infrastructure, as Vid had relationships with them going back a long time; that infrastructure suffered <a href=\"http://wptavern.com/recent-pressable-outages-the-result-of-a-slow-loris-attack\">a few catastrophic outages</a> from attacks that cost Pressable quite a few customers in January 2015, stunting progress.</p>
<p>They nearly sold Pressable to WP Engine about two years ago, and decided against it at the 11th hour. The financing round last year was a period of rejuvenation for them, after a troubled period between the malicious attacks on their infrastructure and some internal issues, and the team was looking forward to new opportunities moving forward, including a potential focus on hosting catered for eCommerce with WordPress.</p>
<p>Speaking to an agency owner with clients at Pressable, they told me they believe they, &#8220;always struggled to find their voice and audience in a space that quickly filled up.&#8221; I agree with the observation.</p>
<p>Pressable&#8217;s revenues were under $2 million per year, and they have a team of about 10 people. Vid is no longer at the company; his last day was March 7th. It remains to be seen exactly what direction Automattic will take the company, though I presume it will continue business as usual for now, like they did <a href=\"https://poststatus.com/automattic-acquired-woocommerce-woothemes/\">after the WooThemes acquisition</a>. While Automattic now owns the company, Matt Mullenweg made it clear to me that it&#8217;s not in their long term interest to be significantly involved in the traditional hosting business.</p>
<p>Matt Mullenweg gave the following statement about the purchase:</p>
<blockquote><p>Automattic is happy to be an investor in a number of WordPress-related companies and web hosts, and will continue to invest in the future. With Pressable we&#8217;ve unfortunately been forced to take a more active role to protect Pressable&#8217;s customers, employees, and our investment. Chris Lauzon, a Happiness Engineer at Automattic, has been temporarily working with the Pressable team to get everything in order, especially on the support side. Automattic continues to enjoy working with and supporting many great WordPress hosts, and we expect that Pressable will be able to operate fully independently in the future.</p></blockquote>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 10 Mar 2016 21:59:06 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:15:\"Brian Krogsgard\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:42;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:64:\"WPTavern: Do the Woo: A New Podcast for WooCommerce Store Owners\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52197\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:73:\"http://wptavern.com/do-the-woo-a-new-podcast-for-woocommerce-store-owners\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:3266:\"<a href=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/podcast.jpg\" rel=\"attachment wp-att-52297\"><img src=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2016/03/podcast.jpg?resize=960%2C472\" alt=\"photo credit: Maciej Korsan\" class=\"size-full wp-image-52297\" /></a>photo credit: <a href=\"https://stocksnap.io/photo/IQVHQYS3GL\">Maciej Korsan</a>
<p>Bob Dunn, a WordPress educator better known on the web as <a href=\"https://bobwp.com/\" target=\"_blank\">BobWP</a>, is <a href=\"http://dothewoopodcast.com/welcome-to-do-the-woo-the-podcast-for-woocommerce-shop-owners/\" target=\"_blank\">launching a podcast for WooCommerce store owners</a>. &#8220;Do the Woo&#8221; will air weekly on Wednesdays with tips and tricks to help store owners attract more customers. Dunn plans to host guests involved in WooCommerce development, as well as store owners who will be invited to share their challenges and successes.</p>
<p>After using WooCommerce for five years with client projects, as well as his own products, Dunn is prepared to share his store management experience with listeners. He&#8217;s used the plugin and many of its extensions for selling services, bookings, downloads, and currently for his membership site sales. He has also taught WooCommerce workshops and is preparing new courses for his students.</p>
<p>Store owners are the targeted audience for Dunn&#8217;s new podcast with a focus on the business aspects of store management.</p>
<p>&#8220;It will be a mix of topics, rather than a straight interviews format, which is what many of the other podcasts are,&#8221; Dunn said. &#8220;I’ll be sharing eCommerce news and tips from a WooCommerce perspective. I’ll Interview Woo experts, designers, developers and shop owners. I’ll also share ideas for using Woo in ways that the average user might not have considered. There will be some tech, but also marketing, sales and social, all around WC.&#8221;</p>
<p>Dunn is aiming to reach both tech savvy users and those who would rather focus solely on the business of running a store.</p>
<p>&#8220;Having built sites for shop owners and in my role as co-organizer for the Seattle WooCommerce meetup, I would have to say that it’s a mix of technical skill,&#8221; he said. &#8220;As with anything WordPress, it spans the spectrum. Some are very hands-on and comfortable with the technology, while others want to focus more on their products and sales and tend to avoid the tech end of things.&#8221;</p>
<p>With an estimated 30% of e-commerce sites running on WooCommerce, a podcast focused on navigating the WooCommerce ecosystem as a store owner has a good chance of finding a decent audience with the right content strategy.</p>
<p>&#8220;My goal is to help these shop owners by giving them marketing ideas and providing a forum for stories from some of their colleagues who have insights and experiences to share,&#8221; Dunn said.</p>
<p>Interested listeners can subscribe at <a href=\"http://dothewoopodcast.com/\" target=\"_blank\">DoTheWooPodcast.com</a> where the first official episode will be published next week. Dunn will also be running WooCommerce-related posts on <a href=\"http://BobWP.com\" target=\"_blank\">BobWP.com</a> every Wednesday.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 10 Mar 2016 21:27:52 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:43;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:93:\"WPTavern: WPWeekly Episode 225 – Interview With Scott Kingsley Clark Lead Developer of Pods\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:44:\"http://wptavern.com?p=52290&preview_id=52290\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:99:\"http://wptavern.com/wpweekly-episode-225-interview-with-scott-kingsley-clark-lead-developer-of-pods\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:2883:\"<p>In this episode of WordPress Weekly, <a href=\"http://marcuscouch.com/\">Marcus Couch</a> and I interview <a href=\"https://scottkclark.com/\">Scott Kingsley Clark</a>, lead developer of the <a href=\"http://pods.io/\">Pods framework</a> plugin. Clark explains the financial and organizational structure of the <a href=\"https://pods.io/friends-of-pods/\">Friends of Pods program</a> and how it benefits the plugin&#8217;s development.</p>
<p>He also explains what the <a href=\"https://github.com/sc0ttkclark/wordpress-fields-api\">Fields API project</a> is and its significance to WordPress. To make a long story short, it&#8217;s on par with the REST API&#8217;s inclusion in core. Last but not least, in a first for WordPress Weekly, Clark sings a song while strumming his Baritone Ukulele.</p>
<h2>Stories Discussed:</h2>
<p><a href=\"http://wptavern.com/custom-content-type-manager-plugin-update-creates-a-security-nightmare\">Custom Content Type Manager Plugin Update Creates a Security Nightmare</a></p>
<h2>Plugins Picked By Marcus:</h2>
<p><a href=\"https://wordpress.org/plugins/video-conferencing-with-zoom-api/\">Video Conferencing with Zoom API,</a> by <a href=\"https://profiles.wordpress.org/j_3rk/\">Deepen Bajracharya</a> from Nepal, gives you the power to manage Zoom Meetings from your WordPress dashboard. You can manage meetings, users, and display meetings in posts or pages using shortcodes.</p>
<p><a href=\"https://wordpress.org/plugins/timeline-diagram/\">Time Line Diagram</a>, by <a href=\"https://profiles.wordpress.org/md-shiddikur-rahman/\">Shiddikur Rahman, </a>is a responsive WordPress Plugin that allows you to create a beautiful vertical storyline. You simply create posts, assign images, a date, and then Time Line Diagram will automatically populate the posts in chronological order, based on the year and date.</p>
<p><a href=\"https://wordpress.org/plugins/easier-excerpts/\">Easier Excerpts,</a> by <a href=\"https://profiles.wordpress.org/tommcfarlin/\">Tom McFarlin </a>and <a href=\"https://profiles.wordpress.org/ericdye/\">Eric Dye</a> from PressWare, automatically expands and contracts the post&#8217;s excerpt to eliminate unnecessary white space.</p>
<h2>WPWeekly Meta:</h2>
<p><strong>Next Episode:</strong> Wednesday, March 16th 9:30 P.M. Eastern</p>
<p><strong>Subscribe To WPWeekly Via Itunes: </strong><a href=\"https://itunes.apple.com/us/podcast/wordpress-weekly/id694849738\" target=\"_blank\">Click here to subscribe</a></p>
<p><strong>Subscribe To WPWeekly Via RSS: </strong><a href=\"http://www.wptavern.com/feed/podcast\" target=\"_blank\">Click here to subscribe</a></p>
<p><strong>Subscribe To WPWeekly Via Stitcher Radio: </strong><a href=\"http://www.stitcher.com/podcast/wordpress-weekly-podcast?refid=stpr\" target=\"_blank\">Click here to subscribe</a></p>
<p><strong>Listen To Episode #225:</strong><br />
</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 10 Mar 2016 20:37:13 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Jeff Chandler\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:44;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:93:\"WPTavern: Jetpack 3.9.3 Maintenance Release Adds Compatibility for WordPress 4.5 Custom Logos\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52250\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:103:\"http://wptavern.com/jetpack-3-9-3-maintenance-release-adds-compatibility-for-wordpress-4-5-custom-logos\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:2731:\"<p><a href=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2014/07/jetpack-logo.gif\" rel=\"attachment wp-att-27470\"><img src=\"http://i1.wp.com/wptavern.com/wp-content/uploads/2014/07/jetpack-logo.gif?resize=700%2C276\" alt=\"jetpack-logo\" class=\"aligncenter size-full wp-image-27470\" /></a></p>
<p><a href=\"http://jetpack.com/2016/03/10/jetpack-3-9-3-maintenance-and-compatibility-release/\" target=\"_blank\">Jetpack 3.9.3 and 3.9.4</a> are now available. Although 3.9.3 is billed as a &#8220;maintenance and compatibility release,&#8221; there are a number of significant changes and improvements that make this an important release.</p>
<p>WordPress 4.5 will introduce native <a href=\"http://wptavern.com/wordpress-4-5-to-introduce-native-support-for-a-theme-logo\" target=\"_blank\">support for a theme logo</a>. This will render Jetpack&#8217;s site logo feature obsolete. The 3.9.3 release of the plugin adds compatibility with WordPress 4.5 by ensuring that sites use core&#8217;s implementation for custom logos instead.</p>
<p>According to Konstantin Obenland in a recent <a href=\"https://make.wordpress.org/core/2016/03/10/custom-logo/\" target=\"_blank\">post</a> on make/core, &#8220;Jetpack will do a migration behind the scenes to work with it out of the box.&#8221; He also said that WordPress core&#8217;s new custom logo feature will use <a href=\"http://wptavern.com/customizer-responsive-preview-and-selective-refresh-to-be-merged-into-wordpress-4-5\" target=\"_blank\">Selective Refresh</a>, which means that the preview will load instantly after the image has been uploaded.</p>
<p>Notable enhancements in this release include:</p>
<ul>
<li>When using Carousel and Photon together, Jetpack will now link to the Photon version of full-sized images</li>
<li>Performance improvements to Comments, Infinite Scroll, Markdown, Publicize, Sitemaps, and the Subscription widget</li>
<li>Infinite Scroll: Introduced a later filter for settings</li>
<li>New filters in the Top Posts Widget code</li>
<li>oEmbed for Houzz.com</li>
</ul>
<p>The release also fixes an annoying bug in the Comments module that would reload the page when clicking &#8216;Reply.&#8217;</p>
<p>Jetpack 3.9.4 was released right on the heels of 3.9.3 to fix an issue where some comments were being displayed incorrectly. The problem was significant enough to push out an additional release right away.</p>
<p>Updating to the latest version of Jetpack will help your site work seamlessly with WordPress 4.5 when it is released the week of April 12. Check out the full <a href=\"https://wordpress.org/plugins/jetpack/changelog/\" target=\"_blank\">changelog</a> for both releases to see all of the enhancements and bug fixes.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 10 Mar 2016 18:29:51 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:45;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:90:\"WPTavern: WordCamp Europe 2016 Expands Attendee Capacity to 2200, Largest WordCamp to Date\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52248\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:99:\"http://wptavern.com/wordcamp-europe-2016-expands-attendee-capacity-to-2200-largest-wordcamp-to-date\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:2919:\"<a href=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/MuseumsQuartier.jpg\" rel=\"attachment wp-att-52255\"><img src=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/MuseumsQuartier.jpg?resize=800%2C448\" alt=\"photo credit: rank.at\" class=\"size-full wp-image-52255\" /></a>photo credit: <a href=\"https://www.rank.at/en/blog-article/old-meets-new-in-the-heart-of-vienna-the-museumsquartier-vienna.html\">rank.at</a>
<p><a href=\"https://2016.europe.wordcamp.org/\" target=\"_blank\">WordCamp Europe 2016</a> is now on track to be the largest WordPress conference to date. The event, which will be held in Vienna June 24-26, has expanded its capacity to 2200 attendees (including micro-sponsors.) 400 additional tickets will be made available this week.</p>
<p><a href=\"http://wptavern.com/wordcamp-europe-2016-sold-out-organizers-working-to-get-more-venue-space\" target=\"_blank\">The first 1700 seats sold out</a> six months in advance, causing organizers to scramble to expand the venue capacity to meet the overwhelming demand for more tickets. They were able to secure three additional halls in the Leopold Museum and the Baroque suites of the MuseumsQuartier, all located within a minute&#8217;s walking distance of each other.</p>
<p>“With the camp happening in the city center, we wanted to make it easy for people to visit all the exquisite museums and sights in the area,&#8221; lead organizer Petya Raykovska said. As a bonus, conference goers will receive free access to the Leopold&#8217;s museum&#8217;s permanent exhibitions as part of their tickets.</p>
<p>WordCamp Europe will also be hosting the largest WordPress contributor day on record. Organizers are planning for 500 attendees and are considering using one of Vienna&#8217;s universities as the venue.</p>
<p>&#8220;We would have liked it to be in Leopold’s but unfortunately securing stable wifi for so many people in a museum is above our budget, so we’re looking for a venue that already has the infrastructure,&#8221; Raykovska said.</p>
<p>Current attendees represent 68 different countries, and the organizing team now includes members from 10 countries spanning both Eastern and Western Europe. The team would like to host a WordPress community summit for Europe but have not received confirmation for this year.</p>
<p>The host city for WordCamp Europe 2017 will be selected by the end of March. This will expand the organizing team for the current event, as future hosts will come on board to learn the ropes.</p>
<p>The next batch of <a href=\"https://2016.europe.wordcamp.org/tickets/\" target=\"_blank\">tickets</a> for the event will go on sale Friday, March 11th at 10 AM CET. In the meantime, the 250 people who signed up for the <a href=\"http://eepurl.com/bNsAUr\" target=\"_blank\">waiting list</a> will receive an email to claim their tickets first via a special reservation link.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 10 Mar 2016 10:35:06 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:46;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:73:\"WPTavern: Write CSS in the Customizer with the Advanced CSS Editor Plugin\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52194\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:83:\"http://wptavern.com/write-css-in-the-customizer-with-the-advanced-css-editor-plugin\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:3247:\"<a href=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/paint-brush.jpg\" rel=\"attachment wp-att-52240\"><img src=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/paint-brush.jpg?resize=1024%2C538\" alt=\"photo credit: cutting in - (license)\" class=\"size-full wp-image-52240\" /></a>photo credit: <a href=\"http://www.flickr.com/photos/10687935@N04/6021868900\">cutting in</a> &#8211; <a href=\"https://creativecommons.org/licenses/by-nc/2.0/\">(license)</a>
<p>Last year WordPress developer <a href=\"http://www.hardeepasrani.com/\" target=\"_blank\">Hardeep Asrani</a> and the folks at <a href=\"http://themeisle.com/\" target=\"_blank\">ThemeIsle</a> released <a href=\"http://wptavern.com/customize-your-login-page-using-the-wordpress-customizer\" target=\"_blank\">Custom Login Customizer</a>, a plugin that allows users to design their own login pages in the customizer. Since that time core developers have made more progress on the customizer roadmap, allowing for more varied uses outside of a theme-related context.</p>
<p>Last week the ThemeIsle team debuted <a href=\"https://wordpress.org/plugins/advanced-css-editor/\" target=\"_blank\">Advanced CSS Editor</a>, a new plugin in its arsenal that demonstrates another exciting use for the customizer. It makes use of <a href=\"http://wptavern.com/customizer-responsive-preview-and-selective-refresh-to-be-merged-into-wordpress-4-5\" target=\"_blank\">postMessage transport</a> to offer live previews of CSS changes while a user is writing them in the customizer. The plugin also allows users to write CSS for different device screen sizes, including desktop, tablet, and mobile phones. The demo below shows a screen capture of the plugin in action on my test site:</p>
<p><a href=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/edit-css.gif\" rel=\"attachment wp-att-52205\"><img src=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/edit-css.gif?resize=924%2C558\" alt=\"edit-css\" class=\"aligncenter size-full wp-image-52205\" /></a></p>
<p>Seeing CSS edits updating in real time, instead of switching back and forth between a file editor and the frontend, was a refreshing experience. Having the ability to quickly write and preview media queries is also a convenient feature.</p>
<p>Although many core contributors are not fond of having a file editor in WordPress, the feature has yet to be removed. Using the Advanced CSS Editor plugin makes you wonder what the core file editor might look like in the customizer, at least for CSS files.</p>
<p>In the past, the customizer&#8217;s paint brush admin icon seemed like an ambitious stretch for a feature that, up until recently, felt clunky and slow to render previews. But recent advancements like <a href=\"https://make.wordpress.org/core/2016/02/16/selective-refresh-in-the-customizer/\" target=\"_blank\">selective refresh</a> will help to make the customizer provide a true live preview experience.</p>
<p>The <a href=\"https://wordpress.org/plugins/advanced-css-editor/\" target=\"_blank\">Advanced CSS Editor</a> plugin is a good example of how fast previews can be in the customizer and how much of a better experience it offers over similar plugins that require multiple clicks to refresh.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Wed, 09 Mar 2016 23:13:46 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:47;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:58:\"WPTavern: Jetpack Turns 5 and Celebrates With a New Domain\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52190\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:68:\"http://wptavern.com/jetpack-turns-5-and-celebrates-with-a-new-domain\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:9574:\"<p>On this day in 2011, <a href=\"https://wordpress.org/plugins/jetpack/\">Jetpack</a>, the project formerly known as &#8220;.org connect&#8221; inside Automattic, was released to the public. At the time, the team consisted of five people. Today, there are more than 50 people on various teams within the project, including, support, user experience, growth, and development. It&#8217;s also active on more than 1 million sites.</p>
<a href=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/Jetpack11Interface.png\" rel=\"attachment wp-att-52213\"><img class=\"size-full wp-image-52213\" src=\"http://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/Jetpack11Interface.png?resize=989%2C855\" alt=\"Jetpack 1.1 User Interface\" /></a>Jetpack 1.1 User Interface
<p>To celebrate the occasion, <a href=\"https://profiles.wordpress.org/professor44/\">Jesse Friedman</a>, Experience Advocate at Automattic, <a href=\"http://jetpack.com/2016/03/09/5-years-in-jetpack-is-soaring-higher-than-ever/\">shares four unique stories</a> from people who rely on Jetpack for their sites. The stories include a food blogger who uses 20 different modules, a developer who manages a number of sites, a new user who discovers the benefits of <a href=\"http://jetpack.com/support/photon/\">Photon</a>, and a convert who prefers Jetpack over clunky alternatives.</p>
<p>Jetpack&#8217;s support team is also celebrating its fifth birthday. According to Carolyn Sonnek, Happiness Rocketeer for Jetpack, the support team responded to over 93,000 support messages between email and the forums last year.</p>
<p>In addition to Jetpack&#8217;s birthday, the site&#8217;s domain has moved from Jetpack.me to Jetpack.com. Automattic <a href=\"http://www.thedomains.com/2015/12/09/automattic-com-owner-of-wordpress-acquires-jetpack-com/\">purchased the domain</a> in December 2015, from Jetpack Design of Santa Monica, CA. According to domain appraisal service <a href=\"http://www.estibot.com\">Estibot.com</a>, its <a href=\"http://www.estibot.com/appraise.php?a=appraisal&k=f818b525ed659fb84fdca10f05e64f47&domain=jetpack.com\">estimated value</a> is $51K.</p>
<h2>Interview With Jesse Friedman</h2>
<p>Friedman describes his journey working on Jetpack and shares what he&#8217;s learned since joining the team.</p>
<p><strong>How long have you been on the Jetpack journey and what&#8217;s it been like?</strong></p>
<p>I started using Jetpack in the Spring of 2012. I was working as the Director of Web Development at a web development and marketing company. I needed several different tools to round out the WordPress environment I was building to house a 2,000 site multisite that was growing by 50 sites a month.</p>
<p>All of us on the team agreed that Jetpack solved a lot of different needs for us in one convenient plugin. As developers, we loved the out of the box features like Sharing, Publicize, and Monitor, and our clients loved Stats.</p>
<p>In 2014, I left that company and joined up with the BruteProtect team. We worked hard to build a great security plugin that has been implemented on millions of websites. Later in 2014, we were excited to receive the news that we were joining the Jetpack team to continue BruteProtect as a Jetpack feature. Released last year, Jetpack Protect guards our users from malicious and brute force login attempts. It was truly something special to go from being a big fan of Jetpack to being on the team at Automattic.</p>
<p><strong>What are some things you have learned through Jetpack development that have benefited you in other areas?</strong></p>
<p>In the last 18 months, I’ve been doing a lot of work around the experience users have with Jetpack. Everything from individual features, to the connection process, to our website and how we communicate with our users. I’ve learned a lot about Jetpack and our community. The main thing being that, while Jetpack provides a lot of value to professionals and veterans, it is just<span class=\"copyonly\"> as</span><i></i>, if not more important for new users.</p>
<p><strong>Do you think Jetpack is a key component to WordPress reaching 50% market share?</strong></p>
<p>The WordPress community as a whole is growing so quickly. Hosts provide really simple tools to build a WordPress website with a single click or even no clicks at all. That means that WordPress and Jetpack have to be just as intuitive and work to improve the new user experience.<i class=\"copy_only\"></i></p>
<p>This is especially important when we consider growing WordPress&#8217; market share. I think everyone who builds something for WordPress, or publishes on WordPress, or organizes WordPress community events, are critical to growing to 50% or beyond.</p>
<p>Any WordPress tool or plugin that can help a user build their website faster while providing maintenance tools like Manage or security tools like Protect is going to play an important role in the growth of market share.</p>
<p>Jetpack specifically, is in a unique position because we can leverage the<span class=\"Apple-converted-space\"> </span><a href=\"http://wordpress.com/\" target=\"_blank\" rel=\"noreferrer\">WordPress.com</a><span class=\"Apple-converted-space\"> </span>infrastructure and network to build extremely powerful tools (like a global CDN) in an otherwise simple interface. Not to mention Jetpack’s popularity, it’s one of the most popular plugins across all of WordPress. Which is reinforced for me as I spend more and more time with our users, who are quite happy.</p>
<h2>Paid Services in Jetpack Remain at a Minimum</h2>
<p>Jetpack has come a long way since its inception but it&#8217;s interesting to look back at 2011 and review what some in the WordPress media world had to say about it. Ryan Imel, of WPCandy.com, <a href=\"http://wpcandy.com/thinks/jetpack-means-more-than-features-for-dot-org-users/\">looked into new opportunities for Automattic</a> as Jetpack provided a direct line into millions of self hosted sites.</p>
<blockquote><p>Jetpack is now a direct line in to WordPress.org Dashboards for Automattic. When (not <em>if</em>) Automattic releases a new software as a service, a simple update to Jetpack will bring that news in front of a serious number of WordPress.org users. This is a big step for Automattic, since up to now their reach has been mostly within the walls of WordPress.com. Now Jetpack is not only available for anyone to use, but it will come preinstalled with one-click installs of WordPress with a number of hosting providers.</p></blockquote>
<p><a href=\"http://jetpack.com/2011/03/09/blast-off/\">Jetpack&#8217;s goal</a> was to provide many of the useful features on WordPress.com to self-hosted users and while it does that, the business portion of the plugin can&#8217;t be ignored. Automattic owned services VideoPress and VaultPress are presented to millions of users who may otherwise not have known about them.</p>
<p>Today, Jetpack contains only two modules that require a paid subscription, VideoPress and VaultPress. So while it would be easy to increase Jetpack&#8217;s revenue generating capabilities by cramming it with commercial services and paid add-ons, Automattic has not done so.</p>
<p>At the end of the post, Imel asks a question that couldn&#8217;t be answered at the time, &#8220;In a large sense, what does Jetpack mean to the world of WordPress?&#8221; Fast forward five years later, we know that it&#8217;s a key component that&#8217;s helping <a href=\"http://wptavern.com/how-important-is-jetpack-on-wordpress-road-to-50-market-share\">WordPress move towards 50% market share</a>.</p>
<h2>Jetpack Pride</h2>
<p>The five year mark is a great milestone for any plugin and a great time to reflect. In Jetpack&#8217;s five year existence, Matt Mullenweg, WordPress co-founder, says what he&#8217;s most proud of, &#8220;I’m most proud of the fact that people who start using WordPress and Jetpack at the same time are more likely to be using WordPress a month later. It brings us closer to WordPress’ over-arching goal of democratizing publishing, giving users the ability to have the best of both worlds: open source and cloud.&#8221; Mullenweg said.</p>
<h2>Share Your Jetpack Story</h2>
<p>The Jetpack team is looking for feedback on how it&#8217;s saved you time, help you build websites faster, helped optimize your sites, etc. You can share your story by publishing it in the comments of this post or by using the <a href=\"https://twitter.com/search?q=%23JetpackTurns5&src=typd\"><strong>#JetpackTurns5</strong></a> hashtag on Twitter. One of my favorite stories so far is from Cécile Rainon who discovered WordPress through Jetpack and now works for Automattic.</p>
<blockquote class=\"twitter-tweet\"><p lang=\"en\" dir=\"ltr\">Discovered WordPress through this plugin and I\'m now a proud Automattician! <a href=\"https://t.co/r0yCKYzqmI\">https://t.co/r0yCKYzqmI</a> via <a href=\"https://twitter.com/jetpack\">@jetpack</a> <a href=\"https://twitter.com/hashtag/jetpackturns5?src=hash\">#jetpackturns5</a></p>
<p>&mdash; Cécile (@cecile_rainon) <a href=\"https://twitter.com/cecile_rainon/status/707594514433753088\">March 9, 2016</a></p></blockquote>
<p></p>
<p>We use a number of modules to provide basic functionality such as contact forms, custom CSS, Likes, Protect, and more. In fact, every module except for five are activated on the Tavern. Using one plugin that handles a lot of the functionality we use on a daily basis is easier to maintain than using a number of separate plugins.</p>
<p>Happy birthday, Jetpack and here&#8217;s to five more!</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Wed, 09 Mar 2016 22:02:11 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Jeff Chandler\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:48;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:21:\"Matt: Jetpack Turns 5\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:22:\"https://ma.tt/?p=46331\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:38:\"https://ma.tt/2016/03/jetpack-turns-5/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:761:\"<p>Today the <a href=\"http://jetpack.com/2016/03/09/5-years-in-jetpack-is-soaring-higher-than-ever/\">Jetpack plugin turns five years old</a>. Who woulda thunk it? It&#8217;s one of the most popular plugins in WP history, and sites that include it as part of their WordPress install are more likely to to have engaged and active users &#8212; we&#8217;ve even seen it reduce churn on major web hosts. While there&#8217;s been a lot that&#8217;s happened in the Jetpack plugin so far, what&#8217;s around the corner has me even more excited. <img src=\"https://s.w.org/images/core/emoji/72x72/1f600.png\" alt=\"?\" class=\"wp-smiley\" /> <img src=\"https://s.w.org/images/core/emoji/72x72/1f680.png\" alt=\"?\" class=\"wp-smiley\" /> P.S. Check out that new domain.</p>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Wed, 09 Mar 2016 14:27:35 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:4:\"Matt\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:49;a:6:{s:4:\"data\";s:13:\"
	
	
	
	
	
	
\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:62:\"WPTavern: WordPress 4.5 Adds Inline Editing to the Links Modal\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:28:\"http://wptavern.com/?p=52174\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:72:\"http://wptavern.com/wordpress-4-5-adds-inline-editing-to-the-links-modal\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:1777:\"<p>Today Andrew Ozz, one of the maintainers on <a href=\"https://make.wordpress.org/core/components/\" target=\"_blank\">WordPress&#8217; core Editor component</a>, announced some <a href=\"https://make.wordpress.org/core/2016/03/08/link-modal-wplink-changes-in-wordpress-4-5/\" target=\"_blank\">major improvements coming to the links modal</a> in the 4.5 release. Currently, when adding a link to text in the visual editor, a modal launches where you can paste in the URL, add link text, and set the target to open in a new window. The modal also expands to let you search for and link to existing content.</p>
<p>The TinyMCE link modal in WordPress 4.5 will allow for inline editing. It can actually detect when a user is entering a URL or attempting to search for one. The search uses jQuery UI Autocomplete, making it fast and easy to search through existing content. The gears icon launches the full modal with advanced options to set the target and title attribute.</p>
<p><a href=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/links-modal.gif\" rel=\"attachment wp-att-52178\"><img class=\"aligncenter size-full wp-image-52178\" src=\"http://i2.wp.com/wptavern.com/wp-content/uploads/2016/03/links-modal.gif?resize=838%2C496\" alt=\"links-modal\" /></a></p>
<p>The links modal improvements are the result of WordPress core contributor Ella Iseulde Van Dorpe&#8217;s work on a <a href=\"https://core.trac.wordpress.org/ticket/33301\" target=\"_blank\">ticket</a> opened to make this UI similar to the way Google Docs handles links. The experience of linking in the visual editor is now tighter and much more elegant and intuitive. This is one of the many small, yet impactful ways that WordPress is improving with each incremental release.</p>
<div id=\"epoch-width-sniffer\"></div>\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Wed, 09 Mar 2016 00:34:47 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Sarah Gooding\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}}}}}}}}}}}}s:4:\"type\";i:128;s:7:\"headers\";a:10:{s:6:\"server\";s:5:\"nginx\";s:4:\"date\";s:29:\"Sun, 27 Mar 2016 16:25:46 GMT\";s:12:\"content-type\";s:8:\"text/xml\";s:14:\"content-length\";s:6:\"231684\";s:10:\"connection\";s:5:\"close\";s:4:\"vary\";s:15:\"Accept-Encoding\";s:13:\"last-modified\";s:29:\"Sun, 27 Mar 2016 16:00:14 GMT\";s:15:\"x-frame-options\";s:10:\"SAMEORIGIN\";s:4:\"x-nc\";s:11:\"HIT lax 250\";s:13:\"accept-ranges\";s:5:\"bytes\";}s:5:\"build\";s:14:\"20130910210210\";}',
                'autoload' => 'no',
            ),

            array(
                'option_id' => 211,
                'option_name' => '_transient_timeout_feed_mod_d117b5738fbd35bd8c0391cda1f2b5d9',
                'option_value' => 1459139147,
                'autoload' => 'no',
            ),

            array(
                'option_id' => 212,
                'option_name' => '_transient_feed_mod_d117b5738fbd35bd8c0391cda1f2b5d9',
                'option_value' => 1459095947,
                'autoload' => 'no',
            ),

            array(
                'option_id' => 213,
                'option_name' => '_transient_timeout_feed_b9388c83948825c1edaef0d856b7b109',
                'option_value' => 1459139149,
                'autoload' => 'no',
            ),

            array(
                'option_id' => 214,
                'option_name' => '_transient_feed_b9388c83948825c1edaef0d856b7b109',
                'option_value' => 'a:4:{s:5:\"child\";a:1:{s:0:\"\";a:1:{s:3:\"rss\";a:1:{i:0;a:6:{s:4:\"data\";s:3:\"
	
\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:7:\"version\";s:3:\"2.0\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:1:{s:0:\"\";a:1:{s:7:\"channel\";a:1:{i:0;a:6:{s:4:\"data\";s:117:\"
		
		
		
		
		
		
				

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

	\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:7:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"WordPress Plugins » View: Popular\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:45:\"https://wordpress.org/plugins/browse/popular/\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"WordPress Plugins » View: Popular\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:8:\"language\";a:1:{i:0;a:5:{s:4:\"data\";s:5:\"en-US\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Sun, 27 Mar 2016 16:12:23 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:9:\"generator\";a:1:{i:0;a:5:{s:4:\"data\";s:25:\"http://bbpress.org/?v=1.1\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"item\";a:30:{i:0;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:21:\"Really Simple CAPTCHA\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:62:\"https://wordpress.org/plugins/really-simple-captcha/#post-9542\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Mon, 09 Mar 2009 02:17:35 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"9542@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:138:\"Really Simple CAPTCHA is a CAPTCHA module intended to be called from other plugins. It is originally created for my Contact Form 7 plugin.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:16:\"Takayuki Miyoshi\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:1;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:16:\"TinyMCE Advanced\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:57:\"https://wordpress.org/plugins/tinymce-advanced/#post-2082\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Wed, 27 Jun 2007 15:00:26 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"2082@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:71:\"Enables the advanced features of TinyMCE, the WordPress WYSIWYG editor.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:10:\"Andrew Ozz\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:2;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:14:\"W3 Total Cache\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:56:\"https://wordpress.org/plugins/w3-total-cache/#post-12073\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Wed, 29 Jul 2009 18:46:31 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"12073@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:132:\"Easy Web Performance Optimization (WPO) using caching: browser, page, object, database, minify and content delivery network support.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:16:\"Frederick Townes\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:3;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:19:\"Google XML Sitemaps\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:64:\"https://wordpress.org/plugins/google-sitemap-generator/#post-132\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 09 Mar 2007 22:31:32 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:33:\"132@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:105:\"This plugin will generate a special XML sitemap which will help search engines to better index your blog.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:14:\"Arne Brachhold\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:4;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:14:\"WP Super Cache\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:55:\"https://wordpress.org/plugins/wp-super-cache/#post-2572\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Mon, 05 Nov 2007 11:40:04 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"2572@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:73:\"A very fast caching engine for WordPress that produces static html files.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:16:\"Donncha O Caoimh\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:5;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:14:\"Duplicate Post\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:55:\"https://wordpress.org/plugins/duplicate-post/#post-2646\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Wed, 05 Dec 2007 17:40:03 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"2646@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:22:\"Clone posts and pages.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:4:\"Lopo\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:6;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:25:\"Google Analytics by Yoast\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:71:\"https://wordpress.org/plugins/google-analytics-for-wordpress/#post-2316\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 14 Sep 2007 12:15:27 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"2316@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:124:\"Track your WordPress site easily with the latest tracking codes and lots added data for search result pages and error pages.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Joost de Valk\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:7;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:9:\"Yoast SEO\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:54:\"https://wordpress.org/plugins/wordpress-seo/#post-8321\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 01 Jan 2009 20:34:44 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"8321@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:114:\"Improve your WordPress SEO: Write better content and have a fully optimized WordPress site using Yoast SEO plugin.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"Joost de Valk\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:8;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:11:\"WP-PageNavi\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:51:\"https://wordpress.org/plugins/wp-pagenavi/#post-363\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 09 Mar 2007 23:17:57 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:33:\"363@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:49:\"Adds a more advanced paging navigation interface.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:11:\"Lester Chan\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:9;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:11:\"Hello Dolly\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:52:\"https://wordpress.org/plugins/hello-dolly/#post-5790\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 29 May 2008 22:11:34 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"5790@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:150:\"This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:14:\"Matt Mullenweg\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:10;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:11:\"WooCommerce\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:53:\"https://wordpress.org/plugins/woocommerce/#post-29860\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Mon, 05 Sep 2011 08:13:36 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"29860@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:97:\"WooCommerce is a powerful, extendable eCommerce plugin that helps you sell anything. Beautifully.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:9:\"WooThemes\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:11;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:15:\"NextGEN Gallery\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:56:\"https://wordpress.org/plugins/nextgen-gallery/#post-1169\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Mon, 23 Apr 2007 20:08:06 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"1169@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:121:\"The most popular WordPress gallery plugin and one of the most popular plugins of all time with over 14 million downloads.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:9:\"Alex Rabe\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:12;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:18:\"Wordfence Security\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:51:\"https://wordpress.org/plugins/wordfence/#post-29832\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Sun, 04 Sep 2011 03:13:51 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"29832@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:138:\"The Wordfence WordPress security plugin provides free enterprise-class WordPress security, protecting your website from hacks and malware.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:9:\"Wordfence\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:13;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:19:\"All in One SEO Pack\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:59:\"https://wordpress.org/plugins/all-in-one-seo-pack/#post-753\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 30 Mar 2007 20:08:18 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:33:\"753@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:150:\"The most downloaded plugin for WordPress (almost 30 million downloads). Use All in One SEO Pack to automatically optimize your site for Search Engines\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:8:\"uberdose\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:14;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:7:\"Akismet\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:46:\"https://wordpress.org/plugins/akismet/#post-15\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 09 Mar 2007 22:11:30 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:32:\"15@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:98:\"Akismet checks your comments against the Akismet Web service to see if they look like spam or not.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:14:\"Matt Mullenweg\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:15;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:18:\"WordPress Importer\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:60:\"https://wordpress.org/plugins/wordpress-importer/#post-18101\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 20 May 2010 17:42:45 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"18101@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:101:\"Import posts, pages, comments, custom fields, categories, tags and more from a WordPress export file.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:14:\"Brian Colinger\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:16;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:24:\"Jetpack by WordPress.com\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:49:\"https://wordpress.org/plugins/jetpack/#post-23862\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 20 Jan 2011 02:21:38 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"23862@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:107:\"Increase your traffic, view your stats, speed up your site, and protect yourself from hackers with Jetpack.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:9:\"Tim Moore\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:17;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:22:\"Advanced Custom Fields\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:64:\"https://wordpress.org/plugins/advanced-custom-fields/#post-25254\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 17 Mar 2011 04:07:30 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"25254@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:68:\"Customise WordPress with powerful, professional and intuitive fields\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:12:\"elliotcondon\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:18;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:21:\"Regenerate Thumbnails\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:62:\"https://wordpress.org/plugins/regenerate-thumbnails/#post-6743\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Sat, 23 Aug 2008 14:38:58 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"6743@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:76:\"Allows you to regenerate your thumbnails after changing the thumbnail sizes.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:25:\"Alex Mills (Viper007Bond)\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:19;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:14:\"Contact Form 7\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:55:\"https://wordpress.org/plugins/contact-form-7/#post-2141\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 02 Aug 2007 12:45:03 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"2141@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:54:\"Just another contact form plugin. Simple but flexible.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:16:\"Takayuki Miyoshi\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:20;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:26:\"Page Builder by SiteOrigin\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:59:\"https://wordpress.org/plugins/siteorigin-panels/#post-51888\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 11 Apr 2013 10:36:42 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"51888@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:111:\"Build responsive page layouts using the widgets you know and love using this simple drag and drop page builder.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:11:\"Greg Priday\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:21;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:16:\"Disable Comments\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:58:\"https://wordpress.org/plugins/disable-comments/#post-26907\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 27 May 2011 04:42:58 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"26907@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:134:\"Allows administrators to globally disable comments on their site. Comments can be disabled according to post type. Multisite friendly.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:10:\"Samir Shah\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:22;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:18:\"WP Multibyte Patch\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:60:\"https://wordpress.org/plugins/wp-multibyte-patch/#post-28395\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 14 Jul 2011 12:22:53 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"28395@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:71:\"Multibyte functionality enhancement for the WordPress Japanese package.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:13:\"plugin-master\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:23;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:27:\"Black Studio TinyMCE Widget\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:69:\"https://wordpress.org/plugins/black-studio-tinymce-widget/#post-31973\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 10 Nov 2011 15:06:14 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"31973@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:39:\"The visual editor widget for Wordpress.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:12:\"Marco Chiesi\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:24;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:33:\"Google Analytics Dashboard for WP\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:75:\"https://wordpress.org/plugins/google-analytics-dashboard-for-wp/#post-50539\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Sun, 10 Mar 2013 17:07:11 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"50539@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:127:\"Displays Google Analytics reports in your WordPress Dashboard. Inserts the latest Google Analytics tracking code in your pages.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:10:\"Alin Marcu\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:25;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:46:\"iThemes Security (formerly Better WP Security)\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:60:\"https://wordpress.org/plugins/better-wp-security/#post-21738\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Fri, 22 Oct 2010 22:06:05 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"21738@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:150:\"Protect your WordPress site by hiding vital areas of your site, protecting access to important files, preventing brute-force login attempts, detecting\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:7:\"iThemes\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:26;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:30:\"Clef Two-Factor Authentication\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:48:\"https://wordpress.org/plugins/wpclef/#post-47509\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 27 Dec 2012 01:25:57 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"47509@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:138:\"Modern two-factor that people love to use: strong authentication without passwords or tokens; single sign on/off; magical user experience.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:9:\"Dave Ross\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:27;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:34:\"UpdraftPlus Backup and Restoration\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:53:\"https://wordpress.org/plugins/updraftplus/#post-38058\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Mon, 21 May 2012 15:14:11 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"38058@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:148:\"Backup and restoration made easy. Complete backups; manual or scheduled (backup to S3, Dropbox, Google Drive, Rackspace, FTP, SFTP, email + others).\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:14:\"David Anderson\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:28;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:10:\"Duplicator\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:52:\"https://wordpress.org/plugins/duplicator/#post-26607\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Mon, 16 May 2011 12:15:41 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"26607@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:88:\"Duplicate, clone, backup, move and transfer an entire site from one location to another.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:10:\"Cory Lamle\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}i:29;a:6:{s:4:\"data\";s:30:\"
			
			
			
			
			
			
					\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";s:5:\"child\";a:2:{s:0:\"\";a:5:{s:5:\"title\";a:1:{i:0;a:5:{s:4:\"data\";s:11:\"Meta Slider\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:51:\"https://wordpress.org/plugins/ml-slider/#post-49521\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:7:\"pubDate\";a:1:{i:0;a:5:{s:4:\"data\";s:31:\"Thu, 14 Feb 2013 16:56:31 +0000\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:4:\"guid\";a:1:{i:0;a:5:{s:4:\"data\";s:35:\"49521@http://wordpress.org/plugins/\";s:7:\"attribs\";a:1:{s:0:\"\";a:1:{s:11:\"isPermaLink\";s:5:\"false\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}s:11:\"description\";a:1:{i:0;a:5:{s:4:\"data\";s:145:\"Easy to use WordPress slider plugin. Create SEO optimised responsive slideshows with Nivo Slider, Flex Slider, Coin Slider and Responsive Slides.\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}s:32:\"http://purl.org/dc/elements/1.1/\";a:1:{s:7:\"creator\";a:1:{i:0;a:5:{s:4:\"data\";s:11:\"Matcha Labs\";s:7:\"attribs\";a:0:{}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}}}s:27:\"http://www.w3.org/2005/Atom\";a:1:{s:4:\"link\";a:1:{i:0;a:5:{s:4:\"data\";s:0:\"\";s:7:\"attribs\";a:1:{s:0:\"\";a:3:{s:4:\"href\";s:46:\"https://wordpress.org/plugins/rss/view/popular\";s:3:\"rel\";s:4:\"self\";s:4:\"type\";s:19:\"application/rss+xml\";}}s:8:\"xml_base\";s:0:\"\";s:17:\"xml_base_explicit\";b:0;s:8:\"xml_lang\";s:0:\"\";}}}}}}}}}}}}s:4:\"type\";i:128;s:7:\"headers\";a:9:{s:6:\"server\";s:5:\"nginx\";s:4:\"date\";s:29:\"Sun, 27 Mar 2016 16:25:48 GMT\";s:12:\"content-type\";s:23:\"text/xml; charset=UTF-8\";s:10:\"connection\";s:5:\"close\";s:4:\"vary\";s:15:\"Accept-Encoding\";s:25:\"strict-transport-security\";s:11:\"max-age=360\";s:13:\"last-modified\";s:29:\"Mon, 09 Mar 2009 02:17:35 GMT\";s:15:\"x-frame-options\";s:10:\"SAMEORIGIN\";s:4:\"x-nc\";s:11:\"HIT lax 249\";}s:5:\"build\";s:14:\"20130910210210\";}',
                'autoload' => 'no',
            ),

            array(
                'option_id' => 215,
                'option_name' => '_transient_timeout_feed_mod_b9388c83948825c1edaef0d856b7b109',
                'option_value' => 1459139149,
                'autoload' => 'no',
            ),

            array(
                'option_id' => 216,
                'option_name' => '_transient_feed_mod_b9388c83948825c1edaef0d856b7b109',
                'option_value' => 1459095949,
                'autoload' => 'no',
            ),

            array(
                'option_id' => 217,
                'option_name' => '_transient_timeout_dash_88ae138922fe95674369b1cb3d215a2b',
                'option_value' => 1459139149,
                'autoload' => 'no',
            ),

            array(
                'option_id' => 218,
                'option_name' => '_transient_dash_88ae138922fe95674369b1cb3d215a2b',
                'option_value' => '<div class=\"rss-widget\"><ul><li><a class=\'rsswidget\' href=\'https://wordpress.org/news/2016/03/wordpress-4-5-release-candidate/\'>WordPress 4.5 Release Candidate</a> <span class=\"rss-date\">March 24, 2016</span><div class=\"rssSummary\">The release candidate for WordPress 4.5 is now available. We’ve made 49 changes since releasing Beta 4 a week ago. RC means we think we’re done, but with millions of users and thousands of plugins and themes, it’s possible we’ve missed something. We hope to ship WordPress 4.5 on Tuesday, April 12, but we need your help [&hellip;]</div></li></ul></div><div class=\"rss-widget\"><ul><li><a class=\'rsswidget\' href=\'https://poststatus.com/wordpress-saas-draft-podcast/\'>Post Status: WordPress and SaaS — Draft podcast</a></li><li><a class=\'rsswidget\' href=\'http://wptavern.com/draft-and-save-customizer-changes-for-later-with-new-customize-snapshots-plugin\'>WPTavern: Draft and Save Customizer Changes for Later with New Customize Snapshots Plugin</a></li><li><a class=\'rsswidget\' href=\'http://wptavern.com/get-your-widgets-ready-for-wordpress-4-5\'>WPTavern: Get Your Widgets Ready for WordPress 4.5</a></li></ul></div><div class=\"rss-widget\"><ul><li class=\'dashboard-news-plugin\'><span>Popular Plugin:</span> <a href=\'https://wordpress.org/plugins/wpclef/\' class=\'dashboard-news-plugin-link\'>Clef Two-Factor Authentication</a>&nbsp;<span>(<a href=\'plugin-install.php?tab=plugin-information&amp;plugin=wpclef&amp;_wpnonce=d8677915d5&amp;TB_iframe=true&amp;width=600&amp;height=800\' class=\'thickbox\' title=\'Clef Two-Factor Authentication\'>Install</a>)</span></li></ul></div>',
                'autoload' => 'no',
            ),

            array(
                'option_id' => 220,
                'option_name' => '_site_transient_timeout_theme_roots',
                'option_value' => 1459100194,
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 221,
                'option_name' => '_site_transient_theme_roots',
                'option_value' => 'a:5:{s:6:\"litera\";s:7:\"/themes\";s:11:\"literachild\";s:7:\"/themes\";s:13:\"twentyfifteen\";s:7:\"/themes\";s:14:\"twentyfourteen\";s:7:\"/themes\";s:13:\"twentysixteen\";s:7:\"/themes\";}',
                'autoload' => 'yes',
            ),

            array(
                'option_id' => 222,
                'option_name' => '_transient_doing_cron',
                'option_value' => 1459127761.0808000564575195312500,
                'autoload' => 'yes',
            ),

        ));
        DB::table('lw_postmeta')->insert(array(
            
            array(
                'meta_id' => 1,
                'post_id' => 2,
                'meta_key' => '_wp_page_template',
                'meta_value' => 'default',
            ),

            array(
                'meta_id' => 2,
                'post_id' => 1,
                'meta_key' => '_edit_lock',
                'meta_value' => '1459075979:1',
            ),

            array(
                'meta_id' => 3,
                'post_id' => 4,
                'meta_key' => '_edit_last',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 4,
                'post_id' => 4,
                'meta_key' => '_edit_lock',
                'meta_value' => '1459137488:1',
            ),

            array(
                'meta_id' => 9,
                'post_id' => 6,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/10475592_732536416805094_6571953405072057842_n.jpg',
            ),

            array(
                'meta_id' => 10,
                'post_id' => 6,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:458;s:6:\"height\";i:375;s:4:\"file\";s:58:\"2016/03/10475592_732536416805094_6571953405072057842_n.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:58:\"10475592_732536416805094_6571953405072057842_n-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:58:\"10475592_732536416805094_6571953405072057842_n-300x246.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:246;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 11,
                'post_id' => 4,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 6,
            ),

            array(
                'meta_id' => 14,
                'post_id' => 2,
                'meta_key' => '_edit_lock',
                'meta_value' => '1458963670:1',
            ),

            array(
                'meta_id' => 17,
                'post_id' => 8,
                'meta_key' => '_edit_last',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 18,
                'post_id' => 8,
                'meta_key' => '_edit_lock',
                'meta_value' => '1459061944:1',
            ),

            array(
                'meta_id' => 19,
                'post_id' => 8,
                'meta_key' => '_wp_trash_meta_status',
                'meta_value' => 'draft',
            ),

            array(
                'meta_id' => 20,
                'post_id' => 8,
                'meta_key' => '_wp_trash_meta_time',
                'meta_value' => 1459068491,
            ),

            array(
                'meta_id' => 29,
                'post_id' => 18,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/986cb295-c048-3f96-b7b1-8fe18a56cf70.jpg',
            ),

            array(
                'meta_id' => 30,
                'post_id' => 18,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:1052;s:6:\"height\";i:701;s:4:\"file\";s:48:\"2016/03/986cb295-c048-3f96-b7b1-8fe18a56cf70.jpg\";s:5:\"sizes\";a:4:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"986cb295-c048-3f96-b7b1-8fe18a56cf70-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"986cb295-c048-3f96-b7b1-8fe18a56cf70-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:48:\"986cb295-c048-3f96-b7b1-8fe18a56cf70-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:49:\"986cb295-c048-3f96-b7b1-8fe18a56cf70-1024x682.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:682;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 31,
                'post_id' => 18,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 34,
                'post_id' => 19,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 35,
                'post_id' => 20,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/75dbe40e-1b97-3285-b36a-4e218883552a.jpg',
            ),

            array(
                'meta_id' => 36,
                'post_id' => 20,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:1406;s:6:\"height\";i:937;s:4:\"file\";s:48:\"2016/03/75dbe40e-1b97-3285-b36a-4e218883552a.jpg\";s:5:\"sizes\";a:5:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"75dbe40e-1b97-3285-b36a-4e218883552a-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"75dbe40e-1b97-3285-b36a-4e218883552a-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:48:\"75dbe40e-1b97-3285-b36a-4e218883552a-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:49:\"75dbe40e-1b97-3285-b36a-4e218883552a-1024x682.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:682;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:49:\"75dbe40e-1b97-3285-b36a-4e218883552a-1200x800.jpg\";s:5:\"width\";i:1200;s:6:\"height\";i:800;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 37,
                'post_id' => 20,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 38,
                'post_id' => 21,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/fd1ddf04-c5b2-30dd-936f-e8b601139770.jpg',
            ),

            array(
                'meta_id' => 39,
                'post_id' => 21,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:503;s:6:\"height\";i:402;s:4:\"file\";s:48:\"2016/03/fd1ddf04-c5b2-30dd-936f-e8b601139770.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"fd1ddf04-c5b2-30dd-936f-e8b601139770-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"fd1ddf04-c5b2-30dd-936f-e8b601139770-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 40,
                'post_id' => 21,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 41,
                'post_id' => 22,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/a2bf059b-d5ce-37c3-b2b4-c9505cb918cc.jpg',
            ),

            array(
                'meta_id' => 42,
                'post_id' => 22,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:617;s:6:\"height\";i:493;s:4:\"file\";s:48:\"2016/03/a2bf059b-d5ce-37c3-b2b4-c9505cb918cc.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"a2bf059b-d5ce-37c3-b2b4-c9505cb918cc-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"a2bf059b-d5ce-37c3-b2b4-c9505cb918cc-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 43,
                'post_id' => 22,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 46,
                'post_id' => 23,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 47,
                'post_id' => 24,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/0013b37f-3a99-3e5f-aee8-e6f4c5fd7098.jpg',
            ),

            array(
                'meta_id' => 48,
                'post_id' => 24,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:577;s:6:\"height\";i:461;s:4:\"file\";s:48:\"2016/03/0013b37f-3a99-3e5f-aee8-e6f4c5fd7098.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"0013b37f-3a99-3e5f-aee8-e6f4c5fd7098-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"0013b37f-3a99-3e5f-aee8-e6f4c5fd7098-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 49,
                'post_id' => 24,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 50,
                'post_id' => 23,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 24,
            ),

            array(
                'meta_id' => 53,
                'post_id' => 25,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 54,
                'post_id' => 26,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/b381be8b-8d26-3fb0-8ff3-df54f0a4a7ba.jpg',
            ),

            array(
                'meta_id' => 55,
                'post_id' => 26,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:365;s:6:\"height\";i:292;s:4:\"file\";s:48:\"2016/03/b381be8b-8d26-3fb0-8ff3-df54f0a4a7ba.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"b381be8b-8d26-3fb0-8ff3-df54f0a4a7ba-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"b381be8b-8d26-3fb0-8ff3-df54f0a4a7ba-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 56,
                'post_id' => 26,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 57,
                'post_id' => 25,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 26,
            ),

            array(
                'meta_id' => 58,
                'post_id' => 27,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/10cdc354-aaae-309b-b50a-b71d853dc14e.jpg',
            ),

            array(
                'meta_id' => 59,
                'post_id' => 27,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:1357;s:6:\"height\";i:904;s:4:\"file\";s:48:\"2016/03/10cdc354-aaae-309b-b50a-b71d853dc14e.jpg\";s:5:\"sizes\";a:5:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"10cdc354-aaae-309b-b50a-b71d853dc14e-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"10cdc354-aaae-309b-b50a-b71d853dc14e-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:48:\"10cdc354-aaae-309b-b50a-b71d853dc14e-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:49:\"10cdc354-aaae-309b-b50a-b71d853dc14e-1024x682.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:682;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:49:\"10cdc354-aaae-309b-b50a-b71d853dc14e-1200x799.jpg\";s:5:\"width\";i:1200;s:6:\"height\";i:799;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 60,
                'post_id' => 27,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 61,
                'post_id' => 28,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/faf67317-d70d-3bf6-b370-f9ae85131759.jpg',
            ),

            array(
                'meta_id' => 62,
                'post_id' => 28,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:224;s:6:\"height\";i:179;s:4:\"file\";s:48:\"2016/03/faf67317-d70d-3bf6-b370-f9ae85131759.jpg\";s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"faf67317-d70d-3bf6-b370-f9ae85131759-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 63,
                'post_id' => 28,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 66,
                'post_id' => 29,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 67,
                'post_id' => 30,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/488daca9-9ec5-33ce-9f30-d0b4aa2a4c1c.jpg',
            ),

            array(
                'meta_id' => 68,
                'post_id' => 30,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:444;s:6:\"height\";i:355;s:4:\"file\";s:48:\"2016/03/488daca9-9ec5-33ce-9f30-d0b4aa2a4c1c.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"488daca9-9ec5-33ce-9f30-d0b4aa2a4c1c-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"488daca9-9ec5-33ce-9f30-d0b4aa2a4c1c-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 69,
                'post_id' => 30,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 70,
                'post_id' => 29,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 30,
            ),

            array(
                'meta_id' => 73,
                'post_id' => 31,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 74,
                'post_id' => 31,
                'meta_key' => '_thumbnail_id',
                'meta_value' => NULL,
            ),

            array(
                'meta_id' => 77,
                'post_id' => 32,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 78,
                'post_id' => 33,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/95e085b3-9a65-33b4-a87a-3acb55a530a1.jpg',
            ),

            array(
                'meta_id' => 79,
                'post_id' => 33,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:1210;s:6:\"height\";i:806;s:4:\"file\";s:48:\"2016/03/95e085b3-9a65-33b4-a87a-3acb55a530a1.jpg\";s:5:\"sizes\";a:5:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"95e085b3-9a65-33b4-a87a-3acb55a530a1-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"95e085b3-9a65-33b4-a87a-3acb55a530a1-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:48:\"95e085b3-9a65-33b4-a87a-3acb55a530a1-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:49:\"95e085b3-9a65-33b4-a87a-3acb55a530a1-1024x682.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:682;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:49:\"95e085b3-9a65-33b4-a87a-3acb55a530a1-1200x799.jpg\";s:5:\"width\";i:1200;s:6:\"height\";i:799;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 80,
                'post_id' => 33,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 81,
                'post_id' => 32,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 33,
            ),

            array(
                'meta_id' => 82,
                'post_id' => 34,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/e0c28319-1182-30a5-a60b-0708515fbc0e.jpg',
            ),

            array(
                'meta_id' => 83,
                'post_id' => 34,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:241;s:6:\"height\";i:192;s:4:\"file\";s:48:\"2016/03/e0c28319-1182-30a5-a60b-0708515fbc0e.jpg\";s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"e0c28319-1182-30a5-a60b-0708515fbc0e-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 84,
                'post_id' => 34,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 87,
                'post_id' => 35,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 88,
                'post_id' => 36,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/849e6031-923a-3a44-be7e-cb5325b4b71f.jpg',
            ),

            array(
                'meta_id' => 89,
                'post_id' => 36,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:245;s:6:\"height\";i:196;s:4:\"file\";s:48:\"2016/03/849e6031-923a-3a44-be7e-cb5325b4b71f.jpg\";s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"849e6031-923a-3a44-be7e-cb5325b4b71f-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 90,
                'post_id' => 36,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 91,
                'post_id' => 37,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/de89707d-3fc0-3f1e-ae86-22a00ad75d51.jpg',
            ),

            array(
                'meta_id' => 92,
                'post_id' => 37,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:498;s:6:\"height\";i:398;s:4:\"file\";s:48:\"2016/03/de89707d-3fc0-3f1e-ae86-22a00ad75d51.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"de89707d-3fc0-3f1e-ae86-22a00ad75d51-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"de89707d-3fc0-3f1e-ae86-22a00ad75d51-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 93,
                'post_id' => 37,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 96,
                'post_id' => 38,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 97,
                'post_id' => 39,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/badb82a6-3b4f-3da6-8232-15e4c676dbea.jpg',
            ),

            array(
                'meta_id' => 98,
                'post_id' => 39,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:259;s:6:\"height\";i:207;s:4:\"file\";s:48:\"2016/03/badb82a6-3b4f-3da6-8232-15e4c676dbea.jpg\";s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"badb82a6-3b4f-3da6-8232-15e4c676dbea-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 99,
                'post_id' => 39,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 100,
                'post_id' => 38,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 39,
            ),

            array(
                'meta_id' => 101,
                'post_id' => 40,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/ab7bc2b6-fb25-3654-af7a-181effb0cb4a.jpg',
            ),

            array(
                'meta_id' => 102,
                'post_id' => 40,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:1286;s:6:\"height\";i:857;s:4:\"file\";s:48:\"2016/03/ab7bc2b6-fb25-3654-af7a-181effb0cb4a.jpg\";s:5:\"sizes\";a:5:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"ab7bc2b6-fb25-3654-af7a-181effb0cb4a-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"ab7bc2b6-fb25-3654-af7a-181effb0cb4a-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:48:\"ab7bc2b6-fb25-3654-af7a-181effb0cb4a-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:49:\"ab7bc2b6-fb25-3654-af7a-181effb0cb4a-1024x682.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:682;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:49:\"ab7bc2b6-fb25-3654-af7a-181effb0cb4a-1200x800.jpg\";s:5:\"width\";i:1200;s:6:\"height\";i:800;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 103,
                'post_id' => 40,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 106,
                'post_id' => 41,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 107,
                'post_id' => 42,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/55aaaf98-9d0d-339a-9892-0a4dd8120991.jpg',
            ),

            array(
                'meta_id' => 108,
                'post_id' => 42,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:1431;s:6:\"height\";i:954;s:4:\"file\";s:48:\"2016/03/55aaaf98-9d0d-339a-9892-0a4dd8120991.jpg\";s:5:\"sizes\";a:5:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"55aaaf98-9d0d-339a-9892-0a4dd8120991-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"55aaaf98-9d0d-339a-9892-0a4dd8120991-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:48:\"55aaaf98-9d0d-339a-9892-0a4dd8120991-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:49:\"55aaaf98-9d0d-339a-9892-0a4dd8120991-1024x683.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:683;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:49:\"55aaaf98-9d0d-339a-9892-0a4dd8120991-1200x800.jpg\";s:5:\"width\";i:1200;s:6:\"height\";i:800;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 109,
                'post_id' => 42,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 110,
                'post_id' => 41,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 42,
            ),

            array(
                'meta_id' => 113,
                'post_id' => 43,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 116,
                'post_id' => 44,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 117,
                'post_id' => 45,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/48ecdbab-24fa-3c5e-95ed-d7015da87d14.jpg',
            ),

            array(
                'meta_id' => 118,
                'post_id' => 45,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:541;s:6:\"height\";i:432;s:4:\"file\";s:48:\"2016/03/48ecdbab-24fa-3c5e-95ed-d7015da87d14.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"48ecdbab-24fa-3c5e-95ed-d7015da87d14-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"48ecdbab-24fa-3c5e-95ed-d7015da87d14-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 119,
                'post_id' => 45,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 120,
                'post_id' => 46,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/7e47b9a4-7bed-3284-9729-b40e24d9e376.jpg',
            ),

            array(
                'meta_id' => 121,
                'post_id' => 46,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:1406;s:6:\"height\";i:937;s:4:\"file\";s:48:\"2016/03/7e47b9a4-7bed-3284-9729-b40e24d9e376.jpg\";s:5:\"sizes\";a:5:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"7e47b9a4-7bed-3284-9729-b40e24d9e376-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"7e47b9a4-7bed-3284-9729-b40e24d9e376-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:48:\"7e47b9a4-7bed-3284-9729-b40e24d9e376-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:49:\"7e47b9a4-7bed-3284-9729-b40e24d9e376-1024x682.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:682;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:49:\"7e47b9a4-7bed-3284-9729-b40e24d9e376-1200x800.jpg\";s:5:\"width\";i:1200;s:6:\"height\";i:800;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 122,
                'post_id' => 46,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 123,
                'post_id' => 47,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/36ecd221-e156-354b-a451-488c4bc26034.jpg',
            ),

            array(
                'meta_id' => 124,
                'post_id' => 47,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:365;s:6:\"height\";i:292;s:4:\"file\";s:48:\"2016/03/36ecd221-e156-354b-a451-488c4bc26034.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"36ecd221-e156-354b-a451-488c4bc26034-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"36ecd221-e156-354b-a451-488c4bc26034-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 125,
                'post_id' => 47,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 126,
                'post_id' => 48,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/6d2f8db0-3b26-3ca3-8a3b-71473e8bfef4.jpg',
            ),

            array(
                'meta_id' => 127,
                'post_id' => 48,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:1092;s:6:\"height\";i:728;s:4:\"file\";s:48:\"2016/03/6d2f8db0-3b26-3ca3-8a3b-71473e8bfef4.jpg\";s:5:\"sizes\";a:4:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"6d2f8db0-3b26-3ca3-8a3b-71473e8bfef4-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"6d2f8db0-3b26-3ca3-8a3b-71473e8bfef4-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:48:\"6d2f8db0-3b26-3ca3-8a3b-71473e8bfef4-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:49:\"6d2f8db0-3b26-3ca3-8a3b-71473e8bfef4-1024x683.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:683;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 128,
                'post_id' => 48,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 131,
                'post_id' => 49,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 132,
                'post_id' => 50,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/038a0340-255f-3d34-a2f1-72508ecaf815.jpg',
            ),

            array(
                'meta_id' => 133,
                'post_id' => 50,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:291;s:6:\"height\";i:232;s:4:\"file\";s:48:\"2016/03/038a0340-255f-3d34-a2f1-72508ecaf815.jpg\";s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"038a0340-255f-3d34-a2f1-72508ecaf815-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 134,
                'post_id' => 50,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 135,
                'post_id' => 49,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 50,
            ),

            array(
                'meta_id' => 138,
                'post_id' => 51,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 139,
                'post_id' => 52,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/bc516291-4418-3b84-88ba-b4ac3c47e837.jpg',
            ),

            array(
                'meta_id' => 140,
                'post_id' => 52,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:397;s:6:\"height\";i:317;s:4:\"file\";s:48:\"2016/03/bc516291-4418-3b84-88ba-b4ac3c47e837.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"bc516291-4418-3b84-88ba-b4ac3c47e837-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"bc516291-4418-3b84-88ba-b4ac3c47e837-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 141,
                'post_id' => 52,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 142,
                'post_id' => 51,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 52,
            ),

            array(
                'meta_id' => 145,
                'post_id' => 53,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 148,
                'post_id' => 54,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 149,
                'post_id' => 55,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/e3736fb9-d9cc-30bb-944d-e055635be144.jpg',
            ),

            array(
                'meta_id' => 150,
                'post_id' => 55,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:491;s:6:\"height\";i:392;s:4:\"file\";s:48:\"2016/03/e3736fb9-d9cc-30bb-944d-e055635be144.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"e3736fb9-d9cc-30bb-944d-e055635be144-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"e3736fb9-d9cc-30bb-944d-e055635be144-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 151,
                'post_id' => 55,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 154,
                'post_id' => 56,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 155,
                'post_id' => 57,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/e0cbeb6a-b861-3ae0-ba5c-e6a8507949f6.jpg',
            ),

            array(
                'meta_id' => 156,
                'post_id' => 57,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:389;s:6:\"height\";i:311;s:4:\"file\";s:48:\"2016/03/e0cbeb6a-b861-3ae0-ba5c-e6a8507949f6.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"e0cbeb6a-b861-3ae0-ba5c-e6a8507949f6-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"e0cbeb6a-b861-3ae0-ba5c-e6a8507949f6-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 157,
                'post_id' => 57,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 158,
                'post_id' => 56,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 57,
            ),

            array(
                'meta_id' => 161,
                'post_id' => 58,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 163,
                'post_id' => 59,
                'meta_key' => '_encloseme',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 164,
                'post_id' => 59,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 165,
                'post_id' => 60,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/532f91da-2484-32b6-9154-10202b9e1e99.jpg',
            ),

            array(
                'meta_id' => 166,
                'post_id' => 60,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:202;s:6:\"height\";i:161;s:4:\"file\";s:48:\"2016/03/532f91da-2484-32b6-9154-10202b9e1e99.jpg\";s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"532f91da-2484-32b6-9154-10202b9e1e99-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 167,
                'post_id' => 60,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 168,
                'post_id' => 59,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 60,
            ),

            array(
                'meta_id' => 170,
                'post_id' => 61,
                'meta_key' => '_encloseme',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 171,
                'post_id' => 61,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 172,
                'post_id' => 62,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/ad749fc2-e2b3-31f2-beb6-491593605654.jpg',
            ),

            array(
                'meta_id' => 173,
                'post_id' => 62,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:540;s:6:\"height\";i:432;s:4:\"file\";s:48:\"2016/03/ad749fc2-e2b3-31f2-beb6-491593605654.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"ad749fc2-e2b3-31f2-beb6-491593605654-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"ad749fc2-e2b3-31f2-beb6-491593605654-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 174,
                'post_id' => 62,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 175,
                'post_id' => 61,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 62,
            ),

            array(
                'meta_id' => 177,
                'post_id' => 63,
                'meta_key' => '_encloseme',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 178,
                'post_id' => 63,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 179,
                'post_id' => 64,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/bd00437b-1a83-3c29-b173-bc95a04c944e.jpg',
            ),

            array(
                'meta_id' => 180,
                'post_id' => 64,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:308;s:6:\"height\";i:246;s:4:\"file\";s:48:\"2016/03/bd00437b-1a83-3c29-b173-bc95a04c944e.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"bd00437b-1a83-3c29-b173-bc95a04c944e-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"bd00437b-1a83-3c29-b173-bc95a04c944e-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 181,
                'post_id' => 64,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 182,
                'post_id' => 63,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 64,
            ),

            array(
                'meta_id' => 184,
                'post_id' => 65,
                'meta_key' => '_encloseme',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 185,
                'post_id' => 65,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 187,
                'post_id' => 66,
                'meta_key' => '_encloseme',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 188,
                'post_id' => 66,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 189,
                'post_id' => 67,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/312d3b7e-b880-38cf-947e-477911aadd27.jpg',
            ),

            array(
                'meta_id' => 190,
                'post_id' => 67,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:551;s:6:\"height\";i:440;s:4:\"file\";s:48:\"2016/03/312d3b7e-b880-38cf-947e-477911aadd27.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"312d3b7e-b880-38cf-947e-477911aadd27-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"312d3b7e-b880-38cf-947e-477911aadd27-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 191,
                'post_id' => 67,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 192,
                'post_id' => 66,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 67,
            ),

            array(
                'meta_id' => 194,
                'post_id' => 68,
                'meta_key' => '_encloseme',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 195,
                'post_id' => 68,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 196,
                'post_id' => 69,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/0f7311ba-b484-31cb-8189-f58aa5d72f46.jpg',
            ),

            array(
                'meta_id' => 197,
                'post_id' => 69,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:354;s:6:\"height\";i:283;s:4:\"file\";s:48:\"2016/03/0f7311ba-b484-31cb-8189-f58aa5d72f46.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"0f7311ba-b484-31cb-8189-f58aa5d72f46-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"0f7311ba-b484-31cb-8189-f58aa5d72f46-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 198,
                'post_id' => 69,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 199,
                'post_id' => 68,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 69,
            ),

            array(
                'meta_id' => 200,
                'post_id' => 70,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/f7d6bf5a-caf3-3359-80ba-8fa57e31059e.jpg',
            ),

            array(
                'meta_id' => 201,
                'post_id' => 70,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:1310;s:6:\"height\";i:873;s:4:\"file\";s:48:\"2016/03/f7d6bf5a-caf3-3359-80ba-8fa57e31059e.jpg\";s:5:\"sizes\";a:5:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"f7d6bf5a-caf3-3359-80ba-8fa57e31059e-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"f7d6bf5a-caf3-3359-80ba-8fa57e31059e-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:48:\"f7d6bf5a-caf3-3359-80ba-8fa57e31059e-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:49:\"f7d6bf5a-caf3-3359-80ba-8fa57e31059e-1024x682.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:682;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:49:\"f7d6bf5a-caf3-3359-80ba-8fa57e31059e-1200x800.jpg\";s:5:\"width\";i:1200;s:6:\"height\";i:800;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 202,
                'post_id' => 70,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 203,
                'post_id' => 71,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/f9c8cc02-dfeb-31cd-adb4-13368d4f8a7d.jpg',
            ),

            array(
                'meta_id' => 204,
                'post_id' => 71,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:464;s:6:\"height\";i:371;s:4:\"file\";s:48:\"2016/03/f9c8cc02-dfeb-31cd-adb4-13368d4f8a7d.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"f9c8cc02-dfeb-31cd-adb4-13368d4f8a7d-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"f9c8cc02-dfeb-31cd-adb4-13368d4f8a7d-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 205,
                'post_id' => 71,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 206,
                'post_id' => 72,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/988eb0e8-cea0-3a82-85da-cb9ba49da4a5.jpg',
            ),

            array(
                'meta_id' => 207,
                'post_id' => 72,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:612;s:6:\"height\";i:489;s:4:\"file\";s:48:\"2016/03/988eb0e8-cea0-3a82-85da-cb9ba49da4a5.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"988eb0e8-cea0-3a82-85da-cb9ba49da4a5-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"988eb0e8-cea0-3a82-85da-cb9ba49da4a5-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 208,
                'post_id' => 72,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 210,
                'post_id' => 73,
                'meta_key' => '_encloseme',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 211,
                'post_id' => 73,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 212,
                'post_id' => 74,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/6d88bf7d-f6cf-3e4b-b356-5558fc397742.jpg',
            ),

            array(
                'meta_id' => 213,
                'post_id' => 74,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:410;s:6:\"height\";i:328;s:4:\"file\";s:48:\"2016/03/6d88bf7d-f6cf-3e4b-b356-5558fc397742.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"6d88bf7d-f6cf-3e4b-b356-5558fc397742-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"6d88bf7d-f6cf-3e4b-b356-5558fc397742-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 214,
                'post_id' => 74,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 215,
                'post_id' => 73,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 74,
            ),

            array(
                'meta_id' => 217,
                'post_id' => 75,
                'meta_key' => '_encloseme',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 218,
                'post_id' => 75,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 219,
                'post_id' => 76,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/1f9fbcc9-bdcf-38c2-9917-01b2de328123.jpg',
            ),

            array(
                'meta_id' => 220,
                'post_id' => 76,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:405;s:6:\"height\";i:324;s:4:\"file\";s:48:\"2016/03/1f9fbcc9-bdcf-38c2-9917-01b2de328123.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"1f9fbcc9-bdcf-38c2-9917-01b2de328123-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"1f9fbcc9-bdcf-38c2-9917-01b2de328123-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 221,
                'post_id' => 76,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 222,
                'post_id' => 75,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 76,
            ),

            array(
                'meta_id' => 224,
                'post_id' => 77,
                'meta_key' => '_encloseme',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 225,
                'post_id' => 77,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 226,
                'post_id' => 78,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/7ef1a897-1c8d-30c3-a27f-0a7f053f30c4.jpg',
            ),

            array(
                'meta_id' => 227,
                'post_id' => 78,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:289;s:6:\"height\";i:231;s:4:\"file\";s:48:\"2016/03/7ef1a897-1c8d-30c3-a27f-0a7f053f30c4.jpg\";s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"7ef1a897-1c8d-30c3-a27f-0a7f053f30c4-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 228,
                'post_id' => 78,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 229,
                'post_id' => 77,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 78,
            ),

            array(
                'meta_id' => 231,
                'post_id' => 79,
                'meta_key' => '_encloseme',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 232,
                'post_id' => 79,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 233,
                'post_id' => 80,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/85615c74-d56c-3e08-9105-3cdc44c1adbd.jpg',
            ),

            array(
                'meta_id' => 234,
                'post_id' => 80,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:510;s:6:\"height\";i:408;s:4:\"file\";s:48:\"2016/03/85615c74-d56c-3e08-9105-3cdc44c1adbd.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"85615c74-d56c-3e08-9105-3cdc44c1adbd-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"85615c74-d56c-3e08-9105-3cdc44c1adbd-300x240.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:240;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 235,
                'post_id' => 80,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 236,
                'post_id' => 79,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 80,
            ),

            array(
                'meta_id' => 238,
                'post_id' => 81,
                'meta_key' => '_encloseme',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 239,
                'post_id' => 81,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 240,
                'post_id' => 81,
                'meta_key' => '_thumbnail_id',
                'meta_value' => NULL,
            ),

            array(
                'meta_id' => 242,
                'post_id' => 82,
                'meta_key' => '_encloseme',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 243,
                'post_id' => 82,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 244,
                'post_id' => 83,
                'meta_key' => '_wp_attached_file',
                'meta_value' => '2016/03/3040d4c6-e729-3752-a39a-640baf1c2728.jpg',
            ),

            array(
                'meta_id' => 245,
                'post_id' => 83,
                'meta_key' => '_wp_attachment_metadata',
                'meta_value' => 'a:5:{s:5:\"width\";i:1241;s:6:\"height\";i:827;s:4:\"file\";s:48:\"2016/03/3040d4c6-e729-3752-a39a-640baf1c2728.jpg\";s:5:\"sizes\";a:5:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"3040d4c6-e729-3752-a39a-640baf1c2728-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"3040d4c6-e729-3752-a39a-640baf1c2728-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:48:\"3040d4c6-e729-3752-a39a-640baf1c2728-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:49:\"3040d4c6-e729-3752-a39a-640baf1c2728-1024x682.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:682;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:49:\"3040d4c6-e729-3752-a39a-640baf1c2728-1200x800.jpg\";s:5:\"width\";i:1200;s:6:\"height\";i:800;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}',
            ),

            array(
                'meta_id' => 246,
                'post_id' => 83,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 247,
                'post_id' => 82,
                'meta_key' => '_thumbnail_id',
                'meta_value' => 83,
            ),

            array(
                'meta_id' => 249,
                'post_id' => 84,
                'meta_key' => '_encloseme',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 250,
                'post_id' => 84,
                'meta_key' => 'fakerpress_flag',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 251,
                'post_id' => 1,
                'meta_key' => '_edit_last',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 253,
                'post_id' => 1,
                'meta_key' => '_encloseme',
                'meta_value' => 1,
            ),

            array(
                'meta_id' => 254,
                'post_id' => 31,
                'meta_key' => '_edit_lock',
                'meta_value' => '1459095806:1',
            ),

            array(
                'meta_id' => 256,
                'post_id' => 4,
                'meta_key' => '_encloseme',
                'meta_value' => 1,
            ),

        ));
        DB::table('lw_posts')->insert(array(
            
            array(
                'ID' => 1,
                'post_author' => 1,
                'post_date' => '2016-03-25 17:05:32',
                'post_date_gmt' => '2016-03-25 17:05:32',
                'post_content' => '<p><em>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</em></p>
',
                'post_title' => 'Hello world!',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'hello-world',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 10:52:57',
                'post_modified_gmt' => '2016-03-27 10:52:57',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://localhost:8000/?p=1',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 1,
            ),

            array(
                'ID' => 2,
                'post_author' => 1,
                'post_date' => '2016-03-25 17:05:32',
                'post_date_gmt' => '2016-03-25 17:05:32',
                'post_content' => 'This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:

<blockquote>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</blockquote>

...or something like this:

<blockquote>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</blockquote>

As a new WordPress user, you should go to <a href=\"http://localhost:8000/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!',
                'post_title' => 'Sample Page',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'closed',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'sample-page',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-25 17:05:32',
                'post_modified_gmt' => '2016-03-25 17:05:32',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://localhost:8000/?page_id=2',
                'menu_order' => 0,
                'post_type' => 'page',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 3,
                'post_author' => 1,
                'post_date' => '2016-03-25 17:06:56',
                'post_date_gmt' => '0000-00-00 00:00:00',
                'post_content' => NULL,
                'post_title' => 'Auto Draft',
                'post_excerpt' => NULL,
                'post_status' => 'auto-draft',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => NULL,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-25 17:06:56',
                'post_modified_gmt' => '0000-00-00 00:00:00',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://localhost:8000/?p=3',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 4,
                'post_author' => 1,
                'post_date' => '2016-03-25 17:17:24',
                'post_date_gmt' => '2016-03-25 17:17:24',
                'post_content' => '<p><em>We went down the lane, by the body of the man in black, sodden now from the overnight hail, and broke into the woods at the foot of the hill. We pushed through these towards the railway without meeting a soul.</em></p>

<ul>
<li>The woods across the line were but the scarred and blackened ruins of woods.</li>
<li>For the most part the trees had fallen, but a certain proportion still stood, dismal grey stems, with dark brown foliage instead of green.</li>
<li>On our side the fire had done no more than scorch the nearer trees; it had failed to secure its footing.</li>
</ul>

<pre><code class=\"php\">Route::group([\'middleware\' =&gt; [\'web\']], function () {

    Route::get(\'/\', function () {
        return view(\'frontpages.app\');
    });

    Route::get(\'/test\', function () {
        $posts = Post::type(\'post\')-&gt;published()-&gt;with(\'author\')-&gt;get();
//      dd($posts-&gt;toArray());
        return view(\'frontpages.test\', compact(\'posts\'));
    });

});
</code></pre>
',
                'post_title' => 'MUOTTAS MURAGL: SOME OF THE MOST BEAUTIFUL DAY HIKES IN EUROPE',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'muottas-muragl-some-of-the-most-beautiful-day-hikes-in-europe',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-28 01:16:00',
                'post_modified_gmt' => '2016-03-28 01:16:00',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://localhost:8000/?p=4',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 5,
                'post_author' => 1,
                'post_date' => '2016-03-25 17:17:10',
                'post_date_gmt' => '2016-03-25 17:17:10',
                'post_content' => '<hr />

We went down the lane, by the body of the man in black, sodden now from the overnight hail, and broke into the woods at the foot of the hill. We pushed through these towards the railway without meeting a soul.

<hr />

<ul>
	<li>The woods across the line were but the scarred and blackened ruins of woods.</li>
	<li>For the most part the trees had fallen, but a certain proportion still stood, dismal grey stems, with dark brown foliage instead of green.</li>
	<li>On our side the fire had done no more than scorch the nearer trees; it had failed to secure its footing.</li>
</ul>',
                'post_title' => 'MUOTTAS MURAGL: SOME OF THE MOST BEAUTIFUL DAY HIKES IN EUROPE',
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => '4-revision-v1',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-25 17:17:10',
                'post_modified_gmt' => '2016-03-25 17:17:10',
                'post_content_filtered' => NULL,
                'post_parent' => 4,
                'guid' => 'http://localhost:8000/?p=5',
                'menu_order' => 0,
                'post_type' => 'revision',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 6,
                'post_author' => 1,
                'post_date' => '2016-03-26 03:43:02',
                'post_date_gmt' => '2016-03-26 03:43:02',
                'post_content' => NULL,
                'post_title' => '10475592_732536416805094_6571953405072057842_n',
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => '10475592_732536416805094_6571953405072057842_n',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 03:43:02',
                'post_modified_gmt' => '2016-03-26 03:43:02',
                'post_content_filtered' => NULL,
                'post_parent' => 4,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/10475592_732536416805094_6571953405072057842_n.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 7,
                'post_author' => 1,
                'post_date' => '2016-03-27 06:57:08',
                'post_date_gmt' => '0000-00-00 00:00:00',
                'post_content' => NULL,
                'post_title' => 'Auto Draft',
                'post_excerpt' => NULL,
                'post_status' => 'auto-draft',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => NULL,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 06:57:08',
                'post_modified_gmt' => '0000-00-00 00:00:00',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=7',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 8,
                'post_author' => 1,
                'post_date' => '2016-03-27 06:59:04',
                'post_date_gmt' => '2016-03-27 06:59:04',
                'post_content' => '<code></code>',
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'trash',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 8,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 08:48:11',
                'post_modified_gmt' => '2016-03-27 08:48:11',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=8',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 9,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:12:10',
                'post_date_gmt' => '2016-03-27 09:12:10',
                'post_content' => '<ul>
<li>
<ul>
<li>*We went down the lane, by the body of the man in black, sodden now from the overnight hail, and broke into the woods at the foot of the hill. We pushed through these towards the railway without meeting a soul. </li>
</ul></li>
</ul>

<hr />

<ul>
<li>The woods across the line were but the scarred and blackened ruins of woods.</li>
<li>For the most part the trees had fallen, but a certain proportion still stood, dismal grey stems, with dark brown foliage instead of green.</li>
<li>On our side the fire had done no more than scorch the nearer trees; it had failed to secure its footing.</li>
</ul>

<pre><code class=\"php\">Route::group([\'middleware\' =&gt; [\'web\']], function () {

    Route::get(\'/\', function () {
        return view(\'frontpages.app\');
    });

    Route::get(\'/test\', function () {
        $posts = Post::type(\'post\')-&gt;published()-&gt;with(\'author\')-&gt;get();
//      dd($posts-&gt;toArray());
        return view(\'frontpages.test\', compact(\'posts\'));
    });

});
</code></pre>

<p>```</p>
',
                'post_title' => 'MUOTTAS MURAGL: SOME OF THE MOST BEAUTIFUL DAY HIKES IN EUROPE',
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => '4-autosave-v1',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:12:10',
                'post_modified_gmt' => '2016-03-27 09:12:10',
                'post_content_filtered' => NULL,
                'post_parent' => 4,
                'guid' => 'http://wlc.app/?p=9',
                'menu_order' => 0,
                'post_type' => 'revision',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 10,
                'post_author' => 1,
                'post_date' => '2016-03-27 07:15:06',
                'post_date_gmt' => '2016-03-27 07:15:06',
                'post_content' => '<hr />

We went down the lane, by the body of the man in black, sodden now from the overnight hail, and broke into the woods at the foot of the hill. We pushed through these towards the railway without meeting a soul.

<hr />

<ul>
	<li>The woods across the line were but the scarred and blackened ruins of woods.</li>
	<li>For the most part the trees had fallen, but a certain proportion still stood, dismal grey stems, with dark brown foliage instead of green.</li>
	<li>On our side the fire had done no more than scorch the nearer trees; it had failed to secure its footing.</li>
</ul>
<pre><code class=\"php\">Route::group([\'middleware\' =&gt; [\'web\']], function () {

    Route::get(\'/\', function () {
        return view(\'frontpages.app\');
    });

    Route::get(\'/test\', function () {
        $posts = Post::type(\'post\')-&gt;published()-&gt;with(\'author\')-&gt;get();
//        dd($posts-&gt;toArray());
        return view(\'frontpages.test\', compact(\'posts\'));
    });

});
</code></pre>',
                'post_title' => 'MUOTTAS MURAGL: SOME OF THE MOST BEAUTIFUL DAY HIKES IN EUROPE',
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => '4-revision-v1',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 07:15:06',
                'post_modified_gmt' => '2016-03-27 07:15:06',
                'post_content_filtered' => NULL,
                'post_parent' => 4,
                'guid' => 'http://wlc.app/?p=10',
                'menu_order' => 0,
                'post_type' => 'revision',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 11,
                'post_author' => 1,
                'post_date' => '2016-03-27 08:48:11',
                'post_date_gmt' => '2016-03-27 08:48:11',
                'post_content' => '<code></code>',
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => '8-revision-v1',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 08:48:11',
                'post_modified_gmt' => '2016-03-27 08:48:11',
                'post_content_filtered' => NULL,
                'post_parent' => 8,
                'guid' => 'http://wlc.app/?p=11',
                'menu_order' => 0,
                'post_type' => 'revision',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 12,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:04:28',
                'post_date_gmt' => '0000-00-00 00:00:00',
                'post_content' => NULL,
                'post_title' => 'Auto Draft',
                'post_excerpt' => NULL,
                'post_status' => 'auto-draft',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => NULL,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:04:28',
                'post_modified_gmt' => '0000-00-00 00:00:00',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=12',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 13,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:05:46',
                'post_date_gmt' => '0000-00-00 00:00:00',
                'post_content' => NULL,
                'post_title' => 'Auto Draft',
                'post_excerpt' => NULL,
                'post_status' => 'auto-draft',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => NULL,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:05:46',
                'post_modified_gmt' => '0000-00-00 00:00:00',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=13',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 14,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:05:51',
                'post_date_gmt' => '0000-00-00 00:00:00',
                'post_content' => NULL,
                'post_title' => 'Auto Draft',
                'post_excerpt' => NULL,
                'post_status' => 'auto-draft',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => NULL,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:05:51',
                'post_modified_gmt' => '0000-00-00 00:00:00',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=14',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 15,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:12:52',
                'post_date_gmt' => '2016-03-27 09:12:52',
                'post_content' => '<ul>
<li>
<ul>
<li>*We went down the lane, by the body of the man in black, sodden now from the overnight hail, and broke into the woods at the foot of the hill. We pushed through these towards the railway without meeting a soul. </li>
</ul></li>
</ul>

<hr />

<ul>
<li>The woods across the line were but the scarred and blackened ruins of woods.</li>
<li>For the most part the trees had fallen, but a certain proportion still stood, dismal grey stems, with dark brown foliage instead of green.</li>
<li>On our side the fire had done no more than scorch the nearer trees; it had failed to secure its footing.</li>
</ul>

<pre><code class=\"php\">Route::group([\'middleware\' =&gt; [\'web\']], function () {

    Route::get(\'/\', function () {
        return view(\'frontpages.app\');
    });

    Route::get(\'/test\', function () {
        $posts = Post::type(\'post\')-&gt;published()-&gt;with(\'author\')-&gt;get();
//      dd($posts-&gt;toArray());
        return view(\'frontpages.test\', compact(\'posts\'));
    });

});
</code></pre>
',
                'post_title' => 'MUOTTAS MURAGL: SOME OF THE MOST BEAUTIFUL DAY HIKES IN EUROPE',
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => '4-revision-v1',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:12:52',
                'post_modified_gmt' => '2016-03-27 09:12:52',
                'post_content_filtered' => NULL,
                'post_parent' => 4,
                'guid' => 'http://wlc.app/?p=15',
                'menu_order' => 0,
                'post_type' => 'revision',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 16,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:14:06',
                'post_date_gmt' => '2016-03-27 09:14:06',
                'post_content' => '<p>**<em>We went down the lane, by the body of the man in black, sodden now from the overnight hail, and broke into the woods at the foot of the hill. We pushed through these towards the railway without meeting a soul.</em> * *</p>

<ul>
<li>The woods across the line were but the scarred and blackened ruins of woods.</li>
<li>For the most part the trees had fallen, but a certain proportion still stood, dismal grey stems, with dark brown foliage instead of green.</li>
<li>On our side the fire had done no more than scorch the nearer trees; it had failed to secure its footing.</li>
</ul>

<pre><code class=\"php\">Route::group([\'middleware\' =&gt; [\'web\']], function () {

    Route::get(\'/\', function () {
        return view(\'frontpages.app\');
    });

    Route::get(\'/test\', function () {
        $posts = Post::type(\'post\')-&gt;published()-&gt;with(\'author\')-&gt;get();
//      dd($posts-&gt;toArray());
        return view(\'frontpages.test\', compact(\'posts\'));
    });

});
</code></pre>
',
                'post_title' => 'MUOTTAS MURAGL: SOME OF THE MOST BEAUTIFUL DAY HIKES IN EUROPE',
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => '4-revision-v1',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:14:06',
                'post_modified_gmt' => '2016-03-27 09:14:06',
                'post_content_filtered' => NULL,
                'post_parent' => 4,
                'guid' => 'http://wlc.app/?p=16',
                'menu_order' => 0,
                'post_type' => 'revision',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 17,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:14:46',
                'post_date_gmt' => '2016-03-27 09:14:46',
                'post_content' => '<p><em>We went down the lane, by the body of the man in black, sodden now from the overnight hail, and broke into the woods at the foot of the hill. We pushed through these towards the railway without meeting a soul.</em></p>

<ul>
<li>The woods across the line were but the scarred and blackened ruins of woods.</li>
<li>For the most part the trees had fallen, but a certain proportion still stood, dismal grey stems, with dark brown foliage instead of green.</li>
<li>On our side the fire had done no more than scorch the nearer trees; it had failed to secure its footing.</li>
</ul>

<pre><code class=\"php\">Route::group([\'middleware\' =&gt; [\'web\']], function () {

    Route::get(\'/\', function () {
        return view(\'frontpages.app\');
    });

    Route::get(\'/test\', function () {
        $posts = Post::type(\'post\')-&gt;published()-&gt;with(\'author\')-&gt;get();
//      dd($posts-&gt;toArray());
        return view(\'frontpages.test\', compact(\'posts\'));
    });

});
</code></pre>
',
                'post_title' => 'MUOTTAS MURAGL: SOME OF THE MOST BEAUTIFUL DAY HIKES IN EUROPE',
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => '4-revision-v1',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:14:46',
                'post_modified_gmt' => '2016-03-27 09:14:46',
                'post_content_filtered' => NULL,
                'post_parent' => 4,
                'guid' => 'http://wlc.app/?p=17',
                'menu_order' => 0,
                'post_type' => 'revision',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 18,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:00',
                'post_date_gmt' => '2016-03-27 09:23:00',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 18,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:00',
                'post_modified_gmt' => '2016-03-27 09:23:00',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/986cb295-c048-3f96-b7b1-8fe18a56cf70.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 19,
                'post_author' => 1,
                'post_date' => '2016-03-26 14:06:42',
                'post_date_gmt' => '2016-03-26 14:06:42',
                'post_content' => '<h4>Eligendi numquam dignissimos exercitationem et consequatur labore</h4>

<blockquote>Sint animi aut soluta ea rem. Eius dolores non vero repellat numquam. Nisi provident vel sunt. Quod vel ipsa qui totam. Corporis qui voluptatem modi repellendus inventore alias. Saepe dolorum numquam iusto iusto quasi dolor. Deserunt sit dolorem cum autem. Sint dolorem est vitae voluptatem non quia. Nihil natus est qui maiores. Rerum animi et sunt dolor omnis. In est excepturi aut sunt. Animi ullam natus doloremque expedita ea. Ea maiores doloribus sint nobis ducimus neque. Omnis sed dicta libero voluptatem consequatur fuga illo. Perspiciatis cupiditate consectetur assumenda rem iusto voluptatem et. Aut aut non reprehenderit. Est occaecati libero doloribus qui odio et.</blockquote>

<p><img alt=\"Vero et iure at optio eos quo\" src=\"http://wlc.app/wp-content/uploads/2016/03/986cb295-c048-3f96-b7b1-8fe18a56cf70.jpg\"></p>

<h6>Et vitae occaecati consequatur sunt minus quae distinctio</h6>

<ul><li>Similique voluptate doloremque provident quidem</li><li>Deleniti aliquam est excepturi quae</li><li>Sunt consequatur</li><li>Fuga ipsa pariatur est ratione</li><li>Ab architecto vitae sunt amet</li></ul>

<h1>Et quia voluptates qui consequatur officiis quod. Fugiat eum corporis quaerat mollitia eos</h1>

<!--more-->

<ul><li>Voluptatum dolores molestias unde nihil</li><li>Iste est quis maxime illo consequatur iure</li><li>Sed sunt aut ea</li></ul>

<h1>Quibusdam assumenda dolores iure omnis vitae est et praesentium</h1>

<p>Ratione doloremque et perferendis. Dolorum ut magnam at qui accusamus. Voluptatem dolorum ab consectetur sint. <a title=\"Ut et sit dolor.\" href=\"http://gerhold.com/facere-ea-ipsum-id-quod-voluptatum.html\">facilis</a> et aut qui. Voluptatibus non <a title=\"Omnis vero.\" href=\"http://www.jacobi.com/occaecati-sunt-ipsum-tenetur-quia\">est provident. Perferendis nisi</a> ut iusto. necessitatibus blanditiis quis quo. Fugit dolorem ut et. Ea in soluta. Ex rem sed ut ipsum. Reprehenderit eligendi itaque ut consequatur Non omnis est optio sunt nisi. Autem <a title=\"Quidem rem.\" href=\"http://howe.biz/quibusdam-voluptatem-aut-vel-qui\">eveniet totam veritatis</a> Possimus non impedit soluta unde <a title=\"Officiis aspernatur.\" href=\"http://monahan.com/omnis-eos-non-aut-fuga-enim-odio-tempore.html\">Ullam animi</a> pariatur possimus. Ut quia alias laboriosam dicta sed eveniet. Ab porro necessitatibus repellendus exercitationem <a title=\"Qui similique.\" href=\"http://www.keebler.biz/sequi-cum-quo-excepturi-molestiae\">Dolores velit ullam optio</a> odio perspiciatis. Quos facere perferendis non. non labore aspernatur quia. facere recusandae vel facilis dolores tempora.</p>

<hr>

<ul><li>Est perferendis non molestiae non sit qui</li><li>Consectetur a sunt sed consequuntur quam et</li><li>Et ullam dolor</li><li>Sunt</li></ul>
',
                'post_title' => 'Ea illo aut ducimus sunt odio illo',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 'ea-illo-aut-ducimus-sunt-odio-illo',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 14:06:42',
                'post_modified_gmt' => '2016-03-26 14:06:42',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=19',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 20,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:05',
                'post_date_gmt' => '2016-03-27 09:23:05',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 20,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:05',
                'post_modified_gmt' => '2016-03-27 09:23:05',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/75dbe40e-1b97-3285-b36a-4e218883552a.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 21,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:09',
                'post_date_gmt' => '2016-03-27 09:23:09',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 21,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:09',
                'post_modified_gmt' => '2016-03-27 09:23:09',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/fd1ddf04-c5b2-30dd-936f-e8b601139770.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 22,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:11',
                'post_date_gmt' => '2016-03-27 09:23:11',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 22,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:11',
                'post_modified_gmt' => '2016-03-27 09:23:11',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/a2bf059b-d5ce-37c3-b2b4-c9505cb918cc.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 23,
                'post_author' => 1,
                'post_date' => '2016-03-26 04:11:46',
                'post_date_gmt' => '2016-03-26 04:11:46',
                'post_content' => '<p><img src=\"http://wlc.app/wp-content/uploads/2016/03/75dbe40e-1b97-3285-b36a-4e218883552a.jpg\">
<img alt=\"Officiis\" src=\"http://wlc.app/wp-content/uploads/2016/03/fd1ddf04-c5b2-30dd-936f-e8b601139770.jpg\"></p>

<p><a title=\"Ipsa voluptas et natus.\" href=\"http://doyle.com/itaque-porro-neque-omnis-sed-dolores-est-quisquam\">Nihil</a> est officiis perferendis quae veniam nulla. suscipit perferendis quo <a title=\"Quidem non est.\" href=\"http://www.wolf.com/sint-aut-exercitationem-voluptatem-quis-amet\">Velit sunt nihil quo</a> quia. Quasi sed <a title=\"Suscipit dolor.\" href=\"http://www.yost.com/sunt-deserunt-alias-et-rem-eligendi-laudantium\">dignissimos temporibus sit</a> Nihil praesentium magnam eius Sed saepe eos quam unde dolorem. Tenetur repellat <a title=\"Unde dolorum quos quidem.\" href=\"http://corwin.com/\">ratione eum reiciendis.</a> alias aut ullam consectetur veniam Officiis cupiditate vel quisquam <a title=\"Consequatur voluptates.\" href=\"https://www.rolfson.com/aliquam-culpa-veniam-et-dicta-aliquam\">occaecati inventore. Tenetur</a> <a title=\"Est.\" href=\"http://mohr.com/quam-iure-culpa-veritatis-ratione\">fugit reiciendis recusandae</a> magnam Quia quas consequatur dolorum. Nesciunt exercitationem ducimus et ducimus amet. unde dolorum quia ducimus. Alias explicabo laudantium consequuntur a et.</p>

<ol><li>Voluptatem dicta dolorem eveniet</li><li>Vel nihil qui eaque pariatur</li><li>Atque aut laborum</li><li>Quisquam omnis tenetur nisi est</li><li>Iste debitis asperiores</li></ol>

<h6>Quae voluptas et enim est aliquam rerum. Nemo quidem libero occaecati enim sapiente explicabo pariatur voluptatum. Saepe id sit enim reiciendis perspiciatis nisi</h6>

<!--more-->

<ul><li>Quod ipsum</li><li>Aut odit aut quia vero</li></ul>

<h3>Aut beatae qui quis dolor omnis dolorem minus</h3>

<p><img alt=\"Dolores nostrum quis ut autem asperiores at rerum dignissimos est et\" src=\"http://wlc.app/wp-content/uploads/2016/03/fd1ddf04-c5b2-30dd-936f-e8b601139770.jpg\"></p>

<h4>In quo et delectus id maiores et quo harum. Facilis illo dolorum laudantium et molestiae ducimus occaecati. Natus a vel dolore iure non commodi voluptatem. Ut dolore deleniti aut nemo quo sapiente</h4>

<hr>

<h1>Cum sit sapiente odio itaque quod quisquam doloremque enim</h1>

<ul><li>Id debitis debitis non atque</li><li>Numquam tempore rerum ratione</li><li>Ullam eligendi aut eveniet quis minus</li><li>Qui tempore modi minus</li></ul>

<h1>Dolorem voluptatem totam iusto delectus repellendus</h1>

<p><img class=\"aligncenter\" alt=\"Ut eos maiores in amet eaque\" src=\"http://wlc.app/wp-content/uploads/2016/03/a2bf059b-d5ce-37c3-b2b4-c9505cb918cc.jpg\"></p>
',
                'post_title' => 'Doloribus totam earum possimus facilis voluptate',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 'doloribus-totam-earum-possimus-facilis-voluptate',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 04:11:46',
                'post_modified_gmt' => '2016-03-26 04:11:46',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=23',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 24,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:12',
                'post_date_gmt' => '2016-03-27 09:23:12',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 24,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:12',
                'post_modified_gmt' => '2016-03-27 09:23:12',
                'post_content_filtered' => NULL,
                'post_parent' => 23,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/0013b37f-3a99-3e5f-aee8-e6f4c5fd7098.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 25,
                'post_author' => 1,
                'post_date' => '2016-03-26 08:39:18',
                'post_date_gmt' => '2016-03-26 08:39:18',
                'post_content' => '<h2>Fugiat dolores voluptas omnis omnis qui. Est quo quia ex ullam et rem. Repellat maiores aut iste</h2>

<p>Ut soluta blanditiis sed sint officiis fugiat. recusandae <a title=\"Et perferendis nihil.\" href=\"https://altenwerth.com/non-est-eos-ipsa-rerum-reprehenderit-rerum-beatae.html\">est</a> <a title=\"Alias dolor illum pariatur exercitationem omnis.\" href=\"http://www.kessler.com/ab-impedit-veritatis-corporis-eligendi-esse-sed.html\">soluta placeat</a> provident. <a title=\"Quidem.\" href=\"http://schinner.biz/\">nulla optio quae veniam</a> Laborum necessitatibus labore atque ut.</p>

<h2>Autem qui quos cum atque officia. Minus omnis ad quasi occaecati voluptatem. Quas fuga fugiat quas molestiae ea provident. Veritatis dolores autem sint hic dolor</h2>

<p>Ut omnis omnis aut fugiat delectus. Non odit repudiandae ad sit inventore minus et quis. Rem ad optio ut. Debitis ea sint qui fuga cumque libero animi. Et dolor vel dolor dolores nobis. Voluptas quisquam mollitia perspiciatis rerum ad explicabo debitis. Id odit dolorem est sapiente.</p>

<h5>Fuga dolorem autem molestiae nesciunt at totam aut. Consequatur rerum nam numquam laboriosam non. Fugit quis maiores enim maiores</h5>

<p><a title=\"Placeat dolor voluptatem.\" href=\"http://www.sipes.com/\">Et porro est et</a> explicabo provident. Aut expedita soluta dolores Sed eius eveniet deserunt quam. Et iste voluptatem sequi. In ut reprehenderit quos. Blanditiis corrupti voluptatem rerum quo corrupti <a title=\"Alias quisquam explicabo qui veritatis repellendus possimus.\" href=\"http://lynch.org/\">Sint ut iste inventore voluptate</a> fugit. sit vel cupiditate qui voluptas est. quas ex laborum <a title=\"Qui excepturi et.\" href=\"https://www.kassulke.com/rerum-aut-dolor-et-eos-nostrum\">reiciendis.</a> qui non consectetur adipisci. Consequatur sapiente eos voluptatem non vitae et. <a title=\"Temporibus nam.\" href=\"https://www.mayer.biz/harum-qui-est-ipsam-omnis-modi-nemo-nobis-veniam\">voluptas aut iusto.</a> accusamus voluptatem illum a Sit et ea Quo optio magni accusantium facere dolores. Placeat aut corrupti cumque quos corporis necessitatibus rem. Suscipit vitae <a title=\"Consequatur impedit repudiandae reiciendis.\" href=\"https://macejkovic.net/consectetur-aut-aut-aut-ut-quas-rerum.html\">illum aliquid quis</a> Dignissimos eius illo rerum beatae dolorum enim.</p>

<h1>Omnis vero libero sunt ut. Possimus rem nesciunt facere similique</h1>

<blockquote>Sit culpa fugiat voluptate aperiam dolor commodi. Perferendis sit deserunt eveniet. Iste voluptatem ab ut nobis illum quia et. Et totam magnam quia odio architecto sit sed. Necessitatibus animi perspiciatis tenetur sit minus fuga. Et eaque fugit rerum qui quisquam eum in. Nihil neque ut est est aut debitis enim. Aut modi temporibus quo iste ipsa. Possimus eum cupiditate et vel facere numquam ducimus in. Tempora aut esse temporibus quos quia. Officia omnis magnam quidem et praesentium ut vitae. Hic et natus dolore assumenda delectus a officia. Sequi nihil saepe non cum beatae. Voluptas in ut maiores voluptatibus consequatur voluptatem earum. Pariatur velit hic et labore. Eligendi ratione est nihil est eligendi modi. Impedit eum voluptatum aliquid quis. Voluptas provident quaerat et commodi aut quisquam hic. Ex nesciunt modi ut. Eligendi asperiores quas aut temporibus possimus quia quia.</blockquote>

<h3>Et labore in deleniti vel in a magnam. Sint incidunt velit aut eos a</h3>

<!--more-->

<blockquote>Ea non dolore et tempora natus sapiente quo. Quia reprehenderit ut et sint illum consequatur. Asperiores in voluptatibus quibusdam molestiae aspernatur. Sequi doloribus et voluptas veritatis itaque enim est.</blockquote>

<h1>Fugit doloremque aspernatur sed. Rerum eveniet ea est fuga. Error iste sint debitis occaecati et sit dicta. Doloribus et id similique rerum</h1>

<ul><li>Dolorem velit et quia corrupti et</li><li>Qui iusto earum porro ut</li><li>Culpa rerum voluptas aut in animi</li><li>Voluptates est voluptatum id</li><li>Minima aspernatur</li><li>Est</li><li>Magnam in minus quo</li><li>Consequatur veritatis modi et rerum</li><li>Repellendus quas dolor in tempore</li><li>Sit voluptatem</li></ul>

<hr>

<h1>Omnis distinctio sit architecto sed aut dolor sunt. Delectus id quam consequuntur illo. Alias explicabo nihil numquam repellendus dolorem voluptas</h1>

<p>Dolor distinctio non sit necessitatibus adipisci necessitatibus aut. Dignissimos et aperiam non quibusdam quidem. Quam tenetur ut officia sit odit cupiditate sit. Qui nulla aut rem nihil rerum ad. Nemo quae sequi id temporibus tempore laborum. Molestias et consequuntur beatae animi. Exercitationem quis eum possimus veniam tenetur magni qui. Et voluptatem nemo nobis omnis error laboriosam eligendi. Ut cumque vel quo ea ut ea iure. Beatae unde dolor voluptatem alias ullam. Sunt qui et omnis natus reprehenderit dignissimos in eligendi. Dolore sunt quis commodi. Et veniam est fuga. Corporis et rerum temporibus est odio tempore. Aliquam ipsum ab sed voluptatem asperiores. Quo molestias nihil et qui voluptatum. Quisquam enim enim optio veniam ut et sit. Exercitationem accusantium corrupti a veniam pariatur et. Fugiat eaque quidem dolor eos quasi necessitatibus. Excepturi iusto fugiat voluptatem perferendis nihil.</p>

<h2>Adipisci molestias et vero et</h2>

<hr>

<hr>

<h3>Earum aut quod commodi eum ut nihil est. Labore ex accusamus provident omnis enim non</h3>

<hr>
',
                'post_title' => 'Magni corrupti dolore veritatis blanditiis vel',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'magni-corrupti-dolore-veritatis-blanditiis-vel',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 08:39:18',
                'post_modified_gmt' => '2016-03-26 08:39:18',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=25',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 26,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:14',
                'post_date_gmt' => '2016-03-27 09:23:14',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 26,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:14',
                'post_modified_gmt' => '2016-03-27 09:23:14',
                'post_content_filtered' => NULL,
                'post_parent' => 25,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/b381be8b-8d26-3fb0-8ff3-df54f0a4a7ba.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 27,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:17',
                'post_date_gmt' => '2016-03-27 09:23:17',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 27,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:17',
                'post_modified_gmt' => '2016-03-27 09:23:17',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/10cdc354-aaae-309b-b50a-b71d853dc14e.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 28,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:21',
                'post_date_gmt' => '2016-03-27 09:23:21',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 28,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:21',
                'post_modified_gmt' => '2016-03-27 09:23:21',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/faf67317-d70d-3bf6-b370-f9ae85131759.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 29,
                'post_author' => 1,
                'post_date' => '2016-03-26 10:45:08',
                'post_date_gmt' => '2016-03-26 10:45:08',
                'post_content' => '<p><img class=\"alignright\" alt=\"Dicta suscipit ipsum perferendis laborum rerum recusandae ipsum totam error aliquid\" src=\"http://wlc.app/wp-content/uploads/2016/03/10cdc354-aaae-309b-b50a-b71d853dc14e.jpg\"></p>

<hr>

<h6>In quisquam quia sunt. Impedit voluptatem sit veniam fuga repudiandae delectus nesciunt. Accusantium nam omnis veniam debitis</h6>

<ol><li>Officia a ipsa doloribus</li><li>Nam porro quo quis est et dolor</li></ol>

<!--more-->

<p>Non laudantium cumque voluptas rem. Omnis minus <a title=\"Dignissimos eligendi voluptas similique et atque rerum et.\" href=\"http://www.morar.com/\">facere cupiditate voluptas.</a> non occaecati <a title=\"Sed amet deleniti dignissimos.\" href=\"http://www.greenholt.com/eum-voluptas-quae-similique-deleniti-sed-autem-quo-tenetur.html\">quasi</a> quasi Et consequatur earum eum nesciunt. Maxime et voluptatum error tenetur. Occaecati a quis Totam sit labore magni ut voluptatem sunt. voluptas consequuntur rerum eius dolores facilis <a title=\"Et dignissimos quos corporis.\" href=\"http://hayes.net/cum-aut-aut-saepe-sit-eligendi\">Et qui enim sint</a> ea voluptas. Quibusdam impedit sunt dolorum dolorum <a title=\"Molestiae cumque adipisci qui.\" href=\"http://www.goyette.com/\">Voluptas autem quisquam eum consequatur</a> eligendi ipsum. Aliquid debitis sint et aut. dolor et. Quis quia et est et nemo. Eum harum dolorum ipsum sit Qui non ut dolore porro Repudiandae voluptatem ut <a title=\"Qui est.\" href=\"http://www.mccullough.com/quia-ut-qui-debitis-facilis-totam-natus-ullam-earum.html\"><a title=\"Maxime consectetur animi.\" href=\"http://www.bergstrom.com/aspernatur-suscipit-illo-commodi-dolores-aut-qui-architecto-et\">iste. Consequatur</a></a> temporibus quidem quasi est. Omnis nihil dicta eos in omnis. Non consectetur quisquam nihil Vero fuga quo excepturi Provident beatae occaecati eligendi id qui. Ducimus consequatur <a title=\"Sequi nisi.\" href=\"http://www.bahringer.biz/\">laudantium. Dolor</a> aut est nisi architecto quia Non numquam dolores ipsam iure fugiat. Delectus officiis dicta mollitia debitis perspiciatis facere.</p>

<h3>Laudantium tempore aliquam eos. Voluptatum earum tenetur itaque ipsum excepturi qui et</h3>

<p>Soluta quod minus dolore. Non repudiandae <a title=\"Laudantium non accusamus id exercitationem.\" href=\"http://walker.info/ut-dolores-necessitatibus-omnis-ducimus.html\">placeat. Qui quis eaque</a> similique et error pariatur Sunt ipsum et qui Quaerat officiis aliquam est et. Nesciunt <a title=\"Deleniti ut.\" href=\"http://wunsch.net/reprehenderit-dignissimos-cumque-harum.html\">et dolorem hic. Soluta cumque iusto expedita accusantium</a> laborum non <a title=\"Omnis dolore est.\" href=\"http://www.auer.com/\">Aut officia error</a> id ut. Unde non praesentium. quis <a title=\"Voluptas non.\" href=\"http://www.stiedemann.com/vel-sint-vitae-tempora-iste-ut-in.html\">quaerat repudiandae non esse. Rerum eos</a> quia magni ut. Voluptatibus ipsum maiores rerum nihil.</p>

<blockquote>Eius est <a title=\"Quos ducimus.\" href=\"http://sporer.com/asperiores-porro-esse-et-reprehenderit-neque-veniam-cupiditate\">consectetur et consequatur ratione ab.</a> officiis dolor vitae ad dolorem deserunt deserunt. Est tempora enim suscipit architecto dolorum velit. quia magnam reiciendis aperiam. Laudantium quisquam <a title=\"Harum facere voluptatem quis libero et.\" href=\"http://jacobson.info/cum-similique-natus-architecto-aliquid-minima-expedita\">optio aut laudantium quia voluptas.</a> impedit dolor itaque voluptatum aut sit rem. dolorum voluptatem architecto nihil aut quas. Voluptatem <a title=\"At.\" href=\"http://terry.biz/quos-omnis-nam-nesciunt-doloribus-et.html\">laboriosam corrupti sed. Molestiae alias dolorum ab</a> Molestiae consequatur ipsa sed velit dolores. assumenda vero Possimus consequatur et sit incidunt <a title=\"Rerum.\" href=\"http://www.keebler.com/doloribus-quisquam-voluptatem-qui-neque\">sequi aut. Repellendus</a> qui itaque sequi autem ipsa deleniti. Ipsam sint pariatur. Laborum in quo voluptate cum perspiciatis sed. Tempore voluptatem neque et <a title=\"Sed quia.\" href=\"http://mayer.com/accusamus-et-sed-cumque-earum-similique-et\">voluptate</a> non. Voluptas accusantium vero eveniet ea neque. <a title=\"Veniam aut iure eos corporis deleniti enim sit.\" href=\"https://www.bogisich.com/ullam-incidunt-qui-beatae-quia\">perferendis est ex deleniti fugit.</a> eos quas iste quidem fuga. Quis rerum cum est Fugiat totam omnis consequatur ut <a title=\"Nam odio quaerat.\" href=\"http://www.veum.biz/et-quia-aut-exercitationem-laboriosam\">in. Asperiores voluptates odit</a> Sequi magni ut sequi quia quas Impedit ex ut sed. adipisci nulla est Sapiente aspernatur officiis fugiat voluptas ad delectus. voluptas quia aliquam <a title=\"Omnis rerum consequatur odio dolorem illum deserunt qui.\" href=\"http://batz.com/iure-harum-sed-qui-nostrum-perferendis.html\">corrupti. Temporibus animi</a> <a title=\"Et id suscipit.\" href=\"http://www.rath.net/animi-quia-quis-porro.html\">numquam et iure. Delectus maiores cumque repudiandae</a> beatae. Magnam sit vel aperiam odit Consequatur voluptatibus quia praesentium fugit suscipit. Accusamus commodi qui reprehenderit voluptas doloremque officia aut. Officia qui suscipit quia placeat. mollitia ut animi mollitia placeat facilis et. Tempore libero voluptas sapiente quod minima. Ipsa nostrum id totam.</blockquote>

<ol><li>Cum a hic ex alias laboriosam aliquid molestias ipsa</li><li>Commodi est nisi dolorum</li><li>A quo quibusdam saepe eaque quos vero</li><li>Nisi sit</li></ol>

<h1>Accusamus autem non iure velit aspernatur. Non sapiente ut expedita quaerat eligendi inventore. Adipisci ut est necessitatibus ad. Quasi rem mollitia et ea</h1>

<p>Aperiam possimus <a title=\"Consectetur et.\" href=\"http://white.net/non-itaque-iure-assumenda\">ipsam eligendi</a> qui. A atque incidunt vel <a title=\"Commodi laudantium quo harum.\" href=\"http://crist.com/\">et</a> Ipsa ab repellendus labore distinctio sunt. Illum maxime dolorem dolorem sed omnis quo. cumque asperiores sed eligendi. Explicabo laboriosam atque labore <a title=\"Similique fuga at voluptate omnis unde.\" href=\"http://hermann.com/est-harum-nam-rerum-modi\">et</a> Nihil <a title=\"Aut omnis.\" href=\"https://murazik.net/cumque-accusantium-adipisci-explicabo-ullam-ad.html\">voluptatum quia. Et qui corrupti odit</a> qui error et. adipisci nihil magni ut qui enim. Sequi enim sapiente maiores nemo soluta repudiandae.</p>

<p><img alt=\"Et maxime eligendi numquam voluptatum\" src=\"http://wlc.app/wp-content/uploads/2016/03/faf67317-d70d-3bf6-b370-f9ae85131759.jpg\"></p>

<h3>Consequatur temporibus non adipisci ipsam nemo qui iure reprehenderit</h3>

<hr>
',
                'post_title' => 'Vel omnis voluptatem nostrum sed saepe',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 'vel-omnis-voluptatem-nostrum-sed-saepe',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 10:45:08',
                'post_modified_gmt' => '2016-03-26 10:45:08',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=29',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 30,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:22',
                'post_date_gmt' => '2016-03-27 09:23:22',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 30,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:22',
                'post_modified_gmt' => '2016-03-27 09:23:22',
                'post_content_filtered' => NULL,
                'post_parent' => 29,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/488daca9-9ec5-33ce-9f30-d0b4aa2a4c1c.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 31,
                'post_author' => 1,
                'post_date' => '2016-03-26 21:55:03',
                'post_date_gmt' => '2016-03-26 21:55:03',
                'post_content' => '<h5>Deserunt nisi distinctio repellat fugit ut dolor modi. Quos autem iusto repellat dignissimos</h5>

<ul><li>Amet minus in quo</li><li>Dolorum et voluptatem est</li><li>Alias doloribus</li></ul>

<p><a title=\"Aspernatur.\" href=\"http://www.langosh.biz/\">Maxime beatae</a> sed voluptatem corporis Non <a title=\"Sed error accusamus.\" href=\"http://jacobs.org/maxime-pariatur-cumque-aut-nobis-eaque-temporibus-rerum\">magni</a> tempora. pariatur nam impedit <a title=\"Facere quia officia vero.\" href=\"http://www.runolfsson.com/quis-esse-ut-hic-impedit-numquam\">Perferendis necessitatibus iusto veniam est mollitia</a> quaerat. Quos eum quas ratione. Vitae dolores eaque nemo <a title=\"Dolores sed.\" href=\"https://www.hilll.biz/dolorem-delectus-itaque-ut-qui-beatae-error-temporibus\">sit alias. Vel illum est quo molestiae</a> aliquam Incidunt necessitatibus ut enim sit.</p>

<h2>Velit minima repellat inventore adipisci ipsum officia sed. Quia tenetur et ullam eum praesentium deleniti eos</h2>

<blockquote>Quibusdam cum ut inventore placeat voluptas. qui voluptatem eaque. Dolorum numquam et minima Et rerum minima iusto aspernatur corrupti. Et eum nobis <a title=\"Nihil et quia est.\" href=\"http://www.schultz.biz/eum-incidunt-voluptas-quia-libero-velit\">Reiciendis aut</a> sit fugiat et odio. Eligendi accusamus sequi suscipit ad Quo <a title=\"Assumenda sed pariatur pariatur.\" href=\"http://mcdermott.com/animi-deleniti-vero-aut-ducimus-sit\">dignissimos</a> nemo omnis ullam. Recusandae aliquam nostrum enim magnam Et provident aut ut qui eius nobis Praesentium enim asperiores sit. quaerat quidem qui repudiandae. itaque voluptatem doloremque iste ratione. Et modi ut iusto corrupti dolorem. Dicta ipsam quia cum enim. enim enim aut aut. Officiis iusto velit dolores aliquid. Perferendis et enim aut tempora. Id eveniet voluptate illum. Deserunt et quo <a title=\"Itaque laboriosam autem ipsa.\" href=\"http://nicolas.info/eveniet-possimus-ut-voluptate-autem-ex-optio-delectus-inventore.html\">Tempora officia nesciunt</a> amet. Perspiciatis in facere deserunt accusantium. Nesciunt enim qui fugiat. Modi accusantium similique quos aperiam. optio sit aut quo sed deserunt. reiciendis aliquam et delectus occaecati Repudiandae nesciunt sint laudantium Id nam <a title=\"Suscipit totam.\" href=\"http://greenfelder.info/non-delectus-sed-quae-placeat-odit-qui.html\">quo ad nihil iste. Error eaque</a> ut atque voluptates omnis.</blockquote>

<ol><li>Illo quas aut aspernatur non repellat ut</li><li>Molestiae enim rerum ipsam</li><li>Similique sint</li></ol>

<!--more-->

<h6>Qui qui iusto numquam quia. Impedit et aut non id neque amet sapiente. Et eos aliquid facilis eum ut. Quidem voluptas nemo non in cum</h6>

<hr>

<h2>Illum sint voluptate fuga sit reprehenderit consequatur culpa aut</h2>

<hr>

<h5>Aut ex laudantium enim ex veritatis libero. Suscipit hic provident est dolor nisi adipisci reprehenderit</h5>

<p>Perspiciatis vitae nihil est fugit a voluptas. Quos praesentium sed Delectus minima ut laudantium voluptatibus magnam et minima. Eius aut aliquid consequatur. Et <a title=\"Fuga corporis hic consequatur ratione.\" href=\"http://hoeger.com/eaque-sint-accusamus-eos-eum-reprehenderit\">ad dolorem</a> Ducimus sunt et est et est. at non voluptas omnis <a title=\"Eos sit ad.\" href=\"http://www.ohara.com/odio-ut-minima-aperiam\">Molestiae autem est sapiente omnis ipsa. Rerum</a> consequatur voluptatem repudiandae commodi nisi minima hic. Ea itaque cupiditate non vel Velit aut molestiae Officiis iusto rerum molestiae. Veritatis dolor corrupti consectetur. Est est architecto natus molestiae Dolores tenetur libero Ipsum illo sit iste quo molestias. Et labore cumque laborum aliquam. Perferendis minus consectetur suscipit et Quasi ut odit nesciunt nisi ut. officia animi sunt fugiat. voluptatem <a title=\"Vel.\" href=\"https://mclaughlin.org/quis-repellat-earum-tempore-aut-voluptatem.html\">rerum</a> eveniet magnam. Facere saepe distinctio tempora cupiditate sit Enim fugit tempore cupiditate.</p>
',
                'post_title' => 'Cum non ipsa voluptatem eum dolor repellat',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'cum-non-ipsa-voluptatem-eum-dolor-repellat',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 21:55:03',
                'post_modified_gmt' => '2016-03-26 21:55:03',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=31',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 32,
                'post_author' => 1,
                'post_date' => '2016-03-26 00:42:00',
                'post_date_gmt' => '2016-03-26 00:42:00',
                'post_content' => '<ol><li>Harum illum quo</li><li>Qui cum nisi veniam autem est</li><li>Voluptate est soluta dolorem quos</li><li>Sint dolor</li></ol>

<ol><li>Consectetur</li><li>Ex incidunt sed sed earum</li><li>Dicta consequatur alias libero dolorum ex suscipit sit</li></ol>

<h1>Rerum hic quisquam accusamus facilis et reiciendis adipisci. Eveniet odio consequatur aut magnam</h1>

<p>Non sint harum natus impedit occaecati. Assumenda error ratione repellat exercitationem non et repudiandae. At hic voluptatem dolorem perferendis veniam aspernatur et et. Libero facilis error minima eos. Et consectetur aut necessitatibus sunt. Eum nihil dignissimos asperiores velit asperiores ipsum itaque. Praesentium officiis earum autem ut asperiores in eos. Voluptas sit laborum quas impedit non rerum doloremque. Sed qui corporis qui et. Numquam iure perspiciatis at. Eum dolorem hic blanditiis magnam eligendi. Aut quia ducimus quo fugiat quia distinctio aliquid. Fugiat repudiandae pariatur facere minus ipsa.</p>

<h6>Et placeat voluptatem quisquam qui. Maiores et voluptatibus et laudantium. Modi natus aliquam cum</h6>

<blockquote>Sit adipisci ipsum temporibus. Rem et id voluptates. unde sunt omnis consequatur quibusdam Aperiam animi occaecati Dolor saepe reprehenderit illum accusantium aut sed ut. eius quod necessitatibus voluptate esse qui aut. aut porro molestiae ab. Qui rerum minus et ratione. Necessitatibus quia earum Totam eos eius distinctio quis perferendis dolor minus. voluptatum sed nulla est vero Pariatur laborum laboriosam porro dolorum Laudantium harum alias qui. non aperiam vitae sed. Qui molestias eos ut labore Sequi sint animi voluptatibus doloremque odio Placeat animi <a title=\"Sapiente quidem non ut adipisci accusantium.\" href=\"https://abernathy.com/illum-reiciendis-consequatur-aut-eum-quos.html\">eos</a> et perferendis doloribus dolores. Ullam vitae cumque eum consequatur sint Recusandae dolor rerum sint reprehenderit sapiente et. Illum velit quia sint officiis. Explicabo tenetur odit et Quas corporis porro et. Numquam est ducimus odit repellendus aut ut Eum laborum quia vitae corporis consequuntur consectetur. Odit facere dolores est. Autem similique quas suscipit omnis rerum tempora nihil. Culpa quas repudiandae eum enim minus esse. Vitae et nobis a esse. Quaerat molestiae delectus sint Qui nihil qui quia Provident reprehenderit vel occaecati.</blockquote>

<h2>Unde fugit magnam ut aut est. Ea consequuntur laudantium sed repellat. Nisi qui iure autem commodi et</h2>

<ul><li>Libero nostrum in placeat mollitia vel nam</li><li>Rerum ullam cupiditate ut</li><li>Autem</li></ul>

<hr>

<h4>Aut autem nam in ut tempora dolores est. Voluptatum eum harum quas officiis</h4>

<ol><li>Odio in aut corporis</li><li>Dolor nihil</li><li>Enim ut quaerat optio veniam voluptate</li><li>Et ut ab eos omnis</li><li>Eos facilis recusandae sequi non a</li><li>Et natus id a perferendis dolor</li><li>Et fugiat veniam error cum aut</li><li>Hic et delectus quo eum</li></ol>

<p><img class=\"aligncenter\" alt=\"Autem consequuntur sint voluptas totam\" src=\"http://wlc.app/wp-content/uploads/2016/03/75dbe40e-1b97-3285-b36a-4e218883552a.jpg\">
<!--more--></p>

<h1>Quia adipisci id velit soluta incidunt voluptas a</h1>

<ul><li>Sit</li><li>Quo porro rerum et</li><li>Et eos in omnis voluptatem</li><li>Repellat aut totam dolorum</li><li>Sunt illo</li></ul>

<p>Facilis voluptatem ullam aut eos optio. Quod sed aut ut non. Natus aut placeat sed. Error molestias fugiat placeat nulla unde. Esse natus quo quos et. Quibusdam autem consequatur et quia. Repellendus enim corporis. Cumque voluptas aut qui quas. Qui omnis rerum eos voluptates illo. facere ipsum non tempore. Et quis harum quia aliquam. Explicabo quia consequatur corporis rerum velit recusandae. Consectetur occaecati corporis odit. Culpa magnam earum temporibus animi voluptatibus tempore omnis. aut quam commodi qui Libero distinctio dolor optio eaque sed corrupti ipsum. at nobis quas et placeat temporibus natus. In vero rerum quos facere. Id debitis et saepe aut est. Vel <a title=\"Sed voluptatem dolor.\" href=\"http://donnelly.info/magni-adipisci-qui-suscipit-ipsum\">quibusdam voluptates voluptatem. Quibusdam</a> reprehenderit ut ab ut aut. Nam sed sunt et. dolore quae minima repellendus vel. Hic voluptate quod facere voluptas quod exercitationem. Perferendis aut quidem corporis voluptatum optio qui. Quo et amet dolorem sint veniam. Libero quasi est iusto. eos in omnis. Sint ex harum numquam veniam. et ut qui quo voluptatem non Ab rerum esse qui ut quo veniam. quaerat porro rerum expedita. consequuntur enim assumenda placeat Maxime deleniti quia animi sed. Maiores et blanditiis consequatur. Voluptas delectus asperiores illo vel. Maiores assumenda omnis Tempora est pariatur aspernatur eum ut. Omnis voluptatum praesentium sunt et Ratione et sed aliquam rerum Porro corrupti aut quisquam Quod doloremque enim ut quisquam. natus corporis error molestiae modi et Placeat sit unde sit aut quia. Vel cum in commodi tempore. Accusamus quas id aliquid Fugiat officia voluptatum quisquam fuga. Omnis amet qui recusandae in iste. quo eos ratione quam.</p>

<h5>Et et excepturi aut voluptas dolor mollitia. Minima qui explicabo eum quaerat ratione pariatur.
At animi dolor architecto aut. Unde dolore ut soluta</h5>

<hr>

<h2>Voluptas qui quis delectus. Esse facere earum ratione dolorem odit cum exercitationem</h2>

<ol><li>Nulla aut enim</li><li>Vitae est eos non unde cum quis</li><li>Et hic perspiciatis maiores quo</li><li>Delectus amet aut id</li><li>Necessitatibus omnis aut dolorem</li></ol>

<h3>Vel doloribus eligendi debitis non quia et voluptatem</h3>

<ol><li>Est voluptas</li><li>Rerum eveniet et</li></ol>

<p><a title=\"Commodi.\" href=\"http://bradtke.com/quisquam-dolores-vel-pariatur-dolorem-consectetur.html\">Sint</a> et voluptas corrupti. Repellendus <a title=\"Consequuntur distinctio architecto earum.\" href=\"http://www.pouros.net/\">iusto</a> distinctio doloremque dolorum. Eaque <a title=\"Quibusdam nulla pariatur libero.\" href=\"http://www.upton.com/quos-voluptatibus-et-totam-distinctio-mollitia-est\">dolorem magnam similique qui.</a> <a title=\"Corporis modi itaque non sunt dolore quidem quod quos est.\" href=\"http://ward.com/saepe-consequatur-magnam-rerum-iusto-sit\">consectetur eum enim</a> Incidunt maxime nam est maxime doloribus <a title=\"Deleniti.\" href=\"http://willms.org/inventore-officia-nemo-exercitationem-beatae-quia-qui-sint\">non.</a></p>

<hr>
',
                'post_title' => 'Explicabo et placeat incidunt quaerat minima voluptatum est',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 'explicabo-et-placeat-incidunt-quaerat-minima-voluptatum-est',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 00:42:00',
                'post_modified_gmt' => '2016-03-26 00:42:00',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=32',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 33,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:29',
                'post_date_gmt' => '2016-03-27 09:23:29',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 33,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:29',
                'post_modified_gmt' => '2016-03-27 09:23:29',
                'post_content_filtered' => NULL,
                'post_parent' => 32,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/95e085b3-9a65-33b4-a87a-3acb55a530a1.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 34,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:31',
                'post_date_gmt' => '2016-03-27 09:23:31',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 34,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:31',
                'post_modified_gmt' => '2016-03-27 09:23:31',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/e0c28319-1182-30a5-a60b-0708515fbc0e.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 35,
                'post_author' => 1,
                'post_date' => '2016-03-26 23:37:10',
                'post_date_gmt' => '2016-03-26 23:37:10',
                'post_content' => '<h1>Quia commodi beatae a laboriosam non deserunt at. Eum eos eveniet non earum. Qui sed voluptatem facere</h1>

<ol><li>Officia saepe quo sequi</li><li>Aut totam vel quod id</li><li>Ipsum quia rerum voluptates quidem eum</li><li>Nisi sed ex ut sunt qui</li><li>Qui consectetur deserunt ratione hic</li><li>Repellat ratione suscipit ut et est at mollitia</li><li>Repellendus sit</li><li>Ipsam magni sunt</li><li>Magnam est nisi</li><li>Soluta sit ipsam vero. Non sed et sint pariatur</li><li>Excepturi facere</li></ol>

<hr>

<hr>

<h2>Repellat dolorum officia autem eius quis</h2>

<p>Nemo molestias corrupti repudiandae sed aspernatur suscipit. In aperiam et dolorum Sed facilis porro odit laudantium autem. Distinctio id nisi mollitia repellat sunt sit. Assumenda <a title=\"Culpa in et odit dolores neque aperiam.\" href=\"http://www.cummerata.com/exercitationem-ea-quis-ratione-ea-quod-mollitia-sapiente\">et laboriosam</a> et. aut quia expedita. Ea facere quo hic rerum et expedita Non natus aut <a title=\"Expedita soluta.\" href=\"http://www.jakubowski.com/\">dolore nisi. Magni impedit laudantium est blanditiis optio.</a> tempora suscipit quae. Modi corrupti molestiae dicta id Ut dolor rerum voluptas sit in. commodi delectus aut. Enim est aut est soluta repellendus ipsum. Possimus <a title=\"Quis accusamus non voluptate veniam aliquam eum.\" href=\"http://funk.com/occaecati-dolorum-doloremque-enim-corrupti-voluptas-sunt\">vero recusandae qui</a> sapiente voluptatem.</p>

<h1>Quisquam dolorem ea hic velit. Ut omnis porro assumenda exercitationem qui ut molestiae</h1>

<blockquote>Quia dolor dignissimos et provident tempore. Deserunt eaque non non Nihil omnis laboriosam occaecati est soluta. Voluptatibus id ex qui. deserunt quibusdam natus sequi at. Possimus quia similique magni. Itaque dolorum autem inventore. Quis fugit quidem aut <a title=\"Dolores dolores.\" href=\"https://kilback.net/a-qui-et-est.html\">Assumenda cupiditate dolorem dolore iste</a> Sed ut voluptatem magni. Veniam voluptates perspiciatis officia facere nisi Ex sequi illo nihil Tenetur maxime dicta tenetur et. nihil ratione Cupiditate consectetur et eum. Dolores eveniet minus voluptas deserunt voluptatem. Natus sed excepturi fugiat distinctio. Voluptate odio molestias atque et distinctio. Provident nihil molestiae asperiores. Cupiditate laboriosam praesentium magnam. Nobis quam dolor deserunt similique enim Modi nesciunt non et Aut inventore deserunt.</blockquote>

<!--more-->

<h2>Voluptatem mollitia saepe culpa dignissimos ipsam earum</h2>

<p><img alt=\"Accusantium rerum aut saepe et ipsa eaque\" src=\"http://wlc.app/wp-content/uploads/2016/03/e0c28319-1182-30a5-a60b-0708515fbc0e.jpg\"></p>

<h3>Est consequatur consectetur repellat dolorum velit fuga mollitia quam</h3>

<ol><li>Ut debitis nemo soluta</li><li>Dolore magnam et necessitatibus expedita fugiat</li><li>Distinctio quidem</li><li>Et commodi dolore voluptatum</li><li>Amet qui quos est sit cum</li><li>Tenetur aliquam voluptates ut qui</li><li>Quae ut soluta</li></ol>

<h5>Dignissimos pariatur omnis accusantium officia. Accusantium id enim architecto suscipit. Modi fugiat earum consequatur consequuntur minima veniam qui</h5>

<p>Dicta rerum nobis aut. voluptatem eos inventore accusantium aut. pariatur ab ipsa quos debitis Deserunt totam aliquam laboriosam <a title=\"Rerum perferendis.\" href=\"http://denesik.info/\">officiis repellendus. Cum alias praesentium laborum</a> Sunt molestias expedita hic animi. Rerum non totam beatae. Non exercitationem expedita tenetur. vel eos laudantium. Quod perspiciatis officiis corporis et. Tempora similique atque. Aut qui ad qui expedita vero Assumenda voluptas ut Et voluptas modi. Est et minus sed nihil reiciendis Laborum optio ex dolorem corporis inventore. Eum id maiores tempora quia qui nulla. eum ducimus tenetur.</p>

<h2>Ad quos quaerat eos odit corporis. Qui ut consectetur doloremque. Aut quasi perspiciatis nostrum explicabo</h2>

<ul><li>Rem blanditiis</li></ul>

<hr>
',
                'post_title' => 'Quia excepturi ab delectus',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 'quia-excepturi-ab-delectus',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 23:37:10',
                'post_modified_gmt' => '2016-03-26 23:37:10',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=35',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 36,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:32',
                'post_date_gmt' => '2016-03-27 09:23:32',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 36,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:32',
                'post_modified_gmt' => '2016-03-27 09:23:32',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/849e6031-923a-3a44-be7e-cb5325b4b71f.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 37,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:33',
                'post_date_gmt' => '2016-03-27 09:23:33',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 37,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:33',
                'post_modified_gmt' => '2016-03-27 09:23:33',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/de89707d-3fc0-3f1e-ae86-22a00ad75d51.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 38,
                'post_author' => 1,
                'post_date' => '2016-03-26 07:12:36',
                'post_date_gmt' => '2016-03-26 07:12:36',
                'post_content' => '<p><img class=\"alignright\" alt=\"Id sint nesciunt velit omnis ipsam similique impedit aliquid maxime ratione quo\" src=\"http://wlc.app/wp-content/uploads/2016/03/849e6031-923a-3a44-be7e-cb5325b4b71f.jpg\"></p>

<h6>Laudantium natus eum quaerat eos amet id</h6>

<hr>

<ul><li>Sapiente</li><li>Numquam animi eligendi facilis et facere quo est</li></ul>

<h1>Incidunt eum nemo rem autem. Voluptate veniam porro mollitia facilis</h1>

<hr>

<p><!--more-->
<img alt=\"Maxime facilis facilis consectetur est laudantium\" src=\"http://wlc.app/wp-content/uploads/2016/03/de89707d-3fc0-3f1e-ae86-22a00ad75d51.jpg\"></p>

<p>Consequatur est quos odio est fugiat. Eos perspiciatis facere eos quisquam voluptatibus dolor. sapiente nemo. <a title=\"Et eveniet quis laudantium.\" href=\"http://www.metz.com/aliquid-veniam-debitis-doloremque-aliquam-facilis-sit\">quae aspernatur delectus</a> Sint voluptates modi sequi rerum voluptas nulla. minus a sint harum aut. Qui accusantium aliquam numquam. ut rem sapiente quia. Cumque quam ut <a title=\"Ut enim qui voluptates.\" href=\"http://welch.info/ex-ut-ullam-architecto\">sunt ut</a> qui. Perspiciatis facilis reiciendis est. Natus qui et ut. Et deleniti unde quia eos saepe in. voluptate id vel sunt. Et odio qui <a title=\"Laudantium qui.\" href=\"http://champlin.com/minus-excepturi-non-distinctio-illum-sit\">incidunt</a> reiciendis. amet omnis cum est quos. ad autem nisi accusamus sit ea nulla. Et aut sit Debitis quo ea <a title=\"Provident est voluptas.\" href=\"http://www.lakin.org/accusantium-in-quis-dolorum-corporis\">odio. Quam vel</a> sed est cupiditate Voluptas porro quod in Eveniet similique amet eos Pariatur commodi ullam excepturi quae est <a title=\"Nihil ut sit quo.\" href=\"https://brekke.com/amet-corporis-quia-itaque-numquam-id-est-animi.html\">Aut doloremque</a> doloribus quis est recusandae. Voluptatum reiciendis facere aut aliquid. Voluptatum eos iure repellendus consequatur explicabo. Aspernatur harum facere Incidunt provident quis <a title=\"Magnam quo nisi recusandae.\" href=\"http://quitzon.org/placeat-et-odit-provident-tempora-tempore-ad\">molestiae. Molestias ducimus quis</a> reiciendis sit enim.</p>

<h3>Laborum eum et non officia in. Est officia aut veniam qui. Quis ratione sunt reiciendis et consequatur. Deleniti voluptas occaecati commodi</h3>

<p>Praesentium dolorem qui. Quasi animi atque minima quo doloribus dolorum repellendus. <a title=\"Et non quia odit.\" href=\"http://kunze.com/officia-ut-facere-minima-praesentium-quis-esse\">consectetur</a> non qui exercitationem. Consequatur in sequi numquam. non sed qui et. itaque non consequatur. Doloremque ducimus quia eos odit quo. Harum culpa omnis ut id qui. Sunt ut distinctio aspernatur. vel porro blanditiis id quo quae. tempore voluptatibus voluptatem et non. Id sunt quas Quia sit et dolor non quia. Dolores quasi itaque voluptatum Consequatur aut quisquam molestiae unde ipsa. temporibus laudantium deleniti possimus sunt dolores at. blanditiis et quibusdam labore voluptatem occaecati. dolorum alias Id iusto harum et modi quis. Ut aliquam nisi accusantium praesentium Aut vel voluptatum at ipsam adipisci accusantium. Dolorem dolores cumque aut reiciendis nisi. Corrupti soluta nemo voluptas ea aliquam soluta. Omnis et odit eos enim maiores facere. Qui <a title=\"Unde rerum.\" href=\"http://www.simonis.com/officiis-minus-fuga-maiores-fugit-rerum-sit.html\">voluptates sed</a> ut eligendi. Neque magni voluptate. Sit corrupti neque et at in Aut eum placeat quo dicta optio. Dolor ad voluptas neque laudantium. ab sapiente eligendi Officia sed ut suscipit quaerat Voluptatem unde consectetur molestiae illum velit. Excepturi commodi explicabo quia sapiente eveniet. Sint maiores magni consequatur dicta et vel. Pariatur totam nisi optio delectus perferendis. dolores facere debitis. Fugit voluptates et ut in rem odio. deleniti autem qui rerum modi Perferendis culpa error eos vitae. Sunt dicta harum dolorem odit nostrum. veritatis ut doloribus velit repellendus. Praesentium aspernatur libero quia molestiae. Aliquid assumenda vel est qui architecto Ab molestiae quibusdam ut et quisquam est. Et facilis sint debitis est voluptas. aspernatur amet</p>

<blockquote>Vitae veritatis ut harum. Quia dolorem explicabo rem possimus voluptatibus rerum. Accusantium eius qui labore sapiente natus ea vitae magni. Inventore rem consequatur vitae dolorum quidem non. Est dolorem enim iusto. Dicta laudantium earum et rerum. Eius maxime ex ut modi. Nihil consequatur modi enim facere harum sit praesentium. Laboriosam animi aut enim expedita est. Culpa unde quia molestias quasi. Ut itaque aut sed eligendi. Provident consectetur aut perferendis quidem. Quas hic magnam harum. Maiores debitis tempore dolorem ut laboriosam. Non sed accusamus consequatur magnam qui velit. Pariatur fugiat rerum velit sit quidem quia quia soluta. Eligendi a perferendis quia qui suscipit quisquam. Inventore est molestiae sequi vero. Et officiis quos quidem error. Qui ut ipsa voluptatem commodi distinctio. Labore deserunt officia esse molestias. Distinctio qui sit fugit sit dolorem odio. Dignissimos quasi voluptatem qui sunt nisi. Laudantium maxime maxime enim a veritatis vel eius. Sed magnam nulla corporis.</blockquote>

<h6>Minus iste atque pariatur eligendi. Alias quia et maiores non quo vitae</h6>

<ul><li>Quaerat odit dolor dignissimos deleniti et</li><li>Animi suscipit amet saepe sed ab</li><li>Maiores alias eius aut ut omnis</li><li>Sapiente est est est et sint</li></ul>

<hr>

<blockquote><a title=\"Corporis ullam consectetur dolor repellendus repellendus autem.\" href=\"http://jacobi.com/doloribus-ut-enim-dolorum-temporibus-earum-laudantium\">Incidunt</a> odit alias maxime. soluta qui est commodi. vel est et sunt autem Sunt in maiores officiis quod aut Eveniet quasi nulla corporis expedita Laudantium non explicabo quam et. molestiae est iste omnis facere cupiditate aperiam. debitis <a title=\"Et adipisci vel et.\" href=\"http://www.goyette.org/sed-nobis-dolorum-libero-voluptas-ducimus-est-dignissimos-sed\">dolores voluptas. Et repudiandae sed iure maxime sapiente quidem.</a> rerum officia provident et cumque. hic quod debitis. In rem iusto delectus quia. Numquam et Eaque id sequi vero consequatur. Suscipit laboriosam praesentium aliquid voluptatibus. accusamus porro voluptatibus atque. Aut deleniti voluptate voluptatem eaque. Quo voluptatum neque. Aut <a title=\"Fugiat velit vitae esse eos labore.\" href=\"https://www.koepp.com/quis-blanditiis-aspernatur-sed-laborum\">amet non</a> sit. Rerum et enim nostrum nesciunt. ut qui. Vero aliquid eligendi harum reiciendis Eligendi odit ipsam aliquam aut. Iure quaerat aspernatur autem Alias <a title=\"Magnam optio.\" href=\"http://altenwerth.biz/consequatur-sed-totam-fuga-iste\">esse provident iure aut delectus. Tenetur</a> autem explicabo Dolores voluptatibus asperiores ut et corporis. quasi ea sed facere nisi non. Aut iure quidem. sapiente et perspiciatis expedita. Ut et eum laboriosam eum odio. Quo aut numquam. Voluptate ea in laborum eum. sint et dolor.</blockquote>

<h5>Facilis iure fugit repellendus quod magnam. Quia voluptas aut dolor occaecati</h5>

<p>Rerum nemo molestiae ipsum aut et rerum velit. Qui assumenda ab voluptatibus. Dolores ab blanditiis quia sequi <a title=\"Excepturi similique molestiae est voluptatem.\" href=\"http://gleason.com/et-eos-et-deserunt-voluptas-voluptatem-cupiditate-assumenda\">eius.</a> similique aspernatur ut. culpa ut ut. Asperiores sed voluptatum harum iste voluptatem. Cumque est rerum exercitationem labore delectus. Odit minima in accusantium. Odio enim magnam voluptas sed pariatur Voluptatem sed odio fugiat et suscipit suscipit. <a title=\"Tenetur rerum corrupti enim.\" href=\"http://www.bernhard.info/quis-ea-iusto-et-et\">quaerat maiores non necessitatibus quod consequatur. Repudiandae vel doloremque</a> non ut autem. Inventore vero et tempora a. Repellendus consectetur sit amet. incidunt mollitia ipsam iusto nostrum voluptatem. Voluptatem laboriosam rerum <a title=\"Nostrum repellat.\" href=\"http://www.smitham.com/ut-itaque-et-autem-ut-consequatur-a.html\">adipisci repellendus.</a> et <a title=\"Debitis quibusdam provident.\" href=\"https://www.hauck.com/perspiciatis-enim-tempore-praesentium-nesciunt-eligendi-est-dolorem\">sunt autem impedit iusto iure. Vel</a> hic aut dolorem ut aliquid. Tempora doloribus doloremque quia fugit. quidem perspiciatis quae provident omnis. delectus odit vitae quae molestiae. Voluptatum illo voluptatem odit fuga nesciunt. Fugiat quia quo Sequi error hic nemo Voluptate adipisci consequuntur eum ex et dolores. Dolorum molestiae atque <a title=\"Sunt et illum qui adipisci.\" href=\"https://www.crooks.org/et-eos-ipsam-quos-asperiores\">qui quisquam perferendis. Possimus nostrum</a> exercitationem. Earum dolorum veritatis enim unde et. Dolorem veniam expedita. Iste unde aut laborum <a title=\"Consectetur fuga necessitatibus ut.\" href=\"http://ullrich.com/qui-eius-omnis-iste-minima-unde-vero\">laudantium. Cum voluptatem</a> inventore blanditiis expedita molestiae Rerum incidunt qui ullam deserunt. ut maxime voluptas provident expedita. Aut voluptatem perferendis quis. doloribus est provident labore ut quia. Earum eum <a title=\"Natus dolorem tempora.\" href=\"https://lesch.org/quia-sit-nobis-et-et-officiis-maiores-dolorem.html\">doloribus et</a> aut quasi. laborum rerum eligendi voluptas. reiciendis earum tenetur. omnis incidunt. Blanditiis quia aliquid.</p>

<h6>Quas ipsum et quo sed corporis cupiditate fugiat harum. Omnis nihil illo rem minima id</h6>

<ul><li>Atque qui voluptatem</li><li>Minus quae enim blanditiis</li><li>Repudiandae occaecati corrupti quis autem labore illo quia</li><li>Molestias omnis</li><li>Sed et sunt ipsa sunt</li><li>Commodi est earum ad incidunt</li></ul>

<h6>Asperiores quos corporis doloremque consequatur sed rerum. Optio ullam quod est temporibus in sit voluptas</h6>

<blockquote>Ea necessitatibus sequi ducimus odit non consequatur ut. quas autem cupiditate quisquam occaecati. Rerum cum libero atque <a title=\"Ut laboriosam dolor nesciunt quibusdam.\" href=\"https://www.smitham.com/similique-nihil-distinctio-sed-dolorem-doloribus-qui-neque\">reiciendis sint. Temporibus blanditiis ut</a> ut veritatis ut dignissimos. omnis ipsa <a title=\"Ducimus dignissimos quo.\" href=\"https://www.ward.com/labore-facere-ut-voluptas-ut-ipsum-quia-beatae-molestias\">rerum</a> asperiores. Cupiditate voluptate sint voluptatem. Rerum libero nam recusandae qui placeat harum Aut et consequatur quia at quo. Excepturi eum iste praesentium ex voluptas. Eveniet voluptas laudantium et omnis quia. soluta et vitae. harum ut facilis. Et quos ratione voluptatem <a title=\"Amet incidunt et modi.\" href=\"http://kunze.com/veniam-quasi-enim-est-inventore-nobis-aut\">blanditiis sit.</a> molestiae <a title=\"Illum.\" href=\"http://haag.org/non-nulla-hic-repellendus-cumque\">soluta</a> eum odio ut. Necessitatibus quo fugit consequuntur necessitatibus. Sapiente aspernatur in saepe. Quis veritatis dicta magnam veniam. et nesciunt fugiat error. voluptatum dolore illo ut harum <a title=\"Tenetur sit recusandae non.\" href=\"http://deckow.com/dicta-quia-atque-beatae-iusto-quibusdam-et-repudiandae\">adipisci. Et</a> magni iure ipsum. Asperiores omnis quod praesentium omnis blanditiis. Consequatur ducimus magni tenetur numquam magnam. id in sunt magni. Consequatur et officiis maiores autem. Quo explicabo consequatur autem Est libero tempore quaerat tempore perferendis. Ad voluptatum voluptates officia sed. Eos nihil iure vero <a title=\"Et sunt odio minus repudiandae ab consequatur dolor ipsam totam.\" href=\"http://mclaughlin.com/\">Nobis voluptas error culpa</a> doloribus itaque.</blockquote>

<ol><li>Porro eos</li><li>Rerum qui sequi deleniti occaecati</li></ol>
',
                'post_title' => 'Ut quia harum consequatur quasi est aperiam',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'ut-quia-harum-consequatur-quasi-est-aperiam',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 07:12:36',
                'post_modified_gmt' => '2016-03-26 07:12:36',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=38',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 39,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:34',
                'post_date_gmt' => '2016-03-27 09:23:34',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 39,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:34',
                'post_modified_gmt' => '2016-03-27 09:23:34',
                'post_content_filtered' => NULL,
                'post_parent' => 38,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/badb82a6-3b4f-3da6-8232-15e4c676dbea.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 40,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:38',
                'post_date_gmt' => '2016-03-27 09:23:38',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 40,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:38',
                'post_modified_gmt' => '2016-03-27 09:23:38',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/ab7bc2b6-fb25-3654-af7a-181effb0cb4a.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 41,
                'post_author' => 1,
                'post_date' => '2016-03-26 21:14:50',
                'post_date_gmt' => '2016-03-26 21:14:50',
                'post_content' => '<hr>

<h1>Et ipsum quasi in distinctio sed tenetur. Commodi explicabo voluptas assumenda tenetur. Eum nesciunt consequatur tempore sint fuga qui voluptatum</h1>

<ul><li>Et minus omnis quas aut</li><li>Voluptatem quam</li><li>Nam repellat fuga fuga</li><li>Eos est vel quasi</li><li>Adipisci laudantium est quo odio et sed dolores</li><li>Quo eum omnis facere accusantium sequi natus</li></ul>

<h3>Non sequi unde odit deleniti blanditiis ipsam enim. Quidem dolor et impedit cumque voluptates dolor. Neque beatae quas quis ipsum aut</h3>

<ul><li>Sunt porro cumque magnam voluptate cumque</li><li>Veniam fugiat omnis et ut</li></ul>

<p><img alt=\"Quidem occaecati sit sit et odio nobis\" src=\"http://wlc.app/wp-content/uploads/2016/03/b381be8b-8d26-3fb0-8ff3-df54f0a4a7ba.jpg\"></p>

<h5>Tempore nihil reiciendis et eveniet. Est doloribus beatae quia. Recusandae est ea odit sit pariatur aut commodi</h5>

<!--more-->

<hr>

<h4>Ut quo sed ad quos. Corrupti voluptatem et repellendus id rem</h4>

<hr>

<h1>Provident velit dolor rem. Dolores quae velit et. Aut quia amet distinctio sed beatae dolor itaque. Iusto sed et soluta qui</h1>

<ol><li>Rem adipisci laudantium illo</li><li>Omnis esse assumenda quis</li><li>Omnis ut fugiat numquam quasi ratione</li><li>Eum et praesentium unde</li></ol>

<h4>Harum natus non dolorem aut sit. Magni optio maxime et similique laudantium iusto. Excepturi corrupti consectetur sed</h4>

<blockquote>Velit expedita quam quod repellendus fugit. Aut quisquam id voluptas. magni eos voluptate repellat <a title=\"Non quia est error.\" href=\"http://www.jenkins.info/\">expedita. Voluptatum</a> totam totam ea repellendus. Hic porro recusandae atque hic et molestiae. Porro ut cumque minus Est quae <a title=\"Aperiam odio delectus aliquam.\" href=\"http://schultz.com/quis-nulla-consequuntur-odio-occaecati-sed-ex\">repudiandae cum facere.</a> quam ea non rerum nesciunt Quasi rerum alias.</blockquote>

<ol><li>Nihil quo assumenda voluptatem illum fuga</li><li>Neque explicabo magni ipsa dolorum omnis ex</li><li>Aut eligendi cumque</li><li>Et iste unde culpa</li><li>Amet asperiores</li><li>Delectus excepturi atque porro est odit</li><li>Odit</li></ol>

<h4>Neque consequatur dolores ullam culpa culpa et reiciendis</h4>

<p><img class=\"alignleft\" src=\"http://wlc.app/wp-content/uploads/2016/03/ab7bc2b6-fb25-3654-af7a-181effb0cb4a.jpg\">
<img alt=\"Qui tenetur quis repudiandae quo rerum ipsa tempora culpa voluptate\" src=\"http://wlc.app/wp-content/uploads/2016/03/ab7bc2b6-fb25-3654-af7a-181effb0cb4a.jpg\"></p>
',
                'post_title' => 'Cupiditate consequatur est voluptatibus quod est',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 'cupiditate-consequatur-est-voluptatibus-quod-est',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 21:14:50',
                'post_modified_gmt' => '2016-03-26 21:14:50',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=41',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 42,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:43',
                'post_date_gmt' => '2016-03-27 09:23:43',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 42,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:43',
                'post_modified_gmt' => '2016-03-27 09:23:43',
                'post_content_filtered' => NULL,
                'post_parent' => 41,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/55aaaf98-9d0d-339a-9892-0a4dd8120991.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 43,
                'post_author' => 1,
                'post_date' => '2016-03-26 19:19:03',
                'post_date_gmt' => '2016-03-26 19:19:03',
                'post_content' => '<h5>Omnis nisi est esse aliquam itaque exercitationem minima voluptate. Nam nulla minima assumenda consectetur quae facere aut. Unde est eaque porro quo</h5>

<ul><li>Natus</li><li>Et ut inventore ut nulla ratione</li><li>Atque quia et non quae in</li><li>Nostrum rerum a eos</li><li>Voluptatem vel harum exercitationem enim quas</li><li>Tenetur culpa aut repellat</li><li>Quia eius non</li><li>Nulla qui ut nemo vel eveniet</li><li>Quia est omnis occaecati ipsam vitae</li></ul>

<h6>Dolorum rerum soluta molestias ratione ut animi. Rerum repellendus a qui id repellat voluptate molestiae. Dolor iusto ab fugiat</h6>

<!--more-->

<ul><li>Velit quos aut iste</li><li>Dolor ea sed atque labore aut animi laboriosam</li><li>Nulla consectetur et qui deserunt incidunt</li><li>Minima id ut</li><li>Maiores eaque nemo vero</li></ul>

<p>Consequatur necessitatibus nisi. Omnis fugiat et et maxime voluptas Ex nemo qui quis quibusdam expedita quod. Fugit ab <a title=\"Nihil dolorum omnis consequuntur.\" href=\"http://muller.com/\">voluptatum itaque</a> aliquid dolorem. Aut consequatur ipsum qui. Eveniet quo quos quia ullam architecto. laboriosam vitae quia sint. Ut officia et nihil. Doloribus molestias delectus Atque <a title=\"Fugit placeat eius eligendi aperiam impedit qui.\" href=\"http://haag.com/\">voluptate fuga.</a></p>

<p>Dolorem assumenda soluta quas eveniet. Non beatae exercitationem officiis cum. Ea doloremque ut omnis maxime. Tempora itaque beatae quibusdam aliquid alias animi quis quo. Quis cum itaque quia aut illo et saepe. Ut odio fugit error nulla officiis. Voluptate dicta dolores minus nihil assumenda quidem necessitatibus. Laudantium sint voluptatibus sunt animi. Quis corrupti unde pariatur odit odio quas. Sapiente ut omnis temporibus distinctio dolores placeat. Et sed sequi vero aut. Voluptatem sint excepturi est. Animi tempore dolorum corporis quis. Voluptates fugit amet dolore repudiandae et. Voluptatibus et ut voluptatum provident. Nostrum aliquid magnam perferendis illo qui. Aperiam nesciunt voluptatem qui voluptas nihil tempora voluptates. Sunt vel debitis cumque voluptas. Beatae ea laboriosam itaque quia placeat repudiandae rerum officia. Sunt nisi quibusdam perferendis rerum fugit ducimus quas. Ullam perferendis sint et. Possimus vel non doloremque sunt eos et dolorem. Qui autem eaque quia neque nihil ab. Dolorem facere et cupiditate placeat. Aut aut unde praesentium mollitia quo hic. Excepturi saepe inventore omnis et molestiae quia doloribus. Aut unde vero voluptate omnis eum error nihil. In laborum fuga qui nobis enim. Error consectetur voluptatem quia itaque earum.</p>

<ul><li>Voluptatum ad ut accusantium</li><li>Aut eveniet aut nobis fuga</li><li>Ipsum eum eius sint excepturi eveniet</li><li>Quia ducimus mollitia nihil sed qui</li><li>Perspiciatis nobis temporibus eaque cumque sit</li><li>Magni dolorem ducimus hic nemo</li></ul>

<h2>Non veniam eos aperiam suscipit. Voluptatum dolores aut rem soluta eius consectetur. Qui temporibus saepe magni</h2>

<p><img class=\"alignright\" alt=\"Nemo sit ut\" src=\"http://wlc.app/wp-content/uploads/2016/03/849e6031-923a-3a44-be7e-cb5325b4b71f.jpg\"></p>

<h1>Distinctio commodi placeat incidunt assumenda excepturi sit dignissimos. Ad enim doloribus hic</h1>

<p>Suscipit voluptate voluptas ratione velit deserunt <a title=\"Rerum id quam.\" href=\"https://www.pollich.com/fuga-sunt-porro-et\">Molestiae</a> ut ad dicta repellendus. veniam mollitia omnis corporis ut qui voluptatum. Saepe aliquid aspernatur voluptates eius quos. Debitis assumenda quis qui. Expedita et possimus omnis. Laborum commodi at pariatur non sed non. Voluptatem qui omnis consequatur magnam in Occaecati et alias Et ad nulla qui amet. quibusdam ipsa dolorum. vero velit voluptatibus ex et. Perferendis mollitia quo aut sit Error suscipit officia consequuntur. Omnis aut quibusdam deserunt quis et. adipisci voluptatem iste Quaerat quae deserunt error velit autem in. Ea similique sunt amet tenetur. Et quam aut debitis facilis suscipit dolores corrupti. Quis consequatur libero. Ea at eveniet Consectetur assumenda accusantium qui numquam sint. Deleniti nisi aut. minima natus dolorem minus iure. Rem voluptas distinctio labore dolor eius dolorum. aspernatur repudiandae in earum excepturi aut. vel consequatur minus. Modi ipsa qui ut. Dignissimos nihil natus facere. Aspernatur quasi quia necessitatibus autem enim aut quaerat. id laudantium non eligendi eius. Odio ut nam excepturi <a title=\"Quia odio a.\" href=\"http://www.toy.com/ut-itaque-ut-omnis-dolor-praesentium-quia-tempore-ut.html\">totam</a> cum. Dolorum dolores maiores est. Omnis dolor doloremque. Vel modi voluptatem illum.</p>

<blockquote>Officiis animi quidem dolorum sint magni commodi id rerum. Deleniti temporibus fugiat quia aperiam. Enim maxime qui aut aliquid molestiae beatae. Molestiae voluptatem vero assumenda corporis ab. Alias odio totam et ut eos. Perspiciatis omnis praesentium illo soluta consequatur. Consequatur dolorem quibusdam dolorem. Voluptatibus aut fugit commodi illo quod blanditiis. Qui neque aut libero quam iure aut ut. Cum maiores ratione eum debitis architecto. Facere assumenda quo suscipit vel voluptatem pariatur quia aut.</blockquote>

<h6>Consequatur ratione occaecati maiores</h6>

<ul><li>Et earum</li><li>Tempora sunt quia et eum</li><li>Laboriosam ut voluptas tempora fuga earum</li><li>Quidem numquam autem aut ea voluptates facere</li></ul>

<h6>Ipsum asperiores tempore cum quia. Quidem quam omnis laudantium culpa suscipit</h6>

<blockquote>Veniam numquam quia reiciendis accusamus aliquam ex. Sit quo necessitatibus eligendi quia. Odio adipisci autem labore accusamus <a title=\"Sit occaecati omnis quasi sit voluptate.\" href=\"http://www.braun.net/quis-earum-quis-nihil-reiciendis-vitae-veniam.html\">autem consectetur. At libero vero voluptatem nisi</a> officia. Id sit eius corrupti et Beatae doloribus tempora exercitationem accusamus debitis. Voluptatem eligendi omnis fugiat necessitatibus quo. Incidunt atque consequatur libero tenetur. beatae dolore magnam sit. possimus at debitis quo. qui expedita magnam culpa Recusandae suscipit eum dignissimos quo. Dicta minima Quia non quia voluptate nobis voluptates Unde non a eveniet assumenda fugit. Neque odio ab aut et rerum. Doloremque necessitatibus corporis perspiciatis qui. Id animi numquam possimus. Quidem dolorem voluptas molestiae odio.</blockquote>

<h6>Velit alias temporibus accusantium magnam. Et sed et ea blanditiis temporibus esse. Iure illo labore est odit quia odit dolorum dolor</h6>

<hr>

<p>Nisi nihil sed ratione autem ut. A sed voluptatum et excepturi inventore minima. Et cum sed itaque dolore quam placeat. Quia voluptas reprehenderit qui iusto minus ut tempore. Eveniet dolor dolores est odit ea. Deleniti sit iure voluptatem voluptas placeat.</p>
',
                'post_title' => 'Dolor doloremque nesciunt impedit minus qui praesentium',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 'dolor-doloremque-nesciunt-impedit-minus-qui-praesentium',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 19:19:03',
                'post_modified_gmt' => '2016-03-26 19:19:03',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=43',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 44,
                'post_author' => 1,
                'post_date' => '2016-03-26 12:16:00',
                'post_date_gmt' => '2016-03-26 12:16:00',
                'post_content' => '<ol><li>Magni ut totam corrupti a libero</li><li>Quia officiis impedit occaecati</li></ol>

<h1>Accusamus ex rerum ratione nihil. Quia qui quos molestiae odit iste quis autem</h1>

<ol><li>Quam rerum repellat et ratione</li><li>Quis rerum harum qui</li><li>Pariatur quo</li><li>Dolorem natus eveniet ullam qui earum</li></ol>

<hr>

<h3>Voluptas facilis est culpa ut id. Sit nesciunt corrupti vel ex. Est aperiam aut et maxime voluptas</h3>

<hr>

<h2>Expedita iusto in beatae sed</h2>

<ol><li>Enim ut earum ipsa et</li><li>Aspernatur quia ut aut</li><li>Odio fugit a</li><li>Molestiae qui est molestias reprehenderit dolorum sed</li><li>Adipisci hic consequuntur laudantium qui veritatis</li><li>Occaecati aut expedita asperiores minus</li><li>Quia vel optio quia</li><li>Culpa at iste delectus</li></ol>

<h4>Fuga tempore modi qui est dolore temporibus. Libero odit illum sunt illum. Sit doloribus molestiae quia</h4>

<!--more-->

<p>Cupiditate quod officiis voluptatum eum ad. Culpa cupiditate vel ea harum laborum porro. Blanditiis nisi voluptate voluptatem sapiente. Nisi et dignissimos voluptas id ratione rem odio. Vero nulla aut qui autem distinctio iste amet. At quaerat molestiae ipsa architecto.</p>

<p>Quis exercitationem sed et. Voluptas voluptas eos distinctio. Eum fuga et molestias ut. Deserunt error rerum at Consequatur sequi suscipit adipisci molestiae voluptates <a title=\"Sint ut aspernatur.\" href=\"https://strosin.com/fugiat-optio-ratione-qui-ipsa-odio-dolores-qui.html\">Consequatur quasi a omnis debitis. Iure quam</a> et delectus delectus. Expedita <a title=\"Culpa tenetur qui modi assumenda maxime.\" href=\"http://www.raynor.com/sequi-natus-est-dignissimos.html\">aut</a> aut vel. Velit architecto deleniti Excepturi in quo ratione perspiciatis ut. consequatur dolorum corrupti ex odio ea dolor. Numquam sit dolores vero numquam. Aut nihil quia aut. Adipisci aut placeat magnam sit explicabo molestiae. Enim ab ipsam odio dolorum. Dolor quos eum consequatur voluptas <a title=\"Velit voluptatem eius.\" href=\"http://kemmer.net/mollitia-consequatur-aut-recusandae-qui-placeat-incidunt-nihil-iure\">aliquam</a> at. Ducimus sunt illum minima Porro <a title=\"Quia.\" href=\"http://www.willms.com/iusto-vero-fuga-tempore-porro-dolorem-sit\">dolorem aperiam iure aliquam ex.</a> totam quidem qui voluptatem nesciunt. et voluptas tempora rem iure et et. A ut qui non ipsa cupiditate. Cupiditate quae et quia nisi <a title=\"Voluptatem itaque.\" href=\"http://trantow.com/omnis-possimus-maiores-ducimus-esse-harum-et-sed\">hic. Consectetur et recusandae nam</a> eum rerum quo.</p>

<p>Vel aspernatur at ut voluptatibus sed quae quis. Magnam modi quo rerum. Dignissimos nam qui velit quo tenetur delectus in. Minus voluptatem consequatur et expedita delectus ipsam. Fugit laborum est est laborum voluptatem voluptatum. Ut aut nisi optio accusamus non qui est. Pariatur quaerat corporis optio deleniti maxime. Doloribus sint minus laudantium sed voluptatem pariatur repellendus. Reprehenderit et velit sunt eos illum. Nulla commodi animi ipsam beatae voluptatem voluptatem aut ratione. Quae veritatis eos sint. Voluptas tenetur beatae harum minima. Ab cupiditate quidem aspernatur id omnis est sunt. Vel sed similique maiores. Expedita neque quo adipisci nulla autem qui nostrum. Voluptas nam et omnis. Amet ea aut rerum rem architecto nam officiis.</p>

<h6>Mollitia doloribus et ipsa qui. Natus magnam soluta perferendis. Aperiam iste error sint qui sit veritatis doloribus dolores</h6>

<p>Consequuntur deleniti nihil ipsum esse. Repudiandae aperiam corrupti enim qui ducimus ipsam atque. Necessitatibus doloribus a vel qui a. Sit reiciendis nihil esse rem suscipit et. Aliquid rerum eum eligendi enim sed voluptatem quia. Laborum dolores accusamus earum et doloribus exercitationem. Veritatis adipisci aut molestias qui dolorum dolorem pariatur. Vitae est animi eum nisi est. Esse doloribus perferendis est aut aut. Nobis illo distinctio reprehenderit ut. Aut nihil tenetur sapiente dolor labore doloremque. Veniam dolores rerum pariatur voluptatem. Rerum aliquam dignissimos quam. Qui voluptas placeat id possimus. Veritatis nesciunt autem sunt molestiae corporis ut.</p>

<h2>Consequuntur et autem quos. Qui nisi qui voluptatem alias excepturi impedit</h2>

<ul><li>Ipsa provident libero qui eveniet rerum qui</li><li>Saepe tenetur illum dicta et</li><li>Sed et facere ipsa aspernatur est qui alias</li><li>Omnis voluptas</li><li>Quidem</li><li>Labore est magni</li></ul>

<h4>Ut ea ea qui iusto aperiam illo. Laboriosam id maiores qui aut. Vitae ut tempora placeat laudantium numquam porro repudiandae</h4>

<p>Voluptatem a quod est iusto iure ut. Ab rerum quia totam. Consequatur tenetur aut Fuga itaque aliquid aut eum. Aliquid cupiditate maxime laudantium. Perferendis aut nostrum unde. Quia culpa sed recusandae at hic. Eum inventore quibusdam quo <a title=\"Est quasi sint aliquid.\" href=\"http://www.wehner.com/ullam-nostrum-odit-incidunt-sed-harum.html\">Consequatur aperiam</a> voluptatem in inventore Ea explicabo occaecati laborum minima nobis architecto Dolor necessitatibus et omnis suscipit esse. et molestias beatae. Veniam neque eos delectus non quia labore. et eius fugiat omnis nisi. sit perferendis asperiores Aspernatur dolor id aut. Quod ea molestiae voluptatum qui. Minus perferendis autem sint <a title=\"Aut numquam vitae quae.\" href=\"https://www.buckridge.com/dicta-similique-error-aut-omnis-et-magni-quis\">corrupti ullam aut. Veritatis dignissimos ut qui magnam</a> enim. Accusamus ducimus saepe ut sed optio eveniet. Fuga temporibus voluptatibus facilis ullam. quia omnis aut assumenda Deserunt quis commodi necessitatibus. Amet sint nam sapiente eos. dolore id quia earum. Ut hic porro aut <a title=\"Consequatur incidunt ullam.\" href=\"http://wuckert.com/ipsam-corrupti-aliquam-sed-autem.html\">maxime voluptates quis non.</a> eveniet sint non Error veniam voluptatem sed quibusdam velit Omnis quia eius molestias quas quia itaque Placeat ipsum est aut et et maiores. Magni corporis architecto eligendi aperiam. Tempora et eius aut dolores iusto. Qui quas illo qui voluptatem. Aliquid molestias consequuntur enim omnis accusamus Quis dolorem similique dolorem. qui velit illum ea. Repellendus necessitatibus error corporis nemo. Voluptas dolore ut doloremque est. Similique eligendi rerum velit deleniti. Consectetur dolorem doloribus dolores quis voluptatem et. Reprehenderit <a title=\"Veniam omnis.\" href=\"http://www.okuneva.biz/doloremque-adipisci-modi-exercitationem-voluptatem-quo\">impedit dicta voluptatem</a> qui. Dignissimos ut quo non. Nihil sit beatae porro quos ab.</p>

<hr>
',
                'post_title' => 'Placeat aut illo aut',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'placeat-aut-illo-aut',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 12:16:00',
                'post_modified_gmt' => '2016-03-26 12:16:00',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=44',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 45,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:50',
                'post_date_gmt' => '2016-03-27 09:23:50',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 45,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:50',
                'post_modified_gmt' => '2016-03-27 09:23:50',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/48ecdbab-24fa-3c5e-95ed-d7015da87d14.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 46,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:55',
                'post_date_gmt' => '2016-03-27 09:23:55',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 46,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:55',
                'post_modified_gmt' => '2016-03-27 09:23:55',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/7e47b9a4-7bed-3284-9729-b40e24d9e376.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 47,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:23:58',
                'post_date_gmt' => '2016-03-27 09:23:58',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 47,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:23:58',
                'post_modified_gmt' => '2016-03-27 09:23:58',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/36ecd221-e156-354b-a451-488c4bc26034.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 48,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:00',
                'post_date_gmt' => '2016-03-27 09:24:00',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 48,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:00',
                'post_modified_gmt' => '2016-03-27 09:24:00',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/6d2f8db0-3b26-3ca3-8a3b-71473e8bfef4.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 49,
                'post_author' => 1,
                'post_date' => '2016-03-26 19:31:41',
                'post_date_gmt' => '2016-03-26 19:31:41',
                'post_content' => '<p><img alt=\"Maiores eius totam et nihil\"></p>

<h6>Sint adipisci enim et ad. Sunt dolores consequatur non placeat ex perspiciatis commodi. Dicta non quod modi. Qui iure et commodi fugit ad quasi et</h6>

<p>Adipisci est in ut. Harum temporibus dolorem sed tenetur. sed doloremque animi odit qui. Asperiores quis fugiat iusto et <a title=\"Earum ut et voluptatem aut.\" href=\"https://funk.biz/voluptates-voluptas-rem-ratione-blanditiis.html\">dolores. Sint repellendus aspernatur</a> error voluptas. enim aut et <a title=\"Omnis corporis consequatur et.\" href=\"http://www.labadie.biz/incidunt-aut-dicta-neque-corrupti-magni\">est. Dignissimos velit dolor voluptas sed. Consequatur</a> voluptate ducimus nostrum. Et aliquid autem sit. possimus enim tempore consequatur pariatur. Occaecati aspernatur consequatur occaecati qui. Sit repellat <a title=\"Veniam quis molestiae.\" href=\"https://emard.com/omnis-consequatur-quidem-incidunt.html\">id officia</a> Cupiditate saepe placeat assumenda. delectus eveniet et qui iure cumque. Et hic modi. Qui beatae corporis tempore assumenda Cupiditate aut vero amet. quod sint qui ut. Et modi suscipit <a title=\"Quia est ut voluptas sapiente.\" href=\"http://www.hermann.com/\">praesentium eius nemo. Natus</a> <a title=\"Reprehenderit nihil et consequuntur sequi labore.\" href=\"http://kunze.com/quaerat-omnis-iusto-sunt-ex-tenetur-architecto\">aut</a> occaecati alias nostrum Inventore doloremque in nesciunt dolores. Sit cupiditate excepturi in consequatur non. voluptatem et et ducimus voluptate. Et numquam eaque nobis minus. numquam numquam maiores <a title=\"Consequatur aliquid.\" href=\"https://www.jones.com/modi-non-sunt-saepe-vitae-qui-soluta-voluptas\">fugiat hic fuga</a> <a title=\"Similique repudiandae rerum.\" href=\"http://www.crist.com/vero-numquam-possimus-sed-eaque-aliquam-unde-minima.html\">Et tempore</a> sapiente eos et Accusamus ducimus possimus sequi eveniet et Laudantium dolore ea <a title=\"Fugiat aut voluptas officiis laborum.\" href=\"http://www.hoppe.org/ut-enim-cupiditate-est-qui-vero-laboriosam-aut-exercitationem\">deleniti doloremque rerum aut. Omnis quod eligendi sint odio</a> Non quas optio facilis reprehenderit velit. Id distinctio nobis natus autem odio. Ab officia sit veritatis odit in. aut eos neque ullam. non eligendi molestiae. Ut modi sequi laudantium. eos praesentium unde. sed accusantium aut hic <a title=\"Accusamus consequatur aut aspernatur sapiente laboriosam.\" href=\"http://www.bernier.net/omnis-dolor-qui-velit-et-eveniet-quisquam-praesentium\">facilis et. Sit</a> aspernatur sunt ad. Necessitatibus molestiae est labore omnis dicta accusamus. Distinctio labore odit natus earum est. Iusto quia eos quaerat.</p>

<p><img class=\"aligncenter\" alt=\"Recusandae quia asperiores quos est explicabo nisi accusantium in\" src=\"http://wlc.app/wp-content/uploads/2016/03/48ecdbab-24fa-3c5e-95ed-d7015da87d14.jpg\"></p>

<p>Nihil in id distinctio dignissimos. Aut placeat blanditiis ut ea quo officiis. Illum deleniti quae nemo sunt. Ut aut est unde. Dignissimos error dolorem earum ut cum nihil exercitationem ratione. Nisi porro maiores ad hic. Quas architecto culpa quibusdam et vero in autem dolores. Totam officia ut optio. Optio sequi exercitationem sed et. Deleniti eligendi itaque minus. Debitis rerum iste sit sunt qui. Et ea saepe officia exercitationem accusantium delectus. Neque laboriosam rerum illum sint sed. Nobis molestiae pariatur aut id quia eligendi. Sed hic iusto voluptatibus ullam. Quis officiis et quidem et excepturi illum cumque. Consequatur ducimus reprehenderit expedita eum deserunt non quibusdam. Deserunt rerum impedit harum est. Atque quibusdam hic quaerat. Maxime sint ut ea mollitia harum. Ut laudantium quidem ut eveniet rerum quam quae. Ut autem accusantium iure sint. Illum id inventore odio sint. Possimus qui eveniet molestiae qui occaecati. Non omnis eaque aperiam est.</p>

<h4>Non adipisci voluptate nemo sit deleniti tenetur dolore aspernatur</h4>

<ul><li>Culpa quia eos</li><li>Dolor accusamus</li></ul>

<h2>Reiciendis a laboriosam mollitia ipsum. Veniam sit dolorum quis inventore et illum nesciunt. Saepe velit fugit harum labore ducimus animi</h2>

<hr>

<ul><li>Dolorem culpa autem odio</li><li>Sit incidunt modi illum et</li><li>Eos ratione quia adipisci</li></ul>

<h4>Expedita blanditiis dolor fuga sit a magnam. Ut nihil voluptatem at sed fugiat</h4>

<ul><li>Optio aliquid ea eum quia</li></ul>

<!--more-->

<p><a title=\"Est minus incidunt dolorum magnam ut placeat.\" href=\"http://www.schowalter.com/asperiores-dolores-voluptates-eum-explicabo-aliquam\"><a title=\"Sit blanditiis ab.\" href=\"http://www.mitchell.com/\"><a title=\"Quia architecto aliquam occaecati aspernatur dolor fugit iusto quas.\" href=\"http://www.schiller.com/sint-nulla-et-quisquam-saepe-et-eum\"><a title=\"Rem cumque sit.\" href=\"https://nienow.com/occaecati-sed-culpa-dolores.html\"><a title=\"At ratione error optio.\" href=\"http://conroy.com/sint-recusandae-quos-voluptate-dicta-unde\"><a title=\"Praesentium consectetur.\" href=\"http://waters.info/\"><a title=\"Sunt voluptatem quia molestiae.\" href=\"http://www.jones.biz/eos-corporis-quisquam-et-neque-assumenda-cumque-fugit\"><a title=\"Sit vel.\" href=\"https://simonis.net/est-enim-omnis-architecto-ipsum.html\">Dolores</a></a></a></a></a></a></a></a> corrupti molestiae velit eius voluptatem assumenda Architecto facere ut omnis rerum. Maxime fugiat dolores sint et id totam. Id nihil pariatur ut porro quas.</p>

<h3>Molestias odio rerum sapiente qui minima doloribus</h3>

<p>Quae eos et <a title=\"Architecto est accusamus possimus quo laudantium.\" href=\"http://www.watsica.biz/\">non distinctio nostrum. Aut quia quia</a> ducimus. Doloremque fugiat <a title=\"Dolores maiores ea ab.\" href=\"http://www.pfeffer.net/\">perferendis mollitia ex consequatur. Quaerat</a> <a title=\"Non incidunt recusandae autem.\" href=\"https://www.monahan.info/impedit-atque-iusto-aut-consectetur-expedita-qui-vel\">sit non natus. Quo</a> ex cumque et. provident est repudiandae optio qui quidem. Aspernatur dolor <a title=\"Quo consequatur.\" href=\"http://batz.com/eum-quidem-est-illo-molestiae-in-voluptatem-consequatur\">Facere sapiente</a> maiores occaecati magnam veniam quia.</p>

<h1>Quo omnis cum aut eligendi. Ut beatae expedita ipsum quod. Expedita neque laudantium voluptates perferendis</h1>

<p><img alt=\"Rerum incidunt dicta a maiores officiis\" src=\"http://wlc.app/wp-content/uploads/2016/03/7e47b9a4-7bed-3284-9729-b40e24d9e376.jpg\"></p>

<ol><li>Aut aut et rerum repellendus non</li><li>Rem provident vel</li></ol>

<blockquote>Totam quam porro officia quidem autem minima. Qui sed qui commodi aliquid. similique explicabo quisquam aut. Fugiat iure et earum. quis ut et. Qui temporibus rerum inventore blanditiis dolore. Suscipit sed officiis facere quis. Laborum nobis deleniti quo Veritatis quasi odit ea. Aut sunt quia incidunt sunt consequatur Accusamus cupiditate qui <a title=\"Consequatur laboriosam et non.\" href=\"http://www.abshire.com/rerum-reprehenderit-praesentium-unde-ex\">vel odio cumque rerum. Ut</a> voluptates eligendi veniam voluptatem magnam. Molestias eligendi quia consequatur aut. Ut totam eos voluptas vel Id sit sit inventore officiis odit beatae labore. provident cum atque et quaerat perspiciatis. Aspernatur provident cumque et quos nobis <a title=\"Placeat dolore.\" href=\"https://mills.com/similique-saepe-aut-occaecati-non.html\">Enim</a> aspernatur impedit deserunt rerum. Nisi eaque beatae. Placeat aut nostrum quo. Quo voluptas esse atque autem.</blockquote>

<p><img class=\"alignright\" alt=\"Placeat illo ut quas voluptates omnis\" src=\"http://wlc.app/wp-content/uploads/2016/03/36ecd221-e156-354b-a451-488c4bc26034.jpg\"></p>

<ul><li>Earum voluptatum dicta itaque</li><li>Ut soluta impedit sint assumenda</li><li>Tempore quam impedit animi dolores</li><li>Non a deleniti quia odit id</li></ul>

<blockquote>Necessitatibus voluptas autem quis quod temporibus molestiae similique. odio voluptatem et excepturi reiciendis Et nobis dolorum vero nihil Excepturi id corporis qui quam est repellat. <a title=\"Officia quo at.\" href=\"http://www.strosin.com/occaecati-non-distinctio-magni-explicabo\">ea omnis non ipsum est nisi.</a> quis qui dolorem itaque Beatae et qui quos nihil omnis. Dolore omnis cum eum provident quo. <a title=\"Quia molestiae voluptatum quaerat quas atque eius debitis.\" href=\"https://nikolaus.info/nihil-est-eveniet-voluptate-laboriosam-dignissimos.html\">ab</a> rem est dolore cumque. Autem voluptates velit in. <a title=\"Quo autem sit excepturi.\" href=\"http://schoen.com/eos-accusantium-itaque-ipsam.html\">itaque</a> praesentium ut voluptatem voluptate blanditiis. minus quia quod. Similique dolor perspiciatis dolorum numquam non id. Dolor enim sapiente. Perspiciatis porro consectetur aut et dolore. Quasi natus ea illo. Odit et <a title=\"Magni molestiae.\" href=\"https://www.kautzer.com/blanditiis-sed-vitae-repudiandae-et-quisquam\">eaque nesciunt ipsa nesciunt animi. Perspiciatis</a> possimus tempora porro. Sint officiis neque repellendus. Eum dolorum et ut est. Voluptas sit sit tenetur sit et odit. Ex quae quod autem nam. omnis quaerat molestias aut. Nobis delectus architecto perferendis. rem veniam labore totam laborum sed architecto. Neque rerum error laudantium. Consequuntur voluptatem ut <a title=\"Voluptatem.\" href=\"http://ferry.net/\">provident dignissimos non. Dolorem perspiciatis reprehenderit beatae laborum</a> Voluptas cumque maiores vel expedita accusantium quo.</blockquote>

<hr>

<h3>Iusto et magni consectetur repellat</h3>

<p><img class=\"aligncenter\" alt=\"Ducimus velit ut corrupti non repellat voluptatem laborum\" src=\"http://wlc.app/wp-content/uploads/2016/03/6d2f8db0-3b26-3ca3-8a3b-71473e8bfef4.jpg\"></p>
',
                'post_title' => 'Esse debitis officia enim aspernatur repudiandae in',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 'esse-debitis-officia-enim-aspernatur-repudiandae-in',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 19:31:41',
                'post_modified_gmt' => '2016-03-26 19:31:41',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=49',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 50,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:03',
                'post_date_gmt' => '2016-03-27 09:24:03',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 50,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:03',
                'post_modified_gmt' => '2016-03-27 09:24:03',
                'post_content_filtered' => NULL,
                'post_parent' => 49,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/038a0340-255f-3d34-a2f1-72508ecaf815.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 51,
                'post_author' => 1,
                'post_date' => '2016-03-26 04:24:20',
                'post_date_gmt' => '2016-03-26 04:24:20',
                'post_content' => '<h3>At neque et rerum aliquam qui. Enim ullam vel quos debitis nobis. Et aspernatur et aut rerum delectus aspernatur vitae</h3>

<blockquote>Quia voluptas repudiandae fugiat. Sunt praesentium tempora Aliquam rerum omnis voluptatem adipisci eum magni aliquid. Est nemo ipsum et voluptatem. in voluptate qui sit ipsam. Enim enim et esse corporis. Qui fugit perspiciatis adipisci placeat sed. <a title=\"Aliquam dignissimos.\" href=\"http://www.kshlerin.com/explicabo-perferendis-error-voluptatum-aut-accusamus.html\">optio tenetur consequatur quam voluptatum quia.</a> aliquid praesentium commodi vitae consequatur reprehenderit ea. natus provident voluptates. Eos ea id ea delectus assumenda. Atque nam totam vel. Veritatis error occaecati eos <a title=\"Aut aliquid quae quo animi.\" href=\"http://cruickshank.com/incidunt-vel-quo-facilis-atque-dolor-blanditiis-molestiae-dolorem\">Perspiciatis</a> deleniti rerum ut ratione provident. Officia voluptates ut iusto quam Ea eum cum aliquid earum sed. Veritatis quos odio eum enim aut. eveniet ut rerum quae repudiandae vitae molestias</blockquote>

<h2>Quae dolores non excepturi illo ab. Possimus a ex dolor</h2>

<!--more-->

<blockquote><a title=\"Consectetur dolorum.\" href=\"http://www.johnston.com/quia-odit-illum-quo-ea-nulla\">Totam ipsa facere earum</a> enim. Qui earum itaque eius illo delectus. quisquam doloremque eos cumque veniam eveniet assumenda. Occaecati voluptatibus <a title=\"Rerum ratione cupiditate molestiae.\" href=\"http://graham.com/deserunt-esse-voluptatem-praesentium\">iste</a> <a title=\"Expedita provident et voluptates laudantium.\" href=\"http://www.koelpin.org/fugit-sed-dolore-repudiandae-doloribus-doloribus-fugiat-dolorem.html\">et. Dolor dicta adipisci sed alias doloremque</a> est Et facilis saepe sint eos illum. Ratione aliquam et beatae perspiciatis <a title=\"Quis doloribus voluptas.\" href=\"http://hoeger.com/et-repellat-ratione-reiciendis-possimus-quia-harum-tempore\">rem</a> Consequuntur voluptatem ducimus libero. Quas consequuntur ratione sit omnis Consectetur deserunt voluptatem hic non. <a title=\"Tempora ut.\" href=\"http://turcotte.biz/\">deserunt sed nemo et explicabo. Repellat</a> <a title=\"Ut nostrum dolorum modi.\" href=\"http://www.mcglynn.com/quasi-quidem-molestiae-a-accusantium-exercitationem\">voluptas voluptatem neque</a> cum. Numquam natus iste ut aspernatur tempora nobis vel.</blockquote>

<ul><li>Sit qui iste quia</li><li>Est et esse ab et repudiandae</li><li>Id voluptas</li><li>Omnis cumque in quaerat repellendus</li></ul>

<hr>

<hr>

<p><img class=\"alignright\" src=\"http://wlc.app/wp-content/uploads/2016/03/fd1ddf04-c5b2-30dd-936f-e8b601139770.jpg\"></p>

<h3>Nesciunt ipsa est at iste. Optio accusamus dolorum quidem quasi sunt mollitia. Doloremque ullam accusantium molestiae eos expedita</h3>

<ol><li>Dolorem error</li><li>Adipisci doloribus id illum quod</li><li>Unde animi animi ut sunt</li><li>Laboriosam excepturi placeat et et</li><li>Provident molestiae ut</li><li>Odit incidunt aut sunt ut</li></ol>

<hr>

<h6>Qui commodi eum nihil laborum non</h6>

<ol><li>Sit est iste veniam rerum</li><li>Ut blanditiis</li></ol>

<h1>Quo et autem laudantium sint illo qui. Est et sed sit placeat sunt voluptas. Quia debitis et maiores</h1>

<p>Hic maiores vel odit eaque atque molestiae. Provident ab eaque qui Ratione qui non est est. Qui quam ipsam ex exercitationem ipsum sit. Est tempora id eaque est voluptatem quis Nesciunt et nemo eius et. fugit accusantium id aut fuga Qui cum ea provident vel illum quod. Quos ut iure temporibus Corrupti maxime quas voluptatem iure Neque architecto autem consectetur quia ut Soluta quidem enim enim rerum dignissimos doloremque. Sunt et non. Necessitatibus voluptate repellendus quae ut quas eos excepturi. Reprehenderit eum et qui voluptas tenetur. suscipit magni voluptatem id. aut atque voluptas temporibus praesentium rerum. Ipsum eos et ut aliquam Repudiandae atque necessitatibus ipsam sapiente accusantium ratione. vel et atque. et qui esse esse cum nobis. Delectus id culpa provident. dolores iste ut. aperiam cum consequatur. sed <a title=\"Doloremque fuga accusamus incidunt odio ad sed impedit voluptatem dolores.\" href=\"https://wiza.com/voluptas-totam-sed-dolor-accusantium-ab-maxime-quo.html\">reprehenderit. Magni dolorem deserunt at voluptatum.</a> nulla sunt non consequatur omnis Rerum beatae consequuntur minus dicta dolor at corrupti. Minima magni quia dolores aut nulla. Quis ut dolor sed. pariatur tenetur magnam nesciunt <a title=\"Itaque voluptate consequatur sequi.\" href=\"http://nolan.info/\">et. Id et</a> iste perspiciatis. Sit ut eos sunt iste. Et odio distinctio qui ut vero. illo non quia. Corrupti rerum aut dignissimos voluptas quae. Qui molestiae commodi est totam cum. provident officiis. Est cumque aliquam aspernatur quas nostrum alias sequi. qui impedit quod ea. Est accusantium reiciendis asperiores et ut inventore. qui voluptate et ea. Vitae officia ea accusantium. Eligendi eveniet vitae minus saepe. Placeat itaque sit alias Quod odio et. Quis quisquam quam delectus soluta assumenda ex.</p>

<h6>Eos illum in est distinctio sequi dolores repudiandae. Vitae hic quisquam neque quia totam eius optio</h6>

<ul><li>Vel esse minus hic animi labore ut vel</li></ul>

<blockquote>Quaerat quisquam assumenda voluptas aut temporibus. autem eum reiciendis ex dolorem. Est accusamus cum corrupti aut occaecati ut. Eos <a title=\"Accusamus iste alias sit.\" href=\"http://www.strosin.com/ipsa-et-enim-voluptas-dolorem-laudantium\">veniam distinctio</a> est cumque aliquam sed. Facere facilis est laudantium omnis animi similique. Ut sapiente repellendus quidem <a title=\"Ea temporibus sed recusandae est inventore sunt.\" href=\"http://cummings.org/accusantium-ipsa-eos-dolore-sed-placeat-ea\">veritatis. Dolor culpa</a> distinctio corrupti omnis. Architecto beatae incidunt ut <a title=\"Est.\" href=\"https://schaefer.com/totam-at-illum-sed-et-voluptatem.html\">Voluptatem provident non nihil</a> velit perferendis <a title=\"Dolorem voluptas non culpa.\" href=\"http://corkery.biz/nemo-rem-quo-hic-deserunt-enim\">Iste praesentium minus consequatur consectetur.</a> et corporis dolor asperiores ea. Eveniet adipisci quos <a title=\"Tempora est.\" href=\"https://www.rohan.com/magnam-reiciendis-qui-sed-corporis-architecto\"><a title=\"Consequatur ipsum.\" href=\"http://www.witting.com/sed-aspernatur-qui-et-esse-vero-et-et-labore\">Non voluptatem et alias</a></a> Ut debitis delectus quia a. Eligendi id et expedita et Vitae harum sint maiores perferendis. Dolorum <a title=\"Et aliquam.\" href=\"http://www.feeney.net/laudantium-ducimus-et-animi\">animi</a> dignissimos <a title=\"Et reiciendis asperiores.\" href=\"http://www.bahringer.net/omnis-laudantium-numquam-aut-et.html\">porro. Expedita natus et occaecati fuga</a> saepe dolorem. Quisquam accusantium sit voluptatum. provident quia.</blockquote>

<p><img alt=\"Ut et minus ut sit atque consectetur minima fugiat excepturi molestiae\" src=\"http://wlc.app/wp-content/uploads/2016/03/95e085b3-9a65-33b4-a87a-3acb55a530a1.jpg\"></p>

<h2>Aspernatur labore suscipit voluptas sunt facilis. Enim quis reiciendis eius. Ipsam commodi consequatur adipisci id ex</h2>

<hr>

<p>Adipisci commodi repudiandae recusandae iure commodi et modi. Ut quidem corporis aut vel. Est amet non expedita unde. Occaecati qui aut illo odit eum. Non aliquid voluptatibus Placeat beatae repellendus eveniet quibusdam maiores <a title=\"Similique repellat nostrum natus.\" href=\"http://homenick.biz/\">voluptatem. Blanditiis sed qui blanditiis</a> dolores ea. Et ad et temporibus Optio doloribus eos nostrum. Esse a aperiam harum eligendi expedita. dolore <a title=\"Rerum quisquam.\" href=\"http://schiller.net/\">iusto doloremque</a> Ipsum nostrum et rerum optio dolorum Explicabo culpa incidunt ut. Cum sit quasi dolores numquam. <a title=\"Exercitationem autem repellendus quia maxime id natus.\" href=\"http://morissette.org/at-provident-ducimus-ullam-quae-voluptatem\">officiis amet tempora.</a> minima temporibus Ratione omnis sint animi et consequatur perspiciatis. laborum ullam nam. Eveniet accusantium quod sed ut id rerum. Illo sed sint <a title=\"Illo voluptatem vel.\" href=\"https://www.block.com/omnis-perferendis-ab-at\">Fuga est</a> aut fuga. Porro pariatur est. Libero tempora aut dolores quisquam vel temporibus. rerum quaerat odit. Molestiae qui enim aut. Omnis nesciunt molestiae optio sunt <a title=\"Recusandae.\" href=\"http://yost.com/\">Esse nulla ut expedita consequatur impedit</a> magnam. Vitae tempora molestiae error adipisci.</p>

<ul><li>Ut quos facilis ut nostrum eum eveniet</li></ul>

<ul><li>Asperiores aut</li><li>Eaque est perspiciatis assumenda molestiae</li><li>Quia suscipit id ea sit</li><li>Omnis iste dolores cum iusto</li><li>Itaque esse vitae pariatur molestiae</li><li>Sunt maxime debitis nam</li></ul>
',
                'post_title' => 'Eum aut est consequatur doloremque libero assumenda',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 'eum-aut-est-consequatur-doloremque-libero-assumenda',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 04:24:20',
                'post_modified_gmt' => '2016-03-26 04:24:20',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=51',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 52,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:04',
                'post_date_gmt' => '2016-03-27 09:24:04',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 52,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:04',
                'post_modified_gmt' => '2016-03-27 09:24:04',
                'post_content_filtered' => NULL,
                'post_parent' => 51,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/bc516291-4418-3b84-88ba-b4ac3c47e837.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 53,
                'post_author' => 1,
                'post_date' => '2016-03-26 14:43:18',
                'post_date_gmt' => '2016-03-26 14:43:18',
                'post_content' => '<h5>Qui hic maiores quis et. Placeat veritatis est totam</h5>

<hr>

<!--more-->

<ul><li>Sed modi</li><li>Qui provident esse ducimus esse et sequi</li><li>Iusto ut consequatur omnis</li><li>Aut error et maxime qui rem voluptates illum</li></ul>

<h6>Corrupti exercitationem incidunt modi unde et facilis aut</h6>

<blockquote>Error et est ipsa quod. Ipsa nostrum provident molestiae. Qui est sit adipisci omnis optio corrupti molestias. Voluptatem delectus sint ipsa tenetur iusto et impedit. Neque consequatur aut rem et. Unde laboriosam earum aspernatur ipsa deserunt. Corporis accusamus tempora tempore consectetur ex quas. In aut dolor repellendus dolorem dolorem ipsa. Ipsam quis recusandae explicabo dolores quam consequatur reiciendis. Earum voluptatem totam dolore et. Rerum rem eum neque consequatur distinctio. Quod numquam optio unde iusto pariatur sit. Qui possimus debitis quas nihil temporibus saepe aut. Animi laudantium in at impedit nihil officia. Quam enim aut eum atque dolorem eveniet labore. Est iure aut repudiandae aut asperiores placeat. Suscipit suscipit aliquam aut quasi occaecati dolor qui. Rem quia aut eaque pariatur. Cumque quis officia voluptas est qui minus cupiditate rerum. Rem et blanditiis nostrum qui impedit nemo. Mollitia ut omnis labore ratione accusantium eveniet repudiandae. Rerum ea praesentium nisi est voluptatibus nesciunt. At consequatur est fugiat qui ab natus culpa nulla. Quis temporibus et molestias maiores. Rem aliquid sunt vel pariatur. Voluptatibus provident harum voluptatem quae eveniet possimus. Atque non molestiae reiciendis reiciendis excepturi nesciunt mollitia. Optio excepturi occaecati hic animi nihil. Et eligendi nostrum molestias dicta neque ipsa. Corrupti debitis consectetur at eum aliquid quis. Laudantium et ipsum ex et dolorem qui.</blockquote>
',
                'post_title' => 'Perferendis eius totam saepe beatae facere',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'perferendis-eius-totam-saepe-beatae-facere',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 14:43:18',
                'post_modified_gmt' => '2016-03-26 14:43:18',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=53',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 54,
                'post_author' => 1,
                'post_date' => '2016-03-26 13:58:40',
                'post_date_gmt' => '2016-03-26 13:58:40',
                'post_content' => '<ul><li>Modi ipsam odio voluptatem sed</li><li>Corrupti enim est est</li><li>Saepe quidem in</li><li>Aspernatur et consequatur quo autem nulla qui</li><li>Cupiditate accusantium nisi accusamus quis</li></ul>

<h4>Fugit sit itaque voluptatum repellendus ut</h4>

<blockquote>Facere eum deserunt porro vero. Tenetur est ut ut labore eos consequatur. iste repellat <a title=\"Eaque cum repellendus ex ea aspernatur expedita et expedita porro.\" href=\"https://marquardt.com/voluptatem-quae-id-harum-dolore-ducimus-similique-in.html\">aperiam et. Laboriosam animi</a> <a title=\"Numquam.\" href=\"https://www.beahan.biz/amet-ea-explicabo-consequuntur-quod-et-autem\">repellat voluptatem eligendi. Earum</a> sed vero pariatur Tenetur commodi voluptas totam alias. totam eius esse. Voluptatum quidem a qui adipisci. Quidem beatae voluptas. Qui <a title=\"Quasi in aut exercitationem ipsa repudiandae.\" href=\"http://pouros.com/at-ullam-labore-eaque-voluptatem-pariatur-inventore-distinctio\">blanditiis quam impedit voluptatem</a> ut. Necessitatibus laborum iure aspernatur <a title=\"Qui iure.\" href=\"http://www.wyman.com/officiis-quia-et-mollitia-dolor-eligendi-laborum-ex-iusto.html\">debitis delectus voluptas. Expedita</a> eveniet sit. Optio dolores cupiditate blanditiis impedit architecto ducimus.</blockquote>

<h5>Praesentium repudiandae fugiat rerum voluptatem quam. Nemo qui error similique. Reiciendis itaque dolor minus modi aut quos</h5>

<ol><li>Ad ipsam corporis at alias</li><li>Dolor nam rerum vel distinctio quis consequatur</li><li>Praesentium aut dolor consequuntur ipsa</li><li>Tenetur cum atque</li><li>Voluptas et iure rerum minus</li></ol>

<!--more-->

<h4>Error porro qui repellendus totam. Tempore tempora perspiciatis voluptatum</h4>

<hr>
',
                'post_title' => 'Vel nostrum rem veritatis quia voluptate est',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'vel-nostrum-rem-veritatis-quia-voluptate-est',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 13:58:40',
                'post_modified_gmt' => '2016-03-26 13:58:40',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=54',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 55,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:07',
                'post_date_gmt' => '2016-03-27 09:24:07',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 55,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:07',
                'post_modified_gmt' => '2016-03-27 09:24:07',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/e3736fb9-d9cc-30bb-944d-e055635be144.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 56,
                'post_author' => 1,
                'post_date' => '2016-03-26 03:43:38',
                'post_date_gmt' => '2016-03-26 03:43:38',
                'post_content' => '<h2>Consequuntur quia tempore repellat. Sunt deleniti voluptatem eaque. Maiores minima qui dolor voluptatem. Natus ab ut facere illum</h2>

<p>Perspiciatis suscipit qui porro voluptates Voluptatem voluptates <a title=\"Ut fugiat deleniti voluptate repellat.\" href=\"http://www.ryan.com/\">autem est aspernatur ratione. Autem</a> et omnis accusamus blanditiis autem Repellat libero asperiores exercitationem <a title=\"Aperiam earum.\" href=\"http://schaden.com/\">vel. Possimus distinctio</a> rerum rerum. Aperiam nobis maxime excepturi fugit. Quod qui et corporis est iure. eaque eos exercitationem. Doloribus dolor rerum nulla dolor. quo <a title=\"Officia.\" href=\"http://www.ernser.com/debitis-blanditiis-esse-explicabo-voluptatem-rerum-cum\">officiis</a> omnis Id consequatur voluptatem voluptas ut voluptatem Dignissimos atque et quis cumque hic. eveniet enim alias assumenda. <a title=\"Quas aut quibusdam fugiat voluptas dicta sed.\" href=\"http://www.walsh.biz/\">accusamus doloremque</a> <a title=\"Nemo dolore ex nihil.\" href=\"https://www.purdy.info/repellendus-est-voluptates-perferendis-aliquid-officiis-eligendi\">maxime.</a> repudiandae et assumenda est voluptatem aliquid perferendis. atque nihil assumenda voluptas magnam architecto. dolorum possimus totam ut et similique nesciunt. Voluptas nisi non eum ducimus. Qui adipisci hic corporis officia quia error facere. Quis iusto odio vero <a title=\"Optio.\" href=\"http://rice.info/voluptatem-optio-sit-quas-accusamus-quas-ea-temporibus-ipsam.html\">sunt. Mollitia</a> molestiae rerum unde veritatis facilis neque <a title=\"Ab quos labore adipisci earum.\" href=\"http://www.jerde.biz/adipisci-sint-iste-et-dicta-quae-amet-est-quia\">Ullam hic harum</a> ea rerum ratione. Consequatur alias neque facilis mollitia et Est totam possimus ab sed similique quia. quis voluptas rem voluptatem et porro Sit eum <a title=\"Quia modi quae.\" href=\"http://nader.com/\">est qui quo dolorum. Nihil</a> ea accusamus et reiciendis. repudiandae molestiae autem aliquid facilis cupiditate. Maxime consequatur omnis autem qui Qui delectus qui maiores odit ut. mollitia est quo</p>

<h6>Itaque ipsum ipsa minima ut quibusdam dolor recusandae. Ipsum eligendi atque autem. Nam officia incidunt minus sed</h6>

<p><img src=\"http://wlc.app/wp-content/uploads/2016/03/ab7bc2b6-fb25-3654-af7a-181effb0cb4a.jpg\"></p>

<ol><li>Qui nulla</li><li>Sunt sequi odio at eos ad</li><li>Aut sit assumenda et natus</li><li>Voluptatum sit cumque magni nisi</li><li>Ea ipsa numquam iure ea</li></ol>

<!--more-->

<h3>Aut enim omnis aperiam eos provident voluptates eaque</h3>

<ol><li>Eos at minima ex ut</li><li>Odio aliquam earum</li></ol>

<p><img alt=\"Quo animi tempora ipsum dolor placeat qui suscipit occaecati excepturi\" src=\"http://wlc.app/wp-content/uploads/2016/03/e3736fb9-d9cc-30bb-944d-e055635be144.jpg\"></p>

<h2>Reiciendis occaecati eum dolore. Non ipsam maiores dolor itaque similique. Est non consequatur in sint</h2>

<blockquote>Quia quo doloribus sint. Quia praesentium voluptatem possimus quis ut harum accusamus. Eveniet cum rerum et sit autem. Delectus nihil aliquam dignissimos. Beatae reiciendis soluta perferendis sed dicta. Blanditiis voluptas non ipsum perferendis. Mollitia non velit magni ducimus. Ut ullam et sit velit quam rem. Veniam impedit asperiores soluta veritatis unde. Consequatur aut maxime voluptatem a. Est nesciunt possimus animi quod maiores tenetur corporis sit. Fugiat aliquid neque qui. Animi voluptatem corrupti quis odit nesciunt excepturi officiis. Quis quis iste sunt dolores molestiae est eveniet sit. Saepe perferendis repellat et deserunt quidem. Et exercitationem repellat et unde est laborum hic et. Veniam neque aut et beatae. Harum necessitatibus et ipsa minus velit. Magnam similique qui aspernatur omnis dolorem libero quos itaque. Et iure molestias consequatur ipsa blanditiis ipsa. Vel animi officiis qui veniam. Quas totam quod iusto commodi saepe suscipit. Ut et inventore qui vitae qui deserunt corrupti. Sapiente fuga est recusandae earum vel ut possimus et.</blockquote>

<hr>

<h4>Distinctio hic consequatur dolore aliquid. Voluptas adipisci fugit quia ut hic. Consequatur aperiam illum dolorem</h4>

<blockquote>Corporis aut iste et nam autem qui. dolor ut labore velit et qui. Impedit <a title=\"Non distinctio.\" href=\"http://torp.com/reprehenderit-ratione-cupiditate-fugit.html\">dolorem</a> repudiandae. In voluptas repellat nihil. Nihil exercitationem repellendus dolore et dolores Asperiores <a title=\"In voluptatibus.\" href=\"https://www.lueilwitz.com/ut-dolores-et-eum-deleniti\"><a title=\"Sint velit.\" href=\"http://www.purdy.info/voluptas-repellendus-impedit-aut-ut-voluptatem\">dolorem explicabo</a></a> Eos velit eum optio doloribus architecto quas. Mollitia natus non est veniam sit. illum voluptas maxime quia perspiciatis dolorum quia. Similique quia quos magnam dolor. Sapiente tempora ex <a title=\"Repellat suscipit est quidem occaecati.\" href=\"http://www.sanford.info/eaque-minus-impedit-inventore-id.html\">non repellendus. Iure excepturi</a> velit odit voluptas quod.</blockquote>

<ul><li>In sint vero rerum incidunt debitis accusantium</li><li>Quibusdam</li><li>Consequuntur rerum reiciendis ut</li><li>Labore laboriosam et molestiae est eos</li><li>Officia in reprehenderit consequatur</li><li>Accusamus accusamus architecto adipisci nostrum</li></ul>

<p>Illum sit fugiat ut quaerat et harum. Voluptatem quos qui cumque voluptatibus repellendus laudantium voluptatibus. Et velit harum aliquid. Eum quibusdam temporibus Neque voluptate voluptatibus voluptatibus in. Nihil quasi pariatur. Id veritatis rerum maxime cum est. assumenda iusto exercitationem molestias temporibus Ratione ut enim ad. Distinctio illo ab. fuga et unde illum nihil. ducimus aut est fugit ipsa quaerat. velit odit eum id reprehenderit et autem. eum tempora <a title=\"Nihil architecto aliquid.\" href=\"http://huels.com/velit-qui-ea-exercitationem-id-vitae-iure-in.html\">consequatur ducimus. Doloribus</a> corrupti ad qui quis autem</p>

<h4>Facilis voluptas corporis doloremque inventore. Quaerat ex inventore ad dolor dolor. Itaque rerum rem ipsa pariatur libero expedita. Dolores eaque tempore voluptatem mollitia</h4>

<p>Est sit expedita illo unde. Ut saepe odio est amet Est doloribus nemo possimus accusantium sunt. Tempora numquam <a title=\"Aliquid omnis nisi.\" href=\"http://green.com/voluptatem-tempore-accusantium-distinctio\">tempore</a> molestiae Placeat ut ipsa omnis. Qui repellendus molestiae ipsam. Cupiditate cumque fugiat doloribus voluptatem culpa in. sit qui dolorem dolores. Architecto quaerat dolores beatae Accusamus et voluptatem sit ratione saepe pariatur. Omnis velit qui nisi. Dolorem rerum dolor quaerat. architecto soluta explicabo voluptatem eligendi ipsum. Et natus esse alias. Aut similique reprehenderit molestiae cum. Earum beatae quia labore consequuntur. Voluptatem et nihil asperiores quasi Blanditiis et quos et quis quod.</p>

<p><img class=\"aligncenter\" alt=\"Doloremque dolor aliquam et temporibus\" src=\"http://wlc.app/wp-content/uploads/2016/03/0013b37f-3a99-3e5f-aee8-e6f4c5fd7098.jpg\">
<img class=\"aligncenter\" src=\"http://wlc.app/wp-content/uploads/2016/03/6d2f8db0-3b26-3ca3-8a3b-71473e8bfef4.jpg\"></p>

<blockquote>Et illo et aut et Nam reprehenderit expedita qui libero consequatur. In officiis quia. Ex voluptatem delectus autem quia et vel. provident blanditiis consequatur autem dicta tempora similique. Molestiae quia pariatur modi veniam cum. qui molestiae in molestias magnam. doloribus corrupti illum corrupti. Sit sunt magni suscipit ut. Sint tempora sequi similique. Est similique beatae similique pariatur <a title=\"Voluptatem repellat perspiciatis et suscipit ex quia.\" href=\"http://www.marks.org/possimus-et-harum-incidunt-eaque-omnis-cupiditate-voluptatem\">voluptatem. Consequatur</a> qui ut ex sequi Quasi non totam. nesciunt pariatur omnis eum beatae. Iure eius quisquam illo modi velit. Fugit omnis repellat accusantium est. et omnis explicabo dolor. Nobis quam doloribus eum eum. quidem ullam occaecati aut illum eum. Voluptas vero inventore harum eligendi autem quis Sit repellendus accusamus aspernatur et autem similique corporis. Illum temporibus nobis nisi et. Vero voluptatem eos enim officiis corrupti Molestiae ut non commodi. Molestiae quos sit odio. aut sit officiis impedit. Fuga alias quibusdam eius libero ipsam. asperiores iste exercitationem est vel error Rerum non accusantium laboriosam repudiandae quia nemo. Tempore nobis sit voluptatem. Sapiente eaque ea quisquam. Aliquam id magni suscipit voluptate. asperiores ratione quia dolorum voluptates. Voluptatem tempore expedita. Deserunt officia rerum voluptatem molestiae enim. Maiores fugiat tenetur quo natus. Distinctio qui impedit quod impedit. Inventore asperiores minima minus incidunt atque. Numquam est aut ipsam vitae Ut voluptates neque quas quas. Molestias sequi quo adipisci sequi et Aliquid tempora asperiores consequuntur. Dolor nihil quam qui illum Quia numquam quasi dolor deleniti. Aliquid voluptas sint veritatis eum. Aut quos quibusdam pariatur.</blockquote>
',
                'post_title' => 'Aut deleniti et delectus qui',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 'aut-deleniti-et-delectus-qui',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 03:43:38',
                'post_modified_gmt' => '2016-03-26 03:43:38',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=56',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 57,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:09',
                'post_date_gmt' => '2016-03-27 09:24:09',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 57,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:09',
                'post_modified_gmt' => '2016-03-27 09:24:09',
                'post_content_filtered' => NULL,
                'post_parent' => 56,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/e0cbeb6a-b861-3ae0-ba5c-e6a8507949f6.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 58,
                'post_author' => 1,
                'post_date' => '2016-03-26 13:29:23',
                'post_date_gmt' => '2016-03-26 13:29:23',
                'post_content' => '<h4>Ad quidem dignissimos est libero. Quas ea totam aut hic porro</h4>

<hr>

<ul><li>Quae quibusdam autem officiis odio adipisci eius</li><li>Nostrum</li><li>Ex et porro et aspernatur repellat ad pariatur</li></ul>

<h4>Ratione autem culpa et labore. Voluptatem neque et nulla aut quia. Molestiae dolores quasi accusantium ut suscipit vero</h4>

<!--more-->

<p>Harum suscipit temporibus maxime rerum qui repellat fugiat Architecto eum facilis ut <a title=\"Dolore eos sint nisi.\" href=\"https://brakus.com/velit-illo-in-blanditiis-sit.html\">rerum neque. Cumque voluptate sunt quas nihil</a> Eum rerum aut <a title=\"Modi perferendis.\" href=\"http://www.mccullough.com/sunt-occaecati-facilis-aut-ullam-commodi-magnam\">dolorem ad recusandae.</a> possimus ad veniam nihil. Ea quibusdam ea voluptas Est magni ut soluta voluptas asperiores. Sit saepe totam animi dolores. Quis laudantium amet cupiditate nihil nihil. deserunt molestias quam. <a title=\"Odio suscipit.\" href=\"http://www.haag.biz/eius-reiciendis-ipsum-sit-dolor-et-architecto-eum\">omnis incidunt</a> est. Ad unde veniam voluptas. Quas ex minima quasi temporibus beatae. Quo <a title=\"Cumque iste nihil consequatur repellendus.\" href=\"http://www.gorczany.org/corporis-ducimus-omnis-quae-molestiae-molestiae.html\">odit</a> <a title=\"Optio suscipit consequatur sed.\" href=\"https://brown.com/pariatur-molestias-aliquam-sed-vitae-et.html\">Ducimus distinctio sint commodi odio vero</a> Fuga incidunt atque ipsam eos voluptas exercitationem. qui mollitia eius. molestias fugit <a title=\"Dolor quod natus voluptas et consequatur incidunt ab cum voluptas.\" href=\"http://www.ernser.com/quia-aliquid-aut-debitis-rerum-consequatur-consectetur.html\">expedita voluptatem molestiae. Debitis qui doloribus</a> sint. qui quo veniam molestias necessitatibus. Voluptatibus quis dolorum aut cumque odio <a title=\"Vel blanditiis sed explicabo distinctio cupiditate aperiam.\" href=\"http://www.johnston.info/ipsum-provident-quod-dignissimos-perspiciatis-omnis-aut-vel\">asperiores. Quisquam iste aliquid aliquid</a> beatae commodi et. Dignissimos corrupti rerum Et aut est Eum nam est. Sed quaerat dolores totam corporis harum molestiae.</p>

<ul><li>Quas omnis et doloribus et rerum</li><li>Et ut pariatur vel deleniti ducimus</li><li>Atque qui a</li><li>Rerum</li><li>Praesentium enim eos eaque</li><li>Ut in et</li><li>Sed maiores quia ea aut</li></ul>

<blockquote><a title=\"Eligendi culpa quis nulla.\" href=\"http://streich.info/facilis-eaque-velit-est-repudiandae\">Ducimus</a> id consectetur Impedit dolores voluptas laborum deserunt Veniam porro aut nulla voluptates totam Minus et cupiditate incidunt velit dolorem Maxime asperiores rem voluptatum dolore animi Sunt corporis excepturi quaerat deleniti voluptas. sapiente vel odit. Esse quod tempora explicabo. id qui qui. Velit inventore aliquid explicabo deserunt neque eum. Nobis recusandae Magnam dolore officiis ipsam Est similique qui officia. nemo maxime deserunt quia totam maiores. Voluptatum sed aliquid beatae molestiae et. molestiae rerum autem nulla. Consequatur blanditiis perferendis voluptas sed. Quia voluptatem velit quae <a title=\"Iure at.\" href=\"http://harvey.info/\">Voluptas ut non excepturi</a> Sequi quo amet laudantium nam Omnis et quam minus maiores. Cum est sit autem ut. Molestias distinctio quibusdam sint aut reiciendis voluptatem. odit praesentium possimus molestias in cumque et. Corporis sit temporibus voluptatem dolor. sit pariatur sed rerum est qui. Vel earum ut. Asperiores ea numquam quo Id expedita voluptatem est rerum. Veniam deleniti quibusdam tempora voluptatem tempora. aut sit ut. <a title=\"Eveniet magnam ut dolores quod.\" href=\"http://www.zieme.org/sed-error-ut-ipsum-aliquid-nihil-aut\">culpa cupiditate nihil</a> Reiciendis in inventore vel qui. magnam excepturi placeat Sapiente qui sed. corporis et.</blockquote>

<h4>Optio consequatur aut ad numquam. Voluptatem sed deleniti quas non et aut et. Dolorum quis porro reiciendis impedit quisquam</h4>

<ul><li>Nemo praesentium facere et</li><li>Quas quam vel</li><li>Maiores fugit</li><li>Distinctio quia sed ut</li><li>Voluptate et assumenda sit similique vel</li></ul>

<p>Aut tempore quia nulla qui tempora aut recusandae. Corporis mollitia ullam laboriosam explicabo sunt. Et quaerat est maiores minima. Aliquam excepturi libero non Qui tenetur consequatur blanditiis doloribus enim. Ipsum rem rerum laboriosam Ut saepe dolorem quaerat. Dignissimos fugiat commodi debitis corporis qui. Qui minima eius provident natus vel. Possimus saepe officia laborum vel facere nihil consequuntur. Aperiam ut et <a title=\"Laudantium.\" href=\"http://www.lubowitz.com/nostrum-aut-illo-quisquam-voluptas-et-qui-provident.html\">quidem accusamus sit. Ratione et nobis</a> nesciunt eligendi. quos dolor perferendis iusto.</p>

<h3>Ratione soluta id porro vel repellendus in. Sed qui officiis illum totam consequatur expedita</h3>

<p><img src=\"http://wlc.app/wp-content/uploads/2016/03/e0cbeb6a-b861-3ae0-ba5c-e6a8507949f6.jpg\"></p>

<ul><li>Deleniti nisi et esse corporis facere</li><li>Ut et iusto in esse rem</li><li>Et sed modi</li><li>Aut est</li></ul>

<p>Quae repellat sequi et. Et et magnam non assumenda. eum ipsam Itaque sint est beatae. Voluptatem sunt asperiores Ipsum nemo <a title=\"Natus animi voluptas sequi modi.\" href=\"http://www.kirlin.biz/dicta-fugiat-enim-eius-aut-odit-iusto\">quia totam</a> Labore et qui et vitae ea id Quaerat natus consequatur et sit ducimus quo. est ullam omnis. Quidem minus ut Omnis enim accusamus cumque dolores temporibus. Veniam veritatis reiciendis vel consequatur Totam ut quod omnis consequuntur nisi. similique et ad. Deleniti necessitatibus dolorem reiciendis. Exercitationem modi dolores totam doloribus. Consequatur provident tenetur <a title=\"Sint aut veritatis quia voluptatem minus.\" href=\"http://www.mccullough.com/vitae-dolorum-voluptatem-accusamus\">ut quo.</a> repellendus soluta vero et. qui quas et accusantium In quis optio et rerum Illum dolor odit quo in odio voluptatem. Veritatis rerum qui nesciunt. Qui impedit at voluptatibus est ut Ratione quos et dolores consequatur distinctio sapiente. Autem et fuga molestiae quia. Ipsa vel sit perferendis nemo. Vel modi consequatur rerum non magnam. Voluptatem nihil voluptas et. Sapiente ut ipsa facere ab. Est at dignissimos Excepturi nihil earum a voluptas tenetur. Eligendi assumenda est occaecati dolores molestiae. odit doloribus autem consectetur magnam ab. <a title=\"Doloribus iste eveniet sapiente molestiae expedita accusantium odit ex vitae voluptates.\" href=\"http://pagac.com/impedit-non-nemo-fugit-velit-ab-omnis-praesentium\">dolor</a> consequatur hic amet Iure sint <a title=\"Labore ea.\" href=\"http://bins.info/impedit-accusantium-minima-repellendus\">sapiente id vero nisi</a> Sapiente architecto aut. ut ut et sed dolorem. Similique vel quis suscipit vero libero. et asperiores sit eius placeat neque. Eos vel et. Eum nulla voluptatum reprehenderit in. Explicabo voluptatem enim nemo velit fugit qui. Aut minus voluptates tenetur odit et. Est et est aliquam. asperiores voluptatem sint tempore molestiae. Praesentium sunt voluptas aut. et molestias tenetur enim mollitia officiis ducimus. Iure rerum tenetur vel consequatur. Ipsum aperiam quia dolor Quia mollitia voluptas sed alias doloremque. Suscipit possimus <a title=\"Ipsa eveniet qui quos officiis enim.\" href=\"http://watsica.com/et-corrupti-minus-odit-voluptatem-quis-cum-saepe-dolorem\">quibusdam.</a> voluptas deserunt ratione quia. nihil voluptas sint provident veritatis. Suscipit ut laborum ullam eum.</p>

<h1>Iusto non porro aut facilis. Animi voluptas iure et</h1>

<blockquote>Omnis voluptas earum sapiente. Vel nostrum voluptas veniam eius. Consequatur est et odio distinctio amet esse. Et odio in tenetur ea quis non quam temporibus. Dolorem omnis asperiores ut eaque eum earum eveniet rerum. A ut similique illo illo rerum nam sunt.</blockquote>

<h2>Dolores neque aut minus non eveniet assumenda asperiores. Ut ipsa voluptas odit</h2>

<p><img class=\"alignleft\" alt=\"Quod nam magnam\"></p>

<ul><li>Et et qui rem sunt voluptatem quam omnis</li><li>Voluptas excepturi quam molestiae</li><li>Ex voluptas quia veritatis dolorem ut</li><li>Hic cum hic cum numquam</li></ul>

<h4>Fuga consectetur rerum aut est architecto ducimus molestias</h4>

<ul><li>Id qui ipsam non voluptatem</li><li>Omnis nobis rem adipisci</li><li>Cum fugit hic et qui</li><li>Non vel</li><li>Fugiat facilis eos qui eius</li><li>Fugit corporis</li></ul>

<blockquote>Omnis sapiente beatae tempora beatae illo Id modi et eos enim Neque excepturi aspernatur dolores. et et nemo saepe in quam. Nostrum excepturi et quisquam neque. Qui non magni et Dolorum voluptatum sit iusto est et eligendi. aut sunt aut sed. aut et quis et officiis nam quia. Ea amet est repellat recusandae <a title=\"Exercitationem blanditiis.\" href=\"http://www.gibson.com/maxime-eos-nihil-quidem-neque\">omnis. Qui at</a> est cum. eum soluta magnam sapiente aut. Dolores sunt quia eveniet amet necessitatibus occaecati eius. Est totam rerum minus libero consequuntur ut. Error laboriosam tempora explicabo. quibusdam eaque est et amet. eaque qui est temporibus. Perferendis odio quaerat aut. Exercitationem laudantium ipsum quam perferendis Quas ullam cupiditate tempore et nulla et. Qui cumque dolorum deleniti hic et. Et et esse necessitatibus assumenda quasi. Porro molestiae excepturi voluptatem minus dolorem. corrupti rerum commodi dolores. Veniam ut maiores consequuntur aliquam.</blockquote>

<h3>Quia sunt iure deserunt voluptatem temporibus et debitis. Aliquid quae omnis rerum cupiditate quidem voluptatibus</h3>

<p>Neque assumenda veritatis qui. aspernatur perferendis atque occaecati quidem consequatur. Sed sint ut quos. Blanditiis <a title=\"Laudantium neque omnis molestias aut quia voluptas.\" href=\"http://www.lebsack.biz/voluptatibus-impedit-ipsam-pariatur-aspernatur-vitae-molestias-ratione\">nam reprehenderit. Officiis consequatur</a> adipisci eum pariatur. Aut dolores ad suscipit non consequatur voluptas Aliquid rem voluptatum impedit unde. Magni doloremque recusandae impedit consequatur doloribus repudiandae nisi. dolores libero optio eligendi mollitia officiis. Officiis voluptatem reiciendis perspiciatis facilis Minus dolorem qui temporibus est. Ea voluptatibus voluptatem rerum omnis. aut molestiae harum aut reiciendis accusantium. est consequuntur nihil optio optio. aut doloribus consequatur natus magni. distinctio quibusdam voluptatibus pariatur. Sed omnis perspiciatis porro. Dignissimos eos blanditiis est qui. dolore provident. Temporibus fugiat asperiores consequatur nulla ut. est ut rerum vel Repudiandae numquam illum dolorum blanditiis corporis nobis. Vitae ut ab et. Enim eaque error assumenda. Quaerat cumque quisquam quisquam Aliquam ex dolores aliquid dolorem. Mollitia porro ea. Reprehenderit quam nobis molestiae quia quae in Voluptates maiores est esse quam laudantium. Numquam quae asperiores quasi laboriosam Nemo quam soluta odio molestiae. eveniet non quisquam a. repudiandae et molestiae omnis voluptatem quo debitis. Sapiente quia blanditiis quas repudiandae. Nostrum quisquam nobis <a title=\"Et velit assumenda.\" href=\"http://kris.biz/adipisci-dolor-delectus-aliquid-dolores-dolorem\">Eos mollitia dolores dolorem</a> sapiente asperiores. Velit dolorum Consequuntur enim culpa recusandae facilis hic. Nihil voluptate aut asperiores Optio aut harum rerum. Quidem quo consequuntur rerum tempore. Nemo blanditiis ut labore at enim unde. Odio quisquam et officiis beatae.</p>
',
                'post_title' => 'Consequatur esse temporibus et',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'consequatur-esse-temporibus-et',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 13:29:23',
                'post_modified_gmt' => '2016-03-26 13:29:23',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=58',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 59,
                'post_author' => 1,
                'post_date' => '2016-03-26 21:49:04',
                'post_date_gmt' => '2016-03-26 21:49:04',
                'post_content' => '<blockquote>Delectus et voluptatem maxime rerum quis ut. Ullam qui voluptate quasi ducimus. Commodi <a title=\"Quis ex laudantium est itaque ipsum error perferendis quia.\" href=\"https://considine.info/hic-suscipit-eos-vel-qui-numquam-totam.html\">autem earum alias.</a> veritatis est nulla laborum <a title=\"Dolorum possimus quia sed dignissimos.\" href=\"http://toy.net/\">voluptatem. Architecto aut reiciendis quae molestiae. Est vel</a> <a title=\"Sapiente repudiandae.\" href=\"http://oconner.com/optio-magni-maxime-iste-id-architecto.html\">quia nesciunt. Et quam vero in</a> repudiandae ad. <a title=\"Officiis ut modi in fugit.\" href=\"http://www.mayert.com/et-ad-provident-aliquid-eum-dolores-eum\">enim rerum</a> iure. Dolorem ut et rerum sapiente voluptatem. <a title=\"Ex quidem qui magni.\" href=\"https://pagac.info/itaque-laboriosam-sint-iusto-ut-quo-beatae-fugiat.html\">tenetur accusantium ipsam non voluptates. Consequatur voluptas</a> <a title=\"Maxime dolorem magnam.\" href=\"http://www.spinka.com/voluptas-sequi-iusto-et-est-occaecati\">sit quia</a> debitis. Dolor dolores quo officia Molestiae <a title=\"Beatae eveniet dolorem blanditiis rerum fuga.\" href=\"http://hartmann.info/perferendis-quasi-nihil-nostrum-fugit.html\">sapiente</a> minima cumque.</blockquote>

<h4>Ipsa ea autem ex omnis praesentium repudiandae. Dolor nobis consequuntur quia nam. Ut dicta et maiores harum ut quis sunt</h4>

<hr>

<p><img src=\"http://wlc.app/wp-content/uploads/2016/03/038a0340-255f-3d34-a2f1-72508ecaf815.jpg\"></p>

<h1>Odit quidem voluptas rerum. Quas vel cumque consectetur fugit et. Quis sequi consequatur voluptatum et culpa</h1>

<blockquote>Ut quis vero magnam dolor. Aperiam deserunt non voluptate consequatur ut. Harum amet magnam ea consequatur voluptate impedit dolor. Omnis aliquid minima nemo sunt voluptatum sunt. Est dolor modi magni magnam qui eius ex. Quisquam et perferendis sed. Ut aut corrupti consequuntur voluptate. Aperiam veritatis sunt est sed aut magnam voluptate. Non hic ea corrupti autem ipsum atque rerum.</blockquote>

<p>Rem repellendus quibusdam libero. Inventore facere quam vero repellat. harum eos ea corrupti eligendi soluta Placeat magnam <a title=\"Quia porro hic nihil aspernatur.\" href=\"http://www.brakus.info/sapiente-quis-aliquam-illo-saepe-beatae-veritatis-debitis-ipsam\">neque consequatur qui nihil</a> sit. Reprehenderit optio impedit <a title=\"Quidem cumque et.\" href=\"http://trantow.org/et-ducimus-dicta-quia-aut-mollitia-possimus-eligendi\">a</a> nulla. Porro et odit dignissimos nihil. quo corporis fugit perspiciatis aliquam. Reprehenderit qui eum rerum. Consectetur omnis deleniti occaecati veniam. <a title=\"Velit enim et error.\" href=\"https://www.kuphal.com/asperiores-deserunt-est-eveniet-ratione-facilis-recusandae-labore-repellat\">occaecati quam hic</a> omnis voluptas inventore.</p>

<!--more-->
',
                'post_title' => 'Quis fugit debitis et quia soluta quia',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'quis-fugit-debitis-et-quia-soluta-quia',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 21:49:04',
                'post_modified_gmt' => '2016-03-26 21:49:04',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=59',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 60,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:16',
                'post_date_gmt' => '2016-03-27 09:24:16',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 60,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:16',
                'post_modified_gmt' => '2016-03-27 09:24:16',
                'post_content_filtered' => NULL,
                'post_parent' => 59,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/532f91da-2484-32b6-9154-10202b9e1e99.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 61,
                'post_author' => 1,
                'post_date' => '2016-03-26 10:35:05',
                'post_date_gmt' => '2016-03-26 10:35:05',
                'post_content' => '<p>Rerum sunt facere explicabo. Voluptas aut omnis dolorem qui. Esse dolor voluptas rerum vel adipisci. Nostrum sint ut illum non qui. Doloremque voluptas reiciendis deserunt natus. Ducimus commodi eos maxime et ad. Sit qui facilis quod facere eos unde. Error recusandae sit et laudantium deserunt rerum. Id autem error molestiae. Quo laudantium aliquam impedit vero ut molestias. Quam veritatis harum libero praesentium. Iusto et non amet dolore minus architecto. Minima consequatur et aut tenetur esse sit cupiditate.</p>

<h1>Omnis ipsa voluptas recusandae perspiciatis facere exercitationem</h1>

<p>Hic aut odit laboriosam facere. Exercitationem et beatae sit <a title=\"Molestias est placeat sequi.\" href=\"http://www.kozey.biz/dicta-inventore-atque-possimus\">Est modi sunt enim magnam</a> sed doloribus expedita. deserunt itaque eum cupiditate quos dolorem. Corporis <a title=\"Aperiam libero ut corporis.\" href=\"https://www.mccullough.com/delectus-officia-autem-ex-repudiandae-nihil-tempora-possimus\">omnis voluptas ut iste accusantium. Eos</a> voluptas in ut. Quidem cupiditate similique omnis facere eligendi natus nulla. Voluptatem <a title=\"Consequatur molestias dolore.\" href=\"http://price.com/commodi-cumque-est-esse-et-nobis-cum-velit\">iure dolorum est</a> et. In ut nulla placeat adipisci Dolore odit dolores perspiciatis enim nobis quia. Et <a title=\"Ea repellendus.\" href=\"https://www.gibson.com/animi-voluptas-a-et-ipsam-est-suscipit\">doloremque minus non dicta sint illo.</a> ipsa animi et non. <a title=\"Beatae omnis qui.\" href=\"http://windler.com/aut-rerum-aut-voluptate-et-delectus-ut.html\">quidem explicabo et enim modi</a> sit. Et vel commodi aut sed et officia. <a title=\"Maxime libero.\" href=\"http://lynch.com/\">cupiditate</a> <a title=\"Possimus dignissimos expedita.\" href=\"http://www.zemlak.info/\">totam est dolor</a> doloribus. Molestiae consequuntur accusamus temporibus. Optio sint quisquam Quisquam deserunt et ut ducimus voluptatem. Ad est dignissimos vel vel ut.</p>

<blockquote>Quaerat tempore odit adipisci. consectetur quis nostrum. Eos et magnam <a title=\"Cum sit commodi et.\" href=\"https://www.weissnat.com/provident-qui-incidunt-dolorum-quisquam-ut\">non amet accusantium. Itaque</a> aut consectetur reiciendis. Expedita et maiores excepturi Esse fugiat voluptas magni magni aspernatur quia. Est excepturi doloribus Eaque aut dolorem rem dolore. Et sunt temporibus porro sed rerum Dicta et dolorum ab. iste velit aut aut. officia ea occaecati inventore et Sed quia explicabo voluptatem quo repellat. fugit reiciendis dolore nulla minus nihil. Quibusdam <a title=\"Voluptas.\" href=\"http://www.durgan.com/molestias-quia-optio-et-illo\">iste aut</a> Quia adipisci et tempora <a title=\"Modi.\" href=\"http://mitchell.biz/iure-distinctio-perferendis-et-voluptas-quae-consectetur-aliquid\">rem veritatis. Quis voluptas aut occaecati soluta ullam</a> Consequuntur impedit error Omnis nam aut necessitatibus veritatis. Sed explicabo rerum iusto quos Ea ex maxime saepe qui Quas repellendus cumque ut. Labore corporis beatae eum ut omnis velit. Distinctio laudantium iusto nobis beatae. Fuga aut harum iste. Architecto consectetur ducimus vero. Assumenda quia ullam aut <a title=\"Nesciunt veritatis quidem.\" href=\"http://www.carter.com/dolorem-molestias-quia-dolor-iusto-accusamus\">nihil. Tempora neque</a> dicta quo delectus. Et veritatis fugit eum eaque et voluptatem Aliquid odio sed non dolorem asperiores voluptates. Sint commodi consequatur enim asperiores sit. Quaerat vel reprehenderit. vero soluta beatae voluptatum Rerum illo officiis soluta recusandae commodi. Ut <a title=\"Ipsam perspiciatis ut quidem et ducimus explicabo.\" href=\"https://yundt.com/omnis-aut-ipsa-placeat-unde-veniam.html\">quas</a> quod omnis quia. nulla repellat eum et fuga. Culpa quia tempore fugiat officia consectetur aut quam. eos velit nostrum et.</blockquote>

<p>Assumenda laudantium aliquid totam nulla labore ea. Minima repudiandae pariatur voluptate. similique temporibus quis Accusantium beatae iste sint. Qui qui similique et. Debitis totam ex sequi ipsum eaque. Dolorem exercitationem ut et eveniet est eius. Explicabo molestias voluptatibus architecto. corrupti consectetur corporis aperiam distinctio pariatur. Excepturi commodi ducimus minima pariatur rerum. ratione commodi facere non vero maiores. Quo repellendus consequatur aut. Optio consequatur eos nesciunt veritatis rerum. Ipsum dolorum dolorum voluptatem reprehenderit. Sed ut quaerat sequi ut fugit alias. Impedit ab rerum animi Illum deserunt magni placeat praesentium repellat. facere eaque enim Est vel maxime illum optio. voluptatem enim praesentium optio. ipsa ipsam excepturi consectetur vero. Sed totam non Quaerat in quod aliquam qui. culpa alias dolorem. porro quo ipsum Deserunt dolores beatae sapiente ut est vitae Cum voluptas numquam ad tenetur Consequatur neque hic voluptas. Id harum vero ullam Quisquam modi id animi molestiae consequuntur. quaerat animi illum quidem pariatur Sunt autem qui eum voluptas earum Ipsa ad <a title=\"Qui eum earum blanditiis maiores ut recusandae nemo.\" href=\"http://hermiston.com/ut-et-cum-tenetur-quidem-laudantium-aperiam\">a blanditiis quis</a> adipisci. Ea nostrum recusandae quisquam id esse. Tempore libero vero et Qui blanditiis soluta labore molestiae perspiciatis Doloribus voluptates beatae molestiae voluptates ipsum quia. Suscipit unde omnis non unde sit Quae quod sint quas sapiente harum hic. iure id Ab officia exercitationem quo hic mollitia. Ut laboriosam velit ratione voluptas. labore a officiis qui consequatur debitis.</p>

<h3>Corporis voluptas dolorum atque aspernatur sed est dolores</h3>

<!--more-->

<ul><li>Quibusdam ducimus</li><li>Non repellendus eum eum</li><li>Doloribus ex optio nobis quisquam doloribus</li><li>Quidem animi</li><li>Quas iusto rerum ad</li></ul>

<h3>Molestias sit sunt vitae inventore porro odio harum</h3>

<p>Asperiores sint qui omnis est praesentium maxime. Aperiam provident debitis aliquid qui est sunt. Quidem ut repellendus hic ut incidunt. Occaecati sapiente incidunt nihil doloremque et. Sit veniam non tempore. Molestiae enim et iure quam voluptatibus dolore eius. Fugit odio sint id iure enim dolore. Commodi doloribus odit et in. Molestiae deserunt sit in dolorum porro temporibus necessitatibus. Et voluptatem eius qui consequatur ipsa et dolor. Officiis quidem nemo omnis optio. Repellendus aspernatur in cum quia sequi impedit. Quisquam corrupti velit commodi vitae consequatur velit. Voluptatem corporis sint ea praesentium cumque suscipit non voluptatum. Blanditiis quam reprehenderit ipsum facere. Minima iste possimus vel quisquam et dolores. Velit aut odit quo facere accusantium ex soluta. Vel earum dolorem molestiae voluptates nostrum quam necessitatibus. Accusamus ab voluptatem sed. Qui nulla iusto tenetur ut optio cum tenetur. Sit possimus debitis facere. Id dicta occaecati sit recusandae pariatur veniam. Sint sit tempora laboriosam magnam. A distinctio aut sunt libero consequatur est sit. Sunt ea nulla corporis optio. Accusamus voluptatem consectetur quo quos eius et et. Quo placeat non consequatur dolore. Et omnis maxime aut nobis. Consequatur assumenda sed incidunt aut. Labore nam occaecati quo alias ut corporis nesciunt. Fuga alias laborum cumque ullam iste. Sequi enim sit omnis dolores id possimus culpa. Voluptas magnam rerum ducimus aspernatur. Provident qui dolores natus quis ipsam aut quasi sunt. Repellendus dolores corporis nesciunt omnis necessitatibus nisi. Dignissimos quia earum magnam accusamus. Doloremque ut molestiae eligendi aut quam accusamus. Dolor consectetur totam at natus. Eius eum assumenda sapiente. Atque tenetur fugiat natus quo laboriosam. Necessitatibus repudiandae ex at a ducimus non. Aut itaque aut dignissimos fugit qui.</p>

<p><img alt=\"Nesciunt natus voluptatem praesentium harum\" src=\"http://wlc.app/wp-content/uploads/2016/03/532f91da-2484-32b6-9154-10202b9e1e99.jpg\">
<img src=\"http://wlc.app/wp-content/uploads/2016/03/55aaaf98-9d0d-339a-9892-0a4dd8120991.jpg\"></p>

<h3>Nulla reiciendis cumque repellendus velit. Laborum et dolorum eaque eum. Et harum neque voluptas qui</h3>

<ol><li>Facilis dolores soluta et</li><li>Eius commodi non id nostrum</li></ol>

<p><img alt=\"Dicta tempore totam non hic\" src=\"http://wlc.app/wp-content/uploads/2016/03/36ecd221-e156-354b-a451-488c4bc26034.jpg\"></p>

<ol><li>Repellat repellat fuga fugit vel sunt</li><li>Odio dolorem hic est ex</li><li>Minima hic culpa possimus</li></ol>
',
                'post_title' => 'Impedit pariatur vitae perferendis consequatur exercitationem',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'impedit-pariatur-vitae-perferendis-consequatur-exercitationem',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 10:35:05',
                'post_modified_gmt' => '2016-03-26 10:35:05',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=61',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 62,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:17',
                'post_date_gmt' => '2016-03-27 09:24:17',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 62,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:17',
                'post_modified_gmt' => '2016-03-27 09:24:17',
                'post_content_filtered' => NULL,
                'post_parent' => 61,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/ad749fc2-e2b3-31f2-beb6-491593605654.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 63,
                'post_author' => 1,
                'post_date' => '2016-03-26 11:39:21',
                'post_date_gmt' => '2016-03-26 11:39:21',
                'post_content' => '<p><img alt=\"Impedit totam dicta aut\"></p>

<h2>Qui voluptatem omnis quas nemo saepe quidem sapiente. Est vitae ut sit hic. Fugiat doloremque et rerum praesentium voluptatum ducimus ullam</h2>

<blockquote>Autem officiis aut officia voluptas quo. tempore beatae consequatur ipsum dicta. Sapiente explicabo iste et earum. Sunt officiis perspiciatis molestiae excepturi possimus laboriosam. qui omnis cupiditate et aut. neque asperiores aut et doloribus. eum ut qui accusantium. ea sequi consectetur ex quidem. voluptatem cupiditate atque quidem Delectus similique et minima delectus voluptate. Quod et quo veniam doloribus. Cupiditate quia quos nam ducimus. Veniam atque culpa et. Nostrum reiciendis incidunt sapiente quos porro. Velit itaque dolor distinctio. aliquam voluptates iure alias. Fugit sint recusandae velit assumenda ullam in aperiam. aspernatur est perferendis quaerat eos qui repudiandae. Dolorem et et dolorem sequi. Accusamus voluptates doloribus Assumenda quidem aut delectus vitae. Dolor asperiores consequatur <a title=\"Temporibus quis est praesentium rerum quis aut.\" href=\"https://www.kemmer.org/facilis-illo-sed-inventore-atque\">Dolorem molestias</a> est repellat placeat esse. Repellat repudiandae earum sit eligendi</blockquote>

<h3>Cupiditate repellendus molestias et voluptas cumque autem reprehenderit aut. Sed reprehenderit iusto rerum quo aperiam inventore. Et quaerat voluptatem omnis</h3>

<blockquote>Et reiciendis consequuntur distinctio magnam beatae quibusdam. Rerum nobis dolor accusantium distinctio. Placeat voluptates dolores facere ipsa dignissimos quasi cum. Nam quae nihil est. asperiores quas tempora. beatae qui molestias <a title=\"Laboriosam a non qui quibusdam animi minus.\" href=\"https://quitzon.biz/possimus-iure-quisquam-esse-deleniti-consequatur-autem-pariatur.html\">laboriosam odio ea. Vel quasi quas</a> deserunt sed. Natus dicta quia expedita itaque qui sequi. Aut sapiente repudiandae Accusamus aut architecto odio quo Dolores <a title=\"Magni.\" href=\"http://www.braun.biz/omnis-aut-consequatur-consequuntur-fugit-rem\">earum nisi pariatur</a> In et ullam nesciunt Placeat et est earum quibusdam. officiis vitae. possimus quas sint dignissimos Iste sed alias veritatis Quod et suscipit quisquam natus nostrum. Minima recusandae cum officiis et Quibusdam earum nihil ipsa. Ad et et et Distinctio dolores voluptas <a title=\"Id quia veritatis consequatur.\" href=\"http://www.fay.com/\">quia.</a> porro ut est qui. Consequatur sed dicta voluptatem quis quibusdam. Et repellat autem repudiandae neque. exercitationem non quod ut minus doloribus quia. et rerum similique. Quasi rem tempore magni. Quia sint voluptatem a Nulla ipsam in sed eaque reprehenderit. Nostrum ad fugiat id et sint Nobis ipsam et voluptatum rerum. <a title=\"Saepe et rerum tenetur.\" href=\"http://www.cormier.com/impedit-quia-et-debitis-aliquam-expedita-asperiores.html\">non et velit perferendis</a> quae numquam. Ratione molestiae aliquam porro omnis <a title=\"Esse rerum maiores.\" href=\"http://bailey.info/reiciendis-aut-recusandae-voluptas-quia-et-ratione\">neque. Id eum</a> optio voluptas. deserunt sit occaecati suscipit dolores iusto consequuntur. Repudiandae accusamus voluptatem accusamus fuga reprehenderit quia. Magnam at sed Facilis necessitatibus voluptate est cumque Cum saepe numquam assumenda dolores quia. Est voluptatum aperiam perferendis non et. Eligendi aut velit et. Quis sunt est Nemo vero ullam dolor quos. Facilis laudantium repellat corrupti. Aut quia non ex molestias. Aut doloremque enim Voluptatem alias eligendi <a title=\"Maiores consequatur ut ut.\" href=\"http://www.eichmann.com/molestias-et-consequatur-et-sed-est.html\">quod quisquam</a> nobis qui. Velit aut molestiae ea. Ducimus velit enim non facilis. aut minus. Provident repellendus quos voluptatem dolore reprehenderit. repellendus rerum voluptatum dignissimos</blockquote>

<h2>Ducimus quia iusto magnam in natus. Quam incidunt et ut qui ullam eaque</h2>

<hr>

<h2>Quia quis adipisci expedita ut excepturi. Quos odit delectus provident in eius quis earum ut. Quia quod et quae laudantium</h2>

<p>Dolor nihil libero fuga provident. Sint porro necessitatibus sequi qui. Sunt eligendi quia cupiditate perspiciatis consequatur ut. Quidem quia omnis nam sint velit doloremque deleniti. Eius occaecati eos quo impedit. Consectetur omnis iusto natus dignissimos provident. Omnis rem sint aut autem ut distinctio ducimus quibusdam. Cumque at molestiae molestiae cumque deserunt fugiat molestias. Consectetur sapiente et nisi maxime est doloribus. Esse adipisci exercitationem nemo sit ratione temporibus aspernatur. Aut reiciendis et ut magni quod. Earum nobis incidunt velit similique et excepturi aut. Repudiandae asperiores aut saepe amet ipsa tempore qui laborum. Et illum sit voluptatem. Ex voluptatibus exercitationem autem quae reiciendis. Qui sit sint maiores vel suscipit. Laborum quod iusto ea quae modi.</p>

<ol><li>Mollitia animi dolor qui non odio voluptas</li><li>Maiores beatae possimus culpa pariatur aut</li><li>Neque</li><li>Eos facere sapiente ea</li><li>Rem quo aliquam et sed</li><li>Sint ipsa magni eveniet</li><li>Harum fugit sint odio nobis</li><li>Magni unde officiis dicta in et architecto</li></ol>

<p><img class=\"alignleft\" alt=\"Corporis a nulla reiciendis\" src=\"http://wlc.app/wp-content/uploads/2016/03/75dbe40e-1b97-3285-b36a-4e218883552a.jpg\"></p>

<blockquote>Hic provident facere a quo at voluptatibus Facilis neque qui voluptatem suscipit neque molestiae error. voluptatem aut illo nihil ut Fuga voluptas velit <a title=\"Laborum et earum.\" href=\"http://www.willms.com/sunt-sed-ea-quaerat-provident-consequatur.html\">accusantium et. Aliquam vitae</a> occaecati voluptatem ducimus. assumenda saepe repellendus quidem earum Mollitia eius qui voluptas ut sit consequuntur.</blockquote>

<h2>Ipsa qui et soluta accusamus. Harum reiciendis vitae temporibus optio fugiat a voluptatibus</h2>

<ol><li>Enim ullam sequi aut excepturi</li><li>Et</li><li>Ut et blanditiis eos</li><li>Et possimus sint</li><li>Omnis et eos magnam earum aliquam</li><li>Enim natus praesentium consectetur expedita</li></ol>

<hr>

<ul><li>Architecto at ut</li><li>Veniam quos sunt eaque</li></ul>
',
                'post_title' => 'Ut distinctio numquam dolorum quam ipsa',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'ut-distinctio-numquam-dolorum-quam-ipsa',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 11:39:21',
                'post_modified_gmt' => '2016-03-26 11:39:21',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=63',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 64,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:24',
                'post_date_gmt' => '2016-03-27 09:24:24',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 64,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:24',
                'post_modified_gmt' => '2016-03-27 09:24:24',
                'post_content_filtered' => NULL,
                'post_parent' => 63,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/bd00437b-1a83-3c29-b173-bc95a04c944e.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 65,
                'post_author' => 1,
                'post_date' => '2016-03-26 07:53:32',
                'post_date_gmt' => '2016-03-26 07:53:32',
                'post_content' => '<h6>Placeat velit aut vel. Culpa error rerum iure ipsum quam. Incidunt modi ut nesciunt rerum aut</h6>

<p>Alias sequi omnis dolor fuga adipisci quia voluptatem. Repudiandae occaecati nulla assumenda. Nihil tempora iste qui. Hic voluptatem vitae autem et omnis ex laborum incidunt. Ea earum in eligendi veniam voluptatum quia. Ad suscipit blanditiis non possimus. Ex et autem possimus quod est sapiente corporis. Blanditiis eius harum non consequuntur fugit nisi. Nulla nobis explicabo nulla ipsum. Ut voluptas praesentium ut est molestias inventore rerum. Quia omnis voluptate accusamus exercitationem eaque harum. Vel autem dolorum velit nam possimus omnis neque. Esse officiis aut sunt quia. Consequatur fugiat dolor quae enim. Perspiciatis qui molestiae excepturi doloremque qui. Suscipit aspernatur nihil est corporis repellendus magnam. Veritatis libero quam suscipit dicta aut rerum alias. Non autem ducimus dolores accusantium eaque. Rerum nulla aliquam consequatur repellendus natus. Incidunt odio qui tempore cupiditate omnis. Id animi ea voluptatem et architecto quas quasi. Corporis numquam porro neque voluptas pariatur ad. Voluptas hic ad voluptatem velit sit quis non inventore. Molestias incidunt in eaque debitis sit. Sapiente qui omnis repellat voluptatem omnis dolores. Magni dolor qui enim consequuntur. Ad impedit ut nihil autem voluptas repellendus. Dolor esse autem eligendi sint est reprehenderit. Quibusdam fugiat occaecati dolorem provident quas provident temporibus a. Nulla est ut voluptatem id ut est corporis. Qui quod modi molestiae ut ex delectus. Tenetur ut deserunt ut ea voluptate et veritatis. Est commodi quidem perferendis consectetur deleniti sapiente. Laudantium repellat rem harum magni est non. Laboriosam aliquid reprehenderit aut dolorem sunt fugit nihil. Voluptas culpa totam et eum quia.</p>

<p><img class=\"aligncenter\" src=\"http://wlc.app/wp-content/uploads/2016/03/986cb295-c048-3f96-b7b1-8fe18a56cf70.jpg\">
<!--more--></p>

<h6>Qui ut necessitatibus quod cupiditate sapiente. Vitae vel quidem quos unde. Delectus aliquam error ut non modi nihil</h6>

<ul><li>Illo est voluptas et qui odio incidunt</li><li>Laborum id</li><li>Placeat ut esse qui minus</li><li>Aut cum quia corporis dolore ullam</li><li>Nihil veniam</li><li>Et quas et aliquam</li><li>Itaque tenetur</li></ul>

<h5>Mollitia et atque pariatur veniam nam qui</h5>

<p><img class=\"alignright\" alt=\"Exercitationem ea sint sint non ratione aspernatur quis\" src=\"http://wlc.app/wp-content/uploads/2016/03/986cb295-c048-3f96-b7b1-8fe18a56cf70.jpg\"></p>
',
                'post_title' => 'Ducimus corrupti incidunt laborum perferendis iste',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 'ducimus-corrupti-incidunt-laborum-perferendis-iste',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 07:53:32',
                'post_modified_gmt' => '2016-03-26 07:53:32',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=65',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 66,
                'post_author' => 1,
                'post_date' => '2016-03-26 16:33:18',
                'post_date_gmt' => '2016-03-26 16:33:18',
                'post_content' => '<hr>

<h1>Quae ratione molestiae qui. Sed autem laborum deserunt asperiores. Cum porro ut quasi harum</h1>

<p><img class=\"aligncenter\" alt=\"Aut nam\" src=\"http://wlc.app/wp-content/uploads/2016/03/36ecd221-e156-354b-a451-488c4bc26034.jpg\"></p>

<h2>Tenetur voluptatum non assumenda quos eum. Praesentium fugiat voluptate ut culpa quia inventore aut</h2>

<ul><li>Quia totam magnam consequatur</li><li>Fugit voluptatem</li><li>Omnis ut maiores</li></ul>

<!--more-->

<h5>Eaque et aperiam aut quibusdam. Placeat ut libero dolores sed neque consectetur impedit natus. Ipsa beatae culpa optio reprehenderit in totam ipsam</h5>

<ol><li>Quia soluta omnis</li><li>Deserunt architecto nostrum qui</li><li>Suscipit est qui enim beatae</li><li>Incidunt culpa ab sit</li></ol>

<hr>

<p><img alt=\"Eveniet\" src=\"http://wlc.app/wp-content/uploads/2016/03/e0cbeb6a-b861-3ae0-ba5c-e6a8507949f6.jpg\"></p>
',
                'post_title' => 'Delectus qui dolores error',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 'delectus-qui-dolores-error',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 16:33:18',
                'post_modified_gmt' => '2016-03-26 16:33:18',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=66',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 67,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:25',
                'post_date_gmt' => '2016-03-27 09:24:25',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 67,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:25',
                'post_modified_gmt' => '2016-03-27 09:24:25',
                'post_content_filtered' => NULL,
                'post_parent' => 66,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/312d3b7e-b880-38cf-947e-477911aadd27.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 68,
                'post_author' => 1,
                'post_date' => '2016-03-26 20:31:11',
                'post_date_gmt' => '2016-03-26 20:31:11',
                'post_content' => '<ul><li>Sint et dicta harum aut sint</li><li>Ut aspernatur molestiae molestias et</li><li>Dolorum voluptatem et aut ut</li><li>Dolorum aut molestiae vel sequi sapiente</li><li>Non a nobis omnis ut ad</li><li>Ut est adipisci aut officia</li></ul>

<ol><li>Quisquam quaerat minus libero provident</li><li>Corrupti ut ea hic modi</li><li>Voluptates ipsam explicabo facilis saepe</li><li>Deserunt</li></ol>

<!--more-->

<hr>

<hr>

<h6>Aut est doloremque rerum qui laboriosam eius</h6>

<ul><li>Minus dolores fugit sed</li><li>Repellat</li><li>Praesentium qui fugiat possimus alias</li><li>Molestias dolorem iure cum magni et</li><li>Nam aliquid est omnis</li><li>Officiis eum aliquam illo necessitatibus</li><li>Esse sunt eum eum cum</li><li>Tenetur perspiciatis facilis aliquam inventore</li></ul>

<h3>Magnam earum libero ut aliquid. Aperiam et nisi pariatur aperiam quisquam. Quia voluptatem amet excepturi animi</h3>

<ol><li>Quo ipsa nulla ut eos quas facilis</li></ol>

<h3>Sed fuga qui velit suscipit. Architecto voluptatem et dolorem numquam eum</h3>

<p>Non aliquam nobis molestias. dolore impedit commodi. libero consequuntur et consequatur. Eos quidem <a title=\"Voluptatum aut debitis.\" href=\"http://bode.net/velit-ipsam-fugiat-inventore-eligendi-sed.html\">consequatur suscipit voluptatibus. Voluptatibus dicta tempore</a> sit quod. Ratione itaque et minima molestias dolor. Hic neque aliquid alias vel. Doloribus officia voluptatem. Odit quasi ad nobis placeat error. ducimus vitae delectus est voluptatem. Quia sed quis. at asperiores sed error officia officiis. Nulla expedita quis rerum. Voluptatem magnam et aliquid et. Voluptatum ut quibusdam dolor qui Reiciendis est doloribus quia assumenda asperiores Doloremque dolor non in alias non. Qui et qui ad pariatur. Sint qui molestiae aperiam dolorum. fugit recusandae necessitatibus ad sit. Et atque omnis dolores. Perspiciatis sunt nihil debitis voluptas cumque. Odit enim odio voluptas numquam. Quo rem assumenda ea. distinctio aut eum Provident quis excepturi atque ea corrupti in. Numquam et <a title=\"Velit et distinctio.\" href=\"http://leannon.com/autem-rerum-impedit-ad.html\">suscipit quidem. Culpa enim</a> incidunt vero Unde dolorem accusamus quaerat. Ut accusamus similique ipsam quibusdam</p>
',
                'post_title' => 'Asperiores recusandae sed facere hic qui',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'asperiores-recusandae-sed-facere-hic-qui',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 20:31:11',
                'post_modified_gmt' => '2016-03-26 20:31:11',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=68',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 69,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:26',
                'post_date_gmt' => '2016-03-27 09:24:26',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 69,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:26',
                'post_modified_gmt' => '2016-03-27 09:24:26',
                'post_content_filtered' => NULL,
                'post_parent' => 68,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/0f7311ba-b484-31cb-8189-f58aa5d72f46.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 70,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:31',
                'post_date_gmt' => '2016-03-27 09:24:31',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 70,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:31',
                'post_modified_gmt' => '2016-03-27 09:24:31',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/f7d6bf5a-caf3-3359-80ba-8fa57e31059e.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 71,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:35',
                'post_date_gmt' => '2016-03-27 09:24:35',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 71,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:35',
                'post_modified_gmt' => '2016-03-27 09:24:35',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/f9c8cc02-dfeb-31cd-adb4-13368d4f8a7d.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 72,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:37',
                'post_date_gmt' => '2016-03-27 09:24:37',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 72,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:37',
                'post_modified_gmt' => '2016-03-27 09:24:37',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/988eb0e8-cea0-3a82-85da-cb9ba49da4a5.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 73,
                'post_author' => 1,
                'post_date' => '2016-03-26 09:06:13',
                'post_date_gmt' => '2016-03-26 09:06:13',
                'post_content' => '<p><img class=\"alignleft\" alt=\"Iure minus possimus sint\" src=\"http://wlc.app/wp-content/uploads/2016/03/f7d6bf5a-caf3-3359-80ba-8fa57e31059e.jpg\"></p>

<blockquote>Quia eum magnam qui sequi enim. et cumque voluptas quia repudiandae. Doloribus et necessitatibus quia Et nesciunt atque in nihil illo Et dolor doloribus aspernatur. Ut laudantium et quidem totam ut fugiat. Necessitatibus fugit non nobis voluptas voluptatum. aperiam sit placeat delectus reiciendis quae. Voluptas <a title=\"Inventore a est sequi quidem.\" href=\"http://www.grady.com/veniam-non-doloribus-ducimus\">quia ex saepe est voluptatem.</a> assumenda perferendis similique repellendus. Ut cupiditate veniam autem illo amet qui. et nobis ut asperiores. Fugiat quos repellendus laboriosam Minima vitae aut odit nesciunt. Officia laboriosam est sunt doloremque est omnis Dolor quia corrupti omnis veniam Debitis vitae delectus rerum rem</blockquote>

<h1>Nulla quam quia ad et impedit. Quam facere corrupti labore repellendus deleniti nulla. Neque corrupti odit veniam sed</h1>

<blockquote>Quibusdam quia <a title=\"Est ut.\" href=\"http://barton.com/rerum-ipsa-excepturi-et-aperiam-rerum-necessitatibus\">recusandae officiis</a> quia. Est qui facilis vel ex. Quae omnis id neque <a title=\"Reiciendis ea.\" href=\"http://upton.com/aliquam-quo-illum-et-voluptas-quo-velit-sint\">optio. Iste</a> nesciunt dicta qui. Quia <a title=\"Vitae porro.\" href=\"http://berge.net/quod-cupiditate-doloremque-rem-dignissimos-qui-necessitatibus-beatae\">et et minima. Qui</a> libero accusamus et. Maxime eum aut <a title=\"Id.\" href=\"http://murazik.com/doloremque-aut-ipsam-fuga-dolorem-possimus-architecto.html\"><a title=\"Non consequatur.\" href=\"http://homenick.com/et-autem-voluptatem-ipsam-debitis-omnis-iste\">animi quibusdam. Aspernatur necessitatibus illum nulla nostrum</a></a> Excepturi <a title=\"Accusamus aut voluptas.\" href=\"http://dibbert.com/molestiae-quis-velit-dolorem-aut-aspernatur\">vel rerum eveniet sed. Sint excepturi</a> et soluta labore nesciunt Aut voluptate facere consequatur odio recusandae. Ea <a title=\"Voluptatem quod voluptates distinctio voluptatem unde maiores ullam accusamus perspiciatis.\" href=\"http://www.fahey.com/\">sed placeat alias. Unde quia</a> recusandae necessitatibus voluptatem fuga est. Ut quis id <a title=\"Et culpa.\" href=\"https://dooley.com/itaque-unde-aspernatur-quidem-molestiae-ut.html\">corrupti. Distinctio</a> molestias recusandae doloribus architecto eveniet. Rerum accusantium sit eum quae dolor qui. Error eius reprehenderit quibusdam facere reiciendis Nihil aut velit labore sit. est modi recusandae blanditiis eos laborum. Molestiae labore quae</blockquote>

<ul><li>Soluta impedit dolores fuga cupiditate in fugiat</li><li>Atque quas qui sint autem</li><li>Repellendus voluptatem non velit ea</li><li>Quo et odio commodi quod provident asperiores</li></ul>

<p><img alt=\"Sed quia veritatis sapiente sunt assumenda aut\" src=\"http://wlc.app/wp-content/uploads/2016/03/986cb295-c048-3f96-b7b1-8fe18a56cf70.jpg\">
<!--more--></p>

<h4>Quaerat ut doloribus similique cupiditate ut voluptas et. Commodi impedit corporis earum et. Quibusdam vel eaque dignissimos quisquam</h4>

<hr>

<ul><li>Assumenda perferendis modi nesciunt quod quis</li><li>Officia mollitia</li><li>Ducimus unde</li><li>Ex sed quibusdam qui</li><li>Quia qui</li><li>Impedit itaque et</li><li>Fuga optio aut iusto inventore</li><li>Quis porro vel ratione</li></ul>

<blockquote>Hic et molestias. omnis rerum quaerat sint non aut. porro saepe Sit perspiciatis voluptatem quaerat. Esse quis fugiat et sapiente. Pariatur voluptatibus ipsum sapiente Voluptates voluptate et dolorum sit. eaque voluptas labore. totam vitae cumque sit labore. Et est adipisci ex corporis quibusdam porro hic. harum porro nam eius. Dolores consequuntur veritatis ea dolor. Nihil dicta cumque natus suscipit eum. Voluptatem perferendis ut harum cum eos. Autem <a title=\"Et voluptas voluptas ipsam.\" href=\"http://waters.com/et-modi-officiis-soluta-est-velit-dolores-consequatur\">sunt qui. Vel porro</a> eius beatae aut debitis. Dolorem repellat quisquam fugiat dolorum ut Qui eaque totam voluptates Labore recusandae magni omnis. Dolores sit quo molestiae quia. ratione blanditiis aut quae mollitia voluptates. Dolorem amet quae quia dolorem eveniet omnis. ex voluptatem tempora temporibus ut. <a title=\"Similique architecto eligendi.\" href=\"https://www.rau.com/quas-in-quod-nihil-illum-fugiat-non-minus\">iusto unde expedita ipsum culpa</a> Aut adipisci quidem Ratione id accusantium et ea. Quaerat non ea incidunt numquam Deserunt impedit temporibus temporibus nulla fugiat. Perferendis deleniti in laboriosam quo id. Rem qui illum perferendis soluta a. Qui vel dolores consequatur. Vero suscipit odit atque nulla accusamus Ut ratione odit omnis ut quaerat deleniti. Consequuntur qui aut sint corrupti. Officia rerum veritatis in voluptas. Ipsam voluptatem possimus aliquam doloremque. ullam a dolorem voluptas sapiente. Tenetur dolor et autem. Ipsa suscipit est neque corrupti Veniam ipsam quae adipisci neque eius id <a title=\"Autem est veritatis ullam reiciendis.\" href=\"http://lesch.com/\">Quo quasi quisquam et.</a> vero quibusdam quos ex quia blanditiis. Voluptatibus quo nulla id dolores. Harum dolores molestiae sint Ea consequatur culpa laboriosam quia. Dolor fugit ad amet. et et dolorem ut dolor. Totam aut molestiae. Omnis neque laudantium sunt ut Est enim quaerat. Rerum eveniet nulla qui eos nesciunt. Corporis voluptatem atque. Fugiat commodi sit et ut sed ipsa.</blockquote>

<p><img class=\"alignright\" src=\"http://wlc.app/wp-content/uploads/2016/03/f9c8cc02-dfeb-31cd-adb4-13368d4f8a7d.jpg\"></p>

<h2>Animi non illo consequatur vel facilis dolorem</h2>

<ol><li>Corrupti quo</li><li>Tempore</li><li>Occaecati in sunt debitis laboriosam soluta tempore</li><li>Id nam omnis</li><li>Molestiae quos et ut</li><li>Et perferendis omnis soluta</li><li>Aut neque quaerat</li><li>Repellendus iusto qui totam ex ut et laborum labore</li><li>Quam quia nihil iste ipsa</li></ol>

<blockquote>Fugit dolorum tempora architecto est. quisquam consequatur neque fugit officia. veniam beatae laudantium <a title=\"Tempora excepturi excepturi fugiat.\" href=\"http://www.wolf.com/\">eos rerum et. Et</a> voluptatem voluptatibus laboriosam. Explicabo laborum vitae doloremque magnam. Quia consequatur est quasi sint. Illum est veniam magnam dolorum nulla.</blockquote>

<blockquote>Praesentium facere <a title=\"Dolore voluptas molestiae quia.\" href=\"http://borer.net/similique-qui-et-nemo-animi-fuga\">ducimus. Natus sequi</a> <a title=\"Dolores sapiente consequuntur.\" href=\"http://toy.com/quibusdam-et-est-amet-pariatur-ullam-eos-expedita-possimus.html\">dolores nam quasi</a> <a title=\"Dolores labore et est earum asperiores commodi.\" href=\"http://hintz.biz/vel-explicabo-ad-molestias-et-qui-aspernatur-mollitia\">Labore nemo soluta omnis optio.</a> <a title=\"Corrupti sunt enim perspiciatis aliquid.\" href=\"https://www.botsford.net/aut-quisquam-ut-voluptas-eaque\"><a title=\"Voluptatem.\" href=\"http://leuschke.com/\">ut et ex aliquid.</a></a> <a title=\"Sed dolorem ut.\" href=\"http://www.hammes.org/\">voluptatibus non</a> quo. voluptatem aperiam dolorum</blockquote>

<ol><li>Deserunt accusamus voluptatem nemo</li><li>Rem ullam ut cumque odit</li></ol>

<h1>Eaque excepturi ullam incidunt id sequi necessitatibus laborum. Libero aspernatur voluptates porro velit accusantium. Maxime quibusdam exercitationem atque quod voluptate</h1>

<ul><li>Alias esse est et molestiae impedit sint</li><li>Sed voluptatibus et culpa impedit quo eligendi</li><li>Autem ab qui sit</li><li>Impedit atque dolorem id</li><li>Nam quis suscipit aut vel sint</li></ul>

<p><img class=\"alignleft\" src=\"http://wlc.app/wp-content/uploads/2016/03/988eb0e8-cea0-3a82-85da-cb9ba49da4a5.jpg\">
<img class=\"aligncenter\" src=\"http://wlc.app/wp-content/uploads/2016/03/55aaaf98-9d0d-339a-9892-0a4dd8120991.jpg\"></p>

<ul><li>Quod autem ut molestias id</li><li>Enim qui iste tempora non rem</li><li>Debitis et vel eum voluptatibus soluta</li><li>Dolores vitae corrupti aut omnis sed cum itaque aut</li><li>Excepturi ab in sunt</li><li>Ut repellat a</li><li>Impedit natus maiores dolor dicta ullam</li></ul>

<blockquote>Ducimus incidunt possimus <a title=\"Aut dolorum commodi porro asperiores.\" href=\"http://schinner.com/\">modi aperiam labore est. Pariatur</a> veritatis aut Rerum facilis recusandae qui sequi fugit. voluptate voluptatum quae beatae. reprehenderit qui est. debitis odit consequatur non repellat Reprehenderit dolores libero sunt enim reiciendis. Saepe laborum impedit voluptatem impedit repudiandae quo. Qui nulla explicabo molestiae quo est consequatur minus. quod architecto illo vel. saepe in et est. Quos iste harum voluptatem officiis consequatur doloribus Consequatur esse qui repellendus nihil. consequatur sint ratione et Est iste cumque numquam et. Est dolores dolores accusantium et illo. rerum <a title=\"Quibusdam soluta.\" href=\"http://mckenzie.com/autem-exercitationem-dolores-nisi-et-rerum-reprehenderit\">consequatur natus</a> placeat facilis. Ea beatae explicabo iusto et deleniti non. quo eos id dolore quo harum. Autem beatae inventore Reprehenderit sit deserunt eos expedita illo beatae. Nihil nulla doloremque Rerum hic repellat quas facilis Corporis minima odit reprehenderit corrupti Dignissimos exercitationem ut quia porro nostrum nihil. voluptatibus et incidunt sed. Voluptatem iure aperiam aut rerum. aut placeat quidem reiciendis laborum dicta. Ut debitis eveniet et sint hic veniam. Culpa <a title=\"Et nemo aut magni sed fuga.\" href=\"http://www.simonis.com/quo-non-rerum-illum-velit-officia-dolorem-reiciendis-voluptas.html\">dolorem at quas architecto autem modi.</a> commodi voluptatibus tempore ducimus. Placeat quasi officiis aut delectus praesentium. Expedita ex consequatur Officia expedita libero.</blockquote>

<p><img class=\"alignleft\" alt=\"Illum\" src=\"http://wlc.app/wp-content/uploads/2016/03/038a0340-255f-3d34-a2f1-72508ecaf815.jpg\"></p>
',
                'post_title' => 'Aut asperiores laborum maxime qui eum soluta',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 'aut-asperiores-laborum-maxime-qui-eum-soluta',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 09:06:13',
                'post_modified_gmt' => '2016-03-26 09:06:13',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=73',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 74,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:39',
                'post_date_gmt' => '2016-03-27 09:24:39',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 74,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:39',
                'post_modified_gmt' => '2016-03-27 09:24:39',
                'post_content_filtered' => NULL,
                'post_parent' => 73,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/6d88bf7d-f6cf-3e4b-b356-5558fc397742.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 75,
                'post_author' => 1,
                'post_date' => '2016-03-26 04:32:21',
                'post_date_gmt' => '2016-03-26 04:32:21',
                'post_content' => '<p><img alt=\"Itaque consectetur ea sed qui aut\" src=\"http://wlc.app/wp-content/uploads/2016/03/0f7311ba-b484-31cb-8189-f58aa5d72f46.jpg\"></p>

<h2>Aliquam esse repellendus quaerat rem laboriosam minima cumque pariatur</h2>

<!--more-->

<ul><li>Sed sed ea dicta dolores neque itaque</li><li>Sint est consectetur repudiandae et et</li><li>Dignissimos</li></ul>

<h4>Porro inventore sed architecto. Et debitis odit officiis sequi eaque. Dolorum omnis qui ut sunt omnis</h4>

<p><img alt=\"Repudiandae vel reprehenderit\" src=\"http://wlc.app/wp-content/uploads/2016/03/532f91da-2484-32b6-9154-10202b9e1e99.jpg\"></p>
',
                'post_title' => 'Reiciendis molestiae unde et molestiae vel perferendis',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 'reiciendis-molestiae-unde-et-molestiae-vel-perferendis',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 04:32:21',
                'post_modified_gmt' => '2016-03-26 04:32:21',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=75',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 76,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:39',
                'post_date_gmt' => '2016-03-27 09:24:39',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 76,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:39',
                'post_modified_gmt' => '2016-03-27 09:24:39',
                'post_content_filtered' => NULL,
                'post_parent' => 75,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/1f9fbcc9-bdcf-38c2-9917-01b2de328123.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 77,
                'post_author' => 1,
                'post_date' => '2016-03-26 17:42:11',
                'post_date_gmt' => '2016-03-26 17:42:11',
                'post_content' => '<h5>Similique totam quisquam accusamus exercitationem qui voluptas vero</h5>

<ol><li>Id aut minus aut esse</li><li>Quo dolore vero et nesciunt adipisci</li><li>Maiores eum tempore esse eos</li><li>Accusamus vel sequi est veniam perspiciatis</li></ol>

<hr>

<h6>Nihil suscipit earum sequi id quasi omnis impedit. Quo nostrum fuga quia voluptatem</h6>

<ol><li>Quia distinctio perferendis est sed</li><li>Repudiandae facere quibusdam ut ut</li></ol>

<h3>Unde facere dolorem ut inventore magnam autem fugit. Quibusdam in quia dignissimos architecto corporis aut adipisci. Qui consequuntur laborum beatae laudantium debitis</h3>

<p><!--more-->
<img alt=\"Et aperiam\" src=\"http://wlc.app/wp-content/uploads/2016/03/95e085b3-9a65-33b4-a87a-3acb55a530a1.jpg\"></p>

<ul><li>Asperiores nihil nostrum voluptatum saepe</li><li>Tempora vel non in a iusto nam</li><li>Quia aut corporis sit</li></ul>
',
                'post_title' => 'Ab fugiat quod aut ut id',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'ab-fugiat-quod-aut-ut-id',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 17:42:11',
                'post_modified_gmt' => '2016-03-26 17:42:11',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=77',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 78,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:40',
                'post_date_gmt' => '2016-03-27 09:24:40',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 78,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:40',
                'post_modified_gmt' => '2016-03-27 09:24:40',
                'post_content_filtered' => NULL,
                'post_parent' => 77,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/7ef1a897-1c8d-30c3-a27f-0a7f053f30c4.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 79,
                'post_author' => 1,
                'post_date' => '2016-03-26 19:06:59',
                'post_date_gmt' => '2016-03-26 19:06:59',
                'post_content' => '<ol><li>Qui et qui</li><li>Eum rerum ut</li><li>Nobis mollitia amet esse consectetur maxime quos</li><li>Sunt amet dolor voluptatem occaecati</li><li>Sit voluptatem illo esse aperiam</li><li>Voluptates magnam blanditiis pariatur</li><li>Qui reiciendis est quia deleniti et</li><li>Quod et blanditiis molestiae</li><li>Voluptas ratione</li><li>Nihil aut</li></ol>

<ol><li>Et sint inventore quas sunt</li><li>Omnis optio enim dolor</li></ol>

<blockquote>Et ea non quis ex. Sequi quas non eveniet Aut tempore ab maiores Et incidunt quasi eaque eius earum. Mollitia beatae nobis laborum dignissimos sequi nisi. Illum facilis ab. Laborum temporibus eaque est doloribus nemo. dolore corporis dolore consequatur autem Qui dolores rerum tempora expedita. Aut illum nisi ut est omnis at. delectus ut tempora eaque <a title=\"Aut.\" href=\"http://www.wolff.org/omnis-consequuntur-perferendis-accusantium-eveniet-suscipit-est-id.html\">sit. Corrupti</a> sequi quia voluptates doloribus. Animi sed quis inventore asperiores laborum aliquam consectetur. Ratione assumenda quia eum. Animi voluptates <a title=\"In incidunt reiciendis corporis neque facilis mollitia esse.\" href=\"http://www.mills.net/quam-excepturi-eveniet-rerum-aspernatur-expedita\">beatae facilis deleniti cum iure.</a> molestiae ab. Inventore quis est. Quaerat adipisci et itaque. eius et delectus a molestiae. Mollitia ut aut odio. Nostrum dolores quas et eos. Quia veritatis aliquam accusamus vel maiores et. aperiam voluptatem eum sequi repellat. Ducimus eos aut magni nemo voluptatem. Ab accusamus similique delectus eius iusto. est consequuntur dolorum iste vitae Aspernatur officiis laborum repellat Quis cum dignissimos voluptatem Amet adipisci hic eaque quod. Quaerat rerum necessitatibus occaecati aut Quisquam cupiditate rem soluta ullam illum. Iste occaecati perferendis ut ea. Voluptatum illum dolores quas molestiae</blockquote>

<h3>Dolores sed quasi voluptas sequi. Fugiat repudiandae nulla est totam. Tenetur inventore nobis magnam recusandae ut nihil nostrum. Aspernatur et nisi eum accusantium dolore</h3>

<ul><li>In natus corrupti</li><li>Minus nam est in</li><li>Est itaque voluptatem aut facilis</li><li>Fugit et quis et</li><li>Veritatis ut et quidem animi dolor</li><li>Voluptatem quia eaque corrupti ut natus qui</li></ul>

<h1>Eum aut eos fuga aspernatur illo necessitatibus nemo. Autem quia numquam molestiae commodi. Aspernatur ut quia non maiores inventore. Dolorem et et labore necessitatibus</h1>

<blockquote>Nesciunt eius rem Aut est laudantium soluta officia in corrupti. Molestias et nostrum occaecati. Quibusdam libero cum nemo non aut. Quas rerum occaecati velit provident eum Aspernatur pariatur ad quos. Qui praesentium odio sit incidunt suscipit Inventore odit alias cumque ullam. Distinctio ab numquam nemo Qui reprehenderit incidunt est qui omnis pariatur. Dolor eius nobis. Et suscipit quae eligendi excepturi dolorem. Sit odit qui. Unde minima sequi rerum. Vitae aliquid ad omnis. explicabo quia omnis officiis. officia cum eos omnis ut. Minus ipsum placeat unde eos id Iusto voluptas et vitae rerum deleniti nostrum. quia occaecati et explicabo facilis. Id tempore nam doloribus exercitationem laudantium Ut est maxime asperiores voluptate odio. Est molestias Maxime <a title=\"Rerum omnis ex voluptatum voluptatem.\" href=\"http://wilderman.org/\">exercitationem neque</a> quia. Quae eveniet voluptas rerum voluptas. Maiores repellat iste in aperiam itaque. Qui id quam autem qui. Tempore nihil in sequi. Ab suscipit aut ipsum optio nam. Vitae similique dolores reiciendis molestiae ea. Beatae nemo suscipit ut dolor quo dolor. odio dolor soluta iste. Laudantium corporis illo laboriosam esse illo. Eum voluptatem vero eius quis similique omnis. Non dolor nam reiciendis. Natus atque nihil facilis consequatur. explicabo vero nihil ut enim omnis nemo. Consequatur error nemo et rerum Est aliquam error impedit voluptates sed aspernatur. Nobis delectus praesentium ad dicta</blockquote>

<hr>

<h5>Nulla quia omnis quam aliquam voluptatum</h5>

<blockquote>Vel magnam accusamus eveniet. Enim et laboriosam corrupti ea. Quod aut quia tenetur amet ut est. Earum saepe corrupti incidunt. In blanditiis ullam delectus velit Est cupiditate consequatur reiciendis saepe Cupiditate delectus fugiat qui. Neque nulla est dignissimos molestiae. voluptas neque nobis. consequatur dolorum accusamus voluptatem. Illum unde distinctio necessitatibus corrupti. adipisci natus doloribus soluta aliquam consequatur. Eveniet <a title=\"Fugit omnis.\" href=\"http://funk.com/\">mollitia ducimus ex</a> quos dolore eius. aperiam impedit. Omnis qui omnis cupiditate. Aut est ullam ratione est maxime reiciendis. Dolores unde quia. Numquam officiis sunt consectetur quia quia soluta. Perferendis voluptatem impedit aliquam quos eveniet. Voluptatem omnis nam beatae expedita nihil laborum. sint vero sed cumque. unde sint rerum rerum ullam ducimus nulla. Quae soluta illo blanditiis est odio. est necessitatibus. Libero consequuntur cumque accusantium placeat Voluptates vel provident ut et occaecati consectetur. debitis error alias vel dolorum. Ipsam aliquid ipsa libero non.</blockquote>

<!--more-->

<h4>Nihil ipsam impedit quisquam nihil nulla et</h4>

<ul><li>Ea cupiditate</li><li>Voluptas autem quae nisi quaerat</li><li>Dolores doloribus</li><li>Eius natus et dicta quod quos rerum praesentium</li><li>Beatae ut et tempora dolores voluptates est odio tempora</li></ul>

<h5>Placeat voluptatibus labore ut. Sit alias neque optio voluptatum. Laboriosam saepe delectus voluptates dicta</h5>

<ul><li>Mollitia dolores</li><li>Assumenda</li><li>Alias error et voluptatem sint</li><li>Et numquam a porro culpa fuga</li><li>Veniam illum aut optio vitae illo</li></ul>

<p>Dolor et amet suscipit incidunt Quis non non Rem vel omnis quis qui Quibusdam dolor aliquam qui tenetur sunt velit. Repellat accusantium dolorum assumenda. Sit at ipsa Nihil ducimus voluptatem. Ducimus culpa quia laboriosam Quia ea doloribus eius adipisci non impedit. Accusamus corporis sint. Autem eveniet sed aut ut. Placeat deleniti adipisci dolor iste velit Officiis occaecati vel in corporis consectetur vero magnam. Aut deserunt quisquam fugiat Ab <a title=\"Quae enim aut.\" href=\"http://monahan.biz/\">corrupti alias placeat.</a> non non fugiat. Blanditiis et id et. quo dolorum dicta dolores Animi dignissimos similique tempore tempora explicabo qui</p>

<h4>Omnis cumque rerum perspiciatis impedit eos. Nostrum dolorem sint cum corporis dolorum voluptas. Pariatur autem occaecati et sit. Dolores et et velit est architecto vel ipsa</h4>

<ol><li>Molestiae qui asperiores non</li><li>Quisquam quis sit qui ex ducimus dolorem qui</li><li>Ad suscipit</li><li>Aut velit amet aut praesentium</li></ol>

<h2>Est quis et et quasi aliquid voluptas est voluptate. Nostrum sed provident fugiat vel. Corporis voluptates nemo quod provident</h2>

<ul><li>Accusamus</li><li>Quasi dolores eius quia et similique voluptates hic</li><li>Et minima omnis qui</li><li>Nihil eaque minima debitis est</li><li>Omnis pariatur aut unde</li></ul>

<h5>Vel et non et nihil</h5>

<hr>

<ol><li>Nihil optio doloribus est quia delectus</li><li>Aliquam eius culpa aut delectus</li><li>Vel ut doloremque sint</li></ol>
',
                'post_title' => 'Totam voluptatem sequi facilis quasi laudantium atque',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'totam-voluptatem-sequi-facilis-quasi-laudantium-atque',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 19:06:59',
                'post_modified_gmt' => '2016-03-26 19:06:59',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=79',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 80,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:45',
                'post_date_gmt' => '2016-03-27 09:24:45',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 80,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:45',
                'post_modified_gmt' => '2016-03-27 09:24:45',
                'post_content_filtered' => NULL,
                'post_parent' => 79,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/85615c74-d56c-3e08-9105-3cdc44c1adbd.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 81,
                'post_author' => 1,
                'post_date' => '2016-03-26 00:50:11',
                'post_date_gmt' => '2016-03-26 00:50:11',
                'post_content' => '<h2>Ab sit fuga alias. Reprehenderit unde at fugiat commodi vel officiis error</h2>

<ol><li>Et enim est doloribus unde cupiditate</li><li>Ea neque delectus sit blanditiis</li><li>Necessitatibus cupiditate nihil dignissimos</li><li>Dolor sed vel assumenda eum aut voluptatem unde</li><li>In corrupti et illum incidunt earum quaerat</li><li>Odit in ullam nihil eos</li><li>Eos doloribus aut expedita ut</li></ol>

<p><img src=\"http://wlc.app/wp-content/uploads/2016/03/48ecdbab-24fa-3c5e-95ed-d7015da87d14.jpg\">
<!--more--></p>

<h5>Eaque voluptas blanditiis error similique non dicta. Eius distinctio sint voluptas quae cum. Consectetur perspiciatis praesentium ipsam quia est. Error rerum enim eum explicabo a quam</h5>

<ul><li>Excepturi</li><li>Omnis dignissimos neque excepturi ut</li></ul>

<p>Voluptates accusantium minima dolorem expedita incidunt. Recusandae laboriosam aut ipsa. Tempore id inventore odit beatae sint nulla. Quo eum ad pariatur impedit sunt Consequatur ut maiores similique Aperiam ex excepturi id voluptates ipsam Ea ea qui Error ratione officia voluptatum quisquam nulla earum aut. Et atque Est molestias quidem. Cumque illum rerum incidunt.</p>

<p>Quidem iure tempore nihil <a title=\"Molestias esse velit expedita minus dolor placeat.\" href=\"https://www.bradtke.com/ratione-sit-aliquam-aut-explicabo-ad-dolor-provident\">modi vitae.</a> est alias cupiditate possimus. Rem quia facilis inventore nostrum. Possimus non provident aut. Architecto maxime commodi ut. Fuga sed sed nihil Occaecati eos porro occaecati Porro quis odit voluptatibus illo. Harum ducimus ea consequatur qui dolor laboriosam. Recusandae est praesentium. suscipit ducimus quae perspiciatis est. Rerum omnis ducimus provident eaque beatae cupiditate. quos dolores dolorum ut harum. sint porro <a title=\"Est sed beatae quidem.\" href=\"http://www.klein.com/distinctio-vero-nulla-provident-ut-facilis.html\">Dolores iste dolorum vel corporis</a> fuga. Dolore et cum soluta et. laudantium explicabo nihil Quo itaque omnis veritatis officia. Mollitia tempora nostrum cum voluptatibus consectetur voluptas quisquam. Vitae quas nisi eum aut Hic ut nisi non. Accusamus odit quia voluptas et minus et. quo eligendi non In deserunt labore aut. Culpa facere molestiae quidem delectus. Officiis eius asperiores ut ipsa numquam Perferendis dolorum quam et voluptatem ut. Non optio molestias laudantium ducimus. Molestiae sapiente rerum dolorem doloremque. Esse quia quis qui saepe. Delectus magni pariatur fuga fuga. praesentium molestiae id consequatur <a title=\"Commodi repellendus tempore qui.\" href=\"https://reinger.com/molestiae-excepturi-dolorum-quia-aspernatur.html\">Dolore repellendus impedit facilis omnis omnis</a> velit. Aut nulla qui accusantium error. Repudiandae inventore magnam corporis.</p>

<h4>Consequatur harum reprehenderit doloremque</h4>

<p><img alt=\"Quia commodi ipsam id\" src=\"http://wlc.app/wp-content/uploads/2016/03/312d3b7e-b880-38cf-947e-477911aadd27.jpg\"></p>

<h5>Est error maxime aperiam veritatis. Impedit sed itaque et consequatur voluptate eum repellendus. Eligendi et atque sunt aut fugit. Neque doloremque animi officia maxime eum quis</h5>

<ul><li>Cupiditate impedit tempore omnis sed</li><li>Aspernatur repellendus sit fuga nulla dolore</li><li>Non iusto</li><li>Et voluptatibus est aut molestias quaerat molestiae</li><li>Repellat sapiente quo animi qui</li><li>Est veritatis voluptatem libero</li></ul>

<p>Quia sint eveniet aut tenetur possimus. minus numquam architecto consequatur Hic suscipit velit non ducimus suscipit. Totam autem quae numquam architecto officiis. Sit nam qui non. tempore et nesciunt esse ut. quis itaque adipisci sed dolorem. Voluptatum dicta quia facilis odio. dolorem sint sunt neque ipsa. Maiores sapiente hic dolor ullam sed hic. Incidunt numquam consequatur expedita in accusamus. Qui aliquam eos voluptatum velit distinctio. Qui voluptatibus dolor commodi. eligendi quia voluptatem exercitationem harum quia. unde dolores voluptatem et consequuntur et At et veniam pariatur maiores ut accusantium. Sint consequuntur quas recusandae alias. Sit ut sunt est magnam aut. Atque optio quae enim libero. Quia nihil natus laudantium numquam velit tempora Assumenda rerum eos minus magnam nesciunt dolorum. Et <a title=\"Sit rerum tempore aliquid harum.\" href=\"http://moen.net/\">consequatur ipsum omnis repudiandae praesentium. Ex</a> voluptatem provident nisi. pariatur quos. Corrupti nihil inventore illo natus nobis Quae error accusantium tenetur. Aut adipisci pariatur Doloribus hic adipisci dolorum perferendis ex <a title=\"Nam quis aut sint a sed.\" href=\"http://www.luettgen.org/\">Doloremque molestiae corporis</a> Enim molestiae soluta et. Hic reprehenderit veritatis adipisci debitis Dolorum rerum ullam ad sit veritatis officia. Maiores et eius libero omnis. in cumque nulla placeat velit. Voluptatem ut eveniet dicta quam libero id. sed voluptatem accusantium. aut eligendi aut. Vel maiores ipsam omnis. Quis laborum quam fugiat voluptates praesentium et Distinctio ratione saepe suscipit debitis. aperiam quam reprehenderit voluptas. Ut saepe iure error vero Corrupti consequuntur id esse quo Rerum fugit ipsum pariatur perferendis tempore optio. Consequuntur occaecati eum ipsum.</p>

<blockquote><a title=\"Quisquam eos.\" href=\"http://bashirian.com/nemo-qui-enim-nihil-totam-pariatur-modi\"><a title=\"Sint repellendus sed.\" href=\"http://heidenreich.com/eaque-accusamus-repellendus-laborum-aut-sed-ut.html\"><a title=\"Voluptatum et animi est non.\" href=\"https://aufderhar.com/sunt-et-molestiae-labore-eligendi-quod.html\"><a title=\"Voluptas quisquam molestiae sunt nam ipsa molestias.\" href=\"http://torphy.com/aut-officia-distinctio-praesentium-autem\">Doloremque sed deleniti culpa</a></a></a></a> sed. Perspiciatis est voluptas ex.</blockquote>

<blockquote>Deserunt aut qui modi voluptas voluptatum. Excepturi <a title=\"Labore dolorem.\" href=\"https://www.lakin.info/eos-velit-est-labore-consectetur-fugit-quis\">quos voluptatem</a> quae nesciunt voluptatem Nam fugit harum ea aliquid unde optio. Et aspernatur alias officiis fugit odit. Exercitationem dolor aut <a title=\"Sit aut sequi voluptatem et.\" href=\"http://homenick.net/commodi-non-quae-alias-reprehenderit-similique\">voluptate est quidem. Qui harum</a> provident ex quis magni repellendus Voluptatem <a title=\"Perspiciatis voluptatem omnis qui velit.\" href=\"https://www.will.com/voluptate-debitis-reprehenderit-qui-omnis-aut\">beatae omnis</a> <a title=\"Et.\" href=\"http://www.williamson.com/\">ipsam dolores vero.</a> quia voluptates consequuntur quaerat ut necessitatibus. Corrupti cum voluptatem rem deleniti. Odit provident repudiandae quo suscipit eligendi. Dolorum <a title=\"Nostrum rerum nam sint architecto.\" href=\"http://dicki.biz/ullam-et-qui-culpa-velit\">modi dolores et. Eveniet fugiat ea</a> consequatur ut corporis fugit. Ab sint nobis voluptatem atque. Aut molestiae ea eos Esse enim dolorum Incidunt similique <a title=\"Laboriosam harum repudiandae reprehenderit ea.\" href=\"http://crooks.net/ea-et-ducimus-veniam\"><a title=\"Cupiditate perspiciatis dolorem ipsa quaerat.\" href=\"https://www.christiansen.com/in-aliquam-minus-debitis-explicabo\">quisquam</a></a> dolorum nisi. Tempore totam sit. Ipsa doloribus cum ex asperiores. Incidunt eum natus excepturi</blockquote>

<blockquote>Qui repellat sunt id aut sed. Eum perspiciatis qui dolorem. Magnam sed recusandae et ut quo. Ut iusto perferendis omnis quia accusamus quae laboriosam. Sed totam non molestias est. Numquam omnis corporis quibusdam expedita ullam. Nesciunt fugiat dolorem dolor nihil voluptas cum eum. Officia neque fugiat ut sit explicabo voluptatibus qui. Enim cumque dolores quisquam accusamus labore beatae est. Debitis eaque consequatur omnis quis a. Iusto consequatur eligendi quasi est. Facilis sit est cumque consequatur ut et. Incidunt molestiae consequatur aut consequatur aliquid ut quia fuga. Odio quod consequuntur aperiam vitae id molestiae. Voluptas aliquam eos est eos. Labore itaque qui minima fuga est. Pariatur tempora quaerat rerum quidem accusamus vel. A iste eum molestiae voluptatem aspernatur.</blockquote>
',
                'post_title' => 'Molestiae ratione distinctio temporibus sed',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'molestiae-ratione-distinctio-temporibus-sed',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 00:50:11',
                'post_modified_gmt' => '2016-03-26 00:50:11',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=81',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 82,
                'post_author' => 1,
                'post_date' => '2016-03-26 01:06:37',
                'post_date_gmt' => '2016-03-26 01:06:37',
                'post_content' => '<blockquote>Magnam est ea velit nihil. Quo magni hic quo velit praesentium est magni officia. At soluta cupiditate velit excepturi nemo. Corrupti facere nobis ut molestias eaque voluptatem. Est non est aspernatur dolor nihil pariatur doloremque. Sapiente vero laudantium qui mollitia et consequatur. Facere atque nihil possimus iste voluptatem aperiam. Quae pariatur ipsum similique. Iusto natus tempore culpa occaecati sit. Temporibus velit in rerum ipsum. Doloribus excepturi occaecati porro beatae minima aut est et. Consequuntur eligendi quia amet fugit sint totam eligendi non. Quidem ad aut enim vitae esse quo hic quas. Unde et provident temporibus et non sed. Sed non voluptas quo illo neque. Illum unde eveniet est veritatis et eum voluptatem. Nesciunt aut et molestias minus. Quis aut iste eum. Omnis aut architecto eligendi modi voluptatem quidem iure. Ipsum perspiciatis eum quia ut esse voluptas. Quis rerum illo reprehenderit quae. Aspernatur consequuntur minus reiciendis ratione magnam. Impedit quis molestias voluptatem dolorum sapiente molestiae. Dolore neque est quisquam facere ex. Quis eum consectetur aut quam modi in nihil. Dolorum est fuga dolores neque et est. Dolorem neque voluptas tempora perferendis dolor voluptates amet. Ad enim quia quas. Mollitia alias provident dolores tempore voluptatibus fugiat perspiciatis sit. Ea ab ducimus ipsam non. Ut magni aperiam et vel. Ut qui quam repellendus totam ipsum est esse. Atque ut maiores dignissimos optio. Reprehenderit nostrum autem voluptas eligendi. Soluta provident natus illo nesciunt expedita. Minima ut dolores quod nihil totam non non. Quis et suscipit ut id molestias officiis.</blockquote>

<h4>Iure et corrupti enim assumenda. Ut sapiente vero placeat quam. Quidem quia ab assumenda sit est. Tempore corporis tenetur molestias et odio nihil</h4>

<ol><li>Cumque alias non porro sequi</li><li>Quaerat provident amet delectus autem aut</li><li>Cum unde omnis ipsum</li></ol>

<blockquote><a title=\"Voluptatem velit facere ipsam.\" href=\"http://quigley.com/autem-quibusdam-magni-consequuntur-et-ex-adipisci-quibusdam.html\">Vitae asperiores et</a> hic sed. Explicabo perspiciatis ea suscipit voluptates <a title=\"Eum aut.\" href=\"http://www.oreilly.com/\"><a title=\"Vitae voluptatem qui velit sunt autem.\" href=\"http://wunsch.com/\">molestiae.</a></a> <a title=\"Sit adipisci eligendi similique.\" href=\"https://www.mcclure.info/repudiandae-est-quasi-unde-et-occaecati\">et quia quasi earum deleniti</a> <a title=\"Magni enim molestias sit in.\" href=\"https://bergnaum.biz/facere-eum-qui-eaque-quod.html\">similique recusandae. Ut fuga</a> nihil occaecati officia. Et quaerat id <a title=\"Expedita molestiae aut.\" href=\"http://stiedemann.org/eaque-omnis-libero-aspernatur-atque-recusandae-quo-in\">magni ut. At quae placeat quaerat voluptas.</a> <a title=\"Est eaque eum corporis.\" href=\"http://pfeffer.com/reiciendis-sint-corporis-explicabo-et-qui-facilis-ut.html\">eligendi aut dolorem incidunt.</a></blockquote>

<h4>Eum consequatur excepturi eum molestiae. Voluptatum voluptas aut enim laborum inventore cumque unde</h4>

<p>Quod <a title=\"A.\" href=\"https://www.durgan.info/qui-quia-rerum-aut-quis-dolorem-sint\">et ipsam inventore maiores</a> animi. Non non nihil optio Alias reiciendis earum facere. Officia aliquid mollitia illum quaerat nostrum Delectus ipsam labore quaerat velit fugiat et. Quos architecto ut repellendus et vero. beatae id et voluptatum iste. Praesentium necessitatibus et et qui. quos distinctio soluta. Nisi quis ea. <a title=\"Quae fugiat blanditiis dicta ad qui quae quia.\" href=\"http://www.halvorson.biz/et-ratione-doloremque-id-officia-provident-et-omnis\">eum esse placeat. Dolore eos</a> dolorem optio. Consequatur vel voluptas et sequi <a title=\"Consequatur molestias perferendis consequuntur incidunt.\" href=\"http://www.dooley.com/\">qui. Quae iure quam</a> beatae Praesentium repudiandae impedit quo qui magni repellat. Dignissimos odit id velit et Possimus labore perferendis velit et et cum. Consequuntur illum repellat possimus neque ipsum occaecati. quibusdam omnis fugit reprehenderit adipisci. Magnam molestiae aspernatur voluptatum. et fuga ullam ea. Dolorem <a title=\"Facere natus aperiam et expedita dolor.\" href=\"https://schoen.com/molestiae-aut-qui-odit-quo-assumenda.html\">soluta totam</a></p>

<p><img alt=\"Rerum quidem enim eveniet aliquam qui inventore amet\" src=\"http://wlc.app/wp-content/uploads/2016/03/10cdc354-aaae-309b-b50a-b71d853dc14e.jpg\"></p>

<h4>Quia quia ipsum cum illo explicabo. Nobis dolor eligendi dolorem esse est et illo. Ea corporis eos ea sint repudiandae reprehenderit tempore</h4>

<p>Sed qui saepe ad eum enim aut. Voluptate at nihil sunt quo sed saepe in. Pariatur totam quia dolores distinctio aut excepturi. Consectetur autem temporibus sed et non est nobis sint.</p>

<p><!--more-->
<img class=\"alignright\" alt=\"Reiciendis quis rerum necessitatibus sed\" src=\"http://wlc.app/wp-content/uploads/2016/03/e0c28319-1182-30a5-a60b-0708515fbc0e.jpg\"></p>

<h2>Est dolorem molestias error. Est magni vel occaecati molestias. Inventore sint consequatur rerum vero quia</h2>

<hr>

<ul><li>Ex culpa rerum facere atque. Eum sit non libero</li><li>Iste et</li><li>Illum magni amet mollitia beatae voluptas</li><li>Sed consequuntur</li><li>Consequatur vel inventore sit perferendis possimus</li><li>Voluptas non veritatis dolores ut atque facilis a</li></ul>

<h5>Veniam sed quia quo ipsa repellendus quo perspiciatis voluptatibus. Odio voluptatem aliquam adipisci velit et in</h5>

<p><img alt=\"Quae quo atque nobis veritatis vel doloribus\" src=\"http://wlc.app/wp-content/uploads/2016/03/de89707d-3fc0-3f1e-ae86-22a00ad75d51.jpg\"></p>

<h6>Ut sed iusto cupiditate. Accusantium dolor nostrum sit et tempore dolor rerum. Omnis dicta dolorem neque deleniti in porro</h6>

<ul><li>Omnis adipisci pariatur delectus</li><li>Corporis tempora repudiandae et cumque</li><li>Unde sint fugit aliquid harum repellendus</li><li>Vitae ullam tempora velit cum labore</li></ul>

<blockquote>Et sed harum odio officia officia eveniet accusantium. Eos quae non itaque qui. Molestias eum ullam voluptas quia. Voluptas in eos natus cupiditate. Nesciunt sapiente quaerat fugit voluptates est. Blanditiis ut iusto odit. Aspernatur et eos consequuntur quibusdam distinctio quia voluptatem.</blockquote>

<h4>Corrupti assumenda a perferendis fugiat quas. Laboriosam et ut quo deleniti nihil. Officiis nihil iure corrupti rerum qui quis</h4>

<ol><li>Eveniet qui</li><li>Pariatur ut est eius qui</li><li>Nihil rem omnis pariatur omnis</li></ol>

<h3>Deserunt necessitatibus ea consectetur inventore. Numquam suscipit dicta omnis ut eaque</h3>

<p>Dolor ex et natus aut dolor. Recusandae non ut alias enim. Dolores dolorem ipsam Rerum recusandae ipsum id. Sed expedita quae autem Saepe aliquam officiis provident nam. eaque ipsam et qui vel <a title=\"Soluta voluptatem animi.\" href=\"http://conroy.org/explicabo-totam-consequuntur-aut-quia-corrupti-similique-ut-dolores\">Iure modi</a> est nam ipsa. Explicabo sit omnis atque et Magnam libero delectus est enim corporis reiciendis. voluptate animi qui enim. Et dolor exercitationem. Consequuntur dolor expedita odio molestias Libero nemo quo similique. Enim qui tenetur suscipit.</p>

<ol><li>Vitae sed quas corporis et</li><li>Dolor dolore</li><li>Et explicabo tempora ut a</li><li>Totam esse quia dicta qui illo eaque</li></ol>
',
                'post_title' => 'Et et placeat laborum qui eum eius',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'et-et-placeat-laborum-qui-eum-eius',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 01:06:37',
                'post_modified_gmt' => '2016-03-26 01:06:37',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=82',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 83,
                'post_author' => 1,
                'post_date' => '2016-03-27 09:24:55',
                'post_date_gmt' => '2016-03-27 09:24:55',
                'post_content' => NULL,
                'post_title' => NULL,
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'open',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => 83,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 09:24:55',
                'post_modified_gmt' => '2016-03-27 09:24:55',
                'post_content_filtered' => NULL,
                'post_parent' => 82,
                'guid' => 'http://wlc.app/wp-content/uploads/2016/03/3040d4c6-e729-3752-a39a-640baf1c2728.jpg',
                'menu_order' => 0,
                'post_type' => 'attachment',
                'post_mime_type' => 'image/jpeg',
                'comment_count' => 0,
            ),

            array(
                'ID' => 84,
                'post_author' => 1,
                'post_date' => '2016-03-26 03:47:07',
                'post_date_gmt' => '2016-03-26 03:47:07',
                'post_content' => '<p><img class=\"alignright\" alt=\"Eius dicta ratione a consequatur similique aut quo odio\" src=\"http://wlc.app/wp-content/uploads/2016/03/849e6031-923a-3a44-be7e-cb5325b4b71f.jpg\"></p>

<h5>Libero sint ut tempore repudiandae. Alias voluptas nobis vel dignissimos omnis ut dolor. Consectetur officia similique doloremque ratione suscipit</h5>

<p><img class=\"aligncenter\" alt=\"Dolor pariatur sit odio totam totam repudiandae ducimus\" src=\"http://wlc.app/wp-content/uploads/2016/03/986cb295-c048-3f96-b7b1-8fe18a56cf70.jpg\"></p>

<h3>Illum deleniti qui distinctio ducimus a. Hic sed natus adipisci tempora at doloribus inventore et. Aut enim possimus similique eum</h3>

<p>Libero et porro fugit delectus sed et. Qui doloremque quae illum sit. Alias deserunt <a title=\"Quia eligendi qui adipisci modi.\" href=\"https://www.hintz.org/at-reiciendis-accusantium-ut-voluptatibus-et-laborum\">ab illo repellat cupiditate necessitatibus.</a> enim tempora. Repudiandae voluptatem laborum cum libero est pariatur et. Minus eligendi qui natus minima Expedita praesentium deleniti velit fuga facilis et in. Quae dolore autem dolore tempore Voluptas laboriosam a quam cupiditate harum sit. eos aperiam quisquam molestias vel. Voluptatibus totam quis</p>

<!--more-->

<h4>Libero aspernatur neque saepe. Vel ut aliquid quo sed sit</h4>

<blockquote>Voluptatem qui commodi et aut beatae illum itaque. Ea aut corrupti asperiores minima. Iure dolorem molestiae modi corrupti molestiae. Quis suscipit sunt voluptas. Culpa qui quod provident placeat Iure quisquam veritatis vel accusantium. Porro cupiditate modi voluptatem voluptatibus quis id <a title=\"Eos quasi magni est corporis neque et odio.\" href=\"http://predovic.com/\">Ut aut sunt nostrum numquam</a> pariatur. Doloribus aut dolores. Suscipit vero qui minima molestiae molestiae cum. Est alias totam. veniam id molestias delectus consequatur <a title=\"Repellat aliquid eos voluptate et iure dolores.\" href=\"http://www.boyle.info/\">reprehenderit.</a> saepe quos totam quis. quod dolore ipsam. Quasi similique asperiores vero est. Voluptas sed molestiae dolor fugit sed Voluptas consequatur porro iste mollitia cupiditate maxime et. Delectus architecto cupiditate omnis. Quas officiis cupiditate et alias. Consequatur culpa ea dolor voluptas rerum. Nisi dolore odit ut non beatae. In doloremque alias ullam. Voluptatem quia corporis sed praesentium. Et autem aliquid quia optio id sint minima. Et doloribus rerum excepturi. Vero autem quis corrupti dolorem similique. Quibusdam magnam aut et sapiente in nam. Libero <a title=\"Maiores veniam voluptatem qui unde similique accusamus nihil.\" href=\"http://www.mclaughlin.com/sit-consequatur-fuga-eum-eaque-sit-ratione-iure-nesciunt\">quo qui consequuntur. Natus</a> dolorum aut est iusto. Amet quia fugit exercitationem asperiores et sequi. Pariatur quisquam est nulla consequatur dolor. ut alias est <a title=\"Ratione alias et mollitia labore voluptatem fuga.\" href=\"https://www.grimes.biz/nihil-est-deserunt-numquam-fuga-quod-dolorem-voluptatem\">minima nemo fuga. Doloremque</a> adipisci autem. Sit voluptates reprehenderit qui. Laborum quas qui Quam fugiat temporibus maxime sint. quam maxime aut quos. Placeat officia rerum minima Autem rerum voluptatem voluptates soluta sint. Et et <a title=\"Consequatur voluptate.\" href=\"http://www.mills.biz/velit-blanditiis-ut-tempore-autem-minus-laborum-doloribus-voluptates.html\">eos.</a> dolores id repudiandae alias. nemo eveniet non laudantium. Est voluptas ut laboriosam id voluptate nemo Natus animi laboriosam enim consequatur placeat.</blockquote>
',
                'post_title' => 'Atque corrupti laboriosam voluptatem',
                'post_excerpt' => NULL,
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => 'atque-corrupti-laboriosam-voluptatem',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-26 03:47:07',
                'post_modified_gmt' => '2016-03-26 03:47:07',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=84',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 85,
                'post_author' => 1,
                'post_date' => '2016-03-27 10:12:27',
                'post_date_gmt' => '0000-00-00 00:00:00',
                'post_content' => '
',
                'post_title' => 'Auto Draft',
                'post_excerpt' => NULL,
                'post_status' => 'auto-draft',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => NULL,
                'post_name' => NULL,
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 10:12:27',
                'post_modified_gmt' => '0000-00-00 00:00:00',
                'post_content_filtered' => NULL,
                'post_parent' => 0,
                'guid' => 'http://wlc.app/?p=85',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

            array(
                'ID' => 86,
                'post_author' => 1,
                'post_date' => '2016-03-27 10:52:57',
                'post_date_gmt' => '2016-03-27 10:52:57',
                'post_content' => '<p><em>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</em></p>
',
                'post_title' => 'Hello world!',
                'post_excerpt' => NULL,
                'post_status' => 'inherit',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => NULL,
                'post_name' => '1-revision-v1',
                'to_ping' => NULL,
                'pinged' => NULL,
                'post_modified' => '2016-03-27 10:52:57',
                'post_modified_gmt' => '2016-03-27 10:52:57',
                'post_content_filtered' => NULL,
                'post_parent' => 1,
                'guid' => 'http://wlc.app/?p=86',
                'menu_order' => 0,
                'post_type' => 'revision',
                'post_mime_type' => NULL,
                'comment_count' => 0,
            ),

        ));
        DB::table('lw_term_relationships')->insert(array(
            
            array(
                'object_id' => 1,
                'term_taxonomy_id' => 1,
                'term_order' => 0,
            ),

            array(
                'object_id' => 4,
                'term_taxonomy_id' => 2,
                'term_order' => 0,
            ),

            array(
                'object_id' => 4,
                'term_taxonomy_id' => 4,
                'term_order' => 0,
            ),

            array(
                'object_id' => 4,
                'term_taxonomy_id' => 5,
                'term_order' => 0,
            ),

            array(
                'object_id' => 4,
                'term_taxonomy_id' => 6,
                'term_order' => 0,
            ),

            array(
                'object_id' => 4,
                'term_taxonomy_id' => 7,
                'term_order' => 0,
            ),

            array(
                'object_id' => 4,
                'term_taxonomy_id' => 8,
                'term_order' => 0,
            ),

            array(
                'object_id' => 8,
                'term_taxonomy_id' => 1,
                'term_order' => 0,
            ),

        ));
        DB::table('lw_term_taxonomy')->insert(array(
            
            array(
                'term_taxonomy_id' => 1,
                'term_id' => 1,
                'taxonomy' => 'category',
                'description' => NULL,
                'parent' => 0,
                'count' => 1,
            ),

            array(
                'term_taxonomy_id' => 2,
                'term_id' => 2,
                'taxonomy' => 'category',
                'description' => NULL,
                'parent' => 0,
                'count' => 1,
            ),

            array(
                'term_taxonomy_id' => 3,
                'term_id' => 3,
                'taxonomy' => 'post_format',
                'description' => NULL,
                'parent' => 0,
                'count' => 0,
            ),

            array(
                'term_taxonomy_id' => 4,
                'term_id' => 4,
                'taxonomy' => 'category',
                'description' => NULL,
                'parent' => 0,
                'count' => 1,
            ),

            array(
                'term_taxonomy_id' => 5,
                'term_id' => 5,
                'taxonomy' => 'post_tag',
                'description' => NULL,
                'parent' => 0,
                'count' => 1,
            ),

            array(
                'term_taxonomy_id' => 6,
                'term_id' => 6,
                'taxonomy' => 'post_tag',
                'description' => NULL,
                'parent' => 0,
                'count' => 1,
            ),

            array(
                'term_taxonomy_id' => 7,
                'term_id' => 7,
                'taxonomy' => 'post_tag',
                'description' => NULL,
                'parent' => 0,
                'count' => 1,
            ),

            array(
                'term_taxonomy_id' => 8,
                'term_id' => 8,
                'taxonomy' => 'post_tag',
                'description' => NULL,
                'parent' => 0,
                'count' => 1,
            ),

        ));
        DB::table('lw_terms')->insert(array(
            
            array(
                'term_id' => 1,
                'name' => 'Uncategorized',
                'slug' => 'uncategorized',
                'term_group' => 0,
            ),

            array(
                'term_id' => 2,
                'name' => 'TRAVEL',
                'slug' => 'travel',
                'term_group' => 0,
            ),

            array(
                'term_id' => 3,
                'name' => 'post-format-image',
                'slug' => 'post-format-image',
                'term_group' => 0,
            ),

            array(
                'term_id' => 4,
                'name' => 'Tutorial',
                'slug' => 'tutorial',
                'term_group' => 0,
            ),

            array(
                'term_id' => 5,
                'name' => 'Laravel',
                'slug' => 'laravel',
                'term_group' => 0,
            ),

            array(
                'term_id' => 6,
                'name' => 'PHP',
                'slug' => 'php',
                'term_group' => 0,
            ),

            array(
                'term_id' => 7,
                'name' => 'Framework',
                'slug' => 'framework',
                'term_group' => 0,
            ),

            array(
                'term_id' => 8,
                'name' => 'Eloquent',
                'slug' => 'eloquent',
                'term_group' => 0,
            ),

        ));
        DB::table('lw_usermeta')->insert(array(
            
            array(
                'umeta_id' => 1,
                'user_id' => 1,
                'meta_key' => 'nickname',
                'meta_value' => 'admin',
            ),

            array(
                'umeta_id' => 2,
                'user_id' => 1,
                'meta_key' => 'first_name',
                'meta_value' => NULL,
            ),

            array(
                'umeta_id' => 3,
                'user_id' => 1,
                'meta_key' => 'last_name',
                'meta_value' => NULL,
            ),

            array(
                'umeta_id' => 4,
                'user_id' => 1,
                'meta_key' => 'description',
                'meta_value' => NULL,
            ),

            array(
                'umeta_id' => 5,
                'user_id' => 1,
                'meta_key' => 'rich_editing',
                'meta_value' => 'true',
            ),

            array(
                'umeta_id' => 6,
                'user_id' => 1,
                'meta_key' => 'comment_shortcuts',
                'meta_value' => 'false',
            ),

            array(
                'umeta_id' => 7,
                'user_id' => 1,
                'meta_key' => 'admin_color',
                'meta_value' => 'fresh',
            ),

            array(
                'umeta_id' => 8,
                'user_id' => 1,
                'meta_key' => 'use_ssl',
                'meta_value' => 0,
            ),

            array(
                'umeta_id' => 9,
                'user_id' => 1,
                'meta_key' => 'show_admin_bar_front',
                'meta_value' => 'true',
            ),

            array(
                'umeta_id' => 10,
                'user_id' => 1,
                'meta_key' => 'lw_capabilities',
                'meta_value' => 'a:1:{s:13:\"administrator\";b:1;}',
            ),

            array(
                'umeta_id' => 11,
                'user_id' => 1,
                'meta_key' => 'lw_user_level',
                'meta_value' => 10,
            ),

            array(
                'umeta_id' => 12,
                'user_id' => 1,
                'meta_key' => 'dismissed_wp_pointers',
                'meta_value' => NULL,
            ),

            array(
                'umeta_id' => 13,
                'user_id' => 1,
                'meta_key' => 'show_welcome_panel',
                'meta_value' => 1,
            ),

            array(
                'umeta_id' => 14,
                'user_id' => 1,
                'meta_key' => 'session_tokens',
                'meta_value' => 'a:2:{s:64:\"8dbd7b3c6f477c613e23e29a89926237087cc2f4c351ea380cc6c002da6ca58c\";a:4:{s:10:\"expiration\";i:1460135215;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:120:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36\";s:5:\"login\";i:1458925615;}s:64:\"d06fa53d3479e8515b98c806a8e671d032f36d43fdd6ccbcf45a876a57c6f9c1\";a:4:{s:10:\"expiration\";i:1460165252;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:120:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36\";s:5:\"login\";i:1458955652;}}',
            ),

            array(
                'umeta_id' => 15,
                'user_id' => 1,
                'meta_key' => 'lw_dashboard_quick_press_last_post_id',
                'meta_value' => 3,
            ),

            array(
                'umeta_id' => 16,
                'user_id' => 1,
                'meta_key' => 'closedpostboxes_post',
                'meta_value' => 'a:0:{}',
            ),

            array(
                'umeta_id' => 17,
                'user_id' => 1,
                'meta_key' => 'metaboxhidden_post',
                'meta_value' => 'a:6:{i:0;s:11:\"postexcerpt\";i:1;s:13:\"trackbacksdiv\";i:2;s:10:\"postcustom\";i:3;s:16:\"commentstatusdiv\";i:4;s:7:\"slugdiv\";i:5;s:9:\"authordiv\";}',
            ),

            array(
                'umeta_id' => 18,
                'user_id' => 1,
                'meta_key' => 'lw_user-settings',
                'meta_value' => 'hidetb=0&libraryContent=browse&post_dfw=off&editor=tinymce',
            ),

            array(
                'umeta_id' => 19,
                'user_id' => 1,
                'meta_key' => 'lw_user-settings-time',
                'meta_value' => 1459069698,
            ),

        ));
        DB::table('lw_users')->insert(array(
            
            array(
                'ID' => 1,
                'user_login' => 'admin',
                'user_pass' => '$P$B2vgglzgsn7Eoqf1eOXHD4zgfabrT40',
                'user_nicename' => 'admin',
                'user_email' => 'admin@genesis.com',
                'user_url' => NULL,
                'user_registered' => '2016-03-25 17:05:32',
                'user_activation_key' => NULL,
                'user_status' => 0,
                'display_name' => 'admin',
            )

        ));
    }
}