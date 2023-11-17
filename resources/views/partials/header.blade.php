@php
    $topbarMenu = config('menues.topbarMenu');
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
                <p v-for="(icon, index) in icons"><i class="[icon.icon]"></i></p>
            </div>
        </div>
    </div>
</header>
