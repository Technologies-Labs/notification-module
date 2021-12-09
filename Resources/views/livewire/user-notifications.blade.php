<div class="side-slide" style="overflow: scroll;" wire:ignore.self>
    <span class="popup-closed"><i class="icofont-close"></i></span>
    <div class="slide-meta">
        <div class="tab-content">
            <div class="tab-pane active fade show" id="notifications">
                <h4><i class="icofont-bell-alt"></i>
                    <a href="{{ route('user.all.notifications') }}" title="" data-ripple="">All Notifications</a>
                </h4>
                <ul class="notificationz">

                    @foreach ($notifications as $notification)
                    <li>
                        <figure><img src="{{ asset('images/resources/user4.jpg') }}" alt=""></figure>
                        <div class="mesg-info">
                            <span>{{$notification->message}}</span>
                            <a>{{$notification->created_at->diffForHumans()}}</a>
                        </div>
                    </li>
                    @endforeach

                    <div x-data="{
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
                    }" x-init="observe">

                    </div>

                    @if($notifications && $notifications->hasMorePages())
                    @include('components.loading')
                    @endif

                </ul>
                <a href="{{ route('user.all.notifications') }}" title="" class="main-btn" data-ripple="">view all</a>
            </div>
        </div>
    </div>
</div><!-- side slide message & popup -->
