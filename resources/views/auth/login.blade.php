<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Institut Teknologi Del</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for finer control */
        body {
            font-family: 'Arial', sans-serif;
        }
        .input-field {
            background-color: #e6f0fa; /* Light blue background for inputs */
            border: 1px solid #d1d5db; /* Light gray border */
            border-radius: 0; /* No rounded corners for inputs */
        }
        .input-field:focus {
            outline: none;
            border-color: #3b82f6; /* Blue border on focus */
        }
        .sign-in-btn {
            background-color: #1e90ff; /* Dodger blue for the button */
            border-radius: 4px; /* Slightly rounded corners */
        }
        .sign-in-btn:hover {
            background-color: #1c86ee; /* Slightly darker blue on hover */
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen bg-cover bg-center" 
    style="background-image: url('{{ asset('img/background.png') }}'); font-family: 'Arial', sans-serif;">
    <div class="w-full max-w-sm bg-white p-6 rounded-lg shadow-md bg-opacity-90">
        <!-- Logo and Header -->
        <div class="text-center mb-6">
            <img src="{{ asset('img/partners (1).png') }}" alt="DEL Logo" class="mx-auto mb-2 w-12 h-12">
            <h1 class="text-lg font-bold text-gray-800">Institut Teknologi Del</h1>
        </div>

        <!-- Notifikasi error -->
        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-600 rounded-lg">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        
        <form action="{{ route('custom.login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-1" for="username">USERNAME</label>
                <input type="text" id="username" name="username" required
                    class="w-full px-3 py-2 input-field focus:ring-0">
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-1" for="password">PASSWORD</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-3 py-2 input-field focus:ring-0">
            </div>

            <!-- Remember Me Checkbox -->
            <div class="flex items-center justify-between mb-4">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="mr-2">
                    <span class="text-gray-600 text-sm">Remember Me</span>
                </label>
                <button type="submit"
                    class="px-4 py-2 text-white font-semibold sign-in-btn focus:outline-none">
                    Sign In
                </button>
            </div>
        </form>
    </div>
</body>

</html>