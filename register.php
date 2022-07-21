<?php include("header.php"); ?>

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
    <div class="container text-center py-5">
    <h1 class="display-4 text-white  slideInDown mb-4">
        नोंदणी फॉर्म
    </h1>
    <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item">
            <a class="text-white" href="index.php">मुख्यपृष्ठ</a>
        </li>
        
        <li class="breadcrumb-item text-primary active" aria-current="page">
            नोंदणी फॉर्म
        </li>
        </ol>
    </nav>
    </div>
</div>

<div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="border-start border-5 border-primary ps-4 mb-5">
                <h6 class="text-body text-uppercase mb-2">नोंदणी फॉर्म</h6>
                <h1 class="display-6 mb-0">
                तिरंगा कुठे लावणार?
                </h1>
                </div>
             
                <div class="border-top mt-4 pt-4">
                <div class="row g-6">
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                     
                    <button class="btn btn-info btn-sm w-100 py-3" type="button" id="home" onClick="alert('घरावर');"> घरावर </button>
                  </div>
                  <div class="col-sm-6 d-flex wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    
                    <button class="btn btn-info btn-sm w-100 py-3" type="button" id="home" onClick="alert('संस्थेच्या  इमारतीवर');">संस्थेच्या  इमारतीवर </button>
                  </div>
                 
                </div>
              </div>
            </div>
          <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
            <form>
              <div class="row g-3">
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="text" class="form-control bg-light border-0" id="gname" placeholder="Gurdian Name">
                    <label for="gname">नाव *</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="district" class="form-control bg-light border-0" id="district" placeholder="District" value="Raigad" readonly>
                    <label for="district">जिल्हा *</label>
                  </div>
                </div><div class="col-sm-6">
                  <div class="form-floating">
                    <select name="taluka"  class="form-control bg-light border-0"  id="taluka">
                        <option value="">निवडा</option>
                        <option value="">Tal 1</option>
                        <option value="">Tal 2</option>
                    </select>
                    <label for="district">तालुका *</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <select name="village"  class="form-control bg-light border-0"  id="village">
                        <option value="">निवडा</option>
                        <option value="">Village 1</option>
                        <option value="">Village 2</option>
                    </select>
                    <label for="district">गाव *</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="text" class="form-control bg-light border-0" id="cname" placeholder="Child Name">
                    <label for="cname">मोबाईल क्रमांक *</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="text" class="form-control bg-light border-0" id="cname" placeholder="Child Name">
                    <label for="cname">ई-मेल आयडी *</label>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-floating">
                    <select name="supplier"  class="form-control bg-light border-0"  id="supplier">
                        <option value="">निवडा</option>
                        <option value="">Village 1</option>
                        <option value="">Village 2</option>
                    </select>
                    <label for="cage">तुमच्या जवळचा झेंडा उत्पादक / वितरक यादी *</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control bg-light border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                    <label for="message">पत्ता *</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100 py-3" type="submit">
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
