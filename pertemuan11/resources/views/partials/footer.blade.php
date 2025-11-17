  <footer class="bg-gray-900 text-gray-300 py-8">
    <div class="max-w-6xl mx-auto text-center">
      <p>&copy; 2025 <span class="font-semibold text-white">Bengkel Mobil Tri Dharma Motor</span> — Servis Mobil Terpercaya</p>
    </div>
  </footer>

  <script>
    $(document).ready(function(){
      $("body").hide().fadeIn(800);

      $(".bg-white").hover(
        function(){ $(this).find("i").animate({fontSize: "45px"}, 200); },
        function(){ $(this).find("i").animate({fontSize: "40px"}, 200); }
      );
    });
  </script>
</body>
</html>
