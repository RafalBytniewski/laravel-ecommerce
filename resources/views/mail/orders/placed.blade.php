<x-mail::message>
# Order placed succefully

Thank you for your order. Yout order number is: {{ $order->id }}

<x-mail::button :url="$url">
View Order
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
