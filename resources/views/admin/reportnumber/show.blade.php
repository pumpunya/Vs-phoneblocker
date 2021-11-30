@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">reportnumber {{ $reportnumber->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/reportnumber') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/reportnumber/' . $reportnumber->id . '/edit') }}" title="Edit reportnumber"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/reportnumber' . '/' . $reportnumber->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete reportnumber" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        
                                    </tr>
                                    <tr><th> Id </th><td> {{ $reportnumber->id }} </td></tr>
                                    <tr><th> Address </th><td> {{ $reportnumber->address }} </td></tr>
                                    <tr><th> Detail </th><td> {{ $reportnumber->detail }} </td></tr>
                                    <tr><th> Satus </th><td> {{ $reportnumber->status }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
