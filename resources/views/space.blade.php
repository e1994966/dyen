@extends('layouts.app')

@section('content')
<div class="bg-white py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold text-gray-900 text-center mb-10">辦公空間導覽</h1>

    <!-- 分類標籤按鈕 -->
    <div class="flex flex-wrap justify-center gap-4 mb-10">
      <button data-filter="all" class="filter-btn bg-dyen text-white px-4 py-2 rounded-full text-sm">全部</button>
      <button data-filter="shared" class="filter-btn bg-gray-200 hover:bg-dyenSoft hover:text-white px-4 py-2 rounded-full text-sm">共享辦公空間</button>
      <button data-filter="private" class="filter-btn bg-gray-200 hover:bg-dyenSoft hover:text-white px-4 py-2 rounded-full text-sm">獨立辦公空間</button>
      <button data-filter="meeting" class="filter-btn bg-gray-200 hover:bg-dyenSoft hover:text-white px-4 py-2 rounded-full text-sm">會議室</button>
      <button data-filter="event" class="filter-btn bg-gray-200 hover:bg-dyenSoft hover:text-white px-4 py-2 rounded-full text-sm">活動租借</button>
    </div>

    <!-- 空間卡片區塊 -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="gallery">
      @php
        $spaces = [
          [ 'image' => 'space_mockpic01.jpeg', 'title' => '共享辦公空間 A', 'desc' => '彈性租用、適合自由職人', 'tag' => '共享辦公空間', 'type' => 'shared' ],
          [ 'image' => 'space_mockpic02.jpeg', 'title' => '共享辦公空間 B', 'desc' => '開放場域，自由進出', 'tag' => '共享辦公空間', 'type' => 'shared' ],
          [ 'image' => 'space_mockpic03.jpeg', 'title' => '會議空間 A', 'desc' => '適合簡報與接待客戶', 'tag' => '會議室', 'type' => 'meeting' ],
          [ 'image' => 'space_mockpic04.jpeg', 'title' => '獨立辦公室 A', 'desc' => '靜謐環境，專注工作', 'tag' => '獨立辦公空間', 'type' => 'private' ],
          [ 'image' => 'space_mockpic05.jpeg', 'title' => '共享辦公空間 C', 'desc' => '日租空間彈性使用', 'tag' => '共享辦公空間', 'type' => 'shared' ],
          [ 'image' => 'space_mockpic06.jpeg', 'title' => '獨立辦公室 B', 'desc' => '高隱私、低干擾', 'tag' => '獨立辦公空間', 'type' => 'private' ],
          [ 'image' => 'space_mockpic07.jpeg', 'title' => '會議空間 B', 'desc' => '附有投影與影音設備', 'tag' => '會議室', 'type' => 'meeting' ],
          [ 'image' => 'space_mockpic08.jpeg', 'title' => '活動場地 A', 'desc' => '最多容納 30 人，適合沙龍講座', 'tag' => '活動租借', 'type' => 'event' ],
          [ 'image' => 'space_mockpic09.jpeg', 'title' => '共享辦公空間 D', 'desc' => '自然光充足，氣氛舒適', 'tag' => '共享辦公空間', 'type' => 'shared' ],
          [ 'image' => 'space_mockpic10.jpeg', 'title' => '獨立辦公室 C', 'desc' => '可搭配登記地址使用', 'tag' => '獨立辦公空間', 'type' => 'private' ],
          [ 'image' => 'space_mockpic11.jpeg', 'title' => '活動場地 B', 'desc' => '可客製桌椅配置', 'tag' => '活動租借', 'type' => 'event' ],
          [ 'image' => 'space_mockpic12.jpeg', 'title' => '會議空間 C', 'desc' => '支援視訊與多人會議', 'tag' => '會議室', 'type' => 'meeting' ],
          [ 'image' => 'space_mockpic13.jpeg', 'title' => '共享辦公空間 E', 'desc' => '綠意場域、放鬆不壓迫', 'tag' => '共享辦公空間', 'type' => 'shared' ],
          [ 'image' => 'space_mockpic14.jpeg', 'title' => '獨立辦公室 D', 'desc' => '高質感獨立空間', 'tag' => '獨立辦公空間', 'type' => 'private' ],
          [ 'image' => 'space_mockpic15.jpeg', 'title' => '活動場地 C', 'desc' => '品牌展示與快閃活動皆宜', 'tag' => '活動租借', 'type' => 'event' ],
          [ 'image' => 'space_mockpic16.jpeg', 'title' => '會議空間 D', 'desc' => '雙螢幕支援與白板設備', 'tag' => '會議室', 'type' => 'meeting' ],
          [ 'image' => 'space_mockpic17.jpeg', 'title' => '共享辦公空間 F', 'desc' => '開放自由工位', 'tag' => '共享辦公空間', 'type' => 'shared' ],
          [ 'image' => 'space_mockpic18.jpeg', 'title' => '獨立辦公室 E', 'desc' => '可長租、具專屬收發空間', 'tag' => '獨立辦公空間', 'type' => 'private' ],
          [ 'image' => 'space_mockpic19.jpeg', 'title' => '活動場地 D', 'desc' => '專屬品牌聚會的理想場地', 'tag' => '活動租借', 'type' => 'event' ],
          [ 'image' => 'space_mockpic20.jpeg', 'title' => '共享辦公空間 G', 'desc' => '配有共享咖啡吧', 'tag' => '共享辦公空間', 'type' => 'shared' ],
        ];
      @endphp

      @foreach($spaces as $space)
        <div class="relative overflow-hidden rounded-lg shadow group filter-item transition-all duration-300 transform hover:scale-[1.03] hover:shadow-2xl" data-type="{{ $space['type'] }}" data-aos="fade-up">
          <a href="/images/{{ $space['image'] }}" data-fslightbox="gallery">
            <img src="/images/{{ $space['image'] }}" alt="{{ $space['title'] }}" class="w-full h-60 object-cover" loading="lazy">
            <!-- 標籤 -->
            <span class="absolute top-2 left-2 bg-dyen text-white text-xs font-medium px-3 py-1 rounded-full shadow">
              {{ $space['tag'] }}
            </span>
          </a>
          <div class="p-4 text-gray-800">
            <h3 class="text-md font-semibold">{{ $space['title'] }}</h3>
            <p class="text-sm text-gray-600">{{ $space['desc'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>

          <!-- CTA -->
          <div class="text-center p-16" data-aos="fade-up">
    <a href="/contact" class="bg-dyen hover:bg-dyenSoft text-white font-semibold px-6 py-2.5 rounded-full transition inline-block hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-dyenSoft" data-aos="fade-up">
      立即預約參觀
    </a>
  </div>
</div>

<!-- Lightbox 插件 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.3.1/index.min.js"></script>

<!-- 篩選邏輯 -->
<script>
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const type = btn.getAttribute('data-filter');
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('bg-dyen', 'text-white'));
      btn.classList.add('bg-dyen', 'text-white');

      document.querySelectorAll('.filter-item').forEach(item => {
        item.style.display = (type === 'all' || item.dataset.type === type) ? 'block' : 'none';
      });
      AOS.refresh();
    });
  });
</script>
@endsection
