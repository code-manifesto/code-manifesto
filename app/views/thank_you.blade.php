@extends('layouts.master')

@section('content')

<div class="inner cover">
    <h3>Thank you for your support!</h3>
</div>
<hr>
<div class="thank-you-block-container">
    <h3> Other Supporters</h3>
    <div class="text-left">
        @foreach($supporters as $supporter)
        <div class="well well-sm col-md-4 thank-you-block">
            <div class="row">
                <div class="col-md-2">
                    <div class="circle">
                        <i class="icon-user"></i>
                    </div>
                </div>
                <div class="col-md-9 pull-right">
                    <strong> {{$supporter->first_name}} {{$supporter->last_name}}</strong>
                    <br/>
                    {{$supporter->city}}
                    @if(!empty($supporter->city))
                    ,
                    @endif
                    {{$supporter->state}} {{$supporter->country}}
                    <br/>
                    @if ($supporter->twitter_user)
                    <a href="http://www.twitter.com/{{$supporter->twitter_user}}" target="_blank">
                        <i class="icon-twitter"></i>{{$supporter->twitter_user}}
                    </a>
                    @endif

                    <br/>
                    @if ($supporter->github_user)
                    <a href="http://www.github.com/{{$supporter->github_user}}" target="_blank">
                        <i class="icon-github"></i>{{$supporter->github_user}}
                    </a>
                    @endif
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
@stop


