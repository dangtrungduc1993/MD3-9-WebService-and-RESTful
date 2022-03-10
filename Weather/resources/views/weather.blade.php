<!doctype html>

<html>

<head>

    <title> Weather using OpenWeatherMap with Laravel</title>

</head>

<body>

<div class="report-container">

    <h2>{{ $data->name }} Weather Status</h2>

    <div class="time">

        @php

            date_default_timezone_set('Asia/Ho_Chi_Minh');

        @endphp

        <div>{{ date("l g:i a", $currentTime) }}</div>

        <div>{{ date("jS F, Y",$currentTime) }}</div>

        <div>{{ ucwords($data->weather[0]->description) }}</div>

    </div>

    <div class="weather-forecast">

        <img

            src="http://openweathermap.org/img/w/{{ $data->weather[0]->icon}}.png"

            class="weather-icon" /> {{ $data->main->temp  - 273}} °C<span

    </div>

    <div class="time">

        <div>Humidity: {{ $data->main->humidity }} %</div>

        <div>Wind: {{  $data->wind->speed }} m/s</div>

    </div>

</div>

</body>

</html>
