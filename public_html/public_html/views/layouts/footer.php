    <div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-about wow fadeInUp">
                    <h3>О нас</h3>
                    <p>
                        ООО "Полимакс" - молодая компания, которая предоставляет лучшие услуги по про продаже книжной продукции
                    </p>
                    <p>&copy; ООО "Полимакс".</p>
                </div>
                <div class="col-md-4 offset-md-1 footer-contact wow fadeInDown">
                    <h3>Контактная информация</h3>
                    <p><i class="fa fa-map-marker-alt"></i> Ул.Кирова 33 , Комсомольск-на-Амуре Россия</p>
                    <p><i class="fa fa-phone"></i> Phone: 8 800 555 3535</p>
                    <p><i class="fa fa-envelope"></i> Email: <a href="mailto:hello@domain.com">polimax@gmail.com</a></p>
                    <p><i class="fa fa-skype"></i> Skype: polimax27</p>
                </div>
                <div class="col-md-4 footer-links wow fadeInUp">
                    <div class="row">
                        <div class="col">
                            <h3>Ссылки</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p><a class="scroll-link" href="/">Главная</a></p>
                            <p><a href="/about/">Как это работает?</a></p>
                            <p><a href="/contacts/">Свяжитесь с нами</a></p>
                            <p><a href="/cart/">Корзина</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--Footer-->
    <div class="footer-bottom">
        <div class="fa-phn">
            <div class="row">
            </div>
        </div>
    </div>
</footer><!--/Footer-->



<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>