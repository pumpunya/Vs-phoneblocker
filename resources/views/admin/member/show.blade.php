@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">member {{ $member->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/member') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/member/' . $member->id . '/edit') }}" title="Edit member"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/member' . '/' . $member->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete member" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                     
                                    </tr>
                                    <tr><th> Id </th><td> {{ $member->id }} </td></tr>
                                    <tr><th> Email </th><td> {{ $member->email }} </td></tr>
                                    <tr><th> Name </th><td> {{ $member->name }} </td></tr>
                                   
                                    <tr><th> Package </th><td> {{ $member->package }} </td></tr>
                                    <tr><th> Free_trial </th><td> {{ $member->free_trial }} </td></tr>
                                    <tr><th> Exp_date </th><td> {{ $member->exp_date }} </td></tr>
                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
