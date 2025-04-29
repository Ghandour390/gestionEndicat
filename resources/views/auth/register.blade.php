
@extends('layouts.app');
<body>
  <div x-data="registerForm()" class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="w-full max-w-lg bg-white shadow-md rounded-xl p-8">
      <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Register</h2>
      <form method="POST" action="{{ route('register') }}" @submit.prevent="submitForm">
        @csrf

        <!-- Firstname -->
        <div class="mb-4">
          <label for="firstname" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
          <input type="text" id="firstname" name="firstname" x-model="firstname" required
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500">
        </div>

        <!-- Lastname -->
        <div class="mb-4">
          <label for="lastname" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
          <input type="text" id="lastname" name="lastname" x-model="lastname" required
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500">
        </div>

        <!-- Email -->
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input type="email" id="email" name="email" x-model="email" required
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500">
        </div>

        <!-- Phone -->
        <div class="mb-4">
          <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
          <input type="tel" id="phone" name="phone" x-model="phone" required
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500">
        </div>

        <!-- Password -->
        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
          <input type='password'  id="password" name="password" x-model="password" required
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500">
          <button type="button" @click="showPassword = !showPassword" class="text-sm text-blue-600 mt-1">
            <span x-text="showPassword ? 'Hide' : 'Show'"></span> password
          </button>
        </div>

   

        <!-- Submit -->
        <button type="submit"
          class="w-full bg-red-600 text-white font-semibold py-2 rounded-lg hover:bg-red-700 transition">
          Register
        </button>
      </form>
    </div>
  </div>

  <!-- Alpine.js -->
  <script>
    function registerForm() {
      return {
        firstname: '',
        lastname: '',
        email: '',
        phone: '',
        password: '',
        password_confirmation: '',
        showPassword: false,

        submitForm() {
          // Optionally validate before submitting
          $el.closest('form').submit(); // Real Laravel form submit
        }
      }
    }
  </script>
</body>
</html>
