<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPI Payment</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-6 rounded-lg shadow-lg text-center w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-700 mb-4">Pay via UPI</h1>
        <p class="text-gray-600 mb-6">Click the button below to open your UPI app.</p>

        <a href="{{ url('/upi-payment?amount=5') }}" class="block">
            <button class="bg-green-500 text-white font-semibold px-6 py-3 rounded-lg hover:bg-green-600 w-full transition">
                Pay ₹5 via UPI
            </button>
        </a>

        <p class="text-sm text-gray-500 mt-4">Supported on Google Pay, PhonePe, Paytm, and more.</p>
    </div>

</body>
</html>
