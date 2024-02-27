@props(['company' => []])
<div href="#" data-drawer-target="companydetails-drawer" data-drawer-placement="right"
    data-drawer-show="companydetails-drawer" aria-controls="companydetails-drawer"
    class="w-full hover:shadow-gray-base-2 transition duration-200 ease-linear hover:bg-primary-50  py-8 px-4 space-y-6"
    role="button">

    <div>

    </div>
    <div class="flex items-start flex-wrap">
        <div class=" flex items-start gap-2 flex-wrap">
            <div class="h-[60px] w-[60px] rounded-md overflow-hidden shrink-0">
                <img src="{{ asset('frontend/assets/images/company-logo.png') }}" alt="company logo"
                    class="w-full object-cover">
            </div>
            <div class="space-y-2">
                <h5 class="heading-05 text-gray-900 leading-none flex items-center gap-3">
                    {{ $company['name'] }}
                    @if ($company['varified'])
                        <span class="badge-green-fill gap-1">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                </svg>

                            </i>
                            Verified
                        </span>
                    @endif

                </h5>
                <div class="flex items-center gap-2 flex-wrap">


                    <div class="flex items-center gap-1 body-small-400 text-gray-600 ">
                        Industry: <span class="badge-secondary-transparent">{{ $company['industry'] }}</span>
                    </div>
                    <div
                        class="flex items-center gap-1 body-small-400 text-gray-600 before:content-['\2022'] before:mr-2">
                        Company size: <span class="badge-secondary-transparent">{{ $company['size'] }}</span>
                    </div>
                    <div
                        class="flex items-center gap-1 body-small-400 text-gray-600 before:content-['\2022'] before:mr-2">
                        <span class="badge-secondary-transparent">{{ $company['openposition'] }} Open positions</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="space-y-2">

        <p class="body-base-400 text-gray-700 line-clamp-2">
            {{ $company['description'] }}
        </p>
    </div>
    {{-- <div class="flex flex-wrap gap-2">
        @foreach ($company['skills'] as $skill)
            <span class="badge-gray-transparent">
                {{ $skill }}
            </span>
        @endforeach
    </div> --}}
    <div class="flex flex-wrap gap-3 items-center">

        <div class="flex items-center gap-1 body-small-400 text-gray-600">
            <x-svg.marker-pin-01 height="20" widht="20" />
            <span>
                Location: <strong>{{ $company['location'] }}</strong>
            </span>
        </div>

    </div>
</div>
<x-frontend.drawers.companydetails-drawer :company="$company" />