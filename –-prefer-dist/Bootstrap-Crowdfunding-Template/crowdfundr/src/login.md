---
layout: plain
title: Login
---
<div class="top-left links">
    <h3 class="text-muted"><a href="/" class="text-muted"><i class="fa fa-code text-success font-weight-bold" aria-hidden="true"></i></a></h3>
</div>

<div class="top-right links">
<a href="/register.html">Register</a>
</div>
<div class="container">
            <br />
            <br />
<div class="row mt-5 text-center">
        <div class="col-md-6 offset-md-3">

        <h1>{{page.title}}</h1>
        <p class="lead mb-1">
            Start visualizing your data easily today<br />
        </p>
                    <br />

    </div>
</div>   

<div class="row mt-5 ">
        <div class="col-md-10  offset-md-1">
            
	<form method="POST" action="/register" accept-charset="UTF-8" class="form-horizontal" autocomplete="off">

<div class="form-group row">
  <label for="example-text-input" class="col-4 col-form-label">Email address</label>
  <div class="col-8">
    <input class="form-control" type="text" value="" placeholder="e.g. jack@example.com" />
  </div>
</div>

<div class="form-group row">
  <label for="example-text-input" class="col-4 col-form-label">Password</label>
  <div class="col-8">
    <input class="form-control" type="password" value="" placeholder="*******" />
  </div>
</div>

<div class="form-group row">
  <label for="example-text-input" class="col-4 col-form-label"></label>
  <div class="col-8">

      <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Remember me
          </label>
        </div>

  </div>
</div>



  <br />
  <br />
  <div class="form-group">
    <div class="offset-sm-2 col-sm-8">
					  <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
    </div>
  </div>
</form>

<div class="row">
    <div class="offset-sm-2 col-sm-8 text-center">
        <a class="btn btn-link" href="password-reset.html">
            Forgot Your Password?
        </a>
    </div>        
</div>

</div>      
</div>      
</div>      
