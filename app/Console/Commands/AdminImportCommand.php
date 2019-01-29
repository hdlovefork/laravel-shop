<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class AdminImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:import {script=admin.sql}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '导入database目录下的sql脚本，如：admin.sql';
    protected $process;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $file = $this->argument('script');
        $this->process = new Process(sprintf(
            'mysql -u%s -p%s %s < %s',
            config('database.connections.mysql.username'),
            config('database.connections.mysql.password'),
            config('database.connections.mysql.database'),
            $path = database_path($file)
        ));
        try{
            $this->process->mustRun();
            $this->info("导入后台数据{$path}成功");
        }catch (\Exception $e){
            $this->error("导入后台数据{$path}失败".PHP_EOL.$e->getMessage());
        }
    }
}
