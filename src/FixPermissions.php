<?php

namespace tbirrell\StorageAutofix;

use App\DripEmailer;
use App\User;
use Illuminate\Console\Command;

class FixPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'storage:fix-permissions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fix \'Permission Denied\' error in "storage\logs" (requires sudo)';

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
     * @return void
     */
    public function handle()
    {
        system('sudo chown -R $USER:www-data storage');
        system('sudo chown -R $USER:www-data bootstrap/cache');
        system('chmod -R 775 storage');
        system('chmod -R 775 bootstrap/cache');
        $this->info('Fixed permissions');
    }
}