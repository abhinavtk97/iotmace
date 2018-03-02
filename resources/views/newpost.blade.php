<!DOCTYPE html>
<html lang="en">
<head>
<title>New Post</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" href="https://cdn.rawgit.com/yahoo/pure-release/v0.6.0/pure-min.css">


<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/jquery.tag-editor.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>





<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="widget-box">
      @if(isset($_GET['true']))
        <div class="alert alert-success"> Saved Successfully</div>

      @endif

      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>New Post</h5>
      </div>
      <div class="widget-content">

          <form method="post" action="{{ route('postnewmessage') }}" enctype="multipart/form-data">
              <label><h6>Heading:</h6>
                  @if ($errors->has('header'))
                      <span class="invalid-feedback">
                                        <strong>{{ $errors->first('header') }}</strong>
                                    </span>
                  @endif
        <input type="text" name="header" value="{{ old('header') }}" class="form-control"></label>
        <div class="control-group">

            <div class="controls">
              <textarea class="textarea_editor span12" rows="6" name="message" placeholder="Enter text ...">{{ old('message') }}</textarea>
                @if ($errors->has('message'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                @endif
            </div>
            <input type="button" id="submitButton" class="btn btn-download" data-toggle="modal" data-target="#confirm-submit" value="Post" name="submit">

            <!-- Modal -->
            <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            TAGS
                        </div>

                        <div class="modal-body">
                            <p>Input each tag and press enter </p>
                            <div class="bs">
                                @if ($errors->has('tags'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tags') }}</strong>
                                    </span>
                                @endif
                                <textarea id="demo1">{{ old('tags') }}</textarea>
                                <input type="hidden" id="tags" name="tags">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-more" data-dismiss="modal" >Cancel</button>
                            <button type="submit" class="btn btn-download">Submit
                            </button></div>
                    </div>
                </div>
            </div>


            <a class="btn btn-danger" href="{{ route('home') }}" type="button">Cancel</a>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
          </form>
        </div>
      </div>
    </div>
  </div>
</div></div>

<!--end-Footer-part--> 
<script src="js/jquery.min.js"></script>

<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/masked.js"></script>
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script>
<script src="js/wysihtml5-0.3.0.js"></script>
<script src="js/jquery.peity.min.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script>
<script src="https://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
<script src="{{ url('js/jquery.tag-editor.js') }}"></script>
<script src="{{ url('js/jquery.caret.min.js') }}"></script>
<script>
    $(function() {


        $('#demo1').tagEditor({
            onChange: function(field, editor, tags) {

                $("#tags").val($('#demo1').tagEditor('getTags')[0].tags );
            }

        }).css('display', 'block').attr('readonly', true);

    });
</script>

<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
