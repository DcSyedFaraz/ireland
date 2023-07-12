@extends('layouts.web')

@section('title', 'Contact Us')
@section('description', '')
@section('canonical', config('app.url') . Request::path())

@section('content')
    <main class="container my-6 mx-auto px-5 sm:px-10">

        <form id="contact-form" action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class=" bg-white shadow-md rounded-b-lg py-5 px-5 border border-gray-300 ">
                <h4 class="md:col-span-2 text-xl text-primary-one font-bold uppercase pb-2 mb-2 underline">
                    Contact Us
                </h4>
                @if (session('success'))
                    <div class="md:w-1/2 my-4 mx-auto bg-primary-one border-t-4 border-primary-two rounded-b text-teal-900 px-4 py-3 shadow-md"
                        role="alert">
                        <div class="flex">
                            <div class="py-1">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                    style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                    <circle style="fill:#25AE88;" cx="25" cy="25" r="25" />
                                    <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="38,15 22,33 12,25 " />
                                </svg>
                            </div>
                            <div>
                                <p class="text-center text-white font-bold">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-6 mt-8 md:px-10" enctype="multipart/form-data">

                    <div class="w-full relative">
                        <label class="order-label">Name :</label>
                        <input type="text" name="name" class="form-control input-form " placeholder="Full Name"
                            value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full relative">
                        <label class="order-label">Email :</label>
                        <input type="email" name="email" class="form-control input-form " placeholder="Enter Email"
                            value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full relative">
                        <label class="order-label z-10">Phone :</label>
                        <input type="tel" name="Phone" id="phone"
                            class="form-control input-form @error('phone') border-red-500 @enderror"
                            placeholder="Enter Phone" value="{{ old('phone') }}"
                            oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off"
                            data-intl-tel-input-id="0">
                        <input type="hidden" name="phone" id="phone2" />
                        @error('phone')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full relative ">
                        <label class="order-label">Subject :</label>
                        <input type="text" name="subject" class="form-control input-form " placeholder="Enter Subject"
                            value="{{ old('subject') }}">
                        @error('subject')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full relative md:col-span-2">
                        <label class="order-label">Message :</label>
                        <textarea name="detail" rows="5"
                            class=" w-full text-gray-700 rounded-3xl border border-primary-two bg-white focus:border-primary-one focus:ring-2 focus:ring-primary-one text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out "
                            placeholder="Type your message here...">{{ old('detail', '') }}</textarea>
                        @error('detail')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="text-center mt-4 ">
                    <button type="submit" role="button" class="btn-primary" id="btn-submit">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </main>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            const phoneInputField = document.querySelector("#phone");
            const phoneInput = window.intlTelInput(phoneInputField, {
                preferredCountries: ["ie"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });
            $("#contact-form").submit(function() {
                $('#contact-form').find(':submit').attr("disabled", true);
                $('#btn-submit').html("Submiting...");
                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                return true;
            });
        });
    </script>
@endsection
