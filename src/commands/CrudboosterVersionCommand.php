<?php namespace crocodicstudio\crudbooster\commands;

use App;
use Illuminate\Console\Command;

class CrudboosterVersionCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'webillium:version';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Webillium CMS Version Command';

    /**
     * Execute the console command.
     *
     * @return mixed
     */

    public static $version = "5.5.7";

    public function handle()
    {
        $this->info(static::$version);
    }
}
