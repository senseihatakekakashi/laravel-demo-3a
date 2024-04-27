@extends('layouts.app')

@section('content')
<div>
    <x-page-title title="Dashboard" :breadcrumb-items="['index' => 'Home', 'active' => 'Dashboard']"/>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">
                    <x-dashboard-cards title="Sales" sub-title="Today">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart"></i>
                        </div>
                        <div class="ps-3">
                            <h6>145</h6>
                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                        </div>
                    </x-dashboard-cards>
                </div>
            </div>
            <!-- End Left side columns -->
        </div>
    </section>
</div>
@endsection