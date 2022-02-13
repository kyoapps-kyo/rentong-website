//安装laravel-admin
php artisan admin:install
//创建关联模型的控制器
php artisan admin:make ModelsController --model=App\\Models\\Model
//导出admin设置
php artisan admin:export-seed



//创建模型监视者
php artisan make:observer ModelObserver --model=Model
//创建storage的链接
php artisan storage:link
//刷新数据库
php artisan migrate:refresh
//添加数据库表字段
php artisan make:migration add_xxx_and_to_table_name_table --table=table_name

//启动前端编译监控
npm run watch-poll
