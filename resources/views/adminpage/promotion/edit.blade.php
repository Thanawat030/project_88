@extends('layouts.admin')
@section('content')
<!-- partial -->
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">แก้ไขข้อมูลโปรโมชั่น</h4>
                  <p class="card-description">
                  </p>
                  <form action="{{url('admin/promotion/update/'.$Promotion->id)}}" method="POST" class="forms-sample">
                    @csrf
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">รูป</label>
                      <div class="col-sm-9">
                        <input type="text" value="{{$Promotion->img}}" name="img" class="form-control" id="exampleInputUsername2" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">ข้อความหลัก</label>
                      <div class="col-sm-9">
                        <input type="text" name="main_text" class="form-control" id="exampleInputEmail2" value="{{$Promotion->main_text}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">ข้อความรอง</label>
                      <div class="col-sm-9">
                        <input type="text" name="details" class="form-control" id="exampleInputMobile" value="{{$Promotion->details}}">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
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