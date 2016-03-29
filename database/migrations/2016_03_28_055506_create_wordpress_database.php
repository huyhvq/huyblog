<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWordpressDatabase extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
         public function up()
         {
            
	    /**
	     * Table: lw_commentmeta
	     */
	    Schema::create('lw_commentmeta', function($table) {
                $table->increments('meta_id')->unsigned();
                $table->bigInteger('comment_id')->unsigned();
                $table->string('meta_key', 255)->nullable();
                $table->longText('meta_value')->nullable();
                $table->index('comment_id');
                $table->index('meta_key');
            });


	    /**
	     * Table: lw_comments
	     */
	    Schema::create('lw_comments', function($table) {
                $table->increments('comment_ID')->unsigned();
                $table->bigInteger('comment_post_ID')->unsigned();
                $table->('comment_author');
                $table->string('comment_author_email', 100);
                $table->string('comment_author_url', 200);
                $table->string('comment_author_IP', 100);
                $table->dateTime('comment_date')->default("0000-00-00 00:00:00");
                $table->dateTime('comment_date_gmt')->default("0000-00-00 00:00:00");
                $table->text('comment_content');
                $table->integer('comment_karma');
                $table->string('comment_approved', 20)->default("1");
                $table->string('comment_agent', 255);
                $table->string('comment_type', 20);
                $table->bigInteger('comment_parent')->unsigned();
                $table->bigInteger('user_id')->unsigned();
                $table->index('comment_post_ID');
                $table->index('comment_approved_date_gmt');
                $table->index('comment_approved_date_gmt');
                $table->index('comment_date_gmt');
                $table->index('comment_parent');
                $table->index('comment_author_email');
            });


	    /**
	     * Table: lw_links
	     */
	    Schema::create('lw_links', function($table) {
                $table->increments('link_id')->unsigned();
                $table->string('link_url', 255);
                $table->string('link_name', 255);
                $table->string('link_image', 255);
                $table->string('link_target', 25);
                $table->string('link_description', 255);
                $table->string('link_visible', 20)->default("Y");
                $table->bigInteger('link_owner')->default("1")->unsigned();
                $table->integer('link_rating');
                $table->dateTime('link_updated')->default("0000-00-00 00:00:00");
                $table->string('link_rel', 255);
                $table->mediumText('link_notes');
                $table->string('link_rss', 255);
                $table->index('link_visible');
            });


	    /**
	     * Table: lw_options
	     */
	    Schema::create('lw_options', function($table) {
                $table->increments('option_id')->unsigned();
                $table->string('option_name', 191);
                $table->longText('option_value');
                $table->string('autoload', 20)->default("yes");
                $table->index('option_name');
            });


	    /**
	     * Table: lw_postmeta
	     */
	    Schema::create('lw_postmeta', function($table) {
                $table->increments('meta_id')->unsigned();
                $table->bigInteger('post_id')->unsigned();
                $table->string('meta_key', 255)->nullable();
                $table->longText('meta_value')->nullable();
                $table->index('post_id');
                $table->index('meta_key');
            });


	    /**
	     * Table: lw_posts
	     */
	    Schema::create('lw_posts', function($table) {
                $table->increments('ID')->unsigned();
                $table->bigInteger('post_author')->unsigned();
                $table->dateTime('post_date')->default("0000-00-00 00:00:00");
                $table->dateTime('post_date_gmt')->default("0000-00-00 00:00:00");
                $table->longText('post_content');
                $table->text('post_title');
                $table->text('post_excerpt');
                $table->string('post_status', 20)->default("publish");
                $table->string('comment_status', 20)->default("open");
                $table->string('ping_status', 20)->default("open");
                $table->string('post_password', 20);
                $table->string('post_name', 200);
                $table->text('to_ping');
                $table->text('pinged');
                $table->dateTime('post_modified')->default("0000-00-00 00:00:00");
                $table->dateTime('post_modified_gmt')->default("0000-00-00 00:00:00");
                $table->longText('post_content_filtered');
                $table->bigInteger('post_parent')->unsigned();
                $table->string('guid', 255);
                $table->integer('menu_order');
                $table->string('post_type', 20)->default("post");
                $table->string('post_mime_type', 100);
                $table->bigInteger('comment_count');
                $table->index('post_name');
                $table->index('type_status_date');
                $table->index('type_status_date');
                $table->index('type_status_date');
                $table->index('type_status_date');
                $table->index('post_parent');
                $table->index('post_author');
            });


	    /**
	     * Table: lw_term_relationships
	     */
	    Schema::create('lw_term_relationships', function($table) {
                $table->increments('object_id')->unsigned();
                $table->increments('term_taxonomy_id')->unsigned();
                $table->integer('term_order');
                $table->index('term_taxonomy_id');
            });


	    /**
	     * Table: lw_term_taxonomy
	     */
	    Schema::create('lw_term_taxonomy', function($table) {
                $table->increments('term_taxonomy_id')->unsigned();
                $table->bigInteger('term_id')->unsigned();
                $table->string('taxonomy', 32);
                $table->longText('description');
                $table->bigInteger('parent')->unsigned();
                $table->bigInteger('count');
                $table->index('term_id_taxonomy');
                $table->index('term_id_taxonomy');
                $table->index('taxonomy');
            });


	    /**
	     * Table: lw_termmeta
	     */
	    Schema::create('lw_termmeta', function($table) {
                $table->increments('meta_id')->unsigned();
                $table->bigInteger('term_id')->unsigned();
                $table->string('meta_key', 255)->nullable();
                $table->longText('meta_value')->nullable();
                $table->index('term_id');
                $table->index('meta_key');
            });


	    /**
	     * Table: lw_terms
	     */
	    Schema::create('lw_terms', function($table) {
                $table->increments('term_id')->unsigned();
                $table->string('name', 200);
                $table->string('slug', 200);
                $table->bigInteger('term_group');
                $table->index('slug');
                $table->index('name');
            });


	    /**
	     * Table: lw_usermeta
	     */
	    Schema::create('lw_usermeta', function($table) {
                $table->increments('umeta_id')->unsigned();
                $table->bigInteger('user_id')->unsigned();
                $table->string('meta_key', 255)->nullable();
                $table->longText('meta_value')->nullable();
                $table->index('user_id');
                $table->index('meta_key');
            });


	    /**
	     * Table: lw_users
	     */
	    Schema::create('lw_users', function($table) {
                $table->increments('ID')->unsigned();
                $table->string('user_login', 60);
                $table->string('user_pass', 255);
                $table->string('user_nicename', 50);
                $table->string('user_email', 100);
                $table->string('user_url', 100);
                $table->dateTime('user_registered')->default("0000-00-00 00:00:00");
                $table->string('user_activation_key', 255);
                $table->integer('user_status');
                $table->string('display_name', 250);
                $table->index('user_login_key');
                $table->index('user_nicename');
            });


         }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
         public function down()
         {
            
	            Schema::drop('lw_commentmeta');
	            Schema::drop('lw_comments');
	            Schema::drop('lw_links');
	            Schema::drop('lw_options');
	            Schema::drop('lw_postmeta');
	            Schema::drop('lw_posts');
	            Schema::drop('lw_term_relationships');
	            Schema::drop('lw_term_taxonomy');
	            Schema::drop('lw_termmeta');
	            Schema::drop('lw_terms');
	            Schema::drop('lw_usermeta');
	            Schema::drop('lw_users');
         }

}