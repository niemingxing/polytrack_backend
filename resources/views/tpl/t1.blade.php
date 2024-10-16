<!doctype html>
<html>
<head>
    @include('tpl.head')
</head>
<body>
@include('tpl.nav')

<section
  class="ezy__header29 light py-10 md:py-16 text-white bg-cover bg-center bg-no-repeat relative"
  style="background-image: url(https://cdn.easyfrontend.com/pictures/hero/hero_30.png)"
>
  <div class="container px-4 mx-auto">
    <div class="md:max-w-5xl mx-auto flex justify-center items-center text-center">
    <div class="w-full">
        <iframe src="https://thepizzaedition.github.io/assets/allgames/polytrack41/index.html" 
                class="w-full border border-gray-300 rounded" 
                style="height: 600px;"
                frameborder="0" 
                allowfullscreen>
        </iframe>
    </div>
    </div>
  </div>
</section>

<section id="how-it-works" class="ezy__featured14 light py-14 md:py-14 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white">
  <div class="container px-16 md:px-8 lg:px-28">
    <div class="grid grid-cols-12 justify-center md:mb-6">
      <div class="col-span-12 lg:col-span-8 lg:col-start-3 xl:px-12 text-center">
        <h2 class="font-bold text-[25px] md:text-[45px] leading-none mb-4">{{__('messages.how_it_works_list.title')}}</h2>
        <p class="">
        {{__('messages.how_it_works_list.desc')}}
        </p>
      </div>
    </div>

    <div class="grid grid-cols-12">
      @foreach(__('messages.how_it_works_list.list') as $index => $item)
      <div class="col-span-12 md:col-span-6 lg:col-span-4 mt-6">
        <div class="ezy__featured14-item flex">
          <div
            class="w-12 h-12 min-h-[50px] min-w-[50px] bg-white dark:bg-[#1E2735] text-blue-600 rounded-full text-[28px] inline-flex justify-center items-center shadow-xl mb-6"
          >
            {{$index + 1}}
          </div>
          <div class="ml-4">
            <h3 class="text-2xl font-bold mb-4">{{$item['title']}}</h3>
            <p class="opacity-60">
            {{$item['desc']}}
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section id="faq" class="ezy__faq5 light py-14 md:py-14 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white">
  <div class="container px-16 md:px-8 lg:px-28">
    <div class="grid grid-cols-12 justify-center md:mb-6">
      <div class="col-span-12 lg:col-span-8 lg:col-start-3 xl:px-12 text-center">
        <h2 class="font-bold text-[25px] md:text-[45px] leading-none mb-4">{{__('messages.faq_list.title')}}</h2>
        <p class="">
        {{__('messages.faq_list.desc')}}
        </p>
      </div>
    </div>

    <div class="grid grid-cols-12 gap-0 md:gap-6">
      <div class="col-span-12 md:col-span-12">
        @foreach(__('messages.faq_list.list') as $index => $item)
        <div class="bg-gray-100 dark:bg-[#1E2735] mt-6 rounded-xl">
          <h3 class="p-4 lg:p-6 lg:pb-5 w-full text-start flex justify-between items-center font-medium text-xl">
            <span>{{$item['q']}}</span>
          </h3>
          <div class="ezy__faq5-content px-4 lg:px-6 lg:pb-6">
            <p class="opacity-50 mb-0">
            {{$item['a']}}
            </p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
@include('tpl.footer')
</body>
</html>