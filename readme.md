## About laravel-adminlte

laravel-adminlte is a background template built by the lightweight front-end framework adminLte and laravel framework. It is not as large and complex as the laravel-admin background. I also like adminlte's style design, and it feels much better than layuiAdmin.
-[laravel](https://laravel.com).
-[adminLte](https://adminlte.io/).

## Main function introduction
#### 1.laravel comes with auth login function;
#### 2. Use iframe architecture;
#### 3. Realize the RBAC permission function of administrators, roles, menus, and permissions;
#### 4. Supporting menu management, administrator management, role management, authority management;
#### 5. The jquery plugins such as icheck, datepicker, select2, datatable, etc. are called and compiled through Mix.

## Project access
#### Address: [adminlte.onlineze.com](http://adminlte.onlineze.com).
#### Username: youke
#### Password: youke

## Project screenshot

![image](https://jingze.oss-cn-beijing.aliyuncs.com/jzblog/%E5%BE%AE%E4%BF%A1%E5%9B%BE%E7%89%87_20191210172504.png)
![image](https://jingze.oss-cn-beijing.aliyuncs.com/jzblog/%E5%BE%AE%E4%BF%A1%E5%9B%BE%E7%89%87_20191210173354.png)

## Installation

#### 1. After cloning the code, composer is installed
```
composer install
```
#### 2. Create key and create .env for related configuration

```
php artisan key:generate
```
#### 3. Database migration

```
php artisan migrate
```

#### 4. Add necessary data

```
php artisan db:seeder
```
> admin is a super user with all menus and permissions.
