<div class="main-content">

   <h3 class="title-page">
      Tổng quan
   </h3>
   <section class="statistics row">
      <div class="col-sm-12 col-md-6 col-xl-3">
         <a href="products.html">
            <div class="card mb-3 widget-chart">
               <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                  <h5>
                     Tổng bộ phim
                  </h5>
               </div>
               <span class="widget-numbers"><?= $tkflim['soluong']?></span>
            </div>
         </a>
      </div>
      <div class="col-sm-12 col-md-6 col-xl-3">
         <a href="user.html">
            <div class="card mb-3 widget-chart">

               <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                  <h5>
                     Tổng thể loại phim
                  </h5>
               </div>
               <span class="widget-numbers"><?=$tkloai['tongloai']?></span>
            </div>
         </a>
      </div>
      <div class="col-sm-12 col-md-6 col-xl-3">
         <a href="caterogies.html">
            <div class="card mb-3 widget-chart">
               <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                  <h5>
                     Tổng lượt xem
                  </h5>
               </div>
               <span class="widget-numbers"><?=$tkView['tongxem']?></span>
            </div>
         </a>
      </div>
      <div class="col-sm-12 col-md-6 col-xl-3">
         <a href="#">
            <div class="card mb-3 widget-chart">
               <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                  <h5>
                     Tổng tài khoản
                  </h5>
               </div>
               <span class="widget-numbers"><?=$tkUser['tonguser']?></span>
            </div>
         </a>
      </div>
   </section>
   <section class="row">
   <div class="col-sm-12 col-md-6 col-xl-3">
         <div class="card chart">
            <h4>Bảng phim</h4>
            <table class="revenue table table-hover">
               <thead>
                  <th>name</th>
                  <th>nămsx</th>
                 
               </thead>
               <tbody>
                  <?php foreach( $dsflimNamsx as $flims):?>
                  <tr>
                     <td><?=$flims['ten']?></td>
                     <td><?=$flims['namsx']?></td>
                  </tr>
                  <?php endforeach;?>
               </tbody>
            </table>
         </div>
      </div>
   <div class="col-sm-12 col-md-6 col-xl-3">
      <div class="card chart">
         <h4>Bảng thể loại</h4>
         <table class="revenue table table-hover">
            <thead>
               <th>STT</th>
               <th>name</th>
            </thead>
            <tbody>
               <?php foreach( $dsTheLoai as $ds):?>
               <tr>
                  <td><?=$ds['id_loai']?></td>
                  <td><?=$ds['tentl']?></td>
               </tr>
               <?php endforeach;?>
            </tbody>
         </table>
      </div>
   </div>
   <div class="col-sm-12 col-md-6 col-xl-3">
      <div class="card chart">
         <h4>Bảng lượt xem phim</h4>
         <table class="revenue table table-hover">
            <thead>
               <th>name</th>
               <th>view</th>
            </thead>
            <tbody>
               <?php foreach( $dsflim as $flim):?>
               <tr>
                  <td><?=$flim['ten']?></td>
                  <td><?=$flim['luotxem']?></td>
               </tr>
               <?php endforeach;?>
            </tbody>
         </table>
      </div>
   </div>
   <div class="col-sm-12 col-md-6 col-xl-3">
      <div class="card chart">
         <h4>Khách hàng </h4>
         <table class="revenue table table-hover">
            <thead>
               <th>name</th>
               <th>email</th>
            </thead>
            <tbody>
               <?php foreach( $dsUser as $ds):?>
               <tr>
                  <td><?=$ds['ten_user']?></td>
                  <td><?=$ds['email']?></td>
               </tr>
               <?php endforeach;?>
            </tbody>
         </table>
      </div>
   </div>
   </section>
</div>
</div>
</div>
<script src="assets/js/main.js"></script>
<script>
new DataTable('#example');
</script>