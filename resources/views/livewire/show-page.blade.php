<main>
    <section class="page-header bg-tertiary py-12">
        <div class="container mx-auto px-4">
            <div class="flex justify-center">
                <div class="text-center w-full md:w-8/12">
                    <h2 class="mb-3 text-3xl font-semibold">{{ $page->title }}</h2>
                    <ul class="list-inline breadcrumbs text-capitalize font-medium">
                        <li class="inline-block">
                            <a wire:navigate href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="inline-block ">/ &nbsp; {{ $page->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section py-10">
        <div class="container mx-auto">
            @if ($page->image != "")
                <div class="flex justify-center items-center">
                    <div class="w-full lg:w-7/12">
                        <div class="section-title">
                            {!! $page->content !!}
                        </div>
                    </div>
                    <div class="w-full lg:w-5/12 mt-5 lg:mt-0">
                        <img loading="lazy" decoding="async" src="{{ asset('storage/'.$page->image) }}" alt="" class="rounded w-full">
                    </div>
                </div>
            @else
                <div class="flex justify-center items-center">
                    <div class="w-full">
                        <div class="section-title">
                            {!! $page->content !!}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
</main>
