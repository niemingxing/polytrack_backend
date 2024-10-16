<section class="ezy__copyright6 light bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white">
  <div class="text-center lg:text-start py-12">
    <div class="container px-16 md:px-8 lg:px-28">
      <div class="grid grid-cols-12 justify-between items-center">
        <div class="col-span-12 lg:col-span-4">
          <p class="mb-2 lg:mb-0">{{__('messages.copyright')}}</p>
        </div>
        <div class="col-span-12 lg:col-span-4">
          <ul class="flex justify-center">
            <li class="my-2 mx-4">
              <a class="hover:opacity-80" href="{{ localized_url('') }}">{{__('messages.home')}}</a>
            </li>
            <li class="my-2 mx-4">
              <a class="hover:opacity-80" href="{{ localized_url('') }}#how-it-works">{{__('messages.how_it_works')}}</a>
            </li>
            <li class="my-2 mx-4">
              <a class="hover:opacity-80" href="{{ localized_url('') }}#faq">{{__('messages.faq')}}</a>
            </li>
          </ul>
        </div>
        <div class="col-span-12 lg:col-span-4 flex justify-center lg:justify-end">
        <div class="sharethis-inline-share-buttons"></div>
        </div>
      </div>
    </div>
  </div>
</section>


<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            container: {
                center: true,
            }
        }
    }
</script>