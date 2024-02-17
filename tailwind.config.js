/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'background': '#F4F4F0',
        'btn-simpan': '#EE8DB9',
        'btn-cari': '#FFC225',
        'btn-edit': '#8DEEA2',
        'btn-hapus': '#FF9C96',
        'title': '#454040',
        'seccondary': '#0E0C0C',
        'paragraf': '#252525',
      },
      fontFamily: {
        'inter': 'Inter',
        'quicksand': 'Quicksand',
      },
      boxShadow: {
        'input': '2px 2px 0px 0px #000',
        'btn-simpan': '5px 5px 0px 0px #393131',
        'todo': ' 8px 8px 0px 0px #8E73C9',
      }
    },
  },
  plugins: [],
}

