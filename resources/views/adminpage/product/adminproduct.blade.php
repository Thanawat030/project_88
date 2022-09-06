@extends('layouts.admin')
@section('content')
<!-- partial -->
<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">สินค้า</h4>
                  <p class="card-description">
                  <a class="btn btn-danger" href="{{ url('/admin/product/add')}}">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">เพิ่ม</span>
            </a>
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
                            ชื่อสินค้า
                          </th>
                          <th>
                            ประเภทสินค้า
                          </th>
                          <th>
                            รายละเอียดสินค้า
                          </th>
                          <th>
                            ราคา
                          </th>
                          <th>
                            ลบ
                          </th>
                          <th>
                            แก้ไข
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($product as $row)
                        <td >
                            {{$row->id}}
                          </td>
                          <td>
                            {{$row->img}}
                          </td>
                          <td>
                          {{$row->name}}
                          </td>
                          <td>
                          {{$row->type}}
                          </td>
                          <td>
                          {{$row->details}}
                          </td>
                          <td>
                          {{$row->price}}
                          </td>
                          <td><label class="badge badge-danger">แก้ไข</label></td>
                          <td><label class="badge badge-danger">ลบ</label></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@stop