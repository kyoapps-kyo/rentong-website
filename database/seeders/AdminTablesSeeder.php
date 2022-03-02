<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        \Encore\Admin\Auth\Database\Menu::truncate();
        \Encore\Admin\Auth\Database\Menu::insert(
            [
                [
                    "parent_id" => 0,
                    "order" => 1,
                    "title" => "Dashboard",
                    "icon" => "fa-bar-chart",
                    "uri" => "/",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 9,
                    "title" => "Admin",
                    "icon" => "fa-tasks",
                    "uri" => "",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 10,
                    "title" => "Users",
                    "icon" => "fa-users",
                    "uri" => "auth/users",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 11,
                    "title" => "Roles",
                    "icon" => "fa-user",
                    "uri" => "auth/roles",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 12,
                    "title" => "Permission",
                    "icon" => "fa-ban",
                    "uri" => "auth/permissions",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 13,
                    "title" => "Menu",
                    "icon" => "fa-bars",
                    "uri" => "auth/menu",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 14,
                    "title" => "Operation log",
                    "icon" => "fa-history",
                    "uri" => "auth/logs",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 8,
                    "title" => "利用者管理",
                    "icon" => "fa-users",
                    "uri" => "/adminusers",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 12,
                    "order" => 3,
                    "title" => "ポスト",
                    "icon" => "fa-clone",
                    "uri" => "/topics",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 9,
                    "order" => 4,
                    "title" => "イメージ",
                    "icon" => "fa-picture-o",
                    "uri" => "/imgs",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 9,
                    "order" => 5,
                    "title" => "金額",
                    "icon" => "fa-diamond",
                    "uri" => "/prices",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 2,
                    "title" => "オペレーション",
                    "icon" => "fa-pencil",
                    "uri" => NULL,
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 15,
                    "title" => "Helpers",
                    "icon" => "fa-gears",
                    "uri" => NULL,
                    "permission" => NULL
                ],
                [
                    "parent_id" => 13,
                    "order" => 16,
                    "title" => "Scaffold",
                    "icon" => "fa-keyboard-o",
                    "uri" => "helpers/scaffold",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 13,
                    "order" => 17,
                    "title" => "Database terminal",
                    "icon" => "fa-database",
                    "uri" => "helpers/terminal/database",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 13,
                    "order" => 18,
                    "title" => "Laravel artisan",
                    "icon" => "fa-terminal",
                    "uri" => "helpers/terminal/artisan",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 13,
                    "order" => 19,
                    "title" => "Routes",
                    "icon" => "fa-list-alt",
                    "uri" => "helpers/routes",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 20,
                    "title" => "Media manager",
                    "icon" => "fa-file",
                    "uri" => "media",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 12,
                    "order" => 6,
                    "title" => "貿易事業",
                    "icon" => "fa-bars",
                    "uri" => "/trades",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 12,
                    "order" => 7,
                    "title" => "会社情報",
                    "icon" => "fa-info",
                    "uri" => NULL,
                    "permission" => NULL
                ],
                [
                    "parent_id" => 21,
                    "order" => 0,
                    "title" => "history-images",
                    "icon" => "fa-file-picture-o",
                    "uri" => "/history-imgs",
                    "permission" => NULL
                ]
            ]
        );

        \Encore\Admin\Auth\Database\Permission::truncate();
        \Encore\Admin\Auth\Database\Permission::insert(
            [
                [
                    "name" => "All permission",
                    "slug" => "*",
                    "http_method" => "",
                    "http_path" => "*"
                ],
                [
                    "name" => "Dashboard",
                    "slug" => "dashboard",
                    "http_method" => "GET",
                    "http_path" => "/"
                ],
                [
                    "name" => "Login",
                    "slug" => "auth.login",
                    "http_method" => "",
                    "http_path" => "/auth/login\r\n/auth/logout"
                ],
                [
                    "name" => "User setting",
                    "slug" => "auth.setting",
                    "http_method" => "GET,PUT",
                    "http_path" => "/auth/setting"
                ],
                [
                    "name" => "Auth management",
                    "slug" => "auth.management",
                    "http_method" => "",
                    "http_path" => "/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs"
                ],
                [
                    "name" => "バック利用者管理",
                    "slug" => "back_users",
                    "http_method" => "",
                    "http_path" => "/adminusers*"
                ],
                [
                    "name" => "ポスト管理",
                    "slug" => "topics",
                    "http_method" => "",
                    "http_path" => "/topics*"
                ],
                [
                    "name" => "Admin helpers",
                    "slug" => "ext.helpers",
                    "http_method" => "",
                    "http_path" => "/helpers/*"
                ],
                [
                    "name" => "Media manager",
                    "slug" => "ext.media-manager",
                    "http_method" => "",
                    "http_path" => "/media*"
                ]
            ]
        );

        \Encore\Admin\Auth\Database\Role::truncate();
        \Encore\Admin\Auth\Database\Role::insert(
            [
                [
                    "name" => "Administrator",
                    "slug" => "administrator"
                ],
                [
                    "name" => "システム管理者",
                    "slug" => "system_administrator"
                ],
                [
                    "name" => "運営",
                    "slug" => "operation"
                ]
            ]
        );

        // pivot tables
        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [
                [
                    "role_id" => 1,
                    "menu_id" => 2
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 8
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 9
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 10
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 11
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 13
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 18
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 20
                ],
                [
                    "role_id" => 2,
                    "menu_id" => 8
                ],
                [
                    "role_id" => 2,
                    "menu_id" => 9
                ],
                [
                    "role_id" => 2,
                    "menu_id" => 10
                ],
                [
                    "role_id" => 2,
                    "menu_id" => 11
                ],
                [
                    "role_id" => 2,
                    "menu_id" => 13
                ],
                [
                    "role_id" => 2,
                    "menu_id" => 18
                ],
                [
                    "role_id" => 2,
                    "menu_id" => 20
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 9
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 10
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 11
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 18
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 20
                ]
            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [
                [
                    "role_id" => 1,
                    "permission_id" => 1
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 2
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 3
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 4
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 6
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 7
                ],
                [
                    "role_id" => 3,
                    "permission_id" => 2
                ],
                [
                    "role_id" => 3,
                    "permission_id" => 3
                ],
                [
                    "role_id" => 3,
                    "permission_id" => 4
                ],
                [
                    "role_id" => 3,
                    "permission_id" => 7
                ]
            ]
        );

        // finish
    }
}
