<!-- resources/views/about-us.blade.php -->

@extends('layouts.app')

@section('content')

<section class="bg-white dark:bg-gray-900 py-20">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center mb-16" data-aos="fade-up">
      <h1 class="text-4xl sm:text-5xl font-bold text-dyenText dark:text-white mb-4">關於岱恩</h1>
      <p class="text-dyenText/80 dark:text-gray-300 max-w-2xl mx-auto text-lg">
        在創業路上，讓專業成為你的後盾
      </p>
    </div>

    <div class="text-dyenText dark:text-gray-300 text-lg leading-relaxed max-w-4xl mx-auto">

      <!-- 段落一：品牌理念 -->
      <div class="mb-20 space-y-4" data-aos="fade-up">
        <p>
          在這個快速變動的時代，創業者不再只是找一張辦公桌，而是尋找一個能夠理解夢想、支持成長的所在，岱恩商務中心誕生於這樣的想法。
        </p>
        <p>
          我們相信，<strong>每一個專業都值得被看見。每一個品牌都應該有體面的開始。</strong>
        </p>
        <p>
          從共享工位、獨立辦公室、會議場地，到公司登記與信件代收，岱恩提供的不僅是空間，而是一種「進駐就緒」的專業氛圍，讓你能專注於真正重要的事。
        </p>
      </div>

      <!-- 段落二：理念 -->
      <div class="mb-20" data-aos="fade-up">
        <h2 class="text-2xl font-bold text-dyen dark:text-white mb-6">我們的理念</h2>
        <ul class="list-disc list-inside space-y-3">
          <li><strong>彈性：</strong> 無論你是日租、月租還是短期需求，我們都能為你量身提供空間方案。</li>
          <li><strong>專業：</strong> 我們深知第一印象的重要，從場域設計到行政支援，致力營造值得信賴的形象。</li>
          <li><strong>支援：</strong> 進駐後，不只是租空間，我們是你事業拓展的默默夥伴。</li>
        </ul>
      </div>

      <!-- 段落三：適用對象 -->
        <div class="mb-20" data-aos="fade-up">
            <h2 class="text-2xl font-bold text-dyen dark:text-white mb-6">我們服務的對象</h2>

        

            <div class="grid md:grid-cols-2 gap-12 items-center mb-12" data-aos="fade-up">
                <img src="/images/startup-team.jpeg" alt="新創團隊" class="w-full h-40 object-cover rounded-lg shadow-lg">
                <div>
                    <h3 class="text-xl font-bold text-dyenSoft mb-4">新創團隊</h3>
                    <p class="text-dyenText/80">打造品牌形象的第一站，想以低門檻建立公司形象。</p>
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center mb-12 md:flex-row-reverse" data-aos="fade-up">
                <img src="/images/freelancer.jpeg" alt="新創團隊" class="w-full h-40 object-cover rounded-lg shadow-lg">
                <div>
                    <h3 class="text-xl font-bold text-dyenSoft mb-4">自由接案者</h3>
                    <p class="text-dyenText/80">彈性工位與會議空間，自由出入專業不減分。</p>
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center mb-12 md:flex-row-reverse" data-aos="fade-up">
                <img src="/images/SME.jpeg" alt="新創團隊" class="w-full h-40 object-cover rounded-lg shadow-lg">
                <div>
                    <h3 class="text-xl font-bold text-dyenSoft mb-4">中小企業</h3>
                    <p class="text-dyenText/80">需要穩定、安靜、能接待客戶的環境。</p>
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center mb-12 md:flex-row-reverse" data-aos="fade-up">
                <img src="/images/events.jpeg" alt="新創團隊" class="w-full h-40 object-cover rounded-lg shadow-lg">
                <div>
                    <h3 class="text-xl font-bold text-dyenSoft mb-4">活動舉辦</h3>
                    <p class="text-dyenText/80">籌備課程、講座或內部活動，尋找高質感空間的你。</p>
                </div>
            </div>
        </div>
       
      <!-- 段落四：結語 CTA -->
      <div class="text-center" data-aos="fade-up">
        <p class="text-xl font-semibold text-dyen dark:text-white mb-6">岱恩不只是空間，更是陪你一起長大的夥伴</p>
        <a href="/contact" class="bg-dyen hover:bg-dyenSoft text-white font-semibold px-6 py-2.5 rounded-full transition inline-block hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-dyenSoft" data-aos="fade-up">
          立即預約參觀
        </a>
      </div>

    </div>
  </div>
</section>



<!-- 回到頂部按鈕 -->
<button id="backToTop"
  class="w-12 h-12 fixed bottom-6 right-6 bg-dyen text-white text-lg rounded-full shadow-lg transition-opacity duration-300 opacity-0 pointer-events-none z-50 hover:bg-dyenSoft transform ease-out">
  ↑
</button>

@endsection