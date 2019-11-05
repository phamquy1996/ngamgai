
        <!-- Header-->
@extends('admin.index')
@section('content')
<base href="{{asset('')}}">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Forms</a></li>
                    <li class="active">Basic</li>
                </ol>
            </div>
        </div>
    </div>
</div>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <strong>Basic Form</strong> Elements
                  </div>
                  <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                      <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Text Input</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label></div>
                        <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="Enter Email" class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                        <div class="col-12 col-md-9"><input type="password" id="password-input" name="password-input" placeholder="Password" class="form-control"><small class="help-block form-text">Please enter a complex password</small></div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Textarea</label></div>
                        <div class="col-12 col-md-9">
                          <textarea name="description" id="text" cols="30" rows="10" class="ckeditor" ></textarea>
                          <script type="text/javascript">
                            var editor = CKEDITOR.replace('description',{
                              language:'vi',
                              filebrowserImageBrowseUrl: '../../ckfinder/ckfinder.html?Type=Images',
                              filebrowserFlashBrowseUrl: '../../ckfinder/ckfinder.html?Type=Flash',
                              filebrowserImageUploadUrl: '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                              filebrowserFlashUploadUrl: '../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                            });
                          </script>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Select</label></div>
                        <div class="col-12 col-md-9">
                          <select name="select" id="select" class="form-control">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                          </select>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Radios</label></div>
                        <div class="col col-md-9">
                          <div class="form-check">
                            <div class="radio">
                              <label for="radio1" class="form-check-label ">
                                <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Option 1
                              </label>
                            </div>
                            <div class="radio">
                              <label for="radio2" class="form-check-label ">
                                <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Option 2
                              </label>
                            </div>
                            <div class="radio">
                              <label for="radio3" class="form-check-label ">
                                <input type="radio" id="radio3" name="radios" value="option3" class="form-check-input">Option 3
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{-- <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Inline Radios</label></div>
                        <div class="col col-md-9">
                          <div class="form-check-inline form-check">
                            <label for="inline-radio1" class="form-check-label ">
                              <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">One
                            </label>
                            <label for="inline-radio2" class="form-check-label ">
                              <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Two
                            </label>
                            <label for="inline-radio3" class="form-check-label ">
                              <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Three
                            </label>
                          </div>
                        </div>
                      </div> --}}
                      <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Checkboxes</label></div>
                        <div class="col col-md-9">
                          <div class="form-check">
                            <div class="checkbox">
                              <label for="checkbox1" class="form-check-label ">
                                <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Option 1
                              </label>
                            </div>
                            <div class="checkbox">
                              <label for="checkbox2" class="form-check-label ">
                                <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> Option 2
                              </label>
                            </div>
                            <div class="checkbox">
                              <label for="checkbox3" class="form-check-label ">
                                <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Option 3
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File input</label></div>
                        <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
                      </div>
                    </form>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                      <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                      <i class="fa fa-ban"></i> Reset
                    </button>
                  </div>
                </div>
                
              </div>

            </div>


        </div><!-- .animated -->
    </div><!-- .content -->


  </div><!-- /#right-panel -->

    <!-- Right Panel -->


    
    <script type="text/javascript" src="/js/ckfinder/ckfinder.js"></script>

@endsection