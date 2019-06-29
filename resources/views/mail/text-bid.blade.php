@component('mail::message')
    <html>
    <body>
    <div class="text-fut-bold" style="padding:7%; border:1px #00D9C0 solid; border-radius:30px;">
        <h1 style="font-size:40px; color:#00D9C0">Polysafe</h1>
        <br>
        <h2 class="text-fut-bold"><strong>Новая заявка</strong></h2>
        <br>
        Информация о заявке
        <br>
        <br>
        <strong class="text-fut-bold">Имя:</strong> {{ $formData['name'] }}<br>
        <strong class="text-fut-bold">Телефон:</strong> {{ $formData['phone'] }}<br>
        <strong class="text-fut-bold">Сообщение:</strong> {{ $formData['message'] }}<br>
        <br>
    </div>
    </body>
    </html>
@endcomponent
