<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LogErrorNotification extends Notification
{
    use Queueable;

    public function __construct()
    {
    }

    public function via($notifiable)
    {
        return ['mail']; // En este ejemplo, se enviará por correo electrónico.
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Se ha detectado un error en el log del dron.')
                    ->action('Revisar', url('/mapa'))
                    ->line('Gracias por usar nuestra aplicación!');
    }
}
