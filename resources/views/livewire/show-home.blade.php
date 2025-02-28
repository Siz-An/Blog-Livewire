<main>
  <section class="relative overflow-hidden bg-gray-200">
    <div class="container mx-auto px-4 py-12">
      <div class="flex flex-col lg:flex-row items-center justify-center">
        <div class="lg:w-1/2 mb-5 lg:mb-0 text-center lg:text-left lg:pr-12">
          <h1 class="text-4xl font-bold mb-4">Innovate. Excel. Succeed!</h1>
          <p class="mb-4 text-lg">Unlocking Potential, Igniting Excellence</p>
          <a href="{{route('servicePage')}}" wire:navigate data-bs-toggle="modal" data-bs-target="#applyLoan"
            class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            See More <span class="ml-2 text-sm fas fa-arrow-right"></span>
          </a>
        </div>
        <div class="lg:w-1/2 flex justify-center">
          <img loading="lazy" decoding="async" src="{{asset('frontend/images/desk.png')}}" alt="banner image"
              class="w-full max-w-sm rounded-lg">
      </div>
      
      
      </div>
    </div>
  </section>

  <section class="py-16">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="pt-4">
          <p class="text-blue-600 font-bold uppercase mb-3">Our Services</p>
          <h1 class="text-3xl font-semibold">Our online services</h1>
          <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus penatibus tincidunt.</p>
        </div>

        @if($services->isNotEmpty())
          @php $x=1; @endphp
          @foreach ($services as $service)
            <x-service-card :service="$service" :x="$x" />
            @php $x++; @endphp
          @endforeach
        @endif
      </div>
    </div>
  </section>
</main>
