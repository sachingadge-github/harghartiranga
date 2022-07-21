<?php include("header.php"); ?>
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
    <div class="container text-center py-5">
    <h3 class="display-5 text-white  slideInDown mb-4">
        लॉग इन




    </h3>
    <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item">
            <a class="text-white" href="index.php">मुख्यपृष्ठ</a>
        </li>
        
        <li class="breadcrumb-item text-primary active" aria-current="page">
        लॉग इन



        </li>
        </ol>
    </nav>
    </div>
</div>


<div class="container-xxl py-5">
      <div class="container">
      <div class="row g-5">

         
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
                <img class="position-absolute w-100 h-100" src="login.webp" alt="" style="object-fit: cover">
                
            </div>
        </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
         
          <div class="border-start border-5 border-primary ps-4 mb-5">
                <h6 class="text-body text-uppercase mb-2"></h6>
                <h1 class="display-6 mb-0">
                लॉग इन
                </h1>
            </div>
            <form>
              <div class="row g-3">

              
              <div class="col-md-12">
                 
                      <input name="logintype" type="radio">
                      <label for=""> <b> नागरिक </b> </label>
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      <input name="logintype" type="radio">
                    <label for="district"> <b> उत्पादक </b> </label>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                   <input name="logintype" type="radio">
                    <label for="district"> <b> तहसीलदार </b> </label>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                   <input name="logintype" type="radio">
                    <label for="district"> <b> Admin </b> </label>
                 
                        
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control border-0 bg-light" id="name" placeholder="मोबाईल क्रमांक">
                    <label for="name">मोबाईल क्रमांक *</label>
                  </div>
                </div>
               
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="password" class="form-control border-0 bg-light" id="name" placeholder="मोबाईल क्रमांक">
                    <label for="name">Password *</label>
                  </div>
                </div>
               
                <div class="col-12">
                  <button class="btn btn-primary py-3 px-5" type="submit">
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
       
        </div>
      </div>
    </div>

<?php require('footer.php'); ?>
