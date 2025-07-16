@extends('layouts.app')

@section('content')
<section class="bg-white dark:bg-gray-900 py-20">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center mb-12" data-aos="fade-up">
      <h1 class="text-3xl sm:text-4xl font-bold text-dyenText dark:text-white mb-4">常見問題</h1>
      <p class="text-lg text-gray-600 dark:text-gray-300">如果你對租用流程或空間使用有疑問，歡迎參考下列解答</p>
    </div>

    <div class="space-y-10">
      @php
        $faqs = [
          [ 'q' => '我可以租幾天？有最短租期嗎？', 'a' => '我們提供日租、週租、月租等多種方案，依需求彈性安排，無最低租期限制。' ],
          [ 'q' => '會議室可以單獨租嗎？', 'a' => '可以，依需求提前預定時段即可使用。' ],
          [ 'q' => '公司地址登記合法嗎？', 'a' => '我們提供合法地址與登記文件，可作為公司或工作室的登記地址。' ],
          [ 'q' => '可否事先參觀？', 'a' => '歡迎預約參觀時段，現場可由專人導覽並介紹空間規劃。' ],
          [ 'q' => '空間使用是否有時間限制？', 'a' => '日租與月租方案皆可依照實際需求安排使用時段，我們有彈性工時制度。' ],
          [ 'q' => '我需要自己準備家具與設備嗎？', 'a' => '大部分空間皆附基本桌椅，部分會議室另提供白板、投影機、電源插座等。' ],
          [ 'q' => '可以臨時加人嗎？', 'a' => '共享空間彈性高，可視現場狀況與預約人數調整。建議提前告知以確保座位。' ],
          [ 'q' => '是否提供信件代收？', 'a' => '有，提供收件、通知、代收小包裹等基本服務。' ],
          [ 'q' => '若我有特別需求怎麼辦？', 'a' => '我們團隊可依照需求提供客製化方案，歡迎直接聯繫我們洽談細節。' ],
        ];
      @endphp

      @foreach($faqs as $faq)
      <div data-aos="fade-up" class="border-b pb-6">
        <h3 class="text-lg font-semibold text-dyenText dark:text-white mb-2">Q：{{ $faq['q'] }}</h3>
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">A：{{ $faq['a'] }}</p>
      </div>
      @endforeach
    </div>

    <div class="mt-16 text-center" data-aos="fade-up">
      <p class="text-gray-600 dark:text-gray-400 mb-4">如果你的問題沒被列在上面，歡迎直接與我們聯繫！</p>
      <a href="/contact" class="inline-block bg-dyen hover:bg-dyenSoft text-white font-semibold px-8 py-3 rounded-full shadow transition">
        立即預約參觀
      </a>
    </div>

  </div>
</section>

@endsection
