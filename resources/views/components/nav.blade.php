<!-- 導覽列 -->
<nav class="bg-white border-b border-gray-200 dark:bg-gray-900 relative z-50">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
    <!-- Logo -->
    <a href="/" class="flex items-center space-x-2">
      <img src="/images/岱恩_LOGO.jpg" class="h-8 sm:h-10" alt="Logo">
    </a>

    <!-- 導覽連結 -->
    <div class="hidden md:flex space-x-8 text-dyenText dark:text-gray-200 font-medium">
      <a href="/about-us" class="hover:text-dyenSoft transition">關於岱恩</a>
      <a href="/services" class="hover:text-dyenSoft transition">服務項目</a>
      <a href="/space" class="hover:text-dyenSoft transition">空間環境</a>
      <a href="/FAQ" class="hover:text-dyenSoft transition">常見問題</a>
    </div>

    <!-- CTA 按鈕 -->
    <div class="hidden md:block">
      <a href="/contact" class="bg-dyen hover:bg-dyenSoft text-white font-semibold px-6 py-2.5 rounded-full transition inline-block hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-dyenSoft">
        立即預約參觀
      </a>
    </div>

    <!-- 手機版選單按鈕 -->
    <button id="mobile-menu-button" class="md:hidden text-dyenText dark:text-gray-300 focus:outline-none z-50 relative" aria-label="Toggle menu">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
  </div>

  <!-- 手機版選單 -->
  <div id="mobile-menu" class="absolute top-full left-0 w-full bg-white bg-opacity-80 dark:bg-gray-900 text-dyenText dark:text-white px-4 max-h-0 overflow-hidden transition-all duration-300 md:hidden shadow z-40">
    <div class="flex flex-col space-y-4 py-4">
      <a href="/about-us" class="hover:text-dyenSoft text-base">關於岱恩</a>
      <a href="/services" class="hover:text-dyenSoft text-base">服務項目</a>
      <a href="/space" class="hover:text-dyenSoft text-base">空間環境</a>
      <a href="/FAQ" class="hover:text-dyenSoft text-base">常見問題</a>
    </div>
  </div>
</nav>

