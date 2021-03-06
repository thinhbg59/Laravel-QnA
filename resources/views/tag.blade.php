@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('containers.tags')
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-body">

                        @if ( $questions->isEmpty() )
                            <p> There are no questions for this tag.</p>
                        @else

                            <div id="questions">
                                <legend class="text-left">
                                    <h1>{{ucfirst($sort)}} {{$tag_info->name}} Interview Questions</h1>
                                </legend>
                            </div>

                            <P>
                                <a href="/tag/{{strtolower($tag_info->name)}}/top" class="btn btn-primary btn-rounded btn-large {{$sort == 'top' ? 'disabled' : ''}}" role="button"><i class="fa fa-angle-right" style="color: white;"></i> <b>Top</b></a>
                                <a href="/tag/{{strtolower($tag_info->name)}}" class="btn btn-primary btn-rounded btn-large {{$sort == 'new' ? 'disabled' : ''}}" role="button"><i class="fa fa-angle-right" style="color: white;"></i> <b>New</b></a>
                            </P>

                                @foreach( $questions as $question )
                                    @include('containers.question')
                                @endforeach

                            {{ $questions->links() }}

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection