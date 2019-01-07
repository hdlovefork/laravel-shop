<?php
namespace Deployer;

require 'recipe/laravel.php';

set('repository', 'https://github.com/hdlovefork/laravel-shop.git');
add('shared_files', []);
add('shared_dirs', []);
add('copy_dirs',['node_modules','vendor']);
set('writable_dirs', []);

host('122.114.179.93')
    ->user('root') // 使用 root 账号登录
    ->identityFile('./id_rsa') // 指定登录密钥文件路径
    ->become('www') // 以 www 身份执行命令
    ->set('deploy_path', '/www/wwwroot/laravel_shop'); // 指定部署目录

// 定义一个上传 .env 文件的任务
desc('Upload .env file');
task('env:upload', function() {
    // 将本地的 .env 文件上传到代码目录的 .env
    upload('.env.production', '{{release_path}}/.env');
});

desc('npm');

task('deploy:npm', function () {
    // release_path 是 Deployer 的一个内部变量，代表当前代码目录路径
    // run() 的默认超时时间是 5 分钟，而 yarn 相关的操作又比较费时，因此我们在第二个参数传入 timeout = 600，指定这个命令的超时时间是 10 分钟
    run('cd {{release_path}} && npm install && npm run production', ['timeout' => 600]);
});

// 定义一个后置钩子，在 deploy:shared 之后执行 env:upload 任务
after('deploy:shared', 'env:upload');

after('deploy:failed', 'deploy:unlock');
after('deploy:vendors', 'deploy:npm');
before('deploy:symlink', 'artisan:migrate');
// 在 deploy:vendors 之前调用 deploy:copy_dirs
before('deploy:vendors', 'deploy:copy_dirs');
