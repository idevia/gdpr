   <footer id="footer" class="f-section">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">

                        <h5 class="font-weight-bold">Azienda</h5>
                            <ul class="p-0 text1">
                                <li><a class="" href="#section2">Chi siamo </a></li>
                                <li><a class="" href="#section3">Come funziona </a></li>
                                <li><a class="" href="#section4">Tariffe </a></li>
                                <li><a class="" href="./terms.html">Termini e condizioni </a></li>
                                <li><a class="" href="./faq.html">FAQ </a></li>
                                <li><a class="" href="#contact">Contatti </a></li>

                            </ul>

                    </div>
                    <div class="col-md-4 ">

                        <h5 class="font-weight-bold">Indirizzo</h5>
                            <ul class="p-0">
                                <li>Vacaplus di Lucky R.E. srl,</li>
                                <li>Via G. Zanardelli 5, 00186,</li>
                                <li>Roma,</li>
                                <li> P.IVA IT09722831006.</li>
                            </ul>

                    </div>
                    <div class="col-md-4">
                        <div class="img-top">
                            <img class="img-top" src="./img/logo-dark.png" alt="">
                            <br>
                            <p class="mt-3 text-gray">Copyright @2007-2018 VacaPlus.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script>
        $('.more').on('click', function(e) {
            e.preventDefault();
            $('.expandable').css('display', 'block');
            $('.less').css('display', 'block');
            $(this).css('display', 'none');
        });
        $('.less').on('click', function(e) {
            e.preventDefault();
            $('.expandable').css('display', 'none');
            $('.less').css('display', 'none');
            $('.more').css('display', 'block');
        });
        <?php if ($page === ''): ?>
            $("#topNav a").on('click', function (event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {
                        window.location.hash = hash;
                    });
                }
            });
        <?php endif; ?>
    </script>
</body>

</html>