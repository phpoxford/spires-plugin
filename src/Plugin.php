<?php
declare(strict_types=1);

namespace YourNamespace\Spires\PluginName;

use Spires\Plugins\Message\Inbound\Message;
use Spires\Plugins\ChannelOperations\Inbound\JoinSystemMessage;

class Plugin
{
    public function hello(Message $message)
    {
        if ($message->text() === 'hello') {
            reply('world');
        }
    }

    public function welcome(JoinSystemMessage $message)
    {
        send_to($message->targets(), "welcome {$message->nickname()}");
    }
}
