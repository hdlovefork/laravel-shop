<?php

namespace Deployer;

use Deployer\Component\PharUpdate\Update;

require 'recipe/laravel.php';

set('repository', 'https://gitee.com/deanhwong/laravel_shop.git');
add('shared_files', []);
add('shared_dirs', []);
add('copy_dirs', ['node_modules', 'vendor']);
set('writable_dirs', []);

host('47.105.119.49')
    ->user('root')// 使用 root 账号登录
    ->identityFile('./laravel_shop_aliyun.pem')// 指定登录密钥文件路径
    ->become('www-data')// 以 www 身份执行命令
    ->set('branch', 'es')
    ->set('deploy_path', '/var/www/laravel_shop'); // 指定部署目录

host('47.104.246.60')
    ->user('root')// 使用 root 账号登录
    ->identityFile('./laravel_shop_aliyun.pem')// 指定登录密钥文件路径
    ->become('www-data')// 以 www 身份执行命令
    ->set('branch', 'es')
    ->set('deploy_path', '/var/www/laravel_shop'); // 指定部署目录

host('47.105.78.70')
    ->user('root')// 使用 root 账号登录
    ->identityFile('./laravel_shop_aliyun.pem')// 指定登录密钥文件路径
    ->become('www-data')// 以 www 身份执行命令
    ->set('branch', 'es')
    ->set('deploy_path', '/var/www/laravel_shop'); // 指定部署目录

// 定义一个上传 .env 文件的任务
desc('Upload .env file');
task('env:upload', function () {
    // 将本地的 .env 文件上传到代码目录的 .env
    upload('.env.production', '{{release_path}}/.env');
});

// 定义一个前端编译的任务
desc('Yarn');
task('deploy:yarn', function () {
    // release_path 是 Deployer 的一个内部变量，代表当前代码目录路径
    // run() 的默认超时时间是 5 分钟，而 yarn 相关的操作又比较费时，因此我们在第二个参数传入 timeout = 600，指定这个命令的超时时间是 10 分钟
    run('cd {{release_path}} && SASS_BINARY_SITE=http://npm.taobao.org/mirrors/node-sass yarn && yarn production', ['timeout' => 600]);
});

// 定义一个前端编译的任务
desc('Npm');
task('deploy:npm', function () {
    // release_path 是 Deployer 的一个内部变量，代表当前代码目录路径
    // run() 的默认超时时间是 5 分钟，而 yarn 相关的操作又比较费时，因此我们在第二个参数传入 timeout = 600，指定这个命令的超时时间是 10 分钟
    run('cd {{release_path}} && SASS_BINARY_SITE=http://npm.taobao.org/mirrors/node-sass npm install && npm run production', ['timeout' => 600]);
});

desc('db:seed');
task('db:seed',function (){
    run('{{bin/php}} {{release_path}}/artisan db:seed');
});

// 定义一个 执行 es:migrate 命令的任务
desc('Execute elasticsearch migrate');
task('es:migrate', function() {
    // {{bin/php}} 是 Deployer 内置的变量，是 PHP 程序的绝对路径。
//    run('mkdir -p /www/server/elasticsearch-6.5.4/config/analysis');
//    upload('database/synonyms.txt','/www/server/elasticsearch-6.5.4/config/analysis/synonyms.txt');
    run('{{bin/php}} {{release_path}}/artisan es:migrate');
})->once();

desc('Import admin data');
task('admin:import', function () {
    run('{{bin/php}} {{release_path}}/artisan admin:import');
})->once();

desc('Restart Horizon');
task('horizon:terminate', function() {
    run('{{bin/php}} {{release_path}}/artisan horizon:terminate');
});

after('deploy:shared', 'env:upload');
after('deploy:failed', 'deploy:unlock');
after('deploy:vendors', 'artisan:migrate');
before('deploy:vendors', 'deploy:copy_dirs');
after('deploy:vendors','admin:import');
after('admin:import','es:migrate');
after('admin:import','db:seed');
after('deploy:copy_dirs','deploy:yarn');
after('deploy:symlink', 'horizon:terminate');