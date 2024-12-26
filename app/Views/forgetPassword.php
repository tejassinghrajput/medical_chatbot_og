<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="font-[sans-serif]">
      <div class="min-h-screen flex fle-col items-center justify-center py-6 px-4">
        <div class="grid md:grid-cols-2 items-center gap-4 max-w-6xl w-full">
          <div class="border border-gray-300 rounded-lg p-6 max-w-md shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] max-md:mx-auto">
            <form class="space-y-4">
              <div class="mb-8">
                <h3 class="text-gray-800 text-3xl font-extrabold">Forgot Password</h3>
                <p class="text-gray-500 text-sm mt-4 leading-relaxed">Enter your email address to reset your password. We’ll send you a link to create a new one.</p>
              </div>

              <div>
                <label class="text-gray-800 text-sm mb-2 block">Email Address</label>
                <div class="relative flex items-center">
                  <input name="email" type="email" required class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-blue-600" placeholder="Enter email address" />
                  <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 24 24">
                    <path d="M12 12L2 6V18L12 12Z" data-original="#000000"></path>
                    <path d="M12 12L22 6V18L12 12Z" data-original="#000000"></path>
                  </svg>
                </div>
              </div>

              <div class="!mt-8">
                <button type="button" class="w-full shadow-xl py-3 px-4 text-sm tracking-wide rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                  Send Reset Link
                </button>
              </div>

              <p class="text-sm !mt-8 text-center text-gray-800">Remembered your password? <a href="/login" class="text-blue-600 font-semibold hover:underline ml-1 whitespace-nowrap">Log in here</a></p>
            </form>
          </div>
          <div class="lg:h-[400px] md:h-[300px] max-md:mt-8">
            <img src="https://readymadeui.com/login-image.webp" class="w-full h-full max-md:w-4/5 mx-auto block object-cover" alt="Dining Experience" />
          </div>
        </div>
      </div>
    </div>
</body>
</html>
