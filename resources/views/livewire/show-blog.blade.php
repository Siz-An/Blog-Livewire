<main>
    <section class="bg-tertiary py-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="mb-3 text-2xl font-bold capitalize">Blog</h2>
            <ul class="flex justify-center space-x-2 text-lg font-medium">
                <li><a href="{{route('home')}}" wire:navigate class="text-primary">Home</a></li>
                <li>/ Blog</li>
            </ul>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div class="lg:col-span-3">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @if($articles->isNotEmpty())
                        @foreach ($articles as $article)
                        <div data-aos="fade" class="bg-white shadow-md rounded-lg overflow-hidden">
                            @if ($article->image != '')
                            <img src="{{ asset('storage/'.$article->image) }}" alt="Image"
                                 class="w-full h-80 object-contain">
                            @endif
                            <div class="p-4">
                                <p class="mb-2 text-gray-500 text-sm">{{\Carbon\Carbon::parse($article->created_at)->format('d M, Y')}}</p>
                                <h2 class="text-lg font-semibold">
                                    <a wire:navigate href="{{route('blogDetail',$article->id)}}" class="text-black hover:text-primary">
                                        {{$article->title}}
                                    </a>
                                </h2>
                                <a wire:navigate href="{{route('blogDetail',$article->id)}}" class="text-primary font-bold mt-2 block">Read More</a>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>

                <div class="mt-8">
                    {{$articles->links()}}
                </div>
            </div>

            <div>
                <div class="mb-6">
                    <h5 class="text-lg font-bold mb-4">Category</h5>
                    <ul class="space-y-2">
                        @if ($categories->isNotEmpty())
                        @foreach ($categories as $category)
                            <li>
                                <a wire:navigate href="{{ route('blog', ['categorySlug' => $category->slug]) }}" class="text-primary hover:underline">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                        @endif
                    </ul>
                </div>

                <div>
                    <h5 class="text-lg font-bold mb-4">Latest Articles</h5>
                    @if ($latestArticles->isNotEmpty())
                        @foreach ($latestArticles as $latestArticle)
                        <div class="flex items-center space-x-4 mb-4">
                            <a href="/blog/elements/">
                                <img src="{{asset('storage/'.$latestArticle->image)}}" alt="Post Thumbnail" class="w-16 h-16 rounded-md">
                            </a>
                            <div>
                                <h5 class="text-sm font-semibold">
                                    <a wire:navigate href="{{route('blogDetail',$latestArticle->id)}}" class="text-black hover:text-primary">
                                        {{$latestArticle->title}}
                                    </a>
                                </h5>
                                <small class="text-gray-500">{{\Carbon\Carbon::parse($article->created_at)->format('d M, Y')}}</small>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
</main>
