<div>

    <li class="dropdown">
    <a href="#">
        <i class="ri-notification-3-fill" style="font-size: 1.2rem; margin-left: -5px"></i>
        <span class="badge bg-danger rounded-circle " style="margin-bottom: 18px;">{{ $unReadNotificationsCount }}</span>
    </a>
    <ul style="margin-right: -250px; margin-top: 10px">


        <li >

            @forelse($unReadNotifications as $notification)
            <a  wire:click="markAsRead('{{ $notification->id }}')" class="dropdown-item d-flex align-items-center " href="{{route('site.customer.profile')}}">

                <div style="margin-left: 15px">
                    <div class="icon-circle bg-dark">
                        <i class="ri-file-line text-dark" style="font-size: 2.2rem"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">{{ $notification->data['created_date'] }}</div>
                    <span class="font-weight-bold">Order {{ $notification->data['order_ref'] }} status is {{ $notification->data['last_transaction'] }}</span>
                </div>
            </a>

            @empty
                <div class="dropdown-item text-center">No notifications found!</div>
            @endforelse
        </li>



    </ul>
    </li>
</div>
