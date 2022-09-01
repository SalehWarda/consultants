<?php

namespace App\Http\Livewire\Backend\Header;

use Livewire\Component;

class MailNotificationComponent extends Component
{

    public $unReadNotificationsCount = '';
    public $unReadNotifications;

    public function mount()
    {
        $this->unReadNotificationsCount = auth('admin')->user()->unreadNotifications()->whereType('App\Notifications\Frontend\Mail\MailCreateNotification')->count();
        $this->unReadNotifications = auth('admin')->user()->unreadNotifications()->get();
    }


    public function markAsRead($id)
    {
        $notification = auth('admin')->user()->unreadNotifications()->where('id', $id)->first();
        $notification->markAsRead();
        return redirect()->route('admin.mail.mail_details',$notification->data['mail_id']);
    }

    public function render()
    {
        return view('livewire.backend.header.mail-notification-component');
    }
}
