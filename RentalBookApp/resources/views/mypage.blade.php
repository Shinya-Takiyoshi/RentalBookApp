@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <table>
        <tr>
            <td>
                <a href="{{ route('mypage') }}" class="btn btn-outline-secondary mypage-menu">
                    {{ __('マイブック') }}

            </td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('selectGivebookList') }}" class="btn btn-outline-secondary mypage-menu">
                    {{ __('貸している本') }}</td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('selectTakebookList') }}" class="btn btn-outline-secondary mypage-menu">
                    {{ __('借りている本') }}</td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('bookUpload') }}" class="btn btn-outline-secondary mypage-menu">
                    {{ __('アップロード') }}</td>
        </tr>
    </table>
    @foreach($books as $book)
    <form action="/mypage/bookDelete" method="POST">
        @csrf
        <div class="container">
            <div class="container bg-success" style="padding:30px;margin:30px;width:768px">
                <img src="{{$book->book_image_path}}" name="bookImagePath" width="300" height="300">
                <div class="float-right">
                    <h4 width="200px">{{$book->title}}</h4>
                    <a class="btn bg-secondary" href="{{ route('bookUpdate',['book_id'=> $book->book_id]) }}">
                        {{ __('編集') }}
                    </a>
                    <input type="hidden" name="hidBookId" value="{{$book->book_id}}">
                    <input type="submit" class="btn bg-danger" name="deleteButton" onClick="delete_alert(event);return false;" value="削除">
                    </button>
                </div>
            </div>
        </div>
    </form>
    @endforeach
    <div>
        @endsection
        @section('jsconf')
        <script src="{{ asset('/js/common.js') }}"></script>
        @endsection