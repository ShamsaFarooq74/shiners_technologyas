<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactUsNotification extends Notification
{
    use Queueable;
protected $contact_us;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($contact_us)
    {
        $this->contact_us= $contact_us;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
      $url=route('home');
      return (new MailMessage)
          ->greeting(__('Hello Admin') )
          ->subject(__('You have new contact at ') . env('APP_NAME', ""))
          ->line("Subject : ". $this->contact_us->subject)
          ->line("Message is: ".$this->contact_us->message)
          ->line('His Email'. $this->contact_us->email)
          ->action('Login', url($url));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
