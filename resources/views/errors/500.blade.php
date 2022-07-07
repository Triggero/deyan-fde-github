<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>500 Error</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex items-center justify-center w-screen h-screen">
        <div class="px-4 lg:py-12">
          <div class="lg:gap-4 lg:flex">
            <div
              class="flex flex-col items-center justify-center md:py-24 lg:py-32"
            >
              <h1 class="font-bold text-red-600 text-9xl">500</h1>
              <p
                class="mb-2 text-2xl font-bold text-center text-gray-800 md:text-3xl"
              >Internal server error
              </p>
              <p class="mb-8 text-center text-gray-500 md:text-lg">
                Something went wrong.
              </p>
              <a
                href="{{ url()->previous() }}"
                class="px-6 py-2 text-sm font-semibold text-blue-800 bg-blue-100"
                >Go back</a
              >
            </div>
            <div class="mt-4">
              <img
                src="https://laraveller.com/img/hero.svg"
                alt="img"
                class="object-cover w-full h-full"
              />
            </div>
          </div>
        </div>
      </div>
</body>
</html>