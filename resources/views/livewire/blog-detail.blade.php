<main>
  <div class="py-10">
    <div class="container mx-auto px-4">
      <div class="flex justify-center">
        <div class="w-full lg:w-10/12">
          <div class="mb-5">
            <h2 class="mb-4 text-2xl font-bold leading-snug">{{$article->title}}.</h2>
            <span class="text-gray-500">
              {{\Carbon\Carbon::parse($article->created_at)->format(('d M,Y'))}}
              <span class="mx-2">/</span>
            </span>
            <p class="inline-block text-gray-700">Category: 
              <a href="#!" class="text-blue-600 ml-1">{{$article->category_name}}</a>
            </p>
            <p class="inline-block text-gray-700 ml-4">Author: 
              <a href="#!" class="text-blue-600 ml-1">{{$article->author}}</a>
            </p>
          </div>
          
          @if ($article->image != '')
          <div class="mb-5 text-center">
            <div class="overflow-hidden rounded-lg w-1/3 mx-auto">
              <img loading="lazy" decoding="async" src="{{asset('storage/'.'/'.$article->image)}}" 
                alt="Post Thumbnail" class="w-full h-auto object-cover">
            </div>
          </div>
          @endif
          
          <div class="prose max-w-none">
            {!! $article->content !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
