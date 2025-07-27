<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard | S & S Fruit Shop</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Sidebar + Main Layout -->
  <div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-green-700 text-white p-6 space-y-6">
      <h2 class="text-2xl font-bold">🍎 Admin Dashboard</h2>
      <nav class="space-y-4">
        <a href="#" class="block hover:bg-green-600 p-2 rounded">📦 View Stocks</a>
        <a href="#" class="block hover:bg-green-600 p-2 rounded">📊 Sales Reports</a>
        <a href="#" class="block hover:bg-green-600 p-2 rounded">📩 View Requests</a>
        <a href="#" class="block hover:bg-green-600 p-2 rounded">📝 System Logs</a>
        <a href="#" class="block hover:bg-green-600 p-2 rounded">👥 Manage Users</a>
        <a href="#" class="block hover:bg-green-600 p-2 rounded">🔄 System Updates</a>
      </nav>
      <!-- Logout Button -->
<form action="{{ route('logout') }}" method="POST" class="pt-6 border-t border-green-600">
    @csrf
  <button type="submit"
          class="w-full bg-red-600 hover:bg-red-700 text-white py-2 px-4 mt-4 rounded flex items-center justify-center">
    🔒 Logout
  </button>
</form>

    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <h1 class="text-3xl font-semibold text-green-700 mb-6">Welcome, Admin</h1>

      <!-- Dashboard Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white shadow rounded-xl p-5">
          <h2 class="text-lg font-medium text-gray-600">Total Stocks</h2>
          <p class="text-2xl font-bold text-green-700 mt-2">145 Items</p>
        </div>
        <div class="bg-white shadow rounded-xl p-5">
          <h2 class="text-lg font-medium text-gray-600">Today's Sales</h2>
          <p class="text-2xl font-bold text-green-700 mt-2">Rs. 25,000</p>
        </div>
        <div class="bg-white shadow rounded-xl p-5">
          <h2 class="text-lg font-medium text-gray-600">New Requests</h2>
          <p class="text-2xl font-bold text-green-700 mt-2">8 Pending</p>
        </div>
      </div>

      <!-- System Logs Table -->
      <div class="mt-10">
        <h2 class="text-xl font-semibold text-gray-700 mb-4">📝 Recent System Logs</h2>
        <div class="overflow-x-auto">
          <table class="min-w-full bg-white shadow rounded-xl overflow-hidden">
            <thead class="bg-green-100 text-green-800">
              <tr>
                <th class="text-left p-3">Date</th>
                <th class="text-left p-3">Activity</th>
                <th class="text-left p-3">User</th>
              </tr>
            </thead>
            <tbody class="text-gray-700">
              <tr class="border-t">
                <td class="p-3">2025-07-25</td>
                <td class="p-3">Added new fruit stock</td>
                <td class="p-3">Admin</td>
              </tr>
              <tr class="border-t">
                <td class="p-3">2025-07-25</td>
                <td class="p-3">Updated price of Banana</td>
                <td class="p-3">Manager</td>
              </tr>
              <tr class="border-t">
                <td class="p-3">2025-07-24</td>
                <td class="p-3">Generated sales report</td>
                <td class="p-3">Admin</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Manage Users (Optional Preview) -->
      <div class="mt-10">
        <h2 class="text-xl font-semibold text-gray-700 mb-4">👥 Manage Users</h2>
        <div class="bg-white shadow rounded-xl p-4 space-y-3">
          <div class="flex justify-between items-center">
            <span class="font-medium text-gray-600">Username: john_admin</span>
            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">Remove</button>
          </div>
          <div class="flex justify-between items-center">
            <span class="font-medium text-gray-600">Username: fruit_seller</span>
            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">Remove</button>
          </div>
        </div>
      </div>

    </main>
  </div>

</body>
</html>
