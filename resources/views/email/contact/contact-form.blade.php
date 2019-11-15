@component('mail::message')
# Greetings, this is a mail from the user : <b>{{ $data['name'] }}</b>

It's message is : <b> {{ $data['message'] }} </b>

It's email is: <b> {{ $data['email'] }} </b>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
