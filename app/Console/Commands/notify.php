<?php

namespace App\Console\Commands;

use App\Mail\NotifyEmail;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email notify for all users every day';

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
        //$users= User::select('email')->get();
        $emails = User::pluck('email')->toArray();
        foreach ($emails as $email) {
            // to do how to send emails in laravel
            $data = ['title' => 'programming', 'body' => 'php'];
            Mail::to($email)->send(new NotifyEmail($data));
        }
    }
}
