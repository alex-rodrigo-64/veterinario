@extends('admin.layout')

@section('content')

<div class="row justify-content-center">
    <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body text-center">
                <a  href="{{url('/create')}}">
                    <button class="btn btn-primary btn-lg" style='width:300px; height:100px; background: linear-gradient(100deg, #f7f9fd, rgb(209, 99, 56));'>
                        <b class="text-dark">
                            <FONT SIZE=6>N</font><FONT SIZE=6>U</font><FONT SIZE=6>E</font><FONT SIZE=6>V</font><FONT SIZE=6>A</font><FONT SIZE=6> </font><FONT SIZE=6> </font>
                            <FONT SIZE=6>V</font><FONT SIZE=6>E</font><FONT SIZE=6>N</font><FONT SIZE=6>T</font><FONT SIZE=6>A</font>
                        </b>    
                    </button>
                </a>
            </div>
          </div>
            
          <div class="card">
            <div class="card-body text-center">
                <a  href="{{url('/venta/producto')}}">
                    <button class="btn btn-primary btn-lg" style='width:300px; height:130px; background: linear-gradient(100deg, #f7f9fd, rgb(66, 199, 110));'>
                        <b class="text-dark">
                            <FONT SIZE=6>R</font><FONT SIZE=6>E</font><FONT SIZE=6>G</font><FONT SIZE=6>I</font><FONT SIZE=6>S</font><FONT SIZE=6>T</font><FONT SIZE=6>R</font><FONT SIZE=6>A</font><FONT SIZE=6>R</FONT><FONT SIZE=6> </font>
                            <FONT SIZE=6>P</font><FONT SIZE=6>R</font><FONT SIZE=6>O</font><FONT SIZE=6>D</font><FONT SIZE=6>U</font><FONT SIZE=6>C</font><FONT SIZE=6>T</font><FONT SIZE=6>O</font>
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
                        <button class="btn btn-primary btn-lg" style='width:300px; height:100px; background: linear-gradient(100deg, #f7f9fd, rgb(33, 182, 125));'>
                            <b class="text-dark">
                                <FONT SIZE=6>H</font><FONT SIZE=6>I</font><FONT SIZE=6>S</font><FONT SIZE=6>T</font><FONT SIZE=6>O</font><FONT SIZE=6>R</font><FONT SIZE=6>I</font><FONT SIZE=6>A</font><FONT SIZE=6>L</font>
                                
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