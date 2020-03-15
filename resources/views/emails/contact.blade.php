@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
check it out!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
