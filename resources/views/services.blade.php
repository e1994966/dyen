@extends('layouts.app')

@section('content')

<!-- SERVICE SECTION -->
<section class=" py-6 sm:py-28 overflow-hidden">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-6">
    <div class="text-center mb-12" data-aos="fade-up">
      <p class="text-dyen font-semibold uppercase text-sm mb-2">我們的服務</p>
      <h2 class="text-3xl sm:text-4xl font-bold text-dyenText dark:text-white mb-4">專業、靈活、全方位空間解決方案</h2>
      <p class="text-dyenText/80 dark:text-gray-300 max-w-2xl mx-auto mb-6">
        無論您是自由工作者、創業團隊，或需要登記公司地址，我們都能協助您快速建立事業據點。
      </p>
    </div>
    @foreach ([
      [
        'title' => '多元辦公空間',
        'desc' => '多種工作場域，滿足不同團隊與個人的專業需求。',
        'points' => ['獨立辦公室：適合企業長期進駐，打造安靜高效環境','共享工位區：自由進出、彈性租期，專為自由職人設計','多功能會議室：支援簡報、訪客接待與影音設備'],
        'image' => 'images/mockpic09.jpg',
        'reverse' => false,
        'price' => '租金 NT$2,500起'
      ],[
        'title' => '活動空間租借',
        'desc' => '適合舉辦各類講座、聚會與品牌展示，滿足彈性互動需求。',
        'points' => ['明亮場地可容納 10-30 人，靈活佈置','投影音響一應俱全，支援現場錄影與簡報','可選半日或整日包場，自由彈性不受限'],
        'image' => 'images/mockpic04.jpg',
        'reverse' => true,
        'price' => '租金 NT$2,000起'
      ],[
        'title' => '公司地址登記',
        'desc' => '合法登記、專業門面，打造品牌信任的第一步。',
        'points' => ['提供登記證明，適用新創登記與工商設立','代收信件包裹並提供通知與轉寄服務','可搭配會議室或空間使用，提升企業形象'],
        'image' => 'images/mockpic06.jpg',
        'reverse' => false,
        'price' => '租金 NT$1,500起'
      ]
    ] as $service)
    <div class="grid md:grid-cols-2 gap-8 items-center mb-20">
      @if($service['reverse'])
        <div data-aos="fade-left" class="md:order-2">
          <h3 class="text-2xl sm:text-3xl font-bold text-dyenText dark:text-white mb-4">{{ $service['title'] }}</h3>
          <p class="text-dyenText/80 dark:text-gray-300 mb-6">{{ $service['desc'] }}</p>
          <ul class="space-y-3 text-dyenText dark:text-gray-300">
            @foreach ($service['points'] as $point)
            <li class="flex items-start"><span class="text-dyen mr-2 mt-1">•</span> {{ $point }}</li>
            @endforeach
          </ul>
          <p class="flex items-start"><span class="text-dyen mt-6">{{ $service['price'] }}</p>
        </div>
        <div data-aos="fade-right" class="md:order-1">
          <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="rounded-lg shadow-lg w-full max-w-full h-auto object-cover" />
        </div>
      @else
        <div data-aos="fade-right">
          <h3 class="text-2xl sm:text-3xl font-bold text-dyenText dark:text-white mb-4">{{ $service['title'] }}</h3>
          <p class="text-dyenText/80 dark:text-gray-300 mb-6">{{ $service['desc'] }}</p>
          <ul class="space-y-3 text-dyenText dark:text-gray-300">
            @foreach ($service['points'] as $point)
            <li class="flex items-start"><span class="text-dyen mr-2 mt-1">•</span> {{ $point }}</li>
            @endforeach
          </ul>
          <p class="flex items-start"><span class="text-dyen mt-6">{{ $service['price'] }}</p>
        </div>
        <div data-aos="fade-left">
          <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="rounded-lg shadow-lg w-full max-w-full h-auto object-cover" />
        </div>
      @endif
    </div>
    @endforeach
    <div class="text-center mt-16">
      <a href="/space" class="bg-dyen hover:bg-dyenSoft text-white font-semibold px-6 py-2.5 rounded-full transition inline-block hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-dyenSoft w-full sm:w-auto">
        查看空間環境
      </a>
    </div>
  </div>
</section>

<!-- FLOW SECTION -->
<section class=" py-6 overflow-hidden">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-6">
    <div class="text-center mb-16">
      <p class="text-dyen font-semibold uppercase text-sm mb-2">便捷的流程</p>
      <h2 class="text-3xl sm:text-4xl font-bold text-dyenText dark:text-white mb-4">簡單步驟，快速啟動你的企業</h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 text-center">
      @foreach ([
        ['預約諮詢','聯繫我們，說明您的需求，我們將安排專人為您服務。'],
        ['參觀解說','親臨現場了解空間配置、設備與使用方式，實際感受工作氛圍。'],
        ['簽約','確認方案與租期後簽訂合約，我們將協助準備所需資料。'],
        ['啟動企業','立即開始使用岱恩空間，打造專業形象，邁向理想藍圖。']
      ] as $i => [$title, $desc])
      <div class="transition hover:scale-105 duration-200 overflow-hidden">
        <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-dyen text-white text-xl font-bold shadow-lg">{{ $i + 1 }}</div>
        <h3 class="text-xl font-semibold text-dyenText dark:text-white">{{ $title }}</h3>
        <p class="text-dyenText/80 dark:text-gray-300 text-sm ">{{ $desc }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- TESTIMONIAL SECTION -->
<section class=" py-6 sm:py-28 overflow-hidden">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-6 text-center">
    <p class="text-dyen font-semibold uppercase text-sm mb-2">使用者回饋</p>
    <h2 class="text-3xl sm:text-4xl font-bold text-dyenText dark:text-white mb-12">來自租戶的真實推薦</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
      @foreach ([
        ['images/avatar01.jpg','「岱恩的空間讓創業過程順利許多，不只環境舒服，客戶來訪時也讓我們更有信心。」','小宇｜品牌創辦人'],
        ['images/avatar02.jpg','「每次使用會議室都很安心，設備齊全、櫃檯人員也很親切，CP值超高。」','怡萱｜行銷顧問'],
        ['images/avatar03.jpg','「身為自由接案者，最需要的就是這樣彈性又不失專業的空間。」','阿傑｜自由設計師']
      ] as [$img, $quote, $name])
      <div class="bg-dyenBg dark:bg-gray-800 p-6 rounded-xl shadow-lg" data-aos="flip-up">
        <img src="{{ $img }}" alt="avatar" class="mx-auto mb-4 rounded-full w-20 h-20 object-cover shadow-md" />
        <p class="text-dyenText/90 dark:text-gray-300 mb-4">{{ $quote }}</p>
        <p class="text-dyen font-semibold">{{ $name }}</p>
      </div>
      @endforeach
    </div>
  </div>

  <div class="my-16 text-center" data-aos="fade-up">
      <a href="/contact" class="inline-block bg-dyen hover:bg-dyenSoft text-white font-semibold px-8 py-3 rounded-full shadow transition">
        立即預約參觀
      </a>
    </div>
</section>




@endsection