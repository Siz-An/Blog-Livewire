<main class="bg-gray-50">
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-500 via-teal-500 to-purple-600 py-16">
        <div class="container mx-auto text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
            <p class="text-xl mb-4">We'd love to hear from you. Reach out to us below!</p>
            <nav class="text-lg">
                <a href="{{ route('home') }}" class="hover:text-gray-200 transition-all">Home</a> / 
                <span class="text-gray-200">Contact</span>
            </nav>
        </div>
    </section>

    <!-- Main Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <!-- Left Column: Contact Info -->
                <div>
                    <div class="text-center lg:text-left mb-10 lg:mb-0">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Contact With Us</h2>
                        <p class="text-lg text-gray-600 mb-4">Feel free to drop us a message, and we'll get back to you ASAP!</p>
                    </div>

                    <div class="space-y-6">
                        <div class="text-gray-800">
                            <h3 class="text-xl font-semibold">Still Have Questions?</h3>
                            <p class="text-sm">Call us, we are happy to help.</p>
                            <a href="tel:+XXX111222" class="text-blue-500 text-lg">+XXX111222</a>
                            <p class="text-sm text-gray-600">Monday - Friday, 9 AM to 8 PM (Eastern Time)</p>
                        </div>

                        <div class="text-gray-800">
                            <h3 class="text-xl font-semibold">Our Offices</h3>
                            <p class="text-sm text-gray-600">Canada Office: Park Street, 455, Salt Lake</p>
                            <p class="text-sm text-gray-600">Demo Office: 22 Park Road, 23BX, Demo</p>
                        </div>

                        <!-- Social Links -->
                        <div class="flex space-x-6 mt-6">
                            <a href="https://facebook.com/" class="text-gray-800 hover:text-blue-600"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/" class="text-gray-800 hover:text-blue-400"><i class="fab fa-twitter"></i></a>
                            <a href="https://instagram.com/" class="text-gray-800 hover:text-pink-500"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Contact Form -->
                <div class="bg-white shadow-xl rounded-lg p-8">
                    @if (session('success'))
                        <div class="bg-green-100 p-4 rounded-lg mb-6 text-green-800">
                            {{ session('success') }}
                        </div>
                    @endif

                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Leave Us A Message</h2>
                    <form wire:submit="submit" class="space-y-6">
                        <div>
                            <label for="name" class="block text-gray-700 text-sm font-medium">Full Name</label>
                            <input wire:model="name" type="text" id="name" name="name" class="mt-2 w-full px-4 py-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror" />
                            @error('name')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-gray-700 text-sm font-medium">Email Address</label>
                            <input wire:model="email" type="email" id="email" name="email" class="mt-2 w-full px-4 py-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror" />
                            @error('email')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-gray-700 text-sm font-medium">Your Message</label>
                            <textarea wire:model="message" id="message" name="message" class="mt-2 w-full px-4 py-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4"></textarea>
                        </div>

                        <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-md hover:bg-blue-600 transition-all">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>


</main>
