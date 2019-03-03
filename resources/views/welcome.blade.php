@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="{{ asset('/img/capsule.svg') }}" alt="capsule diagram">
                <button class="btn btn-small mt-3 btn-primary">make a capsule</button>
                <p class="text-sm" style="font-size:12px;">{{ __('words.redirected-to-sign-up') }}</p>
            </div>
            <div class="col-md-6 text-center">
                <p>
                    did you do accept our 'heartbeat' email?<br/>
                    <b>yes</b> - 'heartbeat' email will be sent again later based on interval you set.<br/>
                    <b>no</b> - your capsule will be sent to your trusted recipients.
                </p>
            </div>
            <div class="col-md-3 text-center">
                <p>trusted person A</p>
                <p>trusted person B</p>
                <p>trusted person C</p>
            </div>
        </div>
    </div>
@endsection
