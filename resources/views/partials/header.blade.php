@php
    $topbarMenu = config('menues.topbarMenu');
    $topbarIcons = config('menues.topbarIcons');
@endphp


<header>
    <div class="top-fixed">
        <div class="topbar d-flex container">
            <div class="menu d-flex">
                <ul>
                    @foreach ($topbarMenu as $item)
                    <li><a href="{{route($item['name'])}}">{{$item['text']}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="logo d-flex"></div>
            <div class="menu-account d-flex">
                @foreach ($topbarIcons as $icon)
                <p><i class="{{$icon['icon']}}"></i></p>
                @endforeach

            </div>
        </div>
    </div>
</header>
