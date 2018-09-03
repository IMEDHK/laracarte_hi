@component('mail::message')
# Introduction

The body of your message.
{{ $msg->name }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent
{{ $msg->email }}
{{ $msg->message}}
{{ $msg->file}}
Thanks,<br>
{{ config('app.name') }}
@endcomponent
