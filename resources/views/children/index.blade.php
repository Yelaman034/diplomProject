<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <!-- Alert -->
        @if(session('success'))
            <div class="alert alert-success" role="alert">
            {{session('success')}}
            </div>
        @endif
        <!-- Alert -->
        <div class="row">
            <div class="col-6">
                <h1>Хүүхдийн жагсаалт</h1>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
               <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                Хүүхэд нэмэх
                </button>
            </div>
            <table class='table table-hover'>
                <tr>
                    <th>Овог</th>
                    <th>Нэр</th>
                    <th>Төрсөн огноо</th>
                    <th>Регистер</th>
                    <th>Хүйс</th>
                    <th>Үйлдэл</th>
                </tr>
                @foreach($child as $child_data)
                <tr>
                    <td>{{$child_data->ovog}}</td>
                    <td>{{$child_data->ner}}</td>
                    <td>{{$child_data->date_of_birth}}</td>
                    <td>{{$child_data->r_number}}</td>
                    <td>{{$child_data->hvis}}</td>
                    <td><a href="/children/{{$child_data->id}}/edit" class="btn btn-warning btn-sm">Засах</a></td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>

   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- FORM -->
        <div class="container">
      <form action="/children/create" method="post">
      @csrf
        <div class="panel panel-default">
          <!-- <div class="panel-heading" style="background-color: white;">
            <div class="row">
              <div class="col-xs-6">
                  <h4>Хүүхдийн мэдээлэл нэмэх</h4>
              </div>
              </div>
          </div> -->
          <div class="panel-body">
            <div class="form-group">
              <label for="studentLName">Овог</label>
              <input type="text" class="form-control" id="LName" name="ovog" placeholder="Жишээ: Лхагвасүрэн">
            </div>
            <div class="form-group">
              <label for="studentFName">Нэр</label>
              <input type="text" class="form-control" id="FName" name="ner" placeholder="Жишээ: Батбаяр">
            </div>
            <div class="form-group">
            <label for="birthday">Төрсөн өдөр</label>
            <input type="date" class="form-control" id="birthday" name="date_of_birth">
            </div>
            <div class="form-group">
              <label for="studentId">Регистер дугаар</label>
              <input type="text" class="form-control" id="rId" name="r_number" placeholder="Регистер дугаар">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="studentGender">Хүйс</label>
              <select class="form-control" id="Gender" name="hvis">
                <option>-- Сонгох --</option>
                <option value="male">Эр</option>
                <option value="female">Эм</option>
              </select>
            </div>
            
          </div>
          
        </div>
      
    </div>
        <!-- FORM -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <div class="panel-footer" style="background-color: white;">
              <button type="submit" name="submit" class="btn btn-success">НЭМЭХ</button>
          </div>
          </form>
      </div>
    </div>
  </div>
</div>
    <!-- CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- CDN -->
   
</body>
</html>
