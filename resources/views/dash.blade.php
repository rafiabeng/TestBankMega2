@extends('layouts.app')

@section('content')
    <p>Maker Page</p>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}

                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        {{ Auth::user()->name }}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ url('/dashboard/post') }}" method="POST">
                @csrf
                <div class="d-flex justify-content-center">
                    <div class="form-group">
                        <label for="name">Document Subject</label>
                        <input type="input" name="document_subject" id="name" class="form-control">
                    </div>
                </div>


                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>
                <a class="btn btn-link" href="{{ url('/dashboard/info') }}">
                    View Submitted Docs
                </a>
            </form>
        </div>
    </div>
@endsection
