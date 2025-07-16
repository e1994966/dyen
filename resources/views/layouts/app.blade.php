<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="岱恩商務中心：提供虛擬辦公室、實體空間與登記地址服務的優質選擇。">
  <title>岱恩商務中心</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 overflow-x-hidden">
  <!-- 導覽列 -->
  @include('components.nav')

  <!-- 主要內容區 -->
  <main>
    @yield('content')
  </main>

  <!-- 頁尾 -->
  @include('components.footer')
  <!-- Scripts -->
    <!-- 回到頂部按鈕 -->
  <button id="backToTop" class="w-12 h-12 fixed bottom-6 right-4 sm:right-6 bg-dyen text-white text-lg rounded-full shadow-lg transition-opacity duration-300 opacity-0 pointer-events-none z-50 hover:bg-dyenSoft transform ease-out">
    ↑
  </button>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 600,   // 動畫時間（毫秒）
    easing:"linear"
  });
</script>
</html>
