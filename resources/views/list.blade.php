@extends('layout')
@section('contant')
    <div class="mx-5 mt-5">
        <h1 class="display-3 text-center">Product List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="">S NO</th>
                    <th scope="col" class="">Image</th>
                    <th scope="col" class="">Product Name</th>
                    <th scope="col" class="">Brand name</th>
                    <th scope="col" class="">Peoduct Description</th>
                    <th scope="col" class="">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $l)
                    <tr>
                        <th scope="row">{{ $l->id }}</th>
                        <td class="w-25"><img class="w-100" src="{{ asset('uploads/' . $l->img) }}" alt="image"></td>
                        <td>{{ $l->pname }}</td>
                        <td>{{ $l->bname }}</td>
                        <td class="w-25 text-break">{{ $l->pdess }}</td>
                        <td class="d-flex"><a href="{{route('details',['productid'=>$l])}}"><button class="btn btn-primary mx-1"><i
                                        class="bi bi-eye-fill"></i></button></a>
                            <a href="{{ route('update', ['updatepid' => $l->id]) }}"><button class="btn btn-success mx-1"><i
                                        class="bi bi-pencil-square"></i></button></a>

                            <a href="{{ route('delete', ['productlistid' => $l->id]) }}"><button
                                    class="btn btn-danger mx-1"><i class="bi bi-folder-minus"></i></button></a>
                        </td>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection
