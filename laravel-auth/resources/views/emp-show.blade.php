@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">
                    Employee:
                    {{ $emp -> firstname }}
                    {{ $emp -> lastname }}
                  </div>

                  <div class="card-body">
                    <ul>
                      <li>
                        FIRSTNAME: {{ $emp -> firstname }}
                      </li>
                      <li>
                        LASTNAME: {{ $emp -> lastname }}
                      </li>
                      <li>
                        DATE OF BIRTH: {{ $emp -> date_of_birth }}
                      </li>
                      <li>
                        PRIVATE CODE: {{ $emp -> private_code }}
                      </li>
                      <li>
                        LOCATION: {{ $emp -> location -> name }}
                        ({{ $emp -> location -> city }})
                      </li>
                    </ul>
                    @auth
                      <br><br>
                      <a class="btn btn-primary" href="">EDIT</a>
                      <a class="btn btn-danger" href="{{ route('emp.delete', $emp -> id) }}">DELETE</a>
                    @else
                      PLEASE LOGIN IF YOU WANT TO EDIT/DELETE EMPLOYEE 
                    @endauth
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
