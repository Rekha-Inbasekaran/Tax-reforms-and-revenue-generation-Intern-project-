@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Report</div>

                <div class="panel-body">
               
                       
                <div class="text-center btntax "> 
                <a href="monthlyreport"><button type="button" class="btn-primary btn-lg taxd">Demand Report</button></a>
                </div>

                <div class="text-center btntax "> 
                <a href="annualreport"><button type="button" class="btn-primary btn-lg taxd">Collection Report</button></a>
                </div>

                

                </div>
            </div>
        </div>
    </div>
</div>
@endsection