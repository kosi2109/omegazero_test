@component('mail::message')

{{$body}}

Thanks, MegaZero<br>
{{ config('app.name') }}
@endcomponent
