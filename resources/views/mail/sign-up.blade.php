@component('mail::message')

Selamat Datang di {{ config('app.name') }}, {{ $user->name }}!

Klik tombol di bawah ini untuk mengkonfirmasi email Anda.

@component('mail::button', ['url' => route('verification.notice')])
Konfirmasi Email
@endcomponent

@endcomponent
