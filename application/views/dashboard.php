<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
               <!-- Content Header (Page header) -->
    <section class="content-header">
 <h1 class="t_class" >
        <i class="fa fa-tachometer" aria-hidden="true"></i> الشاشة
        <small>الرئيسية</small>
      </h1>	
	
 
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $total_customer?></h3>
                  <p>العملاء</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="customer/index" class="small-box-footer">التفاصيل <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $total_company ?></h3>
                  <p>الشركات</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="company/index" class="small-box-footer">التفاصيل <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $total_document ?></h3>
                  <p>المستندات</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="document/index" class="small-box-footer">التفاصيل <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $total_document_expire ?></h3>
                  <p>المستندات المنتهية</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="document/expired" class="small-box-footer">التفاصيل <i class="fa fa-arrow-circle-right"></i></a>
                
              </div>
            </div><!-- ./col -->
          </div>
    </section>
            </div>
        </div>
    </div>
</div>