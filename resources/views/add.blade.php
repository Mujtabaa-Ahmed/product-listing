@extends('layout')
@section('contant')
    <div class="container mt-5 mb-5">
        <h1 class="text-center display-3">Add Product</h1>

        <form action="{{ route('form') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" name="bname" value="{{old('bname')}}" class="form-control w-50" id="exampleFormControlInput1"
                    placeholder="Brand Name">
                <span class="text-danger">
                    @error('bname')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <input type="text" name="pname" value="{{old('pname')}}" class="form-control" id="exampleFormControlInput1"
                    placeholder="Product Name">
                    <span class="text-danger">
                      @error('pname')
                          {{ $message }}
                      @enderror
                  </span>
            </div>
            <div class="form-group">
                <input type="text" name="pprice" value="{{old('pprice')}}" class="form-control w-25" id="exampleFormControlInput1"
                    placeholder="Product Price">
                    <span class="text-danger">
                      @error('pprice')
                          {{ $message }}
                      @enderror
                  </span>
            </div>

            <div class="form-group">
              <input type="file" name="img" value="{{old('img')}}" class="form-control w-25" id="exampleFormControlInput1"
                  placeholder="Product Price">
                  <span class="text-danger">
                    @error('img')
                        {{ $message }}
                    @enderror
                </span>
          </div>


            <div class="form-group">
              
                <textarea class="form-control" name="pdess"  id="exampleFormControlTextarea1" rows="7"
                    placeholder="Add Product Description">{{old('pdess')}}</textarea>
                    <span class="text-danger">
                @error('pdess')
                    {{ $message }}
                @enderror
            </span>
            </div>
            <div class="text-center"><button type="submit" name="" class="btn btn-primary w-25">Add</button></div>
        </form>
    </div>
@endsection
