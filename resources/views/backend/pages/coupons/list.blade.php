@extends('backend.master.master-app')
@section('title', 'Coupons List')
@section('content')

<div class="container-xxl">
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title mb-2">Pending Review</h4>
                            <p class="text-muted fw-medium fs-22 mb-0">210</p>
                        </div>
                        <div>
                            <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                <iconify-icon icon="solar:clipboard-remove-broken"
                                    class="fs-32 text-primary avatar-title"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title mb-2">Pending Payment</h4>
                            <p class="text-muted fw-medium fs-22 mb-0">608</p>
                        </div>
                        <div>
                            <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                <iconify-icon icon="solar:clock-circle-broken" class="fs-32 text-primary avatar-title">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title mb-2">Delivered</h4>
                            <p class="text-muted fw-medium fs-22 mb-0">200</p>
                        </div>
                        <div>
                            <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                <iconify-icon icon="solar:clipboard-check-broken"
                                    class="fs-32 text-primary avatar-title"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title mb-2">In Progress</h4>
                            <p class="text-muted fw-medium fs-22 mb-0">656</p>
                        </div>
                        <div>
                            <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                <iconify-icon icon="solar:inbox-line-broken" class="fs-32 text-primary avatar-title">
                                </iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
         <div class="col-xl-12">
              <div class="card">
                   <div class="d-flex card-header justify-content-between align-items-center">
                        <div>
                             <h4 class="card-title">All Coupons List</h4>
                        </div>
                        <div class="dropdown">
                            <a href="{{ route('coupons.create') }}" class="btn btn-sm btn-primary">
                                Add Coupons
                           </a>
                        </div>
                   </div>
                   <div>
                        <div class="table-responsive">
                             <table class="table align-middle mb-0 table-hover table-centered">
                                  <thead class="bg-light-subtle">
                                       <tr>
                                            <th style="width: 20px;">
                                                 No
                                            </th>
                                            <th>Coupons Code</th>
                                            <th>Discount Products</th>
                                            <th>Coupons Types</th>
                                            <th>Coupons Limits</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Discount Value</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                       </tr>
                                  </thead>
                                  <tbody>
                                       <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                FASHION123
                                            </td>
                                            <td>$80.00</td>
                                            <td>$20.00</td>
                                            <td>FASHION123</td>
                                            <td>12 May 2023</td>
                                            <td>12 Jun 2023</td>
                                            <td>adas</td>
                                            <td>
                                                 <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-check-double"></i>Active</span>
                                            </td>
                                            <td>
                                                 <div class="d-flex gap-2">
                                                      <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                 </div>
                                            </td>
                                       </tr>
                                  </tbody>
                             </table>
                        </div>
                        <!-- end table-responsive -->
                   </div>
                   <div class="card-footer border-top">
                        <nav aria-label="Page navigation example">
                             <ul class="pagination justify-content-end mb-0">
                                  <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                  <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                             </ul>
                        </nav>
                   </div>
              </div>
         </div>

    </div>

</div>

@endsection
