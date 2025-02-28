<main>
    <section class="bg-tertiary py-20 relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="flex justify-center">
                <div class="w-full md:w-2/3 lg:w-1/2 text-center">
                    <h2 class="text-4xl font-bold mb-6">Our Team</h2>
                    <ul class="flex justify-center space-x-2 font-medium">
                        <li><a wire:navigate href="{{route('home')}}" class="hover:text-primary">Home</a></li>
                        <li>/ &nbsp;Our Team</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="absolute inset-0 pointer-events-none">
            <svg class="absolute left-0 top-0 h-full text-light" viewBox="0 0 192 752" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- SVG paths here -->
            </svg>
            <svg class="absolute right-0 top-0 h-full text-light" viewBox="0 0 731 746" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- SVG paths here -->
            </svg>
        </div>
    </section>

    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="flex justify-center">
                <div class="w-full text-center">
                    <p class="text-primary uppercase font-bold mb-4">Questions You Have</p>
                    <h1 class="text-5xl font-bold mb-4">People Behind Us</h1>
                    <p class="text-lg mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing . egestas<br>cursus pellentesque dignissim dui, congue. Vel etiam ut</p>
                </div>
            </div>
            <div class="flex flex-wrap justify-center relative">
                @if ($members->isNotEmpty())
                @foreach ($members as $member)
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 p-4">
                    <x-team-card :member="$member" />
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>
</main>