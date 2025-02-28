<div class="rounded-lg shadow-lg py-5 px-6 bg-white">
    <!-- Icon -->
    <div class="flex justify-center mb-4">
        <i class="fas fa-user text-3xl text-gray-600"></i>
    </div>
    
    <!-- Service Title -->
    <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ $service->title }}</h3>
    
    <!-- Service Description -->
    <p class="text-gray-600 mb-4">{{ $service->short_desc }}</p>
    
    <!-- View Details Button -->
    <a wire:navigate href="{{ route('service', $service->id) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 border border-blue-600 rounded-md hover:bg-blue-600 hover:text-white transition-all">
        View Details
        <i class="las la-arrow-right ml-2"></i>
    </a>
</div>
