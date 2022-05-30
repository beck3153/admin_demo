會員管理系統DEMO

#前台功能(內建auth)
>註冊帳號
>登入/登出
>會員資料及密碼管理

//權限相關檔案路徑：
app\Http\Controllers\Auth\EditController.php
app\Http\Controllers\Auth\RegisterController.php
app\Providers\AuthServiceProvider.php
app\User.php
//介面路徑：
resources\views\auth\edit.blade.php
//資料庫關聯路徑：
database\migrations\2014_10_12_000000_create_users_table.php
//路由路徑：
routes\web.php

#後臺功能(laravel-admin)
>後臺用戶管理
vendor\encore\laravel-admin
>前台會員管理(含權限)
vendor\encore\laravel-admin\src\Controllers\MemberController.php
vendor\encore\laravel-admin\src\Admin.php
