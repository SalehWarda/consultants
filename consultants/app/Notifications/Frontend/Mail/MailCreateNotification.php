<?php

namespace App\Notifications\Frontend\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MailCreateNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $mail;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($mail)
    {
        //
        $this->mail = $mail;
    }


    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line($this->mail->subject)
                    ->line($this->mail->created_at)
                    ->line($this->mail->name)
                    ->from($this->mail->email)
                    ->line($this->mail->message);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'customer_name' =>$this->mail->name,
            'mail_id' => $this->mail->id,
            'created_date' => $this->mail->created_at->format('M d, Y'),
        ];
    }
}
