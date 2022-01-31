@extends('admin.layout')

@section('content')


<div class="row justify-content-center">
    <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body text-center">
                <a  href="{{ url('/recepcion') }}">
                    <button class="btn btn-primary btn-lg" style='width:300px; height:100px; background: linear-gradient(100deg, #f7f9fd, rgb(255, 27, 27));'>
                        <b class="text-dark">
                            <FONT SIZE=6>C</font><FONT SIZE=6>I</font><FONT SIZE=6>R</font><FONT SIZE=6>U</font><FONT SIZE=6>G</font><FONT SIZE=6>Í</font><FONT SIZE=6>A</font>
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
                    <a  href="{{ url('/venta')}}">
                        <button class="btn btn-primary btn-lg" style='width:300px; height:100px; background: linear-gradient(100deg, #f7f9fd, rgb(224, 75, 132));'>
                            <b class="text-dark">
                                <FONT SIZE=6>P</font><FONT SIZE=6>E</font><FONT SIZE=6>L</font><FONT SIZE=6>U</font><FONT SIZE=6>Q</font><FONT SIZE=6>U</font><FONT SIZE=6>E</font><FONT SIZE=6>R</font><FONT SIZE=6>Í</font><FONT SIZE=6>A</font>
                                
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