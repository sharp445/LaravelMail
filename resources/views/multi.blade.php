
@extends('layout.default')
@section('content')
<body>

<form id="regForm" action="{{ route('send_mail') }}" method="post">
    @method('post')
    @csrf



  <h1>Employee Information:</h1>

  @if(session()->has('message'))
  <div class="alert alert-succedd">
    {{session()->get('message')}}
  </div>
  @endif
  <!-- One "tab" for each step in the form: -->
    <!-- Step->1  -->
  <div class="tab">        
 
    <label for="date">Name:</label>
    <p><input type="name" name="fname"  placeholder="First name..." oninput="this.className = ''" ></p>
    <p><input type="name" name="lname" placeholder="Last name..." oninput="this.className = ''" ></p>
    
    <p>
        <label for="date">Date Of Birth:</label>
        <input type="date" name="date" placeholder="DoB..." oninput="this.className = ''" ></p>
       
    <label for="Gender">Gender:</label>

    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
    <label class="form-check-label" for="inlineRadio1" name="gender" value="1" {{{ (isset($product->status) && $product->status == '1') ? "checked" : "" }}}>Male</label>
    </div>
    <div class="form-check form-check-inline">

    <input class="form-check-input" type="radio" name="gender" value="female" id="inlineRadio1"  >
    <label class="form-check-label" for="inlineRadio1" name="gender" value="0"{{{ (isset($product->status) && $product->status == '0') ? "checked" : "" }}}>FeMale</label>
    </div> 

<br>

    
    <label for="Marital Status:">Marital Status:</label>
    <div class="form-check form-check-inline">

    <input class="form-check-input" type="radio" name="marital" value="UnMarried" id="inlineRadio1" >
    <label class="form-check-label" for="inlineRadio1" name="marital" value="1" {{{ (isset($product->status) && $product->status == '1') ? "checked" : "" }}}>UnMarried</label>
    </div>
    <div class="form-check form-check-inline">

    <input class="form-check-input" type="radio" name="marital" value="Married" id="inlineRadio1"  >
    <label class="form-check-label" for="inlineRadio1" name="marital" value="0" {{{ (isset($product->status) && $product->status == '0') ? "checked" : "" }}}>Married</label>
    </div>
    
    <p>
    <label for="E-mail">E-mail:</label>
    <input type="email" name="email" placeholder="E-mail..." oninput="this.className = ''" ></p>
    <p>
        <label for="Phone">Phone:</label>
        <input type="name" name="phone" placeholder="Phone..." oninput="this.className = ''" >
    </p>

    
    <p>
        <label for="nationality">Nationality:</label>
        <input type="name" name="nationality" placeholder="Nationality..." oninput="this.className = ''" ></p>
    
    <p>
         <label for="state">State:</label>
        <input type="name" name="state" placeholder="State..." oninput="this.className = ''" ></p>
        <p>
         <label for="state">Distric:</label>
        <input type="name" name="distric" placeholder="Distric..." oninput="this.className = ''" ></p>
    
    <div class="form-floating">
  <label for="floatingTextarea">Address:</label>
  <textarea class="form-control" name="address" placeholder="Enter Address here...." id="floatingTextarea"></textarea>
</div>

  </div>
 
  <!-- step-2  -->

  <div class="tab">
    <h1>Educational Qualification:</h1>
  <p>
    <label for="nationality">Highest Education:</label>
    <input type="name" name="education" placeholder="Highest Education..." oninput="this.className = ''" ></p>

    <p>
    <label for="institution">Institution:</label>
    <input type="name" name="institution" placeholder="Institution..." oninput="this.className = ''" ></p>
    <p>
    <label for="gyear">Year Of Graduation:</label>
    <input type="name" name="gyear" placeholder="Year Of Graduation..." oninput="this.className = ''" ></p>
    <p>
    <label for="department">Department:</label>
    <input type="name" name="department" placeholder="Department..." oninput="this.className = ''" ></p>

  </div>

  <!-- step-3  -->

  <div class="tab">
  <h1>Experience:</h1>
  <p>
    <label for="nationality">Company Name:</label>
    <input type="name" name="company" placeholder="Company Name..." oninput="this.className = ''" ></p>

    <p>
    <label for="nationality">Position:</label>
    <input type="name" name="position" placeholder="Position..." oninput="this.className = ''" ></p>
    <p>
    <label for="Experience">Experience:</label>
    <input type="name" name="year" placeholder="Experience..." oninput="this.className = ''" ></p>
    <p>
    <label for="place">Work Place:</label>
    <input type="name" name="place" placeholder="Work Place..." oninput="this.className = ''" ></p>

  </div>

  <!-- Step->4  -->
  <div class="tab">
    <!-- <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p> -->
    <label for="exampleInputEmail">Subject</label>
<input type="text" class="form-control" name="sub" required>
<label for="exampleInputEmail">Message</label>
<textarea class="form-control" name="mess" rows="5"
required></textarea>
</div>
<!-- <div class="form-group"> -->

<!-- </div>
  -->
  <!-- </div> -->
  <div style="overflow:auto;" class="m-3">
    <div style="">
    <!-- float:right; -->
      <button type="button" class="float-left" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" class="float-right" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>


</body>

@endsection

