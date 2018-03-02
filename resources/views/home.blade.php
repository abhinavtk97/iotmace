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
            <a class="btn btn-success" href="{{ route('newpost') }}">New Post</a>
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
                                    <div class="article-post"> <a href="{{ route('post',['id'=>$usr->id]) }}" ><span class="user-info"> {{ $usr->header }} </span></a>
                                        <p>{{ $usr->message }}</p>
                                    </div>
                                    </td>
                                    <td> <a class="btn btn-success" href="{{ route('editmessage',['id'=>$usr->id]) }}">Edit</a>
                                        <a  data-toggle="modal" data-target="#myModal"  class="btn btn-danger">Delete</a>

                                        <!-- Modal -->
                                        <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog model-sm">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Delete ?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure to delete !!</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="{{ route('deletemessage',['id'=>$usr->id]) }}" class="btn btn-danger">Delete</a>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </td>
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
