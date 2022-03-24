@extends('layouts.admin')

@section('title', 'dashboard')
    
@section('content')
<div class="main-content">
    <section class="section">
      <div class="row">
        <div class="col-lg-6 col-md-3 col-sm-12">
          <div class="card card-statistic-2">
            <div class="card-icon shadow-primary bg-primary">
              <i class="fas fa-users"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Guests</h4>
              </div>
              <div class="card-body">
               <h5> Guests this day</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-3 col-sm-12">
            <div class="card card-statistic-2">
              
              <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-align-justify"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  
                </div>
                <div class="card-body">
                 <h5>Dashboard</h5>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-header">
                <div class="row ">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <h3>Today Guests</h3>
                        <div>
                            <button href="#" class="btn btn-tool btn-sm" onclick="window.print(); return false;">
                                <i class="fas fa-download" id="print"></i>
                            </button>
                            <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
              <table class="table table-hover table-striped">
                  <thead>
                      <tr>
                          <th></th>
                          <th>Name</th>
                          <th>Rooms</th>
                          <th class="text-center">stay</th>
                          <th>Day left</th>
                          <th class="text-center">status</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td colspan="7" class="text-center">
                              There's no data in this table
                          </td>
                      </tr>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection