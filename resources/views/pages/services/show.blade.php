@extends('layouts.web')

@section('title', $service->title ?? "-")
@section('description', $service->meta_description  ?? "-")
@section('canonical', $service->canonical  ?? "-")

@section('links')
    <style>
        @media screen and (max-width: 1000px) {
            .hero-color {
                background-color: rgb(255, 255, 255, 0.7);
            }
        }
    </style>
@endsection

@section('content')

    {{-- Hero --}}
    <div class="h-full mx-auto  lg:bg-hero-bg bg-no-repeat bg-cover 3xl:bg-none max-w-screen-2xl">
        <div class="hero-color container mx-auto flex flex-col items-center justify-center lg:flex-row lg:space-x-14 pt-10">

            <div class="hidden md:block w-[26%]"></div>

            <div class="flex flex-col mb-8 items-center text-center lg:flex-grow lg:w-[40%] lg:text-left lg:mb-0"
                data-aos="fade-right" data-aos-duration="2000">
                <div class="px-10 mt-6 md:px-20 lg:px-0 lg:w-full">
                    <p class="text-center text-black-500 text-2xl md:text-3xl lg:text-4xl font-bold pb-4">
                        {{ $service->name }}
                    </p>

                    <div class="flex flex-col items-center mx-5 sm:flex-row sm:justify-center md:flex-row lg:flex-row">
                        <div class="p-5">
                            <img src="{{ asset('imgs/sitejabbarimg.png') }}" alt="flag" class="mx-auto w-9" />
                            <span class="mb-2 sm:mb-0 md:mb-2 lg:mb-0 focus:outline-none text-lg ml-4">
                                Sitejabber
                            </span>
                            <ul class="flex justify-center">
                                <li class="mr-1">4.9</li>
                                <li class="my-auto text-cyan-600">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="my-auto">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="my-auto">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="my-auto">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                        class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="my-auto">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                        class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                        </path>
                                    </svg>
                                </li>
                            </ul>
                        </div>

                        <div class="p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                viewBox="0 0 172 172" style="fill: #000000" class="mx-auto w-9">
                                <defs>
                                    <linearGradient x1="32.28225" y1="22.79" x2="136.49633" y2="162.20317"
                                        gradientUnits="userSpaceOnUse" id="color-1_8ggStxqyboK5_gr1">
                                        <stop offset="0" stop-color="#18a878"></stop>
                                        <stop offset="1" stop-color="#31dcb9"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                    stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                    font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                    style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g fill="url(#color-1_8ggStxqyboK5_gr1)">
                                        <path
                                            d="M89.27158,18.58317l19.6295,44.032l47.93783,5.06325c3.08525,0.32608 4.32508,4.1495 2.021,6.22425l-35.80825,32.26792l10.00108,47.16025c0.645,3.03508 -2.60867,5.3965 -5.29617,3.8485l-41.75658,-24.09075l-41.75658,24.08717c-2.6875,1.548 -5.93758,-0.81342 -5.29617,-3.8485l10.00108,-47.16025l-35.80825,-32.26792c-2.30408,-2.07475 -1.06067,-5.89817 2.021,-6.22425l47.93783,-5.06325l19.6295,-44.032c1.26133,-2.83083 5.28183,-2.83083 6.54317,0.00358z">
                                        </path>
                                    </g>
                                </g>
                            </svg>

                            <span
                                class="mb-2 sm:mb-0 md:mb-2 lg:mb-0 focus:outline-none text-lg ml-4">Trustpilot</span>
                            <ul class="flex justify-center">
                                <li class="mr-1">4.9</li>
                                <li class="my-auto text-cyan-600">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="my-auto">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="my-auto">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="my-auto">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                        class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="my-auto">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                        class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                        </path>
                                    </svg>
                                </li>
                            </ul>
                        </div>

                        <div class="p-5">
                            <img src="{{ asset('imgs/reviewsbank.png') }}" alt="flag" class="mx-auto h-14" />
                            <ul class="flex justify-center">
                                <li class="mr-1">4.9</li>
                                <li class="my-auto text-cyan-600">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="my-auto">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="my-auto">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="my-auto">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                        class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="my-auto">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                        class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                        </path>
                                    </svg>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:bg-none xl:w-[52%] md:mx-10 md:mt-10" data-aos="fade-up" data-aos-duration="2000">
                <form class="bg-gradient-to-r from-green-900 shadow-2xl px-6 py-4 flex flex-col md:ml-auto w-[70%] mx-auto lg:w-full relative z-10 mb-16"
                    style="background-color: rgba(235, 117, 8, 0.5)">
                    <p class="bg-red- mb-10 text-center text-white text-2xl">Price Calculator</p>
                    <div class="relative mb-6">
                        <label class="order-label-calculator">Academic Level :</label>
                        <select name="academic_level" id="academic_level" class="form-control select-form get-fare">
                            <option hidden disabled selected>Choose any option</option>
                            @foreach ($academic_levels as $academic_level)
                                <option value="{{ $academic_level->id }}"
                                    {{ old('academic_level') == $academic_level->id ? 'selected' : '' }}>
                                    {{ $academic_level->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="relative mb-6">
                        <label class="order-label-calculator">Deadline :</label>
                        <select name="deadline" id="deadline" class="form-control select-form get-fare">
                            <option hidden disabled selected>Choose any option</option>
                            @foreach ($deadlines as $deadline)
                                <option {{ old('deadline') == $deadline->id ? 'selected' : '' }}
                                    value="{{ $deadline->id }}">{{ $deadline->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="relative mb-6">
                        <label class="order-label-calculator">Number of Pages :</label>
                        <select name="number_of_pages" id="no_of_pages" class="form-control select-form get-fare">
                            <option hidden disabled selected>Choose any option</option>
                            @for ($p = 1; $p <= 200; $p++)
                                <option value="{{ $p }}" {{ old('number_of_pages') == $p ? 'selected' : '' }}>
                                    {{ $p * 250 }} Words - {{ $p }} Pages
                                </option>
                            @endfor
                        </select>
                    </div>

                    <a href="{{ route('order') }}"
                        class="flex flex-col sm:flex-row justify-between text-white text-center bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg w-auto">
                        <span>
                            Proceed to Order
                        </span>
                        <span>
                            <span id="cost">0</span> $
                        <span>
                    </a>
                </form>
            </div>

            <div class="w-[10%]"></div>
        </div>
    </div>

    <div class="primary-color h-4"></div>

    <main class="container my-6 mx-auto px-10">
        <section class="typo prose-headings:text-primary-one">
            @if (!empty($service))
                {!! $service->html !!}
            @endif
        </section>
    </main>
@endsection

@section('scripts')
    <script>
        $(".get-fare").change(function(e) {
            e.preventDefault();
            var data = {
                "_token": "{{ csrf_token() }}",
                "deadline_id": $('#deadline').val(),
                "academic_level_id": $('#academic_level').val(),
            }
            $.ajax({
                method: 'POST',
                url: '{{ route('get.fare') }}',
                beforeSend: function() {
                    // $("#cost-per-page").html("Loading...")
                    const loading =
                        '<svg class="inline-block " width="25px" height="25px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#2793d4"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'
                    $("#cost").html(loading)
                },
                complete: function() {
                    // $("#loading").removeClass("d-block");
                },
                data: data,
                success: function(res) {
                    // console.log(res);
                    $("#cost").html((res.per_page_price * ($("#no_of_pages").val() == null ?
                        1 : $("#no_of_pages").val())))
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });
    </script>
@endsection
