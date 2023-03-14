@include('partials.header')

<form>
<div style="width: 600px;height: 240px;margin:10px 5px 15px 20px;">
<h3>Login Page</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" 
    class="form-label">Email address</label>

    <input type="email" 
    class="form-control" 
    id="exampleInputEmail1" 
    aria-describedby="emailHelp">
    
    <div id="emailHelp" c
    lass="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" 
    class="form-label">Password</label>
    
    <input type="password" 
    class="form-control" 
    id="exampleInputPassword1">
  </div>

  <button type="submit" 
  class="btn btn-primary">Submit</button>
</form>
</div>
@include('partials.footer')