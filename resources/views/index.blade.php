@extends('layouts.default')

@section('page-banner')
<section class="free-post">
<div class="relative z-10 mx-auto max-full bg-blue-50 h-[400px]">
    <img class="z-0 flex mx-auto w-auto h-auto items-center mb-2" src="bannerV1.png"alt="Banner" />
    <img class="flex mx-auto max-w-sm items-center -mt-80" src="logo.jpg" alt="Logo" />
  </div>
</section>  
@endsection

@section('page-content')
    <section class="free-post">
        <div class="relative z-20 mx-auto max-w-5xl items-center p-2 mb-4 -mt-20 text-base text-blue-800 rounded-lg bg-blue-50 border border-blue-700" role="alert">
            <span class="font-medium">Wifi Internet</span> 
            Poskytujeme připojení k wifi internetu v Chodově, Osadě, Chranišově a Vintířově.
          </div>
          <div class="max-w-6xl mx-auto mt-16 mb-8">
            <div class="py-2 px-2 mx-auto max-w-6xl">
              <div class="mx-auto max-w-screen-sm text-center lg:mb-4 mb-4">
                <h2 class="font-sans mb-2 text-3xl lg:text-3xl tracking-tight font-light shadow-lg text-blue-950">KOVIM - ELEKTRO A INTERNETOVÉ SLUŽBY</h2>

              </div>
            </div>
        </div>
    </section>
@endsection

@section('page-main-products')

    <section class="free-post">
      <div class="mx-auto items-center grid mb-2 max-w-6xl md:mb-8 md:grid-cols-4 md:gap-3">
      @foreach($products as $prod)
                  <div key={{ $prod->id }}>
                    <a href="">
                    <figure class="flex h-48 flex-col items-center justify-center rounded-md text-center shadow-md bg-zinc-300 border border-gray-300">
                      <a href="">
                        <div class="h-6">
                        <h3 class="text-lg font-semibold text-blue-950">{{ $prod->name }}</h3>                       
                        </div>
                        <div class="relative mx-auto items-center mt-2"><center>{!! $prod->icon !!}</center></div>     
                    </figure>
                  </a>
                  </div>    
          @endforeach
        </div>
        <div class="mx-auto max-w-6xl">
          <div class="mx-auto max-w-6xl items-center">
            <button onclick="window.location='{{ url("poptavka") }}'" class="text-center items-center mx-auto text-sm font-semibold p-4 shadow-md rounded-md text-white bg-blue-950 border border-blue-950">Odeslat poptávku</button>
          </div>
        </div>
              
    </section>
@endsection

@section('page-owner')
    <section class="free-post">
        <figure class="max-w-6xl mx-auto text-center py-8">
            <svg class="w-6 h-6 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
              <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
            </svg>
            <blockquote>
              <p class="text-xl italic font-medium text-blue-950">
                "Oslovte nás Vaši poptávkou, budete mile překvapeni naší nabídkou!"</p>
            </blockquote>
            <figcaption class="flex items-center justify-center mt-6 mb-6 space-x-3 rtl:space-x-reverse">
              <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture" />
              <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                <cite class="pe-3 font-medium text-gray-900 dark:text-white">Miroslav Kovačik</cite>
                <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">Jednatel</cite>
              </div>
            </figcaption>
          </figure>
    </section>
@endsection

@section('page-gallery')
    <section class="free-post">
<div class="max-w-6xl mx-auto text-center mb-8 grid grid-cols-2 md:grid-cols-3 gap-4">
  <div>
      <img class="h-auto max-w-full rounded-lg" src="01.png" alt="">
  </div>
  <div>
      <img class="h-auto max-w-full rounded-lg" src="02.png" alt="">
  </div>
  <div>
      <img class="h-auto max-w-full rounded-lg" src="03.png" alt="">
  </div>
  <div>
    <img class="h-auto max-w-full rounded-lg" src="01.png" alt="">
</div>
<div>
    <img class="h-auto max-w-full rounded-lg" src="02.png" alt="">
</div>
<div>
    <img class="h-auto max-w-full rounded-lg" src="03.png" alt="">
</div>
  
</div>
</section>
@endsection

@section('page-benefits')
    <section class="free-post">
            <div class="mx-auto max-w-6xl">
  
              <div class="grid gap-3 lg:grid-cols-2">
                @foreach($advantages as $adv)
                 <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700" key={keyF.id}>
                  <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="bg-primary-100 text-primary-800 text-sm font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                      {!! $adv->icon !!}
                      &nbsp;
                        {{ strtoupper($adv->title) }}
                    </span>
                    <span class="text-sm">{{ strtoupper($adv->motto) }}</span>
                  </div>
                  <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">{{ $adv->name }}</a></h2>
                  <p class="mb-5 font-normal text-pink-950">{!! $adv->body !!}</p>
                  <div class="flex justify-between items-center">
                  </div>
                </article>
                @endforeach
                </div>
            </div>
    </section>
@endsection


