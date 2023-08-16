@extends('layouts.web')

@section('title', 'Order Now')
@section('description', '')
@section('canonical', config('app.url') . Request::path())

@section('content')
    <div id="loader" class="hidden fixed top-0 flex justify-center items-center h-screen w-full z-20 cursor-not-allowed" style="background-color: rgb(255, 255, 255, 0.8);">
        <svg role="status" class="w-24 h-24 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-primary-two" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
    </div>
    <main class="container my-6 mx-auto px-5 sm:px-10">

        <form id="order-form" action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class=" bg-white shadow-md rounded-b-lg p-5 border border-gray-300 ">
                <h4 class=" text-xl text-primary-one font-bold uppercase pb-2 mb-2 underline">
                    Order
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
                                    <polyline
                                        style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                        points="
                                    38,15 22,33 12,25 " />
                                </svg>
                            </div>
                            <div>
                                <p class="text-center text-white font-bold">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-4 gap-y-6 mt-8 md:px-10">

                    <div class="md:col-span-2">
                        <label class="order-label">Paper Topic :</label>
                        <input type="text" name="paper_topic" class="form-control input-form "
                            placeholder="Enter Paper Topic" value="{{ old('paper_topic', '') }}">
                        @error('paper_topic')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label class="order-label">Academic Level :</label>
                        <div id="writer-level" class="flex items-center justify-center mt-2">
                            <div class="btn-group flex-col sm:flex-row space-y-2 sm:space-y-0" role="group">
                                @foreach ($academic_levels as $academic_level)
                                    <button type="button" class="get-fare btn-group-item" academic-level="{{ $academic_level->id }}">{{ $academic_level->name }}</button>
                                @endforeach
                                <input type="hidden" name="academic_level" id="academic_level_id">
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <label class="order-label">Subject :</label>
                        <select name="subject" class="form-control select-form ">
                            <option hidden disabled selected>Choose any option</option>
                            @foreach ($subjects as $subject)
                                <option {{ old('subject') == $subject->id ? 'selected' : '' }}
                                    value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>
                        @error('subject')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="">
                        <label class="order-label">Paper Type :</label>
                        <select name="paper_type" class="form-control select-form ">
                            <option hidden disabled selected>Choose any option</option>
                            @foreach ($paper_types as $paper_type)
                                <option {{ old('paper_type') == $paper_type->id ? 'selected' : '' }}
                                    value="{{ $paper_type->id }}">{{ $paper_type->name }}</option>
                            @endforeach
                        </select>
                        @error('paper_type')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="lg:col-span-2">
                        <div class="text-center text-xl text-primary font-bold uppercase text-primary-two">
                            Pricing <span class="" id="cost"> 0 </span> €
                        </div>
                    </div>

                    <div class="w-full relative">
                        <label class="order-label">Reference Styles:</label>
                        <select name="reference_style" class="form-control select-form ">
                            <option hidden disabled selected>Choose any option</option>
                            @foreach ($reference_styles as $reference_style)
                                <option {{ old('style') == $reference_style->id ? 'selected' : '' }} value="{{ $reference_style->name }}">
                                    {{ $reference_style->name }}</option>
                            @endforeach
                        </select>
                        @error('reference_style')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full relative">
                        <label class="order-label">Reference Number:</label>
                        <select name="style" class="form-control select-form ">
                            <option hidden disabled selected>Choose any option</option>
                            @for ($i = 1; $i <= 20; $i++)
                                <option value="{{ $i }}" {{ old('style') == $i ? 'selected' : '' }}>
                                    {{ $i }} </option>
                            @endfor
                        </select>
                        @error('style')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full relative">
                        <div class="flex">
                            <button id="inc" class="page_minus get-fare">-</button>
                            <input name="number_of_pages" type="text" id="no_of_pages" class="page_input" value="1">
                            <button id="inc" class="page_plus get-fare">+</button>
                        </div>
                        <div class="text-center">
                            <span id="word_count">250</span> Words
                        </div>
                        @error('number_of_pages')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full relative">
                        <label class="order-label">Deadline :</label>
                        <select name="deadline" id="deadline" class="form-control select-form get-fare">
                            <option hidden disabled selected>Choose any option</option>
                            @foreach ($deadlines as $deadline)
                                <option {{ old('deadline') == $deadline->id ? 'selected' : '' }}
                                    value="{{ $deadline->id }}">
                                    {{ $deadline->name .' / ' .\Carbon\Carbon::now()->addDays($deadline->duration_in_days)->format('M j') }}
                                </option>
                            @endforeach
                        </select>
                        @error('deadline')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md:col-span-2 lg:col-span-4">
                        <label class="order-label">Topic Details :</label>
                        <textarea name="detail" rows="4"
                            class=" w-full text-gray-700 rounded-2xl border border-primary-two bg-white focus:border-primary-one focus:ring-2 focus:ring-primary-one text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out "
                            placeholder="Type details here...">{{ old('detail', '') }}</textarea>
                        @error('detail')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <h4 class="md:col-span-2 lg:col-span-4 text-xl text-primary font-bold uppercase text-primary-one underline">
                        Attach File
                    </h4>

                    <div class="lg:col-span-2">
                        <input
                            class="block w-full cursor-pointer text-gray-700 border border-primary-two bg-white focus:outline-none text-sm rounded-full p-2 "
                            accept=".pdf,.ppt,.pptx,.doc,.docx,.xls,.xlsx,.csv,.txt,.jpeg,.jpg,.png,.gif,.sav,.sps,.spv,.spo,.mat,.zip,.rar"
                            aria-describedby="email_attacements_help" id="email_attacements" name="emailAttachments[]"
                            type="file" multiple="">
                        @if ($errors->has('emailAttachments.*'))
                            @foreach ($errors->get('emailAttachments.*') as $message)
                                <p class="text-red-600 text-sm">{{ $message[0] }}</p>
                            @endforeach
                        @endif
                    </div>

                    <div class="lg:col-span-2">
                        <p class="text-primary-two">
                            <small class="text-primary-one text-lg">File types:</small>
                            <small> <strong class="text-danger">pdf, ppt, pptx,
                                    doc, docx, xls, xlsx, csv, txt, jpeg, jpg, png, gif, sav, sps, spv, spo, mat,
                                    zip</strong></small>
                        </p>
                    </div>

                    <h4 class="md:col-span-2 lg:col-span-4 text-xl text-primary font-bold uppercase text-primary-one underline">
                        Contact Information
                    </h4>
                    <div class="lg:col-span-2">
                        <label class="order-label">Name :</label>
                        <input type="text" name="name" class="form-control input-form " placeholder="Full Name"
                            value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="lg:col-span-2">
                        <label class="order-label">Email :</label>
                        <input type="email" name="email" class="form-control input-form " placeholder="Email"
                            value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="lg:col-span-2">
                        <label class="order-label">Country :</label>
                        <select name="country" class="form-control select-form">
                            <option hidden="" value="0" disabled="" selected="">Country</option>
                            @foreach ($countries as $country)
                                <option {{ old('country') == $country->code ? 'selected' : '' }}
                                    value="{{ $country->code }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('country')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="lg:col-span-2">
                        <label class="order-label z-10">Phone :</label>
                        <input type="tel" name="Phone" id="phone"
                            class="form-control overflow-hidden input-form @error('phone') border-red-500 @enderror"
                            placeholder="Phone" value="{{ old('phone') }}"
                            oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off"
                            data-intl-tel-input-id="0">
                        <input type="hidden" name="phone" id="phone2" />
                        @error('phone')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="text-center mt-4">
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

            const minus = $('.page_minus');
            const plus = $('.page_plus');
            const input = $('.page_input');
            const words = $('#word_count');

            minus.click(function(e) {
                e.preventDefault();
                var value = input.val();
                if (value > 1) {
                    value--;
                }
                words.html( value * 250);
                input.val(value);
            });

            plus.click(function(e) {
                e.preventDefault();
                var value = input.val();
                value++;
                words.html( value * 250);
                input.val(value);
            })

            $("#writer-level .btn-group[role='group'] button").on('click', function(){

                $(this).siblings().removeClass('btn-active')
                $(this).addClass('btn-active');
                $('#academic_level_id').val($(this).attr('academic-level'));

            })

            const phoneInputField = document.querySelector("#phone");
            const phoneInput = window.intlTelInput(phoneInputField, {
                preferredCountries: ["ie"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });

            $("#order-form").submit(function() {
                $('#order-form').find(':submit').attr("disabled", true);
                $('#btn-submit').html("Submiting...");
                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                return true;
            });

        const fares = @json($fares);

            $(".get-fare").on( "click", function(e) {
                e.preventDefault();
                getFare();
            });
            $(".get-fare").on( "change", function(e) {
                e.preventDefault();
                getFare();
            });
            function getFare(){
                const academicLevel = $('#academic_level_id').val();

            console.log(academicLevel);

            const deadline = $('#deadline').val();

            console.log(deadline);

            const no_of_pages = $('#no_of_pages').val() == null ? 1 : $('#no_of_pages').val();

            fares.forEach(fare => {
                if (deadline == fare.deadline_id && academicLevel == fare.academic_level_id) {
                    console.log(fare.per_page_price);
                    // $('#cost-per-page').html(fare.per_page_price);
                    $('#cost').html(fare.per_page_price * no_of_pages);
                }
            });
            }
        });
    </script>
@endsection
