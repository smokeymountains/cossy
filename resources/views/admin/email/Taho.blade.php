@component('mail::message')
   <h2 text-align="center">{{ $subject }}</h2> 
    {!! $body !!}
    @component('mail::button', ['url' => 'https://tahotz.org/donate'])
        Donate now
    @endcomponent
    @component('mail::button', ['url' => 'https://tahotz.org'])
        Visit Us
    @endcomponent
@endcomponent
