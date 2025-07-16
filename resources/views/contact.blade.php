@extends('layouts.app')

@section('content')
<section class="bg-white dark:bg-gray-900 py-20">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- 標題 -->
    <div class="text-center mb-12" data-aos="fade-up">
      <h1 class="text-3xl sm:text-4xl font-bold text-dyenText dark:text-white mb-4">聯絡我們</h1>
      <p class="text-lg text-gray-600 dark:text-gray-300">預約參觀、洽詢租用或合作，歡迎填寫下列表單與我們聯繫</p>
    </div>

    <!-- 表單 -->
    <form action="#" method="POST" class="space-y-6" data-aos="fade-up">
      @csrf

      <div>
        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">姓名</label>
        <input type="text" name="name" id="name" required
          class="mt-1 block w-full px-4 py-3 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white focus:ring-dyen focus:border-dyen">
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">電子信箱</label>
        <input type="email" name="email" id="email" required
          class="mt-1 block w-full px-4 py-3 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white focus:ring-dyen focus:border-dyen">
      </div>

      <div>
        <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">聯絡電話</label>
        <input type="text" name="phone" id="phone"
          class="mt-1 block w-full px-4 py-3 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white focus:ring-dyen focus:border-dyen">
      </div>

      <div>
        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">留言內容</label>
        <textarea name="message" id="message" rows="5" required
          class="mt-1 block w-full px-4 py-3 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white focus:ring-dyen focus:border-dyen"
          placeholder="請簡單說明您的需求或預約時段，我們將盡快與您聯繫。"></textarea>
      </div>

      <div class="text-center">
        <button type="submit"
          class="bg-dyen hover:bg-dyenSoft text-white font-semibold px-8 py-3 rounded-full shadow transition">
          送出聯絡
        </button>
      </div>
    </form>

    <!-- 預約小提醒 -->
    <div class="mt-12 text-center text-gray-500 dark:text-gray-400 text-sm" data-aos="fade-up">
      來電洽詢：<a href="tel:02-1234-5678" class="text-dyen hover:underline">02-1234-5678</a><br>
      電子信箱：<a href="mailto:service@dyen.tw" class="text-dyen hover:underline">service@dyen.tw</a>
    </div>

  </div>
</section>
@endsection
