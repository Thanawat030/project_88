@extends('layouts.admin')
@section('content')
<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">เนื้อหา</h4>
                  <p class="card-description">
                  <td><label class="badge badge-danger">เพิ่ม</label></td>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            รูป
                          </th>
                          <th>
                            เนื้อหา
                          </th>
                          <th>
                            แก้ไข
                          </th>
                          <th>
                            ลบ
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <td >
                            06
                          </td>
                          <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="image"/>
                          </td>
                          <td>
                            ******
                          </td>
                          <td><label class="badge badge-danger">แก้ไข</label></td>
                          <td><label class="badge badge-danger">ลบ</label></td>
                      </tbody>
                    </table>
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