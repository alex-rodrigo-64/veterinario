@extends('admin.layout')

@section('content')

<div class="row justify-content-center">
<div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body text-center">
            <a  href="{{ url('/recepcion') }}">
                <button class="btn btn-primary btn-lg" style='width:300px; height:100px; background: linear-gradient(100deg, #f7f9fd, rgb(27, 255, 65));'>
                    <b class="text-dark">
                        <FONT SIZE=6>R</font><FONT SIZE=6>E</font><FONT SIZE=6>C</font><FONT SIZE=6>E</font><FONT SIZE=6>P</font><FONT SIZE=6>C</font><FONT SIZE=6>I</font><FONT SIZE=6>O</font><FONT SIZE=6>N</FONT>
                    </b>    
                </button>
            </a>
        </div>
      </div>
        
      <div class="card">
        <div class="card-body text-center">
            <a  href="{{ url('/servicios') }}">
                <button class="btn btn-primary btn-lg" style='width:300px; height:100px; background: linear-gradient(100deg, #f7f9fd, rgb(27, 106, 255));'>
                    <b class="text-dark">
                        <FONT SIZE=6>S</font><FONT SIZE=6>E</font><FONT SIZE=6>R</font><FONT SIZE=6>V</font><FONT SIZE=6>I</font><FONT SIZE=6>C</font><FONT SIZE=6>I</font><FONT SIZE=6>O</font><FONT SIZE=6>S</FONT>
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
                    <button class="btn btn-primary btn-lg" style='width:300px; height:100px; background: linear-gradient(100deg, #f7f9fd, rgb(226, 255, 62));'>
                        <b class="text-dark">
                            <FONT SIZE=6>V</font><FONT SIZE=6>E</font><FONT SIZE=6>N</font><FONT SIZE=6>T</font><FONT SIZE=6>A</font><FONT SIZE=6>S</font>
                            
                        </b>    
                    </button>
                </a>
            </div>
          </div>

          <div class="card">
            <div class="card-body text-center">
                <a  href="{{ url('/historial')}}">
                    <button class="btn btn-primary btn-lg" style='width:300px; height:100px; background: linear-gradient(100deg, #f7f9fd, rgb(255, 155, 62));'>
                        <b class="text-dark">
                            <FONT SIZE=6>H</font><FONT SIZE=6>I</font><FONT SIZE=6>S</font><FONT SIZE=6>T</font><FONT SIZE=6>O</font><FONT SIZE=6>R</font><FONT SIZE=6>I</font><FONT SIZE=6>A</font><FONT SIZE=6>L</FONT>
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