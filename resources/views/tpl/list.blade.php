<!doctype html>
<html>
<head>
    @include('tpl.head')
</head>
<body>
@include('tpl.nav')

<section
        class="ezy__travel3 light py-14 md:py-24 bg-white dark:bg-[#2E2F41] text-zinc-900 dark:text-white relative overflow-hidden z-10">
        <div class="container px-4 mx-auto">
            <div class="grid grid-cols-12 justify-center mb-4 md:mb-5">
                <div class="col-span-12 lg:col-span-6 lg:col-start-4 text-center">
                    <h1 class="font-bold leading-none text-3xl md:text-[55px] mb-4">{{__('messages.audio_list_tile')}}</h1>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-4">
            @foreach($audio_list as $index => $item)
                <div class="col-span-12 md:col-span-6 lg:col-span-3 px-1">
                  <a href="{{ localized_url('audio_record') }}?id={{$item['id']}}" target="_blank">
                    <div class="dark:bg-[#404156] shadow-lg border-none rounded-none mt-4">
                        <div class="relative">
                            <img src="{{$item["thumb"]}}" alt="{{$item["title"]}}"
                                class="w-full h-auto" />
                        </div>
                        <div class="p-4">
                            <h2 class="font-medium text-[20px] mb-1 truncate">{{$item["author"]}}</h2>
                            <p class="text-[14px] opacity-50 mb-0 truncate">{{$item["title"]}}</p>
                        </div>
                    </div>
                    </a>
                </div>
              @endforeach
            </div>
            <div class="items-center justify-between mt-6">
                {{ $audio_list->links('pagination::tailwind') }}
            </div>
        </div>
    </section>

@include('tpl.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>