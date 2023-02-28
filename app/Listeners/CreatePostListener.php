<?php

namespace App\Listeners;

use App\Events\TestEvent;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreatePostListener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TestEvent $event)
    {
        $apiToken = "6055454347:AAHvI14rtANfWGjqM73tIG7oW9vmwNnBq9E";
        $data = [
            'chat_id' => '1000851302',
            'text' => "Title: ".$event->post[0]."\r\nText: ".$event->post[1]."\r\nLikes: ".$event->post[2],
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
        // Do what you want with result

    }
}
