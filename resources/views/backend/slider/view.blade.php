@extends('layouts.app2')
@section('admin')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
   <!-- Main Content -->
   <div id="content">
      <!-- Begin Page Content -->
      <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 text-right">
          <a href="{{ route('slider.index') }}" class="btn btn-primary"><i class="fas fa-list" aria-hidden="true"></i> All Slider </a>
        </h1>
         <!-- DataTales Example -->
        <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Order Details</h6>
    </div>
    <div class="card-body">
       <div class="table-responsive">
          <table class="table table-bordered">
             <tr>
                <td>Title En</td>
                <td>{{ $slider->title_en }}</td>
             </tr>
             <tr>
                <td>Title Bn</td>
                <td>{{ $slider->title_bn }}</td>
             </tr>
             <tr>
                <td>Slider Url</td>
                <td>{{ $slider->slider_url }}</td>
             </tr>
             <tr>
                <td>Description En</td>
                <td>{!! $slider->description_en !!}</td>
             </tr>
             <tr>
                <td>Description Bn</td>
                <td>{!! $slider->description_bn !!}</td>
             </tr>
             <tr>
                <td>Slider Image</td>
                <td><img src="{{ asset($slider->slider_img) }}" alt="" style="height:70px; width:400px;"></td>
             </tr>
             <td>Status</td>
                <td>
                    @if ($slider->status == 1)
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-danger">Disable</span>
                    @endif

                </td>
             </tr>
          </table>
          {{-- <a href="https://demo.websolutionus.com/findestate/admin/order-delete/149" class="btn btn-danger">Delete</a> --}}
       </div>
    </div>
 </div>
 </div>
      <!-- /.container-fluid -->
   </div>
   <!-- End of Main Content -->
</div>

<!-- category Image Show -->
<script type="text/javascript">
    $(document).ready(function(){
        $('.slider_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('.slider_showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
