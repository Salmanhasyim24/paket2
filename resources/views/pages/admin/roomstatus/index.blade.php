@extends('layouts.admin')

@section('title', 'room')
    
@section('content')
<div class="main-content">
    <section class="section">
    <div class="row">
        <div class="col-lg-6 col-md-3 col-sm-12">
        </div>
        <div class="col-lg-6 col-md-3 col-sm-12 pb-3">
            <form class="d-flex" method="GET" action="#">
                <input class="form-control me-2" room="search" placeholder="Search by number" aria-label="Search"
                    id="search" name="search" value="{{ request()->input('search') }}">
                <button class="btn btn-primary" room="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="row ">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <h3>Rooms Status</h3>
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
    <div class="row">
        <div class="col-lg-12">
        <div class="card-body table-responsive p-0">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Code</th>
                    <th scope="col">Information</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5" class="text-center">
                        There's no data in this table
                    </td>
                </tr>
            </tbody>
        </table>
        </div>

        </div>
    </div>
        </div>
        </div>
    </div>
    </section>
</div>
@endsection