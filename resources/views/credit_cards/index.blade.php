@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="main-container">
                            <span>Credit Card Management</span>
                            <span>Add Purchase</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-responsive table-hover text-center">
                            <thead>
                            <tr>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Credit Card</th>
                                <th>Amount</th>
                                <th>Payment Due Date</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection