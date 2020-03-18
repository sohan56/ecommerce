@extends('admin.admin_master')
@section('content')

        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Manage about</h1>
                </div>
                 <!-- end  page header -->
            </div>
           
            <div class="row">
                
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>About description</th>
                                            
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	 @foreach($all_about as $v_about)
                                        <tr>
                                            
                                            <td>{{$v_about->about_short_description}}</td>
                                           
                                            <td class=" ">
                                             @if($v_about->publication_status==1)
                                             Publish
                                             @else
                                             Unpublish
                                             @endif
                                         </td>
                                         <td >
                                            @if($v_about->publication_status==1)
                                            <a href="{{URL::to('/unpublish-about',$v_about->about_id)}}" class="btn btn-danger">Unpublish<i class=""></i></a>
                                            @else
                                            <a href="{{URL::to('/publish-about',$v_about->about_id)}}" class="btn btn-success"><i class="">Publish</i></a>
                                            @endif
                                            <a href="{{URL::to('/edit-about',$v_about->about_id)}}" class="btn btn-primary"><i class="">Edit</i></a>
                                            
                                            <a href="{{URL::to('/delete-about',$v_about->about_id)}}" class="btn btn-danger" onclick="return checkDelete()">Delate<i class=""></i></a>
                                            

                                         </td>
                                            
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
              

            </div>
           
        </div>

@endsection