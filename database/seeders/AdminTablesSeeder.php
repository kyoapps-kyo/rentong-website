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
                    "order" => 11,
                    "title" => "Admin",
                    "icon" => "fa-tasks",
                    "uri" => "",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 12,
                    "title" => "Users",
                    "icon" => "fa-users",
                    "uri" => "auth/users",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 13,
                    "title" => "Roles",
                    "icon" => "fa-user",
                    "uri" => "auth/roles",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 14,
                    "title" => "Permission",
                    "icon" => "fa-ban",
                    "uri" => "auth/permissions",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 15,
                    "title" => "Menu",
                    "icon" => "fa-bars",
                    "uri" => "auth/menu",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 16,
                    "title" => "Operation log",
                    "icon" => "fa-history",
                    "uri" => "auth/logs",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 10,
                    "title" => "???????????????",
                    "icon" => "fa-users",
                    "uri" => "/adminusers",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 12,
                    "order" => 3,
                    "title" => "?????????",
                    "icon" => "fa-clone",
                    "uri" => NULL,
                    "permission" => NULL
                ],
                [
                    "parent_id" => 9,
                    "order" => 5,
                    "title" => "????????????",
                    "icon" => "fa-picture-o",
                    "uri" => "/imgs",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 9,
                    "order" => 6,
                    "title" => "??????",
                    "icon" => "fa-diamond",
                    "uri" => "/prices",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 2,
                    "title" => "?????????????????????",
                    "icon" => "fa-pencil",
                    "uri" => NULL,
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 17,
                    "title" => "Helpers",
                    "icon" => "fa-gears",
                    "uri" => NULL,
                    "permission" => NULL
                ],
                [
                    "parent_id" => 13,
                    "order" => 18,
                    "title" => "Scaffold",
                    "icon" => "fa-keyboard-o",
                    "uri" => "helpers/scaffold",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 13,
                    "order" => 19,
                    "title" => "Database terminal",
                    "icon" => "fa-database",
                    "uri" => "helpers/terminal/database",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 13,
                    "order" => 20,
                    "title" => "Laravel artisan",
                    "icon" => "fa-terminal",
                    "uri" => "helpers/terminal/artisan",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 13,
                    "order" => 21,
                    "title" => "Routes",
                    "icon" => "fa-list-alt",
                    "uri" => "helpers/routes",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 22,
                    "title" => "Media manager",
                    "icon" => "fa-file",
                    "uri" => "media",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 12,
                    "order" => 7,
                    "title" => "????????????",
                    "icon" => "fa-bars",
                    "uri" => "/trades",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 12,
                    "order" => 8,
                    "title" => "????????????",
                    "icon" => "fa-info",
                    "uri" => NULL,
                    "permission" => NULL
                ],
                [
                    "parent_id" => 9,
                    "order" => 4,
                    "title" => "???????????????",
                    "icon" => "fa-archive",
                    "uri" => "/topics",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 20,
                    "order" => 9,
                    "title" => "HISTORY-IMAGES",
                    "icon" => "fa-picture-o",
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
                    "name" => "????????????????????????",
                    "slug" => "back_users",
                    "http_method" => "",
                    "http_path" => "/adminusers*"
                ],
                [
                    "name" => "???????????????",
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
                ],
                [
                    "name" => "about-history-images",
                    "slug" => "about-history-images",
                    "http_method" => "",
                    "http_path" => "/history-imgs*"
                ],
                [
                    "name" => "????????????",
                    "slug" => "trade",
                    "http_method" => "",
                    "http_path" => "/trades*"
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
                    "name" => "?????????????????????",
                    "slug" => "system_administrator"
                ],
                [
                    "name" => "??????",
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
                    "role_id" => 1,
                    "menu_id" => 21
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 22
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 23
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
                    "role_id" => 2,
                    "menu_id" => 21
                ],
                [
                    "role_id" => 2,
                    "menu_id" => 22
                ],
                [
                    "role_id" => 2,
                    "menu_id" => 23
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
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 21
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 22
                ],
                [
                    "role_id" => 3,
                    "menu_id" => 23
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
                    "role_id" => 2,
                    "permission_id" => 9
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 10
                ],
                [
                    "role_id" => 2,
                    "permission_id" => 11
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
                ],
                [
                    "role_id" => 3,
                    "permission_id" => 10
                ],
                [
                    "role_id" => 3,
                    "permission_id" => 11
                ]
            ]
        );

        // finish
    }
}
