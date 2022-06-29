<?php

namespace App\Console\Commands;

use App\Models\Client;
use Illuminate\Console\Command;

class downloadClients extends Command
{
/**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:download-clients';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download clients from api and insert into DB ';

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
     * @return int
     */
    public function handle()
    {
        Client::getClients();

        return 0;
    }
}