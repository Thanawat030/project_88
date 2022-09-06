@extends('layouts.admin')
@section('content')
<!-- partial -->
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">เพิ่มรายการจัดส่ง</h4>
                  <p class="card-description">
                  </p>
                  <form action="{{route('adminpage.delivery.add')}}" class="forms-sample">
                  @csrf
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">วันที่ส่ง</label>
                      <div class="col-sm-9">
                        <input type="date" name="day" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Line</label>
                      <div class="col-sm-9">
                        <input type="text" name="line" class="form-control" id="exampleInputEmail2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">ที่อยู่ลูกค้า</label>
                      <div class="col-sm-9">
                        <input type="text" name="address" class="form-control" id="exampleInputEmail2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">จำนวนสินค้า</label>
                      <div class="col-sm-9">
                        <input type="text" name="quantity" class="form-control" id="exampleInputEmail2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">รายละเอียดการจัดส่ง</label>
                      <div class="col-sm-9">
                        <input type="text" name="price" class="form-control" id="exampleInputEmail2" placeholder="">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@stop