<!doctype html>
<html>
<head>
    @include('tpl.head')
</head>
<body>
@include('tpl.nav')

<section class="ezy__portfolio16 light  bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white">
  <div class="container px-4 mx-auto">
    <div class="flex flex-col gap-6 max-w-7xl mt-12 mx-auto">
      <!-- card item -->
      <div class="grid grid-cols-12 bg-blue-100 bg-opacity-30 rounded-xl p-6 md:p-12">
        <div class="col-span-12 lg:col-span-5">
          <div class="bg-blue-100 bg-opacity-75 flex justify-center items-center p-6 rounded-xl">
            <img
              src="{{$audio["thumb"]}}"
              alt="{{$audio["title"]}}"
              class="max-w-full w-full h-auto"
            />
          </div>
        </div>
        <div class="col-span-12 lg:col-span-7">
          <div class="mt-6 lg:mt-0 lg:px-12 text-center lg:text-start h-full flex flex-col justify-center">
            <h5 class="text-3xl md:text-[44px] leading-tight font-bold mb-4">
            {{$audio["title"]}}
            </h5>
            <p class="leading-loose opacity-80 mb-6 lg:pr-12">
            {{$audio["author"]}}
            </p>
            <!-- 音乐播放器 -->
            <div class="mb-4">
                <audio controls class="w-full">
                    <source src="{{$audio['audio_url']}}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
            <div>
               <!-- 下载按钮 -->
                <button id="download" data-url="{{$audio['audio_url']}}" class="font-bold bg-blue-600 text-white px-8 py-3 hover:bg-opacity-90 duration-300 rounded inline-flex">
                {{__('messages.download')}}
                </button>
                <!-- 直接链接按钮 -->
                <a id="direct_link" target="_blank" href="{{$audio['audio_url']}}" class="font-bold bg-green-500 text-white px-8 py-3 hover:bg-opacity-90 duration-300 rounded inline-flex">
                {{__('messages.direct_link')}}
                </a>
                <!-- 源视频按钮 -->
                <a id="source_video" target="_blank" href="{{$audio['url']}}" class="font-bold bg-red-500 text-white px-8 py-3 hover:bg-opacity-90 duration-300 rounded inline-flex">
                {{__('messages.source_video')}}
                </a>
            </div>
          </div>
        </div>
        </div>
    </div>
  </div>
</section>
@include('tpl.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/audio_record.js') }}?v=1"></script>
</body>
</html>