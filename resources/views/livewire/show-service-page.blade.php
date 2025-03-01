<main>
    <section class="page-header bg-tertiary py-12">
        <div class="container mx-auto px-4">
            <div class="flex justify-center">
                <div class="text-center w-full md:w-8/12">
                    <h2 class="mb-3 text-3xl font-semibold">Our Services</h2>
                    <ul class="list-inline breadcrumbs text-capitalize font-medium">
                        <li class="inline-block">
                            <a href="{{route('home')}}" wire:navigate >Home</a>
                        </li>
                        <li class="inline-block">/ &nbsp; Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section py-16">
        <div class="container mx-auto px-4">
            <div class="flex justify-center flex-wrap gap-8">
                @if($services->isNotEmpty())
                    @php
                    $x = 1;
                    @endphp
                    @foreach ($services as $service)
                        <div class="text-center w-full sm:w-1/2 md:w-1/3 lg:w-1/4 mb-8">
                            <x-service-page-card :service="$service"/>
                        </div>
                        @php
                        $x++;
                        @endphp
                    @endforeach
                @else
                    <p class="text-center text-gray-500">No services available at the moment.</p>
                @endif
            </div>
        </div>
    </section>
</main>
