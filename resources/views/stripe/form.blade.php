<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stripe payment Int</title>
</head>
<body>
    @if(session()->has('message'))
        <span style="color: green">{{ session('message') }}</span>
    @endif
    <form action="{{ route('make.payment') }}" method="post">
        @csrf
            <script
              src="https://checkout.stripe.com/checkout.js"
              class="stripe-button"
              data-key="pk_test_51JnSYOG5sMnGX2wgYzxt77TsyVCFg0hfWJ7xOdjBwjznjoCgy53JzT5IwJDAVZD2GyMYeM1J0V8PKGlTpO7t6ScV00y7KFKVpZ"
              data-name="Empire"
              data-description="Comfortable cotton t-shirt"
              data-amount="500"
              data-image="https://www.webappfix.com/storage/app/public/site-setting/SRBx2hTgEOaHdozWVR3hgPb3LTdEw9NwajD05FL2.png"
              data-currency="gbp">
            </script>
    </form>
    
</body>
</html>