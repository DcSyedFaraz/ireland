@extends('layouts.web')

@section('title', 'Ireland\'s Best Assignment Writing Service – Irish Experts')
@section('description',
    'Assignment Writing Ireland Offers Academic Writing Help at Cheap Rates. So Connect With Our
    Experts And Get Quality Assignment Help From Irish Writers')
@section('canonical', config('app.url'))

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
    <div class="h-full mx-auto bg-hero-bg bg-no-repeat bg-contain 3xl:bg-none max-w-screen-2xl">
        <div class="container mx-auto flex flex-col lg:flex-row space-y-8">
            <div class="my-auto lg:w-full pt-10 px-10 text-center lg:text-left">
                <h1 class="text-black-500 text-2xl md:text-3xl lg:text-4xl font-bold pb-4 text-gray-700">
                    Personalized Assignment Help Ireland by the Proficient Irish Writers
                </h1>
                <p class="primary-text pb-4 text-gray-800">
                    Are you a student struggling to meet your assignment's deadline?
                    <br><br>
                    Do you want a helping hand to share your assignment burden? We are a click away.
                    <br><br>
                    For any type of assignment help Ireland, talk to us and get your concerns resolved for a smooth academic
                    journey.

                </p>
                <div class="flex flex-col items-center mx-5 sm:flex-row sm:justify-center md:flex-row lg:flex-row">
                    <div class="p-5">
                        <img src="{{ asset('imgs/sitejabbarimg.png') }}" alt="{{ config('app.name') }}" class="mx-auto w-9" />
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

                        <span class="mb-2 sm:mb-0 md:mb-2 lg:mb-0 focus:outline-none text-lg ml-4">Trustpilot</span>
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
                        <a href="https://reviewsbank.org/best-assignment-writing-services-ireland/" target="_blank">
                            <img src="{{ asset('imgs/reviewsbank.webp') }}" alt="{{ config('app.name') }}"
                                class="mx-auto h-14" />
                        </a>
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
            <div class="lg:w-3/4 md:mx-10 my-auto pb-10 lg:pb-0">
                <form
                    class="bg-gradient-to-r from-green-900 shadow-2xl px-6 py-8 flex flex-col md:ml-auto mx-auto lg:w-full relative z-10"
                    style="background-color: rgba(235, 117, 8, 0.5)">
                    <p class="bg-red- mb-10 text-center text-white text-2xl">Price Calculator</p>
                    <div class="flex flex-col md:flex-row md:space-x-2">
                        <div class="mb-6 md:w-1/2">
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
                        <div class="mb-6 md:w-1/2">
                            <label class="order-label-calculator">Paper Type :</label>
                            <select name="paperType" id="paperType" class="form-control select-form get-fare">
                                <option hidden disabled selected>Choose any option</option>
                                @foreach ($paperTypes as $paperType)
                                    <option {{ old('paperType') == $paperType->id ? 'selected' : '' }}
                                        value="{{ $paperType->id }}">{{ $paperType->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row md:space-x-2">
                        <div class="mb-6 md:w-1/2">
                            <label class="order-label-calculator">Number of Pages :</label>
                            <select name="number_of_pages" id="no_of_pages" class="form-control select-form get-fare">
                                <option hidden disabled selected>Choose any option</option>
                                @for ($p = 1; $p <= 200; $p++)
                                    <option value="{{ $p }}"
                                        {{ old('number_of_pages') == $p ? 'selected' : '' }}>
                                        {{ $p * 250 }} Words - {{ $p }} Pages
                                    </option>
                                @endfor
                            </select>
                        </div>
                        <div class="mb-6 md:w-1/2">
                            <label class="order-label-calculator">Deadline :</label>
                            <select name="deadline" id="deadline" class="form-control select-form get-fare">
                                <option hidden disabled selected>Choose any option</option>
                                @foreach ($deadlines as $deadline)
                                    <option {{ old('deadline') == $deadline->id ? 'selected' : '' }}
                                        value="{{ $deadline->id }}">
                                        {{ $deadline->name .' / ' .\Carbon\Carbon::now()->addDays($deadline->duration_in_days)->format('M j') }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <a href="{{ route('order') }}"
                        class="flex flex-row justify-between text-white text-center bg-primary-two border-0 py-2 px-6 focus:outline-none hover:bg-primary-one rounded text-lg w-auto">
                        <span>
                            Proceed to Order
                        </span>
                        <span>
                            <span id="cost">0</span> €
                            <span>
                    </a>
                </form>
            </div>
        </div>
    </div>


    <div class="primary-color h-4"></div>

    {{-- Bouncing Boy --}}
    <div class="container grid grid-cols-1 sm:grid-cols-2 mx-auto py-10 lg:px-[22rem]">
        <div class="mx-auto" data-aos="zoom-in" data-aos-duration="2000">
            <img class="h-80 animate-bounce" src="{{ asset('imgs/boy.svg') }}" alt="{{ config('app.name') }}" />
        </div>

        <div class="space-y-10 mx-auto">
            <div class="flex space-x-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="200">
                <div>
                    <img src="{{ asset('imgs/icon3.svg') }}" class="h-20" alt="{{ config('app.name') }}" />
                </div>

                <div>
                    <p class="text-center text-3xl text-primary-two font-bold">
                        9.62 / 10
                    </p>
                    <p>Average quality score</p>
                </div>
            </div>

            <div class="flex space-x-4 lg:ml-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
                <div>
                    <img alt="img" src="{{ asset('imgs/icon2.svg') }}" class="h-20" />
                </div>

                <div>
                    <p class="text-center text-3xl text-primary-two font-bold">242</p>
                    <p>Writers active</p>
                </div>
            </div>

            <div class="flex space-x-4 lg:ml-20" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
                <div>
                    <img src="{{ asset('imgs/icon1.svg') }}" class="h-16" alt="{{ config('app.name') }}" />
                </div>

                <div>
                    <p class="text-center text-3xl text-primary-two font-bold">
                        109592
                    </p>
                    <p>visitors</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Testimonial --}}
    <div class="container mx-auto px-4 lg:px-20 xl:px-40">
        <h2 class="primary-heading">
            Get Instant Help from the Best Assignment Writing Service Ireland
        </h2>
        <p class="primary-text text-center">
            Initiating an academic career in Ireland is full of challenges. If you are a non-native, you first need to
            settle there and then later adapt to their institution's policies. Without a helping hand or supervision, the
            process can become stressful. Our assignment writing Ireland caters to this problem by giving you instant
            academic solutions online at affordable prices. We have a knowledgeable and experienced team of wordsmiths who
            are well-versed in their subjects. Their expertise can help you release stress and give you an edge in your
            academic journey. Let’s meet our writers here:
        </p>
        <div class=" mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-6 gap-y-8 my-8">

            <div class="md:col-span-2 lg:col-span-1 shadow-xl mx-8 md:mx-auto rounded-xl p-4" data-aos="flip-left"
                data-aos-duration="3500">

                <div class="flex items-center mt-4">
                    <a href="#" class="block relative">
                        <img src="{{ asset('imgs/boy3.webp') }}" class="mx-auto rounded-full h-16 w-16 "
                            alt="{{ config('app.name') }}">
                    </a>
                    <div class="flex flex-col ml-2 justify-between">
                        <span class="font-bold text-primary-one text-lg">
                            Connor
                        </span>
                        <span class="text-base flex items-center">
                            Dublin
                        </span>
                        <ul class="flex my-2">

                            <li class="my-auto ">
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
                        </ul>
                    </div>
                </div>

                <hr class=" my-4 border-primary-two">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2 gap-y-4">
                    <div class="text-center my-auto">
                        <span class="text-3xl font-semibold ">460</span>
                        <br>
                        <span class="text-base ">Finished Papers</span>
                    </div>

                    <div class="text-center my-auto">
                        <span class="text-3xl font-semibold ">254</span>
                        <br>
                        <span class="text-base ">Customer Reviews</span>
                    </div>
                </div>

                <hr class=" my-4 border-primary-two">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4">
                    <div class="mx-auto my-auto">
                        <span class="text-4xl font-semibold text-primary-one">99%</span>
                        <br>
                        <span class="text-base text-primary-one">sucess rate</span>
                    </div>

                    <div class="mx-auto my-auto">
                        <a href="{{ route('order') }}"
                            class="btn text-center py-2 px-4 font-semibold bg-primary-two hover:bg-primary-one text-white rounded-full">Hire
                            Writer</a>
                    </div>
                </div>

            </div>

            <div class="shadow-xl mx-8 md:mx-auto rounded-xl p-4" data-aos="flip-left" data-aos-duration="2500">

                <div class="flex items-center mt-4">
                    <a href="#" class="block relative">
                        <img src="{{ asset('imgs/boy3.webp') }}" class="mx-auto rounded-full h-16 w-16 "
                            alt="{{ config('app.name') }}">
                    </a>
                    <div class="flex flex-col ml-2 justify-between">
                        <span class="font-bold text-primary-one text-lg">
                            Saoirse
                        </span>
                        <span class="text-base flex items-center">
                            Cork
                        </span>
                        <ul class="flex my-2">

                            <li class="my-auto ">
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
                        </ul>
                    </div>
                </div>

                <hr class=" my-4 border-primary-two">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2 gap-y-4">
                    <div class="text-center my-auto">
                        <span class="text-3xl font-semibold ">163</span>
                        <br>
                        <span class="text-base ">Finished Papers</span>
                    </div>

                    <div class="text-center my-auto">
                        <span class="text-3xl font-semibold ">92</span>
                        <br>
                        <span class="text-base ">Customer Reviews</span>
                    </div>
                </div>

                <hr class=" my-4 border-primary-two">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4">
                    <div class="mx-auto my-auto">
                        <span class="text-4xl font-semibold text-primary-one">99%</span>
                        <br>
                        <span class="text-base text-primary-one">sucess rate</span>
                    </div>

                    <div class="mx-auto my-auto">
                        <a href="{{ route('order') }}"
                            class="btn text-center py-2 px-4 font-semibold bg-primary-two hover:bg-primary-one text-white rounded-full">Hire
                            Writer</a>
                    </div>
                </div>

            </div>

            <div class="shadow-xl mx-8 md:mx-auto rounded-xl p-4" data-aos="flip-left" data-aos-duration="1500">

                <div class="flex items-center mt-4">
                    <a href="#" class="block relative">
                        <img src="{{ asset('imgs/boy3.webp') }}" class="mx-auto rounded-full h-16 w-16 "
                            alt="{{ config('app.name') }}">
                    </a>
                    <div class="flex flex-col ml-2 justify-between">
                        <span class="font-bold text-primary-one text-lg">
                            Ciara
                        </span>
                        <span class="text-base flex items-center">
                            Galway
                        </span>
                        <ul class="flex my-2">

                            <li class="my-auto ">
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
                        </ul>
                    </div>
                </div>

                <hr class=" my-4 border-primary-two">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2 gap-y-4">
                    <div class="text-center my-auto">
                        <span class="text-3xl font-semibold ">98</span>
                        <br>
                        <span class="text-base ">Finished Papers</span>
                    </div>

                    <div class="text-center my-auto">
                        <span class="text-3xl font-semibold ">54</span>
                        <br>
                        <span class="text-base ">Customer Reviews</span>
                    </div>
                </div>

                <hr class=" my-4 border-primary-two">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4">
                    <div class="mx-auto my-auto">
                        <span class="text-4xl font-semibold text-primary-one">98%</span>
                        <br>
                        <span class="text-base text-primary-one">Success Rate</span>
                    </div>

                    <div class="mx-auto my-auto">
                        <a href="{{ route('order') }}"
                            class="btn text-center py-2 px-4 font-semibold bg-primary-two hover:bg-primary-one text-white rounded-full">Hire
                            Writer</a>
                    </div>
                </div>

            </div>

        </div>
    </div>

    {{-- Cost Section --}}
    <section class="bg-cost-bg bg-no-repeat bg-cover bg-bottom h-full py-10 px-8">
        <div class="container grid grid-cols-1  mx-auto lg:px-20">
            <div>
                <h4 class="text-white font-bold text-3xl">
                    How much will my paper cost?
                </h4>
                <div class="bg-white p-8 mt-6" style=" background-color: rgb(255, 255, 255, 0.7);">
                    <div class="grid sm:grid-cols-2 gap-8" data-aos="zoom-in" data-aos-duration="2000">
                        <select id="" class="form-control select-form">
                            <option hidden="" value="0" disabled="" selected="">
                                Paper Type
                            </option>
                            @foreach ($paperTypes as $paperType)
                                <option {{ old('paperType') == $paperType->id ? 'selected' : '' }}
                                    value="{{ $paperType->id }}">{{ $paperType->name }}</option>
                            @endforeach
                        </select>
                        <select name="number_of_pages" id="price-pages" class="get-price form-control select-form ">
                            <option hidden disabled selected>No of Words and Pages</option>
                            @for ($p = 1; $p <= 200; $p++)
                                <option value="{{ $p }}" {{ old('number_of_pages') == $p ? 'selected' : '' }}>
                                    {{ $p * 250 }} Words - {{ $p }} Pages
                                </option>
                            @endfor
                        </select>
                        <select class="get-price form-control select-form" id="price-academic-level">
                            <option hidden="" value="0" disabled="" selected=""> Choose Academic Level
                            </option>
                            @foreach ($academic_levels as $academic_level)
                                <option {{ old('academic_level') == $academic_level->id ? 'selected' : '' }}
                                    value="{{ $academic_level->id }}">{{ $academic_level->name }}</option>
                            @endforeach
                        </select>
                        <select id="price-deadline" class="get-price form-control select-form">
                            <option hidden="" value="0" disabled="" selected=""> Choose Your Deadline
                            </option>
                            @foreach ($deadlines as $deadline)
                                <option {{ old('deadline') == $deadline->id ? 'selected' : '' }}
                                    value="{{ $deadline->id }}">{{ $deadline->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="text-center mt-4">
                        <div class="text-primary-two text-3xl mb-6 ">Price: <span id="price-cost" class="">0</span>
                            €</div>
                        <a href="{{ route('order') }}" class="btn btn-primary">Proceed to Order</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="container mx-auto my-8 space-y-6 lg:px-8">
        <h3 class="primary-heading">
            Do You Provide All Kinds of Write My Assignment Ireland Services?
        </h3>

        <p class="text-primary text-center">
            Yes! From writing your research papers to literature reviews to nursing assignment help Ireland, coursework and
            university assignments, you can contact us for any type of paper including your thesis, dissertations, report
            writing and PowerPoint presentations.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 xl:grid-cols-3 py-5">
            <div class="border-0 px-9 border-b-2 md:border-r-2 border-primary-two md:p-4">
                <h4 class="text-primary-one font-bold text-xl pb-3 pt-2">
                    Dissertation Writing
                </h4>
                <p class="text-gray-700 text-sm mb-4">
                    If you’re facing issues in completing your dissertation, talk to our expert and experienced Irish
                    dissertation writers to get it done with perfection and on time.
                </p>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 md:border-r-2 border-primary-two md:p-4">
                <h4 class="text-primary-one font-bold text-xl pb-3 pt-2">
                    Essay Writing
                </h4>
                <p class="text-gray-700 text-sm mb-4">
                    Whether short or long, an essay is powerful enough to decide your grades. Don’t take it for granted and
                    seek professional assistance to make it worth the requirements.
                </p>
                <div class="invisible lg:visible absolute -ml-8 w-5 h-6 p-4 lg:mt-4 xl:mt-0 bg-white"></div>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 border-primary-two md:p-4">
                <h4 class="text-primary-one font-bold text-xl py-3 pt-2">
                    Thesis Writing
                </h4>
                <p class="text-gray-700 text-sm mb-4">
                    You have worked hard throughout your academic career. But a pending thesis can delay your career. We
                    help you get it done on time, keeping quality on top.
                </p>
                <div class="invisible lg:visible absolute -ml-8 lg:mt-8 xl:mt-4 w-5 h-6 p-4 bg-white"></div>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 md:border-r-2 border-primary-two md:p-4">
                <h4 class="text-primary-one font-bold text-xl pb-3 pt-2">
                    Report Writing
                </h4>
                <p class="text-gray-700 text-sm mb-4">
                    Utilize the extensive experience of our top-rated writers when it comes to report writing. Our team
                    maximizes the chances of getting good grades with our report writing services.
                </p>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 md:border-r-2 border-primary-two md:p-4">
                <h4 class="text-primary-one font-bold text-xl pb-3 pt-2">
                    Nursing Assignment
                </h4>
                <p class="text-gray-700 text-sm mb-4">
                    It’s time to get into your dream nursing school as you have our back for any kind of nursing assignment
                    help Ireland. Rely on the professionals and learn to stand out in your academics.
                </p>
                <div class="invisible lg:visible absolute -ml-8 md:mt-8 lg:mt-0 w-5 h-6 p-4 bg-white"></div>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 border-primary-two md:p-4">
                <h4 class="text-primary-one font-bold text-xl pb-3 pt-2">
                    Irish Homework Help
                </h4>
                <p class="text-gray-700 text-sm mb-4">
                    We are not ordinary homework helpers but are someone who is specialized in this task. From school
                    homework to any type of English homework, we deliver outstanding results.
                </p>
                <div class="invisible lg:visible absolute -ml-8 w-5 h-6 p-4 bg-white"></div>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 md:border-b-0 md:border-r-2 md:p-4 border-primary-two">
                <h4 class="text-primary-one font-bold text-xl pb-3 pt-2">
                    Law Assignment Help
                </h4>
                <p class="text-gray-700 text-sm mb-4">
                    Want to nail your law assignments but don’t know how to do it? Our top-notch law homework help is
                    specifically for law students. Get on it today to boost your performance.
                </p>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 md:border-b-0 md:border-r-2 border-primary-two md:p-4">
                <h4 class="text-primary-one font-bold text-xl py-3 pt-2">
                    Coursework Help
                </h4>
                <p class="text-gray-700 text-sm mb-4">
                    Coursework is an integral part of the Ireland education system. It requires your time, hard work, and
                    coursework writing skills. We provide the best assistance to make it stress-free for you.
                </p>
            </div>

            <div class="border-0 px-9 sm:px-14 md:p-4">
                <h4 class="text-primary-one font-bold text-xl pb-3 pt-2">
                    Proofreading & Editing
                </h4>
                <p class="text-gray-700 text-sm mb-4">
                    Have you done your assignments yourself and are looking for an expert to proofread them? Not to worry as
                    we also provide proofreading and editing services to enhance the quality of your papers.
                </p>
            </div>
        </div>
    </section>

    {{-- Get started --}}
    <section class="bg-cost-bg bg-no-repeat bg-cover bg-center h-full py-10">
        <div class="container grid grid-cols-1 md:grid-cols-2 mx-auto px-10 lg:px-44">
            <div class="mx-auto">
                <div class="flex flex-col md:flex-row">
                    <div>
                        <span class="relative inline-flex">
                            <a href="javascript:void(Tawk_API.toggle())" type="button"
                                class="text-center rounded-full bg-white hover:bg-primary-two hover:text-white py-3 px-5 font-bold z-10 w-[9rem]"
                                disabled="">
                                Live Chat
                            </a>
                            <div type="button"
                                class="absolute animate-ping top-2 right-[0.9rem] h-8 w-28 rounded-full bg-white py-3 px-5 "
                                disabled=""> </div>
                        </span>
                    </div>
                    <div data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{ asset('imgs/boy2.webp') }}" class="h-[18rem]" alt="{{ config('app.name') }}" />
                    </div>
                </div>
            </div>
            <div class="my-auto text-center md:text-left">
                <p class="font-bold mb-4 text-white text-4xl">
                    I’m in Urgent Need, Please Write My Assignment Ireland
                </p>
                <p class="mb-6 text-white text-xl">
                    Don’t panic students! We also offer urgent “do my assignment academic support” to save you from the
                    chaos and stress that keeps you awake at night. Feel free to contact us for an instant assignment
                    writing service online.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary"> Contact Us </a>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section>
        <h4 class="primary-heading">Testimonials</h4>
        <div class="container relative lg:px-36 mx-auto">
            <img src="{{ asset('imgs/tm-boy.webp') }}" data-aos="fade-left" data-aos-duration="1000"
                class="invisible md:visible h-[15rem] mt-[4rem] -ml-[3rem] absolute -z-10"
                alt="{{ config('app.name') }}" />
            <img src="{{ asset('imgs/tm-girl.webp') }}" data-aos="fade-right" data-aos-duration="1000"
                class="invisible lg:visible h-[15rem] mt-[4rem] mr-[6rem] absolute right-0 -z-10"
                alt="{{ config('app.name') }}" />

            <div class="grid grid-cols-1 lg:grid-cols-3">
                <div class="p-4 my-auto">
                    <div class="h-full bg-gray-100 p-8 rounded shadow-gray-600 shadow-2xl">
                        <ul class="flex justify-center mb-4">
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
                        </ul>
                        <p class="leading-relaxed mb-6 text-center">
                            Excellent website for online assignment help Ireland. The writers are professional too.
                        </p>

                        <p class="font-medium text-sm text-gray-900 text-right">
                            -Niall
                        </p>
                    </div>
                </div>

                <div class="p-4 my-auto">
                    <div class="h-full bg-gray-100 p-8 rounded shadow-gray-600 shadow-xl">
                        <ul class="flex justify-center mb-4">
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
                        </ul>
                        <p class="leading-relaxed mb-6 text-center">
                            I appreciate their approach to handling a comprehensive assignment. Great work on the research
                            part. There were some formatting errors but upon asking they quickly resolved and improved them.
                        </p>

                        <p class="font-medium text-sm text-gray-900 text-right">
                            -Shabath
                        </p>
                    </div>
                </div>

                <div class="p-4 my-auto">
                    <div class="h-full bg-gray-100 p-8 rounded shadow-gray-600 shadow-xl">
                        <ul class="flex justify-center mb-4">
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
                        </ul>
                        <p class="leading-relaxed mb-6 text-center">
                            I was looking for someone to do my assignment. I hired them on a friend's recommendation and
                            they didn’t disappoint at all. The prices are also affordable.
                        </p>

                        <p class="font-medium text-sm text-gray-900 text-right">
                            -Rian
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Just click away --}}
    <section class="">
        <div class="container grid grid-cols-1 lg:grid-cols-2 mx-auto px-8 lg:px-16 gap-y-6">
            <div class="my-auto" data-aos="fade-right" data-aos-duration="2000">
                <h3 class="primary-heading">
                    I’m Willing to Pay Someone To Do My Assignments But Who Should I Trust?
                </h3>
                <p class="primary-text text-center">
                    It’s the story of all students. They have resources to hire a writer but when they search <strong>“write
                        my assignment Ireland” </strong>they get stuck between the many options. We can understand this as
                    being a student, it can be difficult to pick the best writer for your assignments.
                    <br><br>
                    When this is the case, always go with one who prioritizes Quality. And that’s the case with us. For us,
                    Quality comes first whether it’s about writing from scratch or editing the already existing papers. We
                    have the best Irish writers who are also specialists in their niches and know the art of writing
                    prolific assignments. From thesis, and dissertations, to nursing, law, and homework help you can trust
                    our assignment writing service Ireland to pave your way to success. If you are still not sure about our
                    services, here are some other perks of hiring us:

                </p>
            </div>

            <div class="mx-auto my-auto">
                <div class="flex flex-col md:flex-row space-3">
                    <div class="">
                        <img class="animate-waving-hand h-[13rem]" src="{{ asset('imgs/boy3.webp') }}"
                            alt="{{ config('app.name') }}" />
                    </div>

                    <div class="mt-10 text-center">
                        <a href="{{ route('order') }}"
                            class="text-center py-2 px-4 font-semibold bg-primary-two hover:bg-primary-one text-white rounded-full">
                            Just a click away </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mx-auto px-8 lg:px-28 pt-10 gap-x-8 gap-y-8">
            <div data-aos="fade-up" data-aos-duration="1300">
                <img src="{{ asset('imgs/service-icon1.webp') }}" class="w-16" alt="{{ config('app.name') }}" />
                <h4 class="font-bold text-lg pb-3 pt-2"> Quality </h4>
                <p class="text-gray-700 text-sm mb-4">
                    It’s the first thing you will notice in our services. We aim to give you the best and write papers from
                    scratch following your requirements. It also separates us from other assignment writing Ireland
                    websites. We make sure to help you stand out on the basis of Quality. Every assignment is meticulously
                    researched, holds clear structure and formatting, ignites critical thinking and aims to serve beyond the
                    requirements. That makes us a reliable source for assignment writing Ireland services.
                </p>
            </div>

            <div data-aos="fade-up" data-aos-duration="1600">
                <img src="{{ asset('imgs/service-icon2.webp') }}" class="w-16" alt="{{ config('app.name') }}" />
                <h4 class="font-bold text-lg pb-3 pt-2">Affordability</h4>
                <p class="text-gray-700 text-sm mb-4">
                    After quality, what’s the second main concern of students? Affordability! We offer assignment help
                    Ireland at cheap rates so students can benefit from it without spending a lot of money. The aim is to
                    help students grow without letting them extend their budgets. The pricing starts as low as 8€ for 1 page
                    and then varies according to the assignment type, length and deadline. So, while coming to us, there’s
                    one thing you don’t need to worry about and i.e. the cost.
                </p>
            </div>

            <div data-aos="fade-up" data-aos-duration="1900">
                <img src="{{ asset('imgs/service-icon3.webp') }}" class="w-16" alt="{{ config('app.name') }}" />
                <h4 class="font-bold text-lg pb-3 pt-2">Free Turnitin Report</h4>
                <p class="text-gray-700 text-sm mb-4">
                    Students have a lot of plagiarism concerns when hiring online assignment writing service. That’s why
                    they always seek Turnitin reports for their satisfaction. We give it for free since we write everything
                    from scratch and guarantee plagiarism-free papers. The report includes similarity percentage, plagiarism
                    detection and document information. Usually when you “pay someone to do my assignment Ireland”, they
                    give you reports with a cost but here with us you can get it along with your assignments without any
                    charges.
                </p>
            </div>

            <div data-aos="fade-up" data-aos-duration="2200">
                <img src="{{ asset('imgs/service-icon4.webp') }}" class="w-16" alt="{{ config('app.name') }}" />
                <h4 class="font-bold text-lg pb-3 pt-2">Research-Driven Assignments</h4>
                <p class="text-gray-700 text-sm mb-4">
                    This is one of our best features. We assure authentic and accurate information with explanatory data and
                    sound writing skills to make you win the grades and appreciation from your professors. Our assignments
                    include stats and numbers to support the argument, impeccable formatting, references, and also
                    proofreading and editing by the experts. So, our research-driven assignment writing service will always
                    give you a push in your academic career, that’s our promise.
                </p>
            </div>

            <div data-aos="fade-up" data-aos-duration="1300">
                <img src="{{ asset('imgs/service-icon5.webp') }}" class="w-16" alt="{{ config('app.name') }}" />
                <h4 class="font-bold text-lg pb-3 pt-2">Best Irish Writers</h4>
                <p class="text-gray-700 text-sm mb-4">
                    It’s hard to find the best Irish writers. Many claim results but don’t deliver it in their assignments.
                    Our writers haven’t only proved their mettle but also have a solid background in writing assignments.
                    You can trust them for your success. When students usually search, “Can someone write my assignment
                    Ireland,” we know you are looking for native writers who aren’t only well aware of the academic
                    standards but also know the ins and outs of every assignment. That’s why we have pooled only native
                    writers who understand your instructions and adapt well to it.
                </p>
            </div>

            <div data-aos="fade-up" data-aos-duration="1600">
                <img src="{{ asset('imgs/service-icon6.webp') }}" class="w-16" alt="{{ config('app.name') }}" />
                <h4 class="font-bold text-lg pb-3 pt-2">Instant Help</h4>
                <p class="text-gray-700 text-sm mb-4">
                    Now you don’t need to wake up in the middle of the night from the assignment stress. If you have an
                    urgent deadline to meet, talk to us and our writers will give you instant support at the time. We have a
                    prompt support team who is ready to assist via live chat, phone number or email. Now, even if your
                    deadline wakes you at midnight, you know where to seek help. Our write my assignment Ireland services
                    are available on a click.
                </p>
            </div>

            <div data-aos="fade-up" data-aos-duration="1900">
                <img src="{{ asset('imgs/service-icon7.webp') }}" class="w-16" alt="{{ config('app.name') }}" />
                <h4 class="font-bold text-lg pb-3 pt-2">Expert Assistance</h4>
                <p class="text-gray-700 text-sm mb-4">
                    All the papers are passed through our Quality Assurance team before we submit them to you. The team
                    checks it accurately for information resources, spelling, formatting, and grammatical issues to make it
                    perfect from all aspects. After receiving your first draft, if you need help from our assignment writing
                    Ireland in any section or pages, you can connect with our experts and they will guide you on everything
                    from basic level to advance.
                </p>
            </div>

            <div data-aos="fade-up" data-aos-duration="2200">
                <img src="{{ asset('imgs/service-icon8.webp') }}" class="w-16" alt="{{ config('app.name') }}" />
                <h4 class="font-bold text-lg pb-3 pt-2">Free Revisions</h4>
                <p class="text-gray-700 text-sm mb-4">
                    If you aren’t fully satisfied with our papers you can claim free revisions. We will look over your
                    genuine concerns and will give support for free. The number of Free Revisions might be limited. Although
                    we thoroughly check our assignments before delivering it to you to ensure that no room is left for
                    mistakes, still if there’s the need for revisions, we will amend it for you without charging an extra
                    amount for it. Our assignment writing Ireland is a customer-centric company and that’s why we prioritize
                    all your needs.
                </p>
            </div>
        </div>
    </section>

    <!-- Service work -->
    <section class="container mx-auto px-8">
        <h4 class="primary-heading">
            How Can I Order Write My Assignment Ireland Services?
        </h4>

        <p class="text-primary text-center">
            Our order process is simple and consists of 3-4 steps only. No complex process, no longer wandering on the
            website and no waiting. Here’s how you can order:
        </p>

        <ul class="block w-3/4 md:w-2/5 my-4 mx-auto">
            <li class="flex align-center flex-col border-2 border-primary-one rounded-lg my-2">
                <div class="cursor-pointer px-5 py-3 inline-block rounded-t">
                    Fill in your order details.
                </div>
                <div class="absolute -ml-[0.75rem] mt-[0.55rem]">
                    <img src="{{ asset('imgs/count1.webp') }}" class="w-6 h-7" alt="{{ config('app.name') }}" />
                </div>
            </li>

            <li class="flex align-center flex-col border-2 border-primary-one rounded-lg my-2">
                <div class="cursor-pointer px-5 py-3 inline-block">
                    Pay us in advance to confirm your order.
                </div>
                <div class="absolute -ml-[0.75rem] mt-[0.55rem]">
                    <img src="{{ asset('imgs/count2.webp') }}" class="w-6 h-7" alt="{{ config('app.name') }}" />
                </div>
            </li>

            <li class="flex align-center flex-col border-2 border-primary-one rounded-lg my-2">
                <div class="cursor-pointer px-5 py-3 inline-block">
                    Track your assignment progress (optional)
                </div>
                <div class="absolute -ml-[0.75rem] mt-[0.75rem]">
                    <img src="{{ asset('imgs/count3.webp') }}" class="w-6 h-7" alt="{{ config('app.name') }}" />
                </div>
            </li>

            <li class="flex align-center flex-col border-2 border-primary-one rounded-lg my-2">
                <div class="cursor-pointer px-5 py-3 inline-block">
                    Get your assignments before the deadline.
                </div>
                <div class="absolute -ml-[0.75rem] mt-[0.55rem]">
                    <img src="{{ asset('imgs/count4.webp') }}" class="w-6 h-7" alt="{{ config('app.name') }}" />
                </div>
            </li>
        </ul>
    </section>

    <section class="mx-auto bg-white p-5 py-10">
        <div class="space-x-2 container grid grid-cols-1 lg:grid-cols-2 mx-auto px-8 lg:px-16 ">
            <div class="my-auto" data-aos="fade-left" data-aos-duration="2000">
                <h3 class="primary-heading">
                    Hire Our Do My Assignment Ireland Services & Get Closer to Your Academic Success with Our Top 3
                    Features; Quality, Niche Experts & Timeliness
                </h3>
                <p class="primary-text text-center">
                    Hiring online help can be difficult sometimes because of the ample choices available. But when
                    coming to us, you can be assured of three factors; Quality, Niche Experts and Timeliness. We
                    give you a tailored approach for your assignments that sets you apart from other students. Not
                    only this, our experts assist in making your assignments remarkable. From research to writing to
                    conclusion and presentation, each section is neatly done to let you score higher.
                    <br> <br>
                    Keeping Quality as our top priority our experts write assignments that can exceed your
                    professor’s expectations and sets your path towards academic brilliance. And the last most
                    appreciated factor of ours is Timeliness. We respect your time and hence never go a minute above
                    it. So, if you want all these factors at one place, our “do my assignment Ireland” services are
                    only a click away.

                </p>
            </div>


            <div class="my-auto" data-aos="fade-right" data-aos-duration="2000">
                <h3 class="primary-heading">
                    Leading Assignment Help Ireland - Our Dedicated Support for Urgent Assignments to Free You from
                    Stress
                </h3>
                <p class="primary-text text-center">
                    Overburdened with assignment loads? Or is academic stress giving you sleepless nights?
                    <br><br>
                    Now, no more panic as we have the solutions for you. If your assignment is taking too long and
                    the deadline is near, you can rush to our support team. We have a dedicated team who deal with
                    urgent assignment writing Ireland everywhere from Dublin, Cork, Limerick, Galway, Waterford,
                    Belfast Ireland. So, no matter to which city you belong, our fast and reliable academic support
                    by Irish writers is ready to assist. Also, we take the burden off your shoulders by giving you
                    well-researched and well-written assignments. So, if you want to enjoy the peace of mind, our
                    quality and stress-free academic support is right here for you.

                </p>
            </div>
        </div>
        <div class="">
            <img src="{{ asset('images/separator.svg') }}" alt="separator">
        </div>
        <div class="space-x-2 container grid grid-cols-1 lg:grid-cols-2 mx-auto px-8 lg:px-16 ">
            <div class="my-auto" data-aos="fade-left" data-aos-duration="2000">
                <h3 class="primary-heading">
                    From Ideas to Excellence - Get Assistance from Top Irish Experts for Impeccable Assignments on
                    the Leading Assignment Writing Ireland Website
                </h3>
                <p class="primary-text text-center">
                    Assignments aren’t a minor thing. You shouldn’t undermine its role in your academic journey.
                    Every drop of it counts in your final grades. By not prioritizing it, you can leave the room for
                    disappointing grades. So, if you’re feeling stuck or don’t have the ample time to finish it
                    before the deadline, our professional assignment help Ireland service providers can be of great
                    help.
                    <br><br>
                    From research to brainstorming ideas to writing the first draft, our writers are well-trained to
                    do the job as per your requirements. With their adeptness in academia, your assignments won’t
                    only stand out but will also show your command over the subject. Still, if you’re searching for
                    someone to “write my assignment Ireland,” you can try us with a sample. We are sure you won’t
                    regret it later.

                </p>
            </div>


            <div class="my-auto" data-aos="fade-right" data-aos-duration="2000">
                <h3 class="primary-heading">
                    Diversified Assignment Writing Service Ireland for Students of All Grades at Cheapest Prices
                </h3>
                <p class="primary-text text-center">
                    Being in academia for more than 5 years, we now have a pool of writers who are also experts in
                    their fields. Starting from Medical, Law, Social Science, Nursing, Accounting or Literature, you
                    can get in touch with the professionals and get assistance regardless of the complexity and the
                    type of the assignments. All our assignment makers possess degrees from the reputable institutes
                    of Ireland. Also, they are highly qualified and hold strong grasp on their subjects.
                    <br> <br>
                    So, without any hassles and worries of failing your grades, get your hands on the leading
                    assignment writing service Ireland that is meant to fasten your growth and give you excellent
                    results. Regardless of your subject or level, our dedicated team works closely with you to
                    ensure that the assignment reflects your aspirations and brings great results for you.

                </p>
            </div>
        </div>
        <div class="">
            <img src="{{ asset('images/separator.svg') }}" alt="separator">
        </div>
    </section>

    {{-- <section class=" mx-auto bg-white p-5 py-10">
        <div
            class="bg-slate-100 rounded-3xl border-gray-600 p-5 border-spacing-2 box-border my-4 shadow-lg shadow-black md:w-[80%] mx-auto">
            <div class="md:p-5 p-2 border-dashed border-2 border-gray-800">
                <div class="grid md:grid-cols-1 lg:grid-cols-2">
                    <div class="">
                        <h4 class="font-bold px-5 sm:text-4xl text-2xl">
                            Hire Our Do My Assignment Ireland Services & Get Closer to Your Academic Success with Our Top 3
                            Features; Quality, Niche Experts & Timeliness
                        </h4>
                        <p class="text-lg p-5">
                            Hiring online help can be difficult sometimes because of the ample choices available. But when
                            coming to us, you can be assured of three factors; Quality, Niche Experts and Timeliness. We
                            give you a tailored approach for your assignments that sets you apart from other students. Not
                            only this, our experts assist in making your assignments remarkable. From research to writing to
                            conclusion and presentation, each section is neatly done to let you score higher.
                            <br> <br>
                            Keeping Quality as our top priority our experts write assignments that can exceed your
                            professor’s expectations and sets your path towards academic brilliance. And the last most
                            appreciated factor of ours is Timeliness. We respect your time and hence never go a minute above
                            it. So, if you want all these factors at one place, our “do my assignment Ireland” services are
                            only a click away.

                        </p>
                        <h4 class="font-bold px-5 sm:text-4xl text-2xl">
                            Leading Assignment Help Ireland - Our Dedicated Support for Urgent Assignments to Free You from
                            Stress</h4>
                        <p class="text-lg p-5">
                            Overburdened with assignment loads? Or is academic stress giving you sleepless nights?
                            <br><br>
                            Now, no more panic as we have the solutions for you. If your assignment is taking too long and
                            the deadline is near, you can rush to our support team. We have a dedicated team who deal with
                            urgent assignment writing Ireland everywhere from Dublin, Cork, Limerick, Galway, Waterford,
                            Belfast Ireland. So, no matter to which city you belong, our fast and reliable academic support
                            by Irish writers is ready to assist. Also, we take the burden off your shoulders by giving you
                            well-researched and well-written assignments. So, if you want to enjoy the peace of mind, our
                            quality and stress-free academic support is right here for you.

                        </p>


                    </div>
                    <div class="">
                        <h4 class="font-bold px-5 sm:text-4xl text-2xl">
                            From Ideas to Excellence - Get Assistance from Top Irish Experts for Impeccable Assignments on
                            the Leading Assignment Writing Ireland Website
                        </h4>
                        <p class="text-lg p-5">
                            Assignments aren’t a minor thing. You shouldn’t undermine its role in your academic journey.
                            Every drop of it counts in your final grades. By not prioritizing it, you can leave the room for
                            disappointing grades. So, if you’re feeling stuck or don’t have the ample time to finish it
                            before the deadline, our professional assignment help Ireland service providers can be of great
                            help.
                            <br><br>
                            From research to brainstorming ideas to writing the first draft, our writers are well-trained to
                            do the job as per your requirements. With their adeptness in academia, your assignments won’t
                            only stand out but will also show your command over the subject. Still, if you’re searching for
                            someone to “write my assignment Ireland,” you can try us with a sample. We are sure you won’t
                            regret it later.
                        </p>
                        <h4 class="font-bold px-5 sm:text-4xl text-2xl">
                            Diversified Assignment Writing Service Ireland for Students of All Grades at Cheapest Prices
                        </h4>
                        <p class="text-lg p-5">
                            Being in academia for more than 5 years, we now have a pool of writers who are also experts in
                            their fields. Starting from Medical, Law, Social Science, Nursing, Accounting or Literature, you
                            can get in touch with the professionals and get assistance regardless of the complexity and the
                            type of the assignments. All our assignment makers possess degrees from the reputable institutes
                            of Ireland. Also, they are highly qualified and hold strong grasp on their subjects.
                            <br> <br>
                            So, without any hassles and worries of failing your grades, get your hands on the leading
                            assignment writing service Ireland that is meant to fasten your growth and give you excellent
                            results. Regardless of your subject or level, our dedicated team works closely with you to
                            ensure that the assignment reflects your aspirations and brings great results for you.

                        </p>

                    </div>
                </div>




            </div>
        </div>
    </section> --}}

    <!-- FAQ -->
    <section>
        <h4 class="primary-heading">FAQ'S</h4>
        <p class="text-primary text-center">
            If you have some queries in your mind related to our services, then here you go with the answers.
        </p>
        <div class="pt-3 pb-14 mx-auto bg-wavesbg bg-cover bg-no-repeat">
            <div class="container mx-auto sm:mb-2 px-5 md:px-0 lg:w-4/5">
                <div class="w-full">
                    <details class="mb-3 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-gray-600 rounded-xl lg:rounded-full border border-gray-300 bg-white focus:border-primary-one text-base py-2 px-3 leading-8 mb-1">
                            1- I need my assignment in a few hours. Can you provide it urgently?
                        </summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class="text-gray-500 text-sm">
                                A. Sure, we can! We have a dedicated department that deals with the urgent queries. So, no
                                matter whether you wake up in the middle of the night dreading the deadline or you get to
                                know a day before, you can contact our support team for urgent assignment writing Ireland.
                                Also, the services aren’t over-priced and you will also find quality in it as our qualified
                                writers deal with the short-deadline assignments.
                            </span>
                        </div>
                    </details>
                    <details class="mb-4 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-gray-600 rounded-xl lg:rounded-full border border-gray-300 bg-white focus:border-primary-one text-base py-2 px-3 leading-8 mb-1">
                            2- What if I’m not happy with my assignment?
                        </summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class="text-gray-500 text-sm">
                                A. All our assignments are well-researched, quality-driven, prepared and proofread by
                                experts. Our Quality Assurance team ensures all requirements are met before we deliver the
                                assignment. So, there’s hardly any room left for revisions. But still, if you aren’t happy
                                with the final results, you are always welcome to seek assistance on your papers. With our
                                assignment help Ireland, we always make sure to do it up to your requirements as your
                                satisfaction is our utmost priority.
                            </span>
                        </div>
                    </details>
                    <details class="mb-4 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-gray-600 rounded-xl lg:rounded-full border border-gray-300 bg-white focus:border-primary-one text-base py-2 px-3 leading-8 mb-1">
                            3- Is it possible to talk to the writer directly?
                        </summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class="text-gray-500 text-sm">
                                A. We know you’re searching for someone for “write my assignment Ireland services.” For
                                this, we have a continuous support team who are ready to assist you anytime no matter how
                                complex your queries are. All our support specialists are well-trained for their jobs. But
                                still, if you want to talk to the writer, you can request our support team members and they
                                will connect you with the writer. You can consult your queries and gain satisfaction
                                regarding the professional who’s working on your assignment.
                            </span>
                        </div>
                    </details>
                    <details class="mb-4 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-gray-600 rounded-xl lg:rounded-full border border-gray-300 bg-white focus:border-primary-one text-base py-2 px-3 leading-8 mb-1">
                            4- I don’t have money to hire a professional writer. Can you reduce your prices?
                        </summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class="text-gray-500 text-sm">
                                A. We understand that students are short on budget and don’t have a lot of money to hire
                                professional academic support. This is the reason we have already kept our prices
                                economical. Our pricing starts below $10 and varies according to the assignment type,
                                requirements, and deadlines. So, while coming to us you don’t need to worry about the
                                pricing as our aim is to help you grow while keeping our assignment writing service charges
                                low.
                            </span>
                        </div>
                    </details>
                    <details class="mb-4 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-gray-600 rounded-xl lg:rounded-full border border-gray-300 bg-white focus:border-primary-one text-base py-2 px-3 leading-8 mb-1">
                            5- Will you maintain my privacy?
                        </summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class="text-gray-500 text-sm">
                                A. Yes, all the time! We only use your personal information to deliver orders and maintain
                                the log. There’s no other purpose. We neither intend nor use your information for
                                advertisements. Secondly, it’s also against our policies to use client’s information for any
                                other purpose. So, don’t worry your anonymity will always remain confidential with our
                                assignment help Ireland services.
                            </span>
                        </div>
                    </details>
                    <details class="mb-4 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-gray-600 rounded-xl lg:rounded-full border border-gray-300 bg-white focus:border-primary-one text-base py-2 px-3 leading-8 mb-1">
                            6- I want a Quality assignment to get good grades. Do you guarantee Quality?
                        </summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class="text-gray-500 text-sm">
                                A. Yes, we do! We have laid the foundation of our services on the basis of Quality. And it's
                                only because of Quality that we have a high ratio of returning customers. You can put your
                                trust in us before you hire our “do my assignment” services as we guarantee success with
                                quality-driven assignments.
                            </span>
                        </div>
                    </details>
                    <details class="mb-4 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-gray-600 rounded-xl lg:rounded-full border border-gray-300 bg-white focus:border-primary-one text-base py-2 px-3 leading-8 mb-1">
                            7. Will an Irish writer write my assignment for me?
                        </summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class="text-gray-500 text-sm">
                                A. Yes, all the time. We have a team of native writers who work according to the Irish
                                academic standards. They aren’t only qualified from the top institutes in Ireland but also
                                have a good experience in academia while also working with students. Our team guarantees
                                premium quality work and always stays updated with Ireland educational trends. Your
                                assignment will be in safe hands, no worries.
                            </span>
                        </div>
                    </details>
                    <details class="mb-4 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-gray-600 rounded-xl lg:rounded-full border border-gray-300 bg-white focus:border-primary-one text-base py-2 px-3 leading-8 mb-1">
                            8. Can you do my assignment for me Ireland in 24 hours?
                        </summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class="text-gray-500 text-sm">
                                A. It depends on the requirements; its length, complexity and subject type. Usually, it
                                takes 10-15 days for a lengthy assignment but if it’s something that can be done in 24
                                hours, we will definitely try to help. Also, in this regard you can seek our emergency
                                assignment writing Ireland for urgent help.
                            </span>
                        </div>
                    </details>
                    <details class="mb-4 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-gray-600 rounded-xl lg:rounded-full border border-gray-300 bg-white focus:border-primary-one text-base py-2 px-3 leading-8 mb-1">
                            9. How are your assignment writing service Ireland better than others?
                        </summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class="text-gray-500 text-sm">
                                A. We have a long list of returning customers who are seeking our services repeatedly. Plus,
                                we also receive services via our client’s recommendations. We have served 25000+ orders till
                                now and are still on the journey to help more students via our top of the line, quality
                                services. These stats make us say that we are doing far better than others in the same line.
                                If you aren’t sure yet, you can try us with a sample paper and you will also be impressed,
                                that’s our guarantee.
                            </span>
                        </div>
                    </details>
                    <details class="mb-4 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-gray-600 rounded-xl lg:rounded-full border border-gray-300 bg-white focus:border-primary-one text-base py-2 px-3 leading-8 mb-1">
                            10. Are you also based in Dublin?
                        </summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class="text-gray-500 text-sm">
                                A. Yes, we are a Dublin-based assignment writing help website. But we aren’t limited to
                                Dublin only. We also provide our services in Belfast, Galway, Cork, Limerick, Waterford and
                                other cities of Ireland. Not only that, if you’re from the UK or USA, you can also contact
                                our support team and get your “write my assignment” queries resolved according to the
                                requirements.
                            </span>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden mt-10 pb-24 px-4">
        <div class="">
            <img src="{{ asset('images/separator.svg') }}" alt="separator">
        </div>
        <div class=" mx-auto px-8 lg:px-16 ">
            <div class="my-auto">
                <h3 class="primary-heading">
                    Creating a Legacy of Knowledge through Our Assignment
                    Writing Service Ireland
                </h3>
                <p class="primary-text ">
                    Our website isn’t just a source of seeking academic help for students but also a platform where
                    expertise meets creativity in creating assignments that stand as a pillar of scholarly
                    excellence. We take pride in what we do and how we do. We aren’t only assignment writing Ireland
                    website but also the architects of intellect whose work is to weave insights and research into
                    papers that ignites innovation.
                    <br>
                    Our platform guarantees exclusivity, diversification of subjects, instant help, affordability
                    and quality-driven assignments. So, feel free to contact us in harnessing the power of words to
                    create a legacy with your assignments.

                </p>
                <p class="font-bold text-center">"Here’s a Chance to Get on Top of your Assignments with the Best Do My
                    Assignment Ireland Website
                    as We Guarantee Success by Letting You Create an Impact with the Power of Words. Now, Get Ready
                    to Climb the Ladder of Success!"
                </p>
            </div>

        </div>
        <div class="">
            <img src="{{ asset('images/separator.svg') }}" alt="separator">
        </div>
        {{-- <div class="container mx-auto">

            <div class="grid mt-20 ">
                <!-- grid 1 -->
                <div>
                    <div class="bg-white rounded-r-3xl rounded-tl-3xl ring-2 shadow-xl p-5">
                        <div class="flex items-center ">
                            <div class=" text-center">
                                <h3 class="font-bold text-3xl">Creating a Legacy of Knowledge through Our Assignment
                                    Writing Service Ireland</h3>
                            </div>
                            <div class="ml-[10%] sm:block hidden">
                                <img alt="{{ config('app.name') }}" src="{{ asset('images/write-file.png') }}">
                            </div>
                        </div>
                        <p class="text-sm mt-5">
                            Our website isn’t just a source of seeking academic help for students but also a platform where
                            expertise meets creativity in creating assignments that stand as a pillar of scholarly
                            excellence. We take pride in what we do and how we do. We aren’t only assignment writing Ireland
                            website but also the architects of intellect whose work is to weave insights and research into
                            papers that ignites innovation.
                            <br>
                            Our platform guarantees exclusivity, diversification of subjects, instant help, affordability
                            and quality-driven assignments. So, feel free to contact us in harnessing the power of words to
                            create a legacy with your assignments.
                        </p>
                        <h4 class="font-bold px-5 sm:text-4xl text-2xl">
                            Here’s a Chance to Get on Top of your Assignments with the Best Do My Assignment Ireland Website
                            as We Guarantee Success by Letting You Create an Impact with the Power of Words. Now, Get Ready
                            to Climb the Ladder of Success!
                        </h4>
                    </div>
                </div>

            </div>
        </div> --}}
    </section>


@endsection
@section('scripts')
    {{-- Tabs JS --}}
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
                        '<svg class="inline-block " width="25px" height="25px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#ffffff"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'
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
        $(".get-price").change(function(e) {
            e.preventDefault();
            var data = {
                "_token": "{{ csrf_token() }}",
                "deadline_id": $('#price-deadline').val(),
                "academic_level_id": $('#price-academic-level').val(),
            }
            $.ajax({
                method: 'POST',
                url: '{{ route('get.fare') }}',
                beforeSend: function() {
                    // $("#cost-per-page").html("Loading...")
                    const loading =
                        '<svg class="inline-block pb-2" width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#e65a43"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'
                    $("#price-cost").html(loading)
                },
                complete: function() {
                    // $("#loading").removeClass("d-block");
                },
                data: data,
                success: function(res) {
                    // console.log(res);
                    $("#price-cost").html((res.per_page_price * ($("#price-pages").val() == null ?
                        1 : $("#price-pages").val())))
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });
    </script>
@endsection
