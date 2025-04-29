<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body>
  <div x-data="loginForm()" class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="w-full max-w-md bg-white shadow-md rounded-xl p-8">
      <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>
      <form method="POST" action="{{route('login')}}">
        @csrf

        <!-- Email -->
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input type="email" id="email" name="email" required
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Password -->
        <div class="mb-6">
          <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
          <input type="password" id="password" name="password" required
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">

        </div>

        <!-- Submit -->
        <input type="submit" value="Login"
          class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 transition">
          
    

        <!-- Forgot password -->
        <div class="mt-4 text-center">
          <a href="" class="text-sm text-blue-600 hover:underline">Forgot your password?</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Alpine.js -->
  {{-- <script>
    function loginForm() {
      return {
        email: '',
        password: '',
        showPassword: false,

        submitForm() {
          $el.closest('form').submit();
        }
      }
    }
  </script> --}}
</body>
</html>
