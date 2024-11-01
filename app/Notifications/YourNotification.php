<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\WebPush\WebPushChannel;
use NotificationChannels\WebPush\WebPushMessage;

class YourNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }
    
    public function via($notifiable)
    {
        return [WebPushChannel::class];
    }
     
    public function toWebPush($notifiable, $notification)
    {
        return WebPushMessage::create()
            ->title('Judul Notifikasi')
            ->body('Isi dari notifikasi.')
            ->icon('icon.png')
            ->data(['key' => 'value']);
    }
     
    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     * public function via(object $notifiable): array
     * {
     *  return ['mail'];
     * }
    **/
    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
