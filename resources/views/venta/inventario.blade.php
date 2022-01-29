@extends('admin.layout')

@section('content')

<div class="row justify-content-center">
    <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body text-center">
                <a  href="{{url('/categoria')}}">
                    <button class="btn btn-primary btn-lg" style='width:300px; height:100px; background: linear-gradient(100deg, #f7f9fd, rgb(113, 72, 167));'>
                        <b class="text-dark">
                            <FONT SIZE=6>N</font><FONT SIZE=6>U</font><FONT SIZE=6>E</font><FONT SIZE=6>V</font><FONT SIZE=6>A</font><FONT SIZE=6> </font>
                            <FONT SIZE=6>C</font><FONT SIZE=6>A</font><FONT SIZE=6>T</font><FONT SIZE=6>E</font><FONT SIZE=6>G</font><FONT SIZE=6>O</font><FONT SIZE=6>R</font><FONT SIZE=6>I</font><FONT SIZE=6>A</font>
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
                    <a  href="{{ url('/producto')}}">
                        <button class="btn btn-primary btn-lg" style='width:300px; height:100px; background: linear-gradient(100deg, #f7f9fd, rgb(33, 182, 170));'>
                            <b class="text-dark">
                                <FONT SIZE=6>N</font><FONT SIZE=6>U</font><FONT SIZE=6>E</font><FONT SIZE=6>V</font><FONT SIZE=6>O</font><FONT SIZE=6> </font>
                                <FONT SIZE=6>P</font><FONT SIZE=6>R</font><FONT SIZE=6>O</font><FONT SIZE=6>D</font><FONT SIZE=6>U</font><FONT SIZE=6>C</font><FONT SIZE=6>T</font><FONT SIZE=6>O</font>
                                
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