@extends('layouts.app')

@section('content')
    <button class="btn btn-primary" onclick="geolocation()">現在地から探す</button>
    <div class="list-group">
        @foreach ($response as $key => $shop)
        <a href="/shop/{{ $shop->id }}" class="list-group-item list-group-item-action">
            店名:{{ $shop->name }}<br/>
            住所:{{ $shop->address }}<br/>
            電話番号:{{ $shop->phone }}<br/>
            距離:{{ round($shop->distance * 0.001, 2) }}km<br/>
        </a>
        @endforeach
    </div>
@endsection

<script type="text/javascript">
    function geolocation()
    {
        navigator.geolocation.getCurrentPosition(function(position) {
            location.href = "https://sample.test/shop?latitude="
            + position.coords.latitude + "&longitude=" + position.coords.longitude;
        });
    }
</script>