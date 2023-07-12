@extends('layouts.web')

@section('title', 'Ireland Assignment Help Reviews')
@section('description', '')
@section('canonical', config('app.url') . Request::path())

@section('content')

    <main class="container my-6 mx-auto sm:px-10">
        <section class="grid grid-cols-1 md:grid-cols-2 md:gap-x-8 gap-y-8 mb-4">

            <div class="shadow-lg mx-8 md:mx-auto rounded-xl p-4">
                <div class="flex items-center mt-4">
                    <a href="#" class="block relative">
                        <img alt="profil" src="{{ asset('imgs/boy3.png') }}" class="mx-auto rounded-full h-10 w-10 " />
                    </a>
                    <div class="flex flex-col ml-2 justify-between">
                        <span class="font-bold text-primary-one text-xl">
                            Psychology
                        </span>
                    </div>
                </div>

                <ul class="flex my-4">

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

                <p class="text-gray-600 ">
                    <span class="font-bold text-primary-two text-lg">
                        “
                    </span>
                        This service is the true representation of professionalism and the highest quality. These guys have saved me from late submissions and failing assignments numerous times, and I am forever indebted to them.
                    <span class="font-bold text-primary-two text-lg">
                        ”
                    </span>
                </p>

            </div>

            <div class="shadow-lg mx-8 md:mx-auto rounded-xl p-4">

                <div class="flex items-center mt-4">
                    <a href="#" class="block relative">
                        <img alt="profil" src="{{ asset('imgs/boy3.png') }}" class="mx-auto rounded-full h-10 w-10 " />
                    </a>
                    <div class="flex flex-col ml-2 justify-between">
                        <span class="font-bold text-primary-one text-xl">
                            Nursing
                        </span>
                    </div>
                </div>

                <ul class="flex my-4">

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

                <p class="text-gray-600 ">
                    <span class="font-bold text-primary-two text-lg">
                        “
                    </span>
                        Nursing assignments and papers are not easy to write because they require a lot of research and medical knowledge. If I didn’t have help from a cheap assignment writing website, I wouldn’t have been able to complete their efficiency.
                    <span class="font-bold text-primary-two text-lg">
                        ”
                    </span>
                </p>

            </div>

            <div class="shadow-lg mx-8 md:mx-auto rounded-xl p-4">

                <div class="flex items-center mt-4">
                    <a href="#" class="block relative">
                        <img alt="profil" src="{{ asset('imgs/boy3.png') }}" class="mx-auto rounded-full h-10 w-10 " />
                    </a>
                    <div class="flex flex-col ml-2 justify-between">
                        <span class="font-bold text-primary-one text-xl">
                            Economics
                        </span>
                    </div>
                </div>

                <ul class="flex my-4">

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

                <p class="text-gray-600 ">
                    <span class="font-bold text-primary-two text-lg">
                        “
                    </span>
                        I remember nagging the writers here, but they were always very respectful and considerate of my panic and urgency. They completed my assignments before the set deadline and helped me greatly all throughout my college life.
                    <span class="font-bold text-primary-two text-lg">
                        ”
                    </span>
                </p>

            </div>

            <div class="shadow-lg mx-8 md:mx-auto rounded-xl p-4">

                <div class="flex items-center mt-4">
                    <a href="#" class="block relative">
                        <img alt="profil" src="{{ asset('imgs/boy3.png') }}" class="mx-auto rounded-full h-10 w-10 " />
                    </a>
                    <div class="flex flex-col ml-2 justify-between">
                        <span class="font-bold text-primary-one text-xl">
                            Marketing
                        </span>
                    </div>
                </div>

                <ul class="flex my-4">

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

                <p class="text-gray-600 ">
                    <span class="font-bold text-primary-two text-lg">
                        “
                    </span>
                        I was reluctant to approach them, but when I finally got my paperback, I was delighted and satisfied with their services; since then, I have kept on coming back to their reliable service.
                    <span class="font-bold text-primary-two text-lg">
                        ”
                    </span>
                </p>

            </div>

            <div class="shadow-lg mx-8 md:mx-auto rounded-xl p-4">

                <div class="flex items-center mt-4">
                    <a href="#" class="block relative">
                        <img alt="profil" src="{{ asset('imgs/boy3.png') }}" class="mx-auto rounded-full h-10 w-10 " />
                    </a>
                    <div class="flex flex-col ml-2 justify-between">
                        <span class="font-bold text-primary-one text-xl">
                            International Relations
                        </span>
                    </div>
                </div>

                <ul class="flex my-4">

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

                <p class="text-gray-600 ">
                    <span class="font-bold text-primary-two text-lg">
                        “
                    </span>
                        My classmate asked me to try this website for my academic help, so I visited their website and contacted their customer support. I was immediately impressed with the way they made me understand everything. Their services prove that they are actually in the market to help people and not just for financial gain.
                    <span class="font-bold text-primary-two text-lg">
                        ”
                    </span>
                </p>

            </div>

            <div class="shadow-lg mx-8 md:mx-auto rounded-xl p-4">

                <div class="flex items-center mt-4">
                    <a href="#" class="block relative">
                        <img alt="profil" src="{{ asset('imgs/boy3.png') }}" class="mx-auto rounded-full h-10 w-10 " />
                    </a>
                    <div class="flex flex-col ml-2 justify-between">
                        <span class="font-bold text-primary-one text-xl">
                            Journalism
                        </span>
                    </div>
                </div>

                <ul class="flex my-4">

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

                <p class="text-gray-600 ">
                    <span class="font-bold text-primary-two text-lg">
                        “
                    </span>
                        I was worried about the quality and uniqueness of my papers because journalism is a field where half the things are similar, but I wanted my assignment to be 100% plagiarism-free. However, they delivered according to my requirements and left me satisfied.
                    <span class="font-bold text-primary-two text-lg">
                        ”
                    </span>
                </p>

            </div>

            <div class="shadow-lg mx-8 md:mx-auto rounded-xl p-4">

                <div class="flex items-center mt-4">
                    <a href="#" class="block relative">
                        <img alt="profil" src="{{ asset('imgs/boy3.png') }}" class="mx-auto rounded-full h-10 w-10 " />
                    </a>
                    <div class="flex flex-col ml-2 justify-between">
                        <span class="font-bold text-primary-one text-xl">
                            English
                        </span>
                    </div>
                </div>

                <ul class="flex my-4">

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

                <p class="text-gray-600 ">
                    <span class="font-bold text-primary-two text-lg">
                        “
                    </span>
                        I was worried sick about my English literature assignment when I came across this website, and I must say I am completely satisfied with their process, and I have suggested their services to many of my friends.
                    <span class="font-bold text-primary-two text-lg">
                        ”
                    </span>
                </p>

            </div>

            <div class="shadow-lg mx-8 md:mx-auto rounded-xl p-4">

                <div class="flex items-center mt-4">
                    <a href="#" class="block relative">
                        <img alt="profil" src="{{ asset('imgs/boy3.png') }}" class="mx-auto rounded-full h-10 w-10 " />
                    </a>
                    <div class="flex flex-col ml-2 justify-between">
                        <span class="font-bold text-primary-one text-xl">
                            Medical
                        </span>
                    </div>
                </div>

                <ul class="flex my-4">

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

                <p class="text-gray-600 ">
                    <span class="font-bold text-primary-two text-lg">
                        “
                    </span>
                        I was looking for high quality but affordable writing services, and I came across this one. Their prices are amazing and inexpensive, which is why I tried them in the first place. Their quality proved that they are a no joke agency that takes their work very seriously.
                    <span class="font-bold text-primary-two text-lg">
                        ”
                    </span>
                </p>

            </div>

            <div class="shadow-lg mx-8 md:mx-auto rounded-xl p-4">

                <div class="flex items-center mt-4">
                    <a href="#" class="block relative">
                        <img alt="profil" src="{{ asset('imgs/boy3.png') }}" class="mx-auto rounded-full h-10 w-10 " />
                    </a>
                    <div class="flex flex-col ml-2 justify-between">
                        <span class="font-bold text-primary-one text-xl">
                            Sociology
                        </span>
                    </div>
                </div>

                <ul class="flex my-4">

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

                <p class="text-gray-600 ">
                    <span class="font-bold text-primary-two text-lg">
                        “
                    </span>
                        I tried such service for the first time, and I scored an A grade on my assignment. I have asked for their assistance a couple of times, and they have delivered the best content each time. Therefore, I rate their services a 10/10.
                    <span class="font-bold text-primary-two text-lg">
                        ”
                    </span>
                </p>

            </div>

            <div class="shadow-lg mx-8 md:mx-auto rounded-xl p-4">

                <div class="flex items-center mt-4">
                    <a href="#" class="block relative">
                        <img alt="profil" src="{{ asset('imgs/boy3.png') }}" class="mx-auto rounded-full h-10 w-10 " />
                    </a>
                    <div class="flex flex-col ml-2 justify-between">
                        <span class="font-bold text-primary-one text-xl">
                            Philosophy
                        </span>
                    </div>
                </div>

                <ul class="flex my-4">

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

                <p class="text-gray-600 ">
                    <span class="font-bold text-primary-two text-lg">
                        “
                    </span>
                        This is among the greatest online writing services I've found for getting high-quality assignments at reasonable prices. So many services charge exorbitant fees, but this is really great for students because it is quite reasonable.
                    <span class="font-bold text-primary-two text-lg">
                        ”
                    </span>
                </p>

            </div>


        </section>
    </main>

@endsection
