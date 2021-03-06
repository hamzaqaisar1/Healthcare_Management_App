@extends('layouts.app')
@section('content')

<div class='container-fluid'>

<div class='row'>
    @include('inc.aside')

<div class="upcoming-appointments col-md-9">
    <h2>Current Prescriptions</h2>
    @if($prescription)
	<div class="table-responsive">
    <table class="table">
        <tr>
        <th scope="col">Doctor's Name</th>
        <th scope="col">Condition</th>
        <th scope="col">Notes</th>
        <th scope="col">Drug Name</th>
        <th scope="col">Dose</th>
        </tr>
        
        <tr>
        <td>{{$doctorName}}</td>
        <td>{{$prescription->condition}}</td>
        <td>{{$prescription->notes}}</td>
        @foreach($drugs as $drug)
        <td>{{$drug->name}}</td>
        <td>{{$drug->dose}}</td>
        @endforeach
        </tr>
     
    </table>       
	</div>
    @endif
</div>
</div>
</div>	
@endsection