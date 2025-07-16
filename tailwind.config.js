/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './node_modules/flowbite/**/*.js', // ← 加這一行
  ],
  theme: {
    extend: {
      colors: {
        dyen: '#9F0F0F',          // 主色（深紅）
        dyenSoft: '#C85D5D',      // hover 狀態用
        dyenBg: '#F1ECE8',        // 區塊背景用
        dyenText: '#4B4B4B',      // 主要文字色（灰黑）
        dyenLight: '#E8F0F2'      // 清爽灰藍背景
      }
    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

