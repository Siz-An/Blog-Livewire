<div class="flex flex-wrap justify-center gap-6">
  <a wire:navigate href="{{ route('service', $service->id) }}" class="w-64 bg-white shadow-lg rounded-lg p-6 text-center hover:shadow-xl transition">
      {{-- <span class="flex justify-start text-black text-lg font-bold py-2 px-4 rounded mb-4">{{ $x }}</span> --}}
      <h3 class="text-xl font-semibold mb-2">{{ $service->title }}</h3>
      <p class="text-gray-600">{{ $service->short_desc }}</p>
  </a>
</div>
