@component('mail::message')
# New Message

You received a new message from 

## Message From:
__Name:__ {{$data['name']}}<br>

## Message Content:
{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
