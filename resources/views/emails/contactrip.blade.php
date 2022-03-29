@component('mail::message')
# Welcome to Sojourplanet

Dear {{ $data['trait'] }} {{ $data['name'] }} {{ $data['surname'] }}
{{ $data['season'] }}

{{ $data['duration'] }}

{{ $data['travellers'] }}

{{ $data['triptype'] }}
{{ $data['postname'] }}
{{ $data['countryname'] }}
{{ $data['subregion'] }}

@component('mail::button', ['url' => 'https://sojournplanet.com/home'])
Visit
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
