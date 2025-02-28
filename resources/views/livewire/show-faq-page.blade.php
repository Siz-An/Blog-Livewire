<main>
    <section class="section">
        <div class="container mx-auto">
            <div class="flex justify-center mb-5">
                <div class="w-full lg:w-1/2">
                    <div class="text-center">
                        <p class="text-primary text-uppercase font-bold mb-3">Frequent Questions</p>
                        <h1 class="text-3xl">Frequently Asked Questions</h1>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="w-full lg:w-2/3">
                    <div class="space-y-4" id="accordionFAQ">
                        @if ($faqs->isNotEmpty())
                        @php
                            $x=1;
                        @endphp
                        @foreach ($faqs as $faq)
                        <div class="border-b border-gray-200">
                            {{-- Question --}}
                            <h2 class="flex justify-between items-center p-4 cursor-pointer"
                                id="heading-{{$x}}" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse-{{$x}}" aria-expanded="true"
                                aria-controls="collapse-{{$x}}">
                                <span class="text-lg">{{$faq->question}}</span>
                                <span class="text-gray-500">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </h2>
                            {{-- Answers --}}
                            <div id="collapse-{{$x}}"
                                class="collapse border-0"
                                aria-labelledby="heading-{{$x}}"
                                data-bs-parent="#accordionFAQ">
                                <div class="p-4">{!!$faq->answer!!}</div>
                            </div>
                        </div>
                        @php
                        $x++;
                    @endphp
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>