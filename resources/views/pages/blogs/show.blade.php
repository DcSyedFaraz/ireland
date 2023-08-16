@extends('layouts.web')

@section('title', $blog->title ?? "-")
@section('description', $blog->meta_description  ?? "")
@section('canonical', $blog->canonical  ?? "")

@section('content')





<style>


 h3 {
    font-size: 2.0rem !important;
    line-height: 2.5rem;
}


                    .blog-desc a:link  {
                      color: blue;
                      background-color: transparent;
                      text-decoration: none;
                    }

                    .blog-desc a:visited {
                      color: blue;
                      background-color: transparent;
                      text-decoration: none;
                    }

                    .blog-desc a:hover {
                      color: red;
                      background-color: transparent;
                      text-decoration: underline;
                    }

                    .blog-desc a:active {
                      color: yellow;
                      background-color: transparent;
                      text-decoration: underline;
                    }





</style>
    @if (!empty($blog))
         <div class="bg-primary-one shadow shadow-gray-400 shadow-lg w-full">
            <div class="container mx-auto mb-5 p-4 lg:p-6 ">
                <div>
                    <h4 class="text-white text-xl md:text-3xl text-center md:text-left ">
                    {{ $blog->title }}</h4>
                </div>
            </div>
        </div>

        <img src="{{ url('storage/app/public/'.$blog->image_path) }}" alt="{{ $blog->title }}" class="my-10 mx-auto border-8 border-gray-100 hover:opacity-70 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-10 cursor-pointer max-h-[30rem]">

        <main class="container mx-auto px-4 md:px-14 my-10 md:min-h-[15rem]">
            <section class="page-section md:px-4 lg:px-8 blog-desc">

                {!! $blog->description !!}
            </section>
        </main>
    @endif
@endsection
