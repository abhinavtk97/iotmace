<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Post</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ url('css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{ url('css/colorpicker.css') }}" />
<link rel="stylesheet" href="{{ url('css/datepicker.css') }}" />
<link rel="stylesheet" href="{{ url('css/uniform.css') }}" />
<link rel="stylesheet" href="{{ url('css/select2.css') }}" />
<link rel="stylesheet" href="{{ url('css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{ url('css/matrix-media.css') }}" />
<link rel="stylesheet" href="{{ url('css/bootstrap-wysihtml5.css') }}" />
<link href="{{ url('font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>





<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="widget-box">
      @if(isset($_GET['saved']))
        <div class="alert alert-success"> Saved Successfully  &nbsp; &nbsp; <a class="btn btn-success" href="{{ route('home') }}" type="button">Go back to Dashboard</a>
        </div>

      @endif

      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Edit Post</h5>
      </div>
      <div class="widget-content">
        <label><h6>Heading:</h6>
          <form method="post" action="{{ route('posteditmessage') }}">
        <input type="text" value="{{ $message->header }}" name="header" class="form-control"></label>
        <div class="control-group">

            <div class="controls">
              <textarea class="textarea_editor span12" rows="6" name="message"  placeholder="Enter text ...">{!! $message->message !!}</textarea>
            </div>
            <button class="btn btn-success"  type="submit">Post</button>
            <a class="btn btn-danger" href="{{ route('home') }}" type="button">Cancel</a>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <input type="hidden" name="id" value="{{ $message->id }}">
          </form>
        </div>
      </div>
    </div>
  </div>
</div></div>

<!--end-Footer-part--> 
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/jquery.ui.custom.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/bootstrap-colorpicker.js') }}"></script>
<script src="{{ url('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ url('js/jquery.toggle.buttons.js') }}"></script>
<script src="{{ url('js/masked.js') }}"></script>
<script src="{{ url('js/jquery.uniform.js') }}"></script>
<script src="{{ url('js/select2.min.js') }}"></script>
<script src="{{ url('js/matrix.js') }}"></script>
<script src="{{ url('js/matrix.form_common.js') }}"></script>
<script src="{{ url('js/wysihtml5-0.3.0.js') }}"></script>
<script src="{{ url('js/jquery.peity.min.js') }}"></script>
<script src="{{ url('js/bootstrap-wysihtml5.js') }}"></script>
<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
