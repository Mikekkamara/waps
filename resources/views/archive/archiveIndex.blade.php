@extends('layouts.app')
@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row my-2">
          <div class="col-6">
            <h3>Archive</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index-2.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Dashboard</li>
              <li class="breadcrumb-item active">Archive</li>
            </ol>
          </div>
        </div>

       {{-- 
            <table class="table table-bordered  text-center">
                <tr>
                    <th>Campaign</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>TestCampaign</td>
                    <td>01/10/2021</td>
                    <td>01/10/2021</td>
                    <td>Success</td>
                </tr>
            </table> --}}
            <div class="card-body">
                <div class="table-responsive">

                    <table class="display dataTable">
                        <tr>
                            <th>Campaign</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <td>TestCampaign</td>
                            <td>01/10/2021</td>
                            <td>01/10/2021</td>
                            <td>Success</td>
                        </tr>
                    </table>
                </div>
            </div>
      </div>
    </div>
</div>
@endsection