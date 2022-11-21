@extends('layouts.admin')
@section('content')
<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">ตารางติดต่อ </h4>
                  <p class="card-description">
                  <a class="btn btn-danger" href="{{ url('/admin/contact/add')}}">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">เพิ่ม</span>
            </a>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead> 
                        <tr>
                          <th>ID</th>
                          <th>เบอร์โทร</th>
                          <th>Line</th>
                          <th>facebook</th>
                          <th>แก้ไข</th>
                          <th>ลบ</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($contact as $row)
                        <tr>
                          <td>{{$row->id}}</td>
                          <td>{{$row->phonenumber}}</td>
                          <td>{{$row->line}}</td>
                          <td>{{$row->facebook}}</td>
                          <td><a href="{{url('/admin/contact/edit/'.$row->id)}}" class="badge badge-warning"> แก้ไข</a></td>
                          <td><a href="{{url('/admin/contact/delete/'.$row->id)}}" class="badge badge-danger"> ลบ </a></td>
                        </tr>
                        
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
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