@php
    $footerMenu = config('menues.footerMenu');
    $footerIcons = config('menues.footerIcons');
@endphp


<footer>

    <!-- Info footer -->
    <div class="row d-flex">
        <div class="info d-flex">
            <div class="property">
                <p class="text-strong">Boolando s.r.l.</p>
                <ul>
                    @foreach ($footerMenu as $item)
                        <li><a href="#">{{ $item['text'] }}</a></li>
                    @endforeach

                </ul>
            </div>
            <div class="social">
                <p>Trovaci anche su</p>
                <ul>
                    @foreach ($footerIcons as $icons)
                        <li><i class="{{$icons['icon']}}"></i></li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <!-- /Info footer -->

</footer>
