<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Mailcoach\Actions\Campaigns\SendCampaignAction;
use Spatie\Mailcoach\Models\Campaign;

class SendMissingEmailsCrUpdates4 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'missingEmails:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        (new SendCampaignAction())->execute(Campaign::find(12));

        return 0;
    }
}
