<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Project</title>
    <script src="https://cdn.tailwindcss.com/3.4.1"></script>
</head>
<body class="bg-white p-6 text-black">
    <div class="max-w-2xl mx-auto">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
        <form>
          <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email address</label>
            <input type="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" required>
          </div>
          <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
            <input type="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password" required>
          </div>
          <div class="mb-4 flex items-center">
            <input type="checkbox" id="rememberMe" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="rememberMe" class="ml-2 block text-sm text-gray-900">Remember me</label>
          </div>
          <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Login</button>
        </form>
        <div class="text-center mt-4">
          <p class="text-sm text-gray-600">Don't have an account? <a href="#" class="text-blue-500 hover:underline">Sign up</a></p>
        </div>
      </div>
    </div>
</body>
</html>
