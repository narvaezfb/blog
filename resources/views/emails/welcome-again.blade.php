@component('mail::message')
# Introduction

Thanks so much for registering

@component('mail::button', ['url' => 'https://laracasts.com'])
Start Browsing
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
