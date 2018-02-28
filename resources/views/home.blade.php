@extends('layouts.master')


@section('style')
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
@endsection

@section('content')
<div class="container">
<br/><br/><br/>
    <div id="content">
        <div id="content-header">

            <div id="breadcrumb"> <h2>Welcome {{ $user->name }} </h2></div>
        </div>

        <div class="container-fluid">
            <a class="btn btn-success" href="{{ route('editor') }}">New Post</a>
            <div class="row-fluid">
                <div class="span12">
                    <br/>

                    <div class="widget-box">
                            <h5>Your Posts</h5>
                        </div>

                        <div class="widget-content nopadding " id="collapseG2">
                            <table class="table table-striped table-bordered">
                                <tr><th width="80%">Post</th><th>Operations</th></tr>
                                @foreach ($messages as $usr)
                                <tr><td width="80%">
                                    <div class="article-post"> <a href="#" ><span class="user-info"> {{ $usr->header }} </span></a>
                                        <p>{{ $usr->message }}</p>
                                    </div>
                                    </td>
                                    <td> <a class="btn btn-success" href="#">Edit</a><a class="btn btn-danger">Delete</a></td>
                                </tr>
                                @endforeach

                                    {{ $messages->links() }}
                            </table>
                        </div>
                    </div>

                </div>

            </div>
            <hr>
        </div>
    </div>
</div>
@endsection
