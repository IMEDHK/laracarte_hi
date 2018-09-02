<?php

namespace App\Console\Commands;

use App\Message;

use App\Scopes\DateScapable;
use Illuminate\Console\Command;

class cleandatabase extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laracarte:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'clean';

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


        Message::TwoMonthesAgo()->delete();
    $this->info('Database cleaned');
    }
}
