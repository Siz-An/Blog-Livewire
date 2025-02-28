<main>
    <section class="bg-tertiary">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-1 text-center">
                <div class="col-span-1 mx-auto">
                    <h2 class="mb-3 capitalize">{{ $service->title }}</h2>
                    <ul class="list-inline flex justify-center space-x-2 text-capitalize font-medium">
                        <li><a wire:navigate href="{{ route('home') }}">Home</a></li>
                        <li>/ &nbsp; <a wire:navigate href="{{ route('service', $service->id) }}">Services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-5">
                <div class="col-span-1">
                    <div class="content">
                        {!! $service->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
