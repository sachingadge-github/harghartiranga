<?php include("header.php"); ?>

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
    <div class="container text-center py-5">
    <h3 class="display-5 text-white  slideInDown mb-4">
        झेंडा उपलब्ध करून देण्यास इच्छुक संस्था / व्यक्तीची नोंंदणी


    </h3>
    <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item">
            <a class="text-white" href="index.php">मुख्यपृष्ठ</a>
        </li>
        
        <li class="breadcrumb-item text-primary active" aria-current="page">
        झेंडा उपलब्ध करून देण्यास इच्छुक संस्था / व्यक्तीची नोंंदणी




        </li>
        </ol>
    </nav>
    </div>
</div>

<div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
           
          <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
            <form>
              <div class="row g-3">
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="text" class="form-control bg-light border-0" id="gname" placeholder="Gurdian Name">
                    <label for="gname">संस्था / व्यक्तिचे नाव  *</label>
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
                    <input type="number" class="form-control bg-light border-0" id="cname" placeholder="Child Name">
                    <label for="cname">झेंड्यांची संख्या (#Flags to Donate) *</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                  <div class="form-floating">
                    <textarea class="form-control bg-light border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                    <label for="message">पत्ता *</label>
                  </div>
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
