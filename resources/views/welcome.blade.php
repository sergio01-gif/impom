<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>IMPOM</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap" rel="stylesheet">
  <style> body { font-family: 'Nunito', sans-serif; } </style>
</head>

<body class="bg-gray-50 text-gray-800">

  <!-- Hero -->
  <header class="bg-white shadow-md py-6 px-4 text-center">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between">
      <div class="flex items-center space-x-4">
        <img src="{{asset('favicon_io/android-chrome-192x192.png')}}" class="w-12 h-12" alt="Logo">
        <h1 class="text-3xl font-bold text-[#0072CE]">INSTITUTO MÉDIO POLITÉCNICO MACEQUECE</h1>
      </div>
      <nav class="mt-4 md:mt-0 space-x-4">
        <a href="#depoimentos" class="text-[#0072CE] hover:text-[#F9B000]">Depoimentos</a>
        <a href="#contato" class="text-[#0072CE] hover:text-[#F9B000]">Contato</a>
        @auth
          <a href="{{ url('/home') }}" class="text-[#F9B000] font-semibold">Home</a>
        @else
          <a href="{{ route('login') }}" class="bg-[#0072CE] text-white px-4 py-1 rounded hover:bg-[#005a9c]">Login</a>
        @endauth
      </nav>
    </div>
  </header>

  <!-- Slideshow -->
  <section class="relative max-w-5xl mx-auto mt-10">
    <div class="overflow-hidden rounded-lg shadow-lg">
      <div class="relative" id="carousel">
        <div class="carousel-slide">
          <img src="https://source.unsplash.com/featured/?technology" class="w-full h-80 object-cover" />
        </div>
        <div class="carousel-slide hidden">
          <img src="https://source.unsplash.com/featured/?office" class="w-full h-80 object-cover" />
        </div>
        <div class="carousel-slide hidden">
          <img src="https://source.unsplash.com/featured/?teamwork" class="w-full h-80 object-cover" />
        </div>
      </div>
    </div>
  </section>

  <!-- Depoimentos -->
  <section id="depoimentos" class="mt-16 bg-white py-10">
    <div class="max-w-4xl mx-auto px-4">
      <h2 class="text-2xl font-bold text-center text-[#0072CE] mb-8">O que dizem nossos clientes</h2>
      <div class="grid md:grid-cols-3 gap-6 text-sm text-gray-600">
        <div class="bg-gray-100 p-4 rounded shadow">
          <p>“Serviço excelente! Fiquei impressionado com a rapidez e qualidade.”</p>
          <p class="text-right mt-2 text-[#0072CE] font-semibold">— Ana Paula</p>
        </div>
        <div class="bg-gray-100 p-4 rounded shadow">
          <p>“Profissionalismo do início ao fim. Recomendo fortemente!”</p>
          <p class="text-right mt-2 text-[#0072CE] font-semibold">— Marcos Silva</p>
        </div>
        <div class="bg-gray-100 p-4 rounded shadow">
          <p>“Atendimento personalizado e suporte incrível. Nota 10!”</p>
          <p class="text-right mt-2 text-[#0072CE] font-semibold">— Luciana Costa</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contato -->
  <section id="contato" class="mt-16 bg-gray-100 py-10">
    <div class="max-w-4xl mx-auto px-4">
      <h2 class="text-2xl font-bold text-center text-[#0072CE] mb-8">Fale conosco</h2>
      <form action="#" method="POST" class="grid gap-4">
        <input type="text" placeholder="Seu nome" class="border border-gray-300 p-2 rounded w-full" required />
        <input type="email" placeholder="Seu e-mail" class="border border-gray-300 p-2 rounded w-full" required />
        <textarea placeholder="Sua mensagem" rows="4" class="border border-gray-300 p-2 rounded w-full" required></textarea>
        <button type="submit" class="bg-[#F9B000] text-white px-6 py-2 rounded hover:bg-yellow-500 w-fit">Enviar</button>
      </form>
    </div>
  </section>

  <!-- Rodapé -->
  <footer class="bg-white mt-16 py-6 text-center text-sm text-[#0072CE] border-t">
    © {{ date('Y') }} IMPOM - Instituto Médio Politécnico Macequece. Todos os direitos reservados.
  </footer>

  <!-- JS simples para slideshow -->
  <script>
    const slides = document.querySelectorAll(".carousel-slide");
    let index = 0;

    setInterval(() => {
      slides[index].classList.add("hidden");
      index = (index + 1) % slides.length;
      slides[index].classList.remove("hidden");
    }, 4000);
  </script>

</body>
</html>
