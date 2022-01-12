<div class="main-wraper" wire:ignore.self>
    <h3 class="main-title">الأشعارات</h3>
    <div class="editing-interest">
        <div class="notification-box">
            <ul>
                @foreach ($notifications as $notification)
                <li id="notification-{{$notification->id}}">
                    <figure><img src="{{ asset('images/resources/friend-avatar.jpg') }}" alt=""></figure>
                    <div class="notifi-meta">
                        <p>{{$notification->message}}</p>
                        <span><i class="fa fa-thumbs-up"></i> {{$notification->created_at->diffForHumans()}}</span>
                    </div>
                    <i class="del icofont-close-circled" wire:click="readNotification({{$notification->id}})" title="Remove"></i>
                </li>
                @endforeach
            </ul>
        </div>
        <div
        x-data="{
            observe() {
                let observer = new IntersectionObserver((entries) => {
                console.log(entries)
                entries.forEach(entry => {
                    if (entry.isIntersecting)
                    {
                        @this.call('loadMore')
                    }
                   })
                },{
                   root: null
                })
                    observer.observe(this.$el)
            }
        }"
        x-init="observe">

    </div>

    @if($notifications && $notifications->hasMorePages())
        @include('components.loading')
    @endif
        {{-- <div class="sp sp-bars"></div> --}}
    </div>
</div>
