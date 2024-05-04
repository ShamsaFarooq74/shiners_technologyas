@extends('layouts.inc.master')
@section('title', 'Admin Panel')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <h1>Welcome to Dashboard {{Auth::user()->name}} </h1>

        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="container">
              <div class="row ">
                <div class="col md-8 mx-auto d-flex justify-content-center">
                  <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
                </div>
              </div>
            </div>

            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
  var xValues = ["Blog Posts", "Comments", "Project Posts"];
  var yValues = [{{$blogPostCount}},{{$commentCount}},{{$projectPostCount}}];
  var barColors = ["red", "green","blue","orange","brown"];

  new Chart("myChart", {
    type: "bar",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      legend: {display: false},
      title: {
        display: true,
        text: "CMS Data"
      }
    }
  });
  </script>

@endsection
