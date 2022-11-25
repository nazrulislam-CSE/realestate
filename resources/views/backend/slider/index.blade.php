@extends('layouts.app2')
@section('admin')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800 text-right">
                <a href="{{ route('slider.create') }}" class="btn btn-primary"><i class="fas fa-plus" aria-hidden="true"></i> Create</a>
            </h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex">
                   <h6 class="m-0 font-weight-bold text-primary pr-2 pt-1">Slider List</h6>
                   <span class="badge rounded-pill alert-success" style="font-size: 18px;"> {{ count($sliders) }} </span>
                </div>
                <div class="card-body">
                   <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                         <thead>
                            <tr>
                               <th width="5%">Sl</th>
                               <th width="10%">Slider Img</th>
                               <th width="10%">Title (English)</th>
                               <th width="15%">Title (Bangla)</th>
                               <th width="10%">Description (English)</th>
                               <th width="10%">Description (Bangla)</th>
                               <th width="10%">Status</th>
                               <th width="15%">Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach($sliders as $key => $slide)
                            <tr>
                               <td> {{ $key+1}} </td>
                               <td>Library Road-6854</td>
                               <td>
                                    <img src="{{ asset($slide->slider_img) }}" width="70px" height="70px;" class="img-sm img-avatar" alt="No Image">
                               </td>
                               <td> {{ $slide->title_en ?? 'NULL' }} </td>
                               <td> {!! $slide->description_bn ?? 'NULL' !!} </td>
                               <td> {!! $slide->description_en ?? 'NULL' !!} </td>
                               <td>

                                @if($slide->status == 1)
                                <a href="{{ route('slider.in_active',['id'=>$slide->id]) }}" class="btn btn-success btn-sm">Active</a>
                                @else
                                  <a href="{{ route('slider.active',['id'=>$slide->id]) }}" class="btn btn-danger btn-sm">Disable</a>
                                @endif
                               </td>
                               <td>
                                  <a target="_blank" href="{{ route('slider.view',$slide->id) }}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>

                                  <a href="{{ route('slider.edit',$slide->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>

                                  <a href="{{ route('slider.delete',$slide->id) }}"class="btn btn-danger btn-sm" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>
                               </td>
                            </tr>
                            @endforeach
                         </tbody>
                      </table>
                   </div>
                </div>
            </div>
            <script>
                function deleteData(id){
                    $("#deleteForm").attr("action",'https://demo.websolutionus.com/findestate/admin/property'+"/"+id)
                }

                function propertyStatus(id){
                    // project demo mode check
                    var isDemo="0"
                    var demoNotify="You can not change data in demo mode"
                    if(isDemo==0){
                        toastr.error(demoNotify);
                        return;
                    }
                    // end
                    $.ajax({
                        type:"get",
                        url:"https://demo.websolutionus.com/findestate/admin/property-status"+"/"+id,
                        success:function(response){
                           toastr.success(response)
                        },
                        error:function(err){
                            console.log(err);

                        }
                    })
                }
            </script>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
</div>
@endsection
