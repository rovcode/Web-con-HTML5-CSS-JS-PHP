<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 -->
<script src="Public/asset/v2/js/jquery-3.2.1.min.js"></script>
<script src="Public/asset/v2/styles/bootstrap4/popper.js"></script>
<script src="Public/asset/v2/styles/bootstrap4/bootstrap.min.js"></script>
<script src="Public/asset/v2/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="Public/asset/v2/plugins/easing/easing.js"></script>
<script src="Public/asset/v2/plugins/parallax-js-master/parallax.min.js"></script>
<script src="Public/asset/v2/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="Public/asset/v2/js/custom.js"></script>
<script src="./script.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
     var url = $(location).attr('href');
     var splitUrl = url.split('/');
     var view = splitUrl[4];
     if(view=='productos.php'){
       $("#productos").addClass('active');
       $("#inicio").removeClass('active');
       $("#nosotros").removeClass('active');
       $("#contacto").removeClass('active');
     }else if(view=='sobremagenta.php'){
       $("#productos").removeClass('active');
       $("#inicio").removeClass('active');
       $("#nosotros").addClass('active');
       $("#contacto").removeClass('active');
     }else if(view=='contacto.php'){
       $("#productos").removeClass('active');
       $("#inicio").removeClass('active');
       $("#nosotros").removeClass('active');
       $("#contacto").addClass('active');
     }

  });
</script>
</body>
