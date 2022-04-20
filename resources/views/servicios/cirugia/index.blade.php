@extends('admin.layout')

@section('content')



<div class="row justify-content-center">
    <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body text-center">
                <a  href="{{ url('/cirugia/agenda') }}">
                    <button class="btn btn-primary btn-lg" style='width:300px; height:100px; background: linear-gradient(100deg, #f7f9fd, rgb(65, 255, 27));'>
                        <b class="text-dark">
                            <FONT SIZE=6>AGENDA</font>
                        </b>    
                    </button>
                </a>
            </div>
          </div>
            
          
        </div>
        <!-- /.col-md-6 -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body text-center">
                    <a  href="{{ url('/cirugia/programar')}}">
                        <button class="btn btn-primary btn-lg" style='width:300px; height:100px; background: linear-gradient(100deg, #f7f9fd, rgb(161, 102, 47));'>
                            <b class="text-dark">
                                <FONT SIZE=6>PROGRAMAR</font>
                                
                            </b>    
                        </button> 
                    </a>
                </div>
              </div>
    
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div>



@endsection